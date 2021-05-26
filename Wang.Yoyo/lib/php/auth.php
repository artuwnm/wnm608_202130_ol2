<?php

function MYSQLIAuth() {
	return [
       "localhost", // mysql host
       "chenxiy_wnm608", //my sql username
       "Wcxremember0326", //mysql pass
       "chenxiy_wnm608" // mysql database name
	];
}

function PDOAuth() {
	return [
       "mysql:host=localhost;dbname=chenxiy_wnm608", // host and database name
       "chenxiy_wnm608", //mysql username
       "Wcxremember0326", //mysql pass
       [PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"]
	];
}