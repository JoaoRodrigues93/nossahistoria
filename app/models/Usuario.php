<?php
/**
 * Created by PhpStorm.
 * User: João
 * Date: 16/06/2015
 * Time: 14:39
 */

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

 class Usuario extends Eloquent implements  UserInterface, RemindableInterface {

     use UserTrait, RemindableTrait;

     /**
      * The database table used by the model.
      *
      * @var string
      */
     protected $table = 'usuarios';

     /**
      * The attributes excluded from the model's JSON form.
      *
      * @var array
      */
     protected $hidden = array('password', 'remember_token');
 }