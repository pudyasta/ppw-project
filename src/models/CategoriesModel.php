<?php
class CategoriesModel
{
    private $table = 'jajan';
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllCategories()
    {

        $this->db->query('SELECT * FROM categories ORDER BY category_name');
        $this->db->execute();
        $data = $this->db->resultset();
        return $data;
    }
}
