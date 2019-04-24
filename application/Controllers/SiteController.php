<?php
use PHPMailer\PHPMailer\PHPMailer;
/**
 * Created by PhpStorm.
 * User: PIFAGOR
 * Date: 07.04.2019
 * Time: 1:46
 */
class SiteController extends Controller
{
    public function bosh(){
        //Get all items
        $news = new NewModel();
        //Begin Render
        $this->render('-header-'); // Content
        $this->render('Bosh_sahifa');
        $this->render('-footer-');
    }
    public function image(){
        $img= new imagesModel();
        $data['list_img'] = $img->getAll();
//        var_dump($data); exit;
        $this->render('-header-');
        $this->render('rasmlar', $data);
        $this->render('-footer-');
    }
    public function news(){
        $news=new NewModel();
        $data['list_news'] = $news->getAll();
        $this->render('-header-');
        $this->render('yangiliklar',$data);
        $this->render('-footer-');
    }
    public function ABOUT(){
        $news=new NewModel();
        $this->render('-header-');
        $this->render('about');
        $this->render('-footer-');
    }
    public function CONTACT(){
        $alert = null;
        if ($_POST) {
            $name = $_POST['userName'];
            $email = $_POST['userEmail'];
            $phone = $_POST['userPhone'];
            $subject = $_POST['Subject'];
            $message = $_POST['userMsg'];

            global $ozgaruvchi;
            $adminEmail = $ozgaruvchi['adminMail'];
            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'sopratses@gmail.com';
            $mail->Password   = 'qaroqchi';
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            $mail->setFrom($email, $name);
            $mail->addAddress($adminEmail);
            $mail->Subject = $subject;
            $mail->Body = $message . PHP_EOL . "Telefon: " . $phone;
            $result = $mail->send();
            $alert = $result ? 'success' : 'error';
        }
        $this->render('-header-');
        $this->render('contact',[
            'alert' => $alert
        ]);
        $this->render('-footer-');
    }

    public function Pages(){
        $model=new NewModel();
        $page_limit = 5;
        if (!empty($_GET['page']))
        {
            $page = $_GET['page'];
        }
        else
        {
            $page = 1;
        }
        //Pagination BEGIN
        $query = $model->query('SELECT COUNT(*) as elements FROM NEWS');
        $count_result = $query->fetch();
        $count = (int) $count_result['elements'];
        if($count > $page_limit)
        {
            $offset = ($page - 1) * $page_limit;
        }
        $pager = ceil($count / $page_limit);
        //Pagination END
        $query = $model->query(
            'SELECT * FROM NEWS ORDER BY id DESC LIMIT '.$page_limit.' OFFSET '.$offset
        );
        $list = $query->fetchAll();
    }
}