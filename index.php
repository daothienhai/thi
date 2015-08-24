<?php
    require 'model/config.php';
    require 'model/connect.php';
    require 'model/function.php';



    if(isset($_GET['page'])){
        $page = $_GET['page'];
}
else {
    
        $page = 'danhsach';

}
    switch ($page){
        case 'danhsach' :
            include 'controller/danhsach.php';
            break;
        case 'them':
            include 'controller/them.php';
            break;
        case 'sua':
            include 'controller/sua.php';
            break;
        case 'xoa':
            $id = $_GET['id'];
            xoa($id);
            header('location:index.php');
    }

?>