<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Auth extends CI_Controller
{
    
    
    public function  login()
    {
        echo 'login page';
    }
    public function  register()
    {
        
        //load view
        
        $this->load->view('register');
    }
            
}
