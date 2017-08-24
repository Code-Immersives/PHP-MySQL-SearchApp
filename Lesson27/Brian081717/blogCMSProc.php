<!DOCTYPE html>

<html>

<head>
    <title>Blog CMS Proc</title>
    <link href="../../css/brian-styles0817.css" rel="stylesheet" type="text/css">
    <?php
        require_once("../../conn/connApts.php");
        // get the vars coming in from the Blog CMS form
        $IDmbr = $_POST['IDmbr']; // Author from Select Menu
        $blogTitle = $_POST['blogTitle'];
        $blogEntry = $_POST['blogEntry'];
        $blogTitle = mysqli_real_escape_string($conn, $blogTitle);
        $blogEntry = mysqli_real_escape_string($conn, $blogEntry);

        // SQL INSERT statement writes a new record to "blogs"
        $query = "INSERT INTO blogs(IDmbr, blogEntry, blogTitle) VALUES('$IDmbr', '$blogEntry', '$blogTitle')";
    
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
                            echo '<h3 align="center">Congratulations
                            <br>New Blog Saved Successfully!
                            <br><a href="blog.php">Go to Blog Now</a>
                            </h3>'; 
                        } else { 
                            echo '<h3 align="center">Sorry, 
                            Couldn\'t Save the Blog!</h3>'; 
                        }
                    ?>
                </td>
            </tr>
        
        </table>
    
</body>
    
</html>