<?php

/**
 * Created by PhpStorm.
 * User: sewal
 * Date: 8/29/2017
 * Time: 10:11 AM
 */
class Services extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->load->helper(array('url'));
        $this->load->model(array('slides_model','content_model','contacts_model','partners_model','services_model','gallery_model'));

        $this->data['page']	= 'services';
        #adminbaselink
        $this->data['uploads'] = "http://localhost:81/shachah_admin/uploads/";
        $this->data['phone'] = $this->contacts_model->get_contact(array('contact_id'=> 10));

    }

    public function index()
    {
        #load page
        $services = $this->services_model->get_services();
        $this->data['title'] = "Co Curricullum";

        $this->data['services'] = $services;
        $this->load->view('service',$this->data);

    }

    public function faqs()
    {
        $this->data['page'] = 'faq';
        $this->data['title'] = 'FAQs';

        $this->data['faqs'] = $this->content_model->get_allcontent(array('ctype_id'=> 6));
        $this->load->view('faq',$this->data);
    }

}