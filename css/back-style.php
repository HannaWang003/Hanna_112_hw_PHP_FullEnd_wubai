<style>
* {
    margin: 0;
    box-sizing: border-box;
}

header {
    div {
        height: 10vh;
        padding: 10px;
    }

}

.material-symbols-rounded {
    font-variation-settings:
        'FILL'1,
        'wght'400,
        'GRAD'200,
        'opsz'48;

}

a {
    text-decoration: none;
    color: black;
}

ion-icon,
i {
    cursor: pointer;
}

#frame {
    width: 100vw;
    height: 100vh;
    position: relative;

    header {
        width: 100%;
        background: lightgrey;
    }
}

#admin {
    width: 50%;
    margin: auto;

    input {
        width: 50%;
    }

    table {
        width: 100%;
        margin: auto;
        text-align: center;

        th {
            background: lightgray;
        }

        tr {

            td,
            th {
                i {
                    margin: 0 10px;
                }
            }
        }

    }

    button {
        border: 0;
        background: transparent;
    }

    .formSubmit {
        width: 100%;
        margin: auto;
        display: flex;
        justify-content: space-evenly;

        input {
            width: 30%;
        }
    }

}

#addModual {
    position: absolute;
    width: 100%;
    min-height: 100%;
    background: rgba(0, 0, 0, 0.5);

    #addCover {
        display: flex;
        flex-direction: column;
        padding: 10px;
        width: 50%;
        min-height: 50%;
        margin: auto;
        background: white;
        transform: translateY(50%);
    }

    #addMain {
        text-align: center;
        z-index: 9898;
        /* background:lightcoral; */
    }

    a {
        text-align: end;
        cursor: pointer;
        z-index: 9999;
    }

    th {
        text-align: justify;
    }

    th::after {
        content: '';
        display: inline-block;
        vertical-align: middle;
        width: 100%;
    }

    table {
        margin: auto;
    }
}

#BackMusic,
#BackConcert,
#BackNews {
    width: 80%;
    margin: auto;

    div:nth-child(1) {
        i {

            font-size: 1.5rem;
            cursor: pointer;
        }

        text-align:end;
    }

    table {
        width: 100%;

        tr,
        th,
        td {
            border: 1px solid #333;
            padding: 10px;
        }

        td:nth-last-child(1) {
            width: 10%;
        }

        span {

            font-size: 1.5rem;
            cursor: pointer;
        }

        img {
            width: 10vw;
        }
    }
}

#BackGallery {
    width: 80%;
    margin: auto;

    div:nth-child(1) {
        i {

            font-size: 1.5rem;
            cursor: pointer;
        }

        text-align:end;
    }

    table {
        width: 100%;

        tr,
        th,
        td {
            border: 1px solid #333;
            padding: 10px;
        }

        td:nth-last-child(1) {
            width: 10%;
        }

        span {

            font-size: 1.5rem;
            cursor: pointer;
        }

        img {
            width: 10vw;
        }
    }
}

.text-end {
    text-align: end;
}

.tac {
    text-align: center;
}
</style>