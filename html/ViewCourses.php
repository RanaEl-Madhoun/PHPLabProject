
    
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
      <a href="Home.php" class="item ">Personal Information</a>
      <a href="ViewCourses.php" class="item active">Course Information</a>
      <a href="ViewExperience.php" class="item">Experiences Information</a>
      <a href="AddCourse.php" class="item">Add Course</a>
      <a href="AddExperience.php" class="item">Add experience</a>
      <img src="../images/Azhar_WHITE_LOGO.png" alt="Icon" width="40px" height="40px">
    </div>
      </div>
        
        
      <div class="group">
        <h1 class="title">ALL Courses Information</h1>  
        <table border="2" cellspacing="0" cellpadding="20" class="coursesInfo-table">
           <tr>
             <th width="50px" rowspan="2" bgcolor="#606060" style="width: 50px;" style="height:100px;">#</th>
               <th rowspan="2" valign="center" bgcolor="#606060" style="width: 220px;">Course Name</th>
               <th rowspan="2" valign="center" bgcolor="#606060">Total Hours</th>
               <th colspan="2" valign="top" bgcolor="#606060">Date</th>
               <th rowspan="2" valign="center" bgcolor="#606060">Institution</th>
               <th rowspan="2" valign="center" bgcolor="#606060">Attachment</th>
               <th width="250px" rowspan="2" valign="center" bgcolor="#606060">Notes</th>
           </tr>
            
            <tr>
                <th bgcolor="#606060">form</th>
                <th bgcolor="#606060">To</th>
            </tr>
            <tr class="td" >

            <?php
include 'connect.php';

$sql = "SELECT * FROM add_course";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {

    $counter = 1;
    $rowColor = "#E5E5E5"; 
    while ($row = mysqli_fetch_assoc($result)) {
   $id=$row['id'];
      echo "<tr bgcolor='$rowColor'>";
      echo "<td align='center' >" . $row['id'] . "</td>";
     echo "<td align='center'>" . $row['course_name'] . "</td>";
    echo "<td align='center' >" .$row['number_hours']. "</td>";
    echo "<td align='center' >" . $row['start_date']. "</td>";
    echo "<td align='center'>" . $row['end_date'] . "</td>";
    echo "<td align='center' >" .$row['intiolization'] . "</td>";
//  echo "<td align='center'><a href=ViewCer.php?id=$id>view</a></td>";

    echo "<td align='center'><a href='MyUploadImages/" . $row['file'] . "' target='_blank'>view</a></td>";

    


    echo "<td id='TableCell' align='left'>" . $row['note'] . "</td>";
      
      
        echo"</tr>";
        $rowColor = ($counter % 2 == 0) ? "#FFFFFF" : "#E5E5E5";

        $counter++;
        
    }
} else {
    echo "<tr><td colspan='8' align='center'>No records found.</td></tr>";
}

mysqli_close($con);
?>

            
         
             

            </tr>
            
            <tr hight="80px">
            </tr>
              
            
       
        </table> 
      
      </div>
    </body>
</html>