<?php
include 'base_model.php';
class User extends Model{

    
    public function registerUser($email, $password){
        $sql = "INSERT INTO users (email, password)
            VALUES ('$email', '$password')";
        if ($this->conn->query($sql) === TRUE) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }


}



?>