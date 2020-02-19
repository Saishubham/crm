<div class="bgh">
<nav class="navbar">
 <a class="navbar-brand" style="margin-left:10px; size:30px; size:40px;" href="<?php  echo base_url();?>"><strong>Shree Ram Finanace</strong></a>
      <div class="container">
      
        <div class="navbar-header menu">
          <button type="button btn-danger"  class="navbar-toggle collapsed" data-toggle="collapse" aria-expanded="false" data-target="#site-menu">
          <span><a href="#">Menu</a></span>
          </button>
           </div>
           
        <!-- end of navbar-header-->
        
        <div class="collapse navbar-collapse" id="site-menu">
          <ul class="nav navbar-nav navbar-left" style="padding-top:50px;">
          <?php
				  	if($this->session->userdata('user_id')!==NULL){
				  ?>
            <li class="active " <?php echo set_active("home"); ?>><a href="<?php echo base_url(); ?>index.php/home/"><span class="glyphicon glyphicon-home"><strong>Home</strong></span></a></li>
            <li <?php echo set_active("regt"); ?>><a href="<?php echo base_url(); ?>index.php/regt/"><span class="glyphicon glyphicon-user"><strong>New</strong></span></a></li>
          
           <li <?php echo set_active("payment"); ?>><a href="<?php echo base_url(); ?>index.php/payment/getid/"><span class="glyphicon glyphicon-usd"><strong >Payment</strong><span></a></li>
           <li <?php echo set_active("regt"); ?>><a href="<?php echo base_url(); ?>index.php/payment/expiry/"><span class="glyphicon glyphicon-off"><strong >Expiry-Alert</strong></span></a></li>
           <li><a href="<?php echo base_url(); ?>index.php/regt/customerlist/"><span class="glyphicon glyphicon-list"><strong> Customer-Rport </strong></span></a></li>
           <li><a href="<?php echo base_url(); ?>index.php/payment/getinslist/"><span class="glyphicon glyphicon-list"><strong>Installment-Report </strong></span></a></li>
       
         <li><a href="<?php echo base_url();?>index.php/login/logout/"><span class="glyphicon glyphicon-log-out"><strong>logout</strong></span></a></li> 
         
         <?php }
		 
		 ?>  
           </ul>
        </div>
      </div>
    </nav>
    </div>