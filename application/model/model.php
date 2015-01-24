<?php

class Model
{
    /**
     * @param object $db A PDO database connection
     */
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }
	
	public function system()
	{
		$system = $this->db->prepare("SELECT * FROM system");
		$system->execute();
		return $system->fetch();
	}
	
	 public function btccoin()
	{
	    require APP . 'libs/easybitcoin.php';
        $bitcoin = new Bitcoin('cryptxe','corkish1','81.156.8.189','8332', true);
	    return $bitcoin;
	}
	
	public function transactions()
	{
		$transactions = $this->db->prepare("SELECT * FROM transactions");
		$transactions->execute();
		return $transactions->fetchAll();
	}
	
	public function received()
	{
		$transactions = $this->db->prepare("SELECT * FROM transactions WHERE ttype='received'");
		$transactions->execute();
		return $transactions->fetchAll();
	}	
	
	public function paid()
	{
		$transactions = $this->db->prepare("SELECT * FROM transactions WHERE ttype='paid'");
		$transactions->execute();
		return $transactions->fetchAll();
	}
	
	public function havepaid()
	{
		$transactions = $this->db->prepare("SELECT * FROM transactions WHERE paid='0'");
		$transactions->execute();
		return $transactions->fetchAll();
	}
	
}
