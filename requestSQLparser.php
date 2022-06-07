<?php
function getSQLParser(){
	foreach ($_GET as $key => $value) {
	
	if(!empty($value)){
		switch ($key) {
			case 'tc':
			$read['key'][0]="tc = ?";
			$read['value'][] = "%".$value."%";
				break;
			case 'ad':
			$read['key'][1]="ad = ?";
			$read['value'][] = "%".$value."%";
				break;
			case 'soyad':
			$read['key'][2]="soyad = ?";
			$read['value'][] = "%".$value."%";
				break;
			case 'dogum_tarihi':
			$read['key'][3]="dogum_tarihi LIKE ?";
			$read['value'][] = "%".$value."%";
				break;
		}

	}
}

return $read;
}
function postSQLParser(){
	foreach ($_POST as $key => $value) {
	
	if(!empty($value)){
		switch ($key) {
			case 'tc':
			$read['key'][0]="tc = ?";
			$read['value'][] = "%".$value."%";
				break;
			case 'ad':
			$read['key'][1]="ad = ?";
			$read['value'][] = "%".$value."%";
				break;
			case 'soyad':
			$read['key'][2]="soyad = ?";
			$read['value'][] = "%".$value."%";
				break;
			case 'dogum_tarihi':
			$read['key'][3]="dogum_tarihi LIKE ?";
			$read['value'][] = "%".$value."%";
				break;
		}

	}
}

return $read;
}

$get=getSQLParser();
echo implode(" AND ",$get['key']);

print_R($get['value']);

$post=postSQLParser();

echo implode(" AND ",$post['key']);

print_R($post['value']);
