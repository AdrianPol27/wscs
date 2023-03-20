<?php

  class UserFacade extends DBConnection {

    public function signIn($username, $password) {
      $sql = $this->connect()->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
      $sql->execute([$username, $password]);
      return $sql;
    }

  }

?>