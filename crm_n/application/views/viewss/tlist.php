<div class="container">
<?php
	
	function getStatus($status){
		if($status==0){
			return "Pending";
		}else{
			return "Complete";
		}
	}
?>


<?php
	/*if(is_array($array)){ $i=$offset;
		foreach($array as $row){
			$i++;
			//echo $row['taskname'];*/
?>
            <div class="col-md-12">
                <div class="heading lead" data-toggle="collapse" data-target="#details<?php //echo $i; ?>">
                    <?php //echo $i.". ".$row['taskname']; ?>
                </div>
                <div class="collapse details" id="details<?php //echo $i; ?>">
                    <div>Date : <?php //echo $row['date']; ?></div>
                    <div>Department : <?php //echo $row['department']; ?></div>
                    <div>Details : <?php //echo $row['details']; ?></div>
                    <div>Status : <?php //echo getStatus($row['status']); ?></div>
                    <div>
                    	<a href="?page=edittask&id=<?php //echo $row['id']; ?>">Edit Task</a>
                    	<a href="print.php?id=<?php //echo $row['id']; ?>">Print</a>
                    	<a href="action_page.php?id=<?php //echo $row['id']; ?>">Delete</a>
                    
                    </div>
                </div>
            </div><br>
<?php
	/*	}
	}
	else{
		echo $array;
	}*/
?>
</div>