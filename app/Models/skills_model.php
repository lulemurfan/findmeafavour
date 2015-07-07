class Skills_Model extends Model {
	
	function __construct(){
		parent::__construct();
	}
	
	public function getContacts(){
    	return $this->_db->
			select('SELECT title,poster,description FROM '.PREFIX.'skills');
    }
	
}