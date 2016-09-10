<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(APPPATH.'third_party/smarty-3.1.30/libs/Smarty.class.php');

class Custom_smarty extends Smarty {

  function __construct()
  {
    parent::__construct();
    $this->setTemplateDir(APPPATH.'views/templates/');   
    $this->setCompileDir(APPPATH.'views/templates_c/');
  }
}