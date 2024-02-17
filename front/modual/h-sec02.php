<!-- <section data-bgcolor="#bcb8ad" data-textcolor="#032f35" id="test2"> -->
<section data-bgcolor="#000" id="NewsH2" style="overflow:hidden">
    <div style="position:absolute;">
        <h1><span data-scroll data-scroll-speed=3 style="color:yellow;mix-blend-mode:difference;">WHAT</span>
            <span>NEWS</span>
            <span data-scroll data-scroll-speed=-5 style="color:yellow">INFO</span>
        </h1>
        <p class="goto" data-to="#mainContainer" data-scroll>Where from, where to</p>
    </div>
    <div style="width:60vw;height:100vh;border-left:1px solid #ccc;position:absolute;right:0;background:yellow; 
">
        <?php
$news = $News->all();
// dd($news);
foreach($news as $new){
    $a=rand(-5,5);
    ?>
        <div>
            <h4 data-scroll data-scroll-speed=<?=$a?> class="my-5"
                style="background:black;mix-blend-mode:difference;color:yellow"><?=$new['title']?> - <?=$new['date']?>
            </h4>
        </div>
        <?php

}
   ?>
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