<?php

class Chron extends Controller
{

    public function index()
    {
        $btc = $this->model->btccoin();
		$address = $this->model->btcwallet($btc,"");
		//check deposits
			$transaction = $btc->listtransactions('',2000);
			$checkdeposits = $this->db->prepare("SELECT * FROM transactions WHERE txid=? AND transaction='received'");
           	$i= 0;
			$total = count($transaction);
			while ($i < $total){
		    //foreach transaction
			$checkdeposits->execute(array($transaction[$i]['txid']));
			$checkdeps = $checkdeposits->fetch();
			if($transaction[$i]['confirmations'] >= 2){  
			if(!$checkdeps)
			{
				$date = date("y-m-d h:i:s");
				//get the username of the person who deposited (y)
				$adddeposit = $this->db->prepare("INSERT INTO 
				transactions(address,confirmations,txid,amount,date,transaction) 
				VALUES(?,?,?,?,?,?,?,'received')");
				$adddeposit->execute(array($transaction[$i]['address'],
				$transaction[$i]['confirmations'],
                $transaction[$i]['txid'],
				number_format($transaction[$i]['amount'],8),
				$date));
			}
		}
		$i++;
		}

    }

}
