<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FamilyMember extends Model {
    protected $table = 'family_members';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'salutation_id', 'first_name', 'surname', 'nickname', 'birthday', 'email', 'password'
    ];
}
