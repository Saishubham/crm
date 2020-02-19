<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
<h2>Task form</h2>
<div></div> <div class="text-center text-success"><?php echo $this->session->flashdata('msg'); ?></div>
    <form class="form-horizontal" action="<?php echo base_url(); ?>index.php/task/updatetask/" method="post">

    <div class="form-group hidden">
        <label class="control-label col-sm-2" for="name">Name</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>
    </div>
    <div class="form-group hidden">
        <label class="control-label col-sm-2" for="email">Email</label>
        <div class="col-sm-10">          
        <input type="mail" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="date">Date</label>
        <div class="col-sm-10">          
        <input type="date" class="form-control" id="date" name="date" value="<?php echo $task['date']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="taskname">Task-name</label>
        <div class="col-sm-10">          
        <input type="text" class="form-control" id="taskname" placeholder="Enter task" name="taskname" value="<?php echo $task['taskname']; ?>">
        </div>
    </div>
    <div class="form-group col-md-4">
        <label for="department">Department</label>
        <select id="department" name="department" class="form-control">
            <option value="">Choose...</option>
            <?php
					foreach($depts as $dept){
			?>
            <option value="<?php echo $dept['dname']; ?>" <?php if($task['department']==$dept['dname']){ echo "selected";} ?>><?php echo $dept['dname']; ?></option>
            <?php
					}	
				
			?>
        </select>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="details">Task Details</label>
        <div class="col-sm-10">       
        <textarea name="details" id="details" class="form-control"><?php echo $task['details']; ?></textarea>
        </div>
    </div>
    <div class="form-group">     
        <div class="col-sm-10">
        	<input type="hidden" name="id" value="<?php echo $task['id']; ?>">
        	<button type="submit" class="btn btn-success" name="updatetask">Submit</button>
        </div>
    </div>
</form>
</div>