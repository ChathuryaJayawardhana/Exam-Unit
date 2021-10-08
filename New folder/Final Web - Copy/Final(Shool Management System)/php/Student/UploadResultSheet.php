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
                if(isset($_POST['assUpload'])){
                    $fileName = $_FILES['ass']['name'];
                    $fileTmpName = $_FILES['ass']['tmp_name'];
                    $path = "uploads/".$fileName;
                        
                    $query = "INSERT INTO 'result'('result_code', 'exam_id','resultsheet') VALUES ('{$result_code}','{$exam_id}','{$resultsheet}')";
                    $run = mysqli_query($connection,$query);
                        
                    if($run){
                        move_uploaded_file($fileTmpName,$path);
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

     <div class="page-wrapper">

        <div class="heading">
            <h1> English Result Sheets </h1>
            
        </div>
       

      
        
    </div>    

    <div class="fileUpload">
                <div class="headerTopic">
                    <h1>Resultsheet Upload</h1>
            
                </div><!--div class="headerTopic"-->
                <div class="upload-section">
                    <form action="StudentSubInside.php?subId=<?php echo $_GET['subId'] ?>" method="post" class="upload-form" enctype="multipart/form-data">
                        <input type="file" name="ass" id="upload">
                        <label for="upload">
                            <img src="" alt="">
                            <p>
                                <strong>Drag and Drop</strong> file here <br>or
                                <span>Browse</span> to begin the upload
                            </p>
                        </label><!--label for="upload"-->
                        <button class="btnUpload" name="assUpload">Upload</button>
                    </form>
                </div><!--div class="upload-section"-->
            </div><!--div class="fileUpload"-->








    <div class="wrapper6AA">
    	<div class="title"> Answer Sheets </div>
        <div class="title"> 6-A </div>
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
    								Assignment 01
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
    								Assignment 02
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
    								2nd Term Test
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
    								Assignment 03
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
    								Assignment 04
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
                    <div class="file_item">
                        <div class="format"> 
                            <p>07</p>
                        </div>
                        <div class="file_progress">
                            <div class="file_info">
                                <div class="file_name">
                                    3rd Term Test
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


    <div class="wrapper6BB">
    	<div class="title"> Exam Papers </div>
        <div class="title"> 6-B </div>
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
                    <div class="file_item">
                        <div class="format"> 
                            <p>07</p>
                        </div>
                        <div class="file_progress">
                            <div class="file_info">
                                <div class="file_name">
                                    3rd Term Test
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



            <div class="wrapper6CC">
        <div class="title"> Exam Papers </div>
        <div class="title"> 6-C </div>
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
                    <div class="file_item">
                        <div class="format"> 
                            <p>07</p>
                        </div>
                        <div class="file_progress">
                            <div class="file_info">
                                <div class="file_name">
                                    3rd Term Test
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






 






    </div>











    <script src="../../js/Student/StudentMenu.js"></script>

</body>
</html>