<html>
    <head>
        <title>Employee Management System</title><!-- Adding the Title of page -->
        <link href="css/style.css" rel="stylesheet" type="text/css"><!-- Referencing the css location -->
            <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"><!-- Making Screen Responsive using meta-->
                <meta content="IE=edge" http-equiv="X-UA-Compatible">
                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js">
                        </script>
    </head>
    <body>
        <p id="result"></p>
        <div class="fixed-title">
            <img class="logo_design" src="assets/group.svg">Employee Management System
                </div>
        <div class="fixed-animation-line"></div>
        <div class="LoginForm-Container">
            <div class="image_container"><img class="logo" src="assets/logo_White.png">
            </div><!-- Image div container on Top of screen -->
            <form id="loginForm" name="form1">
                <!-- Form to submit login details -->
                <input class="user-input 1" id="Username" placeholder="Username" type="text"> <input class="user-input 2" id="Password" placeholder="password" type="password"> 
                <input class="input-4" type="submit" value="Login" name="submit">
                    </form>
        </div><!-- end of LoginForm Container -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
        <script type="text/javascript" src="js/animations.js"></script>
           
    </body>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
        <script>

            $(document).ready(function(){
                $('#loginForm').on('submit', function(e){
                    
                    e.preventDefault();
                    var username = $('#Username').val();
                    var password = $('#Password').val();

                    $.ajax({
                        type: "POST",
                        url: 'php/LoginQuery.php',
                        data: {
                               password: password,
                               username: username,

                        },
                        success: function(data){

                            $('#result').html(data);

                        }
                    });
                });
            });
        </script>
</html>




