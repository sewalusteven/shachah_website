<?php

/**
 * Created by PhpStorm.
 * User: sewal
 * Date: 7/4/2017
 * Time: 10:00 AM
 */
class Slides_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_slides($data = "")
    {
        if($data == "")
        {
            //all slides
            $qry = $this->db->get('slides');
        }
        else
        {
            $qry = $this->db->get_where('slides',$data);
        }

        return $qry->result_array();
    }

    public function get_slide($data)
    {
        //get all packages
        $qry = $this->db->get_where('slides',$data);
        return $qry->row_array();
    }

    public function add_slide($data)
    {
        //add package
        $this->db->insert('slides',$data);
        return $this->db->insert_id();
    }

    public function update_slide($data,$id)
    {
        //update package
        $this->db->where('slide_id',$id);
        return $this->db->update('slides',$data);
    }

    public function delete_slide($id)
    {
        return $this->db->delete('slides', array('slide_id' => $id));
    }



    public function count_slides($data = "")
    {
        #count slides
        $this->db->from('slides');
        $this->db->where($data);
        return $this->db->count_all_results();
    }

}