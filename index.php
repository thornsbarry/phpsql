<?php
//require ('header.php')
//?>
<!--<a href="forms.php">Формы</a>-->
<!--<table>-->
<!--    <caption>Авторы книг</caption>-->
<!--    <thead>-->
<!--    <tr>-->
<!--        <th>№</th>-->
<!--        <th>Имя</th>-->
<!--        <th>Фамилия</th>-->
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--    --><?php
//    $authors = $db->getAuthors();
//    foreach($authors as $key=>$author) {
//        ?>
<!--        <tr>-->
<!--            <td>--><?php //echo ++$key; ?><!--</td>-->
<!--            <td>--><?php //echo $author['first_name']; ?><!--</td>-->
<!--            <td>--><?php //echo $author['last_name']; ?><!--</td>-->
<!--        </tr>-->
<!--        --><?php
//    }
//    ?>
<!--    </tbody>-->
<!--</table>-->
<?php
//require ('footer.php')
//?>
</tbody>
</table>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
    </tr>
    </thead>
    <tbody>
        <?php
        $authors = $db->getAuthors();
        foreach($authors as $key=>$author) {
            ?>
            <tr>
                <td><?php echo ++$key; ?></td>
                <td><?php echo $author['first_name']; ?></td>
                <td><?php echo $author['last_name']; ?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
