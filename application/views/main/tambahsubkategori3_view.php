 <script type="text/javascript">
  function showKat()
  {
    kdkat = document.getElementById("masterkat").value;
	//alert(kdkat);
     $.ajax({
		url:"<?=site_url()?>/dashboard/get_kategori/"+kdkat+"",
		success: function(response){			
    		$("#subkat1").html(response);
  		},
  		dataType:"html"  		
  	});
  	return false;
  }
   
  function showKat1()
  {
	kdkat = document.getElementById("masterkat").value;
    kdsubkat1 = document.getElementById("subkat1").value;
	//alert(kdkat);
     $.ajax({
		url:"<?=site_url()?>/dashboard/get_kategori2/"+kdkat+"/"+kdsubkat1+"",
		success: function(response){			
    		$("#subkat2").html(response);
  		},
  		dataType:"html"  		
  	});
  	return false;
  }

</script>
 
 <ul class="breadcrumb">
  <li><a href="<?php echo base_url();?>">Home</a></li>
  <li><a href="<?php echo base_url();?>index.php/admin/sub_kategori3">Sub Kategori 3</a></li>
  <li class="active">Tambah Sub Kategori 3</li> 
</ul>
<?php echo $pesan;?>
<div class="form-group">
<?php 
$attributes = array(
        'name'          => 'frm_subkategori3',
        'id'            => 'form-validated',
        'class'     	=> 'well form-horizontal',
		'enctype'		=> 'multipart/form-data'
);

echo form_open_multipart('admin/insertsubkategori3', $attributes);

?>
<label for="masterkat">Nama Master Kategori:</label>
 <select class="form-control" name="masterkat" id="masterkat" onChange="showKat()">
 <option></option>
 <?php
foreach($query->result() as $data):
?>
    <option value="<?php echo $data->id;?>"><?php echo $data->nama_kategori; ?></option>
<?php endforeach; ?>  
  </select>
  

  <label for="subkat1">Sub Kategori 1:</label>
  <select class="form-control" id="subkat1" name="subkat1" onChange="showKat1()">
  </select> 
  
  <label for="subkat2">Sub Kategori 2:</label>
  <select class="form-control" id="subkat2" name="subkat2">
  </select>  
  
<label for="namasubkat">Sub Kategori 3:</label>
  <input type="text" class="form-control" name="namasubkat3" id="namasubkat3">
  
  <label for="kode">Kode:</label>
  <input type="text" class="form-control" name="kode" id="kode">
  
  <label for="deskripsi">Deskripsi:</label>
  <textarea class="form-control" rows="5" id="deskripsisubkat3" name="deskripsisubkat3"></textarea>
<br>
  <input name="simpan" value="Simpan" class="btn btn-primary" type="submit">  
  <input type="button" name="cancel" class="btn btn-danger" value="Batal" onClick="history.go(-1);return true;"/>
 
</form>
</div>