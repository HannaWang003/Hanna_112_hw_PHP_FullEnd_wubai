<section data-bgcolor="#333" data-textcolor="yellow">
    <div>
        <div style="position:absolute;">

            <h1><span data-scroll data-scroll-direction="vertical" data-scroll-speed="-1">POP</span>
                <span data-scroll data-scroll-direction="horizontal" data-scroll-speed="-2">ROCK</span> <span
                    data-scroll data-scroll-direction="horizontal" data-scroll-speed="1">ROMANTIC</span>
            </h1>
            <p class="goto" data-to="#mainContainer" data-scroll data-scroll-direction="horizontal"
                data-scroll-speed="2">Where from, where to</p>
        </div>
        <div style="width:60vw;position:absolute;right:0;" class="d-flex flex-wrap">
            <?php
            // $total = $Gallery->count()-3;
            // $start = rand(0,$total);
            $total = $Gallery->count();
            // echo $total;
            if ($total <= 100) {
                $start = 0;
            } elseif (rand(0, $total) > ($total - 100)) {
                $start = $total - 100;
            } else {
                $start = rand(0, $total);
            }
            $photos = $Gallery->all("limit $start,100");
            // dd($photos);
            // $top = 20;
            // $left = 20;
            foreach ($photos as $photo) {
                echo "<div style='width:10vw;height:10vw;background:black;background:url(./img/{$photo['img']});background-size:cover;'></div>";
                // $top+=300;
                // $left+=200;
            }
            ?>


        </div>

    </div>
</section>
<script>
$('.goto').on('click', function() {
    var target = $(this).attr('data-to');
    target = document.querySelector(target);
    console.log(target)
    locoScroll.scrollTo(target);
    $('#menu').hide();

})
</script>