<?php

namespace App;

use App\Helpers\Tools;
use App\BlogImage;

class Blog extends ObjectModel
{

    protected $table = 'blogs';
    protected $fillable = ['title', 'seo_url', 'content', 'search_terms'];
    protected $rules = [ 'title' => 'required', 'seo_url' => 'required|unique:blogs', 'content' => 'required' ];
    
    public function __construct()
    {
    
	$this->blogImageObj = new BlogImage;
    
    }

	
    public function getAll()
    {
	return $this->execute('SELECT * FROM blogs WHERE deleted_at IS NULL ORDER BY created_at DESC ', [] );
    }
    
    
    public function searchBlogs($search)
    {
	return $this->execute('SELECT * FROM blogs WHERE ( title LIKE ? OR search_terms LIKE ? ) AND deleted_at IS NULL ORDER BY created_at DESC ', ["%".trim($search)."%", "%\"".trim($search)."\"%"] );
    }


    public function add()
    {
    
	Tools::validateImages();
    
	$this->seo_url = preg_replace("/[^A-Za-z0-9-]/", '', strtolower($_POST['seo_url']));
		
	if( !$this->validate() ){
	
		return redirect('account.php?page=blog&action=add');
	
	}
	
	$this->search_terms = '';
	
	if($_POST['search_terms'] != ''){
	
		$explode = explode(',', $_POST['search_terms']);
		$this->search_terms = json_encode($explode);
	
	}
	
	$id = parent::add();
	
	Tools::addImages( $id, 'blog-images', $this->blogImageObj );

	return redirect('account.php?page=blogs', 'The blog has been added');
		
    }

    
    public function update($id, $whereValues = null)
    {
    
	$uploadedArray = array();
	
	/*  See if file uploads are valid images  */
    
	Tools::validateImages();
	
	/*  Remove all but chars and dashes from seo url  */
    
	$this->seo_url = preg_replace("/[^A-Za-z0-9-]/", '', strtolower($_POST['seo_url']));
	
	$this->search_terms = '';
	
	if($_POST['search_terms'] != ''){
	
		$explode = explode(',', $_POST['search_terms']);
		$this->search_terms = json_encode($explode);
	
	}
		
	if( !parent::update('id = :id', ['id' => $id]) ){
	
		return redirect('account.php?page=blog&action=edit&id='.$id);
	
	}
	
	Tools::updateImages( $id, 'blog-images', $this->blogImageObj );
	
	return redirect('account.php?page=blogs', 'The blog has been updated');

    }


    public function delete($id)
    {
		
	$this->updateRow($this->table, ['deleted_at' => DT], 'id = :id  ', [ 'id' => $id ] );
	
	return redirect('account.php?page=blogs', 'The blog has been deleted');

    }


}
