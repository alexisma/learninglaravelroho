<?php
	class Elegant extends Eloquent
	{
	    protected $rules = array();

	    protected $errors;

	    public function validate($data)
	    {
	        // make a new validator object
	        $v = Validator::make($data, $this->rules);

	        // check for failure
	        if ($v->fails())
	        {
	            // set errors and return false
	            $this->errors = $v->errors();
	            return false;
	        }

	        // validation pass
	        return true;
	    }

	    public function errors()
	    {
	    	$error = $this->errors->toArray();
	    	$mensaje = '';
	    	foreach ($error as $key)
	    	{
	    		$mensaje = $mensaje.$key['0'].' ';
	    	}
	    	$errors = substr($mensaje,0,-1);
	        return $errors;
	    }

	    public function inputer($model,$data)
	    {
	    	foreach ($data as $key => $value) {
		    	if ($value !== '') {
		    		$model->$key = $value;
		    	} else {
		    		$model->$key = null;
		    	}
		    }
		    return $model;
	    }
	}
?>