<?php
namespace DesignPatterns\Builder\Query;
require dirname(__DIR__).'/../vendor/autoload.php';
/**
 * 客户端调用
 * Class Client
 * @package DesignPatterns\Builder\Query
 */
class Client{
    public function run(SqlQueryBuilder $sqlQueryBuilder)
    {
        $query = $sqlQueryBuilder->select('user',['name','email','password'])
                ->where('age','>','18')
                ->where('age','<','30')
                ->limit(10,20)
                ->getSQL();
        return $query;

    }
}
$Client = new Client();
echo $Client->run(new MysqlQueryBuilder());