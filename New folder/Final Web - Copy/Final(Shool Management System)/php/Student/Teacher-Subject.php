<?php
$hostname = "localhost"; 
$username = "root"; 
$password = "";
$db = "test"; 
$port_number = "3306";
 
$con= mysqli_connect($hostname,$username,$password,$db,$port_number);

if(mysqli_connect_errno())
{
    die("connection unsuccessfull".mysqli_connect_error());
}
else{
    echo"connection successfull";
}

?>

<?php

 $name= $_FILES['file']['name'];
 $tmp_name= $_FILES['file']['tmp_name'];



    $position= strpos($name, ".");

    $fileextension= substr($name, $position + 1);

    $fileextension= strtolower($fileextension);



$startTime = $endTime = $examId =$success = "";

if(isset($_POST["addExam"]))
{
    //generate unique exam id

    $four_digit_rand = "EX".mt_rand(10000, 99999);


    while(1){    

        $sql = "SELECT * FROM exam WHERE examId like '%$four_digit_rand%'";
        $query_result = $conn->query($sql);

        if ($query_result->num_rows == 0) {
            $examId = $four_digit_rand;
            break;

        } else{
            $four_digit_rand = "EX".mt_rand(1000, 9999);

        }


    }
}    

    
    if (isset($name)) {

        $path= 'uploads/papers/';
        if (empty($name))
        {
            echo "Please choose a file";
        }
        else if (!empty($name)){
            if (($fileextension !== "pdf") && ($fileextension !== "docx") && ($fileextension !== "doc"))
            {
                echo "The file extension must be .pdf or .docx in order to be uploaded";
            }


            else if (($fileextension == "pdf") || ($fileextension == "docx") || ($fileextension == "doc"))
            {
                if (move_uploaded_file($tmp_name, $path.$name)) {
                    //add data to database
                    if(  $exam_name && $exam_startdate && $exam_enddate ){

                        $sql = "INSERT INTO exam values('$exam_name','$exam_startdate','$exam_enddate')";

                    }
                    if ($conn->query($sql) === TRUE) {


                        $success ='<div>
<h4>New Exam Added Successfully!<i class="icon fa fa-check"></i></h4>
</div>';

                    } 
                }
            }
        }
    }











?>








<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="../../css/Student/StudentMenu.css" type="text/css">
    <link rel="stylesheet" href="../../css/navigationBarStyle.css" type="text/css">
    <link rel="stylesheet" href="../../css/Student/StudentDashboardStyle.css" type="text/css">
    <title>English</title>
</head>

<body>
     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
                
               
                <br>
                <label for="exam_name"> Exam Name </label>
                <br>
                <textarea name="exam_name" cols="100" rows="2"></textarea>
                <br>
                Exam Paper : <input type="file" name="file">
                <br>
                <label for="exam_startdate">Start Date &nbsp; </label>

                <input type="datetime-local" name="startTime" required >
                <br><br>
                <label for="exam_enddate">End Time &nbsp;</label>
                <input type="datetime-local" name="endTime" required >
                <br>
                <br>
               
                <input type="submit" name="addExam" value="Create Exam"> 




            </form>
	<header>
        <div class="logo">
            <ul class="nav-bar">
                <li><img src="../../resource/logo.svg" alt="Logo"></li>
                <li><h1>LIFE LINE</h1></li>
            </ul>
        </div>
        <div class="nav-bar">
            <nav>
                <ul class="nav-panel">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Library</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul><!--ul class="nav-panel"-->
            </nav><!--nav-->
        </div><!--div class="nav-bar"-->
    </header>

    <!-- Menu Start -->

    <nav class="side-menu">
        <ul>
            <li class="logo">
                <a href=""><img src="../../resource/logo.svg" alt="" id="logo" class="logo-top">LIFE LINE</a>
                <i><a href=""><img src="../../resource/Arrow.png" alt="" class="menu-toggle"></a></i>
            </li>
            
            <div class="menu-items">

                <li class="dashboard">
                    <a href="../Student/StudentMain.html" class="item list btn">
                        <i><img src="../../resource/dashBoard.png" alt=""></i>
                        <span>Dashboard</span>
                    </a>
                </li><!--li class="dashboard"-->
    
                <li class="Exam-Result">
                    <a href="../php/Student.html" class="item list">
                        <i><img src="../../resource/ExamAndResult.png" alt=""></i>
                        <span>Exam and Results</span>
                    </a>
                </li><!--li class="Exam-Result"-->
    
                <li class="News-Event">
                    <a href="" class="item list">
                        <i><img src="../../resource/Events.png" alt=""></i>
                        <span>News And Events</span>
                    </a>
                </li><!--li class="News-Event"-->
    
                <li class="Subjects">
                    <a href="" class="item list">
                        <i><img src="../../resource/Subject.png" alt=""></i>
                        <span>Subjects</span>
                    </a>
                </li><!--li class="Subjects"-->

            </div><!--div class="menu-items"-->

        </ul>
    </nav>
<!--
     <div class="page-wrapper">

        <div class="heading">
            <h1> English </h1>
            
        </div>
       
       <a href="../../php/Student/Teacher-ChooseEnglishExamAnswer.php">
        <div class="a1 " >
            <h1> Exams And Answer Sheets</h1>
        </div>
       </a> 

       <a href="../../php/Student/Teacher-UploadResultSheet.php">
        <div class="a2 " >
            <h1> Results </h1>
        </div>
    </a>

        
    </div>    

    <div class="wrapper" style="width: 400px; height: 450px">
    	<div class="title"> Notes </div>
    	<div class="file_upload_list">
    		<ul>
    			<li>
    				<div class="file_item">
    					<div class="format"> 
    						<p>01</p>
    					</div>
    					<div class="file_progress">
    						<div class="file_info">
    							<div class="file_name">
    								Lesson 01
    							</div>
    							<div class="file_size_wrap"> 
    								<div class="file_size">6KB</div>
    								<div class="file_close">X</div>
    							</div>
    						</div>
    						<div class="progress">
    							<div class="inner_progress" style="width: 73% ;">
    								
    							</div>
    						</div>
    					</div>

    				</div>
    			</li>
    			<li>
    				<div class="file_item">
    					<div class="format"> 
    						<p>02</p>
    					</div>
    					<div class="file_progress">
    						<div class="file_info">
    							<div class="file_name">
    								Lesson 02
    							</div>
    							<div class="file_size_wrap"> 
    								<div class="file_size">3.3KB</div>
    								<div class="file_close">X</div>
    							</div>
    						</div>
    						<div class="progress">
    							<div class="inner_progress" style="width: 73% ;">
    								
    							</div>
    						</div>
    					</div>

    				</div>
    			</li>
    			<li>
    				<div class="file_item">
    					<div class="format"> 
    						<p>03</p>
    					</div>
    					<div class="file_progress">
    						<div class="file_info">
    							<div class="file_name">
    								Lesson 03
    							</div>
    							<div class="file_size_wrap"> 
    								<div class="file_size">6.3KB</div>
    								<div class="file_close">X</div>
    							</div>
    						</div>
    						<div class="progress">
    							<div class="inner_progress" style="width: 73% ;">
    								
    							</div>
    						</div>
    					</div>

    				</div>
    			</li>
    			<li>
    				<div class="file_item">
    					<div class="format"> 
    						<p>04</p>
    					</div>
    					<div class="file_progress">
    						<div class="file_info">
    							<div class="file_name">
    								Lesson 04
    							</div>
    							<div class="file_size_wrap"> 
    								<div class="file_size">5KB</div>
    								<div class="file_close">X</div>
    							</div>
    						</div>
    						<div class="progress">
    							<div class="inner_progress" style="width: 73% ;">
    								
    							</div>
    						</div>
    					</div>

    				</div>
    			</li>
    			<li>
    				<div class="file_item">
    					<div class="format"> 
    						<p>05</p>
    					</div>
    					<div class="file_progress">
    						<div class="file_info">
    							<div class="file_name">
    								Lesson 05
    							</div>
    							<div class="file_size_wrap"> 
    								<div class="file_size">6.3KB</div>
    								<div class="file_close">X</div>
    							</div>
    						</div>
    						<div class="progress">
    							<div class="inner_progress" style="width: 73% ;">
    								
    							</div>
    						</div>
    					</div>

    				</div>
    			</li>
    			<li>
    				<div class="file_item">
    					<div class="format"> 
    						<p>06</p>
    					</div>
    					<div class="file_progress">
    						<div class="file_info">
    							<div class="file_name">
    								Lesson 06
    							</div>
    							<div class="file_size_wrap"> 
    								<div class="file_size">4.3KB</div>
    								<div class="file_close">X</div>
    							</div>
    						</div>
    						<div class="progress">
    							<div class="inner_progress" style="width: 73% ;">
    								
    							</div>
    						</div>
    					</div>

    				</div>
    			</li>
    			<li>
    				<div class="choose_file">
    		<label for="choose_file">
    			<input type="file"  id="choose_file">
    			<span> Choose Files</span>
    		</label>
    	</div>
    			</li>
    		</ul>
    	</div>



     
        
        
    </div>


    <div class="wrappers" style="width: 400px; height: 450px">
    	<div class="title"> Exam Papers </div>
    	<div class="file_upload_list">
    		<ul>
    			<li>
    				<div class="file_item">
    					<div class="format"> 
    						<p>01</p>
    					</div>
    					<div class="file_progress">
    						<div class="file_info">
    							<div class="file_name">
    								1st Term Test
    							</div>
    							<div class="file_size_wrap"> 
    								<div class="file_size">5KB</div>
    								<div class="file_close">X</div>
    							</div>
    						</div>
    						<div class="progress">
    							<div class="inner_progress" style="width: 73% ;">
    								
    							</div>
    						</div>
    					</div>

    				</div>
    			</li>
    			<li>
    				<div class="file_item">
    					<div class="format"> 
    						<p>02</p>
    					</div>
    					<div class="file_progress">
    						<div class="file_info">
    							<div class="file_name">
    								Assignment Paper 01
    							</div>
    							<div class="file_size_wrap"> 
    								<div class="file_size">4.2KB</div>
    								<div class="file_close">X</div>
    							</div>
    						</div>
    						<div class="progress">
    							<div class="inner_progress" style="width: 73% ;">
    								
    							</div>
    						</div>
    					</div>

    				</div>
    			</li>
    			<li>
    				<div class="file_item">
    					<div class="format"> 
    						<p>03</p>
    					</div>
    					<div class="file_progress">
    						<div class="file_info">
    							<div class="file_name">
    								Assignment Paper 02
    							</div>
    							<div class="file_size_wrap"> 
    								<div class="file_size">6KB</div>
    								<div class="file_close">X</div>
    							</div>
    						</div>
    						<div class="progress">
    							<div class="inner_progress" style="width: 73% ;">
    								
    							</div>
    						</div>
    					</div>

    				</div>
    			</li>
    			<li>
    				<div class="file_item">
    					<div class="format"> 
    						<p>04</p>
    					</div>
    					<div class="file_progress">
    						<div class="file_info">
    							<div class="file_name">
    								2nd Term Test
    							</div>
    							<div class="file_size_wrap"> 
    								<div class="file_size">4.5KB</div>
    								<div class="file_close">X</div>
    							</div>
    						</div>
    						<div class="progress">
    							<div class="inner_progress" style="width: 73% ;">
    								
    							</div>
    						</div>
    					</div>

    				</div>
    			</li>
    			<li>
    				<div class="file_item">
    					<div class="format"> 
    						<p>05</p>
    					</div>
    					<div class="file_progress">
    						<div class="file_info">
    							<div class="file_name">
    								Assignment Paper 03
    							</div>
    							<div class="file_size_wrap"> 
    								<div class="file_size">6.5KB</div>
    								<div class="file_close">X</div>
    							</div>
    						</div>
    						<div class="progress">
    							<div class="inner_progress" style="width: 73% ;">
    								
    							</div>
    						</div>
    					</div>

    				</div>
    			</li>
    			<li>
    				<div class="file_item">
    					<div class="format"> 
    						<p>06</p>
    					</div>
    					<div class="file_progress">
    						<div class="file_info">
    							<div class="file_name">
    								Assignment Paper 04
    							</div>
    							<div class="file_size_wrap"> 
    								<div class="file_size">3.3KB</div>
    								<div class="file_close">X</div>
    							</div>
    						</div>
    						<div class="progress">
    							<div class="inner_progress" style="width: 73% ;">
    								
    							</div>
    						</div>
    					</div>

    				</div>
    			</li>
    			<li>
    				<div class="choose_file">
    		<label for="choose_file">
    			<input type="file"  id="choose_file">
    			<span> Choose Files</span>
    		</label>
    	</div>
    			</li>
    		</ul>
    	</div>



     
        
        
    </div>






 






    </div>



-->






    <script src="../../js/Student/StudentMenu.js"></script>

</body>
</html>