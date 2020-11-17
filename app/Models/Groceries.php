<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Groceries extends Model {
    protected $table = 'family_members';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ean', 'name', 'category', 'price'
    ];
}
