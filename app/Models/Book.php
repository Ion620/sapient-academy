<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
      'name', 'author', 'price',
    ];

    public function persons()
    {
        return $this->belongsToMany(Person::class,'readers')
            ->withPivot(['issue_date', 'return_date']);
    }
}
