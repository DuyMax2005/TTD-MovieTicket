<a href="<?= BASE_URL_ADMIN . '&action=schedules-create' ?>" class="w-25 btn btn-primary mb-3">Thêm mới</a>

<?php
if (isset($_SESSION['success'])) {
    $class = $_SESSION['success'] ? 'alert-success' : 'alert-danger';

    echo "<div class='alert $class'>{$_SESSION['msg']}</div>";

    unset($_SESSION['success']);
    unset($_SESSION['msg']);
}
?>

<table class="table table-bordered">
    <thead>
        <tr>
            <th class="text-center">STT</th>
            <th class="text-center">Phòng chiếu</th>
            <th class="text-center">Tên phim</th>
            <th class="text-center">Bắt đầu</th>
            <th class="text-center">Kết thúc</th>
            <th class="text-center">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php $stt = 1;
        foreach ($data as $schedule): ?>
            <tr>
                <td class="text-center"><?= $stt++; ?></td>
                <td class="text-center"><?= $schedule['r_name'] ?></td>
                <td class="text-center"><?= $schedule['m_name'] ?></td>
                <td class="text-center"><?= $schedule['s_start_at'] ?></td>
                <td class="text-center"><?= $schedule['s_end_at'] ?></td>

                <td class="d-flex justify-content-center">
                    <a href="<?= BASE_URL_ADMIN . '&action=schedules-show&id=' . $schedule['s_id'] ?>"
                        class="btn btn-info">Xem</a>
                    <a href="<?= BASE_URL_ADMIN . '&action=schedules-updatePage&id=' . $schedule['s_id'] ?>"
                        class="btn btn-warning mx-2">Sửa</a>
                    <a href="<?= BASE_URL_ADMIN . '&action=schedules-delete&id=' . $schedule['s_id'] ?>"
                        onclick="return confirm('Bạn có chắc muốn xóa?')"
                        class="btn btn-danger">Xóa</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>