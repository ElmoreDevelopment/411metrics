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

        if(isset($post_data['end_date'])){
            $end_date = $post_data['end_date'];
        }

        if(isset($post_data['tz_offset'])){
            $tz_offset = $post_data['tz_offset'] * 60;
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

        $return_array = [

        ];

        $calls_per_day_by_camp = [];
        $avg_calls_per_day_by_campaign = [];
        $total_calls_by_campaign = [];
        $avg_call_duration_by_campaign = [];
        $time_hotspots = [
            'total'=> [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]
        ];

        $durations = [];


        $longest_call = 0;
        $total_call_duration = 0;
        foreach($query->result() as $row){
            $start_time = $row->start_time;
            $end_time = $row->end_time;
            $duration_seconds = $end_time - $start_time;
            $total_call_duration = $total_call_duration + $duration_seconds;
            $start_time_minus_offset = $start_time - $tz_offset;
            $hour = date("g", $start_time_minus_offset);
            if($duration_seconds > $longest_call) {
                $longest_call = $duration_seconds;
            }

            $duration = gmdate("H:i:s", $duration_seconds);
            $source_name = $row->source_name;

            $day_index = strtotime(date('F j, Y', $start_time));

            if(!array_key_exists($source_name, $calls_per_day_by_camp)){
                $calls_per_day_by_camp[$source_name] = [];
            }

            if(!array_key_exists($source_name, $avg_call_duration_by_campaign)){
                $avg_call_duration_by_campaign[$source_name] = [];
            }

            if(!array_key_exists($source_name, $durations)){
                $durations[$source_name] = [];
            }

            if(!array_key_exists($source_name, $time_hotspots)){
                $time_hotspots[$source_name] = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
            }

            if(!array_key_exists($hour, $time_hotspots[$source_name])){
                $time_hotspots[$source_name][$hour] = 1;
            } else {
                $time_hotspots[$source_name][$hour] = $time_hotspots[$source_name][$hour] + 1;
            }

            $time_hotspots['total'][$hour] = $time_hotspots['total'][$hour] + 1;

            $durations[$source_name][] = $duration_seconds;

            $calls_in_selection[$day_index][] = [
                'id'=> $row->id,
                'date'=> $start_time,
                'duration'=> $duration,
                'source_name' => $source_name,
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
            $to_add_to_campaign = [];
            if(array_key_exists($date_index, $calls_in_selection)){
                $call_count = count($calls_in_selection[$date_index]);
                $calls_on_date = $calls_in_selection[$date_index];


                foreach($calls_on_date as $call){
                    $phones[] = $call['caller_number'];

                    $source_name = $call['source_name'];
                    if(array_key_exists($source_name, $to_add_to_campaign)){
                        $to_add_to_campaign[$source_name] = $to_add_to_campaign[$source_name] + 1;
                    } else {
                        $to_add_to_campaign[$source_name] = 1;
                    }
                }



                $unique_count = count(array_unique($phones));


            }

            foreach($calls_per_day_by_camp as $sName => $array){
                if(array_key_exists($sName, $to_add_to_campaign)){
                    $amount = $to_add_to_campaign[$sName];
                } else {
                    $amount = 0;
                }

                $calls_per_day_by_camp[$sName][] = $amount;
            }

            $calls_per_day['total_calls'][] = $call_count;
            $calls_per_day['unique_calls'][] = $unique_count;

            $date_index += 86400;
        }

        //get avg calls per day by campaign
        foreach($calls_per_day_by_camp as $campaign => $arr){
            if(!empty($arr)){
                $avg_calls_per_day_by_campaign[$campaign] = round((array_sum($arr)/count($arr)), 2);
            }

            $total_calls_by_campaign[$campaign] = array_sum($arr);
        }

        //get avg duration by campaign
        foreach($durations as $campaign => $duration_arr){
            $avg_seconds = round(array_sum($duration_arr)/count($duration_arr), 2);
            $avg_string = gmdate("H:i:s", $avg_seconds);
            $avg_call_duration_by_campaign[$campaign] = [$avg_seconds, $avg_string];
        }

        $minutes_used = $total_call_duration / 60;
        $avg_duration_seconds = round($total_call_duration / array_sum($calls_per_day['total_calls']), 1);

        $return_array['calls_per_day'] = $calls_per_day;
        $return_array['calls_per_day_by_camp'] = $calls_per_day_by_camp;
        $return_array['avg_calls_per_day_by_camp'] = $avg_calls_per_day_by_campaign;
        $return_array['total_calls_by_camp'] = $total_calls_by_campaign;
        $return_array['avg_call_duration_by_camp'] = $avg_call_duration_by_campaign;
        $return_array['time_hotspots'] = $time_hotspots;
        $return_array['metrics']['total_calls'] = array_sum($calls_per_day['total_calls']);
        $return_array['metrics']['unique_calls'] = array_sum($calls_per_day['unique_calls']);
        $return_array['metrics']['unique_percentage'] = round(array_sum($calls_per_day['unique_calls']) / array_sum($calls_per_day['total_calls']), 3) * 100;
        $return_array['metrics']['minutes_used'] = round($minutes_used, 1);
        $return_array['metrics']['longest_call'] = gmdate("H:i:s", $longest_call);
        $return_array['metrics']['avg_call_duration'] = gmdate("H:i:s", $avg_duration_seconds);

        echo json_encode($return_array);
    }

}