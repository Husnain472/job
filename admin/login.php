<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: linear-gradient(135deg, #6e8efb, #a777e3);
    }

    .container {
      position: relative;
      width: 380px;
      padding: 40px;
      border-radius: 12px;
      background-color: rgba(255, 255, 255, 0.9);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
      backdrop-filter: blur(10px);
    }

    .logo {
      display: flex;
      justify-content: center;
      margin-bottom: 30px;
    }

    .logo svg {
      width: 60px;
      height: 60px;
    }

    .header {
      text-align: center;
      margin-bottom: 30px;
    }

    .header h1 {
      color: #333;
      font-size: 28px;
      font-weight: 600;
      margin-bottom: 8px;
    }

    .header p {
      color: #666;
      font-size: 15px;
    }

    .input-group {
      position: relative;
      margin-bottom: 20px;
    }

    .input-group label {
      position: absolute;
      top: 15px;
      left: 15px;
      font-size: 16px;
      color: #777;
      pointer-events: none;
      transition: all 0.3s ease;
    }

    .input-group input {
      width: 100%;
      padding: 15px;
      border: 1px solid #ddd;
      border-radius: 8px;
      font-size: 16px;
      outline: none;
      transition: all 0.3s ease;
    }

    .input-group input:focus,
    .input-group input:not(:placeholder-shown) {
      border-color: #a777e3;
    }

    .input-group input:focus + label,
    .input-group input:not(:placeholder-shown) + label {
      top: -10px;
      left: 10px;
      font-size: 12px;
      background-color: white;
      padding: 0 5px;
      color: #a777e3;
    }

    .input-group input::placeholder {
      opacity: 0;
    }

    .remember-forgot {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
      font-size: 14px;
    }

    .remember {
      display: flex;
      align-items: center;
    }

    .remember input {
      margin-right: 5px;
      accent-color: #a777e3;
    }

    .forgot a {
      color: #6e8efb;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .forgot a:hover {
      color: #a777e3;
      text-decoration: underline;
    }

    .btn {
      width: 100%;
      padding: 15px;
      background: linear-gradient(to right, #6e8efb, #a777e3);
      border: none;
      border-radius: 8px;
      color: white;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 5px 15px rgba(174, 119, 227, 0.4);
    }

    .btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 20px rgba(174, 119, 227, 0.6);
    }

    .btn:active {
      transform: translateY(0);
    }

    .signup {
      margin-top: 25px;
      text-align: center;
      font-size: 14px;
      color: #666;
    }

    .signup a {
      color: #6e8efb;
      text-decoration: none;
      font-weight: 600;
      transition: color 0.3s ease;
    }

    .signup a:hover {
      color: #a777e3;
      text-decoration: underline;
    }

    .social-login {
      margin-top: 25px;
      display: flex;
      justify-content: center;
      gap: 15px;
    }

    .social-btn {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: white;
      border: 1px solid #ddd;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .social-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    @media (max-width: 400px) {
      .container {
        width: 100%;
        border-radius: 0;
      }
    }
  </style>
</head>
<body>
<style>
    #cursor {
        position: fixed;
        pointer-events: none;
        top: 0;
        left: 0;
        z-index: 9999;
        transition: transform 0.2s ease-out;
    }
</style>

<div id="cursor">
    <svg width="65" height="65" viewBox="0 0 100 100" fill="none">
        <!-- Outer Circle -->
        <circle cx="50" cy="50" r="45" stroke="#00ADB5" stroke-width="4"/>
        <!-- Inner Dot -->
        <circle cx="50" cy="50" r="8" fill="#00ADB5"/>
    </svg>
</div>

<script>
    const cursor = document.getElementById('cursor');
    
    document.addEventListener('mousemove', e => {
        cursor.style.transform = `translate(${e.clientX}px, ${e.clientY}px)`;
    });
</script>
  <div class="container">
    <div class="logo">
      <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="50" cy="50" r="48" stroke="url(#paint0_linear)" stroke-width="4"/>
        <path d="M33 50C33 40.6112 40.6112 33 50 33C59.3888 33 67 40.6112 67 50C67 59.3888 59.3888 67 50 67" stroke="url(#paint1_linear)" stroke-width="4" stroke-linecap="round"/>
        <circle cx="50" cy="30" r="5" fill="url(#paint2_linear)"/>
        <defs>
          <linearGradient id="paint0_linear" x1="20" y1="20" x2="80" y2="80" gradientUnits="userSpaceOnUse">
            <stop stop-color="#6E8EFB"/>
            <stop offset="1" stop-color="#A777E3"/>
          </linearGradient>
          <linearGradient id="paint1_linear" x1="33" y1="40" x2="67" y2="60" gradientUnits="userSpaceOnUse">
            <stop stop-color="#6E8EFB"/>
            <stop offset="1" stop-color="#A777E3"/>
          </linearGradient>
          <linearGradient id="paint2_linear" x1="45" y1="25" x2="55" y2="35" gradientUnits="userSpaceOnUse">
            <stop stop-color="#6E8EFB"/>
            <stop offset="1" stop-color="#A777E3"/>
          </linearGradient>
        </defs>
      </svg>
    </div>
    
    <div class="header">
      <h1>Welcome Back</h1>
      <p>Please sign in to continue</p>
    </div>
    
    <form id="loginForm" action="utilities/login.php" method="POST">
  <div class="input-group">
    <input type="email" name="email" id="email" placeholder=" " required>
    <label for="email">Email</label>
  </div>
  
  <div class="input-group">
    <input type="password" name="password" id="password" placeholder=" " required>
    <label for="password">Password</label>
  </div>

  <div class="remember-forgot">
    <div class="remember">
      <input type="checkbox" id="remember">
      <label for="remember">Remember me</label>
    </div>
    <div class="forgot">
      <a href="#">Forgot password?</a>
    </div>
  </div>
  
  <button type="submit" class="btn" id="loginBtn">Sign In</button>
</form>

    
    <div class="social-login">
      <div class="social-btn">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M24 12.0733C24 5.40541 18.6274 0 12 0C5.37258 0 0 5.40541 0 12.0733C0 18.0995 4.38823 23.0943 10.125 24V15.5633H7.07813V12.0733H10.125V9.41343C10.125 6.38755 11.9165 4.71615 14.6576 4.71615C15.9704 4.71615 17.3438 4.95195 17.3438 4.95195V7.92313H15.8306C14.3399 7.92313 13.875 8.85384 13.875 9.80864V12.0733H17.2031L16.6711 15.5633H13.875V24C19.6118 23.0943 24 18.0995 24 12.0733Z" fill="#1877F2"/>
        </svg>
      </div>
      <div class="social-btn">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M21.8055 10.0415H21V10H12V14H17.6515C16.827 16.3285 14.6115 18 12 18C8.6865 18 6 15.3135 6 12C6 8.6865 8.6865 6 12 6C13.5295 6 14.921 6.577 15.9805 7.5195L18.809 4.691C17.023 3.0265 14.634 2 12 2C6.4775 2 2 6.4775 2 12C2 17.5225 6.4775 22 12 22C17.5225 22 22 17.5225 22 12C22 11.3295 21.931 10.675 21.8055 10.0415Z" fill="#FFC107"/>
          <path d="M3.15295 7.3455L6.43845 9.755C7.32745 7.554 9.48045 6 12 6C13.5295 6 14.921 6.577 15.9805 7.5195L18.809 4.691C17.023 3.0265 14.634 2 12 2C8.15895 2 4.82795 4.1685 3.15295 7.3455Z" fill="#FF3D00"/>
          <path d="M12 22C14.583 22 16.93 21.0115 18.7045 19.404L15.6095 16.785C14.5718 17.5742 13.3038 18.001 12 18C9.39903 18 7.19053 16.3415 6.35853 14.027L3.09753 16.5395C4.75253 19.778 8.11353 22 12 22Z" fill="#4CAF50"/>
          <path d="M21.8055 10.0415H21V10H12V14H17.6515C17.2571 15.1082 16.5467 16.0766 15.608 16.7855L15.6095 16.785L18.7045 19.404C18.4855 19.6025 22 17 22 12C22 11.3295 21.931 10.675 21.8055 10.0415Z" fill="#1976D2"/>
        </svg>
      </div>
      <div class="social-btn">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M17.5 12.5C17.5 10.567 18.567 9.5 20.5 9.5C21.0459 9.5 21.5367 9.78457 22.0519 10.071C22.4352 10.2883 22.8552 10.5245 23.25 10.5245L23.5 10.5H24V5.5C24 4.39543 23.1046 3.5 22 3.5H2C0.89543 3.5 0 4.39543 0 5.5V18.5C0 19.6046 0.89543 20.5 2 20.5H22C23.1046 20.5 24 19.6046 24 18.5V16.5H23.5C23.1715 16.5 22.8097 16.6206 22.4256 16.7484C21.9392 16.9105 21.4121 17.0857 20.75 17.0857C18.817 17.0857 17.5 16.0187 17.5 14.0857V12.5Z" fill="black"/>
          <path d="M20.75 12.75C21.3023 12.75 21.75 12.3023 21.75 11.75C21.75 11.1977 21.3023 10.75 20.75 10.75C20.1977 10.75 19.75 11.1977 19.75 11.75C19.75 12.3023 20.1977 12.75 20.75 12.75Z" fill="white"/>
        </svg>
      </div>
    </div>
    
    <div class="signup">
      <p>Don't have an account? <a href="#">Sign up</a></p>
    </div>
  </div>


</body>
</html>