<?php
class Main_model
{
    public $mysqli;
    public function __construct()
    {
        $this->mysqli = new mysqli('localhost', 'root', '', 'member', 3306);

        if ($this->mysqli->connect_errno) {
            echo "Failed to connect to MySQL: " . $this->mysqli->connect_error;
            exit();
        }
    }

    public function query($query)
    {
        $query = $this->mysqli->query($query);
        if ($query === true) {
            return $query;
        } else {
            $result = [];
            while ($row = $query->fetch_object()) {
                $result = [...$result, $row];
            }
            return $result;
        }
    }
}
