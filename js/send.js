$("#form_to").submit(function(e) {
	e.preventDefault();
    var form = $(this);
    var url = 'https://ancor-group.com/happynewyear/newy.php';
    var email_val = $(".form_input").val();
	
	$.post(url, {akey : 'asdLAKSDMlwq9384asor39qalaflanasal', email : email_val}, function(data){
		console.log(data.lang);
		if(data.lang == "eng"){
			window.location.href = 'https://ancor-group.com/happynewyear/en/';
		}else if(data.lang == "ru"){
			$(".intro_content h2").css('display','none');
			$("#form_to").css('display','none');
			$(".scrolldown").css('display','block');
			$(".chapter_3").attr('data-country', data.country);
			$(".chapter_3").attr('data-id', data.id);
			document.cookie = 'happenewyearc = ' + data.country + ';expires=Fri, 30 Dec 2023 23:59:59 GMT;';
			document.cookie = 'happenewyeari = ' + data.id + ';expires=Fri, 30 Dec 2023 23:59:59 GMT;';

		}else{
			alert (
				"Email you have entered - " + email_val + ". You don`t have access to this page. Sorry."
				+ "Вы ввели - " + email_val + ". К сожалению у этого email нет доступа."
				);
		}
	});
    
});
$('#ornament image').click(function(){
    var url = 'https://ancor-group.com/happynewyear/link.php';
    var link_country = $(".chapter_3").attr('data-country');
	var link_id = $(".chapter_3").attr('data-id');
	$.post(url, {akey : 'asdLAKSDMlwq9384asor39qalaflanasal', country : link_country, guid : link_id}, function(data){
		console.log(data.clink);
		if(data.clink != ""){
			window.location.href = data.clink;
		}else{
			alert (
				"Oops - link is broken " + link_country + ". :-("
				+ "Упс - ссылка поломана " + email_val + ". :-("
				);
		}
	});
})