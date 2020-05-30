<?php
    use \Hcode\Model\User;
    use \Hcode\PageAdmin;
    //  rota para página de usuários
    $app->get("/admin/users", function() {
        User::verifyLogin();
    
        $users = User::listAll();
        $page = new pageAdmin();
        $page->setTpl("users", array(
            "users"=>$users
        ));
    });
    
    $app->get("/admin/users/create", function() {
        User::verifyLogin();
        $page  = new PageAdmin();
        $page->setTpl("users-create");
    });
    
    //route para delete
    $app->get("/admin/users/:iduser/delete", function($iduser){
        User::verifyLogin();
        $user = new User();
        $user->get((int)$iduser);
        $user->delete();
    
        header("Location: /admin/users");
        exit;
    });
    
    // Buscar usuário por Id
    $app->get("/admin/users/:iduser", function($iduser){
        User::verifyLogin();
    
        $user = new User();
    
        $user->get((int)$iduser);
        $page = new PageAdmin();
        $page->setTpl("users-update", array(
            "user" => $user->getValues()
        ));
    });
    
    //Create User Page roter
    $app->post("/admin/users/create", function() {
        User::verifyLogin();
        $user = new User();
    
        $_POST["inadmin"] = (isset($_POST["inadmin"])) ? 1 : 0;
        $user->setData($_POST);
        $user->save();
        header("Location: /admin/users");
        exit;
    });
    
    // Update Usuário, buscando por id
    $app->post("/admin/users/:iduser", function($iduser){
    
        User::verifyLogin();
    
        $user = new User();
    
        $_POST["inadmin"] = (isset($_POST["inadmin"])) ? 1 : 0;
    
        $user->get((int)$iduser);
        $user->setData($_POST);
        $user->update();
        header("Location: /admin/users");
        exit;
    });
?>