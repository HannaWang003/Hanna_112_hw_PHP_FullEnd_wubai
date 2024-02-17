<style>
    * {
        margin: 0;
    }

    .material-symbols-rounded {
        font-variation-settings:
            'FILL' 1,
            'wght' 300,
            'GRAD' 0,
            'opsz' 48
    }

    body {
        background-color: black;
        font-family: 'Microsoft YaHei', '微軟正黑', 'STHeiti', '华文细黑', Arial, sans-serif;
    }

    li {
        list-style: none;
    }

    a {
        text-decoration: none;
    }

    #loading-container {
        width: 100%;
        height: 100%;
        background: lightgreen;
    }

    #login {
        background: #ccc;
        width: 100%;
        height: 100%;
        margin: auto;
        /* border:1px solid #ccc; */
        text-align: center;
        color: white;

        main {
            /* background:lightgray; */
            display: inline-block;
            margin: auto;
            text-align: initial;
        }

        h1 {}

    }

    .main-container {
        /* padding: 0 5vw; */
        background: url('../img/flower_01_overhb.webp');
        background: black;
        background-size: cover;
        background-attachment: fixed;
    }


    #menuBtn {
        /* width: 50px; */
        /* height: 50px; */
        /* line-height: 100px; */
        text-align: center;
        background: rgba(0,0,0,0.5);
        writing-mode: vertical-rl;
        font-size: 2vw;
        font-family: 'Bai jamjuree', sans-serif;
        text-transform: uppercase;
        color: #ff0;
        /* border-radius:50%; */
        padding:10px;
        /* border:1px solid #fff; */
        box-shadow:0 0 150px #aaa;
        position: absolute;
        /* mix-blend-mode: difference; */
    }

    #menu {
        position: fixed;
        z-index: 100;
        display: none;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;

        #menuCotent {
            z-index: 400;
            width: 100vw;
            background: yellow;
        }

        .btn {
            height: 100vh;
            width: 20%;
            position: relative;
            background: black;

            div {
                position: absolute;
                top: 50%;
                margin-left: 20%;
            }

        }

        table {
            margin: auto;
            width: 50%;
            text-align: center;

            th {
                height: 30%;
                vertical-align: middle;
            }

            span {
                vertical-align: top;
                writing-mode: vertical-lr;
                cursor: pointer;
            }
        }
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        padding: 5vw;
        font-size: 2vw;
        letter-spacing: 1px;
        font-family: 'Syncopate', sans-serif;
        font-weight: 700;
        color: transparent;
        -webkit-text-stroke: 1px #aaa;
        text-transform: uppercase;
        width: 90vw;
        text-shadow:5px 5px 0px #222;
    
        .goto{
            cursor:pointer;
        }
    }

    .header-container {
        position: relative;
    }

    .header-menu {
        position: absolute;
        left: 0;
        top: 100px;
        letter-spacing: 1px;
        font-family: 'Syncopate', sans-serif;
        color: #626262;
        text-transform: uppercase;
    }

    .header-menu li {
        margin: 10px 0;
    }

    #header-text {
        transform:translateX(-50%);
        font-size: 18vw;
        text-transform: uppercase;
        text-align: center;
        font-family: 'Bai jamjuree', sans-serif;
        font-weight: 600;
        background: linear-gradient(45deg, rgba(0,228,11,1) 6%, rgba(247,186,70,1) 19%, rgba(255,0,219,1) 46%, rgba(4,49,245,1) 78%, rgba(245,4,4,1) 100%);
        -webkit-background-clip:text;
        color: transparent;
    -webkit-text-stroke: 2px #000;
        /* text-shadow:
        1px 1px #ff0,
        2px 2px #ff0,
        3px 3px #ff0,
        4px 4px #ff0,
        5px 5px #ff0,
        6px 6px #ff0,
        7px 7px #ff0,
        8px 8px #ff0,
        9px 9px #ff0,
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
        20px 20px #ff0; */
        /* text-shadow: 0 0px 10px black; */
        /* mix-blend-mode: difference; */
    }

    #header-h3 {
        font-size: 10vw;
        text-align: center;
        font-family: 'Bai jamjuree', sans-serif;
        font-weight: 600;
        color: transparent;
        /* background:black; */
        -webkit-text-stroke:1px #FF0;

    }


    @import url('https://fonts.googleapis.com/css?family=Signika+Negative:300,400&display=swap');

    @import url('https://fonts.googleapis.com/css2?family=Nixie+One&display=swap');



    body {
        font-family: "Signika Negative", sans-serif;
        margin: 0;
        padding: 0;
        width: 100vw;
        height: 100vh;
        /* overflow: hidden !important; */
    }



    [data-scroll-container] {
        overflow-y: hidden !important;
        overflow-x: hidden !important;
    }



    .content {
        display: flex;
    }

    section {
        position: relative;
        /* width: 75vw;
    min-width: 75vw; */
        width: 100vw;
        min-width: 100vw;
        height: 100vh;
    }

    section.vertical,
    section.verticalp {
        width: 100vw;
        min-width: 100vw;
        height: 100%;
    }

    section.vertical .inner-section,
    section.verticalp .inner-section {
        position: relative;
        width: 100vw;
        /* height: 75vh !important; */
        height: 100vh !important;
    }

    section.vertical .inner-section.center,
    section.verticalp .inner-section.center {
        background-color: #2C2F33;
    }

    section {

        h1 {
            font-family: 'Permanent Marker', cursive;
            ;
            font-size: 5rem;
            line-height: 1;
            font-weight: 800;
            margin-bottom: 1rem;
            position: absolute;
            top: 10vw;
            left: 10vw;
            z-index: 4;
            overflow-wrap: break-word;
            hyphens: auto;

            @media (max-width: 768px) {
                font-size: 16vw;
            }

            span {
                display: block;
            }
        }
    }


    h2 {
        font-size: 2rem;
        max-width: 400px;
    }

    p {
        position: absolute;
        bottom: 10vw;
        right: 10vw;
        width: 200px;
        line-height: 1.5;
    }



    .c-scrollbar {
        opacity: 1;
    }

    .c-scrollbar_thumb {
        background-color: firebrick;
        opacity: 1;
    }
</style>