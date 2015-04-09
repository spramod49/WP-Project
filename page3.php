<html>
<head>
 <link rel="stylesheet" href="st.css">
</head>
</html>


    <?php
	$name = $_POST['name'];//get details from page2
	$usn = $_POST['usn'];
	$dept = $_POST['dept'];
	$sem = $_POST['sem'];
	$year = $_POST['year'];
	
	$credits = 5;
    $course = $_POST['course'];
	$course_name = 'default name';
	$n = sizeof($course);
	
	if($_POST['elective']!=null)
	$course[$n] = $_POST['elective'];
	
	
	function getcoursename($c)    //get course name fro course id
	{
	switch($c)
	{
	 case "11MA3ICMAT":return "Engineering mathematics-3";break;
	 case "09CI3GCCOA":return "Computer Organisation and architecture";break;
	 case "09CI3GCDSL":return "Data structures";break;
	 case "09CI3GCLDL":return "Logic Design";break;
	 case "09CI3GCMPL":return "Micro Processors";break;
	 
	 case "11MA4GCMAT":return "Engineering mathematics-4";break;
	 case "09CI4GCTOF":return "Theoretical Foundations of Computations";break;
	 case "09CI4GCUNX":return "Unix Programming";break;
	 case "09CI4GCOOP":return "Object Oriented Programming with C++";break;
	 case "09CI4GCADA":return "Analysis and Design of Algorithms";break;
	 
	 case "10CI5GCOPS":return "Operating System";break;
	 case "10CI5GCDCN":return "Data Communications";break;
	 case "10CI5GCDBM":return "Database Management Systems";break;
	 case "10CI5GCJAV":return "Java Programming";break;
	 case "10CI5GCSSW":return "System Software";break;
	 
	 case "10CI6GCSWE":return "Software engineering";break;
	 case "10CI6GCOOM":return "Object Oriented Modeling and design patterns";break;
	 case "10CI6GCPSQ":return "Probability Statistics and Queuing";break;
	 case "10CI6GCCON":return "Computer Networks";break;
	 case "10CI6GCWEP":return "Web Programming";break;
	 case "10CI6GECCT":return "Cloud Computing";break;
	 case "10CI6GEADS":return "Advanced Data Structures";break;
	 case "10CI6GEPCT":return "Parallel Computing Technique";break;
	 case "10CI6GEPPL":return "Principles of Programming Languages";break;
	 
	 
	 case "11CI7GCEAM":return "Entrepreneurship and Management";break;
	 case "11CI7GCPPI":return "Project Phase 1";break;
	 case "11CI7GECGH":return "Computer Graphics";break;
	 case "11CI7GECDN":return "C# And .net";break;
	 case "11CI7GECDI":return "Computer Vision and Digital Image Processing";break;
	 case "11CI7GEMCN":return "Mobile Communications";break;
	 case "11CI7GECNS":return "Cryptography and Network Security";break;
	 case "11CI7GEBEA":return "Building Enterprise Applications";break;
	 case "11CI7GEDMG":return "Data Mining";break;
	 case "11CI7GESNS":return "Sensor Networks";break;
	 case "11CS7DEABS":return "Arm Based System Design";break;
	 case "11CS7DEMCN":return "Micro Controller";break;
	 case "11CS7DESAC":return "Software Architecture";break;
	 case "11CS7DEEMS":return "Embedded Systems";break;
	 case "11CS7DEAIN":return "Artificial Intelligence";break;
	 case "11CI7IEJAP":return "Java Programming";break;
	 case "11CI7IEOOC":return "OOPS with C++";break;
	 case "11CI7IEDSN":return "Data Structures";break;
	 case "11CI7IEDBM":return "Database Management Systems";break;
	 case "11CI7IESEG":return "Software engineering";break;
	 case "11CI7IEWEP":return "Web Programming";break;
	 case "11CI7IEOSM":return "Operating Systems";break;
	 
	 case "11CI8GCICL":return "Indian Cyber Law";break;
	 case "11CI8GCPPT":return "Project Phase 2";break;
	 case "11CI8GESAN":return "Storage Area Networks";break;
	 case "11CI8GEPRN":return "Pattern Recognition";break;
	 case "11CI8GENNS":return "Neural Networks";break;
	 case "11CI8GESTG":return "Software Testing";break;
	 case "11CI8GEFLC":return "Fuzzy Logic";break;
	 case "11CI8IEJAP":return "Java Programming";break;
	 case "11CI8IEOOC":return "OOPS with C++";break;
	 case "11CI8IEDSN":return "Data Structures";break;
	 case "11CI8IEDBM":return "Database Management Systems";break;
	 case "11CI8IESEG":return "Software engineering";break;
	 case "11CI8IEWEP":return "Web Programming";break;
	 case "11CI8IEOSM":return "Operating Systems";break;
	 
	
	}
	
	}
	
	function getcoursecredit($c)  //get credits fro course id
	{
	switch($c)
	{
	 case "11MA3ICMAT":return 4;break;
	 case "09CI3GCCOA":return 4;break;
	 case "09CI3GCDSL":return 6;break;
	 case "09CI3GCLDL":return 5;break;
	 case "09CI3GCMPL":return 6;break;
	 
	 case "11MA4GCMAT":return 4;break;
	 case "09CI4GCTOF":return 4;break;
	 case "09CI4GCUNX":return 5;break;
	 case "09CI4GCOOP":return 6;break;
	 case "09CI4GCADA":return 6;break;
	 
	 case "10CI5GCOPS":return 4;break;
	 case "10CI5GCDCN":return 4;break;
	 case "10CI5GCDBM":return 6;break;
	 case "10CI5GCJAV":return 6;break;
	 case "10CI5GCSSW":return 6;break;
	 
	 case "10CI6GCSWE":return 3;break;
	 case "10CI6GCOOM":return 4;break;
	 case "10CI6GCPSQ":return 3;break;
	 case "10CI6GCCON":return 6;break;
	 case "10CI6GCWEP":return 6;break;
	 case "10CI6GECCT":return 4;break;
	 case "10CI6GEADS":return 4;break;
	 case "10CI6GEPCT":return 4;break;
	 case "10CI6GEPPL":return 4;break;
	 
	 
	 case "11CI7GCEAM":return 3;break;
	 case "11CI7GCPPI":return 4;break;
	 case "11CI7GECGH":return 6;break;
	 case "11CI7GECDN":return 6;break;
	 case "11CI7GECDI":return 6;break;
	 case "11CI7GEMCN":return 4;break;
	 case "11CI7GECNS":return 4;break;
	 case "11CI7GEBEA":return 4;break;
	 case "11CI7GEDMG":return 4;break;
	 case "11CI7GESNS":return 4;break;
	 case "11CS7DEABS":return 3;break;
	 case "11CS7DEMCN":return 3;break;
	 case "11CS7DESAC":return 3;break;
	 case "11CS7DEEMS":return 3;break;
	 case "11CS7DEAIN":return 3;break;
	 case "11CI7IEJAP":return 4;break;
	 case "11CI7IEOOC":return 4;break;
	 case "11CI7IEDSN":return 4;break;
	 case "11CI7IEDBM":return 4;break;
	 case "11CI7IESEG":return 4;break;
	 case "11CI7IEWEP":return 4;break;
	 case "11CI7IEOSM":return 4;break;
	 
	 case "11CI8GCICL":return 3;break;
	 case "11CI8GCPPT":return 13;break;
	 case "11CI8GESAN":return 4;break;
	 case "11CI8GEPRN":return 4;break;
	 case "11CI8GENNS":return 4;break;
	 case "11CI8GESTG":return 4;break;
	 case "11CI8GEFLC":return 4;break;
	 case "11CI8IEJAP":return 4;break;
	 case "11CI8IEOOC":return 4;break;
	 case "11CI8IEDSN":return 4;break;
	 case "11CI8IEDBM":return 4;break;
	 case "11CI8IESEG":return 4;break;
	 case "11CI8IEWEP":return 4;break;
	 case "11CI8IEOSM":return 4;break;
	 
	
	}
	
	
	}
	
	


$con=mysql_connect("localhost","root","");

$db_found = mysql_select_db("student details");
$isquery = "INSERT INTO `student  details`.`details` (`Name`, `USN`, `SEMESTER`, `DEPARTMENT`, `JOINING_YEAR`) VALUES ('".$name."','".$usn."','".$sem."','".$dept."','".$year."')";
$insert = mysql_query($isquery);

     
foreach($course as $course_code)
{
$course_name=getcoursename($course_code);
$credits=getcoursecredit($course_code);

//Insert details into two tables student details and course details

$icquery = "INSERT INTO `student details`.`course` (`course_code`, `course_name`, `usn`, `credits`, `department`, `semester`) VALUES ('".$course_code."','".$course_name."','".$usn."','".$credits."','".$dept."','".$sem."')";
$insert = mysql_query($icquery);
}


//print tables of sql
$result1 = mysql_query("select * from details");
$result2 = mysql_query("select * from course");

echo "<table border='4'>
<tr>
<th>Name</th>
<th>USN</th>
<th>SEMESTER</th>
<th>DEPARTMENT</th>
<th>JOINING_YEAR</th>

</tr>";
while($row = mysql_fetch_array($result1))
  {
  echo "<tr>";
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['USN'] . "</td>";
  echo "<td>" . $row['SEMESTER'] . "</td>";
  echo "<td>" . $row['DEPARTMENT'] . "</td>";
  echo "<td>" . $row['JOINING_YEAR'] . "</td>";
  echo "</tr>";
  }
echo "</table></br></br>";

echo "<table border='4'>
<tr>
<th>Course_code</th>
<th>Course_name</th>
<th>usn</th>
<th>credits</th>
<th>department</th>
<th>semester</th>
</tr>";
while($row = mysql_fetch_array($result2))
  {
  echo "<tr>";
  echo "<td>" . $row['course_code'] . "</td>";
  echo "<td>" . $row['course_name'] . "</td>";
  echo "<td>" . $row['usn'] . "</td>";
  echo "<td>" . $row['credits'] . "</td>";
  echo "<td>" . $row['department'] . "</td>";
  echo "<td>" . $row['semester'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);






if($con)
echo "</br></br></br>SQL connected";

    ?>
