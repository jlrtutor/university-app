<?php
namespace App\Http\Models;

use App\Core;

require_once __DIR__ . '/Model.php';

Class user extends Model
{
    
    public function __construct()
    {
        parent::__construct('users');

        $this->field('id', 'integer', ['PK'=>true, 'validate'=>false] );
        $this->field('name');
        $this->field('surname');
        $this->field('email');
        $this->field('password');
        $this->field('comments');
        $this->field('date_of_creation', 'date', [  'validate'=>false,
                                                    'required'=>false, 
                                                    'default'=>date('Y-m-d')] );
    }

    public function checkLogin($email, $password)
    {
        $stmt = Core::db()->prepare("SELECT `id`, `name`, `surname`, `email`, `comments` 
        FROM `users` WHERE `email` = :email AND `password` = :password");
        
        $stmt->execute( array(  ':email'=>$email,
                                ':password'=>crypt($password, KEY_SALT) ));

        if( $stmt->rowCount() )
        {
            return $stmt->fetch();
        }
        
        return false;
    }


}