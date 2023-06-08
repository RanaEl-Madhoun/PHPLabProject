<?php
include 'connect.php';
// $sql="create table  personal_information (

//     name varchar(100) not null , 
//     gender	varchar(100)	 not null , 
//     birth date not null ,

// nationality varchar(100) not null , 
// placeOfBirth varchar(100) not null , 

//  jobTitle varchar(100) not null ,
//  experience varchar(100) not null ,
// );";
// if(mysqli_query($con,$sql)){
//     echo "table created successfully";
// }
// $sql="INSERT INTO personal_information(name,gender,birth,nationality,placeOfBirth,jobTitle,experience) 
// VALUES ('Rana Ezzat AL-Madhoun','Female','2002-06-10','Palestinian','Gaza','Computre system Engineer','3 Years')";
// $result=mysqli_query($con,$sql);


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/my style.css">
    <title>web project</title>
</head>

<body>
  <div class="nav">
    <div class="group">
 
      <a href="Home.php" class="item active">Personal Information</a>
      <a href="ViewCourses.php" class="item">Course Information</a>
      <a href="ViewExperience.php" class="item">Experiences Information</a>
      <a href="AddCourse.php" class="item">Add Course</a>
      <a href="AddExperience.php" class="item">Add experience</a>
      <img src="../images/Azhar_WHITE_LOGO.png" alt="Icon" width="40px" height="40px">
    </div>
  </div>
    
  <div class="PageContent">
      <div class="group">
        <h1 class="title" >Personal Information</h1>
        <div class="table">
            
      <table cellspacing ="20" cellpadding="10">
      <?php
include 'connect.php';

$sql = "SELECT * FROM personal_information";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {

   
   
    while ($row = mysqli_fetch_assoc($result)) {

    
   
   echo "<tr>";//1
   echo  " <td class='cell'>"."Full Name:"."</td>";
   echo" <td class='cell'>"."<b>".$row['name']."</b>"."</td>";
   echo" </tr>";
   echo "<tr>";//2
   echo  " <td class='cell'>"."Gender:"."</td>";
   echo" <td class='cell'>"."<b>".$row['gender']."</b>"."</td>";
   echo" </tr>";
   echo "<tr>";//3
   echo  " <td class='cell'>"."Birth Date:"."</td>";
   echo" <td class='cell'>"."<b>".$row['birth']."</b>"."</td>";
   echo" </tr>";
   echo "<tr>";//4
   echo  " <td class='cell'>"."Nationality:"."</td>";
   echo" <td class='cell'>"."<b>".$row['nationality']."</b>"."</td>";
   echo" </tr>";
   echo "<tr>";//5
   echo  " <td class='cell'>"."Place Of Birth:"."</td>";
   echo" <td class='cell'>"."<b>".$row['placeOfBirth']."</b>"."</td>";
   echo" </tr>";
   echo "<tr>";//6
   echo  " <td class='cell'>"."Job title:"."</td>";
   echo" <td class='cell'>"."<b>".$row['jobTitle']."</b>"."</td>";
   echo" </tr>";
   echo "<tr>";//7
   echo  " <td class='cell'>"."Year of experience:"."</td>";
   echo" <td class='cell'>"."<b>".$row['experience']."</b>"."</td>";
   echo" </tr>";
   

      
       

      
        
    }
} else {
    echo "<tr><td colspan='8' align='center'>No records found.</td></tr>";
}

mysqli_close($con);
?>

       
       </table>
      </div>
    </div>
      
    <div class="image">
      <img src="../images/personal.png" alt="personalBlack">
    </div>
  </div>
  
</body>

</html>