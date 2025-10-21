<?php
require_once './app/model/userModel.php';
require_once './app/view/auth.php';
require_once './app/controllers/adminController.php';



class AuthController
{
    private $userModel;
    private $view;
    private $adminController;
//     private $authHelper;
//     private $allUsers;
//     private $user;

    public function __construct(){
        $this->userModel = new UserModel();
        $this->view = new AuthView();
        $this->adminController = new AdminController();
//         // $this->authHelper = new AuthHelper();
//         // $this->allUsers = $this->userModel->getAllUsers();
    }

    public function showLogin(){
        return $this->view->renderAuth('login');
    }

    public function verifyUser(){
        echo var_dump($_POST['name']);
        echo var_dump($_POST ['password']);
        session_start();
        $userName = $_POST['name'];
        $password = $_POST['password'];
        if (
            isset($userName) && !empty($userName) &&
            isset($password) && !empty($password)
        ) {
            $user_db = $this->userModel->getUser($userName);
            echo var_dump($user_db);
            if (isset($user_db) && $user_db) {
                echo var_dump(password_verify($password, $user_db->password));
                if (password_verify($password, $user_db->password)) {
                    $_SESSION['NAME'] = $user_db->nombre;
                    $_SESSION['USER_ID'] = $user_db->id;
                    if ($user_db->rol == 'admin') {
                        $this->showAdminHome($user_db);
                        exit();
                    }
                }
            }
        }
    }

    // public function showSignup()
    // {
    //     return $this->view->renderAuth('signup');
    // }

    // public function showLogout()
    // {
    //     return $this->view->renderAuth('logout');
    // }

    // public function showError($errors, $fromSignUp = false)
    // {
    //     return $this->view->renderAuth($fromSignUp ? 'signup' : 'login', $errors);
    // }


//     public function createUser()
//     {
//         $name = $_POST['name'];
//         $email = $_POST['email'];
//         $password = $_POST['password'];
//         $clearance = 'user';
//         if (isset($name) && !empty($name) && isset($email) && !empty($email) && isset($password) && !empty($password)) {
//             $name = strtoupper($name);
//             $encriptedPass = password_hash($password, PASSWORD_DEFAULT);

//             if (!$this->getExistingUser($name, $email)) {
//                 $this->showError('User already exist', true);
//                 return;
//             }

//             $this->userModel->createUser($name, $email, $encriptedPass, $clearance);
//             $this->showLogin($name);
//             return;
//         }
//         echo 'Input is empty!';
//     }

//     public function getExistingUser($name, $email)
//     {
//         $exist = 0;
//         foreach ($this->allUsers as $user_db) {
//             if ($name == $user_db->name || $email == $user_db->email) {
//                 $exist++;
//             }
//         }
//         return $exist == 0;
//     }

//     public function showArena($user)
//     {
//         $this->arenaController->index($user->name, $user->_id);
//     }

    public function showAdminHome($user)
    {
        $this->adminController->index($user->nombre, $user->id);
    }

//     public function logout()
//     {
//         $this->authHelper->logOut();
//     }

//     public function getUser()
//     {
//         // echo var_dump($this->user);
//         return $this->user;
//     }
}
