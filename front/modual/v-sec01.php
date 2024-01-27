<!-- <section id="EventV1" data-bgcolor="#032f35" data-textcolor="#bcb8ad" class="vertical"> -->
<style>
    a {
        color: white;
        font-size: 2rem;
        padding: 2px;
    }
</style>
<section id="EventV1" style="background:url('./img/20100709legacy3_07.jpeg');background-attachment:fixed;background-size:contain;background-position:right top" data-textcolor="#bcb8ad" class="vertical">

    <div class="anim-wrap">

        <div class="inner-section p-5">
            <h1><span data-scroll data-scroll-direction="horizontal" data-scroll-speed="-1">EVENT</span> <span data-scroll data-scroll-direction="horizontal" data-scroll-speed="-2">MUSIC</span> <span data-scroll data-scroll-direction="horizontal" data-scroll-speed="1">album</span></h1>
            <p id="musicPageList" style="position:absolute;left:10%" data-scroll data-scroll-direction="horizontal" data-scroll-speed="-2">
                <!-- ajax-pages -->
            </p>
            <div id=musicList class="row justify-content-end w-75 ms-auto me-0">
                <!-- ajax-content -->
            </div>
        </div>

        <div class="inner-section center p-5">
            <h1><span></span> <span style="width:80vw;text-align:end;color:white">CONCERT</span> <span></span></h1>
            <p id="ConcertPageList" style="position:absolute;right:0;" data-scroll data-scroll-direction="horizontal" data-scroll-speed="2">
                <!-- ajax-pages -->
            </p>
            <div id="ConcertList" style="width:60vw;height:100vh;" class="d-flex flex-wrap justify-content;center">
                <!-- ajax-content -->
            </div>
        </div>

        <div class="inner-section p-5">
            <h1><span></span> <span>BOOK</span></h1>
                <p id="BookPageList" style="position:absolute;left:10%">
          <!-- ajax-pages -->
    </p> 
            <div id=BookList class="row justify-content-end w-75 ms-auto me-0">
                <!-- ajax-content -->
            </div>
        </div>
    </div>
</section>
<script>
    // music
    function MusicPageListHtml(nowPage, pages) {
        let html = '';
        for (i = 1; i <= pages; i++) {
            let style = (i == nowPage) ? "font-size:3rem;font-weight:bolder;" : "";
            let tmp = `
        <a href="#" data-page="${i}" style="${style}"> ${i}  </a>
        `
            html += tmp
        }
        return html;
    }

    function MusicListHtml(rows) {
        let html = ''
        rows.forEach(function(music) {
            let tmp = `
            <div class="album col-5 d-flex align-content-stretch justify-content-center p-2 m-2" style=" color:white;position:relative;">
            <div class="" style="word-wrap: break-word;white-space: normal;width:20%">
            ${music.album}
            </div>
            <div class="mx-5"><img src="./img/${music.img}" style="width:150px;box-shadow: 0px 0px 5px black"></div>
            <div class="track p-3" style="display:none;position:absolute;top:0;left:-10px;background:black;width:450px;z-index:100">
            <pre>
            ${music.note}
            </pre>
            </div>
            <button class="trackBtn" data-open=".track" style="z-index:101">track</button>
            </div>
            `
            html += tmp
        })
        return html;
    }
    //concert
    function ConcertListHtml(rows) {
        let html = '';
        rows.forEach(function(concert) {
            let tmp = `
        <div style="width:48%;height:40%;margin:20px 5px 5px 5px;color:black;text-align:center;background:#000"
                    class="border border-dark text-light">
                    <h4
                        style="transform-origin:left bottom;transform:rotate(35deg);color:#fff;mix-blend-mode:difference;">
                        ${concert.title}</h4>
                    <br><br><br>
                    <h5 class="text-end">${concert.date}</h5>
                    <div class="text-end">${concert.country}</div>
                    <div class="text-end">${concert.location}</div>
                    <a href="${concert.ticket}" style="color:yellow"><span
                            style="padding:10px;display:inline-block;width:100%;" class="mt-5">TICKET</span></a>
                </div>
    `
            html += tmp;
        })
        return html;
    }
    function ConcertPageListHtml(nowpage, pages) {
        let html = ''
        for (i = 1; i <= pages; i++) {
            let style = (nowpage == i) ? "font-size:3rem;font-weight:bolder" : "";
            let tmp = `
    <a href="#" data-page="${i}" style="${style}"> ${i}  </a>
    `
            html += tmp
        }
        return html
    }
    //book
    function BookListHtml(rows) {
        let html = ''
        rows.forEach(function(book,idx) {
            let isbn = book.isbn
            let id= book.id
            $.get('./api/channel.php',{isbn},function(res){
                let tmp=""
                res.forEach(function(data){
                    tmp+=
                    `
                    <a class="border border-light" href="${data.url}" target="_block" style="font-size:1rem;font-weight:bolder;padding:5px">${data.name}</a> / 
                    `
                    
                    // console.log(data)
                })
                $("#channel"+id).append(tmp)
            })
            let dir="";
            let end="";
            if(idx%2==1){
dir = "flex-row-reverse"
            }
            else{
                end= "text-end"
            }
            let tmp = `
            <div class="row m-2 ${dir}">
    <div class="col-4 ${end}">
        <div><img src="./img/${book.img}" alt=""></div>
        <div><span>ISBN: </span><span>${book.isbn}</span></div>
        <div><span>${book.date}</span></div>
    </div>
    <div class="Bookdesc col-7 bg-dark bg-opacity-50" style="position:relative;box-shadow:1px 1px 2px black">
        <div><h5 style="color:yellow">${book.book}</h5></div>
        <div class="h-50">
        <b style="white-space:wrap">${book.text.substring(0,100)}...</b>
        <div class="detail bg-light shadow-sm p-5 text-dark" style="z-index:500;display:none;white-space:wrap;position:absolute;top:0;left:0">${book.text}</div>
        </div>
        <div id="channel${book.id}"></div>
    </div>
</div>
            `
            html += tmp
        })
        return html;
    }
    function BookPageListHtml(nowpage, pages) {
        let html = ''
        for (i = 1; i <= pages; i++) {
            let style = (nowpage == i) ? "font-size:3rem;font-weight:bolder" : "";
            let tmp = `
    <a href="#" data-page="${i}" style="${style}"> ${i}  </a>
    `
            html += tmp
        }
        return html
    }
    //load
    function loadMusic(page) {
        $.get('./api/page-album.php', {
            page
        }, function(response) {
            $('#musicPageList').html(MusicPageListHtml(page, response.pages))
            $('#musicList').html(MusicListHtml(response.rows))
            // console.log(response.rows)
        })
    }

    function loadConcert(nowpage) {
        $.get('./api/page-concert.php', {
            nowpage
        }, function(res) {
            $('#ConcertList').html(ConcertListHtml(res.rows))
            $('#ConcertPageList').html(ConcertPageListHtml(nowpage, res.pages))
        })
    }
    function loadBook(nowpage,table){
        $.get('./api/page-book.php',{
            nowpage,
            table,
        },function(res){
            // console.log(res)
            $('#BookList').html(BookListHtml(res.rows))
            $('#BookPageList').html(BookPageListHtml(nowpage, res.pages))
        })
    }
    //onclick
    $('#musicPageList').on('click', 'a', function() {
        event.preventDefault();
        loadMusic($(this).data('page'));
    })
    $('#musicList').on('click', '.trackBtn', function() {
        let parentElement = $(this).parent();
        $('.track').not(parentElement.find('.track')).hide();
        parentElement.find('.track').toggle();
    })

    $('#ConcertPageList').on('click', 'a', function() {
        event.preventDefault();
        loadMusic($(this).data('page'));
    })
    $('#BookPageList').on('click', 'a', function() {
        event.preventDefault();
       loadBook($(this).data('page'),"Book");
    })
    //hover
    $('#BookList').on({
        mouseenter:function(){
            $(this).find('.detail').show();
        },
        mouseleave: function() {
    $(this).find('.detail').hide();
  }
    },'.Bookdesc')

    loadMusic(1);
    loadConcert(1);
    loadBook(1,"Book");
</script>