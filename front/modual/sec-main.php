<style>
#gaspItem1 {
    display: flex;
    flex-wrap: wrap;
    width: 100vw;
    height: 100vh;
    margin: auto;
    position: absolute;
}

.block {
    width: 100px;
    height: 100px;
    background: yellow;
    /* border-radius: 10%; */
    margin: 5px;
    display: grid;
    place-items: center;
    box-shadow:inset -5px -5px 10px #000;

    /* &:before {
        content: "";
        display: block;
        padding-bottom: 100%;
    } */

}
.block-yellow {
    background: yellow;
}
.block-black{
    background:#333;
}
</style>
<section class="main-container" id="mainContainer">
    <div id="gaspItem1">
        <?php
        for ($i = 0; $i < 150; $i++) {
            // $c=rand(1,2);
            // switch($c){
            //     case 1:
            //         echo '<div class="block block-yellow"></div>';
            //         break;
            //     case 2:
            //         echo '<div class="block block-black"></div>';
            //         break;
            // }
            echo "<div class='block'></div>";
            
        }
        ?>
    </div>
    <!-- Navbar -->
    <div class="navbar" data-scroll data-scroll-sticky data-scroll-target="#stickyt">
        <div class="goto" data-to="#NewsH2" data-scroll>News</div>
        <div class="goto" data-to="#EventV1" data-scroll>Event</div>
        <div class="goto" data-to="#GalleryH3" data-scroll>Gallery</div>
        <div class="goto" data-to="#AboutV2"  data-scroll>About</div>
        <div class="goto" data-to="#JoinH5"  data-scroll>Club</div>
    </div>
    <!-- Footer -->
    <!-- Header -->
    <div class="header-container">
        <!-- <ul class="header-menu">
            <li>Intro</li>
            <li>About</li>
            <li>Featured</li>
        </ul> -->
        <h1 id="header-text" data-scroll data-scroll-speed="2">Wu Bai</h1>
        <h3 id="header-h3" data-scroll data-scroll-speed="-3">Gōo-pah</h3>
    </div>
    <div id="menuBtn" class="btn" data-sw="#menu" style="z-index:100" data-scroll data-scroll-sticky
        data-scroll-target="#stickyt">open</div>
    <div id="menu" data-scroll data-scroll-sticky data-scroll-target="#stickyt" style="background:yellow">
        <div style="display:flex">
            <div class="btn" data-sw="#menu">
                <div style="width:30px;height:30px;">
                    <svg preserveAspectRatio="xMidYMid meet" data-bbox="82.189 55.096 481.811 481.808"
                        xmlns="http://www.w3.org/2000/svg" viewBox="82.189 55.096 481.811 481.808" role="presentation"
                        aria-hidden="true">
                        <g>
                            <path fill="white"
                                d="M531.936 536.904L323.094 328.063 114.253 536.904l-32.064-32.062L291.032 296 82.189 87.157l32.064-32.061 208.842 208.842L531.936 55.096 564 87.157 355.155 296 564 504.842l-32.064 32.062z">
                            </path>
                        </g>
                    </svg>
                </div>
            </div>
            <table>
                <tr>
                    <th>0<br>1</th>
                    <th>0<br>2</th>
                    <th>0<br>3</th>
                    <th>0<br>4</th>
                    <th>0<br>5</th>
                    <th>0<br>6</th>
                </tr>
                <tr>
                    <td><span class="goto" data-to="#mainContainer" data-scroll>Home</span></a></td>
                    <td><span class="goto" data-to="#NewsH2" data-scroll>News</span></td>
                    <td><span class="goto" data-to="#EventV1" data-scroll>Event</td>
                    <td><span class="goto" data-to="#GalleryH3" data-scroll>Gallery</td>
                    <td><span class="goto" data-to="#AboutV2"  data-scroll>About</td>
                    <td><span class="goto" data-to="#JoinH5"  data-scroll>Club</td>
                </tr>
            </table>
        </div>
    </div>
</section>

<script>
$(".btn").click(function() {
    let show = $(this).data('sw');
    $(show).toggle();


})
$('.goto').on('click', function() {
    var target = $(this).attr('data-to');
    target = document.querySelector(target);
    console.log(target)
    locoScroll.scrollTo(target);
    $('#menu').hide();

})
document.addEventListener("DOMContentLoaded", function() {
    var blocks = document.querySelectorAll(".block");
    gsap.set(blocks, {
        scale: 1
    });


    gsap.registerPlugin(ScrollTrigger);

    ScrollTrigger.create({
        trigger: "#gaspItem1",
        start: "top 80%",
        end: "bottom 20%",
        toggleActions: "play none none none",
        onEnter: function() {
            gsap.to(blocks, {
                scale: 0,
                stagger: 0.01,
                repeat: -1,
                overwrite: "auto",
                yoyo: true,
                ease: "back.out(2)",

            });
        },
    });
});
</script>