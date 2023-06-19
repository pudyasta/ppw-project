<?php
class BasketsModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function addBaskets($data)
    {
        $this->db->query("INSERT INTO baskets(user_cookie,preorder_id) VALUES(:cookie,:item)");
        $this->db->bind(':cookie', $_COOKIE['user_cookie']);
        $this->db->bind(':item', intval($data));
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getBasketByCookie()
    {
        $this->db->query("SELECT preorder_id FROM baskets WHERE user_cookie = :cookie");
        $this->db->bind(':cookie', $_COOKIE["user_cookie"]);
        return $this->db->resultset();
    }
    public function getBasketItem()
    {
        $this->db->query("SELECT abx.*,b.id FROM baskets b JOIN (SELECT i.seller_id,i.price,i.item_name,i.item_image,p.preorder_id,i.item_id FROM preorders p JOIN items i USING(item_id)) abx ON b.preorder_id = abx.preorder_id WHERE user_cookie = :cookie");
        $this->db->bind(':cookie', $_COOKIE["user_cookie"]);
        return $this->db->resultset();
    }
}
