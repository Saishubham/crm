<div class="container"><br>
    <h2>Department-form</h2>
    <div class="text-center text-success"><?php echo $this->session->flashdata('msg'); ?></div>
    <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/dept/updatedept/" method="post">
        <div class="form-group">
            <label class="control-label col-sm-2" for="name">Dept-name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="dname" placeholder="Enter Department name" name="dname" value="<?php echo $dept['dname']; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Profile</label>
            <div class="col-sm-10">          
            <input type="text" class="form-control" id="email" placeholder="Enter profile" name="profile" value="<?php echo $dept['profile']; ?>">
            </div>
        </div>
    <div class="form-group">     
            <div class="col-sm-10">
            <input type="hidden" name="id" value="<?php echo $dept['id'];?>">
                <button type="submit" class="btn btn-success" name="updatedept">Submit</button>
            </div>
        </div>
    </form>
</div>