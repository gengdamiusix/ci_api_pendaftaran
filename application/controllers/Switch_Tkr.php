<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  Switch_Tkr extends CI_Controller {

	private $url_api = "http://localhost:9095/";
	
	private $url_pngaduan = "http://localhost:9099/";


	public function getAll(){
		$url= $this->url_pngaduan.'pengaduan_tkr/get_all';
		$headers=array(
			'Content-Type :application/json' ,
			
		);
		$data =json_decode(json_encode($this->curl->simple_get($url)));
		print_r($data);
	}
	public function getAllReplies(){
		$url= $this->url_pngaduan.'pengaduan_tkr/replied';
		$headers=array(
			'Content-Type :application/json' ,
			
		);
		$data =json_decode(json_encode($this->curl->simple_get($url)));
		print_r($data);
	}
	public function getAllNoReplies(){

		$url= $this->url_pngaduan.'pengaduan_tkr/notreplied';
		$headers=array(
			'Content-Type :application/json' ,
			
		);
		$data =json_decode(json_encode($this->curl->simple_get($url)));
		echo $data;
	}
	
	public function infoTagihan($tahun="",$kdPelanggan=""){
		$url= $this->url_api.'pdamtkr/tagihan/'.$tahun.'/'.$kdPelanggan;
		$headers=array(
			'Content-Type :application/json' ,
			
		);
		$data =json_decode(json_encode($this->curl->simple_get($url)));
		echo $data;
		
	}
	
	public function infoTunggakan($kdPelanggan=""){
		
		$url= $this->url_api.'pdamtkr/tagihan_tunggakan/'.$kdPelanggan;
		$headers=array(
			'Content-Type :application/json' ,
			
		);
		$data =json_decode(json_encode($this->curl->simple_get($url)));
		echo $data;
		
	}
	
	public function infoPendaftaran($kdPelanggan=""){
		
		$url= $this->url_api.'pdamtkr/registration/'.$kdPelanggan;
		$headers=array(
			'Content-Type :application/json' ,
			
		);
		$data =json_decode(json_encode($this->curl->simple_get($url)));
		echo $data;
		
	}
	public function getKec($kab=""){
		
		$url= $this->url_api.'pdamtkr/regional/36/'.$kab;
		$headers=array(
			'Content-Type :application/json' ,
			
		);
		$data =json_decode(json_encode($this->curl->simple_get($url)));
		echo $data;
		
	}
	public function getKel($kab="",$kec=""){
		
		$url= $this->url_api.'pdamtkr/regional/36/'.$kab.'/'.$kec;
		$headers=array(
			'Content-Type :application/json' ,
			
		);
		$data =json_decode(json_encode($this->curl->simple_get($url)));
		echo $data;
		
	}
	public function sendData(){
		
		$url= $this->url_api.'pdamtkr/pendaftaran/';
		$postData = array(
				
		"pemohon"		=>$this->input->post('pemohon'),
		"almtPemohon"	=>$this->input->post('almtPasang'),
		"pemilik"		=>$this->input->post('pemohon'),
		"almtPasang"	=>$this->input->post('almtPasang'),
		"noHp"			=>$this->input->post('noHp'),
		"kdPos"			=>$this->input->post('kdPos'),
		"kdProp"		=>$this->input->post('kdProp'),
		"kdKab"			=>$this->input->post('kdKab'),
		"kdKel"			=>$this->input->post('kdKel'),
		"kdKec"			=>$this->input->post('kdKec'),
		"rt"			=>$this->input->post('rt'),
		"rw"			=>$this->input->post('rw'),
		"noKtp"			=>$this->input->post('noKtp'),
		"email"			=>$this->input->post('email'),
		"photoName"			=>$this->input->post('photoName'),
		"noRumah"		=>$this->input->post('noRumah')
				
		);
		
		$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false); 
        
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);    

        $output = curl_exec($ch);

        curl_close($ch);
		echo json_decode(json_encode($output));
        
	}
	public function sendDataPengaduan(){
		$url= $this->url_pngaduan.'pengaduan_tkr/add_pengaduan';
		$postData = array(				
			"cust_feedback_name"=> $this->input->post('cust_feedback_name'),
			"cust_feedback_name"=> $this->input->post('cust_feedback_name'),
			"cust_feedback_nosl"=> $this->input->post('cust_feedback_nosl'),
			"cust_feedback_email"=> $this->input->post('cust_feedback_email'),
			"cust_feedback_phone"=> $this->input->post('cust_feedback_phone'),
			"cust_feedback_cell"=> $this->input->post('cust_feedback_cell'),
			"cust_feedback_msg"=> $this->input->post('cust_feedback_msg')
		);
		$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, false); 
        
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);    

        $output=curl_exec($ch);

        curl_close($ch);

        return $output;
	}
	public function dashboard($status=""){
		
		$url= $this->url_api.'pdamtkr/registration/list/'.$status;
		$headers=array(
			'Content-Type :application/json' ,
			
		);
		$data =json_decode(json_encode($this->curl->simple_get($url)));
		echo $data;
		
	}
	public function dashboard_new(){
		
		$url= $this->url_api.'pdamtkr/registration/list/new/';
		$headers=array(
			'Content-Type :application/json' ,
			
		);
		$data =json_decode(json_encode($this->curl->simple_get($url)));
		echo $data;
		
	}
	public function dashboard_lasthmonth(){
		
		$url= $this->url_api.'pdamtkr/registration/last/';
		$headers=array(
			'Content-Type :application/json' ,
			
		);
		$data =json_decode(json_encode($this->curl->simple_get($url)));
		echo $data;
		
	}
}


?>