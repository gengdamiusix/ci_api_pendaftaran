<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="<?php echo base_url('resources/css/bootstrap/bootstrap-datetimepicker.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('resources/css/bootstrap/bootstrap.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assests/css/jquery.loadingModal.css'); ?>">
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
        ul, li {
            list-style: none;
            align-content:middle;
        }

        #wrapper {
            width: 900px;
            margin: 20px auto;
        }

        .data-container {
            margin-top: 20px;
        }

        .data-container ul {
            padding: 0;
            margin: 0;
        }

        .data-container li {
            margin-bottom: 5px;
            padding: 5px 10px;
            background: #eee;
            color: #666;
        }
    .form-control:focus {
        border-color: #ff80ff;
        box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px rgba(255, 100, 255, 0.5);
    }
</style>
<div id="body" class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
				<div class="row col-sm-12 m-4">
					<div class="col-1 row">
							<img src="resources/img/pdam-logo.png" class="img-responsive w-100 h-75" >
					</div>
					<div class="col-sm-10">
						
						<div class="row col-sm-12">
						<h1 class="h1 text-left mt-1">PDAM Tirta Kerta Raharja</h1>
							
						</div>		
						<div class="row col-sm-12">
						<h1 class="h1 text-left mt-1">Kabupaten Tangerang</h1>
							
						</div>		
						
					</div>
				</div>
                
                
	            	<div class="box-tools">
	            <hr />	
                	</div>
            </div>
            <div class="box-body m-4">
            
        <form id="data-pendaftaran">
			 <div class="row col-12">
		
			<div class="card  col-sm-7 m-4" >

				  <div class="card-body col-md-12">
				    <h1 class="card-title text-center"> Pendaftaran Online</h5>
				    <hr />
				    <div class="row col-sm-12 ">
				    		<div class="col-sm-3">
				    			No. KTP / SIM /PASSPORT
				    		</div>
				    		
				    		<div class="col-sm-6">
				    			 <input type="text" class="form-control" maxlength="17" name="noKtp" id="noKtp" onkeyup="checkNumber()">
				    			
				    		</div>
				    		<div class="col-sm-3">
				    			 	<p class="alert-danger" id="err-noKtp"></p>
				    		</div>
				    		
				    			
				    </div>
				    <hr />
				   <div class="row col-sm-12 ">
				    		<div class="col-sm-3">
				    			Nama
				    		</div>
				    		
				    		<div class="col-sm-6">
				    			 <input type="text" class="form-control text-uppercase" id="nmPelanggan" name="pemohon">
				    			
				    		</div>
				    		<div class="col-sm-3">
				    			 	<p class="alert-danger" id="err-nmPelanggan"></p>
				    		</div>
				    		
				    </div>
				    <hr />
				   <div class="row col-sm-12 ">
				    		<div class="col-sm-3">
				    			Alamat Pasang
				    		</div> 
				    		
				    		<div class="col-sm-6">
				    			 <input type="text" class="form-control" id="almtPasang" name="almtPasang">
				    			
				    		</div>
				    		<div class="col-sm-3">
				    			 	<p class="alert-danger" id="err-almtPasang"></p>
				    		</div>
				    		
				    </div>
				     <hr />
				     <div class="row col-sm-12 ">
				    		<div class="col-sm-3">
				    			No Rumah
				    		</div>
				    		
				    		<div class="col-sm-6">
				    			 <input type="text" class="form-control" id="noRumah" name="noRumah">
				    			
				    		</div>
				    		<div class="col-sm-3">
				    			 	<p class="alert-danger" id="err-noRumah"></p>
				    		</div>
				    		
				    </div>
				    <hr />
				    <div class="row col-sm-12 ">
				    		<div class="col-sm-3">
				    			RT
				    		</div>
				    		
				    		<div class="col-sm-6">
				    			 <input type="text" class="form-control" id="Rt" name="rt">
				    			
				    		</div>
				    		<div class="col-sm-3">
				    			 	<p class="alert-danger" id="err-rt"></p>
				    		</div>
				    		
				    </div>
				    <hr />
				    <div class="row col-sm-12 ">
				    		<div class="col-sm-3">
				    			RW
				    		</div>
				    		
				    		<div class="col-sm-6">
				    			 <input type="text" class="form-control" id="rw" name="rw">
				    			
				    		</div>
				    		<div class="col-sm-3">
				    			 	<p class="alert-danger" id="err-rw"></p>
				    		</div>
				    		
				    </div>
				    <hr />
				    
				   <div class="row col-sm-12 ">
				    		<div class="col-sm-3">
				    			Kota/Kabupaten
				    		</div>
				    		
				    		<div class="col-sm-6">
				    		<select class="form-control" id="sel_kab" name="kdKab">
								<option value="">Pilih Kabupaten</option>
								<option value="01">Kabupaten Tangerang</option>
								<option value="03">Tangerang Selatan</option>
						      </select>
				    			
				    		</div>
				    		<div class="col-sm-3">
				    			 	<p class="alert-danger" id="err-kdKab"></p>
				    		</div>
				    </div>
				    <hr />
				   <div class="row col-sm-12 ">
				    		<div class="col-sm-3">
				    			Kecamatan
				    		</div>
				    		
				    		<div class="col-sm-6">
				    			<select class="form-control" id="sel_kec" name="kdKec">
						   		   </select>
				    			
				    		</div>
				    		<div class="col-sm-3">
				    			 	<p class="alert-danger" id="err-kdKec"></p>
				    		</div>
				    </div>
				    <hr />
				   <div class="row col-sm-12 ">
				    		<div class="col-sm-3">
				    			Kelurahan
				    		</div>
				    		
				    		<div class="col-sm-6">
				    			<select class="form-control" id="sel_kel" name="kdKel">
						      </select>
				    			
				    			
				    		</div>
				    		<div class="col-sm-3">
				    			 	<p class="alert-danger" id="err-kdKel"></p>
				    		</div>
				    </div>
				     <hr />
				   <div class="row col-sm-12 ">
				    		<div class="col-sm-3">
				    			Kode Pos
				    		</div>
				    		
				    		<div class="col-sm-6">
				    			<input class="form-control" id="kdPos" readonly="" name="kdPos">
				    			
				    			
				    		</div>
				    		<div class="col-sm-3">
				    			 	<p class="alert-danger" id="err-kdPos"></p>
				    		</div>
				    </div>
				    <hr />
				    <div class="row col-sm-12 ">
				    		<div class="col-sm-3">
				    			No. Telepon / Handphone
				    		</div>
				    		
				    		<div class="col-sm-6">
				    			 <input   onkeypress="return isNumberKey(event)" maxlength="16" type="text" pattern="^[0-9-+\s()]*$"  class="form-control" id="noHp" name="noHp" >
				    			
				    		</div>
				    		<div class="col-sm-3">
				    			 	<p class="alert-danger" id="err-noHp"></p>
				    		</div>
				    </div>
				    <hr />
				   <div class="row col-sm-12 ">
				    		<div class="col-sm-3">
				    			Email
				    		</div>
				    		
				    		<div class="col-sm-6">
				    			 <input type="email"  class="form-control" id="email" name="email">
				    			
				    		</div>
				    		<div class="col-sm-3">
				    			 	<p class="alert-danger" id="err-email"></p>
				    		</div>
				    </div>
				    <hr />
				    <div class="row col-sm-12 ">
				    		<div class="col-sm-3">
				    			Foto/Scan Identitas Diri
				    		</div>
				    		
				    		<div class="col-sm-6">
				    		<div class="input-group">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="inputGroupFileAddon01">Unggah</span>
							  </div>
							  <div class="custom-file">
							    <input type="file" class="custom-file-input" id="imgKtp" 
							      aria-describedby="inputGroupFileAddon01"> 
							  
							   <label class="custom-file-label" for="inputGroupFile01" id="label-name">Pilih Foto</label>
							
								
							  </div>
							  <input id="fotoktp" name="photoName" type="text" class="form-control" hidden="">
							</div>
				    			
				    		</div>
				    		<div class="col-sm-3">
				    			 	<p class="alert-danger" id="err-fotoktp"></p>
				    		</div>
				    </div>
				    <hr />
				    <div class="row col-sm-12 ">
				    		<div class="col-sm-4">
				    			
				    		</div>
				    		
				    		<div class="col-sm-6">
				    			 
				    			<img id="imageFotoKtp" class="img img-rounded w-100" >
				    		</div>
				    </div>
				    <div class="row col-sm-12 ">
				    		<div class="col-sm-4">
				    			
				    		</div>
				    		
				    		<div class="col-sm-6 mt-2">
				    			<button class="btn btn-success" type="button" id="btn-save">Submit</button>
				    			
				    		</div>
				    </div>
				    
				    
				  </div>
			</div>
		
			</div>
	</form>
			</div>
</div>
</div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Akun</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Input Akun</h3>
            </div>
        	 <p id="error"></p>
            <form id="form-tambah">
          	<div class="box-body">
          		
          		<div class="col-md-10">
						<label for="id_account" class="control-label">Kode Akun</label>
						<div class="form-group">
						<input readonly="" type="hidden" name="method"  id="method"  class="form-control" id="method" />
							<input readonly="" type="text" name="id_account" value="" class="form-control  col-sm-12" id="id_account" />
							<span class="text-danger"></span>
						</div>
					</div>
				<div class="col-md-10">
						<label for="nm_account" class="control-label">Nama Account</label>
						<div class="form-group">
							<input  type="text" name="nm_account" value="" class="form-control focus" id="nm_account" />
							<span class="text-danger"></span>
						</div>
						</div>

				<div class="col-md-10">
						<label for="j_aktiva" class="control-label">Jenis Aktiva</label>
						<div class="form-group">
							<select name="j_aktiva" class="form-control browser-default custom-select" id="j_aktiva">
								<option value="">select</option>
								<?php 
								$jenis_aktiva = array(
									'AL'=>'Aktiva Lancar',
									'AT'=>'Aktiva Tetap',
									'Kewajiban'=>'Biaya Operasional',
									'PDT'=>'Pendapatan',
									'BBN'=>'Harga Pokok Barang (HPP)',
									'BIA'=>'Biaya Operasional',
								);
							?>
							</select>
						</div>
					</div>
		
					
				</div>
			</form>
          	<div class="box-footer">
            	
          	</div>
          
      	</div>
    </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary " data-dismiss="modal"> Close</button>
        <button type="button" class="btn btn-primary" id="btnSave" ></button>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo base_url('resources/js/jquery/1.9.1/jquery.min.js');?>"></script>

<script src="<?php echo base_url('assets/js/waitingDialog.js');?>"></script>
<script src="<?php echo base_url('resources/js/bootstrap/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('resources/js/jquery.twbsPagination.min.js'); ?>"></script>
<script src="<?php echo base_url('resources/js/moment.js'); ?>"></script>
<script src="<?php echo base_url('resources/js/bootstrap-datetimepicker.min.js'); ?>"></script>
<script src="<?php echo base_url('resources/js/global.js'); ?>"></script>
<!--<script src="resources/js/jquery.twbsPagination.js"></script>-->

<script type="text/javascript">
	function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }

    function ValidateEmail(mail){
			
			}
	var handleFileSelect = function(evt) {
    var files = evt.target.files;
    var file = files[0];
	var strBase64 = document.getElementById("#fotoktp");
    
    if (files && file) {
        var reader = new FileReader();

        reader.onload = function(readerEvt) {
            var binaryString = readerEvt.target.result;
            var namefile = files[0].name;
             console.log(files);
        		var base64s = btoa(binaryString);
        		
			$("#imageFotoKtp").attr('src',"data:image/png;base64,"+base64s);
			
			$("#label-name").text(namefile);
			
			setTimeout(function(){$("#fotoktp").val(base64s).fadeIn(2000);},0);
			
        };

        reader.readAsBinaryString(file);
    }
};

if (window.File && window.FileReader && window.FileList && window.Blob) {
    document.getElementById('imgKtp').addEventListener('change', handleFileSelect, false);
} else {
    alert('The File APIs are not fully supported in this browser.');
}


function checkNumber(){
	var numbers = /^[0-9]*$/;
	var input= $("#noKtp").val();
	console.log(input+"||"+numbers.test(input));
	if(numbers.test(input)){
	 
	}
		
	
}
var kdPos = [];
$(function(){
		 ipUrl = "<?php echo  base_url('/resources/img/loading.gif'); ?>";

		$('#sel_kab').on('change', function (e) {
			var kab =$(this).val();
				
		    	$.ajax({
			      url: "<?php echo base_url('index.php/Switch_Tkr/getKec/'); ?>"+kab,
			      type: "get",
			      async: true,
			      dataType:'json',
				  beforeSend: function () {
		         
		            
		        },
			      success:function(response)
			      {         
					 $("#sel_kec").html('');
					var opt = [];
					var data = response.data;
					$("#sel_kec").append("<option value=''>Pilih Kecamatan</option>");
					for(i=0; i < response.data.length;i++){
				
						$("#sel_kec").append("<option value="+data[i].kdKec+">"+data[i].kecamatan+"</option>");
					}
						    
			    
			      },
			      error:function(xhr){
				  
				  
				  }
			          
			    });
		});
	
		$('#sel_kec').on('change', function (e) {
				var kab =$("#sel_kab").val();
				var kec =$(this).val();
					
			    	$.ajax({
				      url: "<?php echo base_url('index.php/Switch_Tkr/getKel/') ?>"+kab+"/"+kec,
				      type: "get",
				      async: true,
				      dataType:'json',
					  beforeSend: function () {
			         
			            
			        },
				      success:function(response)
				      {         
				     
						 $("#sel_kel").html('');
						var opt = [];
						var data = response.data;
						kdPos = response.data;
						$("#sel_kel").append("<option value=''>Pilih Kelurahan</option>");
						for(i=0; i < response.data.length;i++){
							$("#sel_kel").append("<option value="+data[i].kdKel+">"+data[i].kelurahan+"</option>");
							
						}
						
				    	
				    
				    
				    
				      },
				      error:function(xhr){
					  
					  
					  }
				          
				    });
			});
			
		$('#sel_kel').on('change', function (e) {
				var kab =$("#sel_kab").val();
				var kec =$("#sel_kec").val();
				var kel =$(this).val();
					
					for(i=0; i < kdPos.length;i++){
				
							if(kel==kdPos[i].kdKel){
								$("#kdPos").val(kdPos[i].kdPos)
								
								
							}
							
						}
		
			});
		
		$("#btn-save").click(function(){
			if ($("#noKtp").val()==""){
				
				
				$("#err-noKtp").html('<div id="alert" class="alert alert-dark" align="center" role="alert">Nomor Identitas kosong</div>'); 
				$("#alert").fadeTo(3000, 0).slideUp(1000, function(){$(this).remove(); });
				setTimeout(function(){$('#err-noKtp').html('')}, 2000);
				return false ;
				
			}
			if ($("#nmPelanggan").val()==""){
				
				$("#err-nmPelanggan").html("Nama Pelanggan masih kosong.");
				$("#alert").fadeTo(3000, 0).slideUp(1000, function(){$(this).remove();});
				setTimeout(function(){$('#err-nmPelanggan').html('')}, 2000);
				return ;
			}
			if ($("#almtPasang").val()==""){
				$("#err-almtPasang").html("Alamat Pasang masih kosong.");
				$("#alert").fadeTo(3000, 0).slideUp(1000, function(){$(this).remove();});
				setTimeout(function(){$('#err-almtPasang').html('')}, 2000);
				return ;
			}
			if ($("#rt").val()==""){
				$("#err-rt").html("Rt masih kosong.");
				$("#alert").fadeTo(3000, 0).slideUp(1000, function(){$(this).remove();});
				setTimeout(function(){$('#err-rt').html('')}, 2000);
				return ;
			}
			if ($("#rw").val()==""){
				$("#err-rw").html("Rw masih kosong.");
				$("#alert").fadeTo(3000, 0).slideUp(1000, function(){$(this).remove();});
				setTimeout(function(){$('#err-rw').html('')}, 2000);
				return ;
			}
			if ($("#kdKab").val()==""){
				
				$("#err-kdKab").html("Kabupaten masih kosong.");
				$("#alert").fadeTo(3000, 0).slideUp(1000, function(){$(this).remove();});
				setTimeout(function(){$('#err-kdKab').html('')}, 2000);
				return ;
			}
			if ($("#kdKec").val()==""){
				
				$("#err-kdKec").html("Kecamatan masih kosong.");
				$("#alert").fadeTo(3000, 0).slideUp(1000, function(){$(this).remove();});
				setTimeout(function(){$('#err-kdKec').html('')}, 2000);
				return ;
			}
			if ($("#kdKel").val()==""){
				
				$("#err-kdKel").html("Kelurahan masih kosong.");
				$("#alert").fadeTo(3000, 0).slideUp(1000, function(){$(this).remove();});
				setTimeout(function(){$('#err-kdKel').html('')}, 2000);
				return ;
			}
			if ($("#noHp").val()==""){
				
				$("#err-noHp").html("No Hp masih kosong.").fadeOut(2000);
				$("#alert").fadeTo(3000, 0).slideUp(1000, function(){$(this).remove();});
				setTimeout(function(){$('#err-noHp').html('')}, 2000);
				return ;
			}
			if ($("#email").val()==""){
				
				$("#err-email").html("Email masih kosong.");
				$("#alert").fadeTo(3000, 0).slideUp(1000, function(){$(this).remove();});
				setTimeout(function(){$('#err-email').html('')}, 2000);
				
				
				return ;
			}else{
				 if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/).test($("#email").val())){
				 
				  $("#err-email").html("Email masih Salah.");
					$("#alert").fadeTo(3000, 0).slideUp(1000, function(){$(this).remove();});
					setTimeout(function(){$('#err-email').html('')}, 2000);
					return ;
				  }
			    
				
				
			}
			if ($("#fotoktp").val()==""){
				$("#err-fotoktp").html("Foto masih kosong.");
				$("#alert").fadeTo(3000, 0).slideUp(1000, function(){$(this).remove();});
				setTimeout(function(){$('#err-fotoktp').html('')}, 2000);
				return ;
			}
			

		$.ajax({
		          		url: "<?php echo base_url('index.php/Switch_Tkr/sendData/'); ?>",
		 			    type:"post",
		 			    dataType:'json',
		 			    data:$('#data-pendaftaran').serialize(),
		 			    cache: false,
		 			    beforeSend: function () {
		            		waitingDialog.show();
		        },	
		  		        success:function(response){
		  		        	console.log(response);
								
								$('#data-pendaftaran').attr('action','<?php echo base_url("index.php/pendaftaran_online/submited_form/") ?>'+response.data.kdDaftar);
								$('#data-pendaftaran').submit();
								
								waitingDialog.hide();
								return false;
		                  
		     			}, 
		     			error:function(xhr){

		     				alert("Tidak ada response dari Server.");
				  
				  			return;
						  }
   		});	
			
			
		});
		
		
		
		
});

















</script>