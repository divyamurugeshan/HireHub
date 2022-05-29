<html>
<head>
<style type="text/css">
body{
 background-color: MidnightBlue;
 background-size:cover;
 background-attachment: fixed;
 background-position: center;
 color:white;
}
.button{border-radius: 100%;
      background-color: MistyRose;
      border: none;
      color: black;
      padding: 12px;
      text-align: center;
      text-decoration: none;
      font-size: 16px;
      margin: 4px 2px;
      float:right;
    }
</style>
</head>
<body>
<a href="student_sign_in.html">
          <button class="button">Back</button>
          </a>
<?php
$USN=$_POST['USN'];
$User_Name=$_POST['User_Name'];
$Password=$_POST['Password'];
$psw_repeat=$_POST['psw_repeat'];
$First_Name=$_POST['First_Name'];
$Last_Name=$_POST['Last_Name'];
$Middle_Name=$_POST['Middle_Name'];
$Date_Of_Birth=$_POST['Date_Of_Birth'];
$Email_Id=$_POST['Email_Id'];
$Mobile_Number=$_POST['Mobile_Number'];
$Gender=$_POST['Gender'];
$Course=$_POST['Course'];
$Company=$_POST['Company'];
$Address=$_POST['Address'];
$City=$_POST['City'];
$Pin_Code=$_POST['Pin_Code'];
$State=$_POST['State'];
$Country=$_POST['Country'];

$con=mysqli_connect("localhost","root","");
if(!($con))
{
die("error in connecting to DB");
}
else
{
print("Registration successful");
}

$db=mysqli_select_db($con,"student_details");
$query="insert into details values('$USN', '$User_Name', '$Password', '$psw_repeat', '$First_Name', '$Last_Name', '$Middle_Name', '$Date_Of_Birth', '$Email_Id', '$Mobile_Number', '$Gender', '$Course', '$Company', '$Address', '$City', '$Pin_Code', '$State', '$Country')";
mysqli_query($con,$query);
mysqli_close($con);
?>
</body>
</html>