<section id="GalleryH3" data-bgcolor="#000" data-textcolor="yellow">
    <div>
        <h1><span>Gallery</span> <span>page1</span> <span><i class="fa-solid fa-person-digging fa-fade fa-2xl"></i></span></h1>
        <p class="goto" data-to="#mainContainer" data-scroll>Where from, where to</p>
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