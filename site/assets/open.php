<?php
  class msqlu {
    public $servername;
    public $username;
    public $password;

    function __construct($servername, $username, $password) {
      $this->servername = $servername;
      $this->username = $username;
      $this->password = $password;
    }
  }
  $user = new msqlu("localhost", "username", "password");
  $sql = new mysql($user->servername, $user->username, $user->password);

  if ($sql->connect_error) {
    die("Connection failed: ".$sql->connect_error);
  }

  function sqlquery($cmd) {
    global $sql;
    return $sql->query($cmd);
  }
?>