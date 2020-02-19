<div class="container">



<?php
	/*if(is_array($array)){ $i=$offset;
		foreach($array as $row){
			$i++;
			//echo $row['taskname'];*/
?>
            <div class="col-md-12">
               <table class="table table-bordered">
                    <?php //echo $i.". ".$row['taskname']; ?>
                </div>
                <div class="collapse details" id="details<?php //echo $i; ?>">
              <tr>
                   <td> Date :</td>
                    <td>Taskname :</td>
                    <td>Task Details: </td>
                    <td>Status : </td>
                    <div>
                    	<a href="#">Edit Task</a>
                    	<a href="#">Print</a>
                    	<a href="#">Delete</a>
                    
                    </div>
                    </tr>
                     <?php
				//print_r($array);
				foreach($array as $dept){
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
					//echo $dept->profile;
					echo $task['details']; 
				?>
                </td>
                <td>
				//<?php 
//					//echo $dept->profile;
//					echo $task['details']; 
//				?>
                </td>
            </tr>
            <?php
				}
			?>
                    </div>
                    </table>
           </div>
            <br>

</div>