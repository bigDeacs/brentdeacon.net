<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'types';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'status'];

	public function products()
    {
        return $this->hasMany('App\Product');
    }

}
