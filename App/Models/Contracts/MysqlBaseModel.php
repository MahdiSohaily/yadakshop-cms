<?php

namespace App\Models\Contracts;

use Medoo\Medoo;

class MysqlBaseModel extends BaseModel
{

    public function __construct($id = null)
    {
        try {
            $this->connection = new Medoo([
                'type' => 'mysql',
                'host' => $_ENV['DB_HOST'],
                'database' => $_ENV['DB_DATABASE'],
                'username' => $_ENV['DB_USERNAME'],
                'password' => $_ENV['DB_PASSWORD'],
                'error' => \PDO::ERRMODE_EXCEPTION,
            ]);
        } catch (\PDOException $th) {
            // Handle the exception, log it, or rethrow if necessary
            throw $th;
        }

        if (!is_null($id)) {
            $this->find($id);
        }
    }

    /**
     * Create a new record using passed data in the specified table
     * Return last inserted record id
     */
    public function create(array $data): int
    {
        $this->connection->insert($this->table, $data);
        return $this->connection->id() ?? -1;
    }

    /**
     * Find a unique record using the primary key
     * Set the object properties using column names and values
     */
    public function find($id): ?object
    {
        $record = $this->connection->get($this->table, '*', [$this->primaryKey => $id]) ?? [];
        foreach ($record as $key => $value) {
            $this->setAttribute($key, $value);
        }
        return $this;
    }

    /**
     * Select all the existing records and columns in a table
     */
    public function getAll(): array
    {
        return $this->connection->select($this->table, "*");
    }

    /**
     * Select a portion of data by specifying where conditions and specific column names
     */
    public function get(array $columns, array $where): array
    {
        return $this->connection->get($this->table, $columns, $where);
    }

    /**
     * Update a specific record in the database
     * Return the number of affected rows
     */
    public function update(array $data, array $where): int
    {
        $result = $this->connection->update($this->table, $data, $where);
        return $result->rowCount();
    }

    /**
     * Delete specific rows by specifying where condition and return the number of affected rows
     */
    public function delete(array $where): int
    {
        $result = $this->connection->delete($this->table, $where);
        return $result->rowCount();
    }

    /**
     * Remove a record
     */
    public function remove()
    {
        $record_id = $this->{$this->primaryKey};
        $this->delete([$this->primaryKey => $record_id]);
        return $record_id;
    }

    /**
     * Save changes to a record
     */
    public function save(): int
    {
        $record_id = $this->{$this->primaryKey};
        return $this->update($this->getAttributes(), [$this->primaryKey => $record_id]);
    }
}
