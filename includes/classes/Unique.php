<?php


class Unique{

	

	public function createUnique(){

		$char='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$char_len=strlen($char);
		$rand_str='';

		for($i=0; $i < 20; $i++){

			$rand_str .= $char[mt_rand(0,$char_len-1)];
		}


		return $rand_str;


	}




}






?>