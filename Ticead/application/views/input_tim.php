<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal" action="<?=base_url("index.php/C_tim/proses_tim")?>" method="POST">
<fieldset>

<!-- Form Name -->
<legend>Form Input Tim</legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Nama Tim</label>  
  <div class="col-md-4">
  <input name="nm_tim" type="text" placeholder="Nama Tim" class="form-control input-md">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label">Kota Tim</label>  
  <div class="col-md-4">
  <input name="kota_tim" type="text" placeholder="Kota Tim" class="form-control input-md">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="nama">logo Tim</label>  
  <div class="col-md-4">
  <input name="img_tim" type="text" placeholder="logo Tim" class="form-control input-md">
  </div>
</div>

<!-- File Button --> 


<!-- Button -->
<div class="form-group">
  
  <center>
  <div class="col-md-12">
    <button id="kirim" name="kirim" class="btn btn-primary">kirim</button>
  </div>
    
  </center>
</div>

</fieldset>
</form>
