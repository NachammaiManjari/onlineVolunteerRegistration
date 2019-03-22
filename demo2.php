<html>
<body>
    <h1>
    demo 2
        
    </h1>
<input type="submit" name="subbtn" value="submit" id="subbtn">

  <?php
    
session_start();
 
// Echo session variables that were set on first page
echo $_SESSION["a"];
echo $_SESSION["b"];
?>
    </body>
</html>