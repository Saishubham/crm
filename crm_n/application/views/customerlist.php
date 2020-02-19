<div class="container">
<div class="text-center"><?php echo $this->session->flashdata('msg'); ?></div>
     <div class="collapse details" id="details"></div>
           <div class="col-md-12"><br>
           	<form action="<?php echo base_url(); ?>index.php/regt/customerlist/" method="get">
                    <div class="col-md-4">
            	<div class="row">
                    <div class="col-md-10">
                        <input type="number" name="query" class="form-control" placeholder="Customer-phone/id" value="<?php echo $query; ?>">
                    </div>
                        <input type="submit" name="search" class="btn btn-success btn-sm">
                    </div>
                </div>
            </form>
           </div>
           <br><div class="row">
           <div col-md-12>
           		<div class="container-fluid">
                
 						<div class="panel panel-primary">
                        <div class="panel-heading">
                            <font size="+2">Report</font>
                        </div>
                        <div class="panel-body">
                        <?php
				//print_r($array);
				if(empty($array)){
					echo "<div class='alert alert-danger glyphicon glyphicon-ban-circle'><strong>No Record Found Or Input Mismatch</strong></div>";
				}
				else{	
				foreach($array as $regt){
			?>
               <table class="table table-bordered">
               <tbody align="center" class="navbg">
              <tr> <td>Customer-Id:</td> 
               <td>Customer Name:</td>
                     <td>Customer Address:</td>
                   	<td>Customer Phone:</td>
                    <td>Gurantor name:</td>
                    <td>Gurantor Address:</td>
                    <td>Gurantor Phone:</td>
                    <td>Finanace-Amount:</td>
                    <td>Installment Amount:</td>
                    <td>Installment-date:</td>
                    <td>Modify</td>
                    
                   </tr>
             
                     <tr>
                     <td>
				<?php 
					//echo $dept->dname;
					echo $regt['id']; 
				?>
                </td>
            	<td>
				<?php 
					//echo $dept->dname;
					echo $regt['cname']; 
				?>
                </td>
            	<td>
				<?php 
					//echo $dept->dname;
					echo $regt['caddress']; 
				?>
                </td>
            	<td>
				<?php echo $regt['cphone'];?>
                </td>
                <td>
				<?php 
					//echo $dept->dname;
					echo $regt['gname']; 
				?>
                </td>
                <td>
				<?php 
					//echo $dept->dname;
					echo $regt['gaddress']; 
				?>
                </td>
                <td>
				<?php 
					//echo $dept->dname;
					echo $regt['gphone']; 
				?>
                </td>
                <td>
				<?php 
					//echo $dept->dname;
					echo $regt['fin_amount']; 
				?>
                </td>
                <td>
				<?php 
					//echo $dept->dname;
					echo $regt['insamount']; 
				?>
                </td>
                <td>
				<?php 
					//echo $dept->dname;
					echo $regt['insdate']; 
				?>
                </td>
              <td><a href="<?php echo base_url(); ?>index.php/regt/editcustomer/<?php echo $regt['id']; ?>">Modify</a></td>
                        
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
					?><?php /*?><ul class="pagination">
                    
                	<?php
						for($i=1;$i<=$pages;$i++){
					?>
                    	<li class="page-item">
                        	<a class="page-link" 
                            href="<?php echo base_url(); ?>index.php/regt/customerlist/page/<?php echo $i; ?>/<?php echo $pagefilters; ?>"><?php */?>
								<?php // echo $i; ?>
                            </a>
                       <!-- </li>
                   	
                    </ul>-->
                </td>
            </tr>
            </tbody>
          </table>
            <?php
						}
				}
			?>
            
     </div><!--end pof panel body-->
     </div></div>
    </div>
            </div>
            </div>
             </div>
      </div><!--end of row-->
       </div><!--- end of second container-->
        </div>
<!--end of main container--><br><br>
