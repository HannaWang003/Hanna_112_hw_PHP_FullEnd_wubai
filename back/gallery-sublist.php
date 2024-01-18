<?php
include_once "../api/db.php";
?>
<style>
img {
    height: 100px;
}

table {
    width: 80vw;
    margin: auto;

    tr,
    th,
    td {
        border: 1px solid black;
        text-align: center;
        vertical-align: middle;
        padding: 10px;

    }

}
</style>
<?php
$subject = $Gallery->find($_GET['id']);
?>
<h1>Gallery - <?= $subject['text'] ?> - sublist</h1>
<div style="width:80%;margin:auto;text-align:end">
    <a href="./back.php?do=gallery"><img src="./img/<?= $subject['img'] ?>" alt=""></a>
</div>
<br>
<form id="myForm" enctype="multipart/form-data">
    <table>
        <tr>
            <th>img</th>
            <th>text</th>
            <th>operate</th>
        </tr>
        <tr id="AddContainer">
            <td colspan="4" style="text-align:end">
                <input type="hidden" name="id" value=<?= $_GET['id'] ?>>
                <button type="submit" style="display:none"><i
                        class="fa-sharp fa-regular fa-floppy-disk fa-xl"></i></button>
                <i id="AddMoreBtn" class="fa-sharp fa-solid fa-file-circle-plus fa-xl"></i>
                <i id="ClearAddBtn" class="fa-sharp fa-solid fa-file-circle-minus fa-xl"></i>

            </td>
        </tr>
    </table>
</form>
<br>
<table id="goPage">
    <tr>
        <td colspan="3">
            <?php
            $size = 5;
            $total = $Gallery->count(['subject_id' => $_GET['id']]);
            $pages = ceil($total / $size);
            for ($i = 1; $i <= $pages; $i++) {
                echo "<button class='pageBtn' onclick='toPage({$_GET['id']},$i,$size)'>$i</button>";
            }
            ?>
        </td>
    </tr>
    <tr>
        <th>img</th>
        <th>text</th>
        <th>刪除</th>
    </tr>
    <?php
    $rows = $Gallery->all(['subject_id' => $_GET['id']], "order by id desc limit 0 ,{$size}");
    foreach ($rows as $row) {
    ?>
    <tr>
        <td><img src="./img/<?= $row['img'] ?>" alt=""></td>
        <td><?= $row['text'] ?></td>
        <td>
            <ion-icon class="DelBtn" name="trash-sharp" size="large" data-id="<?= $row['id'] ?>" data-table="gallery">
            </ion-icon>
        </td>
    </tr>
    <?php
    }
    ?>
</table>
</main>

<script>
$('#goPage').on('click', '.DelBtn', function() {
    let id = $(this).data('id');
    let table = $(this).data('table');

    if (confirm('刪除這張照片')) {
        $(this).parent().parent().fadeOut();
        $.post('./api/del.php', {
            id,
            table
        }, function() {
            alert("已刪除");
        });
    }
});
$(document).ready(function() {
    $("#myForm").submit(function(event) {
        // 阻止表單的默認提交行為
        event.preventDefault();

        // 取得表單數據
        var formData = new FormData(this);

        // 使用$.post()提交表單
        $.ajax({
            url: "./api/add_gallery-sublist.php",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(data) {
                // 表單成功提交後的處理
                console.log("表單提交成功", data);

                // 返回原本的頁面
                // location.reload();
                if (!empty(data)) {
                    //渲染畫面
                    $('#goPage').html(data);
                }

            },
            error: function(error) {
                // 處理錯誤
                console.error("表單提交失敗", error);
            }
        });
        $('#AddContainer').nextAll('tr').remove();
        $('button').prop('type', 'submin').hide();
    });
});
$('#AddMoreBtn').click(function() {
    $('button').prop('type', 'submin').show();
    let AddTo = `<tr>
            <td>
            <img class="previewImage" style="max-width: 300px; max-height: 300px; margin-top: 10px; display: none;">
            <input class='imageInput' type="file" name="img[]">
            </td>
            <td><input type="text" name="text[]" required></td>
        <td>
        
        </td>
        </tr>`;
    $('#AddContainer').after(AddTo)
})
$('#ClearAddBtn').click(function() {
    $('#AddContainer').next('tr').remove();
})
$('.DelBtn').click(function() {
    let id = $(this).data('id');
    let table = $(this).data('table');

    if (confirm('刪除這張照片')) {
        $(this).parent().parent().fadeOut();
        $.post('./api/del.php', {
            id,
            table
        }, function() {
            alert("已刪除");
        });
    }
})

function toPage(subject_id, page, size) {
    $.post('./api/page.php', {
        subject_id,
        page,
        size
    }, function(res) {
        $('#goPage').html(res);
    })
}
</script>