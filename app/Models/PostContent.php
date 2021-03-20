<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostContent extends Model
{
    use HasFactory;

    public $table = 'post_contents';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|max:255',
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function website()
    {
        return $this->belongsTo(Website::class);
    }
}
