<style>
</style>
<section id="JoinH5" data-bgcolor="#032f35" data-textcolor="#bcb8ad">
    <div style="position:absolute;">
        <h1><span data-scroll data-scroll-direction="vertical" data-scroll-speed="-1">Fan Club</span>
            <span data-scroll data-scroll-direction="horizontal" data-scroll-speed="-2">wuBai & china Blue</span> <span data-scroll
                data-scroll-direction="horizontal" data-scroll-speed="1">Section</span>
        </h1>
        <p class="goto" data-to="#mainContainer"  data-scroll data-scroll-direction="horizontal" data-scroll-speed="2">Where from, where to</p>
    </div>
    <div style="position:absolute;top:50%;left:50%;width:50%;height:50%;margin:auto;backdrop-filter:blur(10px)">
    <form action="">
            <input type="email" placeholder="Enter your email"><input type="submit" value="join">
            <div>官網Email：clubwubai@gmail.com</div>
            <div>郵政信箱：10699台北郵局第108-252號信箱</div>
            <div>P.O.BOX 108-252 Taipei, Taipei City 10699, Taiwan(R.O.C.)</div>
            <hr>
            <div>© 伍佰官方網站. All Rights Reserved. 10699台北郵局第108-252號信箱</div>
            </form>
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