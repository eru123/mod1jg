<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AvailEveCon extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $check_in = $this->input->post('check_in');
            $check_out = $this->input->post('check_out');

            // Check if check-in date is before check-out date
            if (strtotime($check_in) >= strtotime($check_out)) {
                $this->session->set_flashdata('error', 'Check-out date must be after check-in date.');
                redirect('availevent'); // Redirect back to the booking form
            }

            $this->session->set_userdata('check_in', $check_in);
            $this->session->set_userdata('check_out', $check_out);
            redirect('EventCon');
        }

        // Load the view with possible error messages
        $data['error'] = $this->session->flashdata('error');
        $this->load->view('availevent', $data);
    }
}

