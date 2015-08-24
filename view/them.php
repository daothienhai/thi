<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>THEM BAI VIET</title>
    </head>
    <body>
        <h3>THEM BAI VIET</h3>
        <form method="post">
            <select value="0" name="category_id">
                <option selected>CHON DANH MUC</option>
                <?php foreach ($danhmuc as $item) { ?>
                <option value="<?php echo $item['category_id']?>"><?php echo $item['name']?></option>
                <?php }?>
            </select>
            <p>title: <input type="text"name="title"></p>
            <p>content: <textarea name="content"></textarea></p>
            <input type="submit" name="submit" value="them" />
            
            
        </form>
    </body>
</html>
