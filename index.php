<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mikon sivut</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/koti.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!--  <ul class="nav nav-pills" role="tablist">
  <li role="presentation" class="active" ><a href="#home" aria-controls="home" role="pill" data-toggle="pill">Home</a></li>
  <li role="presentation"><a href="#profile" aria-controls="home" role="pill" data-toggle="pill">Profile</a></li>
  <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
</ul>
    -->
      <!-- Nav tabs -->
       <div class="row">

   <div class="col-sm-4"></div>
   <div class="col-sm-4 text-center" role ="navigation">    
  <ul class="nav nav-tabs"  role="tablist">
    <li role="presentation" class="active"><a href="#profiili" aria-controls="profiili" role="tab" data-toggle="tab">Profiili</a></li>
    <li role="presentation"><a href="#CV" aria-controls="CV" role="tab" data-toggle="tab">CV</a></li>
    <li role="presentation"><a href="#portfolio" aria-controls="portfolio" role="tab" data-toggle="tab">Portfolio</a></li>
    <li role="presentation"><a href="#yhteystiedot" aria-controls="yhteystiedot" role="tab" data-toggle="tab">Yhteystiedot</a></li>
  </ul>
      </div>
   <div class="col-sm-4"> </div>
   </div>

      
    
      <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="profiili">
<div class="row">

    <div class="col-sm-4">
      <img class="img-responsive" style="float: left; margin: 0px 15px 15px 0px;" src="kuvat/mikko.jpg" alt="64x64">
      </div>
    <div class="col-sm-4">
        
        <?php include_once("sisalto/profiili.php") ?>
        
    </div>
    <div class="col-sm-4">
    </div>
</div>
    </div>
    <div role="tabpanel" class="tab-pane" id="CV">
          
            <?php include_once("sisalto/CV.php"); ?>
            
    </div>
    <div role="tabpanel" class="tab-pane" id="portfolio">        
        
   
        <?php include_once("sisalto/portfolio.php"); ?>
        
    
    </div>
    <div role="tabpanel" class="tab-pane" id="yhteystiedot">
        <?php include_once("sisalto/yhteystiedot.php"); ?>
    </div>
  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
