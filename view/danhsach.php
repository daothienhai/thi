<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>DANH SACH</title>
    </head>
    <body>
        <h3>DANH SACH</h3>
        <a href="index.php?page=them">THEM BAI VIET</a>
        <table border="1" width="800">
            <tr>
                <td>Ma bai viet</td>
                <td>Ten chuyen muc</td>
                <td>Tieu de</td>
                <td>Noi dung</td>
                <td>Sua</td>
                <td>Xoa</td>     
            </tr>
            <?php foreach ($danhsach as $row) { ?>
            <tr>
                <td><?php echo $row['post_id']?></td>
                <td><?php echo $row['name']?></td>
                <td><?php echo $row['title']?></td>
                <td><?php echo $row['content']?></td>
                <td><a href="index.php?page=sua&id=<?php echo $row['post_id']?>">SUA BAI VIET</a></td>
                <td><a href="index.php?page=xoa&id=<?php echo $row['post_id']?>">XOA BAI VIET</a></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>
