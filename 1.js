 $(document).ready(function() {
     $("#login_form").submit(function(e) { 
        alert("hi");
         
     $.ajax({
         type : "POST",
         url : "",
         data : "name="+document.getElementById('username').value+"&pswd="+document.getElementById('password').value,
         success : function(data) {
             alert('Thank you for filling in your details!')
           },
           error: function(jqXHR, textStatus, errorThrown) {
               alert(jqXHR.status);
               alert(textStatus);
               alert(errorThrown);
           }
           
           });

     });
