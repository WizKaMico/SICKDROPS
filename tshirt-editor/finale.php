<?php 

$code = $_GET['code'];
include '../connection/connection.php';
$result=mysqli_query($conn, "select * from costomize_shirt_order where oid='$code'");
$row=mysqli_fetch_array($result);

 ?> 


<!DOCTYPE html>
<html lang="en" >

<!-- partial:index.partial.html -->
<!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="main.css">
         <link rel="stylesheet" href="dist/style.css">
    </head>
    <body>


      <form action="#" method="post" style="margin-top:50px;">
      
    
        <fieldset>
                <legend><span class="number" style="background-color:black;">3</span>FINAL 3D VIEW OF DESIGN</legend>
            <div class="wrapper">
              <center><div id="threesixty"></div></center>
           
            </div>      
        </fieldset>
    <!--     <a href="index.php?email=<?php echo $row['email'] ?>&user_id=<?php echo $row['user_id'] ?>"><a/> -->
        <button type="submit" style="background-color:black; border-color:black;"><a href="index.php?email=<?php echo $row['email'] ?>&user_id=<?php echo $row['user_id'] ?>">CREATE NEW DESIGN<a/></button>
      </form>

      <script src='https://cdn.jsdelivr.net/npm/@mladenilic/threesixty.js/dist/threesixty.js'></script>
      <script>
  var image = "action/<?php echo $row['photo']; ?>";      
  var threesixty = new ThreeSixty(document.getElementById('threesixty'), {
  image: image,
  width: 230,
  height: 230,
  count: 3,
  perRow: 3,
  speed: 150,
  prev: document.getElementById('prev'),
  next: document.getElementById('next')
});

threesixty.play();

      </script>

      
    </body>
</html>
<!-- partial -->
  