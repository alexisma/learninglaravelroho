<?php
	use Illuminate\Auth\UserInterface;
	use Illuminate\Auth\Reminders\RemindableInterface;
	
	class User extends Elegant implements UserInterface, RemindableInterface
	{
		protected $table = 'user';
		protected $primaryKey = 'user_id';
		public $timestamps = true;
		protected $fillable = array('username', 'password', 'name','email', 'remember_token');

		protected $hidden= array('password','remember_token');

		public function getAuthIdentifier()
		{
			return $this->getKey();
		}

		public function getAuthPassword()
		{
			return $this->password;
		} 	

		public function getRememberToken()
		{
			return $this->remember_token;
		}

		public function setRememberToken($value)
		{
			$this->remember_token = $value;
		}
		  
		public function getRememberTokenName()
		{
			return "remember_token";
		}
		  
		public function getReminderEmail()
		{
			return $this->email;
		}

		protected $rules = array(
	        //'username' => array('required', 'unique:username','regex:/^\S*$/'),
	        //'password' => 'required|min:5',
	        //'name' => 'required|max:100',
	        //'nacimiento' => 'regex:/^[12][0-9]{3}-[01]{0,1}[0-9]-[0-3]{0,1}[0-9]$/',
    	);
	}
?>