<style>
    body {
        margin: 0;
        padding: 0;
        overflow-x: hidden;
        font-family: "Roboto", Sans-serif;
    }

    /* section-1 */
    .section-1 {
        display: flex;
        position: relative;
    }

    .logo {
        display: flex;
        position: absolute;
        margin-left: -37.5%;
        top: 3rem;
    }

    .btn-comercial {
        display: flex;
        position: absolute;
        width: 60vw;
        margin-left: 95%;
        top: 3rem;
    }

    .btn-comercial button {
        font-size: 13px;
        font-weight: 600;
        fill: #fff;
        color: #fff;
        background-color: #FF410000;
        border-style: solid;
        border-width: 2px 2px 2px 2px;
        border-color: #fff;
        border-radius: 100px 100px 100px 100px;
        padding: 14px 28px 14px 28px;
    }

    .btn-comercial button:hover {
        color: #000;
        background-color: #fff;
    }

    .text-section-1 {
        display: flex;
        position: absolute;
        margin-left: -30.5%;
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
        margin-left: -33.5%;
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
        margin-left: -33.5%;
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
        justify-content: center;
        background-color: #0C0D0C;
    }

    .notificar {
        display: flex;
        position: absolute;
        left: 50%;
        right: 50%;
        transform: translate(-50%, -50%);
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

    .text-notificar span {
        display: flex;
        position: relative;
        left: 13.5rem;
    }

    .text-notificar {
        color: #fff;
        font-size: 22px;
        font-weight: 700;
    }

    .encerramento {
        display: flex;
        position: absolute;
        align-items: center;
        color: #fff;
        font-size: 22px;
        font-weight: 700;
        margin-left: 60rem;
    }

    .dias {
        display: flex;
        position: absolute;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        width: 95px;
        height: 85px;
        border-radius: 6px;
        background-color: #ea8600;
    }

    .dias span {
        color: #fff;
        font-size: 34px;
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
        width: 95px;
        height: 85px;
        border-radius: 6px;
        background-color: #ea8600;
        margin-left: 7.5rem;
    }

    .horas span {
        color: #fff;
        font-size: 34px;
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
        width: 95px;
        height: 85px;
        border-radius: 6px;
        background-color: #ea8600;
        margin-left: 15rem;
    }

    .minutos span {
        color: #fff;
        font-size: 34px;
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
        width: 95px;
        height: 85px;
        border-radius: 6px;
        background-color: #ea8600;
        margin-left: 22.5rem;
    }

    .segundos span {
        color: #fff;
        font-size: 34px;
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
        height: 8rem;
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
        grid-template-columns: auto auto auto;
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
        width: 23.5rem;
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

    .title-informacoes-grid span {
        display: flex;
        position: absolute;
        color: #323030;
        font-size: 18px;
        font-weight: 800;
        margin-left: 5rem;
        bottom: 9.5rem;
    }

    .text-informacoes-grid p {
        display: flex;
        position: absolute;
        font-size: 16px;
        color: #7a7a7a;
        margin-left: 5rem;
        top: 5.5rem;
        width: 15rem;
    }

    .background-section-2 {
        display: flex;
        width: 100%;
        height: 15rem;
        background-color: #f2f2f2;
    }

    /* section-3 */
    .section-3 {
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
        left: 50%;
        right: 50%;
        transform: translate(-50%, -50%);
        top: 5rem;
    }

    .title-informacoes span {
        color: #ea8600;
        font-size: 42px;
        font-weight: 700;
        line-height: 1.3em;
    }

    .video-informacoes {
        display: flex;
        position: absolute;
        align-items: center;
        justify-content: center;
        left: 10%;
        right: 10%;
        bottom: 20rem;
    }

    .btn-inscrever-se-section-3 {
        display: flex;
        position: relative;
        align-items: center;
        justify-content: center;
        left: 50%;
        right: 50%;
        transform: translate(-50%, -50%);
        bottom: -50rem;
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
        grid-template-columns: auto auto;
        padding: 10px;
        width: 100%;
        align-items: center;
        justify-content: center;
        top: -4rem;
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
        height: 95rem;
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
        left: 50%;
        right: 50%;
        transform: translate(-50%, -50%);
        top: 5rem;
    }

    .title-bonus span {
        font-size: 50px;
        font-weight: bold;
        color: #ea8600;

    }

    .text-bonus span {
        font-size: 24px;
        font-weight: bold;
        color: #fbfbfb;
        margin-left: 1rem;
    }

    .icon-bonus {
        margin: 30px;
    }

    .grid-container-bonus {
        display: grid;
        position: absolute;
        grid-template-columns: auto auto;
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
        width: 35rem;
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
        top: 44.2rem;
    }

    .grid-item-bonus2 {
        display: flex;
        padding: 50px;
        margin: 10px;
        background-color: #fff;
        width: 71.5rem;
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
        margin-left: -28rem;
        margin-top: 10rem;
    }

    .title-grid-bonus2 {
        display: flex;
        position: absolute;
        font-size: 22px;
        font-weight: 700;
        margin-left: 12.5rem;
    }

    .subtitle-grid-bonus2 {
        display: flex;
        position: absolute;
        margin-left: 12.5rem;
        margin-top: 2.5rem;
        width: 20rem;
        color: #7a7a7a;
    }

    .text-grid-bonus2 {
        display: flex;
        position: absolute;
        margin-left: 12.5rem;
        margin-top: 4.5rem;
        width: 50rem;
    }

    .btn-inscrever-se-section-5 {
        display: flex;
        position: relative;
        align-items: center;
        justify-content: center;
        left: 50%;
        right: 50%;
        transform: translate(-50%, -50%);
        bottom: -110rem;
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
        height: 115rem;
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
        left: 50%;
        right: 50%;
        width: 100rem;
        margin-top: 5rem;
        transform: translate(-50%, -50%);
    }

    .title-relatos span {
        color: #323030;
        font-size: 42px;
        font-weight: 800;
    }

    .grid-container-relatos {
        display: grid;
        position: absolute;
        grid-template-columns: auto auto auto;
        padding: 10px;
        width: 100%;
        align-items: center;
        justify-content: center;
        top: 8.5rem;
    }

    .grid-item-relatos {
        display: flex;
        margin: 10px;
    }

    .background-section-6 {
        display: flex;
        width: 100%;
        height: 65rem;
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
        left: 50%;
        right: 50%;
        width: 100rem;
        top: 3rem;
        transform: translate(-50%, -50%);
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
        left: 50%;
        right: 50%;
        top: 7rem;
        transform: translate(-50%, -50%);
    }

    .icon-perguntas-section-7 i {
        color: #ea8600;
    }

    .icon-perguntas i {
        display: flex;
        position: absolute;
        align-items: center;
        justify-content: center;
        margin-top: 0.5rem;
        margin-left: 70rem;
        font-weight: bold;
    }

    .perguntas-center {
        display: grid;
        grid-template-columns: auto;
        position: absolute;
        align-items: center;
        justify-content: center;
        left: 50%;
        right: 50%;
        transform: translate(-50%, -50%);
        top: 35rem;
    }

    .collapsible {
        background-color: #f2f2f2;
        color: #323030;
        cursor: pointer;
        padding: 8px;
        width: 74rem;
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
        width: 74rem;
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
        width: 75rem;
        height: 45rem;
        bottom: -20rem;
        left: 50%;
        right: 50%;
        transform: translate(-50%, -50%);
    }

    .title-garantia {
        display: flex;
        position: absolute;
        align-items: center;
        justify-content: center;
        top: 1.5rem;
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
        padding: 10px;
        width: 21.5%;
        border-radius: 6px;
        background-color: #333;
        top: 7rem;
        margin-left: 0.5rem;
    }

    .garantia-incondicional span {
        color: #fff;
        font-size: 22px;
        font-weight: 600;
    }

    .text-garantia-incondicional {
        display: flex;
        position: absolute;
        top: 12.5rem;
        left: 29.5rem;
        width: 40rem;
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
        padding: 10px;
        width: 21.5%;
        border-radius: 6px;
        background-color: #333;
        margin-left: 0.5rem;
    }

    .garantia-condicional span {
        color: #fff;
        font-size: 22px;
        font-weight: 600;
    }

    .text-garantia-condicional {
        display: flex;
        position: absolute;
        margin-top: 12rem;
        left: 29.5rem;
    }

    .text-garantia-condicional span {
        color: #323030;
        font-size: 18px;
    }

    .imagem-garantia {
        display: flex;
        position: absolute;
        top: 5rem;
        margin-left: -40rem;
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
        bottom: -15rem;
    }

    .atencao-garantia-text {
        color: #323030;
        font-size: 18px;
        text-align: center;
    }

    .background-section-8 {
        display: flex;
        width: 100%;
        height: 50rem;
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
        text-align: center;
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
</style>