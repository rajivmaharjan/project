<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up Form</title>
    <link rel="stylesheet" href="../css/registration.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
</head>

<body>
    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    <form action="{{route('register-user')}}"  class="sign-in-form" method="post">
                        @csrf 
                        <div class="heading">
                            <h2>Create Account</h2>
                            <h6>*Mandatory Fields</h6>
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" name="name" class="input-field" autocomplete="off" required  />
                                <label>Name*</label>
                            </div>

                            <div class="input-wrap">
                                <input type="email" name="email" class="input-field" autocomplete="off" required />
                                <label>Email*</label>
                            </div>

                            <div class="input-wrap">
                                <input type="password" name="password" class="input-field" autocomplete="off" required />
                                <label>Password*</label>
                            </div>
                            <div class="input-wrap">
                                <p class="text">
                                    <input type="checkbox" id="tc" name='cb' /> I have read and by creating my user account. I accept the general
                                    <a href="tnc.html" id="tgl_terms">Terms and Condtions</a>
                                </p>
                            </div>

                            <input type="submit" name="submit" value="Create Account" class="sign-btn" />

                            <p class="text">
                                Already have an account?
                                <a href="#" class="toggle">Login Now</a>
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
     <script src="../js/registration.js"></script>
</body>

</html>