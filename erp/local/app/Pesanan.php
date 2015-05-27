<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pesanan extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	use SoftDeletes;

	protected $table = 'pesanan';

	protected $dates = ['deleted_at'];

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['customer_name', 'amount', 'word', 'additional_information', 'due_date', 'assign_to', 'paid', 'delivered', 'done'];
	public function newQuery()
	{
	    $query = parent::newQuery();

	    return $query->orderBy("due_date", 'asc');
	}
}
