<?php
class InvoiceModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getInvoiceByPreorder($id)
    {
        $this->db->query("SELECT * FROM invoices WHERE preorder_id = :id ");
        $this->db->bind(':id', $id);
        return $this->db->resultSet();
    }
    public function insertData($data, $path)
    {
        $count = 0;
        try {

            $this->db->getDb()->beginTransaction();
            $this->db->query("INSERT INTO invoices(status,customer_name,customer_email,customer_phone,payment_prove,quantity,preorder_id,item_id) VALUES (:status,:name,:email,:phone,:payment,:quantity,:preorder,:item)");
            $this->db->bind(":status", 'pending');
            $this->db->bind(":name", $data['name']);
            $this->db->bind(":email", $data['email']);
            $this->db->bind(":phone", $data['phone']);
            $this->db->bind(":payment", $path);
            $this->db->bind(":quantity", $data['quantity']);
            $this->db->bind(":preorder", $data['preorder_id']);
            $this->db->bind(":item", $data['item_id']);
            $this->db->execute();
            $count = $this->db->rowCount();

            $this->db->query("DELETE FROM baskets WHERE id = :basket_id");
            $this->db->bind(":basket_id", $data['basket_id']);
            $this->db->execute();
            $this->db->getDb()->commit();
        } catch (PDOException $e) {
            $this->db->getDb()->rollBack();
        }


        return $count;
    }
}
