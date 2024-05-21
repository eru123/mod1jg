<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index()
    {
        $this->load->helper('url'); // Load URL Helper
        $this->load->view('header');
        $this->load->view('index');
        // Load other views or perform other operations as needed
    }

    public function about()
    {
        $this->load->helper('url'); // Load URL Helper
        $this->load->view('about');
    }

    public function facilities()
    {
        $this->load->helper('url'); // Load URL Helper
        $this->load->view('facilities');
    }

	public function roomscot()
    {
        $this->load->helper('url'); // Load URL Helper
        $this->load->view('roomscot');
    }

	public function faqs()
    {
        $this->load->helper('url'); // Load URL Helper
        $this->load->view('faqs');
    }

	public function contactus()
    {
        $this->load->helper('url'); // Load URL Helper
        $this->load->view('contactus');
    }

	public function avail()
    {
        $this->load->helper('url'); // Load URL Helper
        $this->load->view('avail');
    }

    public function availevent()
    {
        $this->load->helper('url'); // Load URL Helper
        $this->load->view('availevent');
    }
    // Add more methods for other pages as needed
}
?>
