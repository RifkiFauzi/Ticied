<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$this->load->view('header');
?>
<body>
<div class="form">
      
      <div class="row tab-group">
        <div class="col s6 tab"><a href="#login">Log In</a></div>
        <div class=" col s6 tab active"><a href="#signup">Sign Up</a></div>
      </div>
      
      <div class="tab-content">
        <div id="login">   
          <h6>Welcome Back!</h6>
          
          <?php echo form_open('C_login/verify_login'); ?>
          
            <div class="field-wrap">
            <label>
              Username<span class="req"></span>
            </label>
            <input type="text" name="username"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password"required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button type="submit" class="submit btn btn-get waves-effect white light-blue darken-2"/>Log In</button>
          
          <?php echo form_close(); ?>

        </div>
        <div id="signup">   
          <h6>Sign Up</h6>
          
          <form action="<?php echo base_url("index.php/C_daftar") ?>" method="post">
          
          <div class="top-row col s6">
            <div class="field-wrap">
              <label>
                Username<span class="req">*</span>
              </label>
              <input type="text" name="username" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Emai<span class="req">*</span>
              </label>
              <input type="email"required name="email" autocomplete="off"/>
            </div>
       

          <div class="field-wrap">
              <label>
                Nama Lengkap<span class="req">*</span>
              </label>
              <input type="text" required name="nm_lengkap" autocomplete="off"/>
            </div>
          

          <div class="field-wrap">
            <label>
              No.HP<span class="req">*</span>
            </label>
            <input type="number"required name="no_hp" autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required name="password" autocomplete="off"/>
          </div>
          
          <button type="submit" class="submit btn btn-get waves-effect white light-blue darken-2"/>Daftar</button>
          
          </form>

        </div>
        
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
<script src="<?php echo base_url(); ?>asset/js/jquery-3.3.1.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/materialize.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/owl.carousel.js"></script>
  <script src="<?php echo base_url(); ?>asset/js/main.js"></script>
  </body>