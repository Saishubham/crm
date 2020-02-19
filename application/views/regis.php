<div class="text-center text-success"><?php echo $this->session->flashdata('msg'); ?></div>

<div class="container">
 <div class="panel panel-primary">
                        <div class="panel-heading">
                            <font size="+2">Registraion</font>
                        </div>
                        <div class="panel-body">
                        <form method="post" action="<?php echo base_url(); ?>index.php/regt/new_register/">
       <table class="table table-striped">
          <tbody>
          <th>New Registrartion</th>
             <tr>
                <td colspan="1">
                   
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Full Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input  name="cname" placeholder="Full Name" class="form-control" required="true" value="" type="text-only" onKeyPress="return ValidateAlpha(event);"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Address</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input  name="caddress" placeholder="Address Line 1" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                       <!--  <div class="form-group">
                            <label class="col-md-4 control-label">Address Line 2</label>
                            <div class="col-md-8 inputGroupContainer">
 <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input name="caddress" placeholder="Address Line 2" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>-->
                         <div class="form-group">
                            <label class="col-md-4 control-label">City</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="city" name="city" placeholder="City" class="form-control" required="true" value="" type="text" onKeyPress="return ValidateAlpha(event);"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">State</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="state" name="state" placeholder="State" class="form-control" required="true" onKeyPress="return ValidateAlpha(event);" value="" type="text"></div>
                            </div>
                         </div>
                      <div class="form-group">
                            <label class="col-md-4 control-label">Phone Number</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input  name="cphone" placeholder="Phone Number" class="form-control" maxlength="10" required="true" value="" type="text" onkeypress="return isNumberKey(event);"></div>
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
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input name="gname" placeholder="Full Name" class="form-control" required="true" value="" onKeyPress="return ValidateAlpha(event);" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Address</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input  name="gaddress" placeholder="Address Line 1" class="form-control" required="true" value="" type="text" ></div>
                            </div>
                         </div>
                        <!-- <div class="form-group">
                            <label class="col-md-4 control-label">Address Line 2</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input  name="gaddress" placeholder="Address Line 2" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>-->
                         <div class="form-group">
                            <label class="col-md-4 control-label">City</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input name="gcity" placeholder="City" class="form-control" required="true" value="" type="text" onKeyPress="return ValidateAlpha(event);"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">State</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input name="gstate" placeholder="State" class="form-control" required="true" value="" type="text" onKeyPress="return ValidateAlpha(event);"></div>
                            </div>
                         </div>
                      <div class="form-group">
                            <label class="col-md-4 control-label">Phone Number</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input  name="gphone" placeholder="Phone" class="form-control" required="true" value="" maxlength="10" type="text" onkeypress="return isNumberKey(event);" ></div>
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
                                                <td width="20%"><input type="text" name="fin_amount" class="form-control" id="fin_amount" onkeypress="return isNumberKey(event);">
                                                </td>
                                                <th width="14%">NO.of Installments</th>
                                                <td width="20%">
                                                	<input type="number" name="insnum" class="form-control" id="insnum" onkeypress="return isNumberKey(event);">
                                                </td>
                                               
                                           		<th>percentage</th>
                                                <td>
                                                	<input type="number" name="percentage" placeholder="%" id="percentage" class="form-control" onkeypress="return isNumberKey(event);">
                                                </td>
                                            </tr>
									<tr >
                                          <th width="14%">Installment-date</th>
                                                <td width="15%">
                                                	<input type="date" name="insdate" class="form-control">
                                                </td>

                                           
                                                 <th width="14%">Installment Amount</th>
                                                <td width="20%">
                                                	<input type="number" name="insamount" class="form-control" id="insamount" onkeypress="return isNumberKey(event);">
                                                </td>
                                                
                                        
                                           <table align="center">
                                           <td>
                                           <button type="submit" class="btn btn-success" name="register">Submit</button></td>
                                       </tr>
                                       </table>
                                        </tbody>
                                        </table>
                                        </div>
                         </div>
                    </div>
                    </div>
 </form>
    </div>
    </div>
    </div><!--end of container-->
    <script>
	$('#fin_amount,#insnum,#percentage,#restdue').on('keyup',getinsamount);
    
	function getinsamount(){
		var fin_amount=parseInt($('#fin_amount').val());
		var insnum=parseInt($('#insnum').val());
		var percentage=parseInt($('#percentage').val());
		var restdue=parseInt($('#restdue').val());
		if(isNaN(fin_amount))fin_amount=0;
		if(isNaN(insnum))insnum=1;
		if(isNaN(percentage))percentage=0;
		if(isNaN(restdue))restdue=0;
		var insamount=(fin_amount/insnum);
		var pamount=insamount*(percentage/100);
		insamount+=pamount;
		//var restdue=fin_amount-insamount;
		$('#insamount').val(insamount);
		//$('#restdue').val(restdue);
		}
    </script>