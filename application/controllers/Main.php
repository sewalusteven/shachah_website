<?php

/**
 * Created by PhpStorm.
 * User: sewal
 * Date: 7/3/2017
 * Time: 6:04 PM
 */
class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->load->helper(array('url','slug'));
        $this->load->model(array('slides_model','content_model','contacts_model','partners_model','services_model','gallery_model'));

        $this->data['page']	= 'home';
        #adminbaselink
        $this->data['uploads'] = "http://localhost:81/shachah_admin/uploads/";
        $this->data['phone'] = $this->contacts_model->get_contact(array('contact_id'=> 1));

    }


    public function index()
    {
        #load page
        $this->data['title'] = 'Home Page';

        #home slides
        $this->data['slides'] = $this->slides_model->get_slides();

        #section 1
        $this->data['core'] = $this->content_model->get_content(array('content_id'=> 20));
        $this->data['char'] = $this->content_model->get_content(array('content_id'=> 21));
        $this->data['aim'] = $this->content_model->get_content(array('content_id'=> 22));

        #section 2
        $this->data['principle'] = $this->content_model->get_content(array('content_id'=> 23));

        #section 3
        $this->data['galleries'] = $this->gallery_model->get_galleries('',6);

        # section 4
        $this->data['registration'] = $this->content_model->get_content(array('content_id'=> 24));

        $this->load->view('home',$this->data);
    }

    public function about()
    {

        $this->data['page'] = 'about';
        $this->data['title'] = 'About Us';

        #section 1
        $this->data['principle'] = $this->content_model->get_content(array('content_id'=> 23));

        #section 2
        $this->data['core'] = $this->content_model->get_content(array('content_id'=> 20));
        $this->data['char'] = $this->content_model->get_content(array('content_id'=> 21));
        $this->data['aim'] = $this->content_model->get_content(array('content_id'=> 22));

        #section 3
        $this->data['staff'] = $this->content_model->get_content(array('content_id'=> 31));
        $this->data['parent'] = $this->content_model->get_content(array('content_id'=> 32));
        $this->data['registration'] = $this->content_model->get_content(array('content_id'=> 24));

        $this->load->view('about',$this->data);
    }

}