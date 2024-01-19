<!-- <div id="loading-container"></div> -->
<style>
#toAdmin {
    display: inline-block;
    background: white;
    position: absolute;
    top: 10px;
    left: 10px;
    z-index: 200;

    div {
        width: 50px;
        height: 50px;
        text-align: center;
        line-height: 50px;
    }
}
</style>
<div id="formal-container" data-scroll-container>
    <div class="content" id="stickyt">
        <?php
        if (isset($_GET['to']) && $_GET['to'] == "admin") {
            echo "<a id='toAdmin' href='?do=login'><div style='color:black;font-size:1.5rem'>root</div></a>";
        }
        ?>

        <?php
        include "./front/modual/sec-main.php";
        // horizontal 01 
        include "./front/modual/h-sec01.php";
        include "./front/modual/h-sec02.php";
        include "./front/modual/v-sec01.php";
        include "./front/modual/h-sec03.php";
        include "./front/modual/h-sec04.php";
        include "./front/modual/v-sec02.php";
        include "./front/modual/h-sec05.php";
        ?>
        <!-- <section data-bgcolor="#bcb8ad" data-textcolor="#032f35">
                <div>
                    <h1><span>Horizontal</span> <span>Scroll</span> <span>Section</span></h1>
                    <p>with Locomotive Scroll</p>
                </div>
            </section> -->

        <!-- <section data-bgcolor="#032f35" data-textcolor="#bcb8ad">
                <div>
                    <h1><span>Horizontal</span> <span>Scroll</span> <span>Section</span></h1>
                    <p>with Locomotive Scroll</p>
                </div>
            </section> -->
        <!-- <section data-bgcolor="#032f35" data-textcolor="#bcb8ad" class="verticalp">

                <div class="anim-wrapp">

                    <div class="inner-section">
                        <h1><span>Fake-Vertical</span> <span>Scroll</span> <span>Section</span></h1>
                        <p>with GSAP ScrollTrigger & Locomotive Scroll</p>
                    </div>

                    <div class="inner-section center" id="test1">
                        <h1><span>Fake-Vertical</span> <span>Scroll</span> <span>Section</span></h1>
                        <p>with GSAP ScrollTrigger & Locomotive Scroll</p>
                    </div>

                    <div class="inner-section">
                        <h1><span>Fake-Vertical</span> <span>Scroll</span> <span>Section</span></h1>
                        <p>with GSAP ScrollTrigger & Locomotive Scroll</p>
                    </div>

                </div>

            </section> -->

    </div>

</div>
<script>
// document.addEventListener('DOMContentLoaded',function(){
//     setTimeout(function(){
//         $('#loading-container').fadeOut(1500);
//     },1000)
// })
</script>