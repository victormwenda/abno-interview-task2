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

    private $databaseUtils;

    public function __construct()
    {
        $this->databaseUtils = new DatabaseUtils();
    }

    public static function getSchoolsArray()
    {
        $data = array();
        $schools = new Schools(DbWorker::getDatabaseUtils());
        $schoolsInfos = $schools->query_from_schools(array(), array());
        foreach ($schoolsInfos as $schoolsInfo) {
            $data["school_id"] = $schoolsInfo['school_name'];
        }
        var_dump($data);
    }

    public function getDatabaseUtils()
    {
        return $this->databaseUtils;
    }
}