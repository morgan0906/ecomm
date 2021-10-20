<?php

namespace App;

class NewsImage extends ObjectModel
{

    protected $table = 'news_images';
    protected $fillable = ['news_id', 'alt', 'ext'];
    protected $rules = [];

    public function getAll($news_id = null)
    {
	$news_id = $news_id ? $news_id : $_GET['id'];
	return $this->execute('SELECT * FROM news_images WHERE news_id = ? AND deleted_at IS NULL ORDER BY id ASC ', [ $news_id ] );
    }


    public function addImage($news_id, $alt, $ext)
    {

	$this->news_id = $news_id;
	$this->alt = $alt;
	$this->ext = $ext;
    
	return parent::add();

    }


    public function delete($id)
    {
		
	$this->updateRow($this->table, ['deleted_at' => DT], 'id = :id  ', [ 'id' => $id ] );
	return redirect( $_SERVER['HTTP_REFERER'] , 'The image has been deleted' );

    }

    
    public function updateImage($id, $alt, $ext)
    {

	$this->alt = $alt;
	$this->ext = $ext;

	parent::update('id = :id', ['id' => $id]);
	
    }


}
