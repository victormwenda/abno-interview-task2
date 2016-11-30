<?php

	namespace app\database\crud;
 
	use database\core\mysql\DatabaseUtils;
    use database\core\mysql\InvalidColumnValueMatchException;
    use database\core\mysql\NullabilityException;

	/**
	* THIS SOURCE CODE WAS AUTOMATICALLY GENERATED ON Wed 01:38:58  30/11/2016
	* 
	*
	* DATABASE CRUD GENERATOR IS AN OPEN SOURCE PROJECT. TO IMPROVE ON THIS PROJECT BY
	* ADDING MODULES, FIXING BUGS e.t.c GET THE SOURCE CODE FROM GIT (https://github.com/marviktintor/dbcrudgen/)
	* 
	* DATABASE CRUD GENERATOR INFO:
	* 
	* DEVELOPER : VICTOR MWENDA
	* VERSION : DEVELOPER PREVIEW 0.1
	* SUPPORTED LANGUAGES : PHP
	* DEVELOPER EMAIL : vmwenda.vm@gmail.com
	* 
	*/


/**
*  
* Students
*  
* Low level class for manipulating the data in the table students
*
* This source code is auto-generated
*
* @author Victor Mwenda
* Email : vmwenda.vm@gmail.com
* Phone : +254(0)718034449
*/
class Students {

	private $databaseUtils;
	private $action;
	private $client;
	
	public function __construct($databaseUtils, $action = "", $client = "") {
		$this->init($databaseUtils);
	}
	
	//Initializes
	public function init($databaseUtils) {
		
		//Init
		$this->databaseUtils = $databaseUtils;
		
	}
	
		
	/**
	* private class variable $student_id
	*/
	private $_studentId;
	
	/**
	* returns the value of $studentId
	*
	* @return object(int|string) studentId
	*/
	public function _getstudent_id() {
		return $this->_studentId;
	}
	
	/**
	* sets the value of $_studentId
	*
	* @param studentId
	*/
	public function _setstudent_id($studentId) {
		$this->_studentId = $studentId;
	}
	/**
	* sets the value of $_studentId
	*
	* @param studentId
	* @return object ( this class)
	*/
	public function setstudent_id($studentId) {
		$this->_setstudent_id($studentId);
		return $this;
	}
	
	
	/**
	* private class variable $class_id
	*/
	private $_classId;
	
	/**
	* returns the value of $classId
	*
	* @return object(int|string) classId
	*/
	public function _getclass_id() {
		return $this->_classId;
	}
	
	/**
	* sets the value of $_classId
	*
	* @param classId
	*/
	public function _setclass_id($classId) {
		$this->_classId = $classId;
	}
	/**
	* sets the value of $_classId
	*
	* @param classId
	* @return object ( this class)
	*/
	public function setclass_id($classId) {
		$this->_setclass_id($classId);
		return $this;
	}
	
	
	/**
	* private class variable $firstname
	*/
	private $_firstname;
	
	/**
	* returns the value of $firstname
	*
	* @return object(int|string) firstname
	*/
	public function _getfirstname() {
		return $this->_firstname;
	}
	
	/**
	* sets the value of $_firstname
	*
	* @param firstname
	*/
	public function _setfirstname($firstname) {
		$this->_firstname = $firstname;
	}
	/**
	* sets the value of $_firstname
	*
	* @param firstname
	* @return object ( this class)
	*/
	public function setfirstname($firstname) {
		$this->_setfirstname($firstname);
		return $this;
	}
	
	
	/**
	* private class variable $lastname
	*/
	private $_lastname;
	
	/**
	* returns the value of $lastname
	*
	* @return object(int|string) lastname
	*/
	public function _getlastname() {
		return $this->_lastname;
	}
	
	/**
	* sets the value of $_lastname
	*
	* @param lastname
	*/
	public function _setlastname($lastname) {
		$this->_lastname = $lastname;
	}
	/**
	* sets the value of $_lastname
	*
	* @param lastname
	* @return object ( this class)
	*/
	public function setlastname($lastname) {
		$this->_setlastname($lastname);
		return $this;
	}
	
	
	/**
	* private class variable $create_time
	*/
	private $_createTime;
	
	/**
	* returns the value of $createTime
	*
	* @return object(int|string) createTime
	*/
	public function _getcreate_time() {
		return $this->_createTime;
	}
	
	/**
	* sets the value of $_createTime
	*
	* @param createTime
	*/
	public function _setcreate_time($createTime) {
		$this->_createTime = $createTime;
	}
	/**
	* sets the value of $_createTime
	*
	* @param createTime
	* @return object ( this class)
	*/
	public function setcreate_time($createTime) {
		$this->_setcreate_time($createTime);
		return $this;
	}
	
	
	/**
	* private class variable $last_modified
	*/
	private $_lastModified;
	
	/**
	* returns the value of $lastModified
	*
	* @return object(int|string) lastModified
	*/
	public function _getlast_modified() {
		return $this->_lastModified;
	}
	
	/**
	* sets the value of $_lastModified
	*
	* @param lastModified
	*/
	public function _setlast_modified($lastModified) {
		$this->_lastModified = $lastModified;
	}
	/**
	* sets the value of $_lastModified
	*
	* @param lastModified
	* @return object ( this class)
	*/
	public function setlast_modified($lastModified) {
		$this->_setlast_modified($lastModified);
		return $this;
	}
	
	
	/**
	* private class variable $trashed
	*/
	private $_trashed;
	
	/**
	* returns the value of $trashed
	*
	* @return object(int|string) trashed
	*/
	public function _gettrashed() {
		return $this->_trashed;
	}
	
	/**
	* sets the value of $_trashed
	*
	* @param trashed
	*/
	public function _settrashed($trashed) {
		$this->_trashed = $trashed;
	}
	/**
	* sets the value of $_trashed
	*
	* @param trashed
	* @return object ( this class)
	*/
	public function settrashed($trashed) {
		$this->_settrashed($trashed);
		return $this;
	}
	

		
		
	/**
     * Performs a database query and returns the value of student_id 
     * based on the value of $student_id,$class_id,$firstname,$lastname,$create_time,$last_modified,$trashed passed to the function
     *
     * @param $student_id,$class_id,$firstname,$lastname,$create_time,$last_modified,$trashed
     * @return object (student_id)| null
     */
	public function getstudent_id($student_id,$class_id,$firstname,$lastname,$create_time,$last_modified,$trashed) {
		$columns = array ('student_id','class_id','firstname','lastname','create_time','last_modified','trashed');
		$records = array ($student_id,$class_id,$firstname,$lastname,$create_time,$last_modified,$trashed);
		$student_id_ = $this->query_from_students ( $columns, $records );
		return sizeof($student_id_)>0 ? $student_id_ [0] ['student_id'] : null;
	}
	
	
	/**
     * Performs a database query and returns the value of class_id 
     * based on the value of $student_id passed to the function
     *
     * @param $student_id
     * @return object (class_id)| null
     */
	public function getclass_id($student_id) {
		$columns = array ('student_id');
		$records = array ($student_id);
		$class_id_ = $this->query_from_students ( $columns, $records );
		return sizeof($class_id_)>0 ? $class_id_ [0] ['class_id'] : null;
	}
	
	
	/**
     * Performs a database query and returns the value of firstname 
     * based on the value of $student_id passed to the function
     *
     * @param $student_id
     * @return object (firstname)| null
     */
	public function getfirstname($student_id) {
		$columns = array ('student_id');
		$records = array ($student_id);
		$firstname_ = $this->query_from_students ( $columns, $records );
		return sizeof($firstname_)>0 ? $firstname_ [0] ['firstname'] : null;
	}
	
	
	/**
     * Performs a database query and returns the value of lastname 
     * based on the value of $student_id passed to the function
     *
     * @param $student_id
     * @return object (lastname)| null
     */
	public function getlastname($student_id) {
		$columns = array ('student_id');
		$records = array ($student_id);
		$lastname_ = $this->query_from_students ( $columns, $records );
		return sizeof($lastname_)>0 ? $lastname_ [0] ['lastname'] : null;
	}
	
	
	/**
     * Performs a database query and returns the value of create_time 
     * based on the value of $student_id passed to the function
     *
     * @param $student_id
     * @return object (create_time)| null
     */
	public function getcreate_time($student_id) {
		$columns = array ('student_id');
		$records = array ($student_id);
		$create_time_ = $this->query_from_students ( $columns, $records );
		return sizeof($create_time_)>0 ? $create_time_ [0] ['create_time'] : null;
	}
	
	
	/**
     * Performs a database query and returns the value of last_modified 
     * based on the value of $student_id passed to the function
     *
     * @param $student_id
     * @return object (last_modified)| null
     */
	public function getlast_modified($student_id) {
		$columns = array ('student_id');
		$records = array ($student_id);
		$last_modified_ = $this->query_from_students ( $columns, $records );
		return sizeof($last_modified_)>0 ? $last_modified_ [0] ['last_modified'] : null;
	}
	
	
	/**
     * Performs a database query and returns the value of trashed 
     * based on the value of $student_id passed to the function
     *
     * @param $student_id
     * @return object (trashed)| null
     */
	public function gettrashed($student_id) {
		$columns = array ('student_id');
		$records = array ($student_id);
		$trashed_ = $this->query_from_students ( $columns, $records );
		return sizeof($trashed_)>0 ? $trashed_ [0] ['trashed'] : null;
	}
	

	
	/**
	* Inserts data into the table[students] in the order below
	* array ('student_id','class_id','firstname','lastname','create_time','last_modified','trashed')
	* is mappped into 
	* array ($student_id,$class_id,$firstname,$lastname,$create_time,$last_modified,$trashed)
	* @return int 1 if data was inserted,0 otherwise
	* if redundancy check is true, it inserts if the record if it never existed else.
	* if the record exists, it returns the number of times the record exists on the relation
	*/
	public function insert_prepared_records($student_id,$class_id,$firstname,$lastname,$create_time,$last_modified,$trashed,$redundancy_check= false, $printSQL = false) {
		$columns = array('student_id','class_id','firstname','lastname','create_time','last_modified','trashed');
		$records = array($student_id,$class_id,$firstname,$lastname,$create_time,$last_modified,$trashed);
		return $this->insert_records_to_students ( $columns, $records,$redundancy_check, $printSQL );
	}

	
	/**
	* Returns the table name. This is the owner of these crud functions.
	* The various crud functions directly affect this table
	* @return string table name -> 'students' 
	*/
	public static function get_table() {
		return 'students';
	}
	
	/**
	* This action represents the intended database transaction
	*
	* @return string the set action.
	*/
	private function get_action() {
		return $this->action;
	}
	
	/**
	* Returns the client doing transactions
	*
	* @return string the client
	*/
	private function get_client() {
		return $this->client;
	}
	
	/**
     * Used  to calculate the number of times a record exists in the table students
     * It returns the number of times a record exists exists in the table students
     * @param array $columns
     * @param array $records
     * @param bool $printSQL
     * @return mixed
     */
	public function is_exists(Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->is_exists ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
     * Inserts data into the table students
     * if redundancy check is true, it inserts if the record if it never existed else.
     * if the record exists, it returns the number of times the record exists on the relation
     *
     * @param array $columns
     * @param array $records
     * @param bool $redundancy_check
     * @param bool $printSQL
     * @return mixed
     */
	public function insert_records_to_students(Array $columns, Array $records,$redundancy_check = false, $printSQL = false) {
		return $this->insert_records ( $this->get_table (), $columns, $records,$redundancy_check, $printSQL );
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
            return $this->get_database_utils()->insert_raw_records($this->get_table(), $records, $printSQL);
        }
	/**
	 * Deletes all the records that meets the passed criteria from the table students
	 * @param array $columns
	 * @param array $records
	 * @param bool $printSQL
	 * @return number of deleted rows
	 */
	public function delete_record_from_students(Array $columns, Array $records, $printSQL = false) {
		return $this->delete_record ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	 * Updates all the records that meets the passed criteria from the table students
	 * 
	 * @param array $columns
	 * @param array $records
	 * @param array $where_columns
	 * @param array $where_records
	 * @param bool $printSQL
	 * @return number of updated rows
	 */
	public function update_record_in_students(Array $columns, Array $records, Array $where_columns, Array $where_records, $printSQL = false) {
		return $this->update_record ( $this->get_table (), $columns, $records, $where_columns, $where_records, $printSQL );
	}
	
	/**
	 * Gets an Associative array of the records in the table 'students' that meets the passed criteria
	 *
	 * @param $distinct
	 * @param array $columns
	 * @param array $records
	 * @param string $extraSQL
	 * @param bool $printSQL
	 * @return array|mixed associative
	 */
	public function fetch_assoc_in_students($distinct, Array $columns, Array $records, $extraSQL="", $printSQL = false) {
		return $this->fetch_assoc ( $distinct, $this->get_table (),$columns, $records, $extraSQL , $printSQL );
	}
	
	/**
	 * Gets an Associative array of the records in the table students that meets the passed criteria
	 *
	 * @param array $columns
	 * @param array $records
	 * @param string $extraSQL
	 * @param bool $printSQL
	 * @return array|mixed associative
	 */
	public function query_from_students(Array $columns, Array $records,$extraSQL="",  $printSQL = false) {
		return $this->query ( $this->get_table (), $columns, $records,$extraSQL,$printSQL );
	}
	
	/**
	 * Gets an Associative array of the records in the table students that meets the passed distinct criteria
	 * 
	 * @param array $columns
	 * @param array $records
	 * @param string $extraSQL
	 * @param bool $printSQL
	 * @return array|mixed associative
	 */
	public function query_distinct_from_students(Array $columns, Array $records,$extraSQL="",  $printSQL = false) {
		return $this->query_distinct ( $this->get_table (), $columns, $records,$extraSQL,$printSQL );
	}
	
	/**
	 * Performs a search in the table students that meets the passed criteria
	 * 
	 * @param array $columns
	 * @param array $records
	 * @param string $extraSQL
	 * @param bool $printSQL
	 * @return array|mixed associative
	 */
	public function search_in_students(Array $columns, Array $records,$extraSQL="", $printSQL = false) {
		return $this->search ( $this->get_table (), $columns, $records,$extraSQL, $printSQL );
	}
	
	/**
	* Get Database Utils
	*  
	* @return DatabaseUtils $this->databaseUtils
	*/
	public function get_database_utils() {
		return $this->databaseUtils;
	}
	
	
	/**
	 * Deletes all the records that meets the passed criteria from the table [students]
	 *
	 * @param $table
	 * @param array $columns
	 * @param array $records
	 * @param bool $printSQL
	 * @return bool|int|\mysqli_result number of deleted rows
	* @throws InvalidColumnValueMatchException
    * @throws NullabilityException
	 */
	private function delete_record($table, Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->delete_record ( $table, $columns, $records, $printSQL );
	}
	
	
	/**
     * Inserts data into the table students
     *
     * if redundancy check is true, it inserts if the record if it never existed else.
     * if the record exists, it returns the number of times the record exists on the relation
     * @param $table
     * @param array $columns
     * @param array $records
     * @param bool $redundancy_check
     * @param bool $printSQL
     * @return bool|mixed|\mysqli_result the number of times the record exists
   * @throws NullabilityException
     */
	private function insert_records($table, Array $columns, Array $records,$redundancy_check = false, $printSQL = false) {
		if($redundancy_check){
			if($this->is_exists($columns, $records) == 0){
				return $this->get_database_utils ()->insert_records ( $table, $columns, $records, $printSQL );
			} else return $this->is_exists($columns, $records);
		}else{
			return $this->get_database_utils ()->insert_records ( $table, $columns, $records, $printSQL );
		}
		
	}
	
	/**
     * Updates all the records that meets the passed criteria from the table students
     * @param $table
     * @param array $columns
     * @param array $records
     * @param array $where_columns
     * @param array $where_records
     * @param bool $printSQL
     * @return bool|\mysqli_result number of updated rows
   * @throws NullabilityException
     */
	private function update_record($table, Array $columns, Array $records, Array $where_columns, Array $where_records, $printSQL = false) {
		return $this->get_database_utils ()->update_record ( $table, $columns, $records, $where_columns, $where_records, $printSQL );
	}
	
	/**
     * Gets an Associative array of the records in the table students that meets the passed criteria
     * associative array of the records that are found after performing the query
     * @param $distinct
     * @param $table
     * @param array $columns
     * @param array $records
     * @param string $extraSQL
     * @param bool $printSQL
     * @return array|null
    * @throws InvalidColumnValueMatchException
   * @throws NullabilityException
     */
	private function fetch_assoc($distinct, $table, Array $columns, Array $records, $extraSQL="", $printSQL = false) {
		return $this->get_database_utils ()->fetch_assoc ( $distinct, $table, $columns, $records,$extraSQL, $printSQL );
	}
	
	 /**
     * Gets an Associative array of the records in the table students  that meets the passed criteria
     *
     * @param $table
     * @param array $columns
     * @param array $records
     * @param string $extraSQL
     * @param bool $printSQL
     * @return array
     */
	private function query($table, Array $columns, Array $records,$extraSQL="",$printSQL = false) {
		return $this->get_database_utils ()->query ( $table, $columns, $records,$extraSQL, $printSQL );
	}
	/**
     * Gets an Associative array of the records in the table students that meets the distinct passed criteria
     * @param $table
     * @param array $columns
     * @param array $records
     * @param string $extraSQL
     * @param bool $printSQL
     * @return array
     */
	private function query_distinct($table, Array $columns, Array $records,$extraSQL="",$printSQL = false) {
		return $this->get_database_utils ()->query_distinct ( $table, $columns, $records,$extraSQL, $printSQL );
	}
	
	 /**
     * Performs a search and returns an associative array of the records in the table students  that meets the passed criteria
     * 
     * @param $table
     * @param array $columns
     * @param array $records
     * @param string $extraSQL
     * @param bool $printSQL
     * @return array|null
    * @throws InvalidColumnValueMatchException
   * @throws NullabilityException
     */
	private function search($table, Array $columns, Array $records,$extraSQL="", $printSQL = false) {
		return $this->get_database_utils ()->search ( $table, $columns, $records, $extraSQL, $printSQL );
	}
}
?>
