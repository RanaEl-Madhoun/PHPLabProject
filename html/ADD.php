<!DOCTYPE html>
<html>

<head>
  <title>Add Course</title>

<link rel="stylesheet" type="text/css" href="../css-file/MyStyle.css">

</head>

<body>
  <ul class="nav">

      <li><a href = "home.html"><b>Personal Information</b></a></li>
      <li><a href = "ViewCourses.html"><b>Course Information</b></a></li>
      <li><a href = "ViewExperience.html"><b>Experience Information</b></a></li>
      <li><a href = "AddCourse.html"><font color = "#FFFFFF"><b>Add Course</b></font></a></li>
      <li><a href = "AddExperience.html"><b>Add Experience</b></a></li>
<img src="../image-file/Azhar_WHITE_LOGO.png" id="azhar"alt="Azhar logo" align="right">
    <div class="animation start-PersonalInformation"></div>

  </ul>
  

    <p>
  <img src="../image-file/course.jpg" id="exp"alt="experience" align="right" width="500" height="535">
  </p>

      <form action="index.html" method="post" id="form1">
        Course Name: <input type="text" id="course"  name="coursrname"><br>

    

        Number Of Hours: <input type="number" id="number" name="hours"><br>
        Start Date: <input type="date" id="start" name="startdate"><br>

        End Date: <input type="date" id="end" name="enddate"><br>

        Institution: <input type="text" id="institution" name="institution"><br>

        Attachment: 
        <input type="radio" id="file" name="attatchment" value="File" checked>File

        <input type="radio" id="url" name="attatchment" value="URL">URL<br>

        URL:  <input type="text" id="url2" name="url"><br>

    
        File: <input type="file" id="file2" name ="choosefile"><br>

      Note:<br> <textarea name="notes" id="notes" ></textarea><br>

        <button type="submit" id="save">Save</button>

        <button type="button" id="close">Close</button>

      </form>



</body>
</html>