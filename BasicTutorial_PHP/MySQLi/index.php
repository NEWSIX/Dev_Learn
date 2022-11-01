<?php
require('dbconnect.php');


$sql = "SELECT * From employee Order By fname ASC";
$res = mysqli_query($conn,$sql);

$count = mysqli_num_rows($res);
$order = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Data</title>
</head>
<style>
.column {
  float: left;
  width: 75%;
}

.right {
  width: 25%;
}


/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


</style>
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
<div class="row">
    
<h1><a href="index.php">Employee Database</a></h1>
<hr><br>


<div class="column left">    

<?php if ($count>0){?>

    <h3>Find Employee</h3>
<form action="searchData.php" method="POST">
    <label for="">Name</label>
    <input type="text" name="empName" placeholder=" Employee Name" id="">
    <input type="submit" value="Enter">
</form>


<h3>Show Employee</h3>
    <table border="1">
        <thead>
            <tr>
                <td><input type="checkbox" onclick="toggle(this);">Select</td>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Skill</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>

        
        <?php while($row=mysqli_fetch_row($res)){?>
            <tr>
                <form action="multipleDelete.php" method="POST">
                    <td><input type="checkbox" name="id[]" value=" <?php echo $row[0] ?>"></td>
                    <td><?php echo  $order++;?></td>
                    <td><?php echo $row[1] ?></td>
                    <td><?php echo $row[2] ?></td>
                    <td><?php echo $row[3] ?></td>
                    <td><?php echo $row[4] ?></td>
                    <td>
                    <a href = "deleteQueryString.php?idemp=<?php echo $row[0]?>"
                    onclick = "return confirm('delete id ?')">Delete</a>       
                    </td>
                    <td><a href="editForm.php?id=<?php echo $row[0]?>">edit</a></td>
        <?php  } ?>
            </tr>
            <td><input type="submit" value="Delete"></td>
        </tbody>
    </table>
   
    </form>
    <br>

<?php
}
else{}
?>

    </div>

    <div class="column right" style="background-color:antiquewhite;">
        <h3> Insert Employee </h3>
        <form action="insertData.php" method="post">
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname" value=""><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname" value=""><br><br>

            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label><br>

            <div class="form-group">
                <label for = "">Skill :</label>
                <input type="checkbox" name="skill[]" value="java"> Java
                <input type="checkbox" name="skill[]" value="php"> PHP
                <input type="checkbox" name="skill[]" value="python"> Python
                <input type="checkbox" name="skill[]" value="html"> HTML
            </div>

            <br><br>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset"><br><br>
        </form>
    </div>
</div>
<hr>
    </center>
</body>
</html>