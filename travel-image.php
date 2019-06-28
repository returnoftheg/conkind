<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; 
   charset=UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>Travel Template</title>

   <link rel="shortcut icon" href="bootstrap3_travelTheme/assets/ico/favicon.png">

   <!-- Google fonts used in this theme  -->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,800,600,700,300' rel='stylesheet' type='text/css'>  

   <!-- Bootstrap core CSS -->
   <link href="bootstrap3_travelTheme/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- Custom styles for this template -->
   <link href="bootstrap3_travelTheme/theme.css" rel="stylesheet">  

   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
   <script src="bootstrap3_travelTheme/assets/js/html5shiv.js"></script>
   <script src="bootstrap3_travelTheme/assets/js/respond.min.js"></script>
   <![endif]-->
</head>

<body>

<?php include 'travel-header.php'; ?>
   
<div class="container">  <!-- start main content container -->
   <div class="row">  <!-- start main content row -->
      <div class="col-md-3">  <!-- start left navigation rail column -->
         <?php include 'travel-left-rail.php'; ?>
      </div>  <!-- end left navigation rail --> 
      
      <div class="col-md-9">  <!-- start main content column -->
         <ol class="breadcrumb">
           <li><a href="#">Home</a></li>
           <li><a href="Chapter09-project02.php">Favorites</a></li>
           <li class="active">title here</li>
         </ol> 

          <?php $img = array();
          include 'travel-data.php';
          $img = $images;
          for ($i =0; $i<56;$i++){
              if (!array_key_exists($i, $img)) {
                  $img[$i] = array("id"=>"","title" => "", "description" => "", "country" => "", "user" => "", "path" => "");
              }

          }

          $id = $_SERVER['QUERY_STRING'];
          $id = preg_replace('/\D/', '', $id);
          ?>
         <h1><?php echo $img[$id]["title"]; ?></h1>
         <div class="row">
            <div class="col-md-8">
                <?php echo "<img src='images/travel/medium/".$img[$id]["path"]."'border='20px'>"?>
            </div>
            <div class="col-md-4">
               <div class="panel panel-primary">
                  <div class="panel-body">
                      <p>By <a href="#"><?php echo $img[$id]["user"]; ?></a></p>
                  <p>Taken in <a href="#"><?php echo $img[$id]["country"]; ?></a></p>
                  <p><?php echo $img[$id]["description"]; ?>e</p>
                   </div>
               </div>
            </div>
         </div>


       

      </div>  <!-- end main content column -->
   </div>  <!-- end main content row -->
</div>   <!-- end main content container -->
   
<?php include 'travel-footer.php'; ?>   

   
   
 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="bootstrap3_travelTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_travelTheme/dist/js/bootstrap.min.js"></script>
 <script src="bootstrap3_travelTheme/assets/js/holder.js"></script>
</body>
</html>