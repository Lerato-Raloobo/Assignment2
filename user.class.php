<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * User
 *
 * @author 208317490
 */
class user
{
    private $user_id, $username, $email, $password;
    
    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }
    
    public function setPassword($password = 'Raloobo')
    {
        return md5($password);
    }
    
    public function displayUser()
    {
        return "Username: ". $this->username."<br />Email Address: ".$this->email;
    }
}
?>
