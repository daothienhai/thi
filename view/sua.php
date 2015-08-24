<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SUA BAI VIET</title>
    </head>
    <body>
        <h3>SUA BAI VIET</h3>
        <form method="post">
            <select value="0" name="category_id">
                
                <?php foreach ($danhmuc as $item) { ?>
                <option <?php if($baiviet['category_id'] == $item['category_id']){ echo "selected='selected'";} ?> value="<?php echo $item['category_id']?>"><?php echo $item['name']?></option>
                <?php }?>
            </select>
            <p>title: <input type="text"name="title" value="<?php if(isset($_POST['title'])){echo $_POST['title'];}else{ echo $baiviet['title'];} ?>"></p>
            <p>content: <textarea name="content"><?php if(isset($_POST['content'])){echo $_POST['content'];} else { echo $baiviet['content'];} ?></textarea></p>
            <input type="submit" name="submit" value="sua" />
            
            
        </form>
    </body>
</html>
