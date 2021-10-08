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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/Student/StudentMenu.css" type="text/css">
    <link rel="stylesheet" href="../../css/navigationBarStyle.css" type="text/css">
    <link rel="stylesheet" href="../../css/Student/StudentDashboardStyle.css" type="text/css">
    <title>Document</title>
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


    <div class="heading">
            <h1> English </h1>
            
        </div>

     <div class="imgg">
         <img src="C:\Users\ASUS VIVO\Desktop\Final Web\Final(Shool Management System)\resource\imagin.png">
     </div>   

     <div class="OneWrapper">
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
                                    Assignmnet Paper 01
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
                                    Assignment Paper 02
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
                                    2nd Term Test
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
                                    Assignment Paper 03
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
                                    Assignment Paper 04
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
            </ul>
        </div>
        
    </div>







    <!-- Menu end -->
  

    <script src="../../js/Student/StudentMenu.js"></script>
    
</body>
</html>