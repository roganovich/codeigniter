<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CategoryModel extends CI_Model{
    
    public function __construct() {
        $this->load->database();
    }
    
    /*Получаем спиок новостей*/
    public function getCategoryList($id=False) {
        if($id === False){
            $query = $this->db->get('category');
            return $query->result_array();
        }
        $query = $this->db->get_where('category',['id'=>$id]);
       
        return $query->row_array();
    }
    
    function createCategory() {
        
        $data = ['name'=>$this->input->post('name')];
 
        if($this->input->post('id')){
            $this->db->where('id', $this->input->post('id'))->update('category' ,$data);
        }else{
            $this->db->insert('category',$data);
        }
        
       
    }
}