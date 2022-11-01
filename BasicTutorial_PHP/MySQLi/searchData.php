<?php
require("dbconnect.php"); 

$name = $_POST["empName"];

$sql = "SELECT * From employee WHERE fname LIKE '%$name%' ORDER BY fname ASC";
$res = mysqli_query($conn,$sql);
$count = mysqli_num_rows($res);
//$row = mysqli_fetch_assoc($res);
$order = 1;

if($res){?>


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

<?php if ($count>0){?>


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
<hr>
<?php
}
else{
?>
<h3>    NO DATA <br><br><br>
<a href="index.php">Back</a>
</h3>
<?php
}

}
else mysqli_error($conn);
?>
   </center>
</body>
</html>