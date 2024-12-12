<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    const COMMON_USER = 0;
    const ADMIN_USER  = 1;
}
