<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$this->load->view('header');
?>
<body class="grey lighten-3">
	 <nav class="nav deep-purple darken-4">
	    <div class="nav-wrapper transparent">
	      <ul id="nav-mobile" class="left hide-on-med-and-down">
	        <li><a href="<?php echo base_url('index.php/C_Tim') ?>" class="link">Tim</a></li>
	        <li><a href="<?php echo base_url('index.php/C_jadwal') ?>" class="link">Jadwal Pertandingan</a></li>
	        <li><a href="PesanTiket.html" class="link">Pesan Tiket</a></li>
	      </ul>
	      <form class="right" width="35%" height="40%">
	        <div class="input-field" style="display: none;" id="search-div">
	          <input id="search-txt" type="search">
	          <label class="labelsearch" for="search-txt">Search </label>
	          <i class="material-icons" id="close-icon">close</i>
	        </div>
	      </form>
		   <ul id="nav-mobile" class="right hide-on-med-and-down">
	        <li><i class="material-icons">search</i></a>
	         <li><a href="<?=base_url('index.php/C_login/logout')?>">Logout</a></li>
	        </li>
	      </ul>
	      <a href="<?=base_url('index.php/C_home')?>" class="brand-logo center">Ticead</a>
	      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
	    </div>
	  </nav>
	

	<!-- Konten -->
	<div class="container">
		<div class="title-content">
		<?php 
			$nm_tim = $this->db->query("SELECT nm_tim FROM tim WHERE kd_tim='".$this->uri->segment(3)."'")->row();
		?>
			<h4 class="title-text-content"><b> Jadwal Pertandingan <?php
			if(!empty($nm_tim)){
			echo $nm_tim->nm_tim;
		}else{

		}

			?> </b></h4>

			<hr class="title-line-content grey lighten-1">
			
				<?php if($_SESSION['masuk']['status']==1){ ?>

		<a href="<?=base_url("index.php/C_jadwal/input_jadwal")?>" class="btn btn-get waves-effect modal-trigger white light-blue darken-2" style="margin-bottom:30px;margin-left:1040px">Tambah +</a>
		<?php } ?>
		

			

		</div>

		<div class="list-match">		
		    <div class="row event">
		    	<?php
						foreach ($jadwal as $isi) {
					?>
					
		      	<div class="col s12 m12 l12 xl12 event-content grey lighten-4">
		      	  <div class="link-event-match">
		      		<ul class="event-match ">
			      		<li class="event-Listmatch">
			      			<div class="item__date">
							    <time datetime="2019-06-01T21:00:00+0200">
							        <span class="date__weekday center">
							            <?php echo $isi->kickoff; ?>
							        </span>
								</time>
							</div>
							</li>
			      		
			      		<li class="event-Listmatch fill ">
			      			<div class="item__event">
						            <div class="event__info">
									    <span class="event__title"><?php 

									    $tim1 = $this->db->query("SELECT * FROM tim WHERE kd_tim='$isi->kd_tim'")->row();
									    $tim2 = $this->db->query("SELECT * FROM tim WHERE kd_tim='$isi->kd_tim2'")->row();
									    echo $tim1->nm_tim; ?> vs <?php echo $tim2->nm_tim; ?></span>
									    <br>
									    <span class="event__info_cw">
									    <span class="event__time">
									        <time datetime="2019-06-01T21:00:00+0200">
								                <?php echo $isi->nm_stadion?>
								            </time> 
								        </span>
								        <span class="event__location">
								            
								        </span>
									    </span>	
									    <br>					    
									    <span class="event__note"><?php echo $isi->kota_stadion; ?></span>
									</div>
							</div>
							</li>
						<li class="event-Listmatch price">
									<div class="event__price">
								    	<div>
							                <span class="price__from">
						                    <span class="text__from right">Dari</span>
						                    <br>
						                    <b>Rp<?php echo $isi->harga_tiket== 0 ? '' : number_format($isi->harga_tiket, 0, ',', '.')?></b> 
						                    <br>
						                    <a href="LivVsArs.html" class="btn btn-get waves-effect white light-blue darken-2">Get Ticket</a>
						                    <?php if($_SESSION['masuk']['status']==1){ ?>
						                    <a href="<?=base_url("index.php/C_Jadwal/hapus_jadwal/").$isi->kd_jadwal?>" class="btn btn-primary  darken-2">Hapus</a>   
						                    <?php } ?>    
						                    </span>
						                </div>
						            </div>
					   </li>
					  </ul>	
			      	</div>
			    </div>
			   
			    <?php
			    	}
			    ?>
			</div>
			</div>
			</div>

<div id="modal-add-tim" class="modal fade" role="dialog">
		<div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        
      </div>
      <div class="modal-body">
        <form method="POST" action="<?php echo base_url("index.php/C_jadwal/input_jadwal") ?>">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Waktu:</label>
            <input type="datetime-local" name="kickoff" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Tim kandang:</label>
            <select name="kd_tim">
            	<option >pilih tim Kandang</option>
            	<?php $tim= $this->db->query("SELECT * FROM tim")->result();
            		foreach ($tim as $tm) {
            	 ?>
            	<option value="<?=$tm->kd_tim?>"><?=$tm->nm_tim?></option>
            	<?php } ?>

            </select>
          </div>
            <div class="form-group">
            <label for="message-text" class="col-form-label">Tim Tandang:</label>
            <select name="kd_tim2">
            	<option >pilih tim Tandang</option>
            	<?php $tim= $this->db->query("SELECT * FROM tim")->result();
            		foreach ($tim as $tm) {
            	 ?>
            	<option value="<?=$tm->kd_tim?>"><?=$tm->nm_tim?></option>
            	<?php } ?>

            </select>
             <div class="form-group">
            <label for="message-text" class="col-form-label">Stadion:</label>
            <select name="kd_stadion">
            	<option >pilih stadion</option>
            	<?php $std= $this->db->query("SELECT * FROM stadion")->result();
            		foreach ($std as $st) {
            	 ?>
            	<option value="<?=$st->kd_stadion?>"><?=$st->nm_stadion?></option>
            	<?php } ?>

            </select>
          </div>
          <label for="recipient-name" class="col-form-label">Harga Tiket:</label>
            <input type="number" name="harga_tiket" class="form-control" id="recipient-name">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Send message</button>
        </form>
      </div>
    </div>
							 </div>
			<footer>

	</footer>
		<!--<div class="row footer-content deep-purple darken-4">
				
		</div>-->
	
        

	<script src="https://v4-alpha.getbootstrap.com/dist/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>asset/js/jquery-3.3.1.js"></script>
	<script src="<?php echo base_url(); ?>asset/js/materialize.js"></script>
	<script src="<?php echo base_url(); ?>asset/js/owl.carousel.js"></script>
	<script src="<?php echo base_url(); ?>asset/js/main.js"></script>

	</body>