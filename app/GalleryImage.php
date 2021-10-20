<?php

namespace App;

class GalleryImage extends ObjectModel
{

    protected $table = 'gallery_images';
    protected $fillable = ['alt', 'ext', 'type'];
    protected $rules = [];

    public function getAll()
    {
	return $this->execute('SELECT * FROM gallery_images WHERE deleted_at IS NULL ORDER BY type ASC ', [] );
    }


    public function getAllBanners()
    {
	return $this->execute('SELECT * FROM gallery_images WHERE deleted_at IS NULL AND type = ? ', ['banner'] );
    }

    public function addImage($id = null, $alt, $ext, $type)
    {

	$this->alt = $alt;
	$this->ext = $ext;
	$this->type = $type;
    
	return parent::add();

    }


    public function delete($id)
    {
		
	$this->updateRow($this->table, ['deleted_at' => DT], 'id = :id  ', [ 'id' => $id ] );
	return redirect( $_SERVER['HTTP_REFERER'] , 'The image has been deleted' );

    }

    
    public function updateImage($id, $alt, $ext, $type)
    {

	$this->alt = $alt;
	$this->ext = $ext;
	$this->type = $type;

	parent::update('id = :id', ['id' => $id]);
	
    }


}
