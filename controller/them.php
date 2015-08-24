<?php
    $danhmuc = get_danhmuc();
    if(isset($_POST['submit'])){
    $checkloi = checkloi($_POST['category_id'], $_POST['title'], $_POST['content']);
    if(!empty($checkloi)){
        foreach ($checkloi as $error){
            echo $error.'<br>';
        }
    }
 else {
     $category_id = $_POST['category_id'];
     $title = $_POST['title'];
     $content = $_POST['content'];
}
    if(isset($category_id) && isset($title) && isset($content)){
        them($category_id, $title, $content);
        header('location:index.php');
    }
    }   
    include 'view/them.php';


?>
