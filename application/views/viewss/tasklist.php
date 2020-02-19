<div class="container">



<?php
function getStatus($status){
		if($status==0){
			return "Pending";
		}else{
			return "Complete";
		}
	}
	/*if(is_array($array)){ $i=$offset;
		foreach($array as $row){
			$i++;
			//echo $row['taskname'];*/
?>
			<div class="text-center"><?php echo $this->session->flashdata('msg'); ?></div>
            <div class="col-md-12">
                    <?php //echo $i.". ".$row['taskname']; ?>
                </div>
                <div class="collapse details" id="details<?php //echo $i; ?>"></div>
           <div class="col-md-12"><br>
           	<form action="<?php echo base_url(); ?>index.php/task/tasklist/">
                    <div class="col-md-4">
            	<div class="row">
                    <div class="col-md-4">
                        <input type="text" name="taskname" class="form-control" value="<?php echo $taskname; ?>">
                    </div>
                        <input type="submit" name="search" class="btn btn-success btn-sm">
                    </div>
                </div>
            </form>
           </div><br>
           <div class="col-md-12">
               <table class="table table-bordered">
              <tr>
                   <td> Date :</td>
                    <td>Taskname :</td>
                    <td>Department :</td>
                    <td>Task Details: </td>
                    <td>Status : </td>
                    <td colspan="3">Modify</td>
                   
                    	
                    
                    
                    </tr>
                     <?php
				//print_r($array);
				foreach($array as $task){
			?>
                     <tr>
                    
             	<td>
				<?php 
					//echo $dept->id;
					echo $task['date']; 
				?>
                </td>
            	<td>
				<?php 
					//echo $dept->dname;
					echo $task['taskname']; 
				?>
                </td>
            	<td>
				<?php 
					//echo $dept->dname;
					echo $task['department']; 
				?>
                </td>
            	<td>
				<?php 
					//echo $dept->profile;
					echo $task['details']; 
				?>
                </td>
                <td>
				<?php echo getstatus($task['status'])?>
                </td>
                		
                        <td><a href="<?php echo base_url(); ?>index.php/task/edittask/<?php echo $task['id']; ?>">Edit Task</a></td>
                    	<td><a href="#">Print</a></td>
                    	<td><a href="<?php echo base_url(); ?>index.php/task/deletetask/<?php echo $task['id']; ?>">Delete</a></td>
                      
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
                	<?php 
						echo $paging;
					/*?><ul class="pagination">
                    
                	<?php
						for($i=1;$i<=$pages;$i++){
					?>
                    	<li class="page-item">
                        	<a class="page-link" 
                            href="<?php echo base_url(); ?>index.php/task/tasklist/page/<?php echo $i; ?>/<?php echo $pagefilters; ?>">
								<?php echo $i; ?>
                            </a>
                        </li>
                    <?php
						}
					?>	
                    </ul><?php */?>
                </td>
            </tr>
            <?php
				}
			?>
                    </table>
           </div>
            <br>

</div>