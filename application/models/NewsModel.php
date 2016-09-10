<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class NewsModel extends CI_Model{
    
    public function __construct() {
        $this->load->database();
    }
    
    /*Получаем спиок новостей*/
    public function getNewsList($slug=False) {
        if($slug === False)
            $query = $this->db->get('news');
            return $query->result_array();
        $query = $this->db->get_where('news',['slug'=>$slug]);
        return $query->row_array();
    }
}