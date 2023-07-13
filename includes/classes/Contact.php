<?php

class Contact{

	// private $con;

	// public function __construct($con){
	// 	$this->con;
	// }



	public function sendEmail($mail,$mess){

		$to="admin@eazyrent256.com";
		$title="Eazy Rent Inquiries";
		$body=$mess;
		$header="From: $mail" ."\r\n";
		mail($to,$title,$body,$header);


	       $success_msg[]='Email sent!';

	}



}







?>