<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Bike extends Model {

    protected $fillable = ['type', 'vendor', 'features', 'model'];

}
