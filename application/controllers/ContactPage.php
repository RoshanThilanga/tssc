<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    $this->load->library('email');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[4]|max_length[16]');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|min_length[6]|max_length[60]');
    $this->form_validation->set_rules('message', 'Message', 'trim|required|min_length[12]|max_length[200]');

    if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('contact');
    } else {

        $name = $this->input->post('name');
        $from_email = $this->input->post('email');
        $message = $this->input->post('message');

        
        $to_email = 'adithyashashith@gmail.com'; 

       
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_port'] = '587';
        $config['smtp_user'] = 'mail@domain.com';
        $config['smtp_pass'] = 'mailpassword';
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;d
        $config['newline'] = "\r\n";

        $this->email->initialize($config);                        

   
        $this->email->from($from_email, $name);
        $this->email->to($to_email);
        $this->email->message($message);
        
        if ($this->email->send())
        {
            $this->session->set_flashdata('msg','<div class="alert alert-success">Mail sent!</div>');

            redirect('contact');
        } else {
            $this->session->set_flashdata('msg','<div class="alert alert-danger">Problem in sending</div>');
            $this->load->view('contact');
        }

    }
}

?>
