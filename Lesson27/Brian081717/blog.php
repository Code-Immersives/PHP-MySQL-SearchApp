<!DOCTYPE html>

<html>

<head>
    <title>Blog</title>
    <link href="../../css/brian-styles0817.css" rel="stylesheet" type="text/css">
    
    <?php
        require_once("../../conn/connApts.php");
        $query = "SELECT * FROM blogs ORDER BY IDblog DESC LIMIT 1";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
    ?>
    
</head>

<body>
    
        <table width="500px" border="1px" cellpadding="5px" align="center">
        
            <tr>
                <td>
                    <h1 align="center">Newest Blog</h1>
                    <h2 align="center">
                        <?php echo $row['blogTitle']; ?>
                    </h2>
                </td>
            </tr>
            
            <tr>
                <td>
                    <p align="left">
                        <?php echo $row['blogEntry']; ?>
                    </p>
                </td>
            </tr>
        
        </table>

</body>
    
</html>