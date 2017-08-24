<!DOCTYPE html>

<html>

<head>
    <title>Contact Proc</title>
    <link href="../../css/brian-styles0817.css" rel="stylesheet" type="text/css">
    
    <?php
        // get the vars coming in from the Contact Us form at contactForm.php
        // to simplify the code, pass off the incoming POST vars to "regular" variables
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $faveColor = $_POST['faveColor'];
        $comments = $_POST['comments'];
        $commentCat = $_POST['commentCat']; // drop down menu (select obj)
        
        // "Check" to see if the checkbox is checked or unchecked
        // the isset() method takes 1 var as its param and returns TRUE or FALSE
        if(isset($_POST['subscribe'])) {
            $subscribe =  "YES"; // "Subscribe Me" checkbox is CHECKED
        } else {
            $subscribe =  "NO"; // "Subscribe Me" checkbox is UNCHECKED
        }
    
        // concatenate an email messgae to send to admin
        $msg = "Message from Contact Form\n";
        $msg .= "First Name: " . $firstName . "\n";
        $msg .= "Last Name: " . $lastName . "\n";
        $msg .= "Email: " . $email . "\n";
        $msg .= "Favorite Color: " . $faveColor . "\n";
        $msg .= "Subscribe to Newsletter? " . $subscribe . "\n";
        $msg .= "Comment Category: " . $commentCat . "\n\n";
        $msg .= "Comment:\n" . $comments . "\n";
    
        // more vars for the mail() method params
        $to = "brian.mcclain@codeimmersives.com";
        $subject = "Message from Contact Form with " . $commentCat . " Comment";
        $mailheaders = "From: " . $email . "\n";
        $mailheaders .= "Reply-to: " . $email . "\n";
        // send the email !!
        mail($to, $subject, $msg, $mailheaders);
        // redirect page instantly
        // header("Location: nameForm.php");
        // redirect after a delay of 5 seconds
        header("Refresh:5; url=nameForm.php", true, 303);
    ?> 
    
    <style>
    
        body {
            background-color: <?php echo $faveColor; ?>;
        }
    
    </style>
    
</head>

<body>
    
        <table width="350px" border="1px" cellpadding="5px" align="center">
        
            <tr>
                <td colspan="2">
  
                        <?php 
                            echo '<h3 align="center">Hey, ' . $firstName . ' ' . $lastName . '!<br>
                            Check your inbox at ' . $email . '<br>for your FREE Gift Coupon!<br><br>Your ' . $commentCat . '<br>Comment:<br>' . $comments . '</h3>'; 
                        ?>

                </td>
            </tr>
        
        </table>
    
</body>
    
</html>