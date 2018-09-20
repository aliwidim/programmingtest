<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $table = 'bukus';
	
	protected $fillable = [
		'title',
		'author',
		'date_published',
		'number_of_pages',
		'type_of_book'
	];
	
	protected $dates = ['date_published'];
	
	public function getTitleAttribute($title)
	{
		return ucwords($title);
	}
	public function setTitleAttribute($title)
	{
		$this->attributes['title'] = strtolower($title);
	}
	public function getAuthorAttribute($author)
	{
		return ucwords($author);
	}
	public function setAuthorAttribute($author)
	{
		$this->attributes['author'] = strtolower($author);
	}
	public function getTypeOfBookAttribute($type_of_book)
	{
		return ucwords($type_of_book);
	}
}
