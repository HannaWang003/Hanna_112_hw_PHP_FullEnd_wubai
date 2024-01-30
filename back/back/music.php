<h1>Music M</h1>
<main id="BackMusic">
    <div>
        <i id="AddBtn" class="fa-sharp fa-solid fa-plus fa-xl"></i>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <i id="CancelAddBtn" class="fa-sharp fa-solid fa-xmark fa-xl"></i>
    </div>
    <!-- 新增項目區 -->
    <form action="./api/add_music.php" method="post" enctype="multipart/form-data">
        <table style="display:none">
            <tr>
                <th><label>date</label></th>
                <th><label>Cover</label></th>
                <th><label>album(required)</label></th>
                <th><label>publisher</label></th>
                <th><label>num</label></th>
                <th><label>note</label></th>
                <th>operate</th>
            </tr>
            <tr>
                <td colspan="7" style="text-align:end">
                    <button><i class="fa-sharp fa-regular fa-floppy-disk fa-xl"></i></button>
                </td>
            </tr>
            <tr id="AddContainer">
                <td><input type="date" name="date[]"></td>
                <td>
                    <!-- <input type="file" name="img[]"> -->

                    <div>
                        <img class="previewImage"
                            style="max-width: 300px; max-height: 300px; margin-top: 10px; display: none;">
                        <input class="imageInput" type="file" name="img[]" id="">
                    </div>
                </td>
                <td><input type="text" name="album[]" required></td>
                <td><input type="text" name="publisher[]"></td>
                <td><input type="text" name="num[]"></td>
                <td><textarea name="note[]" id="" style="height:10vh"></textarea></td>
                <td>
                    <i id="AddMoreBtn" class="fa-sharp fa-solid fa-file-circle-plus fa-xl"></i>
                    <i id="ClearAddBtn" class="fa-sharp fa-solid fa-file-circle-minus fa-xl"></i>
                </td>
            </tr>
        </table>
    </form>
    <!--/ 新增項目區 -->
    <table>
        <tr>
            <th>del</th>
            <th><label>date</label></th>
            <th><label>Cover</label></th>
            <th>
                <label$>album</label>
            </th>
            <th><label>publisher</label></th>
            <th><label>num</label></th>
            <th><label>note</label></th>
            <th><label>sh</label></th>
            <th>operate</th>
        </tr>
        <?php
        $total = $DB->count('id');
        $nowpage = ($_GET['p']) ?? 1;
        $size = 5;
        $pages = ceil($total / $size);
        $start = ($nowpage - 1) * $size;
        $rows = $DB->all(" order by date desc limit $start,$size");
        if ($nowpage > 1) {
            $prev = $nowpage - 1;
            echo "<a href='?do={$_GET['do']}&&p=$prev'><i class='fa fa-sharp fa-light fa-caret-left'></i></a>";
        }
        for ($i = 1; $i <= $pages; $i++) {
            $style = ($i == $nowpage) ? "font-size:24px;font-weight:bolder;" : "";
            echo "<a href='?do={$_GET['do']}&&p=$i' style='$style'>$i</a>";
        }
        if ($nowpage < $pages) {
            $next = $nowpage + 1;
            echo "<a href='?do={$_GET['do']}&&p=$next'><i class='fa fa-sharp fa-light fa-caret-right fa-xl'></i></a>";
        }
        foreach ($rows as $row) {
        ?>
        <tr>
            <td>
                <ion-icon class="DelBtn" name="trash-sharp" size="large" data-id="<?= $row['id'] ?>"
                    data-table="<?= $_GET['do'] ?>"></ion-icon>
            </td>
            <td><input type="date" class="date" name="date" value="<?= $row['date'] ?>"></td>
            <td class="text-center">
                <img src="./img/<?= $row['img'] ?>">
                <br>
                <button class="editFile" data-id="<?= $row['id'] ?>" data-table=<?= $_GET['do'] ?>>更換專輯封面</button>
            </td>
            <td><input type="text" class="album" name="album" value="<?= $row['album'] ?>"></td>
            <td><input type="text" class="publisher" name="publisher" value="<?= $row['publisher'] ?>"></td>
            <td><input type="text" class="num" name="num" value="<?= $row['num'] ?>"></td>
            <td><textarea class="note" name="note" id="" style="height:10vh"><?= $row['note'] ?></textarea></td>
            <td><input type="checkbox" class="sh" name="sh" value="<?= $row['sh'] ?>"
                    <?= ($row['sh'] == 1) ? "checked" : "" ?>>
            </td>
            <td>
                <i class="EditBtn fa-regular fa-pen-to-square fa-xl" data-id="<?= $row['id'] ?>"
                    data-table="<?= $_GET['do'] ?>"></i>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</main>
<script>
$(".editFile").on('click', function() {
    let table = $(this).data('table');
    let id = $(this).data('id');
    op("#addModual", "#addMain", "./back/modual/edit_file.php?do=" + table + "&&id=" + id);
})
$('#AddBtn').on('click', () => {
    $('#AddContainer').parent().parent().fadeIn();
})
$('#CancelAddBtn').on('click', () => {
    $('#AddContainer').nextAll('tr').remove();
    $('#AddContainer').parent().parent().hide();
})

$('#AddMoreBtn').click(function() {
    let AddTo = `<tr>
            <td><input type="date" name="date[]"></td>
            <td>
            <img class="previewImage" style="max-width: 300px; max-height: 300px; margin-top: 10px; display: none;">
            <input class='imageInput' type="file" name="img[]">
            </td>
            <td><input type="text" name="album[]"></td>
            <td><input type="text" name="publisher[]"></td>
            <td><input type="text" name="num[]"></td>
            <td><textarea name="note[]" id="" style="height:10vh"></textarea></td>
        <td></td>
        </tr>`;
    $('#AddContainer').after(AddTo)
})
$('#ClearAddBtn').click(function() {
    $('#AddContainer').next('tr').remove();
})
$('.DelBtn').click(function() {
    let id = $(this).data('id');
    let table = $(this).data('table');
    if (confirm('Are you sure?')) {
        $(this).parent().parent().fadeOut();
        $.post('./api/del.php', {
            id,
            table
        }, function() {
            alert("已刪除");
        });
        location.reload();
    }

})
$('.EditBtn').click(function() {
    if (confirm("確定修改?")) {
        let id = $(this).data('id');
        let table = $(this).data('table');
        let top = $(this).parent().parent();
        let sh = (top.find('.sh').prop('checked')) ? 1 : 0;
        let newdata = {
            id: id,
            date: top.find('.date').val(),
            album: top.find('.album').val(),
            publisher: top.find('.publisher').val(),
            num: top.find('.num').val(),
            note: top.find('.note').val(),
            sh: sh,
        }
        // console.log(newdata);
        $.post("./api/edit.php", {
            id,
            table,
            newdata
        }, function(res) {
            alert(res + "筆資料已修改");
        })
    }
    location.reload();

})
</script>