<?php
include_once "../../api/db.php";
switch ($_GET['do']) {
    case "music":
        echo "<h1>更換專輯封面</h1>";
        break;
    case "gallery":
        echo "<h1>更換組圖主題封面</h1>";
        break;
}
?>
<form action="./api/edit_file.php" method="post" enctype="multipart/form-data">

    <div style="width:50vw;height:50vh">
        <img class="previewImage" style="max-width: 300px; max-height: 300px; margin-top: 10px; display: none;">
        <input class="imageInput" type="file" name="img" id="">
    </div>
    <div>
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <input type="hidden" name="do" value="<?= $_GET['do'] ?>">
        <input type="submit" value="更新">
        <input type="reset" value="重置">
    </div>
</form>
<script>
    previewImage('.imageInput')
</script>