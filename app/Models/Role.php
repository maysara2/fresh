<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public $guarded=[];

    public function admins()
    {
       return $this->hasMany(Admin::class,'role_id');
    }


    protected $casts = [
        'permissions' => 'array',
    ];
    public function getPermissionsAttribute($permissions)
    {
        return json_decode($permissions, true);
    }

    public function scopeActive($q){
        $q->where('status',1);
    }

}
