<?php
class User extends Controller
{
    private  $error;

    public function index()
    {
        echo "404";
    }
    public function signup()
    {
        $data = $this->model('CitiesModel')->getAllCities();
        if (isset($_SESSION['user']) && $_SESSION['user']['status'] == 'complete') {
            header("Location:" . BASE_URL . "/dashboard");
        }
        if (isset($_SESSION['user']) && $_SESSION['user']['status'] == 'pending') {
            header("Location:" . BASE_URL . "/user/insertpayment");
        }
        $this->view('header');
        $this->view('signup', $data);
    }
    public function signin()
    {
        if (isset($_SESSION['user']) && $_SESSION['user']['status'] == 'complete') {
            header("Location:" . BASE_URL . "/dashboard");
        }
        if (isset($_SESSION['user']) && $_SESSION['user']['status'] == 'pending') {
            header("Location:" . BASE_URL . "/user/insertpayment");
        }
        $this->view('header');
        $this->view('signin');
    }
    public function insertpayment()
    {
        $data = $this->model('PaymentVendorsModel')->getAllVendors();

        if (!isset($_SESSION['user'])) {
            header("Location:" . BASE_URL . "/user/signin");
        }
        if (isset($_SESSION['user']) && $_SESSION['user']['status'] == 'complete') {
            header("Location:" . BASE_URL . "/dashboard");
        }
        $this->view('header');
        $this->view('insertpayment', $data);
    }

    public function insert()
    {
        $data = $this->model('UserModel')->insert($_POST);
        if ($data != 0) {
            $_SESSION['user'] = [
                'id' => $data['seller_id'],
                'name' => $data['seller_name'],
                'email' => $data['email'],
                'location' => $data['seller_location'],
                'profile' => $data['profile_pic'],
                'status' => $data['status'],
            ];
            header('Location:' . BASE_URL . '/user/insertpayment');
        } else {
            Flasher::setFlash('Data salah', 'danger');
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }

    public function login()
    {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $data = $this->model('UserModel')->login($_POST);
            if ($data) {
                if (password_verify($_POST['password'], $data['password'])) {
                    $_SESSION['user'] = [
                        'id' => $data['seller_id'],
                        'name' => $data['seller_name'],
                        'email' => $data['email'],
                        'location' => $data['seller_location'],
                        'profile' => $data['profile_pic'],
                        'status' => $data['status'],
                    ];
                    header("Location:" . BASE_URL . "/dashboard");
                    exit();
                } else {
                    $this->error = "Password yang dimasukkan salah.";
                }
            } else {
                $this->error = "Yaah user tidak ditemukan di data kami, kamu bisa daftar dulu yaaa..";
            }
        } else {
            $this->error = "Input tidak boleh ada yang kosong yaa..";
        }
        Flasher::setFlash($this->error, 'danger');
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

    public function logout()
    {
        unset($_SESSION['user']);
        header("Location:" . BASE_URL . "/user/signin");
        exit();
    }

    public function postinsertpayment()
    {
        if (isset($_POST['vendor_id']) && isset($_POST['number'])) {

            $data = $this->model('PaymentMethodModels')->insertNewPayment($_POST);
            if ($data) {
                $_SESSION['user']['status'] = 'complete';
                header("Location:" . BASE_URL . "/dashboard");
                exit();
            } else {
                $this->error = "Terjadi kesalahan pada server";
            }
        } else {
            $this->error = "Input tidak boleh ada yang kosong yaa..";
        }
    }
}
