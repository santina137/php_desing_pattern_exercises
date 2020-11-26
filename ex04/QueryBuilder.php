<?php

class QueryBuilder
{
    private $select = [];
    private $from = [];
    private $where = [];

    public function __construct(){}


    public function select(...$args): QueryBuilder {
    return $this->select[]=$args;
    }

    public function from($table, $alias = false): QueryBuilder {
           $this->from[]=$table;
           if($alias){
               $this->from[]=$alias;
           }
           return $this;
    }



    public function where(...$args): QueryBuilder {
    return $this->where[]=$args;
    }

    public function __toString(): QueryBuilder {
    return $this->select[];

}