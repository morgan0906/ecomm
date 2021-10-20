<?php

namespace App;

use App\Helpers\Tools;
use App\NewsImage;

class News extends ObjectModel
{

    protected $table = 'news';
    protected $fillable = ['title', 'text'];
    protected $rules = ['title' => 'required'];
    
    
    public function __construct()
    {
    
	$this->newsImageObj = new NewsImage;
    
    }

	
    public function getAll()
    {
	return $this->execute("SELECT * FROM news WHERE deleted_at IS NULL ORDER BY id DESC ", []);
    }
		
		
    public function add()
    {
    
	Tools::validateImages();

	if( !$this->validate() ){
	
		return redirect('account.php?page=news-item&action=add');
	
	}
	
	$id = parent::add();
	
	Tools::addImages( $id, 'news-images', $this->newsImageObj );

	return redirect('account.php?page=news', 'The news item has been added');

    }
		
		
    public function delete($id)
    {

	$this->updateRow($this->table, ['deleted_at' => DT], 'id = :id  ', [ 'id' => $id ] );
	
	return redirect('account.php?page=news', 'The news item has been deleted');


    }


    public function update($id, $whereValues = null)
    {
    
	$uploadedArray = array();
	
	/*  See if file uploads are valid images  */
    
	Tools::validateImages();

	if( !parent::update('id = :id', ['id' => $id]) ){
	
		return redirect('account.php?page=news-item&action=edit&id='.$id);
	
	}
	
	Tools::updateImages( $id, 'news-images', $this->newsImageObj );

	return redirect('account.php?page=news', 'The news item has been updated');

    }



}
