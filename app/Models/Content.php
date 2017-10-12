<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Content extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'content'; 

     /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [           
    ];
    
    public function contentLang()
    {
        return $this->hasMany('App\Models\ContentLang', 'id', 'content_id');
    }
}
