<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'acct_name', 'init_invest', 'start_date', 'remarks'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
