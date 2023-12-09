<?php

namespace App\Models\Contracts;

use Medoo\Medoo;

class MysqlBaseModel extends BaseModel
{
    private static $connection;

    public function __construct($id = null)
    {
        if (!isset(self::$connection)) {
            try {
                self::$connection = new Medoo([
                    'type' => 'mysql',
                    'host' => $_ENV['DB_HOST'],
                    'database' => $_ENV['DB_DATABASE'],
                    'username' => $_ENV['DB_USERNAME'],
                    'password' => $_ENV['DB_PASSWORD'],
                    'error' => \PDO::ERRMODE_EXCEPTION,
                ]);
            } catch (\PDOException $th) {
                // Log or handle the exception
                throw $th;
            }
        }

        if (!is_null($id)) {
            $this->find($id);
        }
    }

    public function create(array $data): ?int
    {
        self::$connection->insert($this->table, $data);
        return self::$connection->id() ?? null;
    }

    public function find($id): ?object
    {
        $record = self::$connection->get($this->table, '*', [$this->primaryKey => $id]) ?? [];

        foreach ($record as $key => $value) {
            $this->setAttribute($key, $value);
        }

        return $this;
    }

    public function getAll(): array
    {
        return self::$connection->select($this->table, "*");
    }

    public function get(array $columns, array $where): array
    {
        return self::$connection->get($this->table, $columns, $where);
    }

    public function update(array $data, array $where): ?int
    {
        $result = self::$connection->update($this->table, $data, $where);
        return $result->rowCount() ?? null;
    }

    public function delete(array $where): ?int
    {
        return self::$connection->delete($this->table, $where)->rowCount() ?? null;
    }

    public function remove(): ?int
    {
        $recordId = $this->{$this->primaryKey};
        $this->delete([$this->primaryKey => $recordId]);
        return $recordId;
    }

    public function save(): ?int
    {
        $recordId = $this->{$this->primaryKey};
        return $this->update($this->getAttributes(), [$this->primaryKey => $recordId]);
    }
}
