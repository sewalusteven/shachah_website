<?php

/**
 * Created by PhpStorm.
 * User: sewal
 * Date: 7/3/2017
 * Time: 7:19 PM
 */
class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session','email'));
        $this->load->helper(array('url'));
        $this->load->model(array('slides_model','content_model','contacts_model','partners_model','services_model','gallery_model'));

        $this->data['page']	= 'contact';
        #adminbaselink
        $this->data['uploads'] = "http://localhost/shachah_admin/uploads/";
        $this->data['phone'] = $this->contacts_model->get_contact(array('contact_id'=> 1));
    }


    public function index()
    {
        #load page
        $this->data['title'] = 'Contact Us';
        $this->data['message'] = "";

        
        if($this->input->post())
        {
            $fData = $this->input->post();

            $send = $this->sendmail_contact($fData['email'],$fData['name'],$fData['subject'],$fData['message']);
            
            if($send == FALSE)
            {
                $this->data['message'] = '<span class="alert alert-danger">Message has not been sent </span>';
                $this->load->view('contact',$this->data);
            }
            else
            {
                $this->data['message'] = '<span class="alert alert-success">Message has been sent </span>'; 
                $this->load->view('contact',$this->data);
                
            }
            

            
        }else
        {
            $this->load->view('contact',$this->data);
        }

        //$this->load->view('contact',$this->data);
    }
    
    
    function sendmail_contact($from,$from_name,$subject,$message,$to = 'biyinzika@hotmail.com')
    {
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'mail.biyinzikaenterprises.com';
        $config['smtp_user'] = 'web@biyinzikaenterprises.com';
        $config['smtp_pass'] = '%Admin%2019';
        $config['smtp_port'] = '26';
        $config['charset'] = 'iso-8859-1';
        $config['mailpath'] = '/usr/sbin/sendmail';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;

        $this->email->initialize($config);

        $this->email->from($from, $from_name);
        $this->email->to($to);

        $this->email->subject($subject);
        $this->email->message($message);

        return $this->email->send();
    }

}