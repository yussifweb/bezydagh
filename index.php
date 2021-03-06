<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!--Cursive-->
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">

    <script src="https://use.fontawesome.com/f419a3889b.js"></script>
    <!--Font Awesome CDN
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      -->
    <!-- Customized CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    
    <title>Bekwai Zongo Youth Development Association</title>

    <?php

    $name = $_POST['name'];

    $email = $_POST['email'];
    
    $subject = $_POST['subject'];
    
    $message = $_POST['message'];
    
    $to = "djiceman.gh@gmail.com";
    
    $body = "";
    
    $body .= "From: ".$name. "\r\n";
    $body .= "Email: ".$email. "\r\n";
    $body .= "Message: ".$message. "\r\n";
    
    mail($to, $subject, $body);

    ?>

  </head>
  <body>
      <!--NavBar-->
      <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <a class="navbar-brand logo-link" href="index.html">
            <img src="images/logo.png" width="40" height="40" class="logo" alt="logo" loading="lazy"><span class="org-name">BZYDA</span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-about-tab" data-toggle="pill" href="#pills-about" role="tab" aria-controls="pills-home" aria-selected="false">About</a>
                  </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="pills-team-tab" data-toggle="pill" href="#pills-team" role="tab" aria-controls="pills-profile" aria-selected="false">Our Team</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact Us</a>
                </li>
              </ul>
              </div>      
      </nav>
      <!--NavBar End-->

      <!--Main-->
          <main class="tab-content container-fluid" id="pills-tabContent">

          <!--Home-->
          <section class="tab-pane fade show active mb-5 pb-5" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <h1 class="org-name-head text-success pt-4">BEKWAI ZONGO YOUTH DEVELOPMENT ASSOCIATION</h1>
            <div class="container">
              <div class="jumbotron">
                <h1 class="display-4">Hello, world!</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
              </div>
            </div>
          </section>
          <!--Home End-->

          <!--About-->
          <section class="container tab-pane fade mb-5 pb-5" id="pills-about" role="tabpanel" aria-labelledby="pills-about-tab">
            <div class="row pt-5 mb-3">
                <div class="col-md-12">
                 <h1 class="text-center">About Us</h1>
                </div>
              </div>
              
               <div class="row mb-5">
                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pt-5">
                   <div class="vision thin">
                     <h3 class="">Our Vision</h3>
                     <p>To become the top Zongo youth platforms
                      in Ghana and ensuring peace and development in our community.</p>
                   </div>
                   <div class="mission thin">
                    <h3 class="">Mission Statement</h3>
                    <p>Creating a better and secured environment around us and beyond</p>
                  </div>
                 </div>
                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pt-5">
                   <div class="values thin">
                     <h3>Our Core Values</h3>
                     <p><strong>Unity </strong>bringing the youth together.</p>
                     <p><strong>Commitment </strong>willing to do what we wish to do.</p>
                     <p><strong>Loyalty </strong>trustworthy in whatever we do.</p>
                     <p><strong>Honesty </strong>dependant on each other.</p>
                     <p><strong>Consistency</strong>we are never going back.</p>
                </div>
                 </div>
               </div>
               <div class="row">
                 <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 m-auto">
                   <div class="motto text-center">
                     <h3>Motto</h3>
                     <p>Together we Can, YES WE CAN......</p>
                   </div>
                 </div>
               </div>
          </section>
         <!--About End-->

          <!--Team-->
          <section class="container tab-pane fade" id="pills-team" role="tabpanel" aria-labelledby="pills-team-tab">
            <div class="row pt-5 mb-3">
                <div class="col-md-12">
                  <h1 class="text-center">Our Team</h1>
                </div>
              </div>
              
              <div class="row team mb-5">
                <!--FIRST-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pt-5">
                  <img class="rounded-circle" src="images/YUSSIF1.png" alt="yussif">
                  <div class="team-info pt-3">
                    <p class="text-center name">Yussif Issah</p>
                    <p class="text-center post">Social Media Comm</p>
                    <p class="text-center call">0545110415</p>
                    <p class="text-center mail">yussifissahgh@gmail.com</p>
                  </div>              
                </div>
    
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pt-5">
                  <img class="rounded-circle" src="images/YUSSIF1.png" alt="yussif">
                  <div class="team-info pt-3">
                    <p class="text-center name">Yussif Issah</p>
                    <p class="text-center post">Social Media Comm</p>
                    <p class="text-center call">0545110415</p>
                    <p class="text-center mail">yussifissahgh@gmail.com</p>
                  </div>              
                </div>
    
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pt-5">
                  <img class="rounded-circle" src="images/YUSSIF1.png" alt="yussif">
                  <div class="team-info pt-3">
                    <p class="text-center name">Yussif Issah</p>
                    <p class="text-center post">Social Media Comm</p>
                    <p class="text-center call">0545110415</p>
                    <p class="text-center mail">yussifissahgh@gmail.com</p>
                  </div>              
                </div>
    
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pt-5">
                  <img class="rounded-circle" src="images/YUSSIF1.png" alt="yussif">
                  <div class="team-info pt-3">
                    <p class="text-center name">Yussif Issah</p>
                    <p class="text-center post">Social Media Comm</p>
                    <p class="text-center call">0545110415</p>
                    <p class="text-center mail">yussifissahgh@gmail.com</p>
                  </div>              
                </div>
                <!--SECOND-->
    
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pt-5">
                  <img class="rounded-circle" src="images/dl.png" alt="dl">
                  <div class="team-info pt-3">
                    <p class="text-center name">H E Dada Lateef</p>
                    <p class="text-center post">President of Ghana Zongo</p>
                    <p class="text-center call">0233333333</p>
                    <p class="text-center mail">dadalateef@ymail.com</p>
                  </div>              
                </div>
    
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pt-5">
                  <img class="rounded-circle" src="images/dl.png" alt="dl">
                  <div class="team-info pt-3">
                    <p class="text-center name">H E Dada Lateef</p>
                    <p class="text-center post">President of Ghana Zongo</p>
                    <p class="text-center call">0233333333</p>
                    <p class="text-center mail">dadalateef@ymail.com</p>
                  </div>              
                </div>
    
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pt-5">
                  <img class="rounded-circle" src="images/dl.png" alt="dl">
                  <div class="team-info pt-3">
                    <p class="text-center name">H E Dada Lateef</p>
                    <p class="text-center post">President of Ghana Zongo</p>
                    <p class="text-center call">0233333333</p>
                    <p class="text-center mail">dadalateef@ymail.com</p>
                  </div>              
                </div>
    
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 pt-5">
                  <img class="rounded-circle" src="images/dl.png" alt="dl">
                  <div class="team-info pt-3">
                    <p class="text-center name">H E Dada Lateef</p>
                    <p class="text-center post">President of Ghana Zongo</p>
                    <p class="text-center call">0233333333</p>
                    <p class="text-center mail">dadalateef@ymail.com</p>
                  </div>              
                </div>
                
                </div>
              </div>
        </section>
       <!--Team End-->

        <!--Contact-->
        <section class="container tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="row pt-5 mb-3">
                <div class="col-md-12">
                  <h1 class="text-center">Contact Us</h1>
                </div>
              </div>
              
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pt-5 mb-5">
                  <div class="msg rounded mb-2 thin">
                    <h3>Leave a Message</h3>
                    <form method="POST" name="contact" action="index.php">
                      <div class="form-group">
                        <div class="form-group">
                          <input type="name" name="name" placeholder="Name" value="" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <input type="email" name="email" placeholder="Your Email" value="" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <input type="text" name="subject" placeholder="Subject" value="" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <textarea name="message" id="message" value="message" placeholder="Your Message" class="form-control" cols="15" rows="8" required></textarea>
                        </div>
                        <input class="btn btn-success" type="submit" value="Submit">
                      </div>                
                    </form>
                  </div>
                   </div>
    
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pt-5 mb-5">
                  <div class="thin">
                    <h3>Address</h3>
                    <p>Bekwai Zongo Youth Development Association</p>
                    <p>P.O Box 61, <br>Bekwai - Ashanti <br> Accra-Ghana <br> West-Africa</p>
                    <p><i class="fa fa-envelope"></i><a class="mail" href="mailto:bezydagh@gmail.com"> bezydagh@gmail.com</a></p>
                  </div>

                  <div class="thin social-media">
                      <h3>Follow Us</h3>
                      <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link" href="https://www.facebook.com/groups/185721122880549/?ref=share"><i class="fa fa-facebook-square"></i> Bekwai Zongo Youth Dev't Ass.</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="https://twitter.com/bezydagh/"><i class="fa fa-twitter-square"></i> @bezydagh</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="https://instagram.com/bezydagh/"><i class="fa fa-instagram"></i> @bezydagh</a>
                        </li>
                      </ul>
                    </div>   
                  </div>                
              </div>
        </section>
       <!--Contact End-->
      </main>
      <!--Main End-->

      <footer>
        <div class="footer text-center">
          <p>All Rights reserved</p>
          <p>&copy; 2020</p>
        </div>
      </footer>      

    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>