<?php

class user {


    function login($conn, $username, $password) {
        // Escape input to prevent SQL injection
        $username = mysqli_real_escape_string($conn, $username);
    
        // Fetch user by email
        $sql = "SELECT id, name, email, password FROM users WHERE email = '$username'";
        $result = mysqli_query($conn, $sql);
    
        if ($user = mysqli_fetch_assoc($result)) {
            // Verify password
            if (password_verify($password, $user['password'])) {
         
    
                return ['status' => true, 'message' => 'Login successful'];
            } else {
                return ['status' => false, 'message' => 'Invalid password'];
            }
        } else {
            return ['status' => false, 'message' => 'User not found'];
        }
    }


    function retreive_sales_officers($con)
    {
        $sql="SELECT * FROM `sales_officers`";
        $result=mysqli_query($con,$sql);

        return $result;
    }


    function retreive_developers($con)
    {
        $sql="SELECT * FROM `developers`";
        $result=mysqli_query($con,$sql);

        return $result;
    }


}
