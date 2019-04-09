<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 26/10/18
 * Time: 03:03
 */

defined('BASEPATH') OR exit('No direct script access allowed');

Class Home extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function index(){
        $this->template->load('template/header2', 'home2');
    }
}
