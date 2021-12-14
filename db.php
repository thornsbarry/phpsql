<?php

class DB
{
    private $host = '10.100.3.80';
    private $db = 'D210060_bookmarket';
    private $user = 'D210060';
    private $password = 'uhifgn';

    public function connect()
    {
        return new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db . ';charset=utf8', $this->user, $this->password);
    }

    public function getAuthors()
    {
        $connect = $this->connect();
        $sql = $connect->query('SELECT first_name, last_name FROM authors order by last_name');
        $sql->execute();
        return $sql->fetchAll();
    }

    public function createdAuthor($request)
    {

        $connect = $this->connect();
        try {
            $connect->beginTransaction();
            $connect->exec('insert into authors values (null,"' . $request['last_name'] . '","' . $request['first_name'] . '","' . $request['father_name'] . '","' . mb_substr($request['first_name'], 0, 1) . '.",now(), now())');
            $connect->commit();
            return json_encode([
                'error' => false,
                'message' => 'Автор добавлен'
            ]);
        } catch (PDOException $err) {
            $connect->rollBack();
            return json_encode([
                'error' => true,
                'message' => $err->getMessage()
            ]);
        }
    }
}