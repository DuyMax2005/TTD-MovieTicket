<?php

if(isset($_SESSION['success'])){
    $class = $_SESSION['success'] ? 'alert-success' : 'alert-danger';

    echo "<div class='alert $class'>{$_SESSION['msg']}</div>";

    unset($_SESSION['success']);
    unset($_SESSION['msg']);
}
?>

<?php if (!empty($_SESSION['errors'])) : ?>

    <div class="alert alert-danger">
        <ul>
            <?php foreach ($_SESSION['errors'] as $value) : ?>
                <li><?= $value ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php 
    unset($_SESSION['errors']);
    endif; 
?>

<form action="<?= BASE_URL_ADMIN . '&action=genres-update&id=' . $genre['id'] ?>" method="post" enctype="multipart/form-data">
    <div class="my-3">
        <label for="name" class="form-label">Tên thể loại:</label>
        <input type="text" class="form-control" name="name" id="name"
            value="<?php if (isset($_SESSION['data'])) {
                        echo $_SESSION['data']['name'];
                    } else {
                        echo $genre['name'];
                    } ?>">
    </div>
    <div class="my-3">
        <label for="description" class="form-label">Mô tả:</label>

        <textarea class="form-control" name="description" id="description"><?php if (isset($_SESSION['data'])) {
                echo $_SESSION['data']['description'];
            } else {
                echo $genre['description'];
            } ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="<?= BASE_URL_ADMIN . '&action=genres-list' ?>" class="btn btn-danger">Quay lại danh sách</a>
</form>