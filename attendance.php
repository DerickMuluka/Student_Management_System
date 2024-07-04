<?php
session_start();
if(isset($_SESSION["current_user"]))
{}
else
{
    header("location:"."/attendanceapp/login.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/attendance.css">
    <title>Document</title>
</head>
<body>
    <div class="page">
        <div class="header-area">
            <div class="logo-area"><h2 class="logo">ATTENDANCE APP</h2></div>
            <div class="logout-area"><button class="btnlogout" id="btnLogout">LOGOUT</button></div>
        </div>
        <div class="session-area">
            <div class="label-area">
                <label>SESSION</label>
            </div>
                <div class="dropdown-area">
                    <select class="ddlclass">
                        <option>SELECT ONE</option>
                        <option>2024 AUTUMN</option>
                        <option>2024 SPRING</option>
                    </select>
                </div>
        </div>
        <div class="classlist-area">
            <div class="classcard">CS101</div>
            <div class="classcard">CS101</div>
            <div class="classcard">CS101</div>
            <div class="classcard">CS101</div>
            <div class="classcard">CS101</div>
            <div class="classcard">CS101</div>
            <div class="classcard">CS101</div>
        </div>
        <div class="classdetails-area">
            <div class="classdetails">
                <div class="code-area">CS101</div>
                <div class="title-area">INTRODUCTION TO SCIENTIFIC COMPUTING</div>
                <div class="ondate-area">
                    <input type="date">
                </div>
            </div>
        </div>
        <div class="studentlist-area">
            <div class="studentlist"><label>STUDENT LIST</label></div>
            <div class="studentdetails">
                <div class="slno-area">001</div>
                <div class="rollno-area">CSB21001</div>
                <div class="name-area">DERYK CHEED</div>
                <div class="checkbox-area">
                    <input type="checkbox">
                </div>
            </div>
            <div class="studentdetails">
                <div class="slno-area">001</div>
                <div class="rollno-area">CSB21001</div>
                <div class="name-area">DERYK CHEED</div>
                <div class="checkbox-area">
                    <input type="checkbox">
                </div>
            </div>
            <div class="studentdetails">
                <div class="slno-area">001</div>
                <div class="rollno-area">CSB21001</div>
                <div class="name-area">DERYK CHEED</div>
                <div class="checkbox-area">
                    <input type="checkbox">
                </div>
            </div>
            <div class="studentdetails">
                <div class="slno-area">001</div>
                <div class="rollno-area">CSB21001</div>
                <div class="name-area">DERYK CHEED</div>
                <div class="checkbox-area">
                    <input type="checkbox">
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/logout.js"></script>
</body>
</html>