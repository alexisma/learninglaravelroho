<?php

class UserInfo  extends Elegant {

    protected $table = 'userInfo';
    protected $primaryKey = 'user_id';
    public    $timestamps = true;
    protected $fillable = array('user_id', 'name', 'age','weight','gender','height');

    public $rules = array(
                'name' => 'max:100',
                'weight' => 'integer',
                'height' => 'integer',
                );
    
}