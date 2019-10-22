<?php
/**
 * Created by PhpStorm.
 * User: sewal
 * Date: 5/14/2018
 * Time: 3:40 PM
 */

class Blogs extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session'));
        $this->load->helper(array('url','slug'));
        $this->load->model(array('slides_model','blogs_model','content_model','contacts_model','partners_model','services_model','gallery_model'));

        $this->data['page']	= 'events';
        #adminbaselink
        $this->data['uploads'] = "http://localhost/shachah_admin/uploads/";
        $this->data['phone'] = $this->contacts_model->get_contact(array('contact_id'=> 1));
    }

    public function index()
    {

    }

    public function events()
    {
        $this->data['page'] = 'events';
        $this->data['title'] = 'Events';

        $events = $this->blogs_model->get_events(array('isactive'=> 1, 'istype'=> 'event'));

        $this->data['events'] = $events;
        $this->load->view('events',$this->data);
    }

    public function news()
    {
        $this->data['page'] = 'news';
        $this->data['title'] = 'Announcements';

        $news = $this->blogs_model->get_events(array('isactive'=> 1, 'istype'=> 'news'));

        $this->data['news'] = $news;
        $this->load->view('news',$this->data);

    }

    public function single($id)
    {
        $single = $this->blogs_model->get_event(array('event_id'=> $id));

        if($single['istype'] == 'news')
        {
            $this->data['crumb'] = 'Annoucements';
            $this->data['crumburl'] = 'blogs/news';
            $this->data['page'] = 'news';
        }else{
            $this->data['crumb'] = 'events';
            $this->data['crumburl'] = 'blogs/events';
            $this->dta['page'] = 'events';
        }

        $this->data['title'] = ucwords($single['name']);
        $this->data['single'] = $single;


        $this->load->view('single',$this->data);

    }

    function truncate($text, $chars = 100) {
        if (strlen($text) <= $chars) {
            return $text;
        }
        $text = $text." ";
        $text = substr($text,0,$chars);
        $text = substr($text,0,strrpos($text,' '));
        $text = $text."...";
        return $text;
    }


}