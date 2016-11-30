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
* Schools
*  
* Low level class for manipulating the data in the table schools
*
* This source code is auto-generated
*
* @author Victor Mwenda
* Email : vmwenda.vm@gmail.com
* Phone : +254(0)718034449
*/
class Schools {

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
	* private class variable $school_id
	*/
	private $_schoolId;
	
	/**
	* returns the value of $schoolId
	*
	* @return object(int|string) schoolId
	*/
	public function _getschool_id() {
		return $this->_schoolId;
	}
	
	/**
	* sets the value of $_schoolId
	*
	* @param schoolId
	*/
	public function _setschool_id($schoolId) {
		$this->_schoolId = $schoolId;
	}
	/**
	* sets the value of $_schoolId
	*
	* @param schoolId
	* @return object ( this class)
	*/
	public function setschool_id($schoolId) {
		$this->_setschool_id($schoolId);
		return $this;
	}
	
	
	/**
	* private class variable $school_name
	*/
	private $_schoolName;
	
	/**
	* returns the value of $schoolName
	*
	* @return object(int|string) schoolName
	*/
	public function _getschool_name() {
		return $this->_schoolName;
	}
	
	/**
	* sets the value of $_schoolName
	*
	* @param schoolName
	*/
	public function _setschool_name($schoolName) {
		$this->_schoolName = $schoolName;
	}
	/**
	* sets the value of $_schoolName
	*
	* @param schoolName
	* @return object ( this class)
	*/
	public function setschool_name($schoolName) {
		$this->_setschool_name($schoolName);
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
     * Performs a database query and returns the value of school_id 
     * based on the value of $school_id,$school_name,$create_time,$last_modified,$trashed passed to the function
     *
     * @param $school_id,$school_name,$create_time,$last_modified,$trashed
     * @return object (school_id)| null
     */
	public function getschool_id($school_id,$school_name,$create_time,$last_modified,$trashed) {
		$columns = array ('school_id','school_name','create_time','last_modified','trashed');
		$records = array ($school_id,$school_name,$create_time,$last_modified,$trashed);
		$school_id_ = $this->query_from_schools ( $columns, $records );
		return sizeof($school_id_)>0 ? $school_id_ [0] ['school_id'] : null;
	}
	
	
	/**
     * Performs a database query and returns the value of school_name 
     * based on the value of $school_id passed to the function
     *
     * @param $school_id
     * @return object (school_name)| null
     */
	public function getschool_name($school_id) {
		$columns = array ('school_id');
		$records = array ($school_id);
		$school_name_ = $this->query_from_schools ( $columns, $records );
		return sizeof($school_name_)>0 ? $school_name_ [0] ['school_name'] : null;
	}
	
	
	/**
     * Performs a database query and returns the value of create_time 
     * based on the value of $school_id passed to the function
     *
     * @param $school_id
     * @return object (create_time)| null
     */
	public function getcreate_time($school_id) {
		$columns = array ('school_id');
		$records = array ($school_id);
		$create_time_ = $this->query_from_schools ( $columns, $records );
		return sizeof($create_time_)>0 ? $create_time_ [0] ['create_time'] : null;
	}
	
	
	/**
     * Performs a database query and returns the value of last_modified 
     * based on the value of $school_id passed to the function
     *
     * @param $school_id
     * @return object (last_modified)| null
     */
	public function getlast_modified($school_id) {
		$columns = array ('school_id');
		$records = array ($school_id);
		$last_modified_ = $this->query_from_schools ( $columns, $records );
		return sizeof($last_modified_)>0 ? $last_modified_ [0] ['last_modified'] : null;
	}
	
	
	/**
     * Performs a database query and returns the value of trashed 
     * based on the value of $school_id passed to the function
     *
     * @param $school_id
     * @return object (trashed)| null
     */
	public function gettrashed($school_id) {
		$columns = array ('school_id');
		$records = array ($school_id);
		$trashed_ = $this->query_from_schools ( $columns, $records );
		return sizeof($trashed_)>0 ? $trashed_ [0] ['trashed'] : null;
	}
	

	
	/**
	* Inserts data into the table[schools] in the order below
	* array ('school_id','school_name','create_time','last_modified','trashed')
	* is mappped into 
	* array ($school_id,$school_name,$create_time,$last_modified,$trashed)
	* @return int 1 if data was inserted,0 otherwise
	* if redundancy check is true, it inserts if the record if it never existed else.
	* if the record exists, it returns the number of times the record exists on the relation
	*/
	public function insert_prepared_records($school_id,$school_name,$create_time,$last_modified,$trashed,$redundancy_check= false, $printSQL = false) {
		$columns = array('school_id','school_name','create_time','last_modified','trashed');
		$records = array($school_id,$school_name,$create_time,$last_modified,$trashed);
		return $this->insert_records_to_schools ( $columns, $records,$redundancy_check, $printSQL );
	}

	
	/**
	* Returns the table name. This is the owner of these crud functions.
	* The various crud functions directly affect this table
	* @return string table name -> 'schools' 
	*/
	public static function get_table() {
		return 'schools';
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
     * Used  to calculate the number of times a record exists in the table schools
     * It returns the number of times a record exists exists in the table schools
     * @param array $columns
     * @param array $records
     * @param bool $printSQL
     * @return mixed
     */
	public function is_exists(Array $columns, Array $records, $printSQL = false) {
		return $this->get_database_utils ()->is_exists ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
     * Inserts data into the table schools
     * if redundancy check is true, it inserts if the record if it never existed else.
     * if the record exists, it returns the number of times the record exists on the relation
     *
     * @param array $columns
     * @param array $records
     * @param bool $redundancy_check
     * @param bool $printSQL
     * @return mixed
     */
	public function insert_records_to_schools(Array $columns, Array $records,$redundancy_check = false, $printSQL = false) {
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
	 * Deletes all the records that meets the passed criteria from the table schools
	 * @param array $columns
	 * @param array $records
	 * @param bool $printSQL
	 * @return number of deleted rows
	 */
	public function delete_record_from_schools(Array $columns, Array $records, $printSQL = false) {
		return $this->delete_record ( $this->get_table (), $columns, $records, $printSQL );
	}
	
	/**
	 * Updates all the records that meets the passed criteria from the table schools
	 * 
	 * @param array $columns
	 * @param array $records
	 * @param array $where_columns
	 * @param array $where_records
	 * @param bool $printSQL
	 * @return number of updated rows
	 */
	public function update_record_in_schools(Array $columns, Array $records, Array $where_columns, Array $where_records, $printSQL = false) {
		return $this->update_record ( $this->get_table (), $columns, $records, $where_columns, $where_records, $printSQL );
	}
	
	/**
	 * Gets an Associative array of the records in the table 'schools' that meets the passed criteria
	 *
	 * @param $distinct
	 * @param array $columns
	 * @param array $records
	 * @param string $extraSQL
	 * @param bool $printSQL
	 * @return array|mixed associative
	 */
	public function fetch_assoc_in_schools($distinct, Array $columns, Array $records, $extraSQL="", $printSQL = false) {
		return $this->fetch_assoc ( $distinct, $this->get_table (),$columns, $records, $extraSQL , $printSQL );
	}
	
	/**
	 * Gets an Associative array of the records in the table schools that meets the passed criteria
	 *
	 * @param array $columns
	 * @param array $records
	 * @param string $extraSQL
	 * @param bool $printSQL
	 * @return array|mixed associative
	 */
	public function query_from_schools(Array $columns, Array $records,$extraSQL="",  $printSQL = false) {
		return $this->query ( $this->get_table (), $columns, $records,$extraSQL,$printSQL );
	}
	
	/**
	 * Gets an Associative array of the records in the table schools that meets the passed distinct criteria
	 * 
	 * @param array $columns
	 * @param array $records
	 * @param string $extraSQL
	 * @param bool $printSQL
	 * @return array|mixed associative
	 */
	public function query_distinct_from_schools(Array $columns, Array $records,$extraSQL="",  $printSQL = false) {
		return $this->query_distinct ( $this->get_table (), $columns, $records,$extraSQL,$printSQL );
	}
	
	/**
	 * Performs a search in the table schools that meets the passed criteria
	 * 
	 * @param array $columns
	 * @param array $records
	 * @param string $extraSQL
	 * @param bool $printSQL
	 * @return array|mixed associative
	 */
	public function search_in_schools(Array $columns, Array $records,$extraSQL="", $printSQL = false) {
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
	 * Deletes all the records that meets the passed criteria from the table [schools]
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
     * Inserts data into the table schools
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
     * Updates all the records that meets the passed criteria from the table schools
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
     * Gets an Associative array of the records in the table schools that meets the passed criteria
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
     * Gets an Associative array of the records in the table schools  that meets the passed criteria
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
     * Gets an Associative array of the records in the table schools that meets the distinct passed criteria
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
     * Performs a search and returns an associative array of the records in the table schools  that meets the passed criteria
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
