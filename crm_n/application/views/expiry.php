<section class="container">
 <div class="panel panel-primary">
                        <div class="panel-heading">
                            <font size="+2">Reminder</font>
                        </div>
                        <div class="panel-body">
		<div class="row">
           <div col-md-12>
           	<?php
				
				foreach($array as $regt)
				{
			?>
               <table class="table table-bordered">
               <tbody align="center" class="navbg">
              <tr> 		<td>Customer Id:</td> 
              		 <td>Customer Name:</td>
                     <td>Customer Address:</td>
                   	<td>Customer Phone:</td>
                 	 <td>Finanace-Amount:</td>
                    <td>Installment Amount:</td>
                    <td>Installment-Date:</td>
                   
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
                
                       </tr>
         
            <?php 
				}
				//print_r($pagefilters);
//				$pagefilters=http_build_query($pagefilters);
//				if($pagefilters!=""){
//					$pagefilters="?".$pagefilters;
				//}
				if($pages>1)
				{
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
			?>
            
     </div><!--end pof panel body-->
   </div>
         </div>
       </div><!-- end of container-->
   			</div><!-- end of panel body-->
 		</div> <!--- end of main panel-->
</section><!--end of section-->