<?php
    include("conexao.php");
        switch (@$_REQUEST["page"]) {
            case "novo":
                include("newUser.php");
                break;
            case "perfil":
                include("profileUser.php");
                break;
            case "edita":
                include("editUser.php");
                break;
            case "salvar":
                include("saveProfileUser.php");
                break;
            default:
                include("homepage.php");
        }
?>