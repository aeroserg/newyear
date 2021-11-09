$("#form_to").submit(function(e) {
	e.preventDefault();
    var form = $(this);
    var url = 'https://ancor-group.com/happynewyear/newy.php';
    var email_val = $(".form_input").val();
	$.post(url, {akey : 'asdLAKSDMlwq9384asor39qalaflanasal', email : email_val}, function(data){
		console.log(data.lang);
		if(data.lang == "EN"){
			window.location.href = 'https://ancor-group.com/happynewyear/en/';
		}else if(data.lang == "RU"){
			$(".intro_content h2").css('display','none');
			$("#form_to").css('display','none');
			$(".scrolldown").css('display','block');
		}else{
			alert (
				"Email you have entered - " + email_val + ". You don`t have access to this page. Sorry."
				+ "Вы ввели - " + email_val + ". К сожалению у этого email нет доступа."
				);
		}
	});
    
}); 
