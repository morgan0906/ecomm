<?php

namespace App;
use App\Helpers\Tools;

class Category extends ObjectModel
{

    protected $table = 'categories';
    protected $fillable = ['title', 'seo_url', 'meta_description'];
    protected $rules = ['title' => 'required', 'seo_url' => 'required|unique:categories'];


    public function getAll()
    {
	return $this->execute('SELECT * FROM categories WHERE deleted_at IS NULL ORDER BY id ASC ', [] );
    }


#<!-------------------------------Retyped version of getALL--------------------------->
  public function getAll2()
    {
      return $this->execute('SELECT * FROM categories WHERE deleted_at IS NULL ORDER BY id ASC', [] );
    }
#<!-------------------------------Retyped version of getALL--------------------------->


    public function add()
    {

	$this->seo_url = preg_replace("/[^A-Za-z0-9-]/", '', strtolower($_POST['seo_url']));

	if( !$this->validate() ){

		return redirect('account.php?page=category&action=add');

	}

	Tools::validateImages();

	$id = parent::add();

	if($_FILES['file']['size'] > 0){

		$ext = Tools::getFileExtension($_FILES['file']['name']);
		move_uploaded_file($_FILES['file']['tmp_name'], '../category-images/'.$id.'.'.$ext);

		$this->updateRow($this->table, ['ext' => $ext], 'id = :id  ', [ 'id' => $id ] );

	}

	return redirect('account.php?page=categories', 'The category has been added');

    }


    public function delete($id)
    {

	$this->updateRow($this->table, ['deleted_at' => DT], 'id = :id  ', [ 'id' => $id ] );

	return redirect('account.php?page=categories', 'The category has been deleted');

    }


    public function update($id, $whereValues = null)
    {

	$this->seo_url = preg_replace("/[^A-Za-z0-9-]/", '', strtolower($_POST['seo_url']));

	Tools::validateImages();

	if($_FILES['file']['size'] > 0){

		$ext = Tools::getFileExtension($_FILES['file']['name']);
		move_uploaded_file($_FILES['file']['tmp_name'], '../category-images/'.$id.'.'.$ext);

		$this->updateRow($this->table, ['ext' => $ext], 'id = :id  ', [ 'id' => $id ] );

	}

	if( !parent::update('id = :id', ['id' => $id]) ){

		return redirect('account.php?page=category&action=edit&id='.$id);

	}

	return redirect('account.php?page=categories', 'The category has been updated');

    }



}
