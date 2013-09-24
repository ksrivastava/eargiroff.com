function sendContact(){
		var form = document.getElementById('contactForm');
		$.ajax({
			url:'../php/getForm.php',
			type:'POST',
			data:{name:form.elements['name'].value, email:form.elements['email'].value, message:form.elements['message'].value},
			success:function(data,text){$('.done').show(); $('form').hide();}
		});	
}