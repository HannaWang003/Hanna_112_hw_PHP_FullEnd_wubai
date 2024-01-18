<?php
include_once "./api/db.php";
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./node_modules/locomotive-scroll/dist/locomotive-scroll.min.css">
        <!-- <link rel="stylesheet" href="./node_modules/self/style.css?do"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="./node_modules/jquery/dist/jquery.min.js"></script>
</head>
<?php
include "./css/front-style.php";
?>
<body>
    <?php
$do=($_GET['do'])??'main';
$file ="./front/{$do}.php";
if(isset($_SESSION['acc']) && $do=="login"){
echo "<script>location.href='back.php'</script>";
}
elseif(file_exists($file)){
    include $file;
}
else{
    include './front/main.php';
}

?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script src="./node_modules/locomotive-scroll/dist/locomotive-scroll.min.js"></script>

    <script>
    gsap.registerPlugin(ScrollTrigger);

    const scroller = document.querySelector('[data-scroll-container]')

    const locoScroll = new LocomotiveScroll({
        el: scroller,
        smooth: true,
        direction: "horizontal",
        smartphone: {
            smooth: true,
            direction: "horizontal",
        },
        tablet: {
            smooth: true,
            direction: "horizontal",
        }
    });

    locoScroll.on("scroll", ScrollTrigger.update);

    //locoScroll.on("scroll", function() {
    //  console.log( locoScroll.scroll.instance.scroll.x )
    //});
    ScrollTrigger.scrollerProxy(scroller, {
        // scrollTop(value) {
        //   return arguments.length
        //     ? locoScroll.scrollTo(value, 0, 0)
        //     : locoScroll.scroll.instance.scroll.y;
        // },
        scrollLeft(value) {
            return arguments.length ?
                locoScroll.scrollTo(value, 0, 0) :
                locoScroll.scroll.instance.scroll.x;
        },
        getBoundingClientRect() {
            return {
                left: 0,
                top: 0,
                width: window.innerWidth,
                height: window.innerHeight
            };
        },
        pinType: scroller.style.transform ? "transform" : "fixed"
    });

    ScrollTrigger.defaults({
        scroller: scroller
    })

    gsap.set('section', {
        backgroundColor: (index, target) => {
            return target.getAttribute('data-bgcolor')
        },
        color: (index, target) => {
            return target.getAttribute('data-textcolor')
        }
    })



    gsap.to(".anim-wrap", {
        scrollTrigger: {
            trigger: ".vertical",
            start: () => "left left",
            end: () => "+=" + document.querySelector('.anim-wrap').scrollHeight,
            pin: true,
            pinSpacing: true,
            // anticipatePin: 1,
            scrub: true,
            horizontal: true,
            invalidateOnRefresh: true
            //markers: true
        },
        y: () => {
            return -(document.querySelector('.anim-wrap').scrollHeight - window.innerHeight)
        },
        ease: "none"
    });

    gsap.to(".anim-wrapp", {
        scrollTrigger: {
            trigger: ".verticalp",
            start: () => "left left",
            end: () => "+=" + document.querySelector('.anim-wrapp').scrollHeight,
            pin: true,
            pinSpacing: true,
            // anticipatePin: 1,
            scrub: true,
            horizontal: true,
            invalidateOnRefresh: true
            //markers: true
        },
        y: () => {
            return -(document.querySelector('.anim-wrapp').scrollHeight - window.innerHeight)
        },
        ease: "none"
    });



    ScrollTrigger.addEventListener("refresh", () => locoScroll.update());
    ScrollTrigger.refresh();
    </script>
</body>

</html>