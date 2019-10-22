<?php

/**
 * Created by PhpStorm.
 * User: sewal
 * Date: 7/3/2017
 * Time: 6:56 PM
 */
class About extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->load->helper(array('url'));
        $this->load->model(array('slides_model','content_model','contacts_model','partners_model','services_model'));

        $this->data['page']	= 'about';
        #adminbaselink
        $this->data['baselink'] = "http://admin.biyinzikaenterprises.com/";
        $this->data['services'] =  $this->services_model->get_services();
    }


    public function index()
    {
        #load page
        $this->data['title'] = 'About Us';

        $this->data['background'] = $this->content_model->get_content(array('content_id'=>19));
        $this->data['aboutsmall'] = $this->content_model->get_content(array('content_id'=>18));




        #contacts
        $this->data['address'] = $this->contacts_model->get_contact(array('contact_id'=>3));
        $this->data['phone'] = $this->contacts_model->get_contact(array('contact_id'=>2));
        $this->data['twitter'] = $this->contacts_model->get_contact(array('contact_id'=>6));
        //$this->data['linkedin'] = $this->contacts_model->get_contact(array('contact_id'=>4));
        $this->data['facebook'] = $this->contacts_model->get_contact(array('contact_id'=>5));
        $this->data['youtube'] = $this->contacts_model->get_contact(array('contact_id'=>7));
        //$this->data['skype'] = $this->contacts_model->get_contact(array('contact_id'=>7));
        $this->data['email'] = $this->contacts_model->get_contact(array('contact_id'=>1));

        $this->load->view('about',$this->data);
    }

}