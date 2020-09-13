<?php
    
    class User{

        // public: access outside class
        // public $email;
        // public $name;

        // public: access inside class
        private $email;
        private $name;


        public function __construct($name, $email) {
            $this->name = $name;
            $this->email = $email; 
        }

        public function login() {
            echo "$this->name iss logged in";
        }

        public function getName() {
            return $this->name;
        }

        public function setName($name){
            if(is_string($name) && strlen($name) > 1) {
                $this->name = $name;
                return "name has been updated to $name";
            } else {
                return 'not a valid name';
            }
        }

    }

    // $userOne = new User();
    // $userOne -> login();

    $useTwo = new User('ld', 'ld@gmail.com');
    // echo $useTwo->name;
    // $useTwo->login();
    // echo $useTwo->getName();
    // echo $useTwo->setName('ldk');
    // echo $useTwo->setName(50);
    // echo $useTwo->getName();


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>
</head>
<body>
    
</body>
</html>