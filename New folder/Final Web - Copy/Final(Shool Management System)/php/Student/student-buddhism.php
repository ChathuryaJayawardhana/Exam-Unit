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
            <h1> Buddhism </h1>
            
        </div>
       
        <a href="file:///C:/Users/ASUS%20VIVO/Desktop/Final%20Web/Final(Shool%20Management%20System)/php/Student/Student-ExamAndAnswer.html">
        <div class="a1 " >
            <h1> Exam Papers & Answer Sheets</h1>
        </div>
    </a>

<a href="file:///C:/Users/ASUS%20VIVO/Desktop/Final%20Web/Final(Shool%20Management%20System)/php/Student/Student-ExamAndAnswer.html">
        <div class="a2 " >
            <h1> Result Sheets </h1>
        </div>
    </a>

        <div class="wrapperNote">
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
                                    <div class="file_downlaod"> <a href="C:\Users\ASUS VIVO\Desktop\Final Web\Final(Shool Management System)\resource\Subject.png" download="MY SUBJECT"> ⬇ </a> </div>
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
                                    <div class="file_close"> <a href="C:\Users\ASUS VIVO\Desktop\Final Web\Final(Shool Management System)\resource\Subject.png" download="MY SUBJECT"> ⬇ </a> </div>
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
                                    <div class="file_close"> <a href="C:\Users\ASUS VIVO\Desktop\Final Web\Final(Shool Management System)\resource\Subject.png" download="MY SUBJECT"> ⬇ </a> </div>
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
                                    <div class="file_close"> <a href="C:\Users\ASUS VIVO\Desktop\Final Web\Final(Shool Management System)\resource\Subject.png" download="MY SUBJECT"> ⬇ </a> </div>
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
                                    <div class="file_close"> <a href="C:\Users\ASUS VIVO\Desktop\Final Web\Final(Shool Management System)\resource\Subject.png" download="MY SUBJECT"> ⬇ </a> </div>
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
                                    <div class="file_close"> <a href="C:\Users\ASUS VIVO\Desktop\Final Web\Final(Shool Management System)\resource\Subject.png" download="MY SUBJECT"> ⬇ </a></div>
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
                                    Lesson 07
                                </div>
                                <div class="file_size_wrap"> 
                                    <div class="file_size">5KB</div>
                                    <div class="file_close"> <a href="C:\Users\ASUS VIVO\Desktop\Final Web\Final(Shool Management System)\resource\Subject.png" download="MY SUBJECT"> ⬇ </a></div>
                                </div>
                            </div>
                            <div class="progress">
                                <div class="inner_progress" style="width: 73% ;">
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </li>
                
            </ul>
        </div>
        
    </div>



    </div>  


    <div class="sinhala">
        <img src="C:\Users\ASUS VIVO\Desktop\Final Web\Final(Shool Management System)\resource\akuru.jpg">
    </div>  

 <!--   
 <div class="table1">
            <table border="2">
                <tr>
                    <th colspan="2">  Active Members  </th>
                </tr>
                <tr>
                    <td>Amali Perera</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td>Sadun Jayaweera</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td>Sachintha Madawa</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td>Sanju Nilukshan</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td>Ashani Dilanka</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td>Amanda Rathnayaka</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td>Shashika Anjana</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td>Vijindu Bandara</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td>Thilini Madushika</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td>Thilini Madushika</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td>Thilini Madushika</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td>Thilini Madushika</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td>Thilini Madushika</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td>Thilini Madushika</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td>Thilini Madushika</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td>Thilini Madushika</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td>Thilini Madushika</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td>Thilini Madushika</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td>Thilini Madushika</td>
                    <td>👩</td>
                </tr>
                

            </table>

        -->




    </div><!--div class="page-wrapper"-->


     
        
        
    






 






    











    <script src="../../js/Student/StudentMenu.js"></script>

</body>
</html>