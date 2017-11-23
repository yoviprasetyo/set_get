# Setter Getter Builder

Build your inner variable with setter and getter faster

From array like this

```
$data = array(
	'data',
	'output',
	'error',
	'error info',
	'Anything Information'
);
```

into this


```
private $_data;

private $_output;

private $_error;

private $_error_info;

private $_anything_information;

function set_data($data) {
	$this->_data = $data;
}


function set_output($output) {
	$this->_output = $output;
}


function set_error($error) {
	$this->_error = $error;
}


function set_error_info($error_info) {
	$this->_error_info = $error_info;
}


function set_anything_information($anything_information) {
	$this->_anything_information = $anything_information;
}


function get_data() {
	return $this->_data;
}


function get_output() {
	return $this->_output;
}


function get_error() {
	return $this->_error;
}


function get_error_info() {
	return $this->_error_info;
}


function get_anything_information() {
	return $this->_anything_information;
}
```

with just simply an echo


## How To Use

```
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
```