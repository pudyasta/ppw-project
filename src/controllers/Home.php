<?php
class Home extends Controller
{
    public function index()
    {
        $baskets = $this->model("BasketsModel")->getBasketByCookie();
        $datas = $this->model('ItemsModel')->getItemPreview();
        $x = [];
        foreach ($baskets as $b) {
            array_push($x, $b['preorder_id']);
        }
        $final = [$datas, $x];
        $this->view('header');
        $this->view('index', $final);
    }

    public function keranjang()
    {
        $baskets = $this->model("BasketsModel")->getBasketItem();
        $this->view('header');
        $this->view('keranjang', $baskets);
    }
    public function clear()
    {
        if (isset($_SESSION['success'])) {
            $this->view('header');
            $this->view('clear');
            unset($_SESSION['success']);
            unset($_SESSION['flasher']);
        } else {
            header('Location:' . BASE_URL . '/Home/');
        }
    }
    public function checkout()
    {
        $sellable = $this->model("ItemsModel")->getSellable($_POST['item_id']);
        if ($sellable[0]['sellable'] == null) {
            $sellable = $sellable[0]['stock'];
        }

        if ($sellable < intval($_POST['quantity'])) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            Flasher::setFlash("Stok tidak cukup", 'danger');
        } else {
            $payment = $this->model("PaymentMethodModels")->getPayment($_POST['seller_id']);
            $data = [$_POST, $payment];
            $this->view('header');
            $this->view('checkout', $data);
        }
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
    public function checkoutpost()
    {
        $imagepath = $this->uploud();
        if ($imagepath != 0) {
            $exc = $this->model('InvoiceModel')->insertData($_POST, $imagepath);

            if ($exc == 1) {
                Flasher::setFlash("Data berhasil ditambahkan", 'success');
                $_SESSION['success'] = true;
                header('Location:' . BASE_URL . '/home/clear');
            } else {
                Flasher::setFlash($exc, 'danger');
                header('Location: ' . $_SERVER['HTTP_REFERER']);
            }
        }
        return 0;
    }

    public function itempercategory()
    {
        $categories = Helper::parseURL();
        $data = $this->model('ItemsModel')->getCategory($categories[2]);
        $baskets = $this->model("BasketsModel")->getBasketByCookie();
        $x = [];
        foreach ($baskets as $b) {
            array_push($x, $b['preorder_id']);
        }
        $final = [$data, $x];

        $this->view('header');
        $this->view('itempercategory', $final);
    }
}
