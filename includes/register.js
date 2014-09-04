var right = '<img  src="right.png" style="padding-left:3px;">';
var wrong = '<img  src="wrong.png" style="padding-left:3px;">';
var errortext=["Username looks fine!","Database Error.","Username already exists","Username must contain alphanumeric charachters(a-z,A-Z,0-9).","Please enter a username","An error occurred"];
   function setdata(usern,handle){
      $("#username").val(usern);
      $('[name="handle"]').val(handle);
   }
   function validateForm(){
      var noErrorOccurred = true;
      var usernames = $("#username").val();

     if(usernames == ""){
         noErrorOccurred = false;
         $("#usernameconfirm").html('<img src="wrong.png" style="padding-left:3px;"><span class="formError">Please enter a username.</span>');
      } else if(/^[a-zA-Z0-9]*$/.test(usernames) == false) {
         noErrorOccurred = false;
         $("#usernameconfirm").html('<img src="wrong.png" style="padding-left:3px;"><span class="formError">Username must contain alphanumeric charachters (a-z,A-Z,0-9).</span>');
      } else if(usernames.length > 20){
         noErrorOccurred = false;
         $("#usernameconfirm").html('<img src="wrong.png" style="padding-left:3px;"><span class="formError">Username must be less than or equal to 20 charachters.</span>');
      
      } else {
         $.ajax({
         type: "POST",
         url: "includes/checkusername.php",
         data: {username: usernames},
         success: function(data){
            if(data['errcode']==0)
               $("#usernameconfirm").html(right);
            else{
               noErrorOccurred = false;
               $("#usernameconfirm").html(wrong);
               $("#usernameconfirm").append('<span class="formError">'+errortext[data['errcode']]+'</span>');
            }
         },
         dataType: "json",
         error: function(jqXHR, textStatus, errorThrown) {
            noErrorOccurred = false;
           $("#usernameconfirm").html(errorThrown);
         }
         });
      }

      var pass1 = $('[name="password"]').val();
      var pass2 = $('[name="confirm_password"]').val();
      var handle = $('[name="handle"]').val();

      if(pass1=="" && pass2==""){
         noErrorOccurred = false;
         $("#passwordconfirm").html(wrong + '<span class="formError">Please enter a password.</span>');
      }
      else{
      	if(pass1 == pass2){
               if(pass1.length < 8){
                   noErrorOccurred = false;
                   $("#passwordconfirm").html(wrong + '<span class="formError">Passwords must be at least 8 characters</span>');
               }
               else{
      		       $("#passwordconfirm").html(right);
               }
      	}
      	else{
            noErrorOccurred = false;
      		$("#passwordconfirm").html(wrong + '<span class="formError">Passwords do not match.</span>');
      	}
      }

      if(handle==""){
         noErrorOccurred = false;
         $("#handleconfirm").html(wrong + '<span class="formError">Please enter your codechef handle.</span>');
      }
      else{
         if(true)
            $("#handleconfirm").html(right);
         }
      
      return noErrorOccurred;
   }