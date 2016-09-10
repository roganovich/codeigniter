<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class News extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('NewsModel');
    }
    
    
    public function index() {
        $data['news']=$this->NewsModel->getNewsList();
    
        $data['title']='Список новостей';
       // $this->load->view('news/index',$data);
        $this->load->library('Custom_smarty'); //эту строку можно не писать, 
      
        $this->custom_smarty->assign('data',$data);
        $this->custom_smarty->display('header.tpl');
        $this->custom_smarty->display('news/index.tpl');
        $this->custom_smarty->display('footer.tpl');
    }
    
    public function view($slug=NULL) {
        $data['news']=$this->News()->getNewsList($slug);
        $data['title']=$data['news']['title'];
        
        $this->load->view('news/view',$data);
    }
}