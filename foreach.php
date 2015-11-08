<html>
  <head>
    <title>ForEach Loop</title>
  </head>
  <body>
    <p>
      <?php
        $yardlines = array("The 50... ", "the 40... ",
        "the 30... ", "the 20... ", "the 10... ");
        foreach ($yardlines as $touchdown)
        {                          
        
        echo "$touchdown!";
        
        }
      ?>
    </p>
  </body>
</html>