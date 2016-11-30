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

    public function getClassesArray()
    {
        $databaseUtils = new DatabaseUtils();
        $data = array();
        $classes = new Classes($databaseUtils);
        $schools = new Schools($databaseUtils);
        $classesInfos = $classes->query_from_classes(array(), array());
        foreach ($classesInfos as $classesInfo) {
            $data[$classesInfo["class_id"]] = $classesInfo['class_name'] . " (" . $schools->getschool_name($classesInfo["school_id"]) . ") ";
        }
        return $data;
    }

    public function getStudentsArray()
    {
        $databaseUtils = new DatabaseUtils();
        $data = array();
        $classes = new Classes($databaseUtils);
        $schools = new Schools($databaseUtils);
        $students = new Students($databaseUtils);
        $studentsInfos = $students->query_from_students(array(), array());
        foreach ($studentsInfos as $studentsInfo) {
            $student_id = $studentsInfo['student_id'];
            $class_id = $students->getclass_id($student_id);
            $className = $classes->getclass_name($class_id);
            $school_id = $classes->getschool_id($class_id);
            $school_name = $schools->getschool_name($school_id);
            $student_full_name = $studentsInfo['firstname'] . " " . $studentsInfo['lastname'];
            $data[$student_id] = $student_full_name . " (" . $className . "->" . $school_name . ")";
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

    public function getSchoolName($school_id)
    {
        $databaseUtils = new DatabaseUtils();
        return (new Schools($databaseUtils))->getschool_name($school_id);
    }

    public function getStudentName($studentId)
    {
        $databaseUtils = new DatabaseUtils();
        $students = new Students($databaseUtils);
        return $students->getfirstname($studentId) . " " . $students->getlastname($studentId);
    }

    public function getStudentClassName($student_id)
    {
        $databaseUtils = new DatabaseUtils();
        $students = new Students($databaseUtils);
        $classes = new Classes($databaseUtils);
        $classId = $students->getclass_id($student_id);
        $className = $classes->getclass_name($classId);
        return $className;
    }

    public function getClassPrefectInfo($student_id)
    {
        return $this->getStudentName($student_id) . "  - " . $this->getStudentClassName($student_id);
    }

    public function getStudentClassInfo($student_id)
    {
        $databaseUtils = new DatabaseUtils();
        $classes = new Classes($databaseUtils);
        $schools = new Schools($databaseUtils);
        $students = new Students($databaseUtils);

        $classId = $students->getclass_id($student_id);
        $className = $classes->getclass_name($classId);

        $schoolId = $classes->getschool_id($classId);
        $schoolName = $schools->getschool_name($schoolId);

        return $className . " ( " . $schoolName . ") ";
    }

}