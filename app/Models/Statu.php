<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Statu
 * @package App\Models
 * @version January 25, 2021, 6:35 pm UTC
 *
 * @property string $name
 */
class Statu extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'status';
    

    protected $dates = ['deleted_at'];



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
        'name' => 'nullable'
    ];

    
}
