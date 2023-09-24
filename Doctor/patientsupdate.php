<html>
    <head>
        <title>Patient Update</title>
    </head>


    <body>
        <?php

         include '../connection.php';
         $ids = $_GET['id'];
         $email = $_COOKIE['emailid'];
         $tableName = 'user_' . preg_replace("/[^a-zA-Z0-9]+/", "", $email);       
         $showqu = "select * from $tableName where id={$ids}";
         $showdat = mysqli_query($con,$showqu);
         $arr = mysqli_fetch_array($showdat);



         ?>
        <form action="" method ="POST">
                <input type="text" name="PeName"value="<?php echo $arr['PeName'];?>">
                <input type="number" name="PeAge" value="<?php echo $arr['PeAge'];?>" >
                <input type="text" name="PeEmail" value="<?php echo $arr['PeEmail'];?>">
                <input type="text" name="PeIssue"value="<?php echo $arr['PeIssue'];?>">
                <textarea name="PeDES"></textarea>
                <textarea name="Pecare"></textarea>
                <input type="submit" name= "submit" value="submit">

        </form>
        <?php
        include "../connection.php";
if(isset($_POST['submit'])){
    $id= $_GET['id'];
    $PeName =$_POST['PeName'];
    $PeAge = $_POST['PeAge'];
    $PeEmail = $_POST['PeEmail'];
    $PeIssue = $_POST['PeIssue'];
    $PeDES = $_POST['PeDES'];
    $Pecare = $_POST['Pecare'];
    $email = $_COOKIE['emailid'];
    $tableName = 'user_' . preg_replace("/[^a-zA-Z0-9]+/", "", $email);  
    $updateque = " update $tableName set PeName='$PeName',PeAge='$PeAge',
    PeEmail='$PeEmail',PeIssue='$PeIssue' ,PeDES='$PeDES' ,Pecare='$Pecare' where id = $id ";
    $res = mysqli_query($con,$updateque);

}                
 ?>
    </body>
</html>