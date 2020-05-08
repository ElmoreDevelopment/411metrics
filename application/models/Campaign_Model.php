<?php
class Campaign_Model extends CI_Model {

    public function get_campaigns_for_user()
    {
        $query = $this->db->query('SELECT * FROM 411metrics.sources');
        $return = [];

        foreach($query->result() as $row){
            $return[] = [
                'id'=> $row->id,
                'name'=> $row->name,
                'forward_to'=> $row->forward_to,
                'campaign_number' => $row->campaign_number
            ];
        }

        return $return;
    }

    public function update_campaign($post_data)
    {
        if(isset($post_data['name'])){
            $name = $post_data['name'];
        }

        if(isset($post_data['number'])){
            $number = $post_data['number'];
        }

        if(isset($post_data['forward'])){
            $forward = $post_data['forward'];
        }

        if(isset($post_data['id'])){
            $id = $post_data['id'];
        }

        $query = $this->db->query("UPDATE 411metrics.sources SET `name` = '$name', `campaign_number` = '$number', `forward_to` = '$forward' WHERE id='$id'");
    }

}