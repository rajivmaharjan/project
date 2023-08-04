<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up Form</title>
    <link rel="stylesheet" href="../css/login.css" />

</head>

<body>
    <main>
        <div class="box">
           
            <div class="inner-box">
                 
                <div class="forms-wrap">
                    <form action="{{route('login-user')}}"  class="sign-up-form" method="post">
                        @csrf
                        <div class="heading">
                            <h2>Login</h2>
                            
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="email" name="email"  class="input-field" autocomplete="off" required />
                                <label>Email</label>
                            </div>

  

                            <div class="input-wrap">
                                <input type="password" name="password" class="input-field" autocomplete="off" required />
                                <label>password</label>
                            </div>
                            <div class="input-wrap">
                                <p class="text">
                                    <a href="#" class="tggl">Forgot Password?</a>
                                </p>
                            </div>

                            <input type="submit" name="submit" value="Login" class="sign-btn" />
                            
                            <p class="text">
                                Not a member?
                                <a href="#" class="toggle">Create account now</a>
                            </p>
                        </div>
                    </form>
                                    <div class="carousel">
                    <div class="images-wrapper">
                        <img src="../Img\LB.png" class="image img-1 show" alt="" />
                    </div>
                </div>
            </div>

        </main>
<script src="js\login.js"></script>
</body>

</html>