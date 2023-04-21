

<!DOCTYPE html>
<html>
  <head>
    <title>Signup/Login</title>
    <link rel="stylesheet" href="style.css">
    <style>

      .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin-top: -50px;
      }
      .form-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0px 0px 5px #ccc;
        width: 30%;
      }
      input[type="text"], input[type="password"], input[type="email"] {
        padding: 10px 0;
        margin: 10px 0;
        border-radius: 5px;
        border: 1px solid #ccc;
        width: 100%;
      }
      input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-left: 150px;
      }

   
      h2 {
        margin: 0;
        margin-bottom: 10px;
      }
      p {
        margin: 0;
        margin-top: 10px;
        font-size: 14px;
      }
    </style>
  </head>
  <body>

  <header>
    <h1>OLMS</h1>
    <nav>
      <ul class="link">
        <li ><a href="index.html" style="padding: 10px; border-radius:5px; font-weight: bold;">Home</a></li>
        <li ><a href="login.php" style="background: #eee; color:black; padding: 10px; border-radius:5px; font-weight: bold;">login</a></li>

      </ul>
    </nav>
  </header>
    <div class="container">

      <div class="form-container">
        <h2>STUDENT'S LOGIN</h2>
        <form action="selectlogin.php" onSubmit="valdate()" method="POST">
          <input type="text" placeholder="  Username" name="username">
          <input type="password" placeholder="  Password" name="password">
          <input type="submit" value="LogIn">
        </form>
      
<p>Don't have an account? <a href="signup.php">Sign up</a></p>    
<p>login as: <a href="teacherlogin.php">Teacher</a></p>
       
      </div>
    </div>

    <!-- <script>
        function valdate(){
            let UserName = document.getElementById('UserName').value;
            let PassWord = document.getElementById('PassWord').value;
            if(UserName === ''){
                alert('One of the Entered values is wrong')
                return false
            } else if(PassWord === ''){
                alert('One of the Entered values is wrong');
            } 
            return true;
        }
    </script> -->
  </body>
</html>
