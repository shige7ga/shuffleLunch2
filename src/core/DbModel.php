<?php

class DbModel
{
    private $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function fetchAll($sql)
    {
        try {
            $stmt = $this->pdo->query($sql);
        } catch (PDOExcepiton $e) {
            echo 'エラー発生：' . $e->getMessage() . PHP_EOL;
        }
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
