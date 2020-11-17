<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Groceries extends Model {
    protected $table = 'groceries';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ean', 'name', 'category', 'price'
    ];
}
