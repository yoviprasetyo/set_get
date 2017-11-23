<?php

namespace Yoviprasetyo\SetGet {

/**
 * Set Get Builder Class
 *
 * Class Documentation: https://github.com/yoviprasetyo/
 *
 * @author Yovi Prasetyo
 * @version 1.0
 */

class SetGet
{
private $function_nameset = "
	function set_%name%(\$%name%) {
		\$this->_%name% = \$%name%;
	}\n
";
private $function_nameget = "
	function get_%name%() {
		return \$this->_%name%;
	}\n
";
private $variable_define = "
	private \$_%name%;
";

function __construct()
{

}

function build($data)
{
if( is_array($data) ) {
$variabling = "";
$set_functioning = "";
$get_functioning = "";
foreach ($data as $key => $value) {
$variable_name = $this->sanitize_words($value);
$variabling .= str_replace('%name%', $variable_name, $this->variable_define);
$set_functioning .= str_replace('%name%', $variable_name, $this->function_nameset);
$get_functioning .= str_replace('%name%', $variable_name, $this->function_nameget);
}
return $variabling.$set_functioning.$get_functioning;
} else {
return 'Parameter must be an array';
}
}

private function sanitize_words($string) 
{
return preg_replace('/(\s|\t)+/', '_', trim(strtolower($string) ));
}

}

}