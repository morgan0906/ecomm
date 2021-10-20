<?php

namespace App;

class Newsletter extends ObjectModel
{

    protected $table = 'newsletters';
    protected $fillable = ['newsletter_name', 'newsletter_email'];

	
    public function getAll()
    {
	return $this->execute("SELECT * FROM newsletters WHERE deleted_at IS NULL ORDER BY id DESC ", []);
    }
		
		
    public function add()
    {
	
	parent::add();

	return redirect('contact', 'Thank you, you have been added to our mailing list');

    }
		
		
    public function delete($id)
    {

	$this->updateRow($this->table, ['deleted_at' => DT], 'id = :id  ', [ 'id' => $id ] );
	
	return redirect('account.php?page=newsletters', 'The user has been deleted');


    }
    
    public function export()
    {

	$fields = "Date, Email Address \n";
	
	foreach($this->getAll() as $row){
	
		$fields .= date("d M Y", strtotime($row->created_at)).", ".str_replace(",", "", $row->newsletter_email)." \n";
	
	}
	


	header("Content-type: text/csv");
	header("Content-Disposition: attachment; filename=mailing-list.csv");    //  name the file will be
	header("Pragma: no-cache");
	header("Expires: 0");

	print $fields;
	exit;

    }


}
