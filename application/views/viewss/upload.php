
<div class="container">
    <div class="row"><br>
        <div class="col-md-3"></div>
        <div class="col-md-6"><br><br>
            <form action="<?php echo base_url(); ?>index.php/upload/uploadimage/" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="image">Upload:</label>
                    <input type="file" name="image">
                </div>
                <input type="submit" name="upload" value="Upload" class="btn btn-sm btn-success">
            </form>
            <?php
				$attributes['enctype']="multipart/form-data";
				$attributes['class']="abc";
				$attributes['id']="asd";
				$hidden=array("name"=>"abc","id"=>1);
            	echo form_open("upload/uploadimage/",$attributes,$hidden);
				
			?>
        </div>
    </div>
</div>