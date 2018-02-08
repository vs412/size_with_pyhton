<?php
  $con = mysqli_connect('localhost', 'root', '', 'insert_db');
  function showData(){
    global $con;
    $query = "SELECT * FROM ''";
    $run = mysqli_query($con, $query);
    if ($run == TRUE){
      ?>
      <table border="1" width="80%" align="center">
        <tr>
          <td>Name</td><td>Email Id</td>
        </tr>
        <?php
        while($data= mysqli_fetch_assoc($run)){
          ?>
          <tr>
            <td><?php echo $data['Name'];?></td><td><?php echo$data['EmailID']; ?></td>
          </tr>
          <?php
        }
         ?></table><?php
    }
    else {
      echo "Error !";
    }
  }
 ?>
 <html>
 <head>
   <title>Show Data</title>
 </head>
 <body>
   <?php showData() ?>
 </body>
 </html>
