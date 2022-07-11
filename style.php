<style>
    html {
        overflow-x: hidden;
    }

    body {
        margin: 0;
        padding: 0;
        overflow-x: hidden;
        font-family: 'Roboto', sans-serif;
    }

    .alinhamento {
        padding: 0 20px;
    }

    /* header */
    .header {
        display: flex;
        justify-content: center;
        background-image: url(img/header/background.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: top;
    }

    .header-container {
        margin-top: 100px;
        display: inline-block;
        padding-bottom: 40px;
    }

    .header-logo {
        display: flex;
        margin-top: -3.5rem;
        margin-left: 0.1rem;
    }

    .btn-comercial-header {
        display: flex;
        width: 20%;
        text-align: center;
        align-items: center;
        justify-content: center;
        margin-top: -3.35rem;
        margin-left: 60rem;
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
        cursor: pointer;
    }

    .btn-comercial-header:hover {
        color: #000;
        background-color: #fff;
    }

    .header-text {
        max-width: 31rem;
        margin-top: 3rem;
        margin-left: -1rem;
        color: #fff;
        font-size: 35px;
        font-weight: 700;
    }

    .metodo-valido-header {
        display: flex;
        width: 45%;
        align-items: center;
        justify-content: center;
        margin-top: 2.5rem;
        margin-left: -1rem;
        padding: 10px 8px 10px 12px;
        background-color: transparent;
        background-image: linear-gradient(80deg, #ea860033 0%, #ea860000 49%);
    }

    .metodo-valido-header i {
        display: flex;
        align-items: center;
        justify-content: center;
        color: #22cb11;
    }

    .metodo-valido-header span {
        display: flex;
        margin-left: 0.8rem;
        color: #fff;
        font-size: 20px;
        font-weight: 400;
    }

    .metodo-valido-header u {
        display: flex;
        margin-left: 0.5rem;
        color: #fff;
        font-size: 20px;
        font-weight: 400;
    }

    .btn-inscrever-header {
        display: flex;
        width: 100%;
        margin: 0 50%;
        transform: translate(-50%);
        margin-top: 2.5rem;
    }

    .btn-inscrever-header button {
        font-size: 28px;
        font-weight: 700;
        font-style: italic;
        line-height: 0.9em;
        fill: #fff;
        color: #fff;
        background-color: #3abd4c;
        border: none;
        border-radius: 50px 50px 50px 50px;
        padding: 18px 50px 18px 50px;
        cursor: pointer;
    }

    .btn-inscrever-header button:hover {
        transition: .3s;
        background-color: #238a31;
    }

    /* section-1 */
    .section-1 {
        display: flex;
        justify-content: center;
        background-color: #000;
    }

    .section-1-container {
        margin-top: -8rem;
        display: inline-block;
        padding-bottom: 40px;
    }

    .notificar {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 50%;
        transform: translate(-50%);
        margin-top: 10rem;
    }

    .notificar-box {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        width: 25px;
        height: 25px;
        padding: 15px;
        color: #fff;
        border-radius: 6px;
        background-color: #ea8600;
        cursor: pointer;
    }

    .notificar-box:hover {
        fill: #ff0000;
        color: #ff0000;
        background-color: #fff;
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
        align-items: center;
        justify-content: center;
        margin: 5%;
    }

    .text-notificar span {
        color: #fff;
        font-size: 22px;
        font-weight: 700;
        width: 25rem;
        margin: 10px;
    }

    .encerramento {
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 22px;
        font-weight: 700;
    }

    .dias {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        width: 80px;
        height: 70px;
        border-radius: 6px;
        background-color: #ea8600;
        margin: 5px;
    }

    .dias span {
        color: #fff;
        font-size: 34px;
        font-weight: 500;
        line-height: 1em;
        margin-top: 10px;
    }

    .dias p {
        color: #fff;
        font-size: 12px;
        font-weight: 500;
    }

    .horas {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        width: 80px;
        height: 70px;
        border-radius: 6px;
        background-color: #ea8600;
        margin: 5px;
    }

    .horas span {
        color: #fff;
        font-size: 34px;
        font-weight: 500;
        line-height: 1em;
        margin-top: 10px;
    }

    .horas p {
        color: #fff;
        font-size: 12px;
        font-weight: 500;
        text-transform: uppercase;
    }

    .minutos {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        width: 80px;
        height: 70px;
        border-radius: 6px;
        background-color: #ea8600;
        margin: 5px;
    }

    .minutos span {
        color: #fff;
        font-size: 34px;
        font-weight: 500;
        line-height: 1em;
        margin-top: 10px;
    }

    .minutos p {
        color: #fff;
        font-size: 12px;
        font-weight: 500;
    }

    .segundos {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        width: 80px;
        height: 70px;
        border-radius: 6px;
        background-color: #ea8600;
        margin: 5px;
    }

    .segundos span {
        color: #fff;
        font-size: 34px;
        font-weight: 500;
        line-height: 1em;
        margin-top: 10px;
    }

    .segundos p {
        color: #fff;
        font-size: 12px;
        font-weight: 500;
    }

    /* section-2 */
    .section-2 {
        display: flex;
        justify-content: center;
        background-color: #f2f2f2;
    }

    .section-2-container {
        display: inline-block;
        padding-bottom: 40px;
    }

    .container-section-2-grid {
        display: grid;
        grid-template-columns: auto auto auto;
    }

    .item-section-2-grid {
        display: flex;
        width: 24rem;
        height: 10rem;
        padding: 10px 10px;
        display: block;
        margin: 0 auto;
        font-size: 20px;
        text-align: center;
        border-radius: 8px;
        margin: 10px;
        background-color: #fff;
    }

    .icon-section-2-grid {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px;
        width: 20px;
        height: 20px;
        border-radius: 6px;
        color: #fff;
        background-color: #ea8600;
    }

    .title-section-2-grid {
        display: flex;
        color: #323030;
        font-size: 18px;
        font-weight: 800;
        margin-top: -2rem;
        margin-left: 3.5rem;
    }

    .text-section-2-grid {
        display: flex;
        text-align: left;
        margin-left: 3rem;
        font-size: 16px;
        color: #7a7a7a;
        padding: 10px;
    }

    /* section-3 */
    .section-3 {
        display: flex;
        justify-content: center;
        background-color: #f2f2f2;
    }

    .section-3-container {
        display: inline-block;
        padding-bottom: 40px;
    }

    .title-section-3 {
        width: 70%;
        margin-top: 3rem;
        text-align: center;
        color: #ea8600;
        font-size: 35px;
        font-weight: 700;
        margin: 0 50%;
        transform: translate(-50%);
        justify-content: center;
    }

    .video-section-3 {
        display: flex;
        align-items: center;
        justify-content: center;
        left: 10%;
        right: 10%;
        margin-top: 1rem;
    }

    .btn-inscrever-section-3 {
        display: flex;
        width: 100%;
        margin: 0 50%;
        text-align: center;
        align-items: center;
        justify-content: center;
        transform: translate(-50%);
        margin-top: 2.5rem;
    }

    .btn-inscrever-section-3 button {
        font-size: 28px;
        font-weight: 700;
        font-style: italic;
        line-height: 0.9em;
        fill: #fff;
        color: #fff;
        background-color: #3abd4c;
        border: none;
        border-radius: 50px 50px 50px 50px;
        padding: 18px 50px 18px 50px;
        cursor: pointer;
    }

    .btn-inscrever-section-3 button:hover {
        transition: .3s;
        transform: scale(1.1);
    }

    /* section-4 */
    .section-4 {
        display: flex;
        justify-content: center;
        background-color: #f2f2f2;
    }

    .section-4-container {
        margin-top: 5px;
        display: inline-block;
        padding-bottom: 40px;
    }

    .container-section-4-grid {
        display: grid;
        grid-template-columns: auto auto;
    }

    .item-section-4-grid {
        display: flex;
        width: 30rem;
        height: 10rem;
        padding: 20px 0;
        display: block;
        margin: 0 auto;
        font-size: 20px;
        border-radius: 8px;
        border-style: solid;
        border-width: 0px 0px 0px 2px;
        border-color: #ea8600;
        margin: 10px;
        background-color: #fff;
        --e-column-margin-right: 10px;
        --e-column-margin-left: 10px;
    }

    .item-icon-section-4-grid {
        padding: 10px;
    }

    .informacoes-section-4-grid {
        padding: 10px;
        margin-top: -4rem;
        margin-left: 3.5rem;
    }

    .title-section-4-grid {
        color: #323030;
        font-size: 18px;
        font-weight: 800;
    }

    .text-section-4-grid {
        font-size: 16px;
        color: #7a7a7a;
        margin-top: 0.5rem;
    }

    /* section-5 */
    .section-5 {
        display: flex;
        justify-content: center;
        background-color: #1c1e1e;
    }

    .section-5-container {
        display: inline-block;
        padding-bottom: 40px;
    }

    .container-section-5-grid {
        display: grid;
        grid-template-columns: auto auto;
    }

    .item-section-5-grid {
        display: flex;
        max-width: 500px;
        height: 10rem;
        padding: 10px;
        margin: 0 auto;
        font-size: 20px;
        text-align: left;
        border-radius: 8px;
        margin: 8.5px;
        background-color: #fff;
    }

    .item-section-5-grid-informacoes {
        max-width: 1060px;
        height: 20rem;
        padding: 20px 0;
        display: block;
        margin: 0 auto;
        font-size: 20px;
        border-radius: 8px;
        margin: 8.5px;
        margin-bottom: 1.3rem;
        background-color: #fff;
    }

    .icon-section-5-grid {
        width: 70px;
        height: 70px;
        padding: 10px;
    }

    .informacoes-section-5-grid {
        padding: 10px;
    }

    .title-section-5-grid {
        color: #323030;
        font-size: 18px;
        font-weight: 800;
        margin-top: -3rem;
    }

    .text-section-5-grid {
        font-size: 16px;
        color: #7a7a7a;
        padding: 10px;
        margin-left: -0.5rem;
        margin-top: -0.1rem;
    }

    .bonus-section-5 {
        margin-top: 1rem;
        text-align: center;
    }

    .title-bonus-section-5 {
        font-size: 40px;
        font-weight: bold;
        color: #ea8600;
        margin: 10px;
    }

    .text-bonus-section-5 {
        font-size: 20px;
        font-weight: bold;
        color: #fbfbfb;
        margin: 10px;
    }

    .icon-informacoes-bonus-section-5 {
        margin-top: 7rem;
        margin-left: 4.5rem;
    }

    .title-informacoes-bonus-section-5 {
        font-size: 24px;
        font-weight: 700;
        margin-left: 13rem;
        margin-top: -10rem;

    }

    .subtitle-informacoes-bonus-section-5 {
        color: #7a7a7a;
        font-size: 18px;
        font-weight: bold;
        margin-left: 13rem;
    }

    .text-informacoes-bonus-section-5 {
        font-size: 16px;
        margin-left: 11.5rem;
        width: 40rem;
        margin: auto;
    }

    .btn-inscrever-section-5 {
        display: flex;
        width: 100%;
        margin: 0 50%;
        text-align: center;
        align-items: center;
        justify-content: center;
        transform: translate(-50%);
        margin-top: 2.5rem;
    }

    .btn-inscrever-section-5 button {
        font-size: 28px;
        font-weight: 700;
        font-style: italic;
        line-height: 0.9em;
        fill: #fff;
        color: #fff;
        background-color: #3abd4c;
        border: none;
        border-radius: 50px 50px 50px 50px;
        padding: 18px 50px 18px 50px;
        cursor: pointer;
    }

    .btn-inscrever-section-5 button:hover {
        transition: .3s;
        transform: scale(1.1);
    }

    /* section-6 */
    .section-6 {
        display: flex;
        justify-content: center;
        background-color: #f2f2f2;
    }

    .section-6-container {
        display: inline-block;
        padding-bottom: 40px;
    }

    .title-relatos-section-6 {
        display: flex;
        text-align: center;
        align-items: center;
        justify-content: center;
        color: #323030;
        font-size: 35px;
        font-weight: 800;

        margin-top: 1rem;
    }

    .videos-relatos-section-6 {
        display: grid;
        grid-template-columns: auto auto auto;
        align-items: center;
        justify-content: center;
        margin-top: 1.5rem;
    }

    /* section-7 */
    .section-7 {
        display: flex;
        justify-content: center;
        background-color: #f2f2f2;
    }

    .section-7-container {
        display: inline-block;
        padding-bottom: 40px;
    }

    .title-perguntas-section-7 {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: #ea8600;
        font-size: 38px;
        font-weight: bold;
    }

    .icon-section-7 {
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ea8600;
    }

    .perguntas-center {
        display: grid;
        grid-template-columns: auto;
        align-items: center;
        justify-content: center;
        margin-top: 1.5rem;
    }

    .collapsible {
        background-color: #f2f2f2;
        color: #323030;
        cursor: pointer;
        width: 70rem;
        padding: 10px;
        border-style: solid;
        border-color: #e0e0e0;
        border-width: 0.3px;
        text-align: left;
        outline: none;
    }

    .active,
    .collapsible::after {
        color: #ea8600;
    }

    .content {
        display: none;
        overflow: hidden;
        width: 68.6rem;
        padding: 10px;
        border-style: solid;
        border-color: #e0e0e0;
        border-width: 1px;
        background-color: #fff;
    }

    .title-perguntas span {
        font-size: 18px;
        font-weight: 600;
    }

    .perguntas {
        display: grid;
        grid-template-columns: auto auto;
    }

    .perguntas .icon-perguntas {
        display: flex;
        position: absolute;
        margin-left: 67.5rem;
        margin-top: 0.75rem;
    }

    /* section-8 */
    .section-8 {
        display: flex;
        justify-content: center;
        background-color: #f2f2f2;
    }

    .section-8-container {
        display: inline-block;
        padding-bottom: 40px;
    }

    .box-garantia-section-8 {
        background-color: #fffbe8;
        border-style: dashed;
        border-width: 2px;
        border-color: #dcdcdc;
        border-radius: 20px;
        padding: 50px;
        width: 65rem;
        height: 35rem;
        color: #323030;
        font-size: 14px;
    }

    .img-garantia-section-8 {
        display: flex;
        margin-left: 3rem;
        margin-top: -1.5rem;
    }

    .title-garantia-section-8 {
        display: flex;
        color: #333;
        font-size: 44px;
        font-weight: bold;
        align-items: center;
        justify-content: center;
        margin-top: -21.5rem;
        margin-left: -3rem;
    }

    .garantia-incondicional-section-8 {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 15rem;
        padding: 10px;
        border-radius: 6px;
        background-color: #333;
        margin: 0 10%;
        transform: translate(-10%);
        font-size: 18px;
        font-weight: 600;
        color: #fff;
        margin-left: 25.5rem;
    }

    .garantia-condicional-section-8 {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 15rem;
        padding: 10px;
        border-radius: 6px;
        background-color: #333;
        margin: 0 10%;
        transform: translate(-10%);
        font-size: 18px;
        font-weight: 600;
        color: #fff;
        margin-left: 25.5rem;
    }

    .text-garantia-section-8 {
        color: #333;
        font-size: 14px;
        margin: 0 10%;
        transform: translate(-10%);
        margin: 10px;
        margin-left: 27.5rem;

    }

    .box-garantia-2-section-8 {
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        background-color: #ea860026;
        transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        padding: 20px 20px 20px 20px;
        border-radius: 15px 15px 15px 15px;
        width: 100%;
        height: 8rem;
        margin: 0 1%;
        transform: translate(-3%);
        margin-top: 7rem;
        font-size: 16px;
    }

    /* footer */
    .footer {
        display: flex;
        justify-content: center;
        background-color: #1c1e1e;
    }

    .footer-container {
        display: inline-block;
        padding-bottom: 40px;
    }

    .footer-center {
        display: grid;
        grid-template-columns: auto;
        align-items: center;
        justify-content: center;
        text-align: center;
        width: 100%;
        margin: 0 50%;
        transform: translate(-50%);
    }

    .logo-footer {
        display: flex;
        align-items: center;
        margin: 0 50%;
        transform: translate(-50%);
        filter: brightness(26%) contrast(58%) saturate(0%) blur(0px) hue-rotate(0deg);
        padding: 10px;
    }

    .informacoes-footer {
        color: #7a7a7a;
        margin: 10px;
    }

    .termos-footer {
        color: #7a7a7a;
        margin: 10px;
    }

    .link-termos-footer {
        margin: 5px;
        color: #ea8600;
    }

    .link-termos-footer:hover {
        color: #ff5e22;
    }

    .avisos-footer {
        color: #7a7a7a;
        margin: 10px;
    }

    .copyright-footer {
        color: #7a7a7a;
        margin: 10px;
    }

    .linha-footer {
        margin: 5px;
        border-color: #7a7a7a;
    }
</style>