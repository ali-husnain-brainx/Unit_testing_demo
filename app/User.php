<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $first_name;
    protected $last_name;
    protected $email;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function donations()
    {
        return $this->hasMany('App\Donation');
    }

    public function setFirstName($firstName){
        $this->first_name = $firstName;
    }

    public function getFirstName(){
        return $this->first_name;
    }

    public function setLastName($lastName){
        $this->last_name = $lastName;
    }

    public function getLastName(){
        return $this->last_name;
    }

    public function getFullName(){
        return $this->first_name .' '. $this->last_name;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }


    public function getEmailVariables(){
        return [
            'full_name' => $this->getFullName(),
            'email' => $this->getEmail(),
            ];
    }
}
