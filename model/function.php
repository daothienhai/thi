<?php
function danhsach(){
    global $connect;
    $query = "SELECT * FROM category INNER JOIN post USING (category_id) ORDER BY post_id DESC";
    $result = mysqli_query($connect, $query);
    $data = array();
    while ($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    return $data;
    
}
function get_danhmuc(){
    global $connect;
    $query = "SELECT * FROM category";
    $result = mysqli_query($connect,$query);
    $data = array();
    while ($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
        
}
    return $data;
}
function get_baiviet($id){
    global $connect;
    $query = "SELECT * FROM post WHERE post_id = '$id'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
    return $row;
    
}
function checkloi($category_id,$title,$content){
    $error = array();
    if(empty($category_id) || empty($title) || empty($content)){
        $error[] = 'nhap du lieu cac truong';
        
    }
    if($category_id == 0){
        $error[] = 'chua chon danh muc';
    }
    return $error;
    
}
function them($category_id,$title,$content){
    global $connect;
    $query = "INSERT INTO post VALUES ('',$category_id,'$title','$content')";
    mysqli_query($connect, $query);
}

function sua($category_id,$title,$content,$id){
    global $connect;
    $query = "UPDATE post SET category_id='$category_id',title='$title',content='$content' WHERE post_id= '$id'";
    mysqli_query($connect, $query);
}
function xoa($id){
    global $connect;
    $query = "DELETE FROM post WHERE post_id='$id'";
    mysqli_query($connect, $query);
}
?>