<style>
    /* desktop */
    @media screen and (max-width: 1280px) {

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
            margin: 0 50%;
            margin-top: -4.5rem;
            transform: translate(-50%);
        }

        .btn-comercial-header {
            display: flex;
            width: 70%;
            margin: 0 50%;
            text-align: center;
            align-items: center;
            justify-content: center;
            transform: translate(-50%);
            margin-top: 3rem;
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

        .btn-comercial-header:hover {
            color: #000;
            background-color: #fff;
        }

        .header-text {
            width: 25rem;
            margin-top: 3rem;
            text-align: center;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 20px;
            font-weight: 700;
            margin-left: 10px;
            margin-right: 10px;
        }

        .metodo-valido-header {
            display: flex;
            width: 90%;
            margin: 0 50%;
            align-items: center;
            justify-content: center;
            text-align: center;
            transform: translate(-50%);
            margin-top: 2.5rem;
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
            color: #fff;
            font-size: 14.5px;
            font-weight: 400;
        }

        .metodo-valido-header u {
            display: flex;
            margin-left: 0.5rem;
            color: #fff;
            font-size: 14.5px;
            font-weight: 400;
        }

        .btn-inscrever-header {
            display: flex;
            margin: 0 50%;
            width: 100%;
            text-align: center;
            align-items: center;
            justify-content: center;
            transform: translate(-50%);
            margin-top: 2.5rem;
            width: 24rem;
        }

        .btn-inscrever-header button {
            font-size: 20px;
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

        .btn-inscrever-header button:hover {
            transition: .3s;
            background-color: #238a31;
        }

        /* section-1 */
        .notificar {
            display: grid;
            grid-template-columns: auto;
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
        }

        /* section-2 */
        .container-section-2-grid {
            display: grid;
            grid-template-columns: auto;
        }

        .item-section-2-grid {
            width: 45rem;
            height: 8rem;
            padding: 20px 0;
            border-radius: 8px;
            margin: 10px;
            background-color: #fff;
        }

        .icon-section-2-grid {
            display: flex;
            padding: 10px;
            width: 20px;
            height: 20px;
            border-radius: 6px;
            color: #fff;
            margin: 10px;
            margin-top: -0.5rem;
            background-color: #ea8600;
        }

        .title-section-2-grid {
            display: flex;
            margin-left: 4rem;
            margin-top: -3rem;
            color: #323030;
            font-size: 18px;
            font-weight: 800;
        }

        .text-section-2-grid {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 3.5rem;
            margin-top: -0.1rem;
            width: 70%;
            text-align: left;
            font-size: 16px;
            color: #7a7a7a;
            padding: 10px;
        }

        /* section-3 */
        .title-section-3 {
            width: 32rem;
            margin-top: 3rem;
            text-align: center;
            color: #ea8600;
            font-size: 25px;
            font-weight: 700;
            margin: 0 50%;
            transform: translate(-50%);
        }

        .video-section-3 {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 730px;
            margin: 0 50%;
            transform: translate(-50%);
            margin-top: 1rem;
        }

        .btn-inscrever-section-3 {
            display: flex;
            width: 24rem;
            width: 100%;
            margin: 0 50%;
            text-align: center;
            align-items: center;
            justify-content: center;
            transform: translate(-50%);
            margin-top: 2.5rem;
        }

        .btn-inscrever-section-3 button {
            font-size: 20px;
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

        .btn-inscrever-section-3 button:hover {
            transition: .3s;
            transform: scale(1.1);
        }

        /* section-4 */
        .container-section-4-grid {
            display: grid;
            grid-template-columns: auto;
        }

        .item-section-4-grid {
            display: flex;
            width: 45rem;
            height: 8rem;
            padding: 20px 0;
            margin: 0 auto;
            font-size: 20px;
            border-style: solid;
            border-width: 0px 0px 0px 2px;
            border-color: #ea8600;
            border-radius: 8px;
            margin: 10px;
            background-color: #fff;
            --e-column-margin-right: 10px;
            --e-column-margin-left: 10px;
        }

        .informacoes-section-4-grid {
            padding: 10px;
            margin-top: -0.5rem;
            margin-left: 1rem;
        }

        .title-section-4-grid {
            color: #323030;
            font-size: 18px;
            font-weight: 800;
        }

        .text-section-4-grid {
            font-size: 14px;
            color: #7a7a7a;
            margin-top: 0.5rem;
        }

        /* section-5 */
        .container-section-5-grid {
            display: grid;
            grid-template-columns: auto;
        }

        .item-section-5-grid {
            display: flex;
            max-width: 45rem;
            height: 10rem;
            padding: 20px 0;
            display: block;
            margin: 0 auto;
            font-size: 20px;
            text-align: left;
            border-radius: 8px;
            margin: 8.5px;
            background-color: #fff;
        }

        .item-section-5-grid-informacoes {
            display: flex;
            width: 45rem;
            height: 22rem;
            padding: 20px 0;
            display: block;
            margin: 0 auto;
            font-size: 20px;
            text-align: left;
            border-radius: 8px;
            margin: 8.5px;
            margin-bottom: 1.3rem;
            background-color: #fff;
        }

        .icon-section-5-grid {
            width: 30px;
            height: 30px;
            padding: 10px;
            margin: 0 50%;
            transform: translate(-50%);
            margin-top: -1rem;
            margin-left: 2rem;
        }

        .informacoes-section-5-grid {
            padding: 10px;
            margin-top: -1rem;
        }

        .title-section-5-grid {
            display: flex;
            color: #323030;
            font-size: 18px;
            font-weight: 800;
            margin-top: -2rem;
            margin-left: 4rem;
        }

        .text-section-5-grid {
            font-size: 16px;
            color: #7a7a7a;
            padding: 10px;
            margin-top: -0.5rem;
            margin-left: 3.5rem;
        }

        .bonus-section-5 {
            margin-top: 1rem;
            text-align: center;
        }

        .title-bonus-section-5 {
            font-size: 35px;
            font-weight: bold;
            color: #ea8600;
            margin: 10px;
        }

        .text-bonus-section-5 {
            font-size: 16px;
            font-weight: bold;
            color: #fbfbfb;
            margin: 10px;
        }

        .icon-informacoes-bonus-section-5 {
            margin: 0 50%;
            transform: translate(-50%);
            margin-top: 8.5rem;
            margin-left: 6rem;
        }

        .title-informacoes-bonus-section-5 {
            margin: 0 50%;
            transform: translate(-50%);
            width: 100%;
            font-size: 24px;
            font-weight: 700;
            margin-top: -8.5rem;
            margin-left: 35rem;
        }

        .subtitle-informacoes-bonus-section-5 {
            color: #7a7a7a;
            font-size: 18px;
            font-weight: bold;
            margin: 0 10%;
            margin-left: 12.5rem;
        }

        .text-informacoes-bonus-section-5 {
            font-size: 12px;
            width: 25rem;
            margin: -1rem;
            margin-top: 0.3rem;
            margin-left: 12.6rem;
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
            font-size: 20px;
            font-weight: 700;
            font-style: italic;
            line-height: 0.9em;
            fill: #fff;
            color: #fff;
            background-color: #3abd4c;
            border: none;
            border-radius: 50px 50px 50px 50px;
            padding: 18px 50px 18px 50px;
            width: 24rem;
        }

        .btn-inscrever-section-5 button:hover {
            transition: .3s;
            transform: scale(1.1);
        }

        /* section-6 */
        .title-relatos-section-6 {
            display: flex;
            text-align: center;
            align-items: center;
            justify-content: center;
            color: #323030;
            font-size: 30px;
            font-weight: 800;
        }

        .videos-relatos-section-6 {
            display: grid;
            grid-template-columns: auto auto;
            align-items: center;
            justify-content: center;
            margin-top: 1.5rem;
        }

        /* section-7 */
        .title-perguntas-section-7 {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #ea8600;
            font-size: 32px;
            font-weight: bold;
        }

        .perguntas {
            display: grid;
            grid-template-columns: auto auto;
        }

        .perguntas .icon-perguntas {
            display: flex;
            position: absolute;
            margin-left: 48rem;
            margin-top: 0.55rem;
        }

        .collapsible {
            background-color: #f2f2f2;
            color: #323030;
            cursor: pointer;
            width: 50.8rem;
            padding: 10px;
            border-style: solid;
            border-color: #e0e0e0;
            border-width: 0.3px;
            text-align: left;
            outline: none;
        }

        .content {
            display: none;
            overflow: hidden;
            width: 49.5rem;
            padding: 10px;
            border-style: solid;
            border-color: #e0e0e0;
            border-width: 1px;
            background-color: #fff;
        }

        .active,
        .collapsible::after {
            color: #ea8600;
        }

        /* section-8 */
        .box-garantia-section-8 {
            background-color: #fffbe8;
            border-style: dashed;
            border-width: 2px;
            border-color: #dcdcdc;
            border-radius: 20px;
            padding: 50px;
            width: 44rem;
            height: 58rem;
            color: #323030;
            font-size: 14px;
        }

        .img-garantia-section-8 {
            display: flex;
            margin-left: 3rem;
            margin-top: -1.5rem;
            margin: 0 31.3%;
            transform: translate(-10%);
        }

        .title-garantia-section-8 {
            display: flex;
            color: #333;
            font-size: 44px;
            font-weight: bold;
            align-items: center;
            justify-content: center;
            margin: 0 -1%;
            transform: translate(-1%);
        }

        .garantia-incondicional-section-8 {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 15rem;
            padding: 10px;
            border-radius: 6px;
            background-color: #333;
            font-size: 18px;
            font-weight: 600;
            color: #fff;
            margin: 0 78.8%;
            transform: translate(78.8%);
            margin: 10px;
        }

        .garantia-condicional-section-8 {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 15rem;
            padding: 10px;
            border-radius: 6px;
            background-color: #333;
            font-size: 18px;
            font-weight: 600;
            color: #fff;
            margin: 0 78.8%;
            transform: translate(78.8%);
            margin: 10px;
        }

        .text-garantia-section-8 {
            color: #333;
            font-size: 14px;
            margin: 0 6%;
            transform: translate(-1%);
            margin-top: 1rem;
            text-align: center;

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
            transform: translate(-4%);
            margin-top: 4rem;
            font-size: 16px;
        }
    }

    /* mobile */
    @media screen and (max-width: 767px) {

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
            margin: 0 50%;
            margin-top: -4.5rem;
            transform: translate(-50%);
        }

        .btn-comercial-header {
            display: flex;
            width: 70%;
            margin: 0 50%;
            text-align: center;
            align-items: center;
            justify-content: center;
            transform: translate(-50%);
            margin-top: 3rem;
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

        .btn-comercial-header:hover {
            color: #000;
            background-color: #fff;
        }

        .header-text {
            width: 25rem;
            margin-top: 3rem;
            text-align: center;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 20px;
            font-weight: 700;
            margin-left: 10px;
            margin-right: 10px;
        }

        .metodo-valido-header {
            display: flex;
            width: 85%;
            margin: 0 50%;
            align-items: center;
            justify-content: center;
            text-align: center;
            transform: translate(-50%);
            margin-top: 2.5rem;
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
            color: #fff;
            font-size: 13.5px;
            font-weight: 400;
        }

        .metodo-valido-header u {
            display: flex;
            margin-left: 0.5rem;
            color: #fff;
            font-size: 13.5px;
            font-weight: 400;
        }

        .btn-inscrever-header {
            display: flex;
            margin: 0 50%;
            width: 100%;
            text-align: center;
            align-items: center;
            justify-content: center;
            transform: translate(-50%);
            margin-top: 2.5rem;
            width: 24rem;
        }

        .btn-inscrever-header button {
            font-size: 20px;
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

        .btn-inscrever-header button:hover {
            transition: .3s;
            background-color: #238a31;
        }

        /* section-1 */
        .notificar {
            display: grid;
            grid-template-columns: auto;
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
        }

        .text-notificar {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin: 5%;
        }

        .text-notificar span {
            color: #fff;
            font-size: 22px;
            font-weight: 700;
            width: 25rem;
            margin: 10px;
        }


        /* section-2 */
        .container-section-2-grid {
            display: grid;
            grid-template-columns: auto;
        }

        .item-section-2-grid {
            width: 24rem;
            height: 8rem;
            padding: 20px 0;
            border-radius: 8px;
            margin: 10px;
            background-color: #fff;
        }

        .icon-section-2-grid {
            display: flex;
            padding: 10px;
            width: 20px;
            height: 20px;
            border-radius: 6px;
            color: #fff;
            margin: 10px;
            margin-top: -0.5rem;
            background-color: #ea8600;
        }

        .title-section-2-grid {
            display: flex;
            margin-left: 4rem;
            margin-top: -3rem;
            color: #323030;
            font-size: 18px;
            font-weight: 800;
        }

        .text-section-2-grid {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 3.5rem;
            margin-top: -0.1rem;
            width: 70%;
            text-align: left;
            font-size: 16px;
            color: #7a7a7a;
            padding: 10px;
        }

        /* section-3 */
        .title-section-3 {
            width: 20rem;
            margin-top: 3rem;
            text-align: center;
            color: #ea8600;
            font-size: 25px;
            font-weight: 700;
            margin: 0 50%;
            transform: translate(-50%);
        }

        .video-section-3 {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 10px;
            margin: 0 50%;
            transform: translate(-50%);
            margin-top: 1rem;
        }

        .btn-inscrever-section-3 {
            display: flex;
            width: 24rem;
            width: 100%;
            margin: 0 50%;
            text-align: center;
            align-items: center;
            justify-content: center;
            transform: translate(-50%);
            margin-top: 2.5rem;
        }

        .btn-inscrever-section-3 button {
            font-size: 20px;
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

        .btn-inscrever-section-3 button:hover {
            transition: .3s;
            transform: scale(1.1);
        }

        /* section-4 */
        .container-section-4-grid {
            display: grid;
            grid-template-columns: auto;
        }

        .item-section-4-grid {
            display: flex;
            width: 24rem;
            height: 8rem;
            padding: 20px 0;
            margin: 0 auto;
            font-size: 20px;
            border-style: solid;
            border-width: 0px 0px 0px 2px;
            border-color: #ea8600;
            border-radius: 8px;
            margin: 10px;
            background-color: #fff;
            --e-column-margin-right: 10px;
            --e-column-margin-left: 10px;
        }

        .informacoes-section-4-grid {
            padding: 10px;
            margin-top: -0.5rem;
            margin-left: 1rem;
        }

        .title-section-4-grid {
            color: #323030;
            font-size: 18px;
            font-weight: 800;
        }

        .text-section-4-grid {
            font-size: 14px;
            color: #7a7a7a;
            margin-top: 0.5rem;
        }

        /* section-5 */
        .container-section-5-grid {
            display: grid;
            grid-template-columns: auto;
        }

        .item-section-5-grid {
            display: flex;
            max-width: 25rem;
            height: 10rem;
            padding: 20px 0;
            display: block;
            margin: 0 auto;
            font-size: 20px;
            text-align: center;
            border-radius: 8px;
            margin: 8.5px;
            background-color: #fff;
        }

        .item-section-5-grid-informacoes {
            display: flex;
            width: 25rem;
            height: 22rem;
            padding: 20px 0;
            display: block;
            margin: 0 auto;
            font-size: 20px;
            text-align: center;
            border-radius: 8px;
            margin: 8.5px;
            margin-bottom: 1.3rem;
            background-color: #fff;
        }

        .icon-section-5-grid {
            width: 30px;
            height: 30px;
            padding: 10px;
            margin: 0 50%;
            transform: translate(-50%);
            margin-top: -1rem;
        }

        .informacoes-section-5-grid {
            padding: 10px;
            margin-top: -1rem;
        }

        .title-section-5-grid {
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #323030;
            font-size: 18px;
            font-weight: 800;
            margin: 0 2.5%;
            transform: translate(-0.3%);
        }

        .text-section-5-grid {
            color: #7a7a7a;
            font-size: 16px;
            padding: 10px;
            margin-top: -0.5rem;
            margin: 0 2.5%;
            transform: translate(-0.3%);
        }

        .bonus-section-5 {
            margin-top: 1rem;
            text-align: center;
        }

        .title-bonus-section-5 {
            font-size: 35px;
            font-weight: bold;
            color: #ea8600;
            margin: 10px;
        }

        .text-bonus-section-5 {
            font-size: 16px;
            font-weight: bold;
            color: #fbfbfb;
            margin: 10px;
        }

        .icon-informacoes-bonus-section-5 {
            margin: 0 50%;
            transform: translate(-50%);
            margin-top: 1.5rem;
        }

        .title-informacoes-bonus-section-5 {
            margin: 0 50%;
            transform: translate(-50%);
            width: 100%;
            font-size: 22px;
            font-weight: 700;
        }

        .subtitle-informacoes-bonus-section-5 {
            color: #7a7a7a;
            font-size: 16px;
            font-weight: bold;
            margin: 0 5%;
        }

        .text-informacoes-bonus-section-5 {
            font-size: 10px;
            width: 20rem;
            line-height: -5em;
            margin: 0 10%;
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
            font-size: 20px;
            font-weight: 700;
            font-style: italic;
            line-height: 0.9em;
            fill: #fff;
            color: #fff;
            background-color: #3abd4c;
            border: none;
            border-radius: 50px 50px 50px 50px;
            padding: 18px 50px 18px 50px;
            width: 24rem;
        }

        .btn-inscrever-section-5 button:hover {
            transition: .3s;
            transform: scale(1.1);
        }

        /* section-6 */
        .title-relatos-section-6 {
            display: flex;
            text-align: center;
            align-items: center;
            justify-content: center;
            color: #323030;
            font-size: 30px;
            font-weight: 800;
        }

        .videos-relatos-section-6 {
            display: grid;
            grid-template-columns: auto;
            align-items: center;
            justify-content: center;
            margin-top: 1.5rem;
        }

        /* section-7 */
        .title-perguntas-section-7 {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #ea8600;
            font-size: 32px;
            font-weight: bold;
        }

        .title-perguntas {
            width: 20rem;
        }

        .title-perguntas span {
            font-size: 14px;
            font-weight: 600;
        }

        .perguntas {
            display: grid;
            grid-template-columns: auto auto;
        }

        .perguntas .icon-perguntas {
            display: flex;
            position: absolute;
            margin-left: 21.5rem;
            margin-top: 0.75rem;
        }

        .collapsible {
            background-color: #f2f2f2;
            color: #323030;
            cursor: pointer;
            width: 24rem;
            height: 4rem;
            padding: 10px;
            border-style: solid;
            border-color: #e0e0e0;
            border-width: 0.3px;
            text-align: left;
            outline: none;
        }

        .content {
            display: none;
            overflow: hidden;
            width: 22.6rem;
            padding: 10px;
            border-style: solid;
            border-color: #e0e0e0;
            border-width: 1px;
            background-color: #fff;
        }

        .active,
        .collapsible::after {
            color: #ea8600;
        }

        /* section-8 */
        .box-garantia-section-8 {
            background-color: #fffbe8;
            border-style: dashed;
            border-width: 2px;
            border-color: #dcdcdc;
            border-radius: 20px;
            padding: 50px;
            width: 18.5rem;
            height: 55rem;
            color: #323030;
            font-size: 14px;
        }

        .img-garantia-section-8 {
            display: flex;
            margin-left: 3rem;
            margin-top: -1.5rem;
            margin: 0 20%;
            transform: translate(-5%);
        }

        .img-garantia-section-8 img {
            width: 200px;
        }

        .title-garantia-section-8 {
            display: flex;
            color: #333;
            font-size: 44px;
            font-weight: bold;
            align-items: center;
            justify-content: center;
            margin: 0 -1%;
            transform: translate(-1%);
        }

        .garantia-incondicional-section-8 {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 15rem;
            padding: 10px;
            border-radius: 6px;
            background-color: #333;
            font-size: 18px;
            font-weight: 600;
            color: #fff;
            margin: 0 6%;
            transform: translate(1%);
            margin: 10px;
        }

        .garantia-condicional-section-8 {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 15rem;
            padding: 10px;
            border-radius: 6px;
            background-color: #333;
            font-size: 18px;
            font-weight: 600;
            color: #fff;
            margin: 0 6%;
            transform: translate(1%);
            margin: 10px;
        }

        .text-garantia-section-8 {
            color: #333;
            font-size: 14px;
            margin: 0 6%;
            transform: translate(-1%);
            margin-top: 1rem;

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
            transform: translate(-7%);
            margin-top: 3rem;
            font-size: 16px;
        }
    }
</style>