<!-- <section id="EventV1" data-bgcolor="#032f35" data-textcolor="#bcb8ad" class="vertical"> -->
<style>
    a {
        color: white;
        font-size: 2rem;
        padding: 2px;
    }
    .album:hover{
        /* background:#333; */
        /* transform:scale(1.1);
        transition: transform 0.5s ease-in-out */
    }
</style>
<section id="EventV1" style="background:url('./img/20100709legacy3_07.jpeg');background-attachment:fixed;background-size:contain;background-position:right top" data-textcolor="#bcb8ad" class="vertical">

    <div class="anim-wrap">

        <div class="inner-section">
            <h1><span data-scroll data-scroll-direction="horizontal" data-scroll-speed="-1">EVENT</span> <span data-scroll data-scroll-direction="horizontal" data-scroll-speed="-2">MUSIC</span> <span data-scroll data-scroll-direction="horizontal" data-scroll-speed="1">album</span></h1>
            <div class="row justify-content-end w-75 ms-auto me-0">
            <?php
            $total = $Music->count();
            $nowpage = ($_GET['musicp']) ?? 1;
            $size = 6;
            $pages = ceil($total / $size);
            $start = ($nowpage - 1) * $size;
            $rows = $Music->all(" order by date desc limit $start,$size");
            // $musics=$Music->all('limit 0,3');
            // dd($musics);
            foreach ($rows as $music) {
            ?>
                <div class="album col-5 d-flex align-content-stretch justify-content-center p-2 m-2" style=" color:white;position:relative;box-shadow:5px 5px 5px black;">
                    <div class="" style="word-wrap: break-word;white-space: normal;width:20%">
                        <?= $music['album'] ?>
                    </div>
                    <div class="mx-5"><img src="./img/<?= $music['img'] ?>" style="width:150px;box-shadow: 0px 0px 5px black"></div>
                    <div class="track p-3" style="display:none;position:absolute;top:0;left:0;background:black;box-shadow:0 0 5px black;z-index:100">
                        <pre>
<?= $music['note'] ?>
</pre>
                    </div>
                    <button class="trackBtn" data-open=".track">track</button>
                </div>

            <?php
            }
            ?>
            </div>
            <p style="position:absolute;bottom:0;" data-scroll data-scroll-direction="horizontal" data-scroll-speed="2">
                <?php
                for ($i = 1; $i <= $pages; $i++) {
                    $style = ($i == $nowpage) ? "font-size:3rem;font-weight:bolder;" : "";
                    echo "<a href='?musicp=$i' style='$style'>$i</a>";
                }

                ?>
            </p>
        </div>

        <div class="inner-section center">
            <h1><span></span> <span style="width:80vw;text-align:end;color:white">CONCERT</span> <span></span></h1>
            <p></p>
            <div style="width:60vw;height:100vh;" class="d-flex flex-wrap justify-content;center">
                <?php
                $concerts = $Concert->all(['sh' => 1]);
                foreach ($concerts  as $concert) {
                ?>
                    <div style="width:48%;height:40%;margin:20px 5px 5px 5px;color:black;text-align:center;background:#000" class="border border-dark text-light">
                        <h4 style="transform-origin:left bottom;transform:rotate(35deg);color:#fff;mix-blend-mode:difference;">
                            <?= $concert['title'] ?></h4>
                        <br><br><br>
                        <h5 class="text-end"><?= $concert['date'] ?></h5>
                        <div class="text-end"><?= $concert['country'] ?></div>
                        <div class="text-end"><?= $concert['location'] ?></div>
                        <a href="<?= $concert['ticket'] ?>" style="color:yellow"><span style="padding:10px;display:inline-block;width:100%;" class="mt-5">TICKET</span></a>
                    </div>

                <?php
                }
                ?>
            </div>
        </div>

        <div class="inner-section">
            <h1><span></span> <span>BOOK</span> <span></span></h1>
            <p></p>
        </div>

    </div>

</section>
<script>
$('.trackBtn').click(function(){
    $(this).parent().find('.track').toggle();
})
</script>