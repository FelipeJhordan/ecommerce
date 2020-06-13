<?php
    use \Hcode\Model\User;
    use \Hcode\PageAdmin;
    //  rota para página de usuários

    $app->get("/admin/users/:iduser/password", function($iduser){

        User::verifyLogin();

        $user = new User();

        $user->get((int)$iduser);

        $page = new PageAdmin();

        $page->setTpl("users-password", [
            "user"=>$user->getValues(),
            "msgError"=>User::getError(),
            "msgSuccess"=>User::getSuccess()
        ]);
    });

      $app->post("/admin/users/:iduser/password", function($iduser){

        User::verifyLogin();
        if(!isset($_POST['despassword'])|| $_POST['despassword'] === '') {
            User::setError("Preencha a nova senha.");
            header("Location: /admin/users/$iduser/password");
            exit;
        }
         if(!isset($_POST['despassword-confirm'])|| $_POST['despassword-confirm'] === '') {
            User::setError("Preencha a confirmação da nova senha.");
            header("Location: /admin/users/$iduser/password");
            exit;
        }

        if($_POST['despassword'] !== $_POST['despassword-confirm']) {
            User::setError("Confirme corretamente as senhas.");
            header("Location: /admin/users/$iduser/password");
            exit;
        }

        $user = new User();

        $user->get((int)$iduser);

        $user->setPassword(User::getPasswordHash($_POST["despassword"]));

        $user->save();

        User::setSuccess("Senha do usuario ". $user->getdeslogin() . " Alterada com sucesso");
        header("Location: /admin/users/$iduser/password");
        exit;

    });

    $app->get("/admin/users", function() {
        User::verifyLogin();
        $search = (isset($_GET['search'])) ? $_GET["search"] : "";
        $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
        

        $pages = [];
        if($search != ''){
            $pagination = User::getPageSearch($search,$page,5);
        } else {
            $pagination = User::getPage($page,5);
        }
        for ($x = 0 ; $x < $pagination['pages']; $x++){
            array_push($pages,['href' => '/admin/users?'.http_build_query([
                'page' => $x+1,
                'search' => $search
            ]), 'text' => $x+1
            ]
        );
        }

        $page = new pageAdmin();
        $page->setTpl("users", array(
            "users"=>$pagination['data'],
            "search"=>$search,
            "pages"=> $pages
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