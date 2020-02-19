<div class="container">
<div class="text-center"><?php echo $this->session->flashdata('msg'); ?></div>
     <div class="collapse details" id="details"></div>
           <div class="col-md-12"><br>
           	<form action="<?php echo base_url(); ?>index.php/payment/getinsdisplay/" method="get">
                    <div class="col-md-5">
            	<div class="row">
                    <div class="col-md-6">
                        <input type="text" name="query" class="form-control" placeholder="search-by" value="<?php echo $query; ?>">
                    </div>
                        <input type="submit" name="search" class="btn btn-success btn-sm">
                    </div>
                </div>
            </form>
           </div>
           <br><div class="row">
           <div col-md-12>
           		<div class="container">
					<div class="panel panel-primary">
                        <div class="panel-heading">
                            <font size="+2">Report</font>
                        </div>
                        <div class="panel-body">
                        <?php
				//print_r($array);
					if(empty($array)){
					echo "<div class='alert alert-danger glyphicon glyphicon-ban-circle'><strong>   Sorry.. No Record Found or Invalid Input</strong></div>";
				}
				else{
				foreach($array as $payment){
			?>
               <table class="table table-bordered table-responsive">
               <tbody align="center" class="navbg">
              <tr>  <td>Customer-Id:</td>
                     <td>Customer Name:</td>
                     <td> Phone:</td>
                      <td> Adress:</td>
                   	<td>Finance Amount:</td>
                    <td>Installment Date:</td>
                    <td>Payment Date:</td>
                    <td>Late-fine:</td>
                  	<td>Total Amount:</td>
                    <td>Rest Installment</td>
                    <td>Mode:</td>
                   </tr>
             
                     <tr>
            	<td>
				<?php 
					//echo $dept->dname;
					echo $payment['user_id']; 
				?>
                </td>
            	<td>
				<?php 
					//echo $dept->dname;
					echo $payment['cname']; 
				?>
                </td>
                <td>
				<?php echo $payment['cphone'];?>
                </td>
                  <td>
				<?php echo $payment['caddress'];?>
                </td>
            	<td>
				<?php echo $payment['fin_amount'];?>
                </td>
                <td>
				<?php 
					//echo $dept->dname;
					echo $payment['insdate']; 
				?>
                </td>
                <td>
				<?php 
					//echo $dept->dname;
					echo $payment['paydate']; 
				?>
                </td>
                <td>
				<?php 
					//echo $dept->dname;
					echo $payment['latefine']; 
				?>
                </td>
                <td>
				<?php 
					//echo $dept->dname;
					echo $payment['total_amount']; 
				?>
                </td>
                <td>
				<?php 
					//echo $dept->dname;
				echo --$rowcount;
					//echo $payment[]; 
				?>
                </td>
                <td>
				<?php 
					//echo $dept->dname;
					echo $payment['mode']; 
				?>
                </td>
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
<!--end of main container-->