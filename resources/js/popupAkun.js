var datalist = [];

	function onLoadDataAkun(url,noPage){
		$.ajax({
			      url: url+"account/loadRecord/5/"+noPage,
			      type: "get",
			      dataType:'json',
				  beforeSend: function () {
		            $('#loadingSearch').show();
		             $('#DataAkun').hide();
		        },
			      success:function(response)
			      {         
				
				$('#DataAkun').html('');
				$('#pagingAkun').html('');
			    var items = [];
			     /*datalist.push(response.result);*/
				
			     if(response.result.length > 0){
				 	
				 	$.each(response.result,function(key,val){
			    		 var input = "<?=  site_url('trans_saldo/add/?id=');  ?>"+val.id_account;
			     		 var edit = "<?php echo site_url('account/edit/'); ?>"+val.id_account;
			     		 var del ="<?php echo site_url('account/remove/'); ?>"+val.id_account;
						items.push("<tr>");
						items.push("<td>"+val.id_account+"</td>");
						items.push("<td>"+val.nm_account+"</td>");
						items.push("<td></td>");
						items.push("<td><button "
						+" data-nm_account='"+val.nm_account+"'"
						+"data-method='get'"
						+" class='btn btn-info btn-xs' data-toggle='modal'"
						+" data-target='#addModal' "
						+" data-id='"+val.id_account+"' ><span  class='fa fa-check'></span></button> ");
						items.push("</tr>");
						
					});
					
				 }else{
				 	items.push("<td>Tidak ada Data</td>");
				 	
				 }
			    	
					setTimeout(function(){$("#DataAkun").append(items).fadeIn(2000);},0);
			    	setTimeout(function(){ $('#paginationakun').html(response.pagination);},0);
			    	setTimeout(function(){$("#linkPage").append(response.total).fadeIn(2000);},0);
			    	 $('#loadingSearch').fadeOut("slow");
			      },
			      error:function(xhr){
				  	alert("NOT CONNECTED API");
				  
				  }
			          
			    });
			    
			    
	}

	function onSearchData(url,keyword,pageNum){
		
			if (keyword==null){
				keyword == "all"
				
			}
			$.ajax({
			      url: url+"account/loadRecordGetBy/5/"+keyword+"/"+pageNum,
			      type: "get",
			      dataType:'json',
				  beforeSend: function () {
		            $('#loadingSearch').show();
		            
		        },
			      success:function(response)
			      {         
				
				$('#DataAkun').html('');
				$('#paginationakun').hide();
				$('#paginationseachakun').show();
			    var items = [];
			     datalist.push(response.result);
			    	 if(response.result.length > 0){
				 	
				 	$.each(response.result,function(key,val){
			    		
						items.push("<tr>");
						items.push("<td>"+val.id_account+"</td>");
						items.push("<td>"+val.nm_account+"</td>");
						items.push("<td></td>");
						items.push("<td><button "
						+" data-nm_account='"+val.nm_account+"'"
						+"data-method='edit'"
						+" class='btn btn-info btn-xs' data-toggle='modal' data-target='#addModal' data-idakun='"+val.id_account+"' ><span  class='fa fa-check'></span></button> ");
						
						items.push("</tr>");
						
					});
					
				 }else{
				 	items.push("<td align='center' colspan='5'><i>Tidak ada Data</i>	</td>");
				 	
				 }
					
					setTimeout(function(){$("#DataAkun").append(items).fadeIn(2000);},0);
			    	setTimeout(function(){ $('#paginationsearchakun').html(response.pagination);},0);
			    	setTimeout(function(){$("#paginationAkun").appendTo(response.total).fadeIn(2000);},0);
			    	 $('#loadingSearch').fadeOut("slow");
			      },
			      error:function(xhr){
				  	console.log(xhr);
				  
				  }
			          
			    });
					
	}
	
	
	
/*------------------untuk Pop up akun Menu Transaksi Saldo awal.*/
	function onLoadDataAkunNoSaldo(url,noPage){ //untuk di pop AKun di Transaksi Saldo Awal
		
		$.ajax({
			      url: url+"account/loadRecordNoSaldo/5/"+noPage,
			      type: "get",
			      dataType:'json',
				  beforeSend: function () {
		            $('#loadingSearch').show();
		             $('#DataAkun').hide();
		        },
			      success:function(response)
			      {         
				
				$('#DataAkun').html('');
				$('#pagingAkun').html('');
				$('#paginationakun').show();
				$('#paginationseachakun').hide();
			    var items = [];
			    datalist.push(response.result);
				
			     if(response.result.length > 0){
				 	
				 	$.each(response.result,function(key,val){
				 		console.log(response.Query);
						items.push("<tr>");
						items.push("<td>"+val.id_account+"</td>");
						items.push("<td>"+val.nm_account+"</td>");
						items.push("<td></td>");
						items.push("<td><button "
						+" data-nm_account='"+val.nm_account+"'"
						+"data-method='get'"
						+" class='btn btn-info btn-xs' data-toggle='modal'"
						+" data-target='#addModal' "
						+" data-id_account='"+val.id_account+"' ><span  class='fa fa-check'></span></button> ");
						items.push("</tr>");
						
					});
					
				 }else{
				 	items.push("<td>Tidak ada Data</td>");
				 	
				 }
			    	
					setTimeout(function(){$("#DataAkun").append(items).fadeIn(2000);},0);
			    	setTimeout(function(){ $('#paginationakun').html(response.pagination);},0);
			    	setTimeout(function(){$("#linkPage").append(response.total).fadeIn(2000);},0);
			    	 $('#loadingSearch').fadeOut("slow");
			      },
			      error:function(xhr){
				  	alert("NOT CONNECTED API");
				  
				  }
			          
			    });
			    
			    
	}
	
	function onSearchDataNoSaldo(url,keyword,pageNum){
		
		
			if (keyword==null){
				keyword == "all"
				
			}
			$.ajax({
			      url: url+"account/loadRecordNoSaldoGetBy/5/"+keyword+"/"+pageNum,
			      type: "get",
			      dataType:'json',
				  beforeSend: function () {
		            $('#loadingSearch').show();
		            
		        },
			      success:function(response)
			      {         
				
				$('#DataAkun').html('');
				$('#paginationakun').hide();
				$('#paginationseachakun').show();
			    var items = [];
			     datalist.push(response.result);
			    	 if(response.result.length > 0){
				 	
				 	$.each(response.result,function(key,val){
			    		
						items.push("<tr>");
						items.push("<td>"+val.id_account+"</td>");
						items.push("<td>"+val.nm_account+"</td>");
						items.push("<td></td>");
						items.push("<td><button "
						+" data-nm_account='"+val.nm_account+"'"
						+"data-method='get'"
						+" class='btn btn-info btn-xs' data-toggle='modal'"
						+" data-target='#addModal' "
						+" data-id_account='"+val.id_account+"' ><span  class='fa fa-check'></span></button> ");
						
						items.push("</tr>");
						
					});
					
				 }else{
				 	items.push("<td align='center' colspan='5'><i>Tidak ada Data</i>	</td>");
				 	
				 }
					
					setTimeout(function(){$("#DataAkun").append(items).fadeIn(2000);},0);
			    	setTimeout(function(){ $('#paginationsearchakun').html(response.pagination);},0);
			    	setTimeout(function(){$("#paginationAkun").appendTo(response.total).fadeIn(2000);},0);
			    	 $('#loadingSearch').fadeOut("slow");
			      },
			      error:function(xhr){
				  	console.log(xhr);
				  
				  }
			          
			    });
					
	}


//-------------------------------------Pop up akun di menu Jurnal umum
	function onLoadDataAkunAdaSaldo(url,noPage){
		$.ajax({
			      url: url+"account/loadRecordSaldoAwal/5/"+noPage,
			      type: "get",
			      dataType:'json',
				  beforeSend: function () {
		            $('#loadingSearch').show();
		            $('#DataAkun').hide();
		        },
			      success:function(response)
			      {         
				
					$('#DataAkun').html('');
					$('#pagingAkun').html('');
					$('#paginationsearchakun').html('');
					$('#paginationakun').show();
					$('#paginationsearchakun').hide();
					
			    var items = [];
			     /*datalist.push(response.result);*/
				
			     if(response.result.length > 0){
				 	
				 	$.each(response.result,function(key,val){
						items.push("<tr>");
						items.push("<td>"+val.id_account+"</td>");
						items.push("<td>"+val.nm_account+"</td>");
						items.push("<td>"+val.saldo+"</td>");
						items.push("<td><button "
						+" data-nm_account='"+val.nm_account+"'"
						+"data-method='get'"
						+" class='btn btn-info btn-xs' data-toggle='modal'"
						+" data-target='#addModal' "
						+" data-id='"+val.id_account+"' ><span  class='fa fa-check'></span></button> ");
						items.push("</tr>");
						
					});
					$('#paginationseachakun').hide();
				 }else{
				 	items.push("<td>Tidak ada Data</td>");
				 	
				 }
			    	
					setTimeout(function(){$("#DataAkun").append(items).fadeIn(2000);},0);
			    	setTimeout(function(){ $('#paginationakun').html(response.pagination);},0);
			    	setTimeout(function(){$("#linkPage").append(response.total).fadeIn(2000);},0);
			    	 $('#loadingSearch').fadeOut("slow");
			      },
			      error:function(xhr){
				  	alert("NOT CONNECTED API");
				  
				  }
			          
			    });
			    
			    
	}
	
	function onSearchDataAkunAdaSaldo(url,keyword,pageNum){//pop akun di jurnal umum
		
			if (keyword==null){
				keyword == "all"
				
			}
			
			$.ajax({
			      url: url+"account/loadRecordSaldoAwalGetBy/5/"+keyword+"/"+pageNum,
			      type: "get",
			      dataType:'json',
				  beforeSend: function () {
		            $('#loadingSearch').show();
		            
		        },
			      success:function(response)
			      {         
				
				$('#DataAkun').html('');
				
				$('#paginationakun').hide();
				$('#paginationseachakun').show();
			    var items = [];
			     datalist.push(response.result);
			    	 if(response.result.length > 0){
				 	
				 	$.each(response.result,function(key,val){items.push("<tr>");
						items.push("<td>"+val.id_account+"</td>");
						items.push("<td>"+val.nm_account+"</td>");
						items.push("<td>"+val.saldo+"</td>");
						items.push("<td><button "
						+" data-nm_account='"+val.nm_account+"'"
						+"data-method='get'"
						+" class='btn btn-info btn-xs' data-toggle='modal'"
						+" data-target='#addModal' "
						+" data-id='"+val.id_account+"' ><span  class='fa fa-check'></span></button> ");
						items.push("</tr>");
						items.push("</tr>");
						
					});
					
				 }else{
				 	items.push("<td align='center' colspan='5'><i>Tidak ada Data</i>	</td>");
				 	
				 }
					
					setTimeout(function(){$("#DataAkun").append(items).fadeIn(2000);},0);
			    	setTimeout(function(){ $('#paginationsearchakun').html(response.pagination);},0);
			    	setTimeout(function(){$("#paginationAkun").appendTo(response.total).fadeIn(2000);},0);
			    	 $('#loadingSearch').fadeOut("slow");
			      },
			      error:function(xhr){
				  	console.log(xhr);
				  
				  }
			          
			    });
					
	}
	
	



	function onLoadDataJurnalUmum(url,noPage){
		
		$.ajax({
			      url: url+"jurnal_umum/loadRecordJurnalUmum/"+noPage,
			      type: "get",
			      dataType:'json',
				  beforeSend: function () {
		            $('#loading').show();
		             $('#data').hide();
		        },
			      success:function(response)
			      {         
				
				$('#data').html('');
				$('.pagination').html('');
			    var items = [];
			     datalist.push(response.result);

			     if(response.result.length > 0){
			     	
				 	
				 	$.each(response.result,function(key,val){
			    		
						items.push("<tr>");
						items.push("<td>"+val.no_trans+"</td>");
						items.push("<td>"+val.id_account+"</td>");
						items.push("<td>"+val.nm_account+"</td>");
						items.push("<td>"+jsaldo(val.j_transaksi)+"</td>");
						items.push("<td> "+convertToRupiah(val.saldo,'Rp.')+"</td>");
						items.push("<td>"+val.desc_trans+"</td>");
						items.push("<td>"+val.tgl_trans+"</td>");
						items.push("<td><a class='btn btn-info btn-xs' ><span  class='fa fa-pencil'></span> </a> ");
						items.push("</tr>");
						
					});
					
				 }else{
				 	items.push("<td colspan='9' align='center'>Tidak ada Data</td>");
				 	
				 }
			    	console.log(response);
					setTimeout(function(){$("#data").append(items).fadeIn(2000);},0);
			    	setTimeout(function(){	$('#pagination').html(response.pagination);},0);
			    	
			    	setTimeout(function(){$(".pagination").append(response.total).fadeIn(2000);},0);
			    	 $('#loading').fadeOut("slow");
			      },
			      error:function(xhr){
				  	alert();
				  
				  }
			          
			    });
			    
			    
	}


		/*InQuiry Akun dengan  saldo  terakhir di jurnal umum */
	function onLoadDataSaldoAwal(url,noPage){
		
		$.ajax({
			      url: url+"account/loadRecordSaldoAwal/5/"+noPage,
			      type: "get",
			      dataType:'json',
				  beforeSend: function () {
		            $('#loadingSearch').show();
		             $('#DataAkun').hide();
		        },
			      success:function(response)
			      {         
				
				$('#DataAkun').html('');
				$('#pagingAkun').html('');
			    var items = [];
			    datalist.push(response.result);
				
			     if(response.result.length > 0){
				 	
				 	$.each(response.result,function(key,val){
				 		console.log(response);
						items.push("<tr>");
						items.push("<td>"+val.id_account+"</td>");
						items.push("<td>"+val.nm_account+"</td>");
						items.push("<td>"+convertToRupiah(val.saldo)+"</td>");
						items.push("<td><button "
						+" data-nm_account='"+val.nm_account+"'"
						+"data-method='get'"
						+" class='btn btn-info btn-xs' data-toggle='modal'"
						+" data-target='#addModal' "
						+" data-id='"+val.id_account+"' ><span  class='fa fa-check'></span></button> ");
						items.push("</tr>");
						
					});
					
				 }else{
				 	items.push("<td>Tidak ada Data</td>");
				 	
				 }
			    	
					setTimeout(function(){$("#DataAkun").append(items).fadeIn(2000);},0);
			    	setTimeout(function(){ $('#paginationakun').html(response.pagination);},0);
			    	setTimeout(function(){$("#linkPage").append(response.total).fadeIn(2000);},0);
			    	 $('#loadingSearch').fadeOut("slow");
			      },
			      error:function(xhr){
				  	alert("NOT CONNECTED API");
				  
				  }
			          
			    });
			    
			    
	}


	function onLoadAkunBukuBesar(url,noPage){
		
		$.ajax({
			      url: url+"account/loadAkunForBukuBesar/5/"+noPage,
			      type: "get",
			      dataType:'json',
				  beforeSend: function () {
		            $('#loadingSearch').show();
		             $('#DataAkun').hide();
		        },
			      success:function(response)
			      {         
				
				$('#DataAkun').html('');
				$('#pagingAkun').html('');
			    var items = [];
			    datalist.push(response.result);
				
			     if(response.result.length > 0){
				 	
				 	$.each(response.result,function(key,val){
				 		console.log(response);
						items.push("<tr>");
						items.push("<td>"+val.id_account+"</td>");
						items.push("<td>"+val.nm_account+"</td>");
						items.push("<td><button "
						+"  onclick=\"onSelected(\'"+val.id_account+"\',\'"+val.nm_account+"\')\""
						+" data-id_account='"+val.id_account+"'"
						+" data-nm_account='"+val.nm_account+"'"
						+" data-method='get'"
						+" class='btn btn-info btn-xs'"
						+" data-target='#AkunPopovers' "
						+" data-toggle='modal'"
						+"  ><span  class='fa fa-check'></span></button> ");
						items.push("</tr>");
						
					});
					
				 }else{
				 	items.push("<td>Tidak ada Data</td>");
				 	
				 }
			    	
					setTimeout(function(){$("#DataAkun").append(items).fadeIn(2000);},0);
			    	setTimeout(function(){ $('#paginationakun').html(response.pagination);},0);
			    	setTimeout(function(){$("#linkPage").append(response.total).fadeIn(2000);},0);
			    	 $('#loadingSearch').fadeOut("slow");
			      },
			      error:function(xhr){
				  	alert("NOT CONNECTED API");
				  
				  }
			          
			    });
			    
		
	}


	function onSearchAkunBukuBesar(url,keyword,pageNum){
		
			if (keyword==null){
				keyword == "all"
				
			}
			$.ajax({
			      url: url+"account/loadAkunForBukuBesarGetBy/5/"+keyword+"/"+pageNum,
			      type: "get",
			      dataType:'json',
				  beforeSend: function () {
		            $('#loadingSearch').show();
		            
		        },
			      success:function(response)
			      {         
				
				$('#DataAkun').html('');
				$('#paginationakun').hide();
				$('#paginationseachakun').show();
			    var items = [];
			     datalist.push(response.result);
			    	 if(response.result.length > 0){
				 	
				 	$.each(response.result,function(key,val){
			    		
						items.push("<tr>");
						items.push("<td>"+val.id_account+"</td>");
						items.push("<td>"+val.nm_account+"</td>");
						items.push("<td><button " 
						
						+" id='btnSelected'"
						+"data-method='get'"
						+" class='btn btn-info btn-xs' data-toggle='modal'"
						+" data-target='#addModal' "
						+" data-id_account='"+val.id_account+"' ><span  class='fa fa-check'></span></button> ");
						
						items.push("</tr>");
						
					});
					
				 }else{
				 	items.push("<td align='center' colspan='5'><i>Tidak ada Data</i>	</td>");
				 	
				 }
					
					setTimeout(function(){$("#DataAkun").append(items).fadeIn(2000);},0);
			    	setTimeout(function(){ $('#paginationsearchakun').html(response.pagination);},0);
			    	setTimeout(function(){$("#paginationAkun").appendTo(response.total).fadeIn(2000);},0);
			    	 $('#loadingSearch').fadeOut("slow");
			      },
			      error:function(xhr){
				  	console.log(xhr);
				  
				  }
			          
			    });
					
	}
