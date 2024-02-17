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
    background:rgba(50,50,50,1);
    /* border-radius:50%; */
    /* background: radial-gradient( rgba(0,228,11,1) 6%, rgba(247,186,70,1) 19%, rgba(255,0,219,1) 46%, rgba(4,49,245,1) 78%, rgba(245,4,4,1) 100%); */
    border-radius: 50%;
    margin: 1px;
    display: grid;
    place-items: center;
    box-shadow:
    inset 0px 0px 1px #aaa,
    1px 1px #000,
        2px 2px #ff0,
        3px 3px #000,
        4px 4px #ff0,
        5px 5px #000,
        6px 6px #ff0,
        7px 7px #000,
        8px 8px #ff0,
        9px 9px #000,
        10px 10px #ff0,
        11px 11px #ff0,
        12px 12px #ff0,
        13px 13px #ff0,
        14px 14px #ff0,
        15px 15px #ff0,
        16px 16px #ff0,
        17px 17px #ff0,
        18px 18px #ff0,
        19px 19px #ff0,
        20px 20px #ff0; 

    /* &:before {
        content: "";
        display: block;
        padding-bottom: 100%;
    } */

}

.block-yellow {
    background: yellow;
}

.block-black {
    background: #333;
}
</style>
<section class="main-container" id="mainContainer">
    <div id="gaspItem1">
        <?php
        for ($i = 0; $i < 200; $i++) {
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
        <div class="goto" data-to="#AboutV2" data-scroll>About</div>
        <div class="goto" data-to="#JoinH5" data-scroll>Club</div>
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
        <h3 id="header-h3" data-scroll data-scroll-speed="-5">Gōo-pah</h3>
    </div>
    <div id="menuBtn" class="btn" data-sw="#menu" style="z-index:100" data-scroll data-scroll-sticky
        data-scroll-target="#stickyt">open</div>
    <div id="menu" data-scroll data-scroll-sticky data-scroll-target="#stickyt" style="background:yellow">
            <div>
        <a class="toAdmin" href='?do=login'><div style='color:black;font-size:1.5rem'>root</div></a>
            </div>
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
                    <td><span class="goto" data-to="#AboutV2" data-scroll>About</td>
                    <td><span class="goto" data-to="#JoinH5" data-scroll>Club</td>
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
    // console.log(target)
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
                stagger: 0.05,
                repeat: -1,
                overwrite: "auto",
                yoyo: true,
                ease: "back.out(2)",

            });
        },
    });
});
</script>