<?php
include 'connect.php';
// $sql="create table  add_experience (

//     category varchar(100) not null , 
//     title	varchar(100)	 not null , 
//     start_date date not null ,

// end_date text not null , 
// intiolization varchar(100) not null , 
//  description text not null ,
//);";
//  if(mysqli_query($con,$sql)){
//     echo "table created successfully";
// }
if(isset($_POST['submit'])&& $_POST['submit']=='Save'){
$category=$_POST['category'];
$title=$_POST['title'];
$start_date=$_POST['start_date'];
$formatted_Start_Date = date('Y-m-d', strtotime($start_date));
$end_date=$_POST['end_date'];
$formatted_End_Date = date('Y-m-d', strtotime($end_date));
$intiolization=$_POST['intiolization'];
$description=$_POST['description'];
$sql="INSERT INTO add_experience(category,title,start_date,end_date,intiolization,description)
VALUES('$category','$title','$start_date','$end_date','$intiolization','$description')";
$result=mysqli_query($con,$sql);
if($result){
   echo"true";
}
else{
   echo "false";
}
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/my style.css" >

    <title>web project</title>
   
</head>

    <body>
      <div class="nav">
      <div class="group">
      <a href="Home.php" class="item ">Personal Information</a>
      <a href="ViewCourses.php" class="item">Course Information</a>
      <a href="ViewExperience.php" class="item">Experiences Information</a>
      <a href="AddCourse.php" class="item">Add Course</a>
      <a href="AddExperience.php" class="item active">Add experience</a>
      <img src="../images/Azhar_WHITE_LOGO.png" alt="Icon" width="40px" height="40px">
    </div>
        
        
          <div class="PageContent">
            <div class="form">
              <div class="group">
                <form method="POST" enctype="multipart/form-data">
                   <table cellspacing="40">
                     <tr>
                        <td class="line1">Experience Category :</td>
                        <td>
                           <input class="line2" type="text" name="category">
                         
                        </td>    
                     </tr>
                            
                     <tr>
                        <td class="line1">Experience Title : </td>
                        <td><input class="line2" type="text" name="title"></td>
                     </tr>
                            
                     <tr>
                        <td class="line1">Srart month : </td>
                        <td><input class="line2" type="date" name="start_date"></td>
                     </tr>
                            
                       <tr>
                          <td class="line1">End month : </td>
                          <td><input class="line2" type="date" name="end_date"></td>
                       </tr>
                            
                       <tr>
                          <td class="line1">Intiolization :</td>
                          <td><input class="line2" type="text" name="intiolization"></td>
                       </tr>
                            
                       <tr>
                          <td class="line1" VAlign="Top">Description :</td>
                          <td>
                            <textarea id="textarea2" rows="4" cols="50" style="direction: none;"name="description"></textarea>
                          </td>
                       </tr>
                         
                       <tr>
                          <td><input type="submit" name="submit" value="Save"></td>
                          <td><input type="reset" name="submit" value="Reset"></td>
                       </tr>

                     </table>
                   </form>
                 </div>
               </div>
              
            <div class="img-AddExperience" style="height=500;">
                <img style="height=500;" src="../images/experience.jpg" alt="experienceImg">
            </div>
        </div>
    </body>
</html>