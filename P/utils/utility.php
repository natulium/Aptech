<?php
function getPwdSecurity($pwd) {
	return md5(md5($pwd).MD5_PRIVATE_KEY);
}

function validateToken() {
	$token = '';

	if (isset($_COOKIE['token'])) {
		$token = $_COOKIE['token'];
		$sql   = "select * from users where token = '$token'";
		$data  = executeResult($sql);
		if ($data != null && count($data) > 0) {
			return $data[0];
		}
	}

	return null;
}

function getGET($key) {
	$value = '';
	if (isset($_GET[$key])) {
		$value = $_GET[$key];
	}
	$value = fixSqlInjection($value);
	return $value;
}

function getPOST($key) {
	$value = '';
	if (isset($_POST[$key])) {
		$value = $_POST[$key];
	}
	$value = fixSqlInjection($value);
	return $value;
}

function fixSqlInjection($str) {
	$str = str_replace("\\", "\\\\", $str);
	$str = str_replace("'", "\'", $str);
	return $str;
}
function pagination($number,$page,$addition){
	if($number >1) {
		echo '<ul class="pagination">';					
		if($page >1)	{
			echo '<li class="page-item"><a class="page-link" href="?page='.($page-1).$addition.'">Previous</a></li>';
						}
					$avaiablePage = [1,$page -1 , $page , $page +1 , $number];
					$isFirst = $isLast = false;
						for ($i=0 ; $i < $number; $i++ ) {
							if(!in_array($i+1, $avaiablePage)){
								if(!$isFirst && $page >3){
									echo '<li class="page-item "><a class="page-link" href="?page='.($page-2).$addition.'">...</a></li>';
									$isFirst = true;
								}
								if(!$isLast && $i > $page){
									echo '<li class="page-item "><a class="page-link" href="?page='.($page+2).$addition.'">...</a></li>';
									$isLast = true;
								}
								continue;
							}
								if($page == ($i+1)) {
									echo '<li class="page-item active"><a class="page-link" href="#">'.($i+1).'</a></li>';
								} else {
								echo '<li class="page-item"><a class="page-link" href="?page='.($i+1).$addition.'">'.($i+1).'</a></li>';
								}
							}	
					 
					  
						if($page <($number))	{
							echo '<li class="page-item"><a class="page-link" href="?page='.($page+1).$addition.'">Next</a></li>';
								}
					 	
					 					 
					echo '</ul>';
				
					}
				}