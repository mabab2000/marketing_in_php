<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Centered Container</title>
  <style>
    .container {
      width: 100%;
      background-color: grey;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      flex: 1; /* Added to center the container horizontally */
    }

    .division {
      flex: 1;
      width: 30%;
      height: 200px;
      background-color: grey;
      margin: 5px;
    }

    /* Media query for small screen size */
    @media (max-width: 768px) {
      .container {
        width: 100%;
        flex-direction: column;
      }
      
      .division {
        height: auto;
        width: 100%;
      }
    }

    .image-container {
      display: flex;
    }

    .image-container img {
      width: 15%;
      height: auto;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="division">
      <center>
        <h2 style="font-weight:bold; font-size:1.2em;">About</h2>
        <ul>
          <li>Kigali</li>
          <li>Rwanda</li>
          <li>thacie</li>
          <a href="register.php"><li>Signup</li></a>
  <a href="login.php"><li>Login</li></a>
        </ul>
      </center>
    </div>
    <div class="division">
      <center>
        <h2 style="font-weight:bold; font-size:1.2em;">Service</h2>
        <ul>
          <li>Kuranga amazu</li>
          <li>kuranga ibibanza</li>
          <li>Electronic devices</li>
          <li>Schools</li>
          <li>Car for rent</li>
        </ul>
      </center>
    </div>
    <div class="division">
      <center>
        <h2 style="font-weight:bold; font-size:1.2em;">Our Contact</h2>
        <ul>
          <li>0783280267</li>
          <li>0783857284</li>
          <li>0725391059</li>
          <li>thacien@gmail.com</li>
          
        </ul>
      </center>
    </div>
    <div class="division">
      <center>
        <h2 style="font-weight:bold; font-size:1.2em;">Find Us</h2>
        <p>Find more about our service on social media.</p>
        <div class="image-container">
          <img src="tw.PNG" alt="Twitter">&nbsp;&nbsp;&nbsp;
          <img src="in.JFIF" alt="Instagram">&nbsp;&nbsp;&nbsp;
          <img src="fa.PNG" alt="Facebook">&nbsp;&nbsp;&nbsp;
          <img src="wa.JFIF" alt="WhatsApp">&nbsp;&nbsp;&nbsp;
        </div>
      </center>
    </div>
  </div>
  <div style="width: 100%; height: auto; color: white;">
    <center>
      <p>@All right reserved</p>
    </center>
  </div>
</body>
</html>
