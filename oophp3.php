<html>
  <head>
    <title></title>
  </head>
  <body>
    <p>
      <?php
        //create a Person class
      class Person {
        //create a single mehod
        public static function say(){
        //echo you're thoughts
          echo "Here are my thoughts!";
         }
      }    
     //create a Blogger inheritance class 
      class Blogger extends person{
          const cats = 50;
       }
      
      
      echo Blogger::say();
      echo Blogger::cats;
          
      ?>
    </p>
  </body>
</html>