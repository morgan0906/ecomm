<?php

namespace App;

use App\Helpers\Tools;
use App\ProductImage;

class Product extends ObjectModel{

    protected $table = 'products';
    protected $fillable = ['title', 'seo_url', 'category_id', 'sub_category_id', 'price', 'special_offer_price', 'description', 'attributes', 'best_seller', 'featured', 'meta_description', 'product_code', 'weight', 'sort_order', 'sale', 'new', 'qty_available', 'barcode'];
   protected $rules = [
					'title' => 'required',
					'seo_url' => 'required|unique:products',
					'categories' => 'required',
					'price' => 'required'
			];


    public function __construct()
    {

	$this->productImageObj = new ProductImage;

    }


    public function getAll($page)
    {


	return $this->execute('SELECT *, products.title AS product_title,
					products.title AS product_title, categories.title AS category_title,
					products.seo_url AS product_seo_url, products.id AS product_id FROM products
					LEFT JOIN categories ON categories.id = products.category_id
					WHERE products.deleted_at IS NULL ORDER BY products.category_id ASC  ', [] );

    }

    public function getAll123()
    {


  return $this->execute('SELECT *, products.title AS product_title,
          products.title AS product_title,
          products.seo_url AS product_seo_url, products.id AS product_id FROM products WHERE products.best_seller = ?
          AND products.deleted_at IS NULL ORDER BY RAND()', ['1'] );

    }

  

    public function getAllCrossell()
    {

	return $this->execute('SELECT *, products.title AS product_title,
					products.title AS product_title, categories.title AS category_title,
					products.seo_url AS product_seo_url, products.id AS product_id FROM products
					LEFT JOIN categories ON categories.id = products.category_id
					WHERE products.deleted_at IS NULL AND products.qty_available > 0 ORDER BY products.category_id ASC  ', [] );

    }


    public function getAllByCategory($category_id)
    {

	return $this->execute("SELECT title, id, price, special_offer_price, seo_url FROM products WHERE
					category_id LIKE ? AND products.deleted_at IS NULL AND products.qty_available > 0 ", ["%\"".$category_id."\"%"] );

    }


    public function specialOffers()
    {

	return $this->execute("SELECT title, id, price, special_offer_price, seo_url FROM products WHERE
					special_offer_price > '0' AND products.deleted_at IS NULL ", [] );

    }

    public function getAllBySubCategory($sub_categoryId, $category_id)
    {

	return $this->execute("SELECT title, id, price, special_offer_price, seo_url FROM products WHERE
					sub_category_id LIKE ? AND category_id LIKE ? AND products.deleted_at IS NULL AND products.qty_available > 0
					ORDER BY products.id DESC ", ["%\"".$sub_categoryId."\"%", "%\"".$category_id."\"%"] );

    }

    public function getLatest()
    {

	return $this->execute("SELECT title, id, price, special_offer_price, seo_url  FROM products WHERE
					products.deleted_at IS NULL AND products.qty_available > 0 ORDER BY products.id DESC  ", [] );

    }

    public function bestSellers()
    {

	return $this->execute("SELECT title, id, price, special_offer_price, seo_url FROM products WHERE products.best_seller = '1' AND
					products.deleted_at IS NULL AND products.qty_available > 0 ORDER BY RAND()   ", [] );

    }


    public function featured()
    {

	return $this->execute("SELECT title, id, price, special_offer_price, seo_url  FROM products WHERE products.featured = '1' AND
					products.deleted_at IS NULL AND products.qty_available > 0 ORDER BY products.id DESC   ", [] );

    }


    public function sale()
    {

	return $this->execute("SELECT title, id, price, special_offer_price, seo_url  FROM products WHERE products.sale = '1' AND
					products.deleted_at IS NULL AND products.qty_available > 0 ORDER BY products.id DESC  ", [] );

    }

    public function newItems()
    {

	return $this->execute("SELECT title, id, price, special_offer_price, seo_url  FROM products WHERE products.new = '1' AND
					products.deleted_at IS NULL AND products.qty_available > 0 ORDER BY products.id DESC  ", [] );

    }


    public function search($search)
    {

	return $this->execute("SELECT title, id, price, special_offer_price, seo_url FROM products WHERE
					( title LIKE ? OR product_code LIKE ? OR barcode LIKE ? ) AND products.deleted_at IS NULL AND products.qty_available > 0 ", ["%".$search."%", "%".$search."%", "%".$search."%"] );

    }

    public function adminSearch($search)
    {

	return $this->execute("SELECT *, products.title AS product_title, products.seo_url AS product_seo_url, products.id AS product_id FROM products WHERE
					( title LIKE ? OR product_code LIKE ? OR barcode LIKE ? ) AND products.deleted_at IS NULL ", ["%".$search."%", "%".$search."%", "%".$search."%"] );

    }


    public function getProductById($id)
    {

	return $this->execute("SELECT *, products.id AS product_id, products.title AS product_title
					FROM products LEFT JOIN sub_categories ON sub_categories.id = products.sub_category_id
					WHERE products.id = ?  ", [$id] );

    }


    public function getAttributes()
    {

	print count($_POST['attributes']); exit;

	if( !count($_POST['attributes']) ){

		return '';

	}

	$attributes = json_encode($_POST['attributes']);

	foreach( $_POST['attributes'] as $attribute ){

		if( $attribute == '' ){

			$attributes = '';
			continue;

		}

	}

	return $attributes;

    }



    public function add()
    {


	Tools::validateImages();

    	$this->seo_url = preg_replace("/[^A-Za-z0-9-]/", '', strtolower($_POST['seo_url']));

	if( !$this->validate() ){

		return redirect('account.php?page=product&action=add');

	}



	$this->category_id = json_encode($_POST['categories']);

	if(isset($_POST['sub_categories'])){

		$this->sub_category_id = json_encode($_POST['sub_categories']);

	}

	$id = parent::add();

	Tools::addImages( $id, 'product-images', $this->productImageObj );

	return redirect('account.php?page=products', 'The product has been added');

    }


    public function update($id, $whereValues = null)
    {

	$uploadedArray = array();

	/*  See if file uploads are valid images  */

	Tools::validateImages();

	/*  Remove all but chars and dashes from seo url  */

	$this->seo_url = preg_replace("/[^A-Za-z0-9-]/", '', strtolower($_POST['seo_url']));

	$this->attributes = json_encode($_POST['attributes']);

	$this->category_id = json_encode($_POST['categories']);

	if(isset($_POST['sub_categories'])){

		$this->sub_category_id = json_encode($_POST['sub_categories']);

	}

	if( !parent::update('id = :id', ['id' => $id]) ){

		return redirect('account.php?page=product&action=edit&id='.$id);

	}

	Tools::updateImages( $id, 'product-images', $this->productImageObj );

	return redirect('account.php?page=products', 'The product has been updated');

    }


    public function delete($id)
    {

	$this->updateRow($this->table, ['deleted_at' => DT], 'id = :id  ', [ 'id' => $id ] );

	return redirect('account.php?page=products', 'The product has been deleted');

    }



    public function updateCrossSells($id)
    {

	$json = '';

	if(isset($_POST['ids'])){

		$json = json_encode($_POST['ids']);

	}

	$this->updateRow($this->table, ['cross_sell_ids' => $json], 'id = :id  ', [ 'id' => $id ] );
	return redirect( 'account?page=cross-sell&id='.$id, 'Your cross sell products have been updated' );

    }


    public function export($categoryObj, $subCategoryObj)
    {

	$fields = "Title, Product Code, Category, Sub Categories, Price, Special Offer Price, Qty, Best Seller, Featured, Sale, New \n";

	foreach($this->getAll() as $row){

	$categories = '';
	$sub_categories = '';
	$category_json = json_decode($row->category_id);
	$sub_category_json = json_decode($row->sub_category_id);

	foreach($category_json as $category_id){

		$categories .= '['.$categoryObj->find($category_id)->title.'] ';

	}

	foreach($sub_category_json as $sub_category_id){

		$sub_categories .= '['.$subCategoryObj->find($sub_category_id)->title.'] ';

	}

		$fields .= str_replace(",", "", $row->product_title)." , ".str_replace(",", "", $row->product_code)." , ".str_replace(",", "", $categories)." , ".str_replace(",", "", $sub_categories)." , ".str_replace(",", "", $row->price)." , ".str_replace(",", "", $row->special_offer_price)." , ".str_replace(",", "", $row->qty_available)." , ".str_replace(",", "", $row->best_seller)." , ".str_replace(",", "", $row->featured)." , ".str_replace(",", "", $row->sale)." , ".str_replace(",", "", $row->new)."   \n";

	}

	header("Content-type: text/csv");
	header("Content-Disposition: attachment; filename=products.csv");    //  name the file will be
	header("Pragma: no-cache");
	header("Expires: 0");

	print $fields;
	exit;

    }


    public function featuredScroll($maxNumberofArray)
    {

$arrayOfAllProducts = [];
$arrayOfMultiple4Products = [];
$productImageArray = [];


$productObjArray = json_decode(json_encode($this->featured()), true);

for ($i = 1; $i < count($productObjArray) +1; $i++) {
    $productId = $productObjArray[$i - 1]["id"];
    $productImageArray = json_decode(json_encode($this->productImageObj->getRowByFieldNotDeleted('product_id', $productId)), true);

    $productImageArray["id"];
    $productObjArray[$i - 1]['imageId'] = $productImageArray["id"];
    $productObjArray[$i - 1]['ext'] = $productImageArray["ext"];
    array_push($arrayOfMultiple4Products, $productObjArray[$i - 1]);

    if ($i % $maxNumberofArray == 0) {

        array_push($arrayOfAllProducts, $arrayOfMultiple4Products);
        $arrayOfMultiple4Products = [];
        for ($x = 0; $x < $maxNumberofArray; $x++) {
            array_shift($productObjArray);
            $i--;
        }
    }
}

/*

if (count($productObjArray) <= $maxNumberofArray) {

    array_push($arrayOfAllProducts, $arrayOfMultiple4Products);
    $arrayOfMultiple4Products = [];
    for ($x = 0; $x < $maxNumberofArray; $x++) {
        array_shift($productObjArray);
        $i--;
    }
}

*/

	return [json_encode($arrayOfAllProducts), $maxNumberofArray];


    }


    public function getIndicators($maxNumberofArray)
    {

	$dots = count($this->featured()) / $maxNumberofArray;
	$numberOfDisplay = floor($dots);  // round down

	return $numberOfDisplay;

    }



}
