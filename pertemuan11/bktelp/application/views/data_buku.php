<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>List Buku Telp</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
</head>
<body>
<div class="container">
	<!-- Page Heading -->
        <div class="row">
            <h1 class="page-header">Buku
                <small>Telpon</small>
				<div class="pull-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalaAdd"><span class="fa fa-plus"></span> Tambah Nomer</a></div>
            </h1>
        </div>
	<div class="row">
		<div id="reload">
		<table class="table table-striped" id="mydata">
			<thead>
				<tr>
					<th>Nama</th>
					<th>No Telp</th>
					<th>Alamat</th>
                   	<th>Foto</th>
				</tr>
			</thead>
			<tbody id="show_data">
				
			</tbody>
		</table>
		</div>
	</div>
</div>

		<!-- MODAL ADD -->
        <div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Nomer</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama</label>
                        <div class="col-xs-9">
                            <input name="nama" id="nama" class="form-control" type="text" placeholder="Nama" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >No Telpon</label>
                        <div class="col-xs-9">
                            <input name="nomer" id="no_telp" class="form-control" type="text" placeholder="Nomer Telp" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Alamat</label>
                        <div class="col-xs-9">
                            <input name="alamat" id='alamat' class="form-control" type="text" placeholder="Alamat" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Upload Foto</label>
                         <div class="col-xs-9">
                            <input name="foto" id="pict" class="form-control" type="file" placeholder="Foto" style="width:335px;" required>
                        </div>
                        
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_simpan">Simpan</button>
                </div>
                
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL ADD-->

        <!-- MODAL EDIT -->
        <div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Edit Buku</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama</label>
                        <div class="col-xs-9">
                            <input name="nama_edit" id="nama2" class="form-control" type="text" placeholder="Nama" style="width:335px;" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nomer Telepon</label>
                        <div class="col-xs-9">
                            <input name="nomer_edit" id="nomer2" class="form-control" type="text" placeholder="Nomer Telpn" style="width:335px;" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Address</label>
                        <div class="col-xs-9">
                            <input name="address_edit" id="address2" class="form-control" type="text" placeholder="Alamat" style="width:335px;" required>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_update">Update</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL EDIT-->

        <!--MODAL HAPUS-->
        <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Barang</h4>
                    </div>
                    <form class="form-horizontal">
                    <div class="modal-body">
                                          
                            <input type="hidden" name="kode" id="textkode" value="">
                            <div class="alert alert-warning"><p>Apakah Anda yakin mau memhapus barang ini?</p></div>
                                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--END MODAL HAPUS-->

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		tampil_buku();	//pemanggilan fungsi tampil barang.
		
		$('#mydata').dataTable();
		 
		//fungsi tampil barang
		function tampil_buku(){
		    $.ajax({
		        type  : 'GET',
		        url   : '<?php echo base_url()?>index.php/barang/data_buku',
		        async : true,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr>'+
		                  		'<td>'+data[i].nama+'</td>'+
		                        '<td>'+data[i].no_telp+'</td>'+
		                        '<td>'+data[i].alamat+'</td>'+
                                '<td>'+data[i].pict+'</td>'+
		                        '<td style="text-align:right;">'+
                                    '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].no_telp+'">Edit</a>'+' '+
                                    '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].no_telp+'">Hapus</a>'+
                                '</td>'+
		                        '</tr>';
		            }
		            $('#show_data').html(html);
		        }

		    });
		}

		//GET UPDATE
		$('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('index.php/barang/get_buku')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                	$.each(data,function(nama, no_telp, alamat, pict){
                    	$('#ModalaEdit').modal('show');
            			$('[name="nama_edit"]').val(data.nama);
            			$('[name="nomer_edit"]').val(data.no_telp);
            			$('[name="alamat_edit"]').val(data.alamat);
                        $('[name="pict_edit"]').val(data.pict);
            		});
                }
            });
            return false;
        });


		//GET HAPUS
		$('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="no_telp"]').val(id);
        });

		//Simpan Barang
		$('#btn_simpan').on('click',function(){
            var nama=$('#nama').val();
            var nomer=$('#no_telp').val();
            var alamat=$('#alamat').val();
            var pict=$('#pict').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/barang/simpan_buku')?>",
                dataType : "JSON",
                data : {nama:nama , nomer:nomer, alamat:alamat, pict:pict},
                success: function(data){
                    $('[name="nama"]').val("");
                    $('[name="nomer"]').val("");
                    $('[name="alamat"]').val("");
                    $('[name="pict"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_buku();
                }
            });
            return false;
        });

        //Update Barang
		$('#btn_update').on('click',function(){
            var nama=$('#nama2').val();
            var nomer=$('#nomer2').val();
            var alamat=$('#alamat2').val();
            var pict=$('#pict2').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/barang/update_buku')?>",
                dataType : "JSON",
                data : {nama:nama , nomer:nomer, alamat:alamt, pict:pict},
                success: function(data){
                    $('[name="nama_edit"]').val("");
                    $('[name="nomer_edit"]').val("");
                    $('[name="alamat_edit"]').val("");
                    $('[name="pict_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_buku();
                }
            });
            return false;
        });

        //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var nomer=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('index.php/barang/hapus_data')?>",
            dataType : "JSON",
                    data : {nomer: nomer},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_buku();
                    }
                });
                return false;
            });

	});

</script>
</body>
</html>