<?php

namespace Wall\Model;

use \Wall\DB\Sql;
use \Wall\Model;
use \Wall\Mailer;

class Category extends Model{


    public static function listAll()
	{

		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_categories ORDER BY idcategory");

    }
    
    public function save(){
        
		$sql = new Sql();

		$results = $sql->select("CALL sp_categories_save(:idcategory, :descategory)", array(
			":idcategory"=>$this->getidcategory(),
			":descategory"=>$this->getdescategory()
		));

        $this->setData($results[0]);
        
        Category::updateFile();

    }

    public function get($idcategory){
        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_categories WHERE idcategory = :idcategory", [
            ':idcategory'=>$idcategory
        ]);

        $this->setData($results[0]);
    }

    public function delete(){
        $sql = new Sql();

        $sql->query("DELETE FROM tb_categories WHERE idcategory = :idcategory", [
            ':idcategory'=>$this->getidcategory()
        ]);

        Category::updateFile();
    }

    public static function updateFile()
	{

		$categories = Category::listAll();

		$html = [];

		foreach ($categories as $row) {
            array_push($html, '<li datafilter= class="js-inview_h tra20">'.$row['descategory'].'</li>');
		}

		file_put_contents($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "views" . DIRECTORY_SEPARATOR . "portifolio-categories.html", implode('', $html));

	}
}

?>