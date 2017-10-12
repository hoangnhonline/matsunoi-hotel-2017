<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Services extends Model  {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'services'; 

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
        'type'
    ];
    
    public function servicesLang()
    {
        return $this->hasMany('App\Models\ServicesLang', 'id', 'services_id');
    }
}
