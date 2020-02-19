<div class="text-center"><?php echo $this->session->flashdata('msg'); ?></div>

<div class="container">
 <div class="panel panel-primary">
                        <div class="panel-heading">
                            <font size="+2">Registraion</font>
                        </div>
                        <div class="panel-body">
                        <form method="post" action="<?php echo base_url(); ?>index.php/payment/get_payment/">
       <table class="table table-striped">
          <tbody>
          <th>New Registrartion</th>
             <tr>
                <td colspan="1">
                   
                      <fieldset>
                          <div class="form-group">
                            <label class="col-md-4 control-label">Customer-ID</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input  name="id" placeholder="customerid" class="form-control" readonly value="<?php echo $payment['id']; ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Full Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input  name="cname" placeholder="Full Name" class="form-control" readonly value="<?php echo $payment['cname']; ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Address</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input  name="caddress" placeholder="Address Line 1" class="form-control" readonly value="<?php echo $payment['caddress']; ?>" type="text"></div>
                            </div>
                         </div>
                       <!--  <div class="form-group">
                            <label class="col-md-4 control-label">Address Line 2</label>
                            <div class="col-md-8 inputGroupContainer">
 <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input name="caddress" placeholder="Address Line 2" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>-->
                      <!--   <div class="form-group">
                            <label class="col-md-4 control-label">City</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="city" name="city" placeholder="City" class="form-control" required="true" value="<?php echo $payment['city']; ?>" type="text"></div>
                            </div>
                         </div>-->
                         <!--<div class="form-group">
                            <label class="col-md-4 control-label">State</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="state" name="state" placeholder="State" class="form-control" required="true" value="<?php echo $payment['state']; ?>" type="text"></div>
                            </div>
                         </div>-->
                      <div class="form-group">
                            <label class="col-md-4 control-label">Phone Number</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input  name="cphone" placeholder="Phone Number" class="form-control" readonly value="<?php echo $payment['cphone']; ?>" type="text"></div>
                            </div>
                         </div>
                      </fieldset>
                
                </td>
                </tr>
             </tbody>
       </table>
       
     <!---Start of first form-->  
        <table class="table table-striped">
          <tbody>
          <th>guarantor-detail</th>
             <tr>
                <td colspan="1">
              
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Full Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input name="gname" placeholder="Full Name" class="form-control" readonly value="<?php echo $payment['gname']; ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Address</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input  name="gaddress" placeholder="Address Line 1" class="form-control" readonly value="<?php echo $payment['gaddress']; ?>" type="text"></div>
                            </div>
                         </div>
                        <!-- <div class="form-group">
                            <label class="col-md-4 control-label">Address Line 2</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input  name="gaddress" placeholder="Address Line 2" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>-->
                        <!-- <div class="form-group">
                            <label class="col-md-4 control-label">City</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i>
                               </span><input name="gcity" placeholder="City" class="form-control" required="true" value="<?php echo $payment['gcity']; ?>" type="text">
                               </div>
                            </div>
                         </div>-->
                        <!-- <div class="form-group">
                            <label class="col-md-4 control-label">State</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input name="gstate" placeholder="State" class="form-control" required="true" value="<?php echo $payment['gstate']; ?>" type="text"></div>
                            </div>
                         </div>-->
                      <div class="form-group">
                            <label class="col-md-4 control-label">Phone Number</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input  name="gphone" placeholder="Phone" class="form-control" readonly value="<?php echo $payment['gphone']; ?>" type="text"></div>
                            </div>
                         </div>
                      </fieldset>
                 
                </td>
                </tr>
             </tbody>
       </table>
       <!---Start of second form-->  
      <div class="panel panel-primary">
                        <div class="panel-heading">
                            <font size="+2">Finanance-detail</font>
                        </div>
                        <div class="panel-body">
       <div class="row">
                                    <div class="col-md-12">
                                     <table class="table table-bordered">
                                            <tbody><tr>
                                                <th width="14%">Finanace-Amount</th>
                                                <td width="20%"><input type="text" name="fin_amount" readonly class="form-control" value="<?php echo $payment['fin_amount']; ?>">
                                                </td>
                                                <th width="14%">Installment Amount</th>
                                                <td width="20%">
                                                	<input type="number" name="insamount" class="form-control" readonly value="<?php echo $payment['insamount']; ?>">
                                                </td>
                                                <th width="14%">Installment-date</th>
                                                <td width="15%">
                                                	<input type="date" name="insdate" readonly class="form-control" value="<?php echo $payment['insdate']; ?>">
                                                </td>
                                                <th width="14%">payment-date</th>
                                                <td width="15%">
                                                	<input type="date" name="paydate" readonly class="form-control" required value="<?php echo $payment['paydate']; ?>">
                                                </td>
                                            </tr>
                                            </tbody>
                                            </table>
                                            </div>
                                         </div>
                       <div class="row"> 
                       	<div class="col-md-12"> 
                         <table class="table table-bordered">  
                         <tbody>               
                        <tr>
                           <th>Late Fine</th>
                                  <td>
                                    <input type="text" name="latefine"  readonly  class="form-control" value="<?php echo $payment['latefine']; ?>">
                                   </td>
                              
                                 
                                    <th>Total</th>
                                  <td>
                                   <input type="text" name="total_amount" placeholder="sub-total" value="<?php echo $payment['total_amount']; ?>"readonly class="form-control">
                                       </td>
                                   <!--  <th>Rest Installment</th>
                                  <td>
                                   <input type="text" name="restins" id="restins" placeholder="sub-total" value="<?php  echo $payment['rinsnum']; ?>" class="form-control" onFocus="getrestinsamount();">
                                       </td>-->
                                  </tr>
                 <table class="table table-bordered">               
   				<tr>	
    				<th>Mode</th>
                               	<td>
                  		 <div>
                      <label for="city">Mode Of Payment:</label>
                        <select name="mode" required class="form-control" id="bankmode">
                                <option value="">--- Select One ---</option>
                                <option value="cash">CASH</option>
                                <option value="bank" id="bankmode">BANK</option>
                                <option value="rtgs">RTGS</option>
                                <option value="neft">NEFT</option>
                                <option value="cheque">CHEQUE</option>
                                <option value="card">CARD</option>
                            </select>
                        </div>
                      </td>
               </tr>
     	
        <tr id="bank" style="display:none;">	
         	<th>Bank name</th>
  			 <td>
   				  <label for="bank">Bank:</label>
                        <select name="bank" class="form-control">
                                <option value="">--- Select One ---</option>
                                <option value="State bank of india">State bank of india</option>
                                <option value="Bank of india">Bank of india</option>
                                <option value="Oriental bank of commerce">Oriental bank of commerce</option>
                                <option value="Central bank">Central Bank</option>
                                <option value="Union Bank">Union Bank</option>
                                <option value="Syndicate bank">Syndicate Bank</option>
                                <option value="Bank of baroda">Bank Of Baroda</option>
                                <option value="Bank of Maharastra">Bank Of Maharastra</option>
                                <option value="Syndicate bank">Punjab National Bank</option>
                                <option value="Syndicate bank">Other</option>
                            </select>
                        </div>
                        </td>
                        </tr>
  			  </table>
              
     <table align="center">
  
                     </table>
    <table align="center">
   <tr>
   <td>
    <button type="submit" class="btn btn-success" name="pay">Submit</button></td>
               </tr>
                     </table>
                     </tbody>
                     </table>
           
                      
						</div>
                        </div>
                         
                     
                    </div>
                    </div>
</table>
    </div>
    </div>
    </div><!--end of container-->
    
