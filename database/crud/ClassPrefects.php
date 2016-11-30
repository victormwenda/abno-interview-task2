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
* ClassPrefects
*  
* Low level class for manipulating the data in the table class_prefects
*
* This source code is auto-generated
*
* @author Victor Mwenda
* Email : vmwenda.vm@gmail.com
* Phone : +254(0)718034449
*/
class ClassPrefects {

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
	* private class variable $role_start_date
	*/
	private $_roleStartDate;
	
	/**
	* returns the value of $roleStartDate
	*
	* @return object(int|string) roleStartDate
	*/
	public function _getrole_start_date() {
		return $this->_roleStartDate;
	}
	
	/**
	* sets the value of $_roleStartDate
	*
	* @param roleStartDate
	*/
	public function _setrole_start_date($roleStartDate) {
		$this->_roleStartDate = $roleStartDate;
	}
	/**
	* sets the value of $_roleStartDate
	*
	* @param roleStartDate
	* @return object ( this class)
	*/
	public function setrole_start_date($roleStartDate) {
		$this->_setrole_start_date($roleStartDate);
		return $this;
	}
	
	
	/**
	* private class variable $role_end_date
	*/
	private $_roleEndDate;
	
	/**
	* returns the value of $roleEndDate
	*
	* @return object(int|string) roleEndDate
	*/
	public function _getrole_end_date() {
		return $this->_roleEndDate;
	}
	
	/**
	* sets the value of $_roleEndDate
	*
	* @param roleEndDate
	*/
	public function _setrole_end_date($roleEndDate) {
		$this->_roleEndDate = $roleEndDate;
	}
	/**
	* sets the value of $_roleEndDate
	*
	* @param roleEndDate
	* @return object ( this class)
	*/
	public function setrole_end_date($roleEndDate) {
		$this->_setrole_end_date($roleEndDate);
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
     * based on the value of $student_id,$role_start_date,$role_end_date,$trashed passed to the function
     *
     * @param $student_id,$role_start_date,$role_end_date,$trashed
     * @return object (student_id)| null
     */
	public function getstudent_id($student_id,$role_start_date,$role_end_date,$trashed) {
		$columns = array ('student_id','role_start_date','role_end_date','trashed');
		$records = array ($student_id,$role_start_date,$role_end_date,$trashed);
		$student_id_ = $this->query_from_class_prefects ( $columns, $records );
		return sizeof($student_id_)>0 ? $student_id_ [0] ['student_id'] : null;
	}
	
	
	/**
     * Performs a database query and returns the value of role_start_date 
     * based on the value of $student_id passed to the function
     *
     * @param $student_id
     * @return object (role_start_date)| null
     */
	public function getrole_start_date($student_id) {
		$columns = array ('student_id');
		$records = array ($student_id);
		$role_start_date_ = $this->query_from_class_prefects ( $columns, $records );
		return sizeof($role_start_date_)>0 ? $role_start_date_ [0] ['role_start_date'] : null;
	}
	
	
	/**
     * Performs a database query and returns the value of role_end_date 
     * based on the value of $student_id passed to the function
     *
     * @param $student_id
     * @return object (role_end_date)| null
     */
	public function getrole_end_date($student_id) {
		$columns = array ('student_id');
		$records = array ($student_id);
		$role_end_date_ = $this->query_from_class_prefects ( $columns, $records );
		return sizeof($role_end_date_)>0 ? $role_end_date_ [0] ['role_end_date'] : null;
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
		$trashed_ = $this->query_from_class_prefects ( $columns, $records );
		return sizeof($trashed_)>0 ? $trashed_ [0] ['trashed'] : null;
	}
	

	
	/**
	* Inserts data into the table[class_prefects] in the order below
	* array ('student_id','role_start_date','role_end_date','trashed')
	* is mappped into 
	* array ($student_id,$role_start_date,$role_end_date,$trashed)
	* @return int 1 if data was inserted,0 otherwise
	* if redundancy check is true, it inserts if the record if it never existed else.
	* if the record exists, it returns the number of times the record exists on the relation
	*/
	public function insert_prepared_records($student_id,$role_start_date,$role_end_date,$trashed,$redundancy_check= false, $printSQL = false) {
		$columns = array('student_id','role_start_date','role_end_date','trashed');
		$records = array($student_id,$role_start_date,$role_end_date,$trashed);
		return $this->insert_records_to_class_prefects ( $columns, $records,$redundancy_check, $printSQL );
	}

	
	/**
	* Returns the table name. This is the owner of these crud functions.
	* The various crud functions directly affect this table
	* @return string table name -> 'class_prefects' 
	*/
	public static function get_table() {
		return 'class_prefects';
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
     * Used  to calculate the number of times a record exists in the table class_prefects
     * It returns the number of times a record exists exists in the table class_prefects
     * @param array $columns
     * @param array $records
     * @param bool $printSQL
     * @return mixed
     */
	public function is_exists(Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->is_exists ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
     * Inserts data into the table class_prefects
     * if redundancy check is true, it inserts if the record if it never existed else.
     * if the record exists, it returns the number of times the record exists on the relation
     *
     * @param array $columns
     * @param array $records
     * @param bool $redundancy_check
     * @param bool $printSQL
     * @return mixed
     */
	public function insert_records_to_class_prefects(Array $columns, Array $records,$redundancy_check = false, $printSQL = false) {
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
	 * Deletes all the records that meets the passed criteria from the table class_prefects
	 * @param array $columns
	 * @param array $records
	 * @param bool $printSQL
	 * @return number of deleted rows
	 */
	public function delete_record_from_class_prefects(Array $columns, Array $records, $printSQL = false) {
		return $this->delete_record ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	 * Updates all the records that meets the passed criteria from the table class_prefects
	 * 
	 * @param array $columns
	 * @param array $records
	 * @param array $where_columns
	 * @param array $where_records
	 * @param bool $printSQL
	 * @return number of updated rows
	 */
	public function update_record_in_class_prefects(Array $columns, Array $records, Array $where_columns, Array $where_records, $printSQL = false) {
		return $this->update_record ( $this->get_table (), $columns, $records, $where_columns, $where_records, $printSQL );
	}
	
	/**
	 * Gets an Associative array of the records in the table 'class_prefects' that meets the passed criteria
	 *
	 * @param $distinct
	 * @param array $columns
	 * @param array $records
	 * @param string $extraSQL
	 * @param bool $printSQL
	 * @return array|mixed associative
	 */
	public function fetch_assoc_in_class_prefects($distinct, Array $columns, Array $records, $extraSQL="", $printSQL = false) {
		return $this->fetch_assoc ( $distinct, $this->get_table (),$columns, $records, $extraSQL , $printSQL );
	}
	
	/**
	 * Gets an Associative array of the records in the table class_prefects that meets the passed criteria
	 *
	 * @param array $columns
	 * @param array $records
	 * @param string $extraSQL
	 * @param bool $printSQL
	 * @return array|mixed associative
	 */
	public function query_from_class_prefects(Array $columns, Array $records,$extraSQL="",  $printSQL = false) {
		return $this->query ( $this->get_table (), $columns, $records,$extraSQL,$printSQL );
	}
	
	/**
	 * Gets an Associative array of the records in the table class_prefects that meets the passed distinct criteria
	 * 
	 * @param array $columns
	 * @param array $records
	 * @param string $extraSQL
	 * @param bool $printSQL
	 * @return array|mixed associative
	 */
	public function query_distinct_from_class_prefects(Array $columns, Array $records,$extraSQL="",  $printSQL = false) {
		return $this->query_distinct ( $this->get_table (), $columns, $records,$extraSQL,$printSQL );
	}
	
	/**
	 * Performs a search in the table class_prefects that meets the passed criteria
	 * 
	 * @param array $columns
	 * @param array $records
	 * @param string $extraSQL
	 * @param bool $printSQL
	 * @return array|mixed associative
	 */
	public function search_in_class_prefects(Array $columns, Array $records,$extraSQL="", $printSQL = false) {
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
	 * Deletes all the records that meets the passed criteria from the table [class_prefects]
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
     * Inserts data into the table class_prefects
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
     * Updates all the records that meets the passed criteria from the table class_prefects
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
     * Gets an Associative array of the records in the table class_prefects that meets the passed criteria
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
     * Gets an Associative array of the records in the table class_prefects  that meets the passed criteria
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
     * Gets an Associative array of the records in the table class_prefects that meets the distinct passed criteria
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
     * Performs a search and returns an associative array of the records in the table class_prefects  that meets the passed criteria
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
