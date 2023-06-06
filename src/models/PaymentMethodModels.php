<?php
class PaymentMethodModels
{
    private $table = 'jajan';
    private $db;
    public function __construct()
    {
        $this->db = new Database();
        $this->db->getDB()->exec("CREATE OR REPLACE TRIGGER updateStatusUser
        AFTER INSERT ON payment_method
        FOR EACH ROW
        BEGIN
            DECLARE num int default 0;
            SELECT COUNT(*) into num FROM payment_method WHERE seller_id = NEW.seller_id;
            IF num < 1 THEN
             UPDATE sellers SET STATUS='complete' WHERE seller_id = NEW.seller_id;
            END IF;
        END");
    }

    public function insertNewPayment($data)
    {
        try {

            $this->db->query("INSERT INTO payment_method(payment_number,payment_vendor_id,seller_id) VALUES (:num,:vendor,:seller)");
            $this->db->bind(':num', $data['number']);
            $this->db->bind(':vendor', $data['vendor_id']);
            $this->db->bind(':seller', $_SESSION['user']['id']);
            $this->db->execute();
            $data = $this->db->rowCount();
            return $data;
        } catch (
            Exception $e
        ) {
            return 0;
        };
    }
}
