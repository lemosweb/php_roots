<?php 

class User
{
	private $email = "daniel.o.lemos@hotmail.com";

	private $password = "123456";

	private $name = "Daniel Oliveira Lemos";
	

	public function getEmail()
	{
		return $this->email;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function checkLogin($email, $password)
	{
		if ($this->email == $email && $this->password == $password) {

			return true;
			
		}

		return false;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}



}