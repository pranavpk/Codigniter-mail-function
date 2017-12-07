<?php
defined ('BASEPATH') OR EXIT ('No direct script access allowed ');
class Mail extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library(array('session','form_validation','pagination'));
        $this->load->helper(array('url','form','string'));
        $session_array = $this->session->userdata('logged_in_admin');
        if(!isset($session_array))
        {
            redirect('Login');
        }
    }

    //MAIL FUNCTION
    public function send_mail($data) {

        $from_email = "info@myneedfinder.com";
        $to_email = $data['to_email'];
        $subject = $data['subject'];
        $message = $data['message'];
        //Load email library
        $this->load->library('email');
        $this->email->set_mailtype('html');
        $this->email->from($from_email, 'My needfinder');
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($message);
        //Send mail
        if($this->email->send())
        {
            return true;
        }
        else
        {
            return false;
        }

    }



}


?>
