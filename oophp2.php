<!DOCTYPE html>
<html>
    <head>
	  <title> Challenge Time! </title>
	</head>
	<body>
      <p>
        <?php
          // Your code here
          class Lion {
            public $isAlive = true;
            public $numLegs = 4;
            public $name;
            public function __construct ($name){
       
                $this->name = $name;
              }
        
            public function Roar() {
                return "Roarrrrr";
            }
          }
         $lion1 = new Lion("Simba");
          
          // Call the method Roar
         echo $lion1->Roar();
        
        ?>
       
      </p>
    </body>
</html>