<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<style media="print">

	@page {
			margin:10px 10px;
			size:8.27in 11.69in ;
			height:3508 px;
			width:2480 px;
			size: auto;   auto is the initial value 
			margin:0;   this affects the margin in the printer settings 
			-webkit-print-color-adjust:exact;
	}
	@media print{
		table {page-break-inside: avoid;}
		#button{ display:none;}
	}
		
</style>	
<body>
<div class="text-center"><?php echo $this->session->flashdata('msg'); ?></div>
	<form action="" method="get">
        <table class="table table-bordered" style="width:100%;margin:auto;text-align:left;" >
                        <tbody>										
							<tr>
                            
                                <td rowspan="2" colspan="2"><h3 style="margin:8px 0 0 63px;">SHREE RAM FINANACE</h3></td>
                                <td>Customer id</td>
								<td colspan="2"><?php echo $result['user_id']?></td>
                            </tr>									
                            <tr>
                                <td>Payment-Date</td>  
								<td colspan="2"><?php echo $result['paydate']?></td>  											
                            </tr>
							<tr>
								<td colspan="">Bank Name / Branch/mode : </td>
								<td colspan=""><?php echo $result['mode']?>/  <?php echo $result['bank']?></td>
							</tr>
							<tr>
								<td colspan="">Fianance amount</td>
								<td colspan=""><?php echo $result['fin_amount']?></td>
							</tr>
                            <tr>
                                <td>Customer Name</td>
                                <td colspan="1">Customer address</td>
                                <td width="150">Payment Details</td>
                                <td width="50">RS</td>
								<td width="50">00</td>
                            </tr>	
							<tr>
								<td rowspan="6"><?php echo $result['cname']?> </td>
								<td rowspan="6" width="50%"><?php echo $result['caddress']?></td>
								<td>Installment amount</td>
								<td><?php echo $result['insamount']?></td>	
								<td>00</td>
							</tr>
							<tr>	
								<td>Late fine</td>
								<td><?php echo $result['latefine']?></td>
								<td>00</td>
							</tr>
							<!--<tr>
								<td></td>
								<td>120</td>
								<td>00</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
							</tr>-->
							<tr>
								<td>Total</td>
								<td><?php echo $result['total_amount']?></td>
								<td>00</td>
							</tr>
							<tr>
								<td colspan="1">Depositer Signature</td>
								<td colspan="2">Cashier Signature <br><br></td>
                  
                   				</tr>
                        </tbody>
					</table>
                    <center><button type="button" id="button" class="btn btn-danger" onClick="window.print();">print</button></center>
                    </form>
                   <?php //} ?>
                   
                   </body>
                   </html>