<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 11/30/2016
 * Time: 1:40 PM
 */

namespace app\database;

use app\database\core\mysql\DatabaseActions;
use app\database\core\mysql\DatabaseConnection;
use app\database\core\mysql\DatabaseUtils;

use app\database\crud\Classes;
use app\database\crud\ClassPrefects;
use app\database\crud\Schools;
use app\database\crud\Students;

class DbWorker
{


    public function __construct()
    {
        include '../database/core-apis/DatabaseActions.php';
        include '../database/core-apis/DatabaseConnection.php';
        include '../database/core-apis/DatabaseUtils.php';

    }

    public function getSchoolsArray()
    {
        $databaseUtils = new DatabaseUtils();
        $data = array();
        $schools = new Schools($databaseUtils);
        $schoolsInfos = $schools->query_from_schools(array(), array());
        foreach ($schoolsInfos as $schoolsInfo) {
            $data[$schoolsInfo["school_id"]] = $schoolsInfo['school_name'];
        }
        return $data;
    }

    /**Return the current time stamp
     * @return false|string
     */
    public function getCurrentTimestamp()
    {
        return date("Y-m-d h:i:s", time());
    }

}