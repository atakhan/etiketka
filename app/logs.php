<?php
class Logs {
	public $db;

	function __construct() {
		$this->db = new Db();	
	}

	
	function nowDateTime(){
		$now = new DateTime();
    	$now->setTimezone(new DateTimeZone('Asia/Bishkek'));
   	return $now->format('Y-m-d H:i:s T');
	}

// input

	function write($action = '', $comment){
		$created_datetime = $this->nowDateTime();
    $prev_log_hash = $this->getLastLogHash();
		$insert = $this->db->query("INSERT INTO logs(log_datetime, action, comment, prev_log_hash) VALUES(:log_datetime, :action, :comment, :prev_log_hash)", array(
			"log_datetime" =>$created_datetime,
			"action" =>$action,
			"comment" =>$comment,
			"prev_log_hash" =>$prev_log_hash,
		));
	}

	function getLastLogHash(){
		$last_log = $this->db->query('SELECT * FROM logs ORDER BY id DESC LIMIT 1');
		return md5(serialize($last_log));
	}

	function acceptUserRequest($PartnerTrnID){
		$action = 'Accepting user request. Save user request as transaction id: ';
		$this->write($action, $PartnerTrnID);
	}

	function elsomReference($elsom_url){
		$action = 'Elsom accept transaction and redirect to url: ';
		$this->write($action, $elsom_url);
	}

	function elsomServerError($error_data){
		$action = 'Elsom server not response';
		$this->write($action, $error_data);	
	}

	function notificationFromElsom($notification){
		$action = 'Elsom send notification: ';
		$this->write($action, $notification);
	}

	function paymentAccepted(){
		$action = 'succes payment from elsom';
		$this->write($action, $comment);
	}

	function paymentAcceptError($error){
		$action = 'elsom payment finish with error: ';
		$this->write($action, $error);
	}

// output

	function getLast($n){
		$get = $this->db->query("SELECT * FROM logs ORDER BY id DESC LIMIT $n");
		return $get;
	}

	// function getAll(){
	// 	$get = $this->db->query("SELECT * FROM logs ORDER BY id DESC");
	// 	return $get;
	// }

}