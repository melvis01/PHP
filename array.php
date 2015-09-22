<html>
  <head>
    <title>I am the King of Arrays!</title>
  </head>
  <body>
    <p>
      <?php
      // On the line below, create your own associative array:
      $myArray = array('java', 'php', 'css');
      
      
         echo '</br >';


      // On the line below, output one of the values to the   
      page:
       echo $myArray[1];
          
      // On the line below, loop through the array and output
      // *all* of the values to the page:
      foreach($myArray as $feature=> $colour)
      
      {
          
          echo $feature.''.$colour. "<br />";
      }
      
      
      
       
     
      ?>
    </p>
  </body>
</html>