<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class BikeStation extends Model {

    protected $fillable = ['BatchSize', 'location', 'maxCapacity', 'functional'];

}
