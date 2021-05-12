<?php


function MYSQLIAuth() {
	return [
		"localhost",
		"yuanyuan_wnm608",
		"553640228",
		"yuanyuan_wnm608"
	];
}


function PDOAuth() {
	return [
		"mysql:host=localhost;dbname=yuanyuan_wnm608",
		"yuanyuan_wnm608",
		"553640228",
		[PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}