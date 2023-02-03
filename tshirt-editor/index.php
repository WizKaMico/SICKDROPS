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


      <form action="action/reserve.php" method="post" style="margin-top:50px;">
      
    
        <fieldset>
                <legend><span class="number" style="background-color:black;">1</span>PERSONALIZE INFORMATION</legend>
    
        <label for="event_select_for">Quantity:</label>
        <input type="number" name="quantity" required="">
        <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>" required="">
        <input type="hidden" name="user_id" value="<?php echo $_GET['user_id']; ?>" required="">
        <label for="event_select_for">Shirt Style:</label>
        <select id="event_select" name="shirt_style" required="">
              <?php
              include_once('../connection/connection.php');
              $sql = "SELECT * FROM customize_style";
 
              //use for MySQLi-OOP
              $query = $conn->query($sql);
              while($row = $query->fetch_assoc()){
              ?>
            <option value="<?php echo $row['style_id']; ?>"><?php echo $row['style_name']; ?> | PRICE : <?php echo $row['price']; ?> </option> 
            <?php } ?>
        </select>
        <label for="event_select_for">Shirt Size:</label>
        <select id="event_select" name="shirt_size" required="">
           <?php
              include_once('../../connection/connection.php');
              $sql = "SELECT * FROM customize_size";
 
              //use for MySQLi-OOP
              $query = $conn->query($sql);
              while($row = $query->fetch_assoc()){
              ?>
            <option value="<?php echo $row['size_id']; ?>"><?php echo $row['size_name']; ?> | PRICE : <?php echo $row['price']; ?> </option>
            <?php } ?>
            
        </select>
        </fieldset>
        <button type="submit" name="add" style="background-color:black; border-color:black;">PROCEED TO DESIGN</button>
      </form>
      
    </body>
</html>
<!-- partial -->
  