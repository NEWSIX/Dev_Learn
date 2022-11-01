<?php

require("dbconnect.php");

$id =  $_GET["id"];
$sql = "SELECT * From employee Where id = $id";
$res = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($res);


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Employee Data</title>
</head>

<script>

function toggle(source) {
  checkboxes = document.getElementsByName('id[]');
  for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
  }
}
</script>
<body>

    <center>
<h1><a href="index.php">Employee Database</a></h1>
<hr><br>

<h3> Update Employee Data</h3>
    <form action="updateData.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" value="<?php echo $row["fname"] ?>"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" value="<?php echo $row["lname"] ?>"><br><br>

        <?php if($row["gender"] == "male"){ ?>
        <input type="radio" id="male" name="gender" value="male" checked>
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female" >
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br>
        <?php } ?>

        <?php if($row["gender"] == "female"){ ?>
        <input type="radio" id="male" name="gender" value="male" >
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female" checked>
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br>
        <?php } ?>

        <?php if($row["gender"] == "other"){ ?>
        <input type="radio" id="male" name="gender" value="male" >
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female" >
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other" checked>
        <label for="other">Other</label><br>
        <?php } 

        else{
            echo '  <input type="radio" id="male" name="gender" value="male" >
                    <label for="male">Male</label><br>
                    <input type="radio" id="female" name="gender" value="female" >
                    <label for="female">Female</label><br>
                    <input type="radio" id="other" name="gender" value="other" >
                    <label for="other">Other</label><br>
            ';
        }
        ?>


        


        

        <div class="form-group">
            <label for = "">Skill :</label>

            <?php
            $skill_list = ["java","php","python","html"];
            $skill = explode(",",$row["skill"]);
            foreach ($skill_list as $val){
                if(in_array($val,$skill)){
                    echo "<input type='checkbox' name='skill[]' value='$val' checked > $val";
                }
                else{
                    echo "<input type='checkbox' name='skill[]' value='$val' > $val";
                }
              
            }

        ?>
        </div>

        <br><br>
        <input type="submit" value="Update">
    </form> 
</center>
</body>
</html>