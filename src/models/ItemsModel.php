<?php
class ItemsModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
        $this->db->getDb()->exec("CREATE OR REPLACE VIEW detailed_stock_view AS
        SELECT item_id,stock,item_name,category_name,seller_id, stock - (SELECT SUM(quantity) FROM invoices WHERE item_id = items.item_id) AS sellable,
            (SELECT SUM(quantity) FROM invoices WHERE item_id = items.item_id) AS reserved FROM items JOIN categories USING(category_id)");

        $this->db->getDb()->exec("CREATE OR REPLACE VIEW itempreview AS SELECT p.preorder_id, i.item_id, i.item_name, i.price, s.seller_name, p.cutoff_date, i.item_image,i.category_id FROM preorders p JOIN items i USING(item_id) JOIN sellers s ON p.seller_id = s.seller_id WHERE p.preorder_status = 'on_going'");
    }

    public function  insertData($data, $path)
    {
        if (!empty($_POST['nama-barang']) && !empty($_POST['harga']) && !empty($_POST['stok']) && !empty($_POST['category']) && !empty($_POST['deskripsi'])) {
            $this->db->query("INSERT INTO items(item_name,price,stock,descriptions,item_image,seller_id,category_id) VALUES (:name,:price,:stock,:descriptions,:image,:seller,:category)");
            $this->db->bind(':name', $data['nama-barang']);
            $this->db->bind(':price', $data['harga']);
            $this->db->bind(':stock', $data['stok']);
            $this->db->bind(':descriptions', $data['deskripsi']);
            $this->db->bind(':image', $path);
            $this->db->bind(':seller', $_SESSION['user']['id']);
            $this->db->bind(':category', $data['category']);
            $this->db->execute();
            if ($this->db->rowCount() == 1) {
                return 1;
            } else {
                return "Internal Server Error";
            }
        } else {
            return "Data tidak boleh kososng";
        }
    }

    public function getItemsWithStockBasedSeller()
    {
        $this->db->query("SELECT * FROM detailed_stock_view WHERE seller_id = :seller");
        $this->db->bind(':seller', $_SESSION['user']['id']);
        return $this->db->resultSet();
    }

    public function getItemById($data)
    {
        $this->db->query("SELECT * FROM items WHERE item_id = :item");
        $this->db->bind(':item', $data);
        return $this->db->singleset();
    }

    public function updateItemData($data)
    {
        $this->db->query('UPDATE items SET item_name= :name, price= :price, stock= :stock, descriptions= :descriptions, item_image=:image,category_id= :category WHERE item_id= :item');
        $this->db->bind(':name', $data['nama-barang']);
        $this->db->bind(':price', intval($data['harga']));
        $this->db->bind(':stock', intval($data['stok']));
        $this->db->bind(':descriptions', $data['deskripsi']);
        $this->db->bind(':image', $data['imagePast']);
        $this->db->bind(':category', $data['category']);
        $this->db->bind(':item', $data['itemid']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteItems($data)
    {
        $this->db->query("DELETE FROM items WHERE item_id = :id");
        $this->db->bind(':id', $data);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getItemPreview()
    {
        $this->db->query("SELECT * FROM itempreview");
        return $this->db->resultset();
    }

    public function getSellable($id)
    {
        $this->db->query("SELECT sellable,stock FROM detailed_stock_view WHERE item_id = :id");
        $this->db->bind(":id", $id);
        return $this->db->resultset();
    }
    public function getCategory($id)
    {
        $this->db->query("SELECT * FROM itempreview JOIN categories USING(category_id) WHERE category_name = :id");
        $this->db->bind(":id", $id);
        return $this->db->resultset();
    }
}
