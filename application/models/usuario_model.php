<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
    public $variable;

    public function __construct(){
        parent::__construct();
    }

    public function login($Correo,$password){
        $this->db->where('Correo',$Correo);
        $this->db->where('password',$password);
        $q = $this->db->get('usuarios');
        if($q->num_rows()>0){
            return true;
        }else{
            return false;
        }
    }
}