<?php

namespace Mooc\MoocBundle\Modals;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginFormateur
 *
 * @author akoubi
 */
class LoginFormateur {
     private $login;
     private $password;
     
     function getLogin() {
         return $this->login;
     }

     function getPassword() {
         return $this->password;
     }

     function setLogin($login) {
         $this->login = $login;
     }

     function setPassword($password) {
         $this->password = $password;
     }


}
