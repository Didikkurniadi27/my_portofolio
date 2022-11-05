<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />

  <!-- Disable tap highlight on IE -->

  <title>My Contact</title>  

  <link href="./main.3f6952e4.css" rel="stylesheet">
</head>

<body class="">
<?php
    $tombol = "";
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $messages = $_POST['messages'];

        include "koneksi.php";
        $query = "INSERT INTO contact(email,subject,messages)
            VALUES ('$email','$subject','$messages')";
        $execquery = mysqli_query($conn,$query);

        //for alert notification
        if ($execquery) {
            $tombol = "disabled";
            echo "
            <div class=\"container mt-3\">
                <div class=\"alert alert-success alert-dismissible\">
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                    <strong>Success!</strong> Data Success to submited on databases
                </div>
            </div>";
        }
        else {
            $tombol = "";
            echo "
            <div class=\"container mt-3\">
                <div class=\"alert alert-success alert-dismissible\">
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                    <strong>Failed!</strong> Data failed to submitted on databases
                </div>
            </div>";
        }
        mysqli_close($conn);
    }

?>
<div id="site-border-left"></div>
<div id="site-border-right"></div>
<div id="site-border-top"></div>
<div id="site-border-bottom"></div>
 <!-- Add your content of header -->
<header>
  <nav class="navbar  navbar-fixed-top navbar-default">
    <div class="container">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav ">
          <li><a href="./index.html" title="">01 : Home</a></li>
          <li><a href="./about.html" title="">02 : About</a></li>
          <li><a href="./resume.html" title="">03 : Resume</a></li>
          <li><a href="./service.html" title="">04 : Service</a></li>
          <li><a href="./contact.php" title="">05 : Contact</a></li>
        </ul>


      </div> 
    </div>
  </nav>
</header>

<div class="section-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="section-container-spacer text-center">
            <h1 class="h2">05 : Contact me</h1>
          </div>
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
               <form action="contact.php" method="post" class="reveal-content">
                  <div class="row">
                    <div class="col-md-7">
                    <div class="form-floating mb-3 mt-3">
                <Input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Email"
                    <?= $tombol ?>
                >
                <label for="email"></label> 
            </div>
            <div class="form-floating mb-3 mt-3">
                <Input
                    type="text"
                    class="form-control"
                    id="subject"
                    name="subject"
                    placeholder="Subject"
                    <?= $tombol ?>
                >
                <label for="subject"></label>
            </div>
            <div class="form-floating mb-3 mt-3">
                <Input
                    type="text"
                    class="form-control"
                    id="messages"
                    name="messages"
                    placeholder="Messages"
                    <?= $tombol ?>
                >
                <label for="messages"></label>
                </div>
            <input type="submit" class="btn btn-primary" value="Submit">
                    <!-- <div class="form-floating mb-3 mt-3">
                        <input type="email" class="form-control" id="email" placeholder="Email" <?= $tombol ?> >
                        
                      </div>
                      <div class="form-floating mb-3 mt-3">
                        <input type="text" class="form-control" id="subject" placeholder="Subject" <?= $tombol ?>  >
                        
                      </div>
                      <div class="form-floating mb-3 mt-3">
                        <textarea class="form-control" rows="5" id="messages" placeholder="Enter your message" <?= $tombol ?>  ></textarea>
                        
                      </div>
                      <input type="submit" class="btn btn-primary" value="Submit"> -->
                      <!--button type="submit" class="btn btn-default btn-lg">Send</button-->
                    </div>
                    
                    <div class="col-md-5 address-container">
                      <ul class="list-unstyled">
                        <li>
                          <span class="fa-icon">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                          </span>
                          + 62 812345678
                        </li>
                        <li>
                          <span class="fa-icon">
                            <i class="fa fa-at" aria-hidden="true"></i>
                          </span>
                          didik.kurniadi27@gmail.com
                        </li>
                        <li>
                          <span class="fa-icon">
                            <i class="fa fa fa-map-marker" aria-hidden="true"></i>
                          </span>
                          Bintaro Tangerang Selatan Indonesia
                        </li>
                      </ul>
                      <h3>Follow me on social networks</h3>
                      <a href="https://www.instagram.com/didikkurniadi_/" target="_blank" title="" class="fa-icon">
                        <i class="fa fa-instagram"></i>
                      </a>
                      <a href="https://www.linkedin.com/in/didik-kurniadi-0a693197" target="_blank" title="" class="fa-icon">
                        <i class="fa fa-linkedin"></i>
                      </a>

                    </div>
                  </div>
                </form>
            </div>
          </div>   
       </div>
      </div>
    </div>
  </div>
  
<footer class="footer-container text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>© UNTITLED | Website created with <a href="http://www.mashup-template.com/" title="Create website with free html template">Mashup Template</a>/<a href="https://www.unsplash.com/" title="Beautiful Free Images">Unsplash</a></p>
      </div>
    </div>
  </div>
</footer>

<script>
  document.addEventListener("DOMContentLoaded", function (event) {
     navActivePage();
  });
</script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID 

<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
      m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-XXXXX-X', 'auto');
  ga('send', 'pageview');
</script-->

<script type="text/javascript" src="./main.70a66962.js"></script>
</body>

</html>