<html>

<head>
 <link rel="stylesheet" href="st.css">
 <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body background="bg.jpg" style="color:white">




<a href="mainpage.php"><div id="header"></div></a>
<?php

$name = $_POST['name'];//Get name,usn,sem from mainpage forms
$usn = $_POST['usn'];
$sem = $_POST['sem'];


$year = '';
$dept = '';
$flag = '1';//check if it is a valid USN

//find year of join,dept by processing USN
$year = '2000'+$usn[3]*10+$usn[4];
if(($usn[5]=='c'||$usn[5]=='C')&&($usn[6]=='s'||$usn[6]=='S'))
$dept = 'CS';
elseif(($usn[5]=='e'||$usn[5]=='E')&&($usn[6]=='c'||$usn[6]=='C'))
$dept = 'EC';
else $flag=0;

if($flag!=0)
{
 switch($dept)
 {
  case 'CS':
    switch($sem)
	{
	 case 1:?>
	 
	 1Sem CS
	 
	 <?php break; //put forms for course selection above here
	 
	 
	 case 2:?>
	 
	 2sem CS
	 
	 <?php break; //put forms for course selection above here
	 
	 
	 case 3:?>
	 
	 <form action="page3.php" method="post">
<div class="slideone">
	 Select courses:</br>
	 Engineering mathematics-3    <input type="checkbox" name="course[]" id="course slideone" value="11MA3ICMAT"/></br>
	 Computer Organisation and architecture<input type="checkbox" name="course[]" id="course" value="09CI3GCCOA"/></br>
	 Data structures<input type="checkbox" name="course[]" id="course" value="09CI3GCDSL"/></br>
	 Logic Design<input type="checkbox" name="course[]" id="course" value="09CI3GCLDL"/></br>
	 Micro Processors<input type="checkbox" name="course[]" id="course" value="09CI3GCMPL"/></br>
     
     <input type="hidden" name="name" value="<?php echo $name; ?>">
	 <input type="hidden" name="usn" value="<?php echo $usn; ?>">
	 <input type="hidden" name="dept" value="<?php echo $dept; ?>">
	 <input type="hidden" name="sem" value="<?php echo $sem; ?>">
	 <input type="hidden" name="year" value="<?php echo $year; ?>">
	 
	 </br></br><input type="SUBMIT" class="submit btn btn-primary btn-lg" >
    </div> </form>
	 
	 <?php break;
	 
	 
	 case 4:?>
	 
	 <form action="page3.php" method="post">
	 Select courses:</br>
	 Engineering mathematics-4   <input type="checkbox" name="course[]" id="course" value="11MA4GCMAT"/></br>
	 Theoretical Foundations of Computations<input type="checkbox" name="course[]" id="course" value="09CI4GCTOF"/></br>
	 Unix Programming<input type="checkbox" name="course[]" id="course" value="09CI4GCUNX"/></br>
	 Object Oriented Programming with C++<input type="checkbox" name="course[]" id="course" value="09CI4GCOOP"/></br>
	 Analysis and Design of Algorithms<input type="checkbox" name="course[]" id="course" value="09CI4GCADA"/></br>
     
     <input type="hidden" name="name" value="<?php echo $name; ?>">
	 <input type="hidden" name="usn" value="<?php echo $usn; ?>">
	 <input type="hidden" name="dept" value="<?php echo $dept; ?>">
	 <input type="hidden" name="sem" value="<?php echo $sem; ?>">
	 <input type="hidden" name="year" value="<?php echo $year; ?>">
	 
	 </br></br><input type="SUBMIT" class="submit btn btn-primary btn-lg" >
	 </form>
	 
	 <?php break;
	 case 5:?>
	 
	 <form action="page3.php" method="post">
	 Select courses:</br>
	 Operating System  <input type="checkbox" name="course[]" id="course" value="10CI5GCOPS"/></br>
	 Data Communications<input type="checkbox" name="course[]" id="course" value="10CI5GCDCN"/></br>
	 Database Management Systems<input type="checkbox" name="course[]" id="course" value="10CI5GCDBM"/></br>
	 Java Programming<input type="checkbox" name="course[]" id="course" value="10CI5GCJAV"/></br>
	 System Software<input type="checkbox" name="course[]" id="course" value="10CI5GCSSW"/></br>
     
     <input type="hidden" name="name" value="<?php echo $name; ?>"><!--Pass variables data from page2 to page3-->
	 <input type="hidden" name="usn" value="<?php echo $usn; ?>">
	 <input type="hidden" name="dept" value="<?php echo $dept; ?>">
	 <input type="hidden" name="sem" value="<?php echo $sem; ?>">
	 <input type="hidden" name="year" value="<?php echo $year; ?>">
	 
	 </br></br><input type="SUBMIT" class="submit btn btn-primary btn-lg" >
	 </form>
	 
	 
	 <?php break;
	 case 6:?>
	 
	 <form action="page3.php" method="post">
	 Select courses:</br>
	 Software Engineering<input type="checkbox" name="course[]" id="course" value="10CI6GCSWE"/></br>
	 Object Oriented Modeling and design patterns<input type="checkbox" name="course[]" id="course" value="10CI6GCOOM"/></br>
	 Probability Statistics and Queuing<input type="checkbox" name="course[]" id="course" value="10CI6GCPSQ"/></br>
	 Computer Networks<input type="checkbox" name="course[]" id="course" value="10CI6GCCON"/></br>
	 Web Programming<input type="checkbox" name="course[]" id="course" value="10CI6GCWEP"/></br>
	 
	 Select electives:</br>
	 Cloud Computing<input type="radio" name="elective" value="10CI6GECCT"/></br>
	 Advanced Data Structures<input type="radio" name="elective" value="10CI6GEADS"/></br>
	 Parallel Computing Technique<input type="radio" name="elective" value="10CI6GEPCT"/></br>
	 Principles of Programming Languages<input type="radio" name="elective" value="10CI6GEPPL"/></br>
	 
	 <input type="hidden" name="name" value="<?php echo $name; ?>">
	 <input type="hidden" name="usn" value="<?php echo $usn; ?>">
	 <input type="hidden" name="dept" value="<?php echo $dept; ?>">
	 <input type="hidden" name="sem" value="<?php echo $sem; ?>">
	 <input type="hidden" name="year" value="<?php echo $year; ?>">
	 
	 </br></br><input type="SUBMIT" class="submit btn btn-primary btn-lg" >
	 </form>
	 
	 
	 <?php break;
	 case 7:?>7sem CS<?php break;
	 case 8:?>8sem CS<?php break;
	}break;
 
 }

}
else echo "invalid usn";

?>

</body>
</html>
