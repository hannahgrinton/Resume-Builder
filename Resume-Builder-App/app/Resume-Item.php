<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResumeItem extends Model
{
    //use Notifiable;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'resume_items';
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'itemId';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'category'
    ];

}