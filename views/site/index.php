<?php

use app\database\DbWorker;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="row">
        <div class="col-md-6">
            <div class="panel-primary">
                <div class="panel-heading">
                    <label>School</label>
                </div>
                <div class="panel-body">
                    <label>In the schools module, you can create as many schools as you can. This makes the application
                        extensible</label>
                </div>
                <div class="panel-footer">
                    <a class="btn btn-outline btn-primary" href="index.php?r=schools">Go to</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel-primary">
                <div class="panel-heading">
                    <label>Classes</label>
                </div>
                <div class="panel-body">
                    <label>In the classes model, we create classes which belong to schools</label>
                </div>
                <div class="panel-footer">
                    <a class="btn btn-outline btn-primary" href="index.php?r=classes">Go to</a>
                </div>
            </div>
        </div>
    </div>
    <div style="margin: 20px;"></div>
    
    <div class="row">
        <div class="col-md-6">
            <div class="panel-primary">
                <div class="panel-heading">
                    <label>Students</label>
                </div>
                <div class="panel-body">
                    <label>In the students module, we create students who exist in classes</label>
                </div>
                <div class="panel-footer">
                    <a class="btn btn-outline btn-primary" href="index.php?r=students">Go to</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel-primary">
                <div class="panel-heading">
                    <label>Class Prefects</label>
                </div>
                <div class="panel-body">
                    <label>In the class prefects module, we create students who have the roles of being a class
                        prefect</label>
                </div>
                <div class="panel-footer">
                    <a class="btn btn-outline btn-primary" href="index.php?r=class-prefects">Go to</a>
                </div>
            </div>
        </div>
    </div>
</div>
