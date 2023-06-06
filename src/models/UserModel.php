<?php
class UserModel
{
    private $table = 'jajan';
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function getUser()
    {
        // $this->db = $this->pdo->prepare('SELECT * FROM sellers');
        // $this->res->execute();
        // return $this->res->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert($data)
    {
        if (!empty($_POST['nama']) && !empty($_POST['city']) && !empty($_POST['password']) && !empty($_POST['confirm']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            if ($data['password'] == $data['confirm']) {
                $newPass = password_hash($data['password'], PASSWORD_BCRYPT);
                $this->db->query('INSERT INTO sellers (seller_name,city_id, email, password,status) VALUES (:name,:city, :email, :password,"pending")');
                $this->db->bind(':name', $data['nama']);
                $this->db->bind(':email', $data['email']);
                $this->db->bind(':password', $newPass);
                $this->db->bind(':city', $data['city']);

                $this->db->execute();

                $this->db->query("SELECT * FROM sellers WHERE email=:email");
                $this->db->bind(':email', $data['email']);
                $this->db->execute();
                $x = $this->db->singleset();
                return $x;
            }
        } else {
            return 0;
        }
    }
    public function login($data)
    {
        $this->db->query('SELECT * FROM sellers WHERE email = :email');
        $this->db->bind(':email', $data['email']);
        $this->db->execute();
        $data = $this->db->singleset();
        if ($data) {
            return $data;
        } else {
            return null;
        }
    }
}
