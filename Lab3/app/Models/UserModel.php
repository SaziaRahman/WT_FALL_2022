<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class UserModel extends Model
{
protected $table="users";
protected $primaryKey = 'firstname';
public $timestamps = false;

}
?>