function login_submit(){ 
	 alert('hi');
        alert('hi'+document.getElementById('username').value+document.getElementById('password').value);
        $.ajax({
         type : "POST",
         url : "login_php.php",
         data : "name="+document.getElementById('username').value+"&password="+document.getElementById('password').value,
         success : function(data) {
             alert('Thank you for filling in your details!')
           },
           error: function(jqXHR, textStatus, errorThrown) {
               alert(jqXHR.status);
               alert(textStatus);
               alert(errorThrown);
           }
           
           });
		   
	};	   