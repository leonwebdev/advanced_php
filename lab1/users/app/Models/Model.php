<?php

abstract class Model
{
    protected static $dbh;
    protected $table;
    protected $key = 'id';

    /**
     * init -construction static Model::$dbh
     *
     * @param  $dbh - the PDO we use to connect database
     *
     */
    public static function init($dbh)
    {
        self::$dbh = $dbh;
    }

    /**
     * getAll return All data from database
     *
     * @return  mixed  return All data from database or false if no data found
     */
    public function getAll(): mixed
    {
        $query = "  SELECT *
                    FROM {$this->table}
                    ";

        $stmt = self::$dbh->prepare($query);

        $stmt->execute();

        return $stmt->fetchAll();
    }

    /**
     * getOne return user info by user id
     *
     * @param   int|string  $id  the user id that will be use to query
     *
     * @return  mixed       return user info by user id or FALSE if no data found
     */
    public function getOne(int|string $id): mixed
    {
        $query = "  SELECT *
                    FROM {$this->table}
                    WHERE {$this->key} = :id
                    ";

        $stmt = self::$dbh->prepare($query);

        $stmt->bindValue(':id', $id);

        $stmt->execute();

        return $stmt->fetch();
    }
}