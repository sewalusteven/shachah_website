<?php

/**
 * Created by PhpStorm.
 * User: sewal
 * Date: 7/3/2017
 * Time: 7:59 PM
 */
class Gallery extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->load->helper(array('url','slug'));
        $this->load->model(array('slides_model','content_model','contacts_model','partners_model','services_model','gallery_model'));

        $this->data['page']	= 'gallery';
        #adminbaselink
        $this->data['uploads'] = "http://localhost/shachah_admin/uploads/";
        $this->data['base'] = "http://localhost/shachah_admin/";
        $this->data['phone'] = $this->contacts_model->get_contact(array('contact_id'=> 1));
    }

    public function index()
    {
        $this->data['title'] = "Our Gallery";

        $galleries = $this->gallery_model->get_galleries();

        foreach ($galleries as $key => $gallery) {
            # get category
            $cat = $this->gallery_model->get_gcategory(array('gcategory_id'=> $gallery['gcategory_id']));
            $galleries[$key]['category'] = $cat['category'];
        }

        $gcategories = $this->gallery_model->get_gcategories();


        #load page
        $this->data['galleries'] = $galleries;
        $this->data['categories'] = $gcategories;
        $this->load->view('gallery',$this->data);
    }

}