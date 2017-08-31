$(document).ready(function(){

$(".contact-form button").click(function(e){
		e.stopPropagation();
		e.preventDefault();

		var nome     = $("#input-name").val();
		var email    = $("#input-email").val();
		var mensagem = $("#input-message").val();

		$("#returnMessage").removeClass("active")

		if(nome.length <= 0)
			return contactError(0);
		if(email.length <= 0)
			return contactError(1);
		if(mensagem.length <= 0)
			return contactError(2);

		var request = $.post("message.php",{
			"name" : nome,
			"email" : email,
			"message" : mensagem
		});

		request.done(function(data){
			if(data.substr(0,1) == '1')
				$("#returnMessage").html("Ok, obrigado pelo contato.").addClass("active");
			else
				$("#returnMessage").html("Ops, algo de errado aconteceu.").addClass("active");
		});

		request.fail(function(){
			$("#returnMessage").html("Ops, algo de errado aconteceu.").addClass("active");
				$("#returnMessage").html("Ops, algo de errado aconteceu").addClass("active");
		});

		request.fail(function(){
			$("#returnMessage").html("Ops, algo de errado aconteceu").addClass("active");
		});
	});


	var contactError = function(errorCode){

		switch(errorCode){
			case 0:
				$("#returnMessage").html("Qual é o seu nome mesmo? ").addClass("active");
				$("#input-name").focus();
				break;
			case 1:
				$("#returnMessage").html("Você esqueceu de informar seu e-mail :O").addClass("active");
				$("#input-email").focus();
				break;
			case 2:
				$("#returnMessage").html("Ah, manda uma mensagem pra gente!").addClass("active");
				$("#input-message").focus();
				break;
		}
	};

	var x = document.getElementsByClassName("nano")[0].children[1];
	x.style.backgroundColor="#fff";
	x.style.zIndex="1000";
	x.style.boxShadow="0px 0px 10px #000";
});
