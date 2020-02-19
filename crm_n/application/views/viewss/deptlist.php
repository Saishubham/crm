<div class="text-center text-success"><?php echo $this->session->flashdata('msg'); ?></div>
<div class="container"><br>
 <div class="col-md-12"><br>
           	<form action="<?php echo base_url(); ?>index.php/dept/deptlist/">
                    <div class="col-md-4">
            	<div class="row">
                    <div class="col-md-4">
                        <input type="text" name="dname" class="form-control" value="<?php echo $dname; ?>">
                    </div>
                        <input type="submit" name="search" class="btn btn-success btn-sm">
                    </div>
                </div>
            </form>
           </div><br>
    <h2>Department List</h2>
    <div class="col-md-12">
    	<table class="table table-bordered">
        	<tr>
            	<td>ID</td>
            	<td>Department Name</td>
            	<td>Profile</td>
                <td colspan="3">Modify</td>
            </tr>
            <?php
				//print_r($array);
				foreach($array as $dept){
			?>
            <tr>
             	<td>
				<?php 
					//echo $dept->id;
					echo $dept['id']; 
				?>
                </td>
            	<td>
				<?php 
					//echo $dept->dname;
					echo $dept['dname']; 
				?>
                </td>
            	<td>
				<?php 
					//echo $dept->profile;
					echo $dept['profile']; 
				?>
                </td>
              			 <td><a href="<?php echo base_url(); ?>index.php/dept/editdept/<?php echo $dept['id']; ?>">EditDept</a></td>
                    	<td><a href="#">Print</a></td>
                    	<td><a href="<?php echo base_url(); ?>index.php/dept/deletedept/<?php echo $dept['id']; ?>">Delete</a></td>
                      
            </tr>
            <?php
			 
				}
				//print_r($pagefilters);
				$pagefilters=http_build_query($pagefilters);
				if($pagefilters!=""){
					$pagefilters="?".$pagefilters;
				}
				if($pages>1){
			?>
            <tr>
            	<td colspan="8">
                	<ul class="pagination">
                    
                	<?php
						for($i=1;$i<=$pages;$i++){
					?>
                    	<li class="page-item">
                        	<a class="page-link" 
                            href="<?php echo base_url(); ?>index.php/dept/deptlist/page/<?php echo $i; ?>/<?php echo $pagefilters; ?>">
								<?php echo $i; ?>
                            </a>
                        </li>
                    <?php
						}
					?>	
                    </ul>
                </td>
            </tr>
            
            <?php
				}
			?>
        </table>
    </div>
</div>