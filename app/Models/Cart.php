<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Cart
 * @package App\Models
 * @version January 23, 2021, 12:41 pm UTC
 *
 * @property integer $user_id
 * @property integer $website_id
 * @property integer $quantity
 *
 */
class Cart extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'carts';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'website_id',
        'quantity'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'website_id' => 'integer',
        'quantity' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|numeric',
        'website_id' => 'required|numeric',
        'quantity' => 'required|numeric'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function website()
    {
        return $this->belongsTo(Website::class, 'website_id', 'id');
    }




}
