<h1>News M</h1>
<main id="BackNews">
    <div>
        <i id="AddBtn" class="fa-sharp fa-solid fa-plus fa-xl"></i>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <i id="CancelAddBtn" class="fa-sharp fa-solid fa-xmark fa-xl"></i>
    </div>
    <!-- 新增項目區 -->
    <form action="./api/add.php" method="post">
        <table style="display:none">
            <tr>
                <th>date</th>
                <th>title(required)</th>
                <th>text</th>
                <th>operate</th>
            </tr>
            <tr id="AddContainer">
                <td><input type="date" name="date"></td>
                <td><input type="text" name="title" required></td>
                <td>
                <textarea name="text" id="" cols="30" rows="10"></textarea>    
                <td colspan="6" style="text-align:end">
                    <input type="hidden" name="table" value="<?= $_GET['do'] ?>">
                    <button><i class="fa-sharp fa-regular fa-floppy-disk fa-xl"></i></button>
                </td>
            </tr>
        </table>
    </form>
    <!--/ 新增項目區 -->
    <table>
        <tr>
            <th>del</th>
            <th>date</th>
            <th>title</th>
            <th>text(required)</th>
            <th>sh</th>
            <th>operate</th>
        </tr>
        <?php
        $total = $DB->count('id');
        $nowpage = ($_GET['p']) ?? 1;
        $size = 5;
        $pages = ceil($total / $size);
        $start = ($nowpage - 1) * $size;
        $rows = $DB->all(" order by id desc limit $start,$size");
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
                <td><input type="date" name="date" class="date" value="<?= $row['date'] ?>" required></td>
                <td><input type="text" name="title" class="title" value="<?= $row['title'] ?>"></td>
                <td>
                <textarea name="text" class="text" id="" cols="30" rows="10"><?= $row['text'] ?></textarea>    
                <!-- <input type="text" name="text" class="text" value="<?= $row['text'] ?>"></td> -->
                <td><input type="checkbox" class="sh" name="sh" value="<?= $row['sh'] ?>" <?= ($row['sh'] == 1) ? "checked" : "" ?>>
                </td>
                <td>
                    <i class="EditBtn fa-regular fa-pen-to-square fa-xl" data-id="<?= $row['id'] ?>" data-table="<?= $_GET['do'] ?>"></i>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>

</main>
<script>
    $('#AddBtn').on('click', () => {
        $('#AddContainer').parent().parent().fadeIn();
    })
    $('#CancelAddBtn').on('click', () => {
        $('#AddContainer').nextAll('tr').remove();
        $('#AddContainer').parent().parent().hide();
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
                title: top.find('.title').val(),
                text: top.find('.text').val(),
                sh: sh,
            }
            // console.log(newdata);
            $.post("./api/edit.php", {
                id,
                table,
                newdata
            }, function(res) {
                alert(res + "筆已修改");
            })
        }
        location.reload();

    })
</script>