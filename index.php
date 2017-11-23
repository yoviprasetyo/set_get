<?php
require('SetGet.php');

use Yoviprasetyo\SetGet\SetGet;

$set_get = new SetGet();

$data = array(
	'data',
	'output',
	'error',
	'error info',
	'Anything Information'
);

echo $set_get->build($data);