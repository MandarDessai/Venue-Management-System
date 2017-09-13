<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clean Blog - Sample Post</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="firstpage2.php">Home</a>
                    </li>
                    <li>
                        <a href="about2.php">About</a>
                    </li>
                    <li>
                        <a href="wanttoorganise.php">Want to organise?</a>
                    </li>
                     <li>
                        <a href="wanttohost.php">Want to host?</a>
                    </li>
                    <li>
                        <a href="contact2.php">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/wanttohost1.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>Just fill the form below and see how easy we make it seem !</h1>
                        <h2 class="subheading">We will keep no stone unturned for your satisfaction , we assure you !</h2>
                        <span class="meta">Posted by <a href="#">Mandar</a> on April 10, 2017</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <p></p>

                    </div>
            </div>
        </div>
    </article>
                    
                    

    <form class="well form-horizontal" action="serverpage2.php" method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Help us find what you need !</legend>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Your Budget(Rs)</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="yourbudget" placeholder="" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Place</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="place1" placeholder="" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">Date</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="date1" placeholder="" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Month</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="month1" placeholder="" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
  <label class="col-md-4 control-label">Year</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="year1" placeholder="" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
 
<div class="form-group"> 
  <label class="col-md-4 control-label">AC</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="ac1" class="form-control selectpicker" >
      <option value=" " >Please select your case</option>
      <option>Yes</option>
      <option>No</option>
      
      
    </select>
  </div>
</div>
</div>
  
  
 <div class="form-group"> 
  <label class="col-md-4 control-label">Buffet</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="buffet1" class="form-control selectpicker" >
      <option value=" " >Please select your case</option>
      <option>Yes</option>
      <option>No</option>
      
      
    </select>
  </div>
</div>
</div>

  
  <div class="form-group"> 
  <label class="col-md-4 control-label">Lunch/Dinner</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="lunchdinner" class="form-control selectpicker" >
      <option value=" " >Please select your case</option>
      <option>Yes</option>
      <option>No</option>
      
      
    </select>
  </div>
</div>
</div>
  
  
 <div class="form-group"> 
  <label class="col-md-4 control-label">Canteen</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="canteen1" class="form-control selectpicker" >
      <option value=" " >Please select your case</option>
      <option>Yes</option>
      <option>No</option>
      
      
    </select>
  </div>
</div>
</div>
  
<!-- Select Basic -->
   
<div class="form-group"> 
  <label class="col-md-4 control-label">Type of Event</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="typeofevent1" class="form-control selectpicker" >
      <option value=" " >Please select your case</option>
      <option>Formal Party</option>
      <option>Informal party</option>
      <option >Undefined(pool party)</option>
      
    </select>
  </div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Number of people attending</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="numberofpeopleattending1" placeholder="" class="form-control"  type="text">
    </div>
</div>
</div>

  
  
  <div class="form-group"> 
  <label class="col-md-4 control-label">Drinks needed?</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="drinksneeded1" class="form-control selectpicker" >
      <option value=" " >Please select your case</option>
      <option>Yes</option>
      <option>No</option>
      
      
    </select>
  </div>
</div>
</div>
  
  
   <div class="form-group"> 
  <label class="col-md-4 control-label">Decoration needed?</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="decorationneeded1" class="form-control selectpicker" >
      <option value=" " >Please select your case</option>
      <option>Yes</option>
      <option>No</option>
      
      
    </select>
  </div>
</div>
</div>
  
  
  
   <div class="form-group"> 
  <label class="col-md-4 control-label">Pickup/Drop needed?</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="pickupdropneeded1" class="form-control selectpicker" >
      <option value=" " >Please select your case</option>
      <option>Yes</option>
      <option>No</option>
      
      
    </select>
  </div>
</div>
</div>
<!-- Text input-->

<!-- Text area -->
  


<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us, we will get back to you shortly.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Send <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
<!-- /.container -->
                    
                    
                    
                    
                    
                    
                    
                    
                    
                   
                   

                    
                    
                

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class="copyright text-muted">Copyright &copy; Mandar 2017</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

</body>

</html>
