<!DOCTYPE html>

<html>

<head>
    <title>Blog CMS</title>
    <link href="../../css/brian-styles0817.css" rel="stylesheet" type="text/css">
    
    <?php
        require_once("../../conn/connApts.php");
        $query = "SELECT IDmbr, firstName, lastName, user 
                FROM members ORDER BY lastName";
        $result = mysqli_query($conn, $query);
    ?>
    
    <style>
    
        textarea {
            font-size: 1rem;
        }
    
    </style>
    
    <script>
    
        function validateAuthor() {
            var author = document.getElementById('IDmbr').value;
            if(author==-1) {
               alert("Please select an author form the menu!");
                return false;
            }
        }
    
    </script>
</head>

<body>
    
    <form name="form1" id="form1" method="post" action="blogCMSProc.php" 
          onsubmit="return validateAuthor()">
    
        <table width="500px" border="1px" cellpadding="5px" align="center">
        
            <tr>
                <td>
                    <h3 align="center">Blog CMS</h3>
                </td>
            </tr>
            
            <tr>
                <td>
                    Blog Author: &nbsp; 
                    <select name="IDmbr" id="IDmbr" 
                            style="font-size:1.25rem; background-color:orange; 
                                   color:white; width:300px; padding:5px">
                        <option value="-1">Choose Author</option>
                        <?php
                            while($row=mysqli_fetch_array($result)) {
                                echo '<option value="' . $row['IDmbr'] . '">' . $row['firstName'] . ' ' . $row['lastName'] 
                                . ' (' . $row['user'] . ')</option>';
                            }
                        ?>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td>
                    Blog Title:<br>
                    <textarea name="blogTitle" id="blogTitle" rows="2" cols="75" required></textarea>
                </td>
            </tr>
            
              <tr>
                <td>
                    Blog Entry:<br>
                    <textarea name="blogEntry" id="blogEntry" rows="15" cols="75" required></textarea>
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