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
        $this->load->model('CategoryModel');
       
        $this->custom_smarty->assign('user_info',$this->session->userdata('logged_in'));
    }
    
    
    public function index() {
        $data['title']='Список новостей';
        
        $data['category']=$this->CategoryModel->getCategoryList(); 
        $config['base_url'] = '/news'; // адрес где происходит построение навигации
        $config['total_rows'] = $this->db->count_all('news'); // сколько всего записей в этой таблице, откуда будем брать записи. Используем данную функцию для подсчета всех записей.
        $config['per_page'] = 5; // сколько записей показывать на странице
        $this->pagination->initialize($config); // инициализируем навигацию с нашими настройками.

        $data['news'] = $this->NewsModel->get_articles($config['per_page'],$this->uri->segment(3));
        $data['pagination'] =$config;
        $data['pagination']['page'] =$this->uri->segment(3);
        $data['pagination']['pages'] =  round($config['total_rows']/$config['per_page']);

        $this->custom_smarty->assign('data',$data);
        $this->custom_smarty->display('header.tpl');
        $this->custom_smarty->display('menu.tpl');
        $this->custom_smarty->display('news/index.tpl');
        $this->custom_smarty->display('footer.tpl');
    }
    
    public function view($slug=NULL) {
    
        $data['news']=$this->NewsModel->getNewsList($slug);
        $data['title']=$data['news']['title'];
      
        $this->custom_smarty->assign('data',$data);
        $this->custom_smarty->display('header.tpl');
        $this->custom_smarty->display('menu.tpl');
        $this->custom_smarty->display('news/view.tpl');
        $this->custom_smarty->display('footer.tpl');
    }
    
    public function edit($slug=NULL) {

        $data['news']=$this->NewsModel->getNewsList($slug);
        $data['title']=$data['news']['title'];
        $data['category']=$this->CategoryModel->getCategoryList(); 
        $this->custom_smarty->assign('data',$data);
      
        $this->custom_smarty->display('header.tpl');
        $this->custom_smarty->display('menu.tpl');
        $this->custom_smarty->display('news/form.tpl');
        $this->custom_smarty->display('footer.tpl');
    }
    
    public function delete($slug=NULL) {

        $data=$this->NewsModel->getNewsList($slug);

        $this->db->where('id', $data['id']);
        $this->db->delete('news'); 
       
        $this->admin();
    }
    
    
    
    function admin(){
      
        $data['title']='Менеджер новостей';
        if($this->input->post()){
           $this->NewsModel->createNews();
        }
         
        $config['base_url'] = '/news/admin'; // адрес где происходит построение навигации
        $config['total_rows'] = $this->db->count_all('news'); // сколько всего записей в этой таблице, откуда будем брать записи. Используем данную функцию для подсчета всех записей.
        $config['per_page'] = 5; // сколько записей показывать на странице
        $this->pagination->initialize($config); // инициализируем навигацию с нашими настройками.

        $data['news'] = $this->NewsModel->get_articles($config['per_page'],$this->uri->segment(3));
        $data['pagination'] =$config;
        $data['pagination']['page'] =$this->uri->segment(3);
        $data['pagination']['pages'] =  round($config['total_rows']/$config['per_page']);
        
        $this->custom_smarty->assign('data',$data);
        $this->custom_smarty->display('header.tpl');
        $this->custom_smarty->display('menu.tpl');
        $this->custom_smarty->display('news/admin.tpl');
        $this->custom_smarty->display('footer.tpl');
    }
}