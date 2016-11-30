<?php 

	namespace database\modules;

	use database\crud\Students;

	/**
	*  
	*	StudentsInfo
	*  
	* Provides High level features for interacting with the Students;
	*
	* This source code is auto-generated
    *
    * @author Victor Mwenda
    * Email : vmwenda.vm@gmail.com
    * Phone : +254(0)718034449
	*/
	class StudentsInfo{

	private $build;
	private $client;
	private $action;
	private $students;
	private $table = 'students';
	/**
	 * StudentsInfo
	 * 
	 * Class to get all the students Information from the students table 
	 * @param String $action
	 * @param String $client
	 * @param String $build
	 * 
	 * @author Victor Mwenda
	 * Email : vmwenda.vm@gmail.com
	 * Phone : +254718034449
	 */
	public function __construct($action = "query", $client = "mobile-android",$build="user-build") {

		$this->client = $client;
		$this->action = $action;
		$this->build = $build;
		
		$this->students = new Students( $action, $client );

	}

	

		/**
	* Inserts data into the table[students] in the order below
	* array ('student_id','class_id','firstname','lastname','create_time','last_modified','trashed')
	* is mappped into 
	* array ($student_id,$class_id,$firstname,$lastname,$create_time,$last_modified,$trashed)
	* @return 1 if data was inserted,0 otherwise
	* if redundancy check is true, it inserts if the record if it never existed else.
	* if the record exists, it returns the number of times the record exists on the relation
	*/
	public function insert($student_id,$class_id,$firstname,$lastname,$create_time,$last_modified,$trashed,$redundancy_check= false, $printSQL = false) {
		$columns = array('student_id','class_id','firstname','lastname','create_time','last_modified','trashed');
		$records = array($student_id,$class_id,$firstname,$lastname,$create_time,$last_modified,$trashed);
		return $this->students->insert_prepared_records($student_id,$class_id,$firstname,$lastname,$create_time,$last_modified,$trashed,$redundancy_check,$printSQL );
	}


 	/**
     * @param $distinct
     * @param string $extraSQL
     * @return string
     */
	public function query($distinct,$extraSQL=""){

		$columns = $records = array ();
		$queried_students = $this->students->fetch_assoc_in_students ($distinct, $columns, $records,$extraSQL );

		if($this->build == "eng-build"){
			return $this->query_eng_build($queried_students);
		}
		if($this->build == "user-build"){
			return $this->query_user_build($queried_students);
		}
	}
/**
     * Inserts records in a relation
     * The records are inserted in the relation columns in the order they are arranged in the array
     *
     * @param $records
     * @param bool $printSQL
     * @return bool|mysqli_result
     * @throws NullabilityException
     */
    public function insert_raw($records, $printSQL = false)
    {
        return $this->students->insert_raw($records, $printSQL);
    }

    /**
     * Inserts records in a relation
     * The records are matched alongside the columns in the relation
         * @param array $columns
         * @param array $records
         * @param bool $redundancy_check
         * @param bool $printSQL
         * @return mixed
         */
        public function insert_records_to_students(Array $columns, Array $records,$redundancy_check = false, $printSQL = false){
            return $this->students->insert_records_to_students($columns, $records,$redundancy_check,$printSQL);
        }

     /**
        * Performs a raw Query
        * @param $sql string sql to execute
        * @return string sql results
        * @throws \app\libs\marvik\libs\database\core\mysql\NullabilityException
        */
	public function rawQuery($sql){

		$queried_students = $this->students->get_database_utils()->rawQuery($sql);

		if($this->build == "eng-build"){
			return $this->query_eng_build($queried_students);
		}
		if($this->build == "user-build"){
			return $this->query_user_build($queried_students);
		}
	}

	public function query_eng_build($queried_students){
		if($this->client == "web-desktop"){
			return $this->export_query_html($queried_students);
		}
		if($this->client == "mobile-android"){
			return $this->export_query_json($queried_students);
		}
	}
	public function query_user_build($queried_students){
		if($this->client == "web-desktop"){
			return $this->export_query_html($queried_students);
		}
		if($this->client == "mobile-android"){
			return $this->export_query_json($queried_students);
		}
	}
	public function export_query_json($queried_students){
		$query_json = json_encode($queried_students);
		return $query_json;
	}
	public function export_query_html($queried_students){
		$query_html = "";
		foreach ( $queried_students as $students_row_items ) {
			$query_html .= $this->process_query_for_html_export ( $students_row_items );
		}
		return $query_html;
	}

	private function process_query_for_html_export ( $students_row_items ){
		$html_export ='<div style="padding:10px;margin:10px;border:2px solid black;"><h3>'  .$this->table.  '</h3>';
		
		$student_id = $students_row_items ['student_id'];
	if ($student_id  != null) {
	$html_export .= $this->parseHtmlExport ( 'student_id', $student_id  );
}
$class_id = $students_row_items ['class_id'];
	if ($class_id  != null) {
	$html_export .= $this->parseHtmlExport ( 'class_id', $class_id  );
}
$firstname = $students_row_items ['firstname'];
	if ($firstname  != null) {
	$html_export .= $this->parseHtmlExport ( 'firstname', $firstname  );
}
$lastname = $students_row_items ['lastname'];
	if ($lastname  != null) {
	$html_export .= $this->parseHtmlExport ( 'lastname', $lastname  );
}
$create_time = $students_row_items ['create_time'];
	if ($create_time  != null) {
	$html_export .= $this->parseHtmlExport ( 'create_time', $create_time  );
}
$last_modified = $students_row_items ['last_modified'];
	if ($last_modified  != null) {
	$html_export .= $this->parseHtmlExport ( 'last_modified', $last_modified  );
}
$trashed = $students_row_items ['trashed'];
	if ($trashed  != null) {
	$html_export .= $this->parseHtmlExport ( 'trashed', $trashed  );
}

		
		return $html_export .='</div>';
	}

	private function parseHtmlExport($title,$message){
		return '<div style="width:400px;"><h4>' . $title . '</h4><hr /><p>' . $message . '</p></div>';
	}
} ?>
