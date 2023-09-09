<?php
// Поставщик данных из\в БД
class Provider{
    protected $http_host;
	public $db;

	function __construct() {
	    global $_http_host;
	    $this->http_host = $_http_host;
		$this->db = new Db();	
	}

	function getLabels(){
		$labels = $this->db->query('SELECT * FROM labels');
		return $labels;
	}

	function getLabelById($id){
		$label = $this->db->query('SELECT * FROM labels WHERE id=:id',
			array(
				'id' => $id,
			)
		);
		return $label[0];
	}

	function updateProduct($data){
		$result = $this->db->query('UPDATE labels SET 
				label_form=:label_form, 
				label_width=:label_width, 
				label_height=:label_height, 
				product_name=:product_name, 
				product_subtitle=:product_subtitle,
				capacity=:capacity,
				compound=:compound,
				instruction=:instruction,
				create_date=:create_date,
				sell_by=:sell_by,
				storage_condition=:storage_condition
			WHERE id=:id',
			array(
				'label_form' 		=> $data['label_form'],
				'label_width' 		=> $data['label_width'],
				'label_height' 		=> $data['label_height'],
				'product_name' 		=> $data['product_name'],
				'product_subtitle' 	=> $data['product_subtitle'],
				'capacity' 			=> $data['capacity'],
				'compound' 			=> $data['compound'],
				'instruction' 		=> $data['instruction'],
				'create_date' 		=> $data['create_date'],
				'sell_by' 			=> $data['sell_by'],
				'storage_condition' => $data['storage_condition'],
				'id' 				=> $data['id'],
			)
		);
		return $result;	
	}

	function addNewProduct($data){
		$this->db->query('INSERT INTO labels(label_form, label_width, label_height, product_name, product_subtitle, capacity, compound, instruction, create_date, sell_by, storage_condition) VALUES(:label_form, :label_width, :label_height, :product_name, :product_subtitle, :capacity, :compound, :instruction, :create_date, :sell_by, :storage_condition)',
			array(
				'label_form' 		=> $data['label_form'],
				'label_width' 		=> $data['label_width'],
				'label_height' 		=> $data['label_height'],
				'product_name' 		=> $data['product_name'],
				'product_subtitle' 	=> $data['product_subtitle'],
				'capacity' 			=> $data['capacity'],
				'compound' 			=> $data['compound'],
				'instruction' 		=> $data['instruction'],
				'create_date' 		=> $data['create_date'],
				'sell_by' 			=> $data['sell_by'],
				'storage_condition' => $data['storage_condition'],
			)
		);
	}
	// function setStatus
}