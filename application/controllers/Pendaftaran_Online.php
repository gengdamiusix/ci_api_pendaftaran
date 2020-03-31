<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran_Online extends CI_Controller {
	
	function __construct() {

        parent::__construct();

        $this->load->database();
    }	


	function index(){
		$this->load->view('pendaftaran_online');
		
	}		
		
	function submited_form($kdDaftar=""){
		$getData = array(
		"kdDaftar"		=>$kdDaftar,
		"pemohon"		=>$this->input->get('pemohon'),
		"almtPemohon"	=>$this->input->get('almtPasang'),
		"pemilik"		=>$this->input->get('pemohon'),
		"almtPasang"	=>$this->input->get('almtPasang'),
		"noHp"			=>$this->input->get('noHp'),
		"noRumah"		=>$this->input->get('noRumah'),
		"kdPos"			=>$this->input->get('kdPos'),
		"kdProp"		=>$this->input->get('kdProp'),
		"kdKab"			=>$this->input->get('kdKab'),
		"kdKel"			=>$this->input->get('kdKel'),
		"kdKec"			=>$this->input->get('kdKec'),
		"rt"			=>$this->input->get('rt'),
		"rw"			=>$this->input->get('rw'),
		"noKtp"			=>$this->input->get('noKtp'),
		"email"			=>$this->input->get('email'),
		"photoName"			=>$this->input->get('photoName'),
				
		);
		
		$this->load->view('DetailPendaftaranOk',$getData);
	}
	
	function checkStatus(){
		
		$this->load->view('status_pendaftaran');
	}
	
	function dashboard(){
		
		$this->load->view('dashboard_pendaftaran_online');
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
	
	
?>