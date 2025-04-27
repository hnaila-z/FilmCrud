<?php
require_once 'database.php';

class Model {
    private $conn;

    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function getAll() {
        $result = $this->conn->query("SELECT * FROM films");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function save($data) {
        $title = $this->conn->real_escape_string($data['title']);
        $director = $this->conn->real_escape_string($data['director']);
        $this->conn->query("INSERT INTO films (title, director) VALUES ('$title', '$director')");
    }

    public function delete($id) {
        $id = (int)$id;
        $this->conn->query("DELETE FROM films WHERE id = $id");
    }
}
?>
