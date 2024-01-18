<?php
include_once "./api/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>後台管理頁面</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./myjs/js.js"></script>
</head>
<?php
include "./css/back-style.php";
?>

<body>
    <div id="frame">
        <div id="addModual" style="display:none; ">
            <div id="addCover">
                <a onclick="cl('#addModual')">X</a>
                <div id="addMain"></div>
            </div>
        </div>
        <header>
            <div>
                <a href="index.php"><button>回首頁</button></a>
                <button onclick="logout()">登出</button>
                <a href="?do=admin"><button>管理者帳號管理</button></a>
                <a href="?do=music"><button>專輯管理</button></a>
                <a href="?do=concert"><button>演唱會管理</button></a>
                <a href="?do=gallery"><button>圖片管理</button></a>
                <a href="?do=news"><button>新聞管理</button></a>
                <!--有時間再處理 ajax -->
                <!-- <a href="index.php"><button>回首頁</button></a>
                <button onclick="logout()">登出</button>
                <button onclick="go('./back/admin.php')">管理者帳號管理</button>
                <a href="?do=music"><button>專輯管理</button></a>
                <a href="?do=concert"><button>演唱會管理</button></a>
                <a href="?do=gallery"><button>圖片管理</button></a> -->
                <!-- /ajax -->
            </div>
        </header>
        <main id="Back">
            <?php
            $do = ($_GET['do']) ?? 'main';
            $file = "./back/{$do}.php";
            if (file_exists($file) && isset($_SESSION['acc'])) {
                include $file;
            } else {
                header("location:index.php");
            }

            ?>
        </main>
    </div>
    <script src="./myjs/js.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"></script>
    <script>
        previewImage()

        function logout() {
            $.post("./api/logout.php", function() {
                alert("已登出管理系統");
                location.href = "index.php";
            })
        }
    </script>
</body>

</html>