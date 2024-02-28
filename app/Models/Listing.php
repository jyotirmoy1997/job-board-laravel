<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;
    public function scopeFilter($query, $filters = []){
        $searchString = $filters[0];
        $locString = $filters[1];

        if($searchString && $locString){
            $query->where('title', 'like', "%$searchString%")
            ->orWhere('tags', 'like', "%$searchString%")
            ->orWhere('description', 'like', "%$searchString%")
            ->orWhere('company', 'like', "%$searchString%")
            ->where('location', '=', "$locString");
        }
        else if(!$searchString && $locString){
            $query->where('location', '=', "$locString");
        }
        else if($searchString && !$locString){
            $query->where('title', 'like', "%$searchString%")
            ->orWhere('tags', 'like', "%$searchString%")
            ->orWhere('description', 'like', "%$searchString%")
            ->orWhere('company', 'like', "%$searchString%");
        }
    }
}
