<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Document</title>
</head>
<header>
  <div class="header-text" >
    <h1>WELCOME TO UCC</h1>
  </div>
  <div class="logo">
    <img src="ucc.png" width="150px" alt="">
  </div>
</header>

<body>
    <section class="container">
      
        <div class="timeline">
          <ul>
            <li>
              <div class="timeline-content">
                <h3 class="date">AUGUST 2-6, 2021</h3>
                <p>Enrollment Period</p>
              </div>
            </li>
            <li>
              <div class="timeline-content">
                <h3 class="date">AUGUST 6-22, 2021</h3>
                <p>START CLASSES</p>
              </div>
            </li>
            <li>
              <div class="timeline-content">
                <h3 class="date">AUGUST 30-SEPTEMBER 5, 2021</h3>
                <p>ADDING / DROPPING / CHANGING SUBJECTS</p>
              </div>
            </li>
            <li>
              <div class="timeline-content">
                <h3 class="date">OCTOBER 11-17, 2021</h3>
                <p>MIDTERM EXAMINATION</p>
              </div>
            </li>
            <li>
              <div class="timeline-content">
                <h3 class="date">DECEMBER 20-JANUARY 2, 2022</h3>
                <p>CHRISTMAS BREAK</p>
              </div>
            </li>
            <li>
              <div class="timeline-content">
                <h3 class="date">JANUARY 3-9, 2022</h3>
                <p>FINAL EXAMINATION</p>
              </div>
            </li>
            <li>
              <div class="timeline-content">
                <h3 class="date">JANUARY 10-14, 2022</h3>
                <p>SUBMISSION OF GRADES</p>
              </div>
            </li>
            <li>
              <div class="timeline-content">
                <h3 class="date">FEBRUARY 1-4, 2022</h3>
                <p>2ND SEMESTER ENROLLMENT PERIOD</p>
              </div>
            </li>
          </ul>
        </div>
        
        <div class="login"> 
         
          <div class="form-box">
            <div class="button-box">
              <div id="btn"></div>
              <button type="button" class="toggle-btn" onclick="Student()">Student</button>
              <button type="button" class="toggle-btn" onclick="faculty()">Faculty</button>
            </div>
              <form action="login process.php" method="POST" id="Student" class="input-group">
                <input type="text" class="input-field" name="username" placeholder="Student Number" id="studno"  required>
                <input type="password" class="input-field" name="password" placeholder="Enter Password" id="password" required>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" class="submit-btn" name="login" id="btn-studlogin">Log In</button>
              </form>
          </div>
        </div>
      </section>  
      <script>
        var x = document.getElementById("Student");
        var y = document.getElementById("faculty");
        var z = document.getElementById("btn");
    
        function faculty(){
          x.style.left="-400px";
          y.style.left="50px";
          z.style.left="100px";
        }
        function Student(){
          x.style.left="50px";
          y.style.left="450px";
          z.style.left="0";
        }
        
      </script>
</body>
</html>