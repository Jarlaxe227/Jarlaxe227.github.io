<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/images/favicon.icoicon.ico">
    <title>Nathan Bray | Contact</title>
    <!-- CSS -->
    <!--===============================================================-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/theme.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- INTRO-->
    <!--===============================================================-->
    <div class="bg-intro" id="home">
      <div class="layer-intro">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h1 class="text-center">Hello <br> I'm nathan bray, <br /> student, web developer, and more</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="arrow-down"></div>

    <section id="contact" class="container">
            <div class="row"><!-- FORM -->
                <div class="col-md-12">
                    <h2>Ask us a question, request a consultation, or even just say <strong><em>Hello!</em></strong></h2>
                    <form class="white-row" action="php/mailer.php" method="post">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label for="name">Full Name *</label>
                                    <input required type="text" value="" data-msg-required="Please enter your name." 
                                           maxlength="100" class="form-control" name="name" id="name">
                                </div>
                                <div class="col-md-6">
                                    <label for="email">E-mail Address *</label>
                                    <input required type="email" value="" data-msg-required="Please enter your email address." 
                                           data-msg-email="Please enter a valid email address." maxlength="100" 
                                           placeholder="Example@email.com" class="form-control" name="email" id="email" 
                                           pattern="^[_A-Za-z0-9-]+(\.[_A-Za-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="subject">Subject</label>
                                    <input type="text" value="" data-msg-required="Please enter the subject." 
                                           maxlength="100" class="form-control" name="subject" id="subject">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label for="message">Message *</label>
                                    <textarea required maxlength="5000" data-msg-required="Please enter your message." 
                                              rows="10" class="form-control" name="message" id="message"></textarea>
                                </div>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" value="Send Message" class="btn btn-primary btn-lg" data-loading-text="Loading...">
                            </div>
                        </div>
                    </form>
                </div><!-- /FORM -->
            </div>
        </section>

    <!-- FOOTER-->
    <!--===============================================================-->
    <div class="bg-footer">
      <div class="container">
        <div class="row text-center">
          <div class="col-sm-12">
            <a href="http://facebook.com/Jarlaxe227"><i class="fa fa-facebook"></i></a>
            <a href="https://www.linkedin.com/profile/public-profile-settings?trk=prof-edit-edit-public_profile"><i class="fa fa-linkedin"></i></a>
            <a href="http://github.com/Jarlaxe227"><i class="fa fa-github"></i></a>
          </div>
        </div>
      </div>
    </div>

    <!-- FOOTER-BOTTOM-->
    <!--===============================================================-->
    <div class="bg-footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p class="copyright">2014 &copy; Nathan Bray - MIT Liscense</p>
          </div>
          <div class="col-sm-6">
            <ul class="list-inline pull-right">
              <li class="border-right"><a href="#home" data-scroll>Go To Top</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- JAVASCRIPT-->
    <!--===============================================================-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/smooth-scroll.js"></script>
    <script src="assets/js/jRespond.min.js"></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>