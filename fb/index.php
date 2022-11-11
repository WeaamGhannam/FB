<?php
//echo md5("hello@?#reoperpoetpo");
?>
<!DOCTYPE html>

<html lang="en">

<head>

    
    <meta charset="UTF-8">

     <title>facebook</title>

    
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="imgs/logo-facebook.png" type="icon">

</head>

<body>

     <div class="header">

        

         </div>

     <div class="main" style="width:100%;">

          <div class="left-side">

               <img src="imgs/community.png" alt="">

              </div>

          <div class="right-side">

             
               <h1 style="color:#212121;">Create an account</h1>

               <div style="color:#212121; font-size:20px">It's free and always will be</div>

               <form name="user-sign-up" action="functions/handle_register.php" method="POST">

                    <div class="sign-up-form">

                         <div class="sign-up-name">

                              <input type="text" name="first-name" id="first-name" class="text-field" placeholder="First Name">

                              <input type="text" name="last-name" id="last-name" placeholder="Last Name" class="text-field">

                             </div>

                         <div class="sign-wrap-mobile">

                              <input type="text" name="email-mobile" id="up-email" placeholder="Mobile number or email address" class="text-input">

                             </div>

                         <div class="sign-up-password">

                              <input type="password" name="up-password" id="up-password" class="text-input" placeholder="Password">

                             </div>

                       
                         <div class="gender-wrap">

                              <input type="radio" name="gen" id="fem" value="1" class="m0">

                              <label for="fem" class="gender">Female</label>

                              <input type="radio" name="gen" id="male" value="2" class="m0">

                              <label for="male" class="gender">Male</label>

                             </div>

                         <div class="term">

                              By clicking Sign Up, you agree to our terms, Data policy and Cookie policy. You may receive SMS notifications from us and can opt out at any time.

                             </div>

                         <input type="submit" name="register" value="Sign Up" class="sign-up">

                        </div>

                   </form>

              </div>

         </div>

     <script src="jquery.js"></script>

    </script>

    <script>
       for (let i = new Date().getFullYear();i>1950;i--){
            $("#years").append(
                `<option>${i}</option>`
        );}

        for(let i=1;i<13;i++){
            $("#months").append(
                `<option>${i}</option>`
            );}
      updateNumberOfDays();
      
      function updateNumberOfDays(){
          $("#days").html('');
          let month=$("#months").val();
          let year = $("#years").val();
          let days = daysInMonth(month,year);
          for(i=1;i<days;i++){
              $("#days").append(

                `<option>${i}</option>`
              );
          }
      }
      $("#years,#months").on('change',function(){
        updateNumberOfDays();
      })
      function daysInMonth(month,year){
          return new Date(year,month,0).getDate();

      }
    </script>
</body>

</html>
