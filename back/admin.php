<h1>Account M</h1>
<div id="admin">
    <div class="text-end"><i class="add fa-solid fa-user-plus fa-2xl"></i></div>
    <div>
        <form action="./api/edit_admin.php" method="post">
            <table>
                <tr>
                    <th>帳號</th>
                    <th>密碼</th>
                    <th>操作</th>
                </tr>
                <?php
                $accs = $DB->all();
                foreach ($accs as $acc) {
                ?>
                    <tr>
                        <td><input type="text" name="acc[]" value="<?= $acc['acc'] ?>" disabled></td>
                        <td><input type="password" name="pw[]" value="<?= $acc['pw'] ?>" <?= ($acc['acc'] == "admin") ? "disabled" : "" ?>></td>
                        <input type="hidden" name="id[]" value=<?= $acc['id'] ?> <?= ($acc['acc'] == "admin") ? "disabled" : "" ?>>
                        <td>
                            <?= ($acc['acc'] != "admin") ? "<i type='button' class='del fa-solid fa-user-minus fa-xl' data-id='{$acc['id']}' data-table='admin'></i>" : "" ?>

                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
            <div class="formSubmit">
                <input id="edit" type="submit" value="修改確定">
                <input type="reset" value="重置">
            </div>
        </form>
        <div>

        </div>
    </div>
</div>
<script>
    $(".add").on('click', function() {
        op("#addModual", "#addMain", "./back/modual/add_admin.php");
    })
    $(".del").on('click', (e) => {
        let id = $(e.target).data('id');
        let table = $(e.target).data('table');
        if (confirm("Are you sure you want to delete?")) {
            $.post("./api/del.php", {
                id,
                table
            }, (res) => {
                if (parseInt(res) == 1) {
                    console.log("res", $(e.target));
                    $(e.target).parent().parent().hide();
                    // $(e.target).remove();
                    alert('刪除成功');

                }
            })
        }
    })
</script>