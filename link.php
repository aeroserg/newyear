<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
header('Access-Control-Allow-Origin: *'); 
header('Access-Control-Allow-Methods: POST');
header('Content-Type: application/json');
ini_set("newy_error_log", "newy_php-error.log");

/* function getDataURI($image,$mime='') {
		 $finfo = new finfo(FILEINFO_MIME_TYPE);
		 $mime = $finfo->buffer(file_get_contents($image));
		 return 'data:'.$mime.';base64,'.base64_encode(file_get_contents($image));
	} */

$text = "\r".print_r($_POST, true); 

$handler = fopen("link_log.log", "a");

fwrite($handler, $text);
$pcountry = "-";
if (!empty($_POST["country"])) {
   $pcountry = strtolower($_POST['country']);
} else {  
	$is_bot = preg_match(
	 "~(Google|Yahoo|Rambler|Bot|Yandex|Spider|Snoopy|Crawler|Finder|Mail|curl)~i", 
	 $_SERVER['HTTP_USER_AGENT']
	);
	$geo = !$is_bot ? json_decode(file_get_contents('http://api.sypexgeo.net/mdinQ/json/'), true) : [];
   $pcountry = strtolower($geo["country"]["iso"]);
}


if (!empty($_POST["akey"])) {
   $pakey = $_POST['akey']; 
} else {  
   $pakey = "-";
}

if (!empty($_POST["guid"])) {
   $pguid = $_POST['guid']; 
} else {  
   $pguid = "-";
}





if($pakey=="asdLAKSDMlwq9384asor39qalaflanasal" && $pcountry!=="-"){
	$input_array_links = "https://mayak.help/help/;ru
https://bfkh.ru/;ru
https://vsedetimogut.ru/pozhertvovanie;ru
https://www.deti39.com/donate-2-2-2-2/#.YVxfKZpByUm;ru
http://detibezmam.ru/;ru
https://moscow.homeless.ru/how_to_help/;ru
https://livefund.ru/;ru
https://nasiliu.net/podderzhat/;ru
https://www.aistenok.org/;ru
https://antontut.ru/;ru
https://starikam.org/help/#donate;ru
https://www.alzrus.org/podderzhat_organizaciyu/;ru
https://darinadezhdu.org/aboutorg;ru
https://dobrodomik.ru/;ru
https://rayfund.ru/get_involved/donate/;ru
https://pets76.ru/my/sms/;ru
https://www.fond-nika.ru/;ru
https://vsemposobake.ru/;ru
https://yunacenter.ru/;ru
https://blizkiedrugie.ru/;ru
https://nakedheart.ru/;ru
https://so-edinenie.org/;ru
https://mbaikal.ru/;ru
https://donate.pytkam.net/?_gl=1%2Aqeh5ab%2A_ga%2AMjczNDIxNDg0LjE2MzM0NDM4ODA.%2A_ga_G59YBC351P%2AMTYzMzQ0Mzg3OS4xLjEuMTYzMzQ0MzkyMS4w&_ga=2.231980054.841109411.1633443880-273421484.1633443880;ru
https://join.greenpeace.ru/index.php?iAppealID=4502&utm_source=greenpeace.ru&utm_medium=referral&utm_campaign=brand&utm_content=button-gp.ru&utm_term=index&_ga=2.97771743.1565618184.1633442440-1783475215.1633442439;ru
https://pomogaem.com.ua/pozhertovat_rus.html;ua
https://tabletochki.org/;ua
https://dobrodiy.club/;ua
http://heroscompanion.org/index.php/language/uk/;ua
https://www.happyold.com.ua/;ua
https://dogcat.com.ua/;ua
https://happypaw.ua/ru/;ua
https://dobro.ua/ru/;ua
http://www.dara.kz/;kz
http://charitywishtree.kz/;kz
http://domsolnyshko.kz/;kz
https://detskyhospis.kz/ru/blagotvoritelnij-brend-be-kind;kz
https://ayala.kz/;kz
http://dom-mamy.kz/;kz
https://ezguamal.org/;uz
https://www.unicef.org/uzbekistan/;uz
https://www.sos-kd.uz/;uz
https://www.unicef.org/thailand/;th
https://operationsmile.or.th/about-us/?lang=en;th
https://autisticthai.com/;th
https://www.unhcr.or.th/en/donate/refugees;th
https://english.redcross.or.th/;th
http://web.mirror.or.th/index.php;th
https://www.raksthai.org/en/;th
https://www.heategevusfond.ee/;ee
https://www.lastefond.ee/;ee
https://www.sos-lastekyla.ee/;ee
https://peaasi.ee/;ee
http://www.aitanlapsi.ee/index.html;ee
https://www.toidupank.ee/;ee
https://maarjakyla.ee/;ee
https://naeratuseeest.ee/;ee
https://www.lasterikkad.ee/;ee
http://www.pimemassoorid.ee/;ee
https://www.pesaleidja.ee/;ee
http://loomakaitse.eu/;ee
https://www.lgbt.ee/;ee
https://mamuunija.lt/en/;lt
https://kaukenoparama.lt/;lt
https://www.aukok.lt/organization/Save-the-Children-Lithuania;lt
https://www.aukok.lt/organization/?org=VsI-Savanoriai-vaikams;lt
https://www.caritas.lt/;lt
https://penktakoja.lt/;lt
https://tautmilesgloba.lt/about/;lt
https://lese.lt/en/;lt
https://maltieciai.lt/en/;lt
http://www.lbf.lv/lv;lv
https://www.deti-help.com/lv/;lv
https://www.ziedot.lv/;lv
https://www.beopen.lv/en/index;lv
https://atbalstulatviju.lv/;lv";


	
	$strings_array_links= explode("\r", $input_array_links);
	shuffle($strings_array_links);
	$right_string = "";
	$err = "";
	$response = "";
	foreach ($strings_array_links as $string_links) {
		$strings_array = explode(";",$string_links);
		if($strings_array[1] == $pcountry){
			$right_string = $strings_array[0];
			break;
		}
	}
	if ($right_string !== ""){
		
		
		$response = json_encode(array("clink" => $right_string, "country" => $pcountry, "id" => $pguid), JSON_UNESCAPED_UNICODE);
		
	}else{
		$err = "страна ".$pcountry." не найдена, ключ правильный\r";
		$response = json_encode(array("success" => 0), JSON_UNESCAPED_UNICODE);
	}
 }else{
	$err = "страна ".$pcountry.", ключ - ".$pakey." не найден\r";
	$response = json_encode(array("success" => 0), JSON_UNESCAPED_UNICODE);
} 
ob_end_clean();
echo $response;


if ($err !=="") {
	fwrite($handler, $err);
} else {
fwrite($handler, $response);
} 
fclose($handler);
?>