<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RoomCon extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function index()
    {
        // Pass session data to the view
        $data = [
            'check_in' => $this->session->userdata('check_in'),
            'check_out' => $this->session->userdata('check_out')
        ];

        $this->load->view('book', $data);
        log_message('debug', 'Fetched Session Data: ' . $this->session->userdata('check_in'));

    }
}
