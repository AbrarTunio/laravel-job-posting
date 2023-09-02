<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'tags',
        'company',
        'location',
        'email',
        'website',
        'description'
    ];   

    public function scopeFilter( $query , array $filters ){
        // If the filters tag is not empty
        if ( $filters['tag'] ?? false  ) {
            // tags is the field in database
            $query->where( 'tags' , 'like' , '%' . request('tag') . "%") ;
        }
    }

}
