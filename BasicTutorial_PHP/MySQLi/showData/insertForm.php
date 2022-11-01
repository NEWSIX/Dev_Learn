<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Insert Data</title>
</head>
<body>
    <h2> Form </h2>
    <form action="insertData.php" method="post">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" value="John"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" value="Doe"><br><br>

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
        <a href="index.php">HOME</a>
    </form>




    
</body>
</html>