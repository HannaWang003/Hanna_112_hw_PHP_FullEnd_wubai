<!-- <section id="AboutV2" data-bgcolor="#032f35" data-textcolor="#bcb8ad" class="verticalp"> -->
<section id="AboutV2" data-textcolor="#bcb8ad" class="verticalp" style="background:url(./img/20110827高雄4.jpg);background-size:contain;">

<div class="anim-wrapp">

    <div class="inner-section">
        <h1><span>ABOUT</span> <span>Wu Bai</span> <span>China Blue</span></h1>
        <p class="goto" data-to="#mainContainer"  data-scroll>Where from, where to</p>
    </div>

    <div class="inner-section center" id="test1">
        <h1><span>Lead vocalist</span> <span></span> <span>Bassist</span></h1>
        <p class="goto" data-to="#mainContainer"  data-scroll>Where from, where to</p>
        <div class="row" style="position:absolute;width:100%;top:30%">
    <div class="col text-end"><img src="./img/20110902legacy3_8.jpg" alt=""></div>
    <div class="col text-center"><img src="./img/artist_1.jpg" alt=""></div>
        </div>
    </div>

    <div class="inner-section">
        <h1><span>Keyboardist</span> <span></span> <span>Drummer</span></h1>
        <p class="goto" data-to="#mainContainer"  data-scroll>Where from, where to</p>
        <div class="row" style="position:absolute;width:100%;top:30%">
    <div class="col text-end"><img src="./img/artist_2.jpg" alt=""></div>
    <div class="col text-center"><img src="./img/artist_Dino-Kiss-me.jpeg" alt=""></div>
        </div>
    </div>


</div>

</section>
<script>
                $('.goto').on('click', function() {
    var target = $(this).attr('data-to');
    target = document.querySelector(target);
    // console.log(target)
    locoScroll.scrollTo(target);
    $('#menu').hide();

})
            </script>