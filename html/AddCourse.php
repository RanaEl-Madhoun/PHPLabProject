<?php
include 'connect.php';
// $sql="create table  add_course (
//     id int (11) unsigned auto_increment primary key ,
//     course_name text not null , 
//     number_hours int (10) not null , 
//     start_date date not null ,
// start_date  date null , 
// end_date text not null , 
// intiolization text not null , 
// file text not null , 
// attachement varchar(100) not null ,
//  note text not null ,
// );";
// if(mysqli_query($con,$sql)){
//     echo "table created successfully";
// }


if(isset($_POST['submit'])&& $_POST['submit']='Save'){
   $UploadedFileName=$_FILES['UploadImage']['name'];

   $course_name=$_POST['course_name'];
   $number_hours=$_POST['number_hours'];
   $start_date=$_POST['start_date'];
   $formatted_Start_Date = date('Y-m-d', strtotime($start_date));
   $end_date=$_POST['end_date'];
   $formatted_End_Date = date('Y-m-d', strtotime($end_date));
   $intiolization= $_POST['intiolization'];
   $attachement= $_POST['attachement'];
   $note= $_POST['note'];
  
   
      


         if($UploadedFileName!='')
         {
           $upload_directory = "MyUploadImages/"; 
           $TargetPath=time().$UploadedFileName;
           if(move_uploaded_file($_FILES['UploadImage']['tmp_name'], $upload_directory.$TargetPath)){    
            $sql="INSERT INTO add_course(course_name,number_hours,start_date,end_date,intiolization,attachement,file,note)
            VALUES ('$course_name', '$number_hours', '$formatted_Start_Date','$formatted_End_Date','  $intiolization',' $attachement', '$TargetPath','$note')";
            $result=mysqli_query($con,$sql);
                             
          }
         }
  
                 
  
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
    <link  rel="stylesheet" href="../css/my style.css">
        <title>project</title>
</head>

    <body>
      <div class="nav">
      <div class="group">
      <a href="Home.php" class="item">Personal Information</a>
      <a href="ViewCourses.php" class="item">Course Information</a>
      <a href="ViewExperience.php" class="item">Experiences Information</a>
      <a href="AddCourse.php" class="item active">Add Course</a>
      <a href="AddExperience.php" class="item">Add experience</a>
      <img src="../images/Azhar_WHITE_LOGO.png" alt="Icon" width="40px" height="40px">
    </div>
       </div>
         
        </div>
        <div class="PageContent">
          <div class="form" >
            <div class="group">
                <form method="POST"enctype="multipart/form-data">
                   <table cellspacing="40">
                     <tr>
                        <td class="line1">Course Name :</td>
                        <td ><input class="line2" type="text" name="course_name"></td>
                     </tr>
                       
                     <tr>
                        <td class="line1">Number of hours : </td>
                        <td><input class="line2" type="number" name="number_hours"></td>
                     </tr>
                            
                     <tr>
                        <td class="line1">Srart Date : </td>
                        <td><input class="line2" type="date" name="start_date"></td>
                     </tr>
                       
                     <tr>
                        <td class="line1">End Date : </td>
                        <td><input class="line2" type="date" name="end_date"></td>
                     </tr>
                            
                     <tr>
                        <td class="line1">Intiolization :</td>
                        <td><input class="line2" type="text" name="intiolization"></td>
                     </tr>
                       
                     <tr>
                        <td class="line1">Attachement :</td>
                        <td>
                            <input type="radio" name="attachement" style="margin-left: -120px;"checked>File 
                            <input type="radio" name="attachement" style="margin-left: 70px;">Url
                        </td>
                     </tr>
                            
                     <tr>
                        <td class="line1">File :</td>
                        <td><input class="line2" type="file" name="UploadImage"></td>
                     </tr>
                            
                     <tr>
                        <td class="line1" VAlign="Top">Note :</td>
                        <td><textarea class="line2" rows="4" cols="30" style="direction: none;" name="note"></textarea></td>
                     </tr>
                            
                     <tr>
                        <td><input type="submit" name="submit" value="Save"></td>
                        <td><input type="reset" name="submite" value="Reset"></td>
                     </tr>

                   </table>
                </form>
             </div>
         </div>
            
            <div class="img-AddCourse">
                <img src="../images/course.jpg" alt="courseImg">
            </div>
    </div>
        
    </body>
</html>