 <div id="mainBody">
			<h1>Dashboard
				<div class="pull-right">
				</div>
			</h1>
		<div id="breadcrumb">
			<a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
			<a href="#" class="current">Dashboard</a>
		</div>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12 center" style="text-align: center;">					
					<ul class="stat-boxes">
						<li class="popover-visits">
							<div class="left peity_bar_good"><span>2,4,9,7,12,10,12</span>+10%</div>
							<div class="right">
								<strong><?php echo count($transactions); ?></strong>
								Transactions
							</div>
						</li>
						<li class="popover-users">
							<div class="left peity_bar_neutral"><span>20,15,18,14,10,9,9,9</span>0%</div>
							<div class="right">
								<strong><?php echo count($paid); ?></strong>
								Paid
							</div>
						</li>
						<li class="popover-orders">
							<div class="left peity_bar_bad"><span>3,5,9,7,12,20,10</span>-50%</div>
							<div class="right">
								<strong><?php echo count($havepaid); ?></strong>
								Unpaid
							</div>
						</li>
						<li class="popover-tickets">
							<div class="left peity_line_good"><span>12,6,9,23,14,10,17</span>+70%</div>
							<div class="right">
								<strong><?php echo count($received); ?></strong>
								Received: 
							</div>
						</li>
					</ul>
				</div>	
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="alert alert-info">
						Minimum transaction 0.001BTC Maximum transaction 1BTC
						<a href="#" data-dismiss="alert" class="close">×</a>
					</div>
					<div class="widget-box">
						<div class="widget-title"><span class="icon"><i class="icon-signal"></i></span><h5>Transactions</h5><div class="buttons"><a href="#" class="btn btn-mini"><i class="icon-refresh"></i> Update stats</a></div></div>
						<div class="widget-content">
						<div class="row-fluid">
<center><pre><b>Send Bitcoins to the following address:</b> <?php echo $system->address; ?></pre></center>
<br/>
		<table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Transaction</th>
          <th>Amount</th>
          <th>Type</th>		  
          <th>Date</th>
        </tr>
      </thead>
      <tbody>
	<?php foreach($transactions as $transaction){ ?>
        <tr>
          <th scope="row"><?php echo $transaction->id; ?></th>
          <td><a href="https://blockchain.info/en/tx/<?php echo $transaction->txid; ?>"><?php echo $transaction->txid; ?></td>
          <td><?php echo $transaction->amount; ?></td>
          <td><?php if($transaction->ttype == 'paid'){ echo "<font color='red'>Paid</font>"; }else{ echo "<font color='Green'>Received</font>"; } ?></td>		  
          <td><?php echo $transaction->date; ?></td>
        </tr>
	<?php } ?>
      </tbody>
    </table>					
							
							
							
							
							
							<div class="span8">
								<div class="chart"></div>
							</div>	
							</div>							
						</div>
					</div>					
				</div>
			</div>
				
		</div>
		</div>
