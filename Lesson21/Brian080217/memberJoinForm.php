<!DOCTYPE html>

<html>

<head>
    <title>Member Join Form</title>
    <link href="../../css/brian-styles0817.css" rel="stylesheet" type="text/css">
</head>
    
    <script>
    
        function validatePswds() {
            // check to see if passwords match
            var pswd = document.getElementById("pswd").value;
            var pswd2 = document.getElementById("pswd2").value;
            // compare the two passwords entered by the user
            if(pswd != pswd2) {
                alert("Passwords Don't Match!");
                return false; // block the data from leaving page
            } // end if
        } // end function validatePswds()
    
    </script>

<body>
    
    <form name="form1" id="form1" method="post" action="memberJoinProc.php" onsubmit="return validatePswds()">
    
        <table width="350px" border="1px" cellpadding="5px" align="center">
        
            <tr>
                <td colspan="2">
                    <h3 align="center">Member Registration Form</h3>
                </td>
            </tr>
            
            <tr>
                <td>
                    <input type="text" name="firstName" required
                           id="firstName" placeholder="First Name">
                </td>
            </tr>
            
            <tr>
                <td>
                    <input type="text" name="lastName" required
                           id="lastName" placeholder="Last Name">
                </td>
            </tr>
            
            <tr>
                <td>
                    <input type="email" name="email" required
                           id="email" placeholder="example@example.com">
                </td>
            </tr>
            
            <tr>
                <td>
                    <input type="text" name="user" required
                           id="user" placeholder="Username">
                </td>
            </tr>
            
            <tr>
                <td>
                    <input type="password" name="pswd" required
                           id="pswd" placeholder="Password">
                </td>
            </tr>
            
            <tr>
                <td>
                    <input type="password" name="pswd2" required
                           id="pswd2" placeholder="Re-Enter Password">
                </td>
            </tr>
            
            <tr>
                <td>
                    <input type="submit" name="submit" id="submit" value="Submit">
                </td>
            </tr>
        
        </table>
    
    </form>
    
    
    
    

</body>
    
</html>