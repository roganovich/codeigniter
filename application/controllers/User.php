<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User extends CI_Controller{
    
    public function __construct() {
        parent::__construct();  
    }
    
    public function login() {
       
        if($this->input->post('login')=='test' && $this->input->post('pass')=='1234'){
           $newdata = array(
                    'logged_in' => TRUE
            );
            $this->session->set_userdata($newdata);
        }
        redirect(base_url().'news/');
    }
    
    public function logout() {
        $this->session->unset_userdata('logged_in');
        redirect(base_url().'news/');
    }
}