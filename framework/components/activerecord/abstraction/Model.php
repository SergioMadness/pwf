<?php

namespace pwf\components\activerecord\abstraction;

abstract class Model extends \pwf\components\datamapper\abstraction\Model implements \pwf\components\activerecord\interfaces\Model
{
    /**
     * Connection
     *
     * @var mixed
     */
    private $connection;

    public function __construct($connection, array $attributes = [],
                                array $properties = [])
    {
        parent::__construct($attributes, $properties);

        $this->setConnection($connection);
    }

    /**
     * Set connection
     *
     * @param mixed $connection
     * @return \pwf\components\activerecord\abstraction\Model
     */
    public function setConnection($connection)
    {
        $this->connection = $connection;
        return $this;
    }

    /**
     * Get connection
     *
     * @return mixed
     */
    public function getConnection()
    {
        return $this->connection;
    }
}