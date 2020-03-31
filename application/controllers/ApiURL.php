<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");
require APPPATH . 'libraries/REST_Controller.php';

class ApiURL extends REST_Controller{

  // construct
  public function __construct($config = 'rest')
	{
  
    parent::__construct();
   

  }

  // method index untuk menampilkan semua data person menggunakan method get t551gt
  public function index_get(){
  	if($this->get('action')=="CheckStatusRegistration"){
	  		$pel = $this->query_model->get_status_pendaftaran($this->get('kd_daftar'));		
	  		if ($pel->num_rows() >0){
			$result=array();
						foreach($pel->result_array() as $key){
							$data =array('kdDaftar' => $key['KD_DAFTAR'],
									'sDaftar' => $key['S_DAFTAR'],
									'stsDesc' => $key['KET_STATUS'],
									'crtTgl' => $key['CRT_TGL']
									);
						array_push($result,$data);
						}
				
				$response['data']=$result;
				$response['response'] = 200;
				
			}else{
				
				$response['response'] = 204;
			}
	  		
	}
	else if ($this->get('action')=="CheckTagihan"){
		$dataTagihan = $this->query_model->get_tagihan_pelanggan($this->get('kd_pelanggan'),$this->get('tahun'))->result_array();
		echo($this->db->last_query());
		$response['data']		= $dataTagihan;
		$response['response']	= 200;
		$response['Query']		= $this->db->last_query();
	}else{
		
		$response['response'] = 404;
	}
		$this->response($response);
  }


  // untuk menambah person menaggunakan method post
  public function index_post(){
  	
  	if($this->post('action')=="Registration"){
		$data=array(
		'kdDaftar'			=> "MOB-".date('ymdhis'),
		'pemohon'			=> $this->post('nm_pelanggan'),
		'nmPelanggan'		=> $this->post('nm_pelanggan'),
		'almtPasang'		=> $this->post('alamat_pasang'),
		'kdPos'				=> $this->post('kd_pos'),
		'kdProp'			=> $this->post('kd_prov'),
		'kdKab'				=> $this->post('kd_kab'),
		'kdKec'				=> $this->post('kd_kec'),
		'kdKel'				=> $this->post('kd_kel'),
		'noHp'				=> $this->post('no_hp'),
		'email'				=> $this->post('email'),
		'noKtp'				=> $this->post('no_ktp'),

		//'tglDaftar'			=> date('Y-m-d'),
		);
		
		
		$path = 'resources/images/'.$data['kdDaftar'].'.jpg';
		
		file_put_contents($path,base64_decode($this->post('blob_foto')));
			
		
		//$this->service_model->base64ToImage($this->post('blob_foto'),$path);
			
		/*$this->db->query("INSERT INTO TPENDAFTARAN (KD_DAFTAR, PEMOHON, PEMILIK, ALMT_PASANG, NO_HP, TGL_DAFTAR, NO_KTP,J_DAFTAR,S_DAFTAR,KD_POS,KD_PROP,KD_KAB,KD_KEC,KD_KEL,
				EMAIL,LAT_GPS,LONG_GPS,PHOTO_NAME) VALUES ('".$this->post('kd_daftar')."',
				 '".$this->post('nm_pelanggan')."',
				  '".$this->post('nm_pelanggan')."',
				   '".$this->post('alamat_pasang')."', 
				   '". $this->post('no_hp')."', SYSDATE,
				   '".$this->post('no_ktp')."','1','0',
				   '".$this->post('kd_pos')."',
				   '".$this->post('kd_prov')."',
				   '".$this->post('kd_kab')."',
				   '".$this->post('kd_kec')."',
				   '".$this->post('kd_kel')."',
				   '".$this->post('email')."',
				   '".$this->post('lat_gps')."',
				   '".$this->post('long_gps')."',
				   '".$path."'
				   )
		");*/
		
		
		
				/*$response['data']= $data;
				$response['response']= 200;*/
		$err = $this->db->error();
		
			if ($err['code']==""){
				
				$response['data']= $data;
				$response['response']= 200;
				
			}else{
				$response['data']= $data;
				$response['success'] = 0;
				
				
			}
			
		
	}
		else if($this->post('action')=="CheckStatusRegistration"){
	
		
	}
  	
  	
	$this->response($response);
  }

  // update data person menggunakan method put
  public function index_put(){
  
        if($this->put("param")=="close"){
         //  $response = $this->LoketModel->update_close("0",$this->put('idPc') );
         }else{
          //  $response = $this->LoketModel->update_close("1",$this->put('idPc') );
         }
          
          $this->response($response);
        }

  // hapus data person menggunakan method delete
  public function delete_delete(){
    $response = $this->LoketModel->delete_person(
        $this->delete('id')
      );
    $this->response($response);
  }
  
  

  }

	

?>
