<?php

/**
 * Created by PhpStorm.
 * User: sewal
 * Date: 7/4/2017
 * Time: 10:18 AM
 */
class Content_model extends CI_Model
{
    public function __construct(){
        $this->load->database();
    }

    public function add_content($data){
        $this->db->insert('content',$data);
        return $this->db->insert_id();

    }

    public function get_content($data){
        $query = $this->db->get_where('content',$data);
        return $query->row_array();
    }

    public function get_allcontent($data = array()){
        //check if there is no where
        if($data === array()){
            $query = $this->db->get('content');

        }else{
            $query = $this->db->get_where('content', $data);
        }

        return $query->result_array();
    }

    public function edit_content($id, $data){
        $this->db->where('content_id', $id);
        return $this->db->update('content',$data);
    }

    public function count_content($data = "")
    {
        #count clinics
        $this->db->from('content');
        $this->db->where($data);
        return $this->db->count_all_results();
    }

    public function delete_content($id)
    {
        return $this->db->delete('content', array('content_id' => $id));
    }

    //content categories
    public function get_categories($data = "")
    {
        //get all categories
        if($data == "")
            $qry = $this->db->get('content_type');
        else
            $qry = $this->db->get_where('content_type',$data);

        return $qry->result_array();
    }

    public function get_category($data){
        $query = $this->db->get_where('content_type',$data);
        return $query->row_array();
    }

    public function add_category($data)
    {
        //add package
        $this->db->insert('content_type',$data);
        return $this->db->insert_id();
    }

    public function update_category($data,$id)
    {
        //update feature
        $this->db->where('ctype_id',$id);
        return $this->db->update('content_type',$data);
    }

    #mobile money
    public function get_instruction($data){
        $query = $this->db->get_where('mobile_money',$data);
        return $query->row_array();
    }

}