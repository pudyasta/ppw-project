<?php
class Dashboard extends Controller
{
    public function __construct()
    {
    }
    public function index()
    {
        if (!isset($_SESSION['user'])) {
            header("Location:" . BASE_URL . "/user/signin");
        }
        if ($_SESSION['user']['status'] != 'complete') {
            header("Location:" . BASE_URL . "/user/insertpayment");
        }
        $data = $this->model('PreOrderModel')->getPo();
        $this->view('header');
        $this->view('dashboard/index', $data);
    }


    // ==========PreORDER=========
    public function addPreOrder()
    {
        if (!isset($_SESSION['user'])) {
            header("Location:" . BASE_URL . "/user/signin");
        }
        if ($_SESSION['user']['status'] != 'complete') {
            header("Location:" . BASE_URL . "/user/insertpayment");
        }
        $data = $this->model('ItemsModel')->getItemsWithStockBasedSeller();
        $this->view('header');
        $this->view('dashboard/addpo', $data);
    }
    public function addpopost()
    {
        $currentDate = date("d/m/Y");
        $data = $_POST;



        if (isset($data['item']) && isset($data['start']) && isset($data['end'])) {
            if ($data['start'] < $data['end'] && $data['end'] > $currentDate) {
                if ($data['start'] == $currentDate) {
                    array_push($data, ["status" => "on_going"]);
                } else {
                    array_push($data, ["status" => "scheduled"]);
                }
                $data['start'] = DateTime::createFromFormat("d/m/Y", $data['start']);
                $data['start'] = $data['start']->format("Y-m-d");
                $data['end'] = DateTime::createFromFormat("d/m/Y", $data['end']);
                $data['end'] = $data['end']->format("Y-m-d");
                $exc = $this->model('PreOrderModel')->insertData($data);
                if ($exc == 1) {
                    Flasher::setFlash("Data berhasil ditambahkan", 'success');
                    header('Location:' . BASE_URL . '/dashboard');
                } else {
                    Flasher::setFlash($exc, 'danger');
                    header('Location: ' . $_SERVER['HTTP_REFERER']);
                }
            } else {
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                Flasher::setFlash("Invalid Date", 'danger');
            }
        } else {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            Flasher::setFlash("Input tidak boleh kosong", 'danger');
        }
    }

    public function auditorder()
    {
        $url = Helper::parseURL();
        $data = $this->model('InvoiceModel')->getInvoiceByPreorder($url[2]);

        $this->view('header');
        $this->view('dashboard/auditorder', $data);
    }

    public function deletepreorder()
    {
        $id = intval($_POST['id']);

        $exc = $this->model('PreOrderModel')->deletepo($id);
        if ($exc == 1) {
            Flasher::setFlash("Data berhasil dihapus", 'success');
            header('Location:' . BASE_URL . '/dashboard');
        } else {
            Flasher::setFlash("Invalid", 'danger');
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }




    // ==========Barang=========
    public function items()
    {
        if (!isset($_SESSION['user'])) {
            header("Location:" . BASE_URL . "/user/signin");
        }
        if ($_SESSION['user']['status'] != 'complete') {
            header("Location:" . BASE_URL . "/user/insertpayment");
        }

        $data = $this->model('ItemsModel')->getItemsWithStockBasedSeller();

        $this->view('header');
        $this->view('dashboard/items', $data);
    }

    public function addbarang()
    {
        if (!isset($_SESSION['user'])) {
            header("Location:" . BASE_URL . "/user/signin");
        }
        if ($_SESSION['user']['status'] != 'complete') {
            header("Location:" . BASE_URL . "/user/insertpayment");
        }
        $data = $this->model('CategoriesModel')->getAllCategories();

        $this->view('header');
        $this->view('dashboard/addbarang', $data);
    }
    public function uploud()
    {
        if (isset($_FILES["image"])) {
            if ($_FILES['image']['error'] === 4) {
                header('Location: ' . $_SERVER['HTTP_REFERER']);

                echo "<script>alert('Silahkan masukkan gambar!');</script>";
                return 0;
            }
            $ekstensivalid = ['jpg', 'jpeg', 'png'];
            $ekstensigambar = explode('.', $_FILES['image']['name']);
            $ekstensigambar = strtolower(end($ekstensigambar));
            if (!in_array($ekstensigambar, $ekstensivalid)) {
                header('Location: ' . $_SERVER['HTTP_REFERER']);
                Flasher::setFlash("Invalid File", 'danger');
                return 0;
            }
            $image = $_FILES["image"];
            $filename = uniqid() . "_" . $image["name"];
            $targetPath = "src/storage/" . $filename;
            move_uploaded_file($image["tmp_name"], $targetPath);
            return $targetPath;
        } else {
            return 0;
        }
    }

    public function addbarangpost()
    {
        $imagepath = $this->uploud();
        if ($imagepath != 0) {
            $exc = $this->model('ItemsModel')->insertData($_POST, $imagepath);

            if ($exc == 1) {
                Flasher::setFlash("Data berhasil ditambahkan", 'success');

                header('Location:' . BASE_URL . '/dashboard/items');
            } else {
                Flasher::setFlash($exc, 'danger');
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
        }
        return 0;
    }

    public function deleteBarang()
    {
        $id = intval($_POST['id']);

        $exc = $this->model('ItemsModel')->deleteItems($id);
        if ($exc == 1) {
            Flasher::setFlash("Data berhasil dihapus", 'success');
            header('Location:' . BASE_URL . '/dashboard/items');
        } else {
            Flasher::setFlash("Invalid", 'danger');
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }

    public function editview()
    {
        if (!isset($_SESSION['user'])) {
            header("Location:" . BASE_URL . "/user/signin");
        }
        if ($_SESSION['user']['status'] != 'complete') {
            header("Location:" . BASE_URL . "/user/insertpayment");
        }
        $url = Helper::parseURL();
        if (isset($url[2])) {
            $id = intval($url[2]);
            $data = [$this->model('ItemsModel')->getItemById($id), $this->model('CategoriesModel')->getAllCategories()];
            $this->view('header');

            $this->view('dashboard/editview', $data);
        }
    }

    public function editbarangpost()
    {
        $data = $_POST;
        if ($_FILES['image']["name"] != "") {
            $data['imagePast'] = $this->uploud($_FILES['image']["name"]);
        }
        $exc = $this->model('ItemsModel')->updateItemData($data);
        if ($exc == 1) {
            Flasher::setFlash("Data berhasil diubah", 'success');
            header('Location:' . BASE_URL . '/dashboard/items');
        } else {
            Flasher::setFlash("Invalid", 'danger');
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
}
