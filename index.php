<html>
    <head>
        <title>E - Voting system - HOME</title>
        <link rel="stylesheet" href="css/stylesheet.css">
    </head>
    <body style="color : #05386B ;">
        
            <center>
            <div id="headerSection">
            <h1>E - Voting System</h1>  
            </div>
            <hr>

            <div id="loginSection">
                <h2>LOGIN</h2>
                <form action="api/login.php" method="POST">
                    <input type="number" name="mob" placeholder="Enter mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Enter password" required><br><br>
                    <select name="role" style="width: 15%; border: 2px solid black">
                        <option value="1">Voter</option>
                        <option value="2">Candidate</option>
                    </select><br><br>                  
                    <button id="loginbtn" type="submit" name="loginbtn">Login</button><br><br>
                    New user? <a href="routes/register.php">Register here</a>
                </form>
            </div>
            <br><br><br>
            <h3 style="color : #05386B;">Made by : Anurag Dhyani</h3>
            </center> 
    </body>
</html>