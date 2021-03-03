<?php
    require_once('controllers/base_controller.php');
    require_once('models/User.php');
    require_once('models/Account.php');
    class AccountController extends BaseController {
        function __construct()
        {
            $this->name = 'account';
        }

        function login() {
            if (isLoggin()) {
                redirect('?controller=panel&action=home');
            }
            $user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
            $pass = filter_input(INPUT_POST, 'pwd', FILTER_SANITIZE_STRING);
            if (empty($user) || empty($pass)) {

            }
            else {
                $account = User::login($user, $pass);
                if ($account) {
                    $_SESSION['user'] = serialize($account);
                    redirect('?controller=panel&action=home');
                }

            }
            $this->render('login', array(), 'template_01');
        }

        function logout() {
            if (isLoggin()) {
                unset($_SESSION['user']);
                redirect('?controller=account&action=login');
            }
        }

        function register() {
            if (isLoggin()) {
                redirect('?controller=panel&action=home');
            }
            $user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
            $pass = filter_input(INPUT_POST, 'pwd', FILTER_SANITIZE_STRING);
            $re_pass = filter_input(INPUT_POST, 're-pwd', FILTER_SANITIZE_STRING);
            if (!empty($user) && !empty($email) && !empty($pass) && !empty($re_pass)) {
                if ($pass != $re_pass) {
                    redirect('?controller=account&action=register');
                }
                else
                {
                    $pass = md5($pass);
                    Account::register($user, $pass, $email);
                    redirect('?controller=account&action=login');
                }
            }
            $this->render('register', array(), 'template_01');
        }

    }
?>