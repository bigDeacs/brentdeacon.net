<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'products';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'description', 'url', 'type_id', 'category_id', 'link', 'status', 'meta', 'head', 'scripts'];

	public function images() {
		return $this->belongsToMany('App\Image');
	}

	public function type()
    {
        return $this->belongsTo('App\Type');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

}
