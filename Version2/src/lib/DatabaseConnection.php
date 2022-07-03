<?php class DatabaseConnection
{
    public ?PDO $database = null;

    public function getConnection(): PDO
    {
        if ($this->database === null) {
            $this->database = new PDO('mysql:host=localhost;dbname=mglsi_news;charset=utf8;port=3308', 'root', '');
            // $this->database = new PDO('mysql:host=192.168.38.214;dbname=mglsi_news;charset=utf8;port=3306', 'bintou', 'passer');
        }
        return $this->database;
    }
}
