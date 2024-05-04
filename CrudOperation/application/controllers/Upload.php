<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Upload
 *
 * @author hp
 */
class Upload extends CI_Controller{
    //put your code here
    public function index() {
        this->load->view('vw_upload');
    }
}
