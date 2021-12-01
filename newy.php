<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
header('Access-Control-Allow-Origin: *'); 
header('Access-Control-Allow-Methods: POST');
header('Content-Type: application/json');
ini_set("newy_error_log", "newy_php-error.log");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
/* function getDataURI($image,$mime='') {
		 $finfo = new finfo(FILEINFO_MIME_TYPE);
		 $mime = $finfo->buffer(file_get_contents($image));
		 return 'data:'.$mime.';base64,'.base64_encode(file_get_contents($image));
	} */

$text = "\r".print_r($_POST, true); 
//открыли файл
$guid = bin2hex(openssl_random_pseudo_bytes(16));
$handler = fopen("newy_log.log", "a");
//записали данные
fwrite($handler, $text);

if (!empty($_POST["email"])) {
   $pemail = strtolower($_POST['email']);
} else {  
   $pemail = "-";
}


if (!empty($_POST["akey"])) {
   $pakey = $_POST['akey']; 
} else {  
   $pakey = "-";
}


if($pakey=="asdLAKSDMlwq9384asor39qalaflanasal" && $pemail!=="-"){
	$input_array_domains = "ancor.ru;ru;ru
adwaycom.com;ru;ru
ancor-group.com;ru;ru
beagle-group.ru;ru;ru
brandsandtalents.ru;ru;ru
case-hr.com;ru;ru
chel.ancor.ru;ru;ru
cher.ancor.ru;ru;ru
ekt.ancor.ru;ru;ru
freework.ru;ru;ru
geeksource.ru;ru;ru
group-icm.com;ru;ru
irk.ancor.ru;ru;ru
klg.ancor.ru;ru;ru
klgd.ancor.ru;ru;ru
kmrv.ancor.ru;ru;ru
krd.ancor.ru;ru;ru
krs.ancor.ru;ru;ru
kz.ancor.ru;ru;ru
kzn.ancor.ru;ru;ru
lip.ancor.ru;ru;ru
lp.ancor.ru;ru;ru
nnov.ancor.ru;ru;ru
nvkz.ancor.ru;ru;ru
nvs.ancor.ru;ru;ru
omsk.ancor.ru;ru;ru
perm.ancor.ru;ru;ru
rnd.ancor.ru;ru;ru
rzn.ancor.ru;ru;ru
skh.ancor.ru;ru;ru
skrx.ru;ru;ru
smr.ancor.ru;ru;ru
spb.ancor.ru;ru;ru
srt.ancor.ru;ru;ru
staffjet.ru;ru;ru
team-service.ru;ru;ru
tmn.ancor.ru;ru;ru
tomsk.ancor.ru;ru;ru
tula.ancor.ru;ru;ru
tver.ancor.ru;ru;ru
ufa.ancor.ru;ru;ru
vl.ancor.ru;ru;ru
vld.ancor.ru;ru;ru
vlg.ancor.ru;ru;ru
vrn.ancor.ru;ru;ru
yar.ancor.ru;ru;ru
experium.ru;ru;ru
unistaff.ru;ru;ru
ancor.ua;ru;ua
dn.ancor.ua;ru;ua
dp.ancor.ua;ru;ua
kr.ancor.ua;ru;ua
lv.ancor.ua;ru;ua
od.ancor.ua;ru;ua
scu.ancor.ua;ru;ua
staco.com.ua;ru;ua
unistaff.ua;ru;ua
ancor.kz;ru;kz
staffjet.kz;ru;kz
ancor.co.uz;ru;uz
ancor.ee;eng;ee
ancor.co.th;eng;th
ancor.lv;eng;lt
ancor.lt;eng;lv";
$input_array_not_domains = "v-angers@microsoft.com;ru;ru
dmitrydnl99@gmail.com;ru;ru
aivarucheba@gmail.com;ru;ru
poople.pmail@gmail.com;ru;ru
v-bokoch@microsoft.com;ru;ru
anastasiya_kroshkina@inbox.ru;ru;ru
dlisay430@gmail.com;ru;ru
wexter3@gmail.com;ru;ru
miroshkina_a@mail.ru;ru;ru
morgunof-andrey@yandex.ru;ru;ru
oas0508@ya.ru;ru;ru
osk-olga@yandex.ru;ru;ru
v-maserg@microsoft.com;ru;ru
simsergy@gmail.com;ru;ru
nofxsss@gmail.com;ru;ru
trettttiakova@gmail.com;ru;ru
eli.trifalenkova@gmail.com;ru;ru
paradox.rip@yandex.ru;ru;ru
natalia.khoziainova@gmail.com;ru;ru
shug-andrey@yandex.ru;ru;ru
alexeyagaphonov@gmail.com;ru;ru
garialie@gmail.com;ru;ru
ahmetsharipov.ruslan@gmail.com;ru;ru
alexandr.bolotnikov@gmail.com;ru;ru
m.bryukhovets@yandex.ru;ru;ru
greenhorsy@gmail.com;ru;ru
mistersato@mail.ru;ru;ru
miuya@yandex.ru;ru;ru
gdonalddak@gmail.com;ru;ru
ms.verisa@gmail.com;ru;ru
myheart@yandex.ru;ru;ru
p.kondrashov@melsoft-games.com;ru;ru
aleksandrakrashevskaya@gmail.com;ru;ru
a.kudryavtsev@melsoft-games.com;ru;ru
ikby@mail.ru;ru;ru
arishkalapkina@gmail.com;ru;ru
wolfsun@list.ru;ru;ru
lincor228@gmail.com;ru;ru
anchester24@gmail.com;ru;ru
dmaluev@gmail.com;ru;ru
by.alina.li@mail.ru;ru;ru
smasell@gmail.com;ru;ru
alem82@yandex.ru;ru;ru
flymann316@gmail.com;ru;ru
deus.oam@gmail.com;ru;ru
anna.fedotova558@gmail.com;ru;ru
chereposha@gmail.com;ru;ru
maxshadow00@gmail.com;ru;ru
chi.00@mail.ru;ru;ru
p.osin@melsoft-games.com;ru;ru
anastasiia.petrenko-spb@yandex.ru;ru;ru
petrenko.dmitry.m@gmail.com;ru;ru
yuliarezapova@gmail.com;ru;ru
denissedov.developer@gmail.com;ru;ru
daniil-smolyakov@yandex.ru;ru;ru
stefahen@gmail.com;ru;ru
ann1989gekata@gmail.com;ru;ru
vitaliitihobrazov@gmail.com;ru;ru
dmitriytorkhov@gmail.com;ru;ru
olfursenko@gmail.com;ru;ru
tania.kholopenko@gmail.com;ru;ru
osycho@gmail.com;ru;ru
s.sharkov@melsoft-games.com;ru;ru
thydmitry@mail.ru;ru;ru
svetlana.abrosimova@contracted.pmi.com;ru;ru
andreichenko.oxana@gmail.com;ru;ru
alexander.baturov@gmail.com;ru;ru
nikolai.buriak@gmail.com;ru;ru
sandra2bing@gmail.com;ru;ru
lampa241186@gmail.com;ru;ru
egor.vasiliev@contracted.pmi.com;ru;ru
anastasia.velikorodova@contracted.pmi.com;ru;ru
mikhail.vorontsov@contracted.pmi.com;ru;ru
gliliana88@gmail.com;ru;ru
anaitkaanaitka@mail.ru;ru;ru
anastasia.golubeva@contracted.pmi.com;ru;ru
sergey.gorbatov@contracted.pmi.com;ru;ru
valery.gurov@contracted.pmi.com;ru;ru
ekaterina.gusinseva@contracted.pmi.com;ru;ru
vadim.davydov@mail.ru;ru;ru
veronichelo@icloud.com;ru;ru
zpavel333@gmail.com;ru;ru
zinoviev.v@gmail.com;ru;ru
wikoha92@gmail.com;ru;ru
maxim.ismailov@contracted.pmi.com;ru;ru
lucy9898@mail.ru;ru;ru
ivklykov@mail.ru;ru;ru
cameronica@gmail.com;ru;ru
akolokolneva@mail.ru;ru;ru
nikolay.korshunov@contracted.pmi.com;ru;ru
mikhail.kramskoy@contracted.pmi.com;ru;ru
tatiana.kuzmina@contracted.pmi.com;ru;ru
liudmila.kurudimova@contracted.pmi.com;ru;ru
dmitry.lavrik@contracted.pmi.com;ru;ru
e2lapshina@gmail.com;ru;ru
m.lomachinskaya@outlook.com;ru;ru
nikita.matsora@contracted.pmi.com;ru;ru
nikolay.melnik@contracted.pmi.com;ru;ru
elina.mozgovskaya@contracted.pmi.com;ru;ru
dmitry.mokshin@contracted.pmi.com;ru;ru
nikolay.v.molchanov@gmail.com;ru;ru
moroz021291@gmail.com;ru;ru
elena.mulyukova@contracted.pmi.com;ru;ru
andrew2you@yandex.ru;ru;ru
vitaliy.pervoy@contracted.pmi.com;ru;ru
karina.polikarpova@contracted.com;ru;ru
vikki55@yandex.ru;ru;ru
ivan.simonov@contracted.pmi.com;ru;ru
maria.stitsey@contracted.pmi.com;ru;ru
alexander.strakh@contracted.pmi.com;ru;ru
oleg.tadjibaev@contracted.pmi.com;ru;ru
e.tomilin@llc-engine.ru;ru;ru
artur.travnikov@contracted.pmi.com;ru;ru
mikhail.cherednichenko@contracted.pmi.com;ru;ru
mikryukovalexey@gmail.com;ru;ru
magician.abr@gmail.com;ru;ru
voffmail@ya.ru;ru;ru
petr.berezhkov@gmail.com;ru;ru
evatutin@gmail.com;ru;ru
asv170889@yandex.ru;ru;ru
gav-22081@mail.ru;ru;ru
iamdav@yandex.ru;ru;ru
andreicaz4ntsev@yandex.ru;ru;ru
kseniya.kirpichnikova@gmail.com;ru;ru
korshunoved@gmail.com;ru;ru
slaviann@gmail.com;ru;ru
sir_ejik@mail.ru;ru;ru
apmaximov@icloud.com;ru;ru
saule.nurmanova@gmail.com;ru;ru
anna.petrakova@paxful.com;ru;ru
vanyasamail@gmail.com;ru;ru
ac@ac11.ru;ru;ru
tatarinov.roma@gmail.com;ru;ru
katyatukka@gmail.com;ru;ru
kharin89@gmail.com;ru;ru
vendelieu@gmail.com;ru;ru
albert@shaikhutdinov.ru;ru;ru
rio9000@yandex.ru;ru;ru
bachaevm@gmail.com;ru;ru
gustova.anya@gmail.com;ru;ru
malkolm.khars@gmail.com;ru;ru
chingiwork@mail.ru;ru;ru
oleg110583@yandex.ru;ru;ru
degrooo@gmail.com;ru;ru
lilleaf86@gmail.com;ru;ru
echernov.hbs@gmail.com;ru;ru
avprigoda@yandex.ru;ru;ru
abrofan@gmail.com;ru;ru
d.averkiev@melsoft-games.com;ru;ru
ekaterinabotvinenko@ya.ru;ru;ru
a.boyarkin17@gmail.com;ru;ru
ksenia.81.95@gmail.com;ru;ru
a.vasileva@melsoft-games.com;ru;ru
vyatchanin.artem@gmail.com;ru;ru
vadik_spb@inbox.ru;ru;ru
valientina.gvardina@bk.ru;ru;ru
guseva.a1989@gmail.com;ru;ru
veronika853@yandex.ru;ru;ru
ivanova.polina.alexeevna@gmail.com;ru;ru
nina.kayvanova@gmail.com;ru;ru
t.k.kirichenko@gmail.com;ru;ru
koros-masha@mail.ru;ru;ru
krolone@gmail.com;ru;ru
kseneay14@mail.ru;ru;ru
ilia.krupnov@gmail.com;ru;ru
d.kulikova@melsoft-games.com;ru;ru
vlabutenkov@gmail.com;ru;ru
nabidzhanov@yandex.ru;ru;ru
nguen.evgeny@gmail.com;ru;ru
elleea@mail.ru;ru;ru
vasilypavl.99@gmail.com;ru;ru
ramilya.sadykova2012@mail.ru;ru;ru
annasmirnova2905@gmail.com;ru;ru
lisyao.art@mail.ru;ru;ru
denastyas89@gmail.com;ru;ru
yaroslavna.st@gmail.com;ru;ru
v.statcenko@gmail.com;ru;ru
iren.belk@ya.ru;ru;ru
shem2shem@gmail.com;ru;ru
shelimov.peter@gmail.com;ru;ru
pete.shutikhin@gmail.com;ru;ru
bluefox22194@gmail.com;ru;ru
igor_gogin@mail.ru;ru;ru
ilina.brovkova@yandex.ru;ru;ru
mas.sergey2012@yandex.ru;ru;ru
ekaterina.sokolnikova.bgu@mail.ru;ru;ru
a.afedoseeva@yandex.ru;ru;ru
dmitry.turov374@gmail.com;ru;ru
mraikhert@gmail.com;ru;ru
annette106@yandex.ru;ru;ru
tati1990@mail.ru;ru;ru
artemsol1996@yandex.ru;ru;ru
sudnik_yuliya@mail.ru;ru;ru
dcherapa@cisco.com;ru;ru
mlivadnaya@gmail.com;ru;ru
dsychev@cisco.com;ru;ru
ssolomat@cisco.com;ru;ru
medvedeva-nastya-123@yandex.ru;ru;ru
elenazabelina91@mail.ru;ru;ru
dina.svirtsova@gmail.com;ru;ru
kornauhov.d@gmail.com;ru;ru
a.velikzhanin@gmail.com;ru;ru
stackr@yandex.ru;ru;ru
ko9361@bk.ru;ru;ru
romanovalilyz@gmail.com;ru;ru
eltsovais@mail.ru;ru;ru
yunikonius@gmail.com;ru;ru
klamina259@gmail.com;ru;ru
klekovkina.ie@mail.ru;ru;ru
tatyana.dudkina.99@mail.ru;ru;ru
kamseif@mail.ru;ru;ru
stengachanga@yandex.ru;ru;ru
veteg@ya.ru;ru;ru
burdigin.maks@gmail.com;ru;ru
evgeniy.sibi@yandex.ru;ru;ru
pvolodko@yandex.ru;ru;ru
ostanin.maksim21@gmail.com;ru;ru
netultima@gmail.com;ru;ru
pavsav1987@gmail.com;ru;ru
mufteevg@gmail.com;ru;ru
mirekateriny@gmail.com;ru;ru
darth.xanex@gmail.com;ru;ru
tolstov.alexey@gmail.com;ru;ru
n_natella@mail.ru;ru;ru
alexdorofeev15@yandex.ru;ru;ru
alex13-92@yandex.ru;ru;ru
ms.oksana@mail.ru;ru;ru
milkyway@yandex.ru;ru;ru
mr-mak-tlt@yandex.ru;ru;ru
olgasamotolkova88@gmail.com;ru;ru
samus.ekaterina@gmail.com;ru;ru
ddlightning99@gmail.com;ru;ru
szvirak@ya.ru;ru;ru
sch1979@yandex.ru;ru;ru
deadman.alex@gmail.com;ru;ru
limewww@rambler.ru;ru;ru
vostrikov2014@gmail.com;ru;ru
arina_n@bk.ru;ru;ru
olgapima@gmail.com;ru;ru
billy_z@list.ru;ru;ru
sergej.pushkin@gmail.com;ru;ru
chuprova.xenia@gmail.com;ru;ru
dmitstankor@gmail.com;ru;ru
irina.dolnikova6707@gmail.com;ru;ru
yulia280182@mail.ru;ru;ru
tatlola@rambler.ru;ru;ru
2419065@mail.ru;ru;ru
avsitnik@yandex.ru;ru;ru
mezenina_m@mail.ru;ru;ru
worlddd@mail.ru;ru;ru
kalinov_ss@mail.ru;ru;ru
selivanoviv.igor@yandex.ru;ru;ru
sartbor@yandex.ru;ru;ru
bityukova.nadya@gmail.com;ru;ru
bukatkinavn@rambler.ru;ru;ru
mishanchuk@mail.ru;ru;ru
yurmag@mail.ru;ru;ru
stepan_nesterovich@inbox.ru;ru;ru
bojika@gmail.com;ru;ru
fox@foxnetwork.ru;ru;ru
niq@ngs.ru;ru;ru
kefear@ymail.com;ru;ru
pdobrinskiy@gmail.com;ru;ru
kirsanov.e@gmail.com;ru;ru
ilyagrig@gmail.com;ru;ru
odinn-ak@mail.ru;ru;ru
belousda@gmail.com;ru;ru
tol.tiger@gmail.com;ru;ru
eblokhin@cisco.com;ru;ru
whrabbit@mail.ru;ru;ru
panin.sergey.n@gmail.com;ru;ru
alshcher@cisco.com;ru;ru
yaroslav.vorontsov@gmail.com;ru;ru
smittik18@gmail.com;ru;ru
unfraget@gmail.com;ru;ru
yakunina_nastya@mail.ru;ru;ru
frayhard@gmail.com;ru;ru
vseleznev@mail.ru;ru;ru
niksivkov@gmail.com;ru;ru
gongbreaker@gmail.com;ru;ru
slq@list.ru;ru;ru
larkan@yandex.ru;ru;ru
blackfox.83@mail.ru;ru;ru
seeeeerp@list.ru;ru;ru
e4v4@yandex.ru;ru;ru
megatel@mail.ru;ru;ru
hatake18@bk.ru;ru;ru
vladimir.bulanov@mail.ru;ru;ru
semenov.artem1@gmail.com;ru;ru
sabakacan@gmail.com;ru;ru
skvor@ya.ru;ru;ru
golovin.mikhail.gennadevich@yandex.ru;ru;ru
uj7u@mail.ru;ru;ru
gimlysuperstar@gmail.com;ru;ru
blink-rap@mail.ru;ru;ru
heiligeanna@yandex.ru;ru;ru
oksana.vasilyeva93@mail.ru;ru;ru
homedim@gmail.com;ru;ru
stigy10@rambler.ru;ru;ru
sinitsyn007@mail.ru;ru;ru
m.dmitryy@gmail.com;ru;ru
ruslan.garaev.rb@mail.ru;ru;ru
dddron@gmail.com;ru;ru
enerdjeck00@yandex.ru;ru;ru
fireboard@me.com;ru;ru
solamer@mail.ru;ru;ru
kadochnikovks@gmail.com;ru;ru
theevert@gmail.com;ru;ru
vetta679@gmail.com;ru;ru
smank19@gmail.com;ru;ru
demkoss@gmail.com;ru;ru
timoshkina.yu@mail.ru;ru;ru
kristianalinners@mail.ru;ru;ru
milena-krav@yandex.ru;ru;ru
1hozyain1@gmail.com;ru;ru
sim.steed2010@yandex.ru;ru;ru
roman.v.ycnexe@gmail.com;ru;ru
lexa.sirov@gmail.com;ru;ru
dremasovds@yandex.ru;ru;ru
zairofik@gmail.com;ru;ru
vernonpierce@mail.ru;ru;ru
arcadiel@yandex.ru;ru;ru
stepanov_ilya@mail.ru;ru;ru
valk@valk.su;ru;ru
hakimovjj@gmail.com;ru;ru
kochetovnicolai@gmail.com;ru;ru
man2gm@gmail.com;ru;ru
iyatsishin@yahoo.com;ru;ru
ivan@blinkov.ru;ru;ru
tavplubix@gmail.com;ru;ru
pad11rus@gmail.com;ru;ru
alesapin@gmail.com;ru;ru
vdimirc@yandex.ru;ru;ru
vitlibar@yandex.ru;ru;ru
mikhaylovnikitka@gmail.com;ru;ru
sumarokovakseniia@gmail.com;ru;ru
pav.cruglov@yandex.ru;ru;ru
maksim-kita@yandex-team.ru;ru;ru
finitebeingwell@gmail.com;ru;ru
mrnovikd@gmail.com;ru;ru";

	$pemail_domain = substr(strstr($pemail, '@'), 1, strlen($pemail));
	$strings_array_domains = explode("\r", $input_array_domains);
	$strings_array_not_domains = explode("\r", $input_array_not_domains);
	$right_string = "";
	$err = "";
	$response = "";
	foreach ($strings_array_not_domains as $string_array) {
		if(strpos($string_array, $pemail) !== false){
			$right_string = $string_array;
			break;
		}
	}
	if ($right_string == ""){
		foreach ($strings_array_domains as $string_array) {
			if(strpos($string_array, $pemail_domain) !== false){
				$right_string = $string_array;
				break;
			}
		}
	}
	if ($right_string !== ""){
		$right_array = explode(";",$right_string);
		
		$response = json_encode(array("email"=> $pemail, "lang" => $right_array[1], "country" => $right_array[2], "id" => $guid), JSON_UNESCAPED_UNICODE);
		$mailto = $pemail;
		$subject = 'Новогоднее волшебство';
		$message = '
		Привет.
		
		Вы прикоснулись к волшебству и участвуете в розыгрыше.
		
		Уникальный ID участника - '.$guid.'
		
		Спасибо, что не остаетесь в стороне и делаете этот мир чуточку лучше!
		
		C уважением,
		ANCOR';
		$email = new PHPMailer(true);
		$email->SetFrom('noreplay@ancor-group.com', 'ANCOR'); 
		$email->Subject   = $subject;
		$email->Body      = $message;
		$email->AddAddress( $mailto );
		$email->CharSet = "utf-8";
		$email->send();
		
	}else{
		$err = "email ".$pemail." не найден, ключ правильный\r";
		$response = json_encode(array("success" => 0), JSON_UNESCAPED_UNICODE);
	}
 }else{
	$err = "email ".$pemail.", ключ - ".$pakey." не найден\r";
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