<?php
    class FormModel extends Model{
        protected $_validate=array(
            array('title','require','标题必须'),
        );
        protected $_auto=array(
            array('create_time','time',1,'function'),
        );
    }
//     class PsyModel extends Model{
//         protected $dbName='think_article';
//     }
//     class ThinkphpModel extends Model{
//         protected $dbName='think_form';
//     }
?>