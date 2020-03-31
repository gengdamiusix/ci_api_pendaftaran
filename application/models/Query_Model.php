<?php


class Query_Model extends CI_Model{
	
	
	
	public function get_tagihan_pelanggan($kd_pelanggan,$tahun){
		
		$this->db->select('MP.KD_PELANGGAN, MP.ALMT_PASANG,MPM.PEMILIK,	TT.JML_TAGIHAN,TT.NO_THNBLN, TT.GOL_TARIF, TT.M3_AWAL, TT.M3_AKHIR,TP.JML_DENDA,TP.JML_MATERAI,TT.S_TAGIHAN,TP.TGL_BAYAR,MK.KANTOR,MB.NM_BANK,TP.KODE_BANK,TP.PC_NAME');
		$this->db->join('TTAGIHAN TT', 'TT.KD_PELANGGAN=MP.KD_PELANGGAN');
		$this->db->join('MPEMILIK MPM','MP.KD_PEMILIK=MPM.KD_PEMILIK');
		$this->db->join('TPEMBAYARAN TP','TP.NO_TAGIHAN=TT.NO_TAGIHAN AND NVL (TP.S_BAYAR,1) = 1');
		$this->db->join('PEA_PEOPLE_INFORMATION PE','PE.USER_ID=TP.CRT_USERID','LEFT');
		$this->db->join('MKANTOR MK','MK.KD_KANTOR=PE.KD_KANTOR','LEFT');
		$this->db->join('MBANK MB','MB.KD_BANK=TP.KODE_BANK','LEFT');
		
		$where=array(
		'MP.KD_PELANGGAN' 			=> $kd_pelanggan,
		'SUBSTR(TT.NO_THNBLN,1,4) '	=> $tahun,
		/*'NO_THNBLN'					=>$nextPeriode,*/
		'KD_TAGIHAN'					=>'0',
		
		);
		
		$this->db->where_in('TT.S_TAGIHAN',array('1','0'));
		$this->db->where($where);
		$this->db->order_by('TT.NO_THNBLN', 'ASC');
		return $this->db->get('MPELANGGAN MP');
		
	}
	public function get_status_pendaftaran($kd_daftar){
		
			$this->db->select("A.KD_DAFTAR,B.S_DAFTAR,B.KET_STATUS,to_date(B.CRT_TGL,'dd-mm-YY') as CRT_TGL");
	  		$this->db->join('TPENDAFTARANSTS B','A.KD_DAFTAR= B.KD_DAFTAR');	
	  		return  $this->db->get_where('TPENDAFTARAN A',array('A.KD_DAFTAR'=>$kd_daftar));
	}
}

?><?php

?>