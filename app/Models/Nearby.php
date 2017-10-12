<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Nearby extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'nearby'; 

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
        'display_order',
        'image_url',        
    ];
    
    public function servicesLang()
    {
        return $this->hasMany('App\Models\NearbyLang', 'id', 'nearby_id');
    }
}
