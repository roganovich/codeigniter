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
        if($slug === False){
            $query = $this->db->get('news');
            return $query->result_array();
        }
        $query = $this->db->get_where('news',['slug'=>$slug]);
       
        return $query->row_array();
    }
    function get_articles($num, $offset)
    {
        $this->db->order_by('a.id','a.title');
        $this->db->join('category as c', 'a.cat_id=c.id', 'left');
        $query = $this->db->get('news a',$num, $offset);
        
        return $query->result_array();
    }
    
    function createNews() {
      
        $data = ['title'=>$this->input->post('title'),
                'text'=>$this->input->post('text'),
                'slug'=>$this->input->post('slug'),
                'cat_id'=>$this->input->post('cat_id')
                ];
        
            
        $config['upload_path'] = 'assets/img/';
        $config['allowed_types'] = '*';
        $config['file_name']=$this->input->post('slug');
        $this->load->library('upload', $config);
      
        if (!$this->upload->do_upload('thumb')){
            $upload_data = array('error' => $this->upload->display_errors());
        }else{
            $upload_data = $this->upload->data();
            $data['thumb']=$upload_data['raw_name'].$upload_data['file_ext'];
        }
       
        
        if($this->input->post('id')){
            $data['update_date'] = date("Y-m-d H:i:s");
            $this->db->where('id', $this->input->post('id'))->update('news' ,$data);
        }else{
            $this->db->insert('news',$data);
        }
        
       
    }
}