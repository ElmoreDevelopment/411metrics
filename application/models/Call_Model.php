<?php
class Call_Model extends CI_Model {

    public function get_all_calls()
    {
        $query = $this->db->query('SELECT c.*, s.name as source_name FROM 411metrics.calls c, 411metrics.sources s WHERE s.id = c.source_id');
        $return = [];

        foreach($query->result() as $row){
            $start_time = $row->start_time;
            $end_time = $row->end_time;
            $duration_seconds = $end_time - $start_time;
            $duration = gmdate("H:i:s", $duration_seconds);

            $return[] = [
                'id'=> $row->id,
                'date'=> $start_time,
                'duration'=> $duration,
                'source_name' => $row->source_name,
                'caller_name'=> $row->caller_name,
                'caller_number'=> $row->caller_number,
                'location'=> $row->city . ', ' . $row->state,
                'status' => $row->status
            ];
        }

        return json_encode($return);
    }

    public function get_calls_for_charts($post_data){
        $start_date = 0;
        $end_date = 0;

        if(isset($post_data['start_date'])){
            $start_date = $post_data['start_date'];
        }

        if($end_date == 0){
            $end_date = time() + 86400;
        }

        $string_query = "SELECT c.*, s.name as source_name FROM 411metrics.calls c, 411metrics.sources s WHERE s.id = c.source_id AND c.start_time >= '$start_date' AND c.start_time < '$end_date'";
        $query = $this->db->query($string_query);
        $calls_in_selection = [];
        $calls_per_day = [
            'total_calls' => [],
            'unique_calls' => []
        ];

        $calls_per_day_by_camp = [];
        $avg_calls_per_day_by_campaign = [];
        $total_calls_by_campaign = [];
        $avg_call_duration_by_campaign = [];
        $time_hotspots = [];

        foreach($query->result() as $row){
            $start_time = $row->start_time;
            $end_time = $row->end_time;
            $duration_seconds = $end_time - $start_time;
            $duration = gmdate("H:i:s", $duration_seconds);

            $day_index = strtotime(date('F j, Y', $start_time));

            $calls_in_selection[$day_index][] = [
                'id'=> $row->id,
                'date'=> date('F j, ', $start_time),
                'duration'=> $duration,
                'source_name' => $row->source_name,
                'source_id' => $row->source_id,
                'caller_name'=> $row->caller_name,
                'caller_number'=> $row->caller_number,
                'location'=> $row->city . ', ' . $row->state,
                'status' => $row->status
            ];
        }

        $date_index = $start_date;
        while($date_index < $end_date){
            $phones = [];
            //get calls per day
            $call_count = 0;
            $unique_count = 0;
            if(array_key_exists($date_index, $calls_in_selection)){
                $call_count = count($calls_in_selection[$date_index]);

                $calls_on_date = $calls_in_selection[$date_index];
                foreach($calls_on_date as $call){
                    $phones[] = $call['caller_number'];
                }

                $unique_count = count(array_unique($phones));
            }

            $calls_per_day['total_calls'][] = $call_count;
            $calls_per_day['unique_calls'][] = $unique_count;

            $date_index += 86400;
        }

        echo json_encode($calls_per_day);
    }

}