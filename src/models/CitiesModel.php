<?php
class CitiesModel
{
    private $table = 'jajan';
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllCities()
    {

        $this->db->query('SELECT * FROM cities');
        $this->db->execute();
        $data = $this->db->resultset();
        return $data;
    }
}
