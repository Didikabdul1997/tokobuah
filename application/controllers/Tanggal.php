<?php

defined('BASEPATH') or exit('No direct scripit access allowe');

class Tanggal extends CI_Controller
{
    public function index()
    {
        $this->load->view('tanggal');
    }
}
