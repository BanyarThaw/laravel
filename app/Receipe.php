<?php

namespace App;

use App\Mail\ReceipeStored;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Receipe extends Model
{
    protected $table = 'receipes';

    protected $fillable = ['name','ingredients','category','author_id'];

    protected static function boot()
    {
    	parent::boot();

    	static::created(function($receipe){
    		session()->flash("message",'Receipe has created successfully!');
    		 \Mail::to('banyarthaw2@gmail.com')->send(new ReceipeStored($receipe));
    	});
    }

    public function categories()
    {
    	return $this->belongsTo(Category::class,'category');
    }
}
