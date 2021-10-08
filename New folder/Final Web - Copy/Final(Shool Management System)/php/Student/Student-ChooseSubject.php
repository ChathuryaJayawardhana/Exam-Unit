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

 <ul class="nav-bar">
         <header>
        <div class="logo">
                <li><img src="../../resource/logo.svg" alt="Logo"></li>
                <li><h1>LIFE LINE</h1></li>
            </ul>
        </div>
        <div class="nav-bar" style="margin-left: 60%; margin-top: -2.5%;">
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

      
    <!-- Menu end -->
    

    <div class="page-wrapper">

        <div class="heading">
            <h1> Subjects </h1>
            
        </div>
       
        <div style="font-size: 14px">
        <a href="../../php/Student/Student-Subject.php">
        <div class="s1 sub " >
            <h1 style="font-size: 30px"> Sinhala </h1>
        </div>
        </a>

         <a href="../../php/Student/student-english.php">
         <div class="s2 sub " >
            <h1  style="font-size: 30px"> English </h1>
        </div>
         </a>

        <a href="../../php/Student/student-science.php">
        <div class="s3 sub " >
            <h1 style="font-size: 30px"> Science </h1>
        </div>
         </a>

         <a href="../../php/Student/student-mathematics.php">
         <div class="s4 sub " >
            <h1> Mathematics </h1>
        </div>
        </a>

        <a href="../../php/Student/student-history.php">
         <div class="s5 sub " >
            <h1>History</h1>
        </div>
        </a>

        <a href="../../php/Student/student-buddhism.php">
         <div class="s6 sub" >
            <h1> Buddhism </h1>
        </div>
        </a>

        <a href="../../php/Student/student-tamil.php">
         <div class="s7 sub" >
            <h1> Tamil</h1>
        </div>
        </a>

        <a href="../../php/Student/student-Health.php">
         <div class="s8 sub" >
            <h1> Health </h1>
        </div>
    </a>

         <div class="s9 sub" >
            <h1> Esthetic </h1>
        </div>
        </div>

        <div class="table">

            <table border="2">
                <tr>
                    <th colspan="2" style="font-size: 20px">  Active Members  </th>
                </tr>
               <tr>
                    <td style="font-size: 15px" >Amali Perera</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td style="font-size: 15px">Sadun Jayaweera</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td style="font-size: 15px">Sachintha Madawa</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td style="font-size: 15px">Sanju Nilukshan</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td style="font-size: 15px">Ashani Dilanka</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td style="font-size: 15px">Amanda Rathnayaka</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td style="font-size: 15px">Shashika Anjana</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td style="font-size: 15px">Vijindu Bandara</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td style="font-size: 15px">Thilini Madushika</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td style="font-size: 15px">Isuru Perera</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td style="font-size: 15px">Chamali Rathnayaka</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td style="font-size: 15px">Sanduni Upeksha</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td style="font-size: 15px">Rusiru Marawila</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td style="font-size: 15px">Adeesha Cooray</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td style="font-size: 15px">Ishan De Silva</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td style="font-size: 15px">Piyawi Jayawardhana</td>
                    <td>👩</td>
                </tr>
                <tr>
                    <td style="font-size: 15px">Ashini Cooray</td>
                    <td>👩</td>
                </tr>
                            </table>




    </div><!--div class="page-wrapper"-->


    <script src="../../js/Student/StudentMenu.js"></script>
</body>
</html>