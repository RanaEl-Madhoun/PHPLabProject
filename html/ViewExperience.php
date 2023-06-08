<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web project</title>
    <link rel="stylesheet" href="../css/my style.css">
    
</head>
    
<body>
   <div class="nav">
     <div class="group">
    
      <a href="Home.php" class="item">Personal Information</a>
      <a href="ViewCourses.php" class="item">Course Information</a>
      <a href="ViewExperience.php" class="item active">Experiences Information</a>
      <a href="AddCourse.php" class="item">Add Course</a>
      <a href="AddExperience.php" class="item">Add experience</a>
      <img src="../images/Azhar_WHITE_LOGO.png" alt="Icon" width="40px" height="40px">
    </div>
   </div>
    
    <div class="viewEx">
        <h1 class="title">All Experiance Information</h1>
        <?php
include 'connect.php';

$sql = "SELECT * FROM add_experience";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {

    $counter = 1;
   
    while ($row = mysqli_fetch_assoc($result)) {
    
   
     echo"<h4 class ='h4'>".$row['category'];
     echo "<sub class='sub'> ".$row['title'].$row['intiolization']."</sub>";
     echo " </h4>";
    echo "<p class='date'>"." from ".$row['start_date']." to ".$row['end_date']."</p>";
     echo "<p class='paragraph'> ".$row['description']."</p>";
      
       

        $counter++;
        
    }
} else {
    echo "<tr><td colspan='8' align='center'>No records found.</td></tr>";
}

mysqli_close($con);
?>


      
          
         
    </div> 
</body>
</html>
