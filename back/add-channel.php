<?php
include_once "../api/db.php";
$isbn = $_GET['isbn'];

?>
<style>
    table {
        width: 80vw;
        margin: auto;

        tr,
        th,
        td {
            text-align: center;
            border: 1px solid black;
            /* text-align: center; */
            vertical-align: middle;
            padding: 10px;

        }

    }
</style>
<h1>Channel M</h1>
<main id="BackChannel" class="container">
    <div>
        <i id="AddBtn" class="fa-sharp fa-solid fa-plus fa-xl"></i>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <i id="CancelAddBtn" class="fa-sharp fa-solid fa-xmark fa-xl"></i>
    </div>
    <h3 style="text-align:start"><?= $_GET['book'] ?></h3>
    <!-- 新增項目區 -->
    <form id="channelForm" enctype="multipart/form-data">
        <table style="display:none">
            <tr>
                <th>isbn</th>
                <th>name</th>
                <th>url</th>
                <th>operate</th>
            </tr>
            <tr id="AddContainer">
                <td>
                    <input type="text" name="isbn[]" value="<?= $_GET['isbn'] ?>" readonly>
                </td>
                <td><input type="text" name="name[]" class="addChannel"></td>
                <td><textarea name="url[]" style="width:100%;" class="addChannel"></textarea></td>
                <td>
                    <button><i class="fa-sharp fa-regular fa-floppy-disk fa-xl"></i></button>
                </td>
            </tr>
        </table>
    </form>
    <!--/ 新增項目區 -->
    <br>
    <form id="channelEdit" enctype="multipart/form-data">
        <table id="goPage">
            <tr id="channelhead">
                <th>isbn</th>
                <th>name</th>
                <th>url</th>
                <th>show/hidden</th>
                <th>delete</th>
            </tr>
            <?php
            if (($Channelbook->count(['isbn' => $isbn])) > 0) {

                $rows = $Channelbook->all();

                foreach ($rows as $row) {
            ?>
                    <tr>
                        <td><?= $row['isbn'] ?></td>
                        <td style="white-space:nowrap"><?= $row['name'] ?></td>
                        <td><textarea name="url[]" style="width:100%"><?= $row['url'] ?></textarea></td>
                        <td><input type="checkbox" name="sh[]" id="" value="<?= $row['id'] ?>" <?= ($row['sh'] == 1) ? "checked" : "" ?>>
                    <input type="hidden" name="id[]" value="<?= $row['id'] ?>">    
                    </td>
                        <td>
                            <ion-icon class="DelBtn" name="trash-sharp" size="large" data-id="<?= $row['id'] ?>" data-table="channelbook">
                            </ion-icon>
                        </td>
                    </tr>
                <?php
                }
                ?>
                <tr>
                    <td colspan="5">
                        <button>確認修改</button>
                    </td>
                </tr>
            <?php
            } else {
                echo "<tr><td colspan=5>請增加販售通路</td></tr>";
            }
            ?>
        </table>
    </form>
</main>
<script>
    $(document).ready(function() {
    $('#AddBtn').on('click', () => {
        $('#AddContainer').parent().parent().fadeIn();
    })

    $('#CancelAddBtn').on('click', () => {
        $('.addChannel').val('');
        $('#AddContainer').nextAll('tr').remove();
        $('#AddContainer').parent().parent().hide();
    })
    $('#channelhead').parent().on('click', '.DelBtn', function() {
        let id = $(this).data('id');
        let table = $(this).data('table');
        if (confirm("確認刪除?")) {
            $(this).parent().parent().fadeOut();
            $.post('./api/del_channelbook.php', {
                id,
                table
            }, function(res) {
                alert(`已刪除`);
                // $(this).closest('tr').remove();
            });

        }
    })
    //new data save ajax
    $('#channelForm').submit(function(even) {
        event.preventDefault();
        let formData = new FormData(this);
        console.log(formData)
        $.ajax({
            url: './api/add_channel.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(res) {
                let html = '';
                res.forEach(function(channel) {
                    tmp = `<tr>
                    <td>${channel['isbn']}</td>
                    <td style="white-space:nowrap">${channel['name']}</td>
                        <td><textarea name="url[]" style="width:100%">${channel['url']}</textarea></td>
                        <td><input type="checkbox" name="sh[]" id="" value="${channel['id']}" ${channel['sh'] == 1 ? 'checked' : ''}></td>
                        <td>
                        <ion-icon class="DelBtn" name="trash-sharp" size="large" data-id="${channel['id']}" data-table="channelbook">
                        </ion-icon>
                        </td>
                        </tr>`;
                    html += tmp;
                });
                html+=`
                <tr>
                    <td colspan="5">
                        <button>確認修改</button>
                    </td>
                </tr>
                `
                $('#channelhead').nextAll('tr').remove();
                $('#channelhead').after(html);
                $('.addChannel').val('');
                $('#AddContainer').parent().parent().hide();
            }
        });
    })
    $('#channelEdit').submit(function(even) {
        event.preventDefault();
let formData = new FormData(this);
console.log(saveData)
$.ajax({
            url: './api/save_channel.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(res) {
                let html = '';
                res.forEach(function(channel) {
                    tmp = `<tr>
                    <td>${channel['isbn']}</td>
                    <td style="white-space:nowrap">${channel['name']}</td>
                        <td><textarea name="url[]" style="width:100%">${channel['url']}</textarea></td>
                        <td><input type="checkbox" name="sh[]" id="" value="${channel['id']}" ${channel['sh'] == 1 ? 'checked' : ''}></td>
                        <td>
                        <ion-icon class="DelBtn" name="trash-sharp" size="large" data-id="${channel['id']}" data-table="channelbook">
                        </ion-icon>
                        </td>
                        </tr>`;
                    html += tmp;
                });
                html+=`
                <tr>
                    <td colspan="5">
                        <button>確認修改</button>
                    </td>
                </tr>
                `
                $('#channelhead').nextAll('tr').remove();
                $('#channelhead').after(html);
        
    }

})
})
    })
</script>