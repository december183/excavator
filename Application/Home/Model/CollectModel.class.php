<?php
namespace Home\Model;
use Think\Model;
class CollectModel extends Model{
    protected $_validate=array(
        array(),
    );
    protected $_auto=array(
        array('date','time',1,'function'),
    );

}