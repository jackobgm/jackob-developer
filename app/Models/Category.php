<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Category
 * @package App\Models
 * @version January 23, 2021, 6:20 am UTC
 *
 * @property string $name
 */
class Category extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'categories';
    

    //protected $dates = ['deleted_at'];



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|max:255'
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function websites() {
        return $this->belongsToMany(Website::class);
    }
    
}
