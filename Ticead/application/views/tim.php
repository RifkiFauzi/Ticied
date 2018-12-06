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

	 <ul class="sidenav" id="mobile-demo">
	    <li><a href="Tim.html">Tim</a></li>
	    <li><a href="Jadwal.html">Jadwal Pertandingan</a></li>
	    <li><a href="PesanTiket.html">Pesan Tiket</a></li>
	  </ul>
	
	<!-- Konten -->
	<div class="container">
		<div class="title-content">
			<h4 class="title-text-content"><b> TIM Sepak Bola</b></h4>
			<?php if($_SESSION['masuk']['status']==1){ ?>
				<hr>
		<a href="<?=base_url("index.php/C_tim/input_tim")?>" class="btn btn-get waves-effect modal-trigger white light-blue darken-2" style="margin-bottom:30px;margin-left:1040px">Tambah +</a>
		<?php } ?>
		
			<hr class="title-line-content grey lighten-1">

		</div>		
					<div class="row">
					<?php
						foreach ($isian as $isi) {
					?>
					
						<div class="col s4">
							<center>
							<img class="item"src="<?php echo base_url(); ?>asset/img/<?php echo $isi->img_tim; ?>">
							
							<a href="<?php echo site_url('C_jadwal/jadwal_tim/').$isi->kd_tim ?>" class="btn waves-effect white light-blue darken-2 darken-text-2">lihat jadwal</a>	
							<?php if($_SESSION['masuk']['status']==1){ ?>
								<a href="<?=base_url('index.php/C_Tim/hapus_tim/').$isi->kd_tim?>" class="btn btn-get  darken-2">Hapus</a>
								<?php } ?>
							</center>	
							<br>		
					
					<br>
						</div>
					
					<?php }?>
				 	
					</div>
		</div>
	</div>		
	</div>
	
	<footer>
		<div class="row footer-content deep-purple darken-4">
		</div>
	</footer>
		<!--<div class="row footer-content deep-purple darken-4">
				
		</div>-->
	
        

	<script src="<?php echo base_url(); ?>asset/js/jquery-3.3.1.js"></script>
	<script src="<?php echo base_url(); ?>asset/js/materialize.js"></script>
	<script src="<?php echo base_url(); ?>asset/js/owl.carousel.js"></script>
	<script src="<?php echo base_url(); ?>asset/js/main.js"></script>
	


</body>
</html>