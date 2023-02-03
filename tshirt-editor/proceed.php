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
              <link rel="stylesheet" href="3d/style.css">
    </head>
    <body>


      <form action="action/save_image.php" method="post" style="margin-top:50px;" enctype="multipart/form-data">
      
    
        <fieldset>
                <legend><span class="number" style="background-color:black;">1</span>PERSONALIZE INFORMATION</legend>
    
        <label for="event_select_for">Upload Design:</label>
        <input type="file" name="photo" required="">
        <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>" required="">
        <input type="hidden" name="code" value="<?php echo $_GET['code']; ?>" required="">
        </fieldset>
        <button type="submit" name="save" style="background-color:black; border-color:black;">UPLOAD TO DESIGN</button>
      </form>
      
    </body>
</html>
<!-- partial -->
  