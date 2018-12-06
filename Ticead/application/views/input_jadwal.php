<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal" action="<?=base_url("index.php/C_jadwal/proses_jadwal")?>" method="POST">
<fieldset>

<!-- Form Name -->
<legend>Form Input Jadwal</legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" for="nama">Waktu</label>  
  <div class="col-md-4">
  <input id="nama" name="kickoff" type="datetime-local" placeholder="Waktu" class="form-control input-md">
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="tim kandang">Tim Kandang</label>
  <div class="col-md-2">
    <select  name="kd_tim" class="form-control">
      <option>Pilih Tim Kandang</option>
        <?php $tim= $this->db->query("SELECT * FROM tim")->result();
                foreach ($tim as $tm) {
               ?>
              <option value="<?=$tm->kd_tim?>"><?=$tm->nm_tim?></option>
              <?php } ?>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="tim kandang">Tim Tandang   </label>
  <div class="col-md-2">
    <select  name="kd_tim2" class="form-control">
      <option>Pilih Tim Tandang</option>
        <?php $tim= $this->db->query("SELECT * FROM tim")->result();
                foreach ($tim as $tm) {
               ?>
              <option value="<?=$tm->kd_tim?>"><?=$tm->nm_tim?></option>
              <?php } ?>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="tim kandang">Stadion   </label>
  <div class="col-md-2">
    <select  name="kd_stadion" class="form-control">
      <option>Pilih Stadion</option>
        <?php $std= $this->db->query("SELECT * FROM stadion")->result();
                foreach ($std as $st) {
               ?>
              <option value="<?=$st->kd_stadion?>"><?=$st->nm_stadion?></option>
              <?php } ?>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="No HP/WA/BBM">Harga Tiket</label>  
  <div class="col-md-4">
  <input  name="harga_tiket" type="number" placeholder="Harga Tiket" class="form-control ">
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
