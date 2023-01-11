<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Labrosan extends Model
{
    use HasFactory;
    protected $guarded=[];
    use HasTranslations;

    public $translatable = ['title','sub_title','description'];


    protected function asJson($value)
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }
}
