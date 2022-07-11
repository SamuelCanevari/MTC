<style>
    body {
        margin: 0;
        padding: 0;
        overflow-x: hidden;
        font-family: "Roboto", Sans-serif;
    }

    /* responsividade */
    @media (max-width: 1024px) {

        /* section-1 */
        .section-1 {
            display: flex;
            position: relative;
        }

        .logo {
            display: flex;
            position: absolute;
            left: 68%;
            right: 68%;
            top: 3rem;
        }

        .logo img {
            width: 350px;
        }

        .btn-comercial {
            display: none;
        }

        .text-section-1 {
            display: flex;
            position: absolute;
            text-align: center;
            left: 44%;
            right: 44%;
            top: 10rem;
            width: 42rem;
        }

        .text-section-1 span {
            color: #fff;
            font-size: 35px;
            font-weight: 700;
        }

        .metodo-valido {
            display: flex;
            position: absolute;
            left: 57%;
            right: 57%;
            width: 100%;
            top: 25.5rem;
            padding: 10px 8px 10px 12px;
            background-color: transparent;
            background-image: linear-gradient(80deg, #ea860033 0%, #ea860000 49%);
        }

        .metodo-valido i {
            display: flex;
            position: absolute;
            color: #22cb11;
        }

        .metodo-valido span {
            display: flex;
            margin-left: 2.5rem;
            color: #fff;
            font-size: 20px;
            font-weight: 400;
        }

        .metodo-valido u {
            display: flex;
            margin-left: 0.5rem;
            color: #fff;
            font-size: 20px;
            font-weight: 400;
        }

        .btn-inscrever-se {
            display: flex;
            position: absolute;
            left: 57%;
            right: 57%;
            width: 100%;
            top: 32rem;
        }

        .btn-inscrever-se button {
            font-size: 34px;
            font-weight: 700;
            font-style: italic;
            line-height: 0.9em;
            fill: #fff;
            color: #fff;
            background-color: #3abd4c;
            border: none;
            border-radius: 50px 50px 50px 50px;
            padding: 18px 50px 18px 50px;
        }

        .btn-inscrever-se button:hover {
            transition: .3s;
            background-color: #238a31;
        }

        .background-section-1 {
            display: flex;
            width: 100%;
            height: 60rem;
            margin-left: 50%;
            justify-content: center;
            background-color: #121212;
        }

        .notificar {
            display: flex;
            position: absolute;
            left: 52.3%;
            right: 52.3%;
            align-items: center;
            justify-content: center;
            margin-left: -28rem;
            bottom: 2rem;
        }

        .notificar-box {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            left: 148%;
            right: 148%;
            top: -10rem;
            padding: 10px;
            width: 55px;
            border-radius: 5px;
            color: #fff;
            background-color: #ea8600;
        }

        .notificar-box:hover {
            background-color: #fff;
            fill: #ff0000;
            color: #ff0000;
            animation: shake 0.82s cubic-bezier(.36, .07, .19, .97) both;
            animation-iteration-count: infinite;
            transform: translate3d(0, 0, 0);
            backface-visibility: hidden;
            perspective: 1000px;
        }

        @keyframes shake {

            10%,
            90% {
                transform: translate3d(-1px, 0, 0);
            }

            20%,
            80% {
                transform: translate3d(2px, 0, 0);
            }

            30%,
            50%,
            70% {
                transform: translate3d(-4px, 0, 0);
            }

            40%,
            60% {
                transform: translate3d(4px, 0, 0);
            }
        }

        .text-notificar {
            display: flex;
            position: relative;
            left: 53%;
            right: 53%;
            top: -5rem;
        }

        .text-notificar span {
            color: #fff;
            font-size: 22px;
            font-weight: 700;
        }

        .encerramento {
            display: flex;
            position: absolute;
            align-items: center;
            left: -137%;
            right: -137%;
            color: #fff;
            font-size: 22px;
            font-weight: 700;
        }

        .dias {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 85px;
            height: 75px;
            border-radius: 6px;
            background-color: #ea8600;
        }

        .dias span {
            color: #fff;
            font-size: 28px;
            font-weight: 500;
            line-height: 1.4em;
        }

        .dias p {
            color: #fff;
            font-size: 14px;
            font-weight: 500;
        }

        .horas {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 85px;
            height: 75px;
            border-radius: 6px;
            background-color: #ea8600;
            margin-left: 7.5rem;
        }

        .horas span {
            color: #fff;
            font-size: 28px;
            font-weight: 500;
            line-height: 1.4em;
        }

        .horas p {
            color: #fff;
            font-size: 14px;
            font-weight: 500;
            text-transform: uppercase;
        }

        .minutos {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 85px;
            height: 75px;
            border-radius: 6px;
            background-color: #ea8600;
            margin-left: 15rem;
        }

        .minutos span {
            color: #fff;
            font-size: 28px;
            font-weight: 500;
            line-height: 1.4em;
        }

        .minutos p {
            color: #fff;
            font-size: 14px;
            font-weight: 500;
        }

        .segundos {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 85px;
            height: 75px;
            border-radius: 6px;
            background-color: #ea8600;
            margin-left: 22.5rem;
        }

        .segundos span {
            color: #fff;
            font-size: 28px;
            font-weight: 500;
            line-height: 1.4em;
        }

        .segundos p {
            color: #fff;
            font-size: 14px;
            font-weight: 500;
        }

        .background-section-1-encerramento {
            display: flex;
            position: absolute;
            width: 100%;
            height: 16rem;
            bottom: 0;
            background-color: #000;
        }

        /* section-2 */
        .section-2 {
            display: flex;
            position: relative;
        }

        .container-informacoes-grid {
            display: grid;
            position: absolute;
            grid-template-columns: auto;
            width: 100%;
            height: 100%;
            padding: 10px;
            align-items: center;
            justify-content: center;
        }

        .item-informacoes-grid {
            display: flex;
            margin: 10px;
            background-color: #fff;
            width: 40rem;
            height: 10rem;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0px 0px 20px -7px rgb(0 0 0 / 50%);
        }

        .box-icon-informacoes i {
            color: #fff;
        }

        .box-icon-informacoes {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            margin: 10px;
            border-radius: 5px;
            background-color: #ea8600;
        }

        .title-informacoes-grid {
            display: flex;
            position: absolute;
            margin-left: 0.3rem;
            margin-top: 21.5rem;
            width: 20rem;
        }

        .title-informacoes-grid span {
            display: flex;
            position: absolute;
            color: #323030;
            font-size: 18px;
            font-weight: 800;
            margin-left: 5rem;
            margin-bottom: 9.5rem;
        }

        .text-informacoes-grid {
            display: flex;
            position: absolute;
            margin-left: 0.3rem;
            margin-top: -8rem;
        }

        .text-informacoes-grid p {
            display: flex;
            position: absolute;
            font-size: 16px;
            color: #7a7a7a;
            margin-left: 5rem;
            margin-top: 5.5rem;
            width: 15rem;
        }

        .background-section-2 {
            display: flex;
            width: 100%;
            height: 35rem;
            background-color: #f2f2f2;
        }

        /* section-3 */
        .section-3 {
            display: flex;
            position: relative;
        }

        .title-informacoes {
            display: flex;
            position: relative;
            text-align: center;
            margin-left: -12rem;
            margin-right: -12rem;
            top: 5rem;
        }

        .title-informacoes span {
            color: #ea8600;
            font-size: 38px;
            font-weight: 700;
            line-height: 1.3em;
        }

        .video-informacoes {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            bottom: 20rem;
        }

        .btn-inscrever-se-section-3 {
            display: flex;
            position: relative;
            align-items: center;
            justify-content: center;
            bottom: -48rem;
        }

        .btn-inscrever-se-section-3 button {
            font-size: 34px;
            font-weight: 700;
            border: none;
            font-style: italic;
            line-height: 0.9em;
            fill: #fff;
            color: #fff;
            background-color: #3abd4c;
            border-radius: 50px 50px 50px 50px;
            padding: 18px 50px 18px 50px;
        }

        .btn-inscrever-se-section-3 button:hover {
            transition: .3s;
            transform: scale(1.1);
        }

        .background-section-3 {
            display: flex;
            width: 100%;
            height: 60rem;
            background-color: #f2f2f2;
        }

        /* section-4 */
        .section-4 {
            display: flex;
            position: relative;
        }

        .grid-container {
            display: grid;
            position: absolute;
            grid-template-columns: auto;
            padding: 10px;
            width: 100%;
            align-items: center;
            justify-content: center;
            top: -7.5rem;
        }

        .grid-item {
            display: flex;
            padding: 50px;
            margin: 10px;
            background-color: #fff;
            border-style: solid;
            border-width: 0px 0px 0px 2px;
            border-color: #ea8600;
            background-color: #fff;
            width: 35rem;
            height: 12.5rem;
            border-radius: 8px 8px 8px 8px;
            --e-column-margin-right: 10px;
            --e-column-margin-left: 10px;
        }

        .title-grid-modulo {
            display: flex;
            position: absolute;
            font-size: 22px;
            font-weight: 700;
            margin-left: 4rem;
        }

        .text-grid-modulo {
            display: flex;
            position: absolute;
            font-size: 16px;
            width: 25rem;
            margin-top: 3rem;
            margin-left: 4rem;
        }

        .background-section-4 {
            display: flex;
            width: 100%;
            height: 188rem;
            background-color: #f2f2f2;
        }

        /* section-5 */
        .section-5 {
            display: flex;
            position: relative;
        }

        .title-informacoes {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            text-align: center;
            width: 70%;
            left: 70%;
            right: 70%;
            top: 5rem;
        }

        .title-bonus {
            display: flex;
            position: absolute;
            left: 20%;
            right: 20%;
            top: -2.5rem;
        }

        .title-bonus span {
            font-size: 45px;
            font-weight: bold;
            color: #ea8600;
            margin: 30px;
        }

        .text-bonus {
            display: flex;
            position: relative;
            left: -14%;
            right: -14%;
            top: 1.5rem;
            width: 30rem;
        }

        .text-bonus span {
            font-size: 20px;
            font-weight: bold;
            color: #fbfbfb;
            margin: 30px;
        }

        .icon-bonus {
            display: none;
        }

        .grid-container-bonus {
            display: grid;
            position: absolute;
            grid-template-columns: auto;
            padding: 10px;
            width: 100%;
            align-items: center;
            justify-content: center;
            top: 8rem;
        }

        .grid-item-bonus {
            display: flex;
            padding: 50px;
            margin: 10px;
            background-color: #fff;
            width: 45rem;
            height: 13.5rem;
            border-radius: 8px 8px 8px 8px;
            --e-column-margin-right: 10px;
            --e-column-margin-left: 10px;
        }

        .icon-grid-bonus {
            width: 35px;
            height: 35px;
        }

        .title-grid-bonus span {
            display: flex;
            position: absolute;
            font-size: 22px;
            font-weight: 700;
            margin-top: -1rem;
            margin-left: 1.5rem;
        }

        .text-grid-bonus p {
            display: flex;
            position: absolute;
            font-size: 16px;
            width: 25rem;
            margin-top: 1rem;
            margin-left: 1.5rem;
        }

        .grid-container-bonus2 {
            display: grid;
            position: absolute;
            grid-template-columns: auto;
            padding: 10px;
            width: 100%;
            align-items: center;
            justify-content: center;
            top: 88.5rem;
        }

        .grid-item-bonus2 {
            display: flex;
            padding: 50px;
            margin: 10px;
            background-color: #fff;
            width: 45rem;
            height: 25rem;
            border-radius: 8px 8px 8px 8px;
            --e-column-margin-right: 10px;
            --e-column-margin-left: 10px;
        }

        .icon-grid-bonus2 {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            text-align: center;
            left: 50%;
            right: 50%;
            transform: translate(-50%, -50%);
            margin-left: -18rem;
            margin-top: 10rem;
        }

        .title-grid-bonus2 {
            display: flex;
            position: absolute;
            font-size: 22px;
            font-weight: 700;
            margin-left: 6rem;
        }

        .subtitle-grid-bonus2 {
            display: flex;
            position: absolute;
            margin-left: 6rem;
            margin-top: 2.5rem;
            width: 20rem;
            color: #7a7a7a;
        }

        .text-grid-bonus2 {
            display: flex;
            position: absolute;
            margin-left: 6rem;
            margin-top: 4.5rem;
            width: 32rem;
        }

        .btn-inscrever-se-section-5 {
            display: flex;
            position: relative;
            align-items: center;
            justify-content: center;
            top: 154.5rem;
        }

        .btn-inscrever-se-section-5 button {
            font-size: 34px;
            font-weight: 700;
            border: none;
            font-style: italic;
            line-height: 0.9em;
            fill: #fff;
            color: #fff;
            background-color: #3abd4c;
            border-radius: 50px 50px 50px 50px;
            padding: 18px 50px 18px 50px;
        }

        .btn-inscrever-se-section-5 button:hover {
            transition: .3s;
            transform: scale(1.1);
        }

        .background-section-5 {
            display: flex;
            width: 100%;
            height: 160rem;
            background-color: #1c1e1e;
        }

        /* section-6 */
        .section-6 {
            display: flex;
            position: relative;
        }

        .title-relatos {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            width: 100rem;
            margin-top: 5rem;
        }

        .title-relatos span {
            color: #323030;
            font-size: 42px;
            font-weight: 800;
        }

        .grid-container-relatos {
            display: grid;
            position: absolute;
            grid-template-columns: auto auto;
            padding: 10px;
            width: 100%;
            align-items: center;
            justify-content: center;
            top: 8rem;
        }

        .grid-item-relatos {
            display: flex;
            margin: 10px;
        }

        .background-section-6 {
            display: flex;
            width: 100%;
            height: 92rem;
            background-color: #f2f2f2;
        }

        /* section-7 */
        .section-7 {
            display: flex;
            position: relative;
        }

        .title-perguntas-section-7 {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            width: 100rem;
            top: 3rem;
        }

        .title-perguntas-section-7 span {
            color: #ea8600;
            font-size: 38px;
            font-weight: bold;
        }

        .icon-perguntas-section-7 {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            top: 7rem;
        }

        .icon-perguntas-section-7 i {
            color: #ea8600;
        }

        .icon-perguntas i {
            display: none;
        }

        .perguntas-center {
            display: grid;
            grid-template-columns: auto;
            position: absolute;
            align-items: center;
            justify-content: center;
            top: 35rem;
        }

        .collapsible {
            background-color: #f2f2f2;
            color: #323030;
            cursor: pointer;
            padding: 8px;
            width: 45rem;
            border-style: solid;
            border-color: #e0e0e0;
            border-width: 0.3px;
            text-align: left;
            outline: none;
            font-size: 15px;
        }

        .active,
        .collapsible::after {
            color: #ea8600;
        }

        .content {
            display: none;
            overflow: hidden;
            width: 45rem;
            padding: 10px;
            border-style: solid;
            border-color: #e0e0e0;
            border-width: 1px;
            background-color: #fff;
        }

        .title-perguntas span {
            font-size: 22px;
            font-weight: 600;
        }

        .background-section-7 {
            display: flex;
            width: 100%;
            height: 60rem;
            background-color: #f2f2f2;
        }

        /* section-8 */
        .section-8 {
            display: flex;
            position: relative;
        }

        .garantia-box {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            background-color: #fffbe8;
            border-style: dashed;
            border-width: 2px;
            border-color: #dcdcdc;
            border-radius: 20px;
            padding: 50px;
            width: 48rem;
            height: 70rem;
            bottom: -32rem;
            transform: translate(-50%, -50%);
        }

        .title-garantia {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            top: 30rem;
        }

        .title-garantia span {
            color: #333;
            font-size: 44px;
            font-weight: bold;
        }

        .garantia-incondicional {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            width: 40%;
            padding: 10px;
            border-radius: 6px;
            background-color: #333;
            top: 36rem;
        }

        .garantia-incondicional span {
            color: #fff;
            font-size: 22px;
            font-weight: 600;
        }

        .text-garantia-incondicional {
            display: flex;
            position: absolute;
            text-align: center;
            left: 10%;
            right: 10%;
            margin-top: 28rem;
        }

        .text-garantia-incondicional span {
            color: #323030;
            font-size: 18px;
        }

        .garantia-condicional {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            width: 40%;
            padding: 10px;
            border-radius: 6px;
            background-color: #333;
            top: 47rem;
        }

        .garantia-condicional span {
            color: #fff;
            font-size: 22px;
            font-weight: 600;
        }

        .text-garantia-condicional {
            display: flex;
            position: absolute;
            text-align: center;
            left: 10%;
            right: 10%;
            margin-top: 42rem;
        }

        .text-garantia-condicional span {
            color: #323030;
            font-size: 18px;
        }

        .imagem-garantia {
            display: flex;
            position: absolute;
            left: 115%;
            right: 115%;
            top: 3rem;
        }

        .atencao-garantia-box {
            display: flex;
            position: relative;
            background-color: #ea860026;
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 20px 20px 20px 20px;
            border-radius: 15px 15px 15px 15px;
            width: 100%;
            height: 8rem;
            bottom: -30rem;
        }

        .atencao-garantia-text {
            color: #323030;
            font-size: 18px;
        }

        .background-section-8 {
            display: flex;
            width: 100%;
            height: 75rem;
            background-color: #f2f2f2;
        }

        /* footer */
        .footer {
            display: flex;
            position: relative;
        }

        .logo-mtc-footer {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            left: 50%;
            right: 50%;
            transform: translate(-50%, -50%);
            top: 3rem;
        }

        .logo-mtc-footer img {
            filter: brightness(26%) contrast(58%) saturate(0%) blur(0px) hue-rotate(0deg);
        }

        .logo-adriano-gianini {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            left: 50%;
            right: 50%;
            transform: translate(-50%, -50%);
            top: 7rem;
        }

        .logo-adriano-gianini img {
            filter: brightness(26%) contrast(58%) saturate(0%) blur(0px) hue-rotate(0deg);
        }

        .text-1 {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            left: 50%;
            right: 50%;
            transform: translate(-50%, -50%);
            top: 11rem;
            width: 100%;
        }

        .text-1 span {
            color: #7a7a7a;
            font-size: 16px;
            font-weight: 600;
            line-height: 1.2em;
        }

        .linha-1 hr {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            left: 50%;
            right: 50%;
            transform: translate(-50%, -50%);
            width: 88%;
            border-top: #7a7a7a;
            border-width: 1px;
            border-style: solid;
            bottom: 10rem;
        }

        .termos {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            left: 50%;
            right: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            color: #7a7a7a;
            font-size: 13px;
            font-weight: 500;
            letter-spacing: -0.4px;
            bottom: 8.5rem;
        }

        .termos a {
            margin: 5px;
            color: #ea8600;
        }

        .termos a:hover {
            color: #ff5e22;
        }

        .linha-2 hr {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            left: 50%;
            right: 50%;
            transform: translate(-50%, -50%);
            width: 88%;
            border-top: #7a7a7a;
            border-width: 1px;
            border-style: solid;
            bottom: 6rem;
        }

        .aviso {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            left: 50%;
            right: 50%;
            transform: translate(-50%, -50%);
            bottom: 1.5rem;
            width: 100%;
        }


        .aviso span {
            color: #7a7a7a;
            font-size: 14px;
            font-weight: 500;
        }

        .copyright {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            left: 50%;
            right: 50%;
            transform: translate(-50%, -50%);
            bottom: 4rem;
            width: 100%;
        }

        .copyright span {
            color: #7a7a7a;
            font-size: 13px;
            font-weight: 600;
        }

        .background-footer {
            display: flex;
            width: 100%;
            height: 25rem;
            background-color: #1e1c1c;
        }
    }

    @media (max-width: 768px) {

        /* section-1 */
        .section-1 {
            display: flex;
            position: relative;
        }

        .logo {
            display: flex;
            position: absolute;
            left: 63.5%;
            right: 63.5%;
            top: 3rem;
        }

        .logo img {
            width: 350px;
        }

        .btn-comercial {
            display: none;
        }

        .text-section-1 {
            display: flex;
            position: absolute;
            text-align: center;
            left: 35%;
            right: 35%;
            top: 10rem;
            width: 42rem;
        }

        .text-section-1 span {
            color: #fff;
            font-size: 35px;
            font-weight: 700;
        }

        .metodo-valido {
            display: flex;
            position: absolute;
            left: 48%;
            right: 48%;
            width: 100%;
            top: 25.5rem;
            padding: 10px 8px 10px 12px;
            background-color: transparent;
            background-image: linear-gradient(80deg, #ea860033 0%, #ea860000 49%);
        }

        .metodo-valido i {
            display: flex;
            position: absolute;
            color: #22cb11;
        }

        .metodo-valido span {
            display: flex;
            margin-left: 2.5rem;
            color: #fff;
            font-size: 20px;
            font-weight: 400;
        }

        .metodo-valido u {
            display: flex;
            margin-left: 0.5rem;
            color: #fff;
            font-size: 20px;
            font-weight: 400;
        }

        .btn-inscrever-se {
            display: flex;
            position: absolute;
            left: 48%;
            right: 48%;
            width: 100%;
            top: 32rem;
        }

        .btn-inscrever-se button {
            font-size: 34px;
            font-weight: 700;
            font-style: italic;
            line-height: 0.9em;
            fill: #fff;
            color: #fff;
            background-color: #3abd4c;
            border: none;
            border-radius: 50px 50px 50px 50px;
            padding: 18px 50px 18px 50px;
        }

        .btn-inscrever-se button:hover {
            transition: .3s;
            background-color: #238a31;
        }

        .background-section-1 {
            display: flex;
            width: 100%;
            height: 60rem;
            margin-left: 50%;
            justify-content: center;
            background-color: #121212;
        }

        .notificar {
            display: flex;
            position: absolute;
            left: 52.3%;
            right: 52.3%;
            align-items: center;
            justify-content: center;
            margin-left: -28rem;
            bottom: 2rem;
        }

        .notificar-box {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            left: 148%;
            right: 148%;
            top: -10rem;
            padding: 10px;
            width: 55px;
            border-radius: 5px;
            color: #fff;
            background-color: #ea8600;
        }

        .notificar-box:hover {
            background-color: #fff;
            fill: #ff0000;
            color: #ff0000;
            animation: shake 0.82s cubic-bezier(.36, .07, .19, .97) both;
            animation-iteration-count: infinite;
            transform: translate3d(0, 0, 0);
            backface-visibility: hidden;
            perspective: 1000px;
        }

        @keyframes shake {

            10%,
            90% {
                transform: translate3d(-1px, 0, 0);
            }

            20%,
            80% {
                transform: translate3d(2px, 0, 0);
            }

            30%,
            50%,
            70% {
                transform: translate3d(-4px, 0, 0);
            }

            40%,
            60% {
                transform: translate3d(4px, 0, 0);
            }
        }

        .text-notificar {
            display: flex;
            position: relative;
            left: 53%;
            right: 53%;
            top: -5rem;
        }

        .text-notificar span {
            color: #fff;
            font-size: 22px;
            font-weight: 700;
        }

        .encerramento {
            display: flex;
            position: absolute;
            align-items: center;
            left: -137%;
            right: -137%;
            color: #fff;
            font-size: 22px;
            font-weight: 700;
        }

        .dias {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 85px;
            height: 75px;
            border-radius: 6px;
            background-color: #ea8600;
        }

        .dias span {
            color: #fff;
            font-size: 28px;
            font-weight: 500;
            line-height: 1.4em;
        }

        .dias p {
            color: #fff;
            font-size: 14px;
            font-weight: 500;
        }

        .horas {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 85px;
            height: 75px;
            border-radius: 6px;
            background-color: #ea8600;
            margin-left: 7.5rem;
        }

        .horas span {
            color: #fff;
            font-size: 28px;
            font-weight: 500;
            line-height: 1.4em;
        }

        .horas p {
            color: #fff;
            font-size: 14px;
            font-weight: 500;
            text-transform: uppercase;
        }

        .minutos {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 85px;
            height: 75px;
            border-radius: 6px;
            background-color: #ea8600;
            margin-left: 15rem;
        }

        .minutos span {
            color: #fff;
            font-size: 28px;
            font-weight: 500;
            line-height: 1.4em;
        }

        .minutos p {
            color: #fff;
            font-size: 14px;
            font-weight: 500;
        }

        .segundos {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 85px;
            height: 75px;
            border-radius: 6px;
            background-color: #ea8600;
            margin-left: 22.5rem;
        }

        .segundos span {
            color: #fff;
            font-size: 28px;
            font-weight: 500;
            line-height: 1.4em;
        }

        .segundos p {
            color: #fff;
            font-size: 14px;
            font-weight: 500;
        }

        .background-section-1-encerramento {
            display: flex;
            position: absolute;
            width: 100%;
            height: 16rem;
            bottom: 0;
            background-color: #000;
        }

        /* section-2 */
        .section-2 {
            display: flex;
            position: relative;
        }

        .container-informacoes-grid {
            display: grid;
            position: absolute;
            grid-template-columns: auto;
            width: 100%;
            height: 100%;
            padding: 10px;
            align-items: center;
            justify-content: center;
        }

        .item-informacoes-grid {
            display: flex;
            margin: 10px;
            background-color: #fff;
            width: 40rem;
            height: 10rem;
            padding: 10px;
            border-radius: 8px;
            box-shadow: 0px 0px 20px -7px rgb(0 0 0 / 50%);
        }

        .box-icon-informacoes i {
            color: #fff;
        }

        .box-icon-informacoes {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            margin: 10px;
            border-radius: 5px;
            background-color: #ea8600;
        }

        .title-informacoes-grid {
            display: flex;
            position: absolute;
            margin-left: 0.3rem;
            margin-top: 21.5rem;
            width: 20rem;
        }

        .title-informacoes-grid span {
            display: flex;
            position: absolute;
            color: #323030;
            font-size: 18px;
            font-weight: 800;
            margin-left: 5rem;
            margin-bottom: 9.5rem;
        }

        .text-informacoes-grid {
            display: flex;
            position: absolute;
            margin-left: 0.3rem;
            margin-top: -8rem;
        }

        .text-informacoes-grid p {
            display: flex;
            position: absolute;
            font-size: 16px;
            color: #7a7a7a;
            margin-left: 5rem;
            margin-top: 5.5rem;
            width: 15rem;
        }

        .background-section-2 {
            display: flex;
            width: 100%;
            height: 35rem;
            background-color: #f2f2f2;
        }

        /* section-3 */
        .section-3 {
            display: flex;
            position: relative;
        }

        .title-informacoes {
            display: flex;
            position: relative;
            text-align: center;
            margin-left: -12rem;
            margin-right: -12rem;
            top: 5rem;
        }

        .title-informacoes span {
            color: #ea8600;
            font-size: 38px;
            font-weight: 700;
            line-height: 1.3em;
        }

        .video-informacoes {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            bottom: 20rem;
        }

        .btn-inscrever-se-section-3 {
            display: flex;
            position: relative;
            align-items: center;
            justify-content: center;
            bottom: -48rem;
        }

        .btn-inscrever-se-section-3 button {
            font-size: 34px;
            font-weight: 700;
            border: none;
            font-style: italic;
            line-height: 0.9em;
            fill: #fff;
            color: #fff;
            background-color: #3abd4c;
            border-radius: 50px 50px 50px 50px;
            padding: 18px 50px 18px 50px;
        }

        .btn-inscrever-se-section-3 button:hover {
            transition: .3s;
            transform: scale(1.1);
        }

        .background-section-3 {
            display: flex;
            width: 100%;
            height: 60rem;
            background-color: #f2f2f2;
        }

        /* section-4 */
        .section-4 {
            display: flex;
            position: relative;
        }

        .grid-container {
            display: grid;
            position: absolute;
            grid-template-columns: auto;
            padding: 10px;
            width: 100%;
            align-items: center;
            justify-content: center;
            top: -7.5rem;
        }

        .grid-item {
            display: flex;
            padding: 50px;
            margin: 10px;
            background-color: #fff;
            border-style: solid;
            border-width: 0px 0px 0px 2px;
            border-color: #ea8600;
            background-color: #fff;
            width: 35rem;
            height: 12.5rem;
            border-radius: 8px 8px 8px 8px;
            --e-column-margin-right: 10px;
            --e-column-margin-left: 10px;
        }

        .title-grid-modulo {
            display: flex;
            position: absolute;
            font-size: 22px;
            font-weight: 700;
            margin-left: 4rem;
        }

        .text-grid-modulo {
            display: flex;
            position: absolute;
            font-size: 16px;
            width: 25rem;
            margin-top: 3rem;
            margin-left: 4rem;
        }

        .background-section-4 {
            display: flex;
            width: 100%;
            height: 188rem;
            background-color: #f2f2f2;
        }

        /* section-5 */
        .section-5 {
            display: flex;
            position: relative;
        }

        .title-informacoes {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            text-align: center;
            width: 70%;
            left: 84%;
            right: 84%;
            top: 5rem;
        }

        .title-bonus {
            display: flex;
            position: absolute;
            left: 17.5%;
            right: 17.5%;
            top: -2.5rem;
        }

        .title-bonus span {
            font-size: 45px;
            font-weight: bold;
            color: #ea8600;
            margin: 30px;
        }

        .text-bonus {
            display: flex;
            position: relative;
            left: -14%;
            right: -14%;
            top: 1.5rem;
            width: 30rem;
        }

        .text-bonus span {
            font-size: 20px;
            font-weight: bold;
            color: #fbfbfb;
            margin: 30px;
        }

        .icon-bonus {
            display: none;
        }

        .grid-container-bonus {
            display: grid;
            position: absolute;
            grid-template-columns: auto;
            padding: 10px;
            width: 100%;
            align-items: center;
            justify-content: center;
            left: -1.5%;
            right: -1.5%;
            top: 8rem;
        }

        .grid-item-bonus {
            display: flex;
            padding: 50px;
            margin: 10px;
            background-color: #fff;
            width: 42rem;
            height: 13.5rem;
            border-radius: 8px 8px 8px 8px;
            --e-column-margin-right: 10px;
            --e-column-margin-left: 10px;
        }

        .icon-grid-bonus {
            width: 35px;
            height: 35px;
        }

        .title-grid-bonus span {
            display: flex;
            position: absolute;
            font-size: 22px;
            font-weight: 700;
            margin-top: -1rem;
            margin-left: 1.5rem;
        }

        .text-grid-bonus p {
            display: flex;
            position: absolute;
            font-size: 16px;
            width: 25rem;
            margin-top: 1rem;
            margin-left: 1.5rem;
        }

        .grid-container-bonus2 {
            display: grid;
            position: absolute;
            grid-template-columns: auto;
            padding: 10px;
            width: 100%;
            align-items: center;
            justify-content: center;
            top: 88.5rem;
        }

        .grid-item-bonus2 {
            display: flex;
            padding: 50px;
            margin: 10px;
            background-color: #fff;
            width: 42rem;
            height: 25rem;
            border-radius: 8px 8px 8px 8px;
            --e-column-margin-right: 10px;
            --e-column-margin-left: 10px;
        }

        .icon-grid-bonus2 {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            text-align: center;
            left: 53%;
            right: 53%;
            transform: translate(-50%, -50%);
            margin-left: -18rem;
            margin-top: 10rem;
        }

        .title-grid-bonus2 {
            display: flex;
            position: absolute;
            font-size: 22px;
            font-weight: 700;
            margin-left: 6rem;
        }

        .subtitle-grid-bonus2 {
            display: flex;
            position: absolute;
            margin-left: 6rem;
            margin-top: 2.5rem;
            width: 20rem;
            color: #7a7a7a;
        }

        .text-grid-bonus2 {
            display: flex;
            position: absolute;
            margin-left: 6rem;
            margin-top: 4.5rem;
            width: 28rem;
        }

        .btn-inscrever-se-section-5 {
            display: flex;
            position: relative;
            align-items: center;
            justify-content: center;
            top: 154.5rem;
        }

        .btn-inscrever-se-section-5 button {
            font-size: 34px;
            font-weight: 700;
            border: none;
            font-style: italic;
            line-height: 0.9em;
            fill: #fff;
            color: #fff;
            background-color: #3abd4c;
            border-radius: 50px 50px 50px 50px;
            padding: 18px 50px 18px 50px;
        }

        .btn-inscrever-se-section-5 button:hover {
            transition: .3s;
            transform: scale(1.1);
        }

        .background-section-5 {
            display: flex;
            width: 100%;
            height: 160rem;
            background-color: #1c1e1e;
        }

        /* section-6 */
        .section-6 {
            display: flex;
            position: relative;
        }

        .title-relatos {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            width: 100rem;
            margin-top: 5rem;
            left: 48%;
            right: 48%;
        }

        .title-relatos span {
            color: #323030;
            font-size: 35px;
            font-weight: 800;
        }

        .grid-container-relatos {
            display: grid;
            position: absolute;
            grid-template-columns: auto;
            padding: 10px;
            width: 100%;
            align-items: center;
            justify-content: center;
            top: 7rem;
        }

        .grid-item-relatos {
            display: flex;
            margin: 10px;
        }

        .background-section-6 {
            display: flex;
            width: 100%;
            height: 175rem;
            background-color: #f2f2f2;
        }

        /* section-7 */
        .section-7 {
            display: flex;
            position: relative;
        }

        .title-perguntas-section-7 {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            width: 100rem;
            top: 3rem;
        }

        .title-perguntas-section-7 span {
            color: #ea8600;
            font-size: 38px;
            font-weight: bold;
        }

        .icon-perguntas-section-7 {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            top: 7rem;
        }

        .icon-perguntas-section-7 i {
            color: #ea8600;
        }

        .icon-perguntas i {
            display: none;
        }

        .perguntas-center {
            display: grid;
            grid-template-columns: auto;
            position: absolute;
            align-items: center;
            justify-content: center;
            left: 48.5%;
            right: 48.5%;
            top: 37rem;
        }

        .collapsible {
            background-color: #f2f2f2;
            color: #323030;
            cursor: pointer;
            padding: 8px;
            width: 42rem;
            border-style: solid;
            border-color: #e0e0e0;
            border-width: 0.3px;
            text-align: left;
            outline: none;
            font-size: 15px;
        }

        .active,
        .collapsible::after {
            color: #ea8600;
        }

        .content {
            display: none;
            overflow: hidden;
            width: 42rem;
            padding: 10px;
            border-style: solid;
            border-color: #e0e0e0;
            border-width: 1px;
            background-color: #fff;
        }

        .title-perguntas span {
            font-size: 22px;
            font-weight: 600;
        }

        .background-section-7 {
            display: flex;
            width: 100%;
            height: 65rem;
            background-color: #f2f2f2;
        }

        /* section-8 */
        .section-8 {
            display: flex;
            position: relative;
        }

        .garantia-box {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            background-color: #fffbe8;
            border-style: dashed;
            border-width: 2px;
            border-color: #dcdcdc;
            border-radius: 20px;
            padding: 50px;
            width: 42rem;
            height: 70rem;
            bottom: -32rem;
            left: 48.5%;
            right: 48.5%;
            transform: translate(-50%, -50%);
        }

        .title-garantia {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            top: 30rem;
        }

        .title-garantia span {
            color: #333;
            font-size: 44px;
            font-weight: bold;
        }

        .garantia-incondicional {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            width: 40%;
            padding: 10px;
            border-radius: 6px;
            background-color: #333;
            top: 36rem;
        }

        .garantia-incondicional span {
            color: #fff;
            font-size: 22px;
            font-weight: 600;
        }

        .text-garantia-incondicional {
            display: flex;
            position: absolute;
            text-align: center;
            left: 8%;
            right: 8%;
            margin-top: 28rem;
            width: 35rem;
        }

        .text-garantia-incondicional span {
            color: #323030;
            font-size: 16px;
        }

        .garantia-condicional {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            width: 40%;
            padding: 10px;
            border-radius: 6px;
            background-color: #333;
            top: 47rem;
        }

        .garantia-condicional span {
            color: #fff;
            font-size: 22px;
            font-weight: 600;
        }

        .text-garantia-condicional {
            display: flex;
            position: absolute;
            text-align: center;
            left: 10%;
            right: 10%;
            margin-top: 42rem;
        }

        .text-garantia-condicional span {
            color: #323030;
            font-size: 16px;
        }

        .imagem-garantia {
            display: flex;
            position: absolute;
            left: 124%;
            right: 124%;
            top: 3rem;
        }

        .atencao-garantia-box {
            display: flex;
            position: relative;
            background-color: #ea860026;
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 20px 20px 20px 20px;
            border-radius: 15px 15px 15px 15px;
            width: 100%;
            height: 8rem;
            bottom: -30rem;
        }

        .atencao-garantia-text {
            color: #323030;
            font-size: 16px;
        }

        .background-section-8 {
            display: flex;
            width: 100%;
            height: 75rem;
            background-color: #f2f2f2;
        }

        /* footer */
        .footer {
            display: flex;
            position: relative;
        }

        .logo-mtc-footer {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            left: 50%;
            right: 50%;
            transform: translate(-50%, -50%);
            top: 3rem;
        }

        .logo-mtc-footer img {
            filter: brightness(26%) contrast(58%) saturate(0%) blur(0px) hue-rotate(0deg);
        }

        .logo-adriano-gianini {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            left: 50%;
            right: 50%;
            transform: translate(-50%, -50%);
            top: 7rem;
        }

        .logo-adriano-gianini img {
            filter: brightness(26%) contrast(58%) saturate(0%) blur(0px) hue-rotate(0deg);
        }

        .text-1 {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            left: 50%;
            right: 50%;
            transform: translate(-50%, -50%);
            top: 11rem;
            width: 100%;
        }

        .text-1 span {
            color: #7a7a7a;
            font-size: 16px;
            font-weight: 600;
            line-height: 1.2em;
        }

        .linha-1 hr {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            left: 50%;
            right: 50%;
            transform: translate(-50%, -50%);
            width: 88%;
            border-top: #7a7a7a;
            border-width: 1px;
            border-style: solid;
            bottom: 10rem;
        }

        .termos {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            text-align: center;
            left: 50%;
            right: 50%;
            transform: translate(-50%, -50%);
            width: 90%;
            color: #7a7a7a;
            font-size: 13px;
            font-weight: 500;
            letter-spacing: -0.4px;
            bottom: 6.8rem;
        }

        .termos a {
            margin: 5px;
            color: #ea8600;
        }

        .termos a:hover {
            color: #ff5e22;
        }

        .linha-2 hr {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            left: 50%;
            right: 50%;
            transform: translate(-50%, -50%);
            width: 88%;
            border-top: #7a7a7a;
            border-width: 1px;
            border-style: solid;
            bottom: 6rem;
        }

        .aviso {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            text-align: center;
            left: 50%;
            right: 50%;
            transform: translate(-50%, -50%);
            bottom: 2rem;
            width: 90%;
        }


        .aviso span {
            color: #7a7a7a;
            font-size: 14px;
            font-weight: 500;
        }

        .copyright {
            display: flex;
            position: absolute;
            align-items: center;
            justify-content: center;
            left: 50%;
            right: 50%;
            transform: translate(-50%, -50%);
            bottom: 0.5rem;
            width: 100%;
        }

        .copyright span {
            color: #7a7a7a;
            font-size: 13px;
            font-weight: 600;
        }

        .background-footer {
            display: flex;
            width: 100%;
            height: 25rem;
            background-color: #1e1c1c;
        }
    }
</style>