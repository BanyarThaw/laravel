<?php

namespace App;

use App\Mail\ReceipeStored;
use App\Category;
use Illuminate\Database\Eloquent\Model;
use App\Events\ReceipeCreatedEvent;

class Receipe extends Model
{
    protected $table = 'receipes';

    protected $fillable = ['name','ingredients','category','author_id'];

    public $dispatchesEvents =[
    	'created'=>ReceipeCreatedEvent::class,
    ];

    protected static function boot()
    {
    	parent::boot();

    	static::created(function($receipe){
    		session()->flash("message",'Receipe has created successfully!');
    		
    	});
    }

    public function categories()
    {
    	return $this->belongsTo(Category::class,'category');
    }
}
