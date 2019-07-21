<?php
function format_money($number){
	$value = number_format($number,0,',','.');
	return $value;	 
}