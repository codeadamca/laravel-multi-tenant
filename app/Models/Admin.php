<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Spatie\Multitenancy\Models\Concerns\UsesLandlordConnection;

class Admin extends Model
{

    use HasFactory, UsesLandlordConnection;

    //
}
