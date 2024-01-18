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

  <?php $img = $Title->find(['sh' => 1]);

  ?>.main-container {
    padding: 0 5vw;
    /* background: url("./img/<?= $img['img'] ?>") right bottom no-repeat; */
    /* background:black; */
    background:url('../img/flower_01_overhb.webp');
    background: black;
    background-size: cover;
    background-attachment: fixed;
  }


  #menuBtn {
    /* width: 50px; */
    /* height: 50px; */
    line-height: 100px;
    text-align: center;
    background: yellow;
    writing-mode: vertical-rl;
    font-size: 2vw;
    font-family: 'Bai jamjuree', sans-serif;
    text-transform: uppercase;
    color:#333;
    position:absolute;
    mix-blend-mode: difference;
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
        vertical-align:top;
        writing-mode: vertical-lr;
        cursor: pointer;
      }
    }
  }

  .navbar {
    display: flex;
    justify-content: space-between;
    padding: 50px 0;
    font-size: 2vw;
    letter-spacing: 1px;
    font-family: 'Syncopate', sans-serif;
    font-weight: 700;
    color: #464646;
    text-transform: uppercase;
    width: 90vw;
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
    font-size: 18vw;
    text-transform: uppercase;
    text-align: center;
    font-family: 'Bai jamjuree', sans-serif;
    font-weight: 600;
    color: yellow;
    text-shadow: 0 0px 10px black;
    /* mix-blend-mode: difference; */
  }

  #header-h3 {
    font-size: 10vw;
    text-align: center;
    font-family: 'Bai jamjuree', sans-serif;
    font-weight: 600;
    color: #000;
    /* background:black; */
    mix-blend-mode: darken;

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
      font-family: "Nixie One";
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