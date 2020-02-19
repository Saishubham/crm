<div class="text-center text-success"><?php echo $this->session->flashdata('msg'); ?></div>

<div class="container">
 <div class="panel panel-primary">
                        <div class="panel-heading">
                            <font size="+2">Registraion</font>
                        </div>
                        <div class="panel-body">
                        <form method="post" action="<?php echo base_url(); ?>index.php/regt/updateinfo/">
       <table class="table table-striped">
          <tbody>
          <th>New Registrartion</th>
             <tr>
                <td colspan="1">
                   
                      <fieldset>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Customer-Id</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input  name="id" placeholder="id" class="form-control" readonly required="true" value="<?php echo $regt['id']; ?>" type="text"></div>
                            </div>
                         </div>                         <div class="form-group">
                            <label class="col-md-4 control-label">Full Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input  name="cname" placeholder="Full Name" class="form-control" readonly required="true" value="<?php echo $regt['cname']; ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Address</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input  name="caddress" placeholder="Address Line 1" class="form-control" required="true" value="<?php echo $regt['caddress']; ?>" type="text"></div>
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
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="city" name="city" placeholder="City" class="form-control" readonly required="true" value="<?php echo $regt['city']; ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">State</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input id="state" name="state" placeholder="State" class="form-control" readonly required="true" value="<?php echo $regt['state']; ?>" type="text"></div>
                            </div>
                         </div>
                      <div class="form-group">
                            <label class="col-md-4 control-label">Phone Number</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input  name="cphone" placeholder="Phone Number" class="form-control" required="true" value="<?php echo $regt['cphone']; ?>" type="text"></div>
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
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input name="gname" placeholder="Full Name" class="form-control"  required="true" value="<?php echo $regt['gname']; ?>" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Address</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input  name="gaddress" placeholder="Address Line 1" class="form-control" required="true" value="<?php echo $regt['gaddress']; ?>" type="text"></div>
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
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i>
                               </span><input name="gcity" placeholder="City" class="form-control" readonly required="true" value="<?php echo $regt['gcity']; ?>" type="text">
                               </div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">State</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span><input name="gstate" placeholder="State" class="form-control" required="true" readonly value="<?php echo $regt['gstate']; ?>" type="text"></div>
                            </div>
                         </div>
                      <div class="form-group">
                            <label class="col-md-4 control-label">Phone Number</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input  name="gphone" placeholder="Phone" class="form-control" required="true" value="<?php echo $regt['gphone']; ?>" type="text"></div>
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
                                                <td width="20%"><input type="text" name="fin_amount" readonly class="form-control" value="<?php echo $regt['fin_amount']; ?>">
                                                </td>
                                                <th width="14%">Installment Amount</th>
                                                <td width="20%">
                                                	<input type="number" name="insamount" readonly class="form-control" value="<?php echo $regt['insamount']; ?>">
                                                </td>
                                                <th width="14%">Installment-date</th>
                                                <td width="15%">
                                                	<input type="date" name="insdate" readonly class="form-control" value="<?php echo $regt['insdate']; ?>">
                                                </td>
                                            </tr>
                                         
                                           <table align="center">
                                           <tr><td>
                                           <button type="submit" class="btn btn-success" name="updateinfo">Submit</button></td>
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