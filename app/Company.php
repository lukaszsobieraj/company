<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

    protected $fillable = [
        'name', 'email', 'district', 'city', 'zipcode', 'street', 'number', 'category_id'
    ];

    public function category() {
        return $this->belongsTo('App\Categories', 'category_id', 'id');
    }


                                          

}
