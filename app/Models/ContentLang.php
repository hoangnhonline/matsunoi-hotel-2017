<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class ContentLang extends Model  {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'content_lang';	

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
        'content_id',
        'lang_id',
        'content'
    ];

    public function lang()
    {
        return $this->hasOne('App\Models\Lang', 'lang_id');
    }
}
