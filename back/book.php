<h1>Book M</h1>
<main id="BackBook">
    <div>
        <i id="AddBtn" class="fa-sharp fa-solid fa-plus fa-xl"></i>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <i id="CancelAddBtn" class="fa-sharp fa-solid fa-xmark fa-xl"></i>
    </div>
    <!-- 新增項目區 -->
    <form action="./api/add_book.php" method="post" enctype="multipart/form-data">
        <table style="display:none">
            <tr>
                <th>IMG</th>
                <th>ISBN</th>
                <th>BOOK</th>
                <th>DESC</th>
                <th>Issuing Date</th>
                <th>operate</th>
            </tr>
            <tr>
                <td colspan="6" style="text-align:end">
                    <button><i class="fa-sharp fa-regular fa-floppy-disk fa-xl"></i></button>
                </td>
            </tr>
            <tr id="AddContainer">
                <td>
                    <img class="previewImage" style="max-width: 300px; max-height: 300px; margin-top: 10px; display: none;">
                    <input class='imageInput' type="file" name="img[]">
                </td>
                <td><input type="text" name="isbn[]" required></td>
                <td><input type="text" name="book[]"></td>
                <td><textarea name="text[]" cols="30" rows="10"></textarea></td>
                <td><input type="date" name="date[]"></td>
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
            <th>IMG</th>
            <th>ISBN</th>
            <th>BOOK</th>
            <th>DESC</th>
            <th>Issuing Date</th>
            <th>on/off</th>
            <th class="tac">operate</th>
        </tr>
        <?php
        $total = $Book->count();
        $nowpage = ($_GET['p']) ?? 1;
        $size = 5;
        $pages = ceil($total / $size);
        $start = ($nowpage - 1) * $size;
        $rows = $Book->all(" order by id desc limit $start,$size");
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
                    <ion-icon class="DelBtn" name="trash-sharp" size="large" data-id="<?= $row['id'] ?>" data-table="<?= $_GET['do'] ?>"></ion-icon>
                </td>
                <td>
                    <img src="./img/<?= $row['img'] ?>">
                    <br>
                    <button class="editFile" data-id="<?= $row['id'] ?>" data-table=<?= $_GET['do'] ?>>更換照片</button>
                </td>
                <td><input type="text" class="isbn" value="<?= $row['isbn'] ?>"></td>
                <td><input type="text" class="book" value="<?= $row['book'] ?>"></td>
                <td><textarea name="text" class="text" cols="30" rows="10"><?= $row['text'] ?></textarea></td>
                <td><input type="date" class="date" value="<?= $row['date'] ?>"></td>
                <td><input type="checkbox" name="sh" class="sh" <?= ($row['sh'] == 1) ? "checked" : "" ?>></td>
                <td>
                    <i class="EditBtn fa-regular fa-pen-to-square fa-xl" data-id="<?= $row['id'] ?>" data-table="<?= $_GET['do'] ?>"></i>
                    <button onclick="go('./back/add-channel.php',<?= $row['id'] ?>)"><i class="fa-solid fa-folder-plus fa-xl"></i></button>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</main>
<script>
    // ajax
    function go(url, id) {
        $.get(url, {
            id
        }, function(data) {
            $('#Back').html(data);
        })
    }
    // function go(url) {
    //     $.ajax({
    //         url: url,
    //         type: "get",
    //         success: function(data) {
    //             $('#Back').html(data);
    //         },
    //         error: function() {
    //             console.log('請求失敗');
    //         }
    //     })
    // }
    // ajax_end
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
            <td>
            <img class="previewImage" style="max-width: 300px; max-height: 300px; margin-top: 10px; display: none;">
            <input class='imageInput' type="file" name="img[]">
            </td>
            <td><input type="text" name="text[]"></td>
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
        if (confirm("確認刪除?")) {
            $(this).parent().parent().fadeOut();
            $.post('./api/del_bookAll.php', {
                id,
                table
            }, function(res) {
                alert(`已刪除${res}筆資料`);
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
            // console.log(top.find('.sh'));
            let newdata = {
                id: id,
                isbn: top.find('.isbn').val(),
                book: top.find('.book').val(),
                text: top.find('.text').val(),
                date: top.find('.date').val(),
                sh: sh,
            }
            // console.log(newdata);
            $.post("./api/edit.php", {
                id,
                table,
                newdata
            }, function(res) {

            })
        }
        location.reload();

    })
</script>