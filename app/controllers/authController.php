<?php
// require_once '../model/userModel.php';
require_once './app/view/auth.php';



class AuthController
{
//     private $userModel;
    private $view;
//     private $arenaController;
//     private $adminController;
//     private $authHelper;
//     private $allUsers;
//     private $user;
//     private $usersHardcoded = [
//         'admin' => [
//             'id' => 1,
//             'password_hash' => '$2y$10$W/27w2Qf.d5v8wS4t8jKlu8T5iX5t8z6P4u5y3E/p7t8aF1C.V1t.' // Hash de 'adminpass'
//         ],
//         'guest' => [
//             'id' => 2,
//             'password_hash' => '$2y$10$w6g8hK.x2p9m1r0s.y3e1c6d3f8g9h3j2k4l0m5n7o9p1q6r7s8t.' // Hash de otra contraseña
//         ]
//     ];



     public function __construct()
     {
//         // $this->userModel = new UserModel();
        $this->view = new AuthView();
//         // $this->arenaController = new ArenaController();
//         // $this->adminController = new AdminController();
//         // $this->authHelper = new AuthHelper();
//         // $this->allUsers = $this->userModel->getAllUsers();
     }

    public function showLogin()
    {
        return $this->view->renderAuth('login');
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

//     public function verifyUser()
//     {
//         $userName = $_POST['name'];
//         $password = $_POST['password'];
//         if (
//             isset($userName) && !empty($userName) &&
//             isset($password) && !empty($password)
//         ) {
//             $user_db = $this->userModel->getUser($userName);
//             if (isset($user_db) && $user_db) {
//                 if (password_verify($password, $user_db->password)) {
//                     $_SESSION['NAME'] = $user_db->name;
//                     $_SESSION['USER_ID'] = $user_db->_id;
//                     $this->user = $user_db;
//                     session_start();
//                     if ($user_db->clearance == 'admin') {
//                         $this->showAdminHome($user_db);
//                     } else {
//                         $this->showArena($user_db);
//                     }
//                 } else {
//                     $this->showError('Invalid password');
//                 }
//             } else {
//                 $this->showError("User don't exist");
//             }
//         } else {
//             $this->showError('Input is empty!');
//         }
//     }

//     public function showArena($user)
//     {
//         $this->arenaController->index($user->name, $user->_id);
//     }

//     public function showAdminHome($user)
//     {
//         $this->adminController->index($user->name, $user->_id);
//     }

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
