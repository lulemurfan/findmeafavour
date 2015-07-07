<?php

namespace Models;

use Core\Model;

class Skills_Model extends Model {
	
	function __construct(){
		parent::__construct();
	}
	
	public function getSkills(){
    	return $this->_db->
			select('SELECT title,poster,description FROM '.PREFIX.'skills');
    }
	
	public function insert_skill($data){
		$this->_db->insert(PREFIX.'skills',$data);
		return $this->_db->lastInsertId('ID');
	}

}