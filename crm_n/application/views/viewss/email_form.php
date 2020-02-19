
<div class="container">
<h2>Email form</h2>
<div></div> <div class="text-center text-success"><?php echo $this->session->flashdata('msg'); ?></div>
    <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/email_controller/sendmail/" method="post">

    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email</label>
        <div class="col-sm-10">          
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="subject">Subject</label>
        <div class="col-sm-10">          
        <input type="text" class="form-control" id="subject" name="subject">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="message">Message</label>
        <div class="col-sm-10">  
        	<textarea name="message" id="message" class="form-control"></textarea>
        </div>
    </div>
    <div class="form-group">     
        <div class="col-sm-10">
        	<button type="submit" class="btn btn-success" name="sendmail">Submit</button>
        </div>
    </div>
</form>
</div>