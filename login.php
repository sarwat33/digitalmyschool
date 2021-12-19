<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
      .footer{
        text-align: center;
        position: fixed;
        bottom: 100px;
        margin-left: 38%;
      }
    </style>

  </head>
  <body>
    <div class="center">
      <h1>Admin Login</h1>
      <form method="POST" action="process.php">
        <div class="txt_field">
          <input type="text" required name="username" >
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" required name="password">
          <span></span>
          <label>Password</label>
        </div>
        
        <input type="submit" value="Login">
        <div class="signup_link">
           <a href="student.php">View As Student</a>
        </div>
      </form>
    </div>
    <!-- The content of your page would go here. -->

		


    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Footer - Sagar Developer</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style.css">
    <style>
       @import url('http://fonts.googleapis.com/css?family=Open+Sans:400,700');
* {
    padding: 0;
    margin: 0;
}


/* The footer is fixed to the bottom of the page */

footer {
    position: fixed;
    bottom: 0;
}

@media (max-height:800px) {
    footer {
        position: static;
    }
    header {
        padding-top: 40px;
    }
}

.footer-distributed {
    background-color: #2d2a30;
    box-sizing: border-box;
    width: 100%;
    text-align: left;
    font: bold 16px sans-serif;
    padding: 50px 50px 60px 50px;
    margin-top: 80px;
}

.footer-distributed , .footer-left   {
    display: inline-block;
    vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left {
    width: 30%;
}

.footer-distributed h3 {
    color: #ffffff;
    font: normal 36px 'Cookie', cursive;
    margin: 0;
}


.footer-distributed h3 span {
    color: #e0ac1c;
}

/* Footer links */

.footer-distributed  {
    color: #ffffff;
    margin: 20px 0 12px;
}

.footer-distributed  a {
    display: inline-block;
    line-height: 1.8;
    text-decoration: none;
    color: inherit;
}

.footer-distributed  {
    color: #8f9296;
    font-size: 14px;
    font-weight: normal;
    margin: 0;
}

/* Footer Center */

.footer-distributed  {
    width: 35%;
}

.footer-distributed  i {
    background-color: #33383b;
    color: #ffffff;
    font-size: 25px;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    text-align: center;
    line-height: 42px;
    margin: 10px 15px;
    vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope {
    font-size: 17px;
    line-height: 38px;
}

.footer-distributed .footer-center p {
    display: inline-block;
    color: #ffffff;
    vertical-align: middle;
    margin: 0;
}

.footer-distributed .footer-center p span {
    display: block;
    font-weight: normal;
    font-size: 14px;
    line-height: 2;
}

.footer-distributed .footer-center p a {
    color: #e0ac1c;
    text-decoration: none;
    ;
}

/* Footer Right */

.footer-distributed .footer-right {
    width: 30%;
}

.footer-distributed .footer-company-about {
    line-height: 20px;
    color: #92999f;
    font-size: 13px;
    font-weight: normal;
    margin: 0;
}

.footer-distributed .footer-company-about span {
    display: block;
    color: #ffffff;
    font-size: 18px;
    font-weight: bold;
    margin-bottom: 20px;
}

.footer-distributed .footer-icons {
    margin-top: 25px;
}

.footer-distributed .footer-icons a {
    display: inline-block;
    width: 35px;
    height: 35px;
    cursor: pointer;
    background-color: #33383b;
    border-radius: 2px;
    font-size: 20px;
    color: #ffffff;
    text-align: center;
    line-height: 35px;
    margin-right: 3px;
    margin-bottom: 5px;
}

.footer-distributed .footer-icons a:hover {
    background-color: #3F71EA;
}

.footer-links a:hover {
    color: #3F71EA;
}

@media (max-width: 880px) {
    .footer-distributed .footer-left, .footer-distributed .footer-center, .footer-distributed .footer-right {
        display: block;
        width: 100%;
        margin-bottom: 40px;
        text-align: center;
    }
    .footer-distributed .footer-center i {
        margin-left: 0;
    }
}    
    </style>
</head>

<body>
    
    <footer class="footer-distributed">

        <div class="footer-left">
            <h3>Developed<span>by</span> Sarwat Razzaque Choudhury</h3>

            

            <p class="footer-company-name">Copyright © 2021 <strong>SarwatRazzaqueChoudhury</strong> All rights reserved</p>
        </div>

        
    </footer>

</body>

</html>

        
    

  </body>
</html>
