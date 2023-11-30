<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style4.css">
</head>
<body>
    <header>
        <h2 class="logo">The Marina Hotel</h2>
        <nav class="naviga">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Service</a>
            <a href="#">Contact</a>
            <button class="btnLogin-none">Login</button>
        </nav>
    </header>
    <div class="from_wrapper">
        <span class="icon-close">
            <ion-icon name="close-outline"></ion-icon>
        </span>


        
        <div class="from-box login">
            <h2>Login</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" required>
                    <label>Pasword</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Remember Me?</label> 
                    <a href="#">Forgot Password</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="login-register"><p>Don't have an account? <a href="#" class="register-link">Register</a></p></div>
            </form>
        </div>

        <div class="from-box register">
            <h2>Register</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                    <input type="text" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
                    <input type="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password" required>
                    <label>Pasword</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">The terms & condition</label> 
                </div>
                <button type="submit" class="btn">Register</button>
                <div class="login-register"><p>Already have an account? <a href="#" class="login-link">Login</a></p></div>
            </form>
        </div>
    </div>

    <script src="javascript/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>