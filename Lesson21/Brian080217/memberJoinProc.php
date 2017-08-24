<!DOCTYPE html>

<html>

<head>
    <title>Member Join Proc</title>
    <link href="../../css/brian-styles0817.css" rel="stylesheet" type="text/css">
    <?php
        // get the vars coming in from the Member Join form
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $user = $_POST['user'];
        $pswd = $_POST['pswd'];
    
        // connect to MySQL and our Database
        $conn = mysqli_connect("localhost", "root", "mysql");
        mysqli_select_db($conn, "loftyhts");
    
        // SQL INSERT statement writes a new record to "members"
        $query = "INSERT INTO members(firstName, lastName, email, user, pswd) VALUES('$firstName', '$lastName', '$email', '$user', '$pswd')";
    
        // carry out the actual order: write the new record
        mysqli_query($conn, $query);
    
    ?>
</head>

<body>
        <table width="350px" border="1px" cellpadding="5px" align="center">
        
            <tr>
                <td colspan="2">
                    <?php  
                        // provide feedback to user based on Success/Failure
                        if(mysqli_affected_rows($conn)==1) {
                            echo '<h3 align="center">Hey, ' . $firstName . ' ' . $lastName . '!<br>
                            Thanks for joining Lofty Heights!</h3>'; 
                        } else { 
                            echo '<h3 align="center">Sorry, ' . $firstName . ' ' . $lastName . '!<br>
                            Couldn\'t Sign You Up!</h3>'; 
                        }
                    ?>
                </td>
            </tr>
        
        </table>
    
</body>
    
</html>