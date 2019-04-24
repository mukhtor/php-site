<?php
/**
 * Created by PhpStorm.
 * User: Usmon
 * Date: 10.04.2019
 * Time: 20:47
 */
use Imagine\Gd\Imagine;
use Imagine\Image\Box;
class AdminController extends Controller
{
    public function checkAuth()
    {
        $model = new AdminModel();
        if ($model->isLogged() == false)
        {
            header('Location: index.php?route=login');
        }
    }

    public function index()
    {
        $this->checkAuth();
        $this->render('_header');
        $this->render('index');
        $this->render('_footer');
    }
    public function login()
    {
        $model = new AdminModel();
        $login = $_POST['login'];
        $password = $_POST['password'];
        $result = $model->checkLogin($login, $password);
        if ($result == true)
        {
            header('Location: index.php?route=Admin/index');
        }

        $this->render('login');
    }
    public function logout()
    {
        $model = new AdminModel();
        $model->logout();

        header('Location: index.php');
    }

    public function newsCreate()
    {
        $this->checkAuth();
        if (!empty($_POST['mavzu']) && !empty($_POST['matn'])){
            $model = new NewModel();
            $mavzu = trim($_POST['mavzu']);
            $matn  = trim($_POST['matn']);
            $rasm  = $_FILES['rasm'];
            move_uploaded_file($rasm['tmp_name'],'uploads/'.$rasm['name']);
            $file = "uploads/".$rasm['name'];
            $image = new Imagine();
            $size = new Box(100, 100);
            $new_name = "thumb_".$rasm['name'];
            $up = "uploads/";
            $image->open($file)->resize($size)->save($up.$new_name);
            $model->create($mavzu, $matn, $rasm['name'],$new_name);
            header('Location: index.php?route=Admin/tables_news');
        }

        $this->render('_header');
        $this->render('create_news');
        $this->render('_footer');
    }
    public function newsList()
    {
        $this->checkAuth();

        $model = new NewModel();
        $list = $model->getAll();

        $this->render('_header');
        $this->render('tables_news', [
            'items' => $list
        ]);
        $this->render('_footer');
    }

    public function newsEdit()
    {
        $this->checkAuth();
        if (empty($_GET['id'])){
            header('Location: index.php?route=Admin/tables_news');
        }
        $id = $_GET['id'];
        $model = new NewModel();
        $item = $model->getOne($id);
        if (!empty($_POST['mavzu']) && !empty($_POST['matn'])){
            $mavzu = trim($_POST['mavzu']);
            $matn  = trim($_POST['matn']);
            $rasm  = $_FILES['rasm'];
            move_uploaded_file($rasm['tmp_name'],'uploads/'.$rasm['name']);
            $model->update($id, $mavzu, $matn, $rasm['name']);
            header('Location: index.php?route=Admin/tables_news');
        }

        $this->render('_header');
        $this->render('update_news',[
            'item' => $item[0]
        ]);
        $this->render('_footer');
    }

    public function newsDelete()
    {
        $id = $_GET['id'];
        $model = new NewModel();
        $model->delete($id);
        header('Location: index.php?route=Admin/tables_news');
    }
    public function ImageList()
    {
        $this->checkAuth();

        $model = new imagesModel();
        $list = $model->getAll();

        $this->render('_header');
        $this->render('tables_images', [
            'items' => $list
        ]);
        $this->render('_footer');
    }
    public function ImageCreate()
    {
        $this->checkAuth();
        if (isset($_FILES['rasmlar'])){
            $rasm  = $_FILES['rasmlar'];
            $model = new imagesModel();
            move_uploaded_file($rasm['tmp_name'], 'uploads/'.$rasm['name']);
            $file = "uploads/".$rasm['name'];
            $image = new Imagine();
            $size = new Box(500, 800);
            $new_name = "uploads/thumb_".$rasm['name'];
            $model->create($rasm['name']);
            header('Location: index.php?route=Admin/tables_images');
        }

        $this->render('_header');
        $this->render('create_images');
        $this->render('_footer');
    }
    public function ImageDelete()
    {
        $id = $_GET['id'];
        $model = new imagesModel();
        $model->delete($id);
        header('Location: index.php?route=Admin/tables_images');
    }

}