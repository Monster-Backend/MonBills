<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        "Product_name",
        "description",
        "section_id",
    ];

    // alternative for fillable 👇
    // protected $guarded = [];

    // sections relations
    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
