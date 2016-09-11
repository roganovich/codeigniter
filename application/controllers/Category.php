<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Category extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->model('CategoryModel');
        $this->custom_smarty->assign('user_info',$this->session->userdata('login'));
    }

    
    public function edit($id=NULL) {

        $data['category']=$this->CategoryModel->getCategoryList($id);
        $data['title']=$data['category']['name'];
        $this->custom_smarty->assign('data',$data);
        $this->custom_smarty->display('header.tpl');
        $this->custom_smarty->display('menu.tpl');
        $this->custom_smarty->display('category/form.tpl');
        $this->custom_smarty->display('footer.tpl');
    }
    
    public function delete($id=NULL) {

        $data=$this->CategoryModel->getCategoryList($id);

        $this->db->where('id', $data['id']);
        $this->db->delete('category'); 
       
        $this->admin();
    }
    
    
    
    function admin(){
      
        $data['title']='Менеджер категорий';
        if($this->input->post()){
           $this->CategoryModel->createCategory();
        }
        $data['category']=$this->CategoryModel->getCategoryList(); 
        
        $this->custom_smarty->assign('data',$data);
        $this->custom_smarty->display('header.tpl');
        $this->custom_smarty->display('menu.tpl');
        $this->custom_smarty->display('category/admin.tpl');
        $this->custom_smarty->display('footer.tpl');
    }
}