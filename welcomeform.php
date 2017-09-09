<?php

 
    class user
    {
        var $conn;
        function __construct()
        {
            $this->conn = new mysqli("localhost","root","","rgdb");
        }

        public function registerUser($data=false){
            $con = $this->conn;
            $sql = "INSERT INTO rgtbl(user,pass) VALUES('{$data['user']}','{$data['pass']}')";
            $result = $con->query($sql);
        }
    }

    $dbUser = new user();
    $result = $dbUser->registerUser($_POST);
    
 ?>




<html>

<head>
<title>registration</title>

</head>
 
<body>

   <h6 style="font-size: 60px;">succesfully</h6>


</body>

</html>
