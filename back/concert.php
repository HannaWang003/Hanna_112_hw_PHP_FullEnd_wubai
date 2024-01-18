<h1>Concert M</h1>
<main id="BackConcert">
    <div>
        <i id="AddBtn" class="fa-sharp fa-solid fa-plus fa-xl"></i>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <i id="CancelAddBtn" class="fa-sharp fa-solid fa-xmark fa-xl"></i>
    </div>
    <!-- 新增項目區 -->
    <form action="./api/add_concert.php" method="post" enctype="multipart/form-data">
        <table style="display:none">
            <tr>
                <th><label>title(required)</label></th>
                <th><label>country</label></th>
                <th><label>location</label></th>
                <th><label>date</label></th>
                <th><label>ticket</label></th>
                <th>operate</th>
            </tr>
            <tr>
                <td colspan="6" style="text-align:end">
                    <button><i class="fa-sharp fa-regular fa-floppy-disk fa-xl"></i></button>
                </td>
            </tr>
            <tr id="AddContainer">
                <td><input type="text" name="title[]" required></td>
                <td><input type="text" name="country[]"></td>
                <td><input type="text" name="location[]"></td>
                <td><input type="date" name="date[]"></td>
                <td><input type="text" name="ticket[]"></td>
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
            <th>title(required)</th>
            <th>country</th>
            <th>location</th>
            <th>date</th>
            <th>ticket</th>
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
                <ion-icon class="DelBtn" name="trash-sharp" size="large" data-id="<?= $row['id'] ?>"
                    data-table="<?=$_GET['do']?>"></ion-icon>
            </td>
            <td><input type="text" name="title" class="title" value="<?=$row['title']?>" required></td>
            <td><input type="text" name="country" class="country" value="<?=$row['country']?>"></td>
            <td><input type="text" name="location" class="location" value="<?=$row['location']?>"></td>
            <td><input type="date" name="date" class="date" value="<?=$row['date']?>"></td>
            <td><input type="text" name="ticket" class="ticket" value="<?=$row['ticket']?>"></td>
            <td><input type="checkbox" class="sh" name="sh" value="<?= $row['sh'] ?>"
                    <?= ($row['sh'] == 1) ? "checked" : "" ?>>
            </td>
            <td>
                <i class="EditBtn fa-regular fa-pen-to-square fa-xl" data-id="<?= $row['id'] ?>"
                    data-table="<?=$_GET['do']?>"></i>
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

$('#AddMoreBtn').click(function() {
    let AddTo = `<tr>
    <td><input type="text" name="title[]"></td>
                <td><input type="text" name="country[]"></td>
                <td><input type="text" name="location[]"></td>
                <td><input type="date" name="date[]"></td>
                <td><input type="text" name="ticket[]" id=""></td>
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
            title: top.find('.title').val(),
            country: top.find('.country').val(),
            location: top.find('.location').val(),
            date: top.find('.date').val(),
            ticket: top.find('.ticket').val(),
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