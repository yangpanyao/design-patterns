<?php
namespace DesignPatterns\Singleton;
class DB{
    /**
     * 声明一个静态属性用于储存实例
     */
    private static $instances = null;

    //数据库连接句柄
    private $db;
    //数据库连接参数
    const HOSTNAME = "127.0.0.1";
    const USERNAME = "root";
    const PASSWORD = "root";
    const DBNAME = "user";

    /**
     * 声明一个私有或受保护的构造方法，防止使用new运算符直接进行调用
     */
    private function __construct()
    {
        $this->db = mysqli_connect(self::HOSTNAME,self::USERNAME,
            self::PASSWORD,self::DBNAME);
    }

    /**
     * 防止克隆多个实例
     */
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    /**
     * 防止反序列化单例
     * @throws \Exception
     */
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    /**
     *单例模式访问入口
     */
    public static function getInstance()
    {
        if (!isset(self::$instances)) {
            self::$instances = new static;
        }
        return self::$instances;
    }

    /**
     * 数据库查询
     */
    public function select(){
        $sql = "select * from user";
        $res = mysqli_query($this->db,$sql);

        while ($row = mysqli_fetch_array($res)) {
            printf ("ID: %s  Name: %s", $row[0], $row[1]);
        }
        mysqli_free_result($res);
    }

}
$db = DB::getInstance();
$db->select();