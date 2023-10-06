<?php
namespace app\Database;
use app\Util\Constant;

class Db{

    public static $db1;

    static public function getDatabse(){
        if (self::$db1 == null) {
            self::$db1 = new DbUtil(Constant::HOST, Constant::USERNAME, Constant::PASSWORD, Constant::DATABASE);
        }
        return self::$db1;
    }

}