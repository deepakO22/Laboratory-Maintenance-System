<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>main page of lms</title>
  </head>
  <style>
    *{
      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
      font-family: Helvetica;
    }
    header{
      width: 100%;
      height: 75px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 30px 10%;
      background-image: linear-gradient(#24252A,black);
    }
    .logo{
      text-align: left;
      font-size: 35px;
      font-weight: bold;
      color: white;
      text-transform: uppercase;
      letter-spacing: 1.5px;
      cursor: pointer;
    }
    nav li{
      display: inline-block;
      list-style: none;
      padding: 0px 20px;
    }
    a,button{
      font-size: 20px;
      font-weight: 500;
      color: white;
      cursor: pointer;
      text-decoration: none;
    }
    button{
      background-color: #0088a9;
      padding: 9px 25px;
      border: none;
      border-radius: 10px;
      transition: all 0.2s ease 0s;
    }
    nav li a:hover{
      color: #0088a9;
        transition: all 0.2s ease 0s;
    }
    button:hover{
      background-color: #0088a9cc;
      text-align: right;
    }
    .home img{
      float: right;
      width: 50%;
      height: 60vh;
      border-radius: 6px;
    }
    * {
    box-sizing: border-box;
  }

  .column {
    float: left;
    width: 33.33%;
    padding: 25px;
  }
  .row::after {
    content: "";
    clear: both;
    display: table;
  }
  </style>
  </style>
  <body>
    <header>
      <div class="logo">
        <p>Lab Maintenance System</p>
      </div>
      <nav>
        <ul>
          <li><a href="mainpage.php">Home</a></li>
          <li><a href="labs.php">All Labs</a></li>
          <li><a href="csetimetable.php">Time Table</a></li>
            <li><a href="logindetails.php">User Details</a></li>
        </ul>
      </nav>
      <button><p><a href="homepage.php?logout='1'" style="color:white align:left;">Logout</a></p></button>
    </header>
    <div class="home"><br><br>
      <center><h1 style="color:deepskyblue">------------------------------------DISCLAIMER------------------------------------------</center></h1><br>
      <p><b>"Laboratories are equipped with high hardware configuration, latest networking Cisco devices, Structured LAN cabling with CAT-6, high speed internet bandwidth, Wi-Fi facility through Cisco Access Points, ICT facilities, power backup to all the computer labs has been provided through on-line UPS and sophisticated lab facilitates for students.  The Computer Labs consists of Licensed Software under Microsoft campus agreement. All computer labs are established in Client Server Architecture.</b></p>
      <p><b>
        The security of the data is provided through authenticated users in Laboratory Management System Project in Java, one can view and update the data upto   their access permissions only. The information regarding to tasks is provided through syntaxes and sample programs about that lab.
      </b></p><img src="images/login.jpg" alt="lab"><br><br>
      <h2>Main Objectives of LMS:</h2><br>
      <p style="font-family : "Lucida Console", "Courier New", monospace;">Faculty is able to post and update marks of students. All the users of automation of lab tasks can give and view the feedback and faculty is able to provide notices related to tasks, like date of task submission, dates of lab examinations. The students are provided permissions to view the notices only. Once the student logged into the lab automatically his/her attendance marks will be posted.

        Administrator maintains database and solves if any technical problems occurred by using technologies like servlets, jsps using tomcat server and can retrieve the data from database using oracle 10g,mysql,mysqli.</p>
      <br>
        <p><h3>Laboratory Management System Purpose And Scope:</h3></p><br>
        <li>Purpose:Providing security to all records or labs </li>
        <li>Scope:</li>
        <p>1) providing access to only authenticated users .<br>
        2) Know updated notices,<br>

        3) View marks posted. <br>

       4)  View all data related to lab tasks.</p><br>
       <h3>Users of the system:</h3>
       <li>Student</li>
       <li>Faculty</li>
       <li>Administrator</li><br><br>
       <div class="row">
     <div class="column">
       <img src="images/student.jpeg" alt="student" style="width:100%">
     </div>
     <div class="column">
       <img src="images/faculty.jpeg" alt="faculty" style="width:100%">
     </div>
     <div class="column">
       <img src="images/admin.jpeg" alt="admin" style="width:100%">
     </div>
   </div>
       <br>
       <br><br><br>
       <p><h2>Students:</h2>He is a main users to utilizes the services of our system.He/she is guided through sample programs and syntaxes by our system.Students are able to give their feedback and view latest </p><br>
       <p><h2>Faculty:</h2>Report generation is performed by faculty .He/she is able to maintain the database dynamically.He/she will give notices and latest updates regarding the labs.He/she gives guidance to students. <br><br><h2>Admin:</h2>He is to maintain the database and to  solve  any technical problems if occurs</p>
       <h4>Funtional Requirements:</h4><br>
       <p>1)Complete information regarding lab tasks should be provided.<br>

2)      Only Authenticated users can view and update the data.<br>

3)      Administrator maintains the database.<br>

4)       Notices and feedback should be provided by authenticated users.<br>

5)      Report generation should be performed dynamically.<br>

6)      Provide logins to the student, faculty, and administrator.<br>

7)      Students can view the data up to their access permissions only.</p>
    <br>
  </div>
  <div class="computer">
    <img src="images/computer.jpg" alt="Computer" width="100%">
  </div>
  </body>
</html>
