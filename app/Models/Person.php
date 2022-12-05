<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
    protected $table = 'persons';
    protected $fillable = [
        'name', 'address', 'ticket_number',
    ];

    public function books()
    {
        return $this->belongsToMany(Book::class,'readers')
            ->withPivot(['id', 'issue_date', 'return_date']);
    }
}
