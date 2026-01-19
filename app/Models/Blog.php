<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Blog extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function categories()
    {
        return $this->belongsToMany(Blogcategory::class);
    }

    public function photos()
    {
        return $this->hasMany(Blogphoto::class);
    }

    public function getUpdatedAtAttribute($updated_at){
        if(App::getLocale() == 'tr'){
            return Carbon::parse($updated_at)->locale('tr')->isoFormat('DD MMMM YYYY');
        }

        return Carbon::parse($updated_at)->locale('en')->isoFormat('MMMM DD, YYYY');
    }
}
