<?php
class PaymentVendorsModel
{
    private $table = 'jajan';
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllVendors()
    {

        $this->db->query('SELECT * FROM payment_vendors');
        $this->db->execute();
        $data = $this->db->resultset();
        return $data;
    }
}
