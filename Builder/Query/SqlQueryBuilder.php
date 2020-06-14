<?php
namespace DesignPatterns\Builder\Query;

/**
 * Builder接口声明一组方法来组装SQL查询。
 * 所有的构造步骤都返回当前的builder对象以允许链接：$builder->select（…）->where（…）
 * Interface SqlQueryBuilder
 * @package DesignPatterns\Builder\Query
 */
interface SqlQueryBuilder
{
    /**
     * select
     * @param string $table
     * @param array $fields
     * @return SqlQueryBuilder
     */
    public function select(string $table ,array $fields):SqlqueryBuilder;

    /**
     * where
     * @param string $field
     * @param string $value
     * @param string $operator
     * @return SqlQueryBuilder
     */
    public function where(string $field,  string $operator = '=', string $value): SQLQueryBuilder;

    /**
     * limit
     * @param int $start
     * @param int $offset
     * @return SqlQueryBuilder
     */
    public function limit(int $start, int $offset): SQLQueryBuilder;


    /**
     * @return string
     */
    public function getSQL(): string;
}