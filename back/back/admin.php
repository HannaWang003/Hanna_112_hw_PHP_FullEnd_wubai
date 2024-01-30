<style>
    #admin td {
        padding: 20px;
    }
</style>
<h1>Account M</h1>
<div id="admin">
    <div class="text-end"><i class="add fa-solid fa-user-plus fa-2xl"></i></div>
    <div>
        <form action="./api/edit_admin.php" method="post">
            <table class="mb-3">
                <tr>
                    <th>account</th>
                    <th>password</th>
                    <th>operate</th>
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
                <input class="btn btn-light" id="edit" type="submit" value="modify">
                <input class="btn btn-light" type="reset" value="clear">
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