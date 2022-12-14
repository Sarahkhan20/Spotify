<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify Music

    </title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="https://www.freepnglogos.com/pics/spotify-logo-png" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        </style>
        
       
        
</head>
<body>
    


<header>
    <img src="https://cdns.iconmonstr.com/wp-content/releases/preview/2017/240/iconmonstr-spotify-2.png" alt="spotify icon">
    <nav class="navbar">
        <a href="#" class="nav-branding">Spotify</a>
        <div class="symbol1" style="color: white;">&reg;</div>
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="https://www.spotify.com/us/premium/" class="nav-link">Premium</a>
            </li>
            <li>
                <a href="https://support.spotify.com/us/" class="nav-link">Support</a>
            </li>
            <li>
                <a href="https://www.spotify.com/us/download/windows/" class="nav-link">Download</a>
            </li>
        </ul>
        <div class="hamburger" onclick="myFunction(this)">
            <div class="bar1"
            ></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
        <script>function myFunction(x) {
            x.classList.toggle("change");
        }
        </script>
        </div>
    </nav>
</header>
<main>
    <img src="images/spotify.png" class="spotifybg">
    <div class="form-container">
        <div class="form">
        <form action="connect.php" method="post">
            <div class="disappear">
            <label>What should we call you?</label>
            <input type="text" placeholder="Enter a profile name" name="name" class="placeholder" size="55" style="margin: 8px 0 18px 0;">
            
            <label>Email address</label>
            <input type="email" name="email" placeholder="Enter your email address" class="placeholder" size="55" style="margin: 8px 0 20px 0;">
            
            <label>Create password</label>
            <input type="password" name="password"placeholder="Create a password" class="placeholder" size="55" style="margin: 8px 0 30px 0;">
             <input type="submit" class="btn btn-primary" />
        </form>
        <p>By clicking on sign-up, you agree to Spotify's <a href="https://www.spotify.com/us/legal/end-user-agreement/">Terms and Conditions of Use.</a></p>
        <p>&nbsp;&nbsp;&nbsp;To learn more about how Spotify collects, uses, shares and  protects  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;your personal data, please see <a href="#">Spotify's Privacy Policy</a></p>
    </div>
        
        <p class="disappear" style="text-align: center; margin-top: 22px;">
            <span class="login">Have an account? 
                <a href="login.php">Log in.

                </a>
            </span>
        </p>
        </div>
    </div>
    <button class="jado" value="Click" onclick="alert('Go to spotify.com to actually sigup lol');
    " >Sign Up</button>
</main>
<footer>
    <img src="https://cdns.iconmonstr.com/wp-content/releases/preview/2017/240/iconmonstr-spotify-2.png" alt="spotify icon">
    <div class="container">
        <div class="row">
            <a href="#" class="nav-branding">Spotify</a>
            
                    
            </div>
            <div class="column">
                <h4>company</h4>
                    <ul>
                        <li><a href="https://www.spotify.com/us/about-us/contact/">About</a></li>
                        <li><a href="https://www.lifeatspotify.com/">Jobs</a></li>
                        <li><a href="https://newsroom.spotify.com/?s=for+the+records">
                            For the records</a></li>
                    </ul>
               
            </div>
            <div class="column">
                <h4>useful links </h4>
                    <ul>
                        <li><a href="https://support.spotify.com/us/">Support</a></li>
                        <li><a href="https://open.spotify.com/">Web Player</a></li>
                        <li><a href="https://www.spotify.com/us/free/">Free Mobile App</a></li>
                    </ul>
               
            </div>
        </div>
</footer>


<script src="js/script.js"></script>
</body>
