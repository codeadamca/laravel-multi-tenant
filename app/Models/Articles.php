<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Spatie\Multitenancy\Models\Concerns\UsesTenantConnection;


class Articles extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, UsesTenantConnection;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'title',
        'content',
    ];

}
