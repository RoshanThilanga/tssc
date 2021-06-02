<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->view('contact');
    }

    function submit() {
        header('Content-Type: application/x-json; charset=utf-8');
        $data['name'] = $this->input->post('form_name');
        $data['email'] = $this->input->post('form_email');
        $data['message'] = $this->input->post('form_message');
        $data['subject'] = 'Contact Form';
//        $data['body'] = 'SDFSDFed edwe';
        $data['body'] = $this->load->view('mails/contact', $data, true);
        $result['status'] = $this->sendEmail($data['name'], $data['subject'], $data['body'], email, $data['email'], cc, '');
        if ($result['status']) {
            $result['message'] = 'Mail Sent';
        } else {
            $result['message'] = 'Mail Not Sent';
        }
        echo(json_encode($result));
    }

    function sendEmail($name, $subject, $body, $to, $replyto, $cc, $bcc) {
        $this->load->library('email');
        $this->email->set_newline("\r\n");
        $from = smtp_user;

//        $img = '';
        $this->load->library('email');
        $this->email->from($from, $name);
        $this->email->to($to);
        if ($cc != '') {
            $this->email->cc($cc);
        }
        if ($replyto != '') {
            $this->email->reply_to($replyto, $name);
        }
        if ($bcc != '') {
            $this->email->bcc($bcc);
        }
        $this->email->subject($subject);
        $this->email->message($body);
        if (!$this->email->send()) {
            $output = $this->email->print_debugger();
            return $output;
        } else {
            return TRUE;
        }
    }

}
