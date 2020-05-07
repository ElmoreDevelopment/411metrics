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

}