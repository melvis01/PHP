<html>
	<head>
		<title></title>
	</head>
	<body>
      <p>
        <?php
        function aboutMe($name, $age) 
        {
                
         echo "Hello! My name is $name,
         and I am $age years old.";
         
        }
        
        $name = "Melvis";
        $age = "3";
        aboutMe($name, $age);
        ?>
      </p>
    </body>
</html>