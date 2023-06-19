<?php
class PreOrderModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function insertData($data)
    {
        $this->db->query("INSERT INTO preorders(start_date,cutoff_date,preorder_status,seller_id,item_id) VALUES (:start,:end,:status,:seller,:item)");
        $this->db->bind(':start', $data['start']);
        $this->db->bind(':end', $data['end']);
        $this->db->bind(':status', $data[0]['status']);
        $this->db->bind(':seller', $_SESSION['user']['id']);
        $this->db->bind(':item', $data['item']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getPreOrders($id)
    {
        $this->db->query("SELECT * FROM preorders WHERE preorder_id = :id");
        $this->db->bind(":id", $id);
        return $this->db->singleset();
    }


    public function getPo()
    {
        $this->db->query("SELECT i.item_name,p.start_date,p.cutoff_date,p.preorder_id,p.preorder_status FROM preorders p JOIN items i USING (item_id) WHERE p.seller_id = :id ORDER BY FIELD(p.preorder_status,'on_going','scheduled','closed')");
        $this->db->bind(':id', $_SESSION['user']['id']);
        return $this->db->resultset();
    }
    public function deletepo($data)
    {
        $this->db->query("DELETE FROM preorders WHERE preorder_id = :id");
        $this->db->bind(':id', $data);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
