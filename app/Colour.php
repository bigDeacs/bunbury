<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Colour extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'colours';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'hex', 'description', 'code', 'file', 'label_id', 'status'];

    public function products() 
	{
		return $this->belongsToMany('App\Product');
	}

	public function label()
    {
        return $this->belongsTo('App\Label');
    }

}
