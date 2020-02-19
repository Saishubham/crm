<div class="text-center text-success"><?php echo $this->session->flashdata('msg'); ?></div>
<div class="container">
<div class="tab-pane">
             <div class="panel panel-primary">
                        <div class="panel-heading">
                            <font size="+2">Bank-pay</font>
                        </div>
                        <div class="panel-body">
       <div class="row">
                                    <div class="col-md-12">
                                    <form method="post" action="<?php echo base_url(); ?>index.php/payment/get_payment/">
                        
                                        <table class="table table-bordered">
                                     
                                            <tbody><tr>
                                                <th width="14%">Amount</th>
                                                <td width="20%"><input type="number" name="ins_amount" required class="form-control">
                                                </td>
                                                <th width="14%">Transactionm no.</th>
                                                <td width="20%">
                                                	<input type="text" name="transno" class="form-control" required>
                                                </td>
                                                <th width="14%">date</th>
                                                <td width="15%">
                                                	<input type="date" name="transdate" class="form-control" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Late Fine</th>
                                                <td>
                                                	<input type="text" name="latefine" placeholder="5% per day" readonly class="form-control">
                                                </td>
                                           </tr>
                                           <table align="center">
                                           <tr><td>
                                           <button type="submit" class="btn btn-success" name="payment">Payment</button></td>
                                       </tr>
                                       </table>
                                        </tbody>
                                        </table>
                                        </form>
                                        </div>
                         </div>
                    </div>
        </div>
  </div>      
</div><!-- container -->


