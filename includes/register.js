
   function validateForm(){
      $usernames = $("#username").val();
     

      $.ajax({
      type: "POST",
      url: "includes/checkusername.php",
      data: {username: $usernames},
      success: function(responseText){
         $("#usernameconfirm").html(responseText);
      },
      dataType: "html",
      error: function(jqXHR, textStatus, errorThrown) {
        $("#usernameconfirm").html(errorThrown);
      }
      });
      var right = '<img id="usernameconfirm" src="right.png" style="padding-left:3px;">';
      var wrong = '<img id="passwordconfirm" src="wrong.png" style="padding-left:3px;">';
      var pass1 = $('[name="password"]').val();
      var pass2 = $('[name="confirm_password"]').val();
      if(pass1=="" && pass2==""){
         $("#passwordconfirm").html(wrong);
      }
      else{
      	if(pass1 == pass2){
      		$("#passwordconfirm").html(right);
      	}
      	else{
      		$("#passwordconfirm").html(wrong + '<span style="color:red">Passwords do not match.</span>');
      	}
      }
      return false;
   }
