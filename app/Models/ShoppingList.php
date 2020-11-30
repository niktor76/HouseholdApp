<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShoppingList extends Model {
    protected $table = 'shopping_lists';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'category', 'template'
    ];
}
