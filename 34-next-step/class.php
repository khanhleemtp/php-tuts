<?php
    
    class User{

        public $email;
        public $name;

        public function __construct($name, $email) {
            $this->name = $name;
            $this->email = $email; 
        }

        public function login() {
            echo "$this->name iss logged in";
        }
        
    }

    // $userOne = new User();
    // $userOne -> login();

    $useTwo = new User('ld', 'ld@gmail.com');
    // echo $useTwo->name;
    $useTwo->login();
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