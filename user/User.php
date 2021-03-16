<?php

public class User ()
{
  private $password;


  public get_password()
  {
    return base64_decode($this->password);
  }

  public set_password(string $p_password)
  {
    $this->password = base64_encode($p_password);
  }
}
