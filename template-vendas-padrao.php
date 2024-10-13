<?php
/* 
Template Name: Vendas Padrão
*/

get_header();

?>


    <!--  HEADER -->
    <header>
        <div class="logo">
            <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728604732/tipscode-logo_mk6skd.webp" alt="logo da tipscode">
        </div>

        <!-- Navbar-->
        <nav>
            <ul>
                <li>
                    <a href="#sobre">Curso</a>
                </li>
                <li>
                    <a href="#metodo">Método</a>
                </li>
                <li>
                    <a href="#beneficios">Benefícios</a>
                </li>
                <li>
                    <a href="#grade">Grade</a>
                </li>
                <li>
                    <a href="#depoimentos">Depoimentos</a>
                </li>
                <li>
                    <a href="#mentor">Mentor</a>
                </li>
                <li>
                    <a href="#cta" class="btn">Inscreva-se Agora</a>
                </li>
            </ul>
        </nav>

        <a href="https://api.whatsapp.com/send/?phone=5588999073834&text=Estou+vindo+do+site%21&type=phone_number&app_absent=0" target="_blank" class="wpp-btn">
            <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728735349/toppng.com-logo-whatsapp-png-blanco-whatsapp-icon-grey-543x577_dgjyw8.webp" alt="WhatsApp Icon">

            <span class="call">
                Chamar
            </span>
        </a>
    </header>

    <!--HERO-->
    <section class="hero">
        <!--Main Column-->
        <div class="col main-col">
            <div class="headline">
                <div class="title">
                    <span>FST</span>
                    <span>2.0</span>
                </div>

                <h1>
                    <span>SUPERE LIMITES E ACELERE NA PROGRAMAÇÃO</span>
                    <span>COM O FULL STACK TURBO</span>
                </h1>

                <p>
                    Bem-vindo ao Full Stack Turbo,  o motor de alta performance que vai te impulsionar para a linha de chegada da programação moderna. Em vez de andar a passos lentos, você vai dominar rapidamente tecnologias como JavaScript, ReactJS, NodeJS e ExpressJS para criar sites dinâmicos e aplicações robustas. Seja o especialista que as empresas estão buscando!
                </p>
            </div>

            <button class="btn-s" onclick="location.href='#cta'">
                Inscreva-se Agora
            </button>
        </div>

        <div class="col"></div>
        <div class="col">
            <div class="video">
                <iframe
                    src="https://player.cloudinary.com/embed/?public_id=Curso_Full_Stack_Turbo_por_DENTRO_-_Saiba_todos_os_detalhes_eqhmvv&cloud_name=dfjajuiwn&player[showLogo]=false&source[poster]=https%3A%2F%2Fres.cloudinary.com%2Fdfjajuiwn%2Fimage%2Fupload%2Fimage-bg-hero-01-_1__u65fm9.jpg&source[info][title]=Full%20Stack%20Turbo%20por%20dentro&source[info][subtitle]=Entenda%20com%20ofunciona%20o%20curso%20Full%20Stack%20Turbo%20por%20dentro"
                    width="640"
                    height="360"
                    allow="autoplay; fullscreen; encrypted-media; picture-in-picture"
                    undefined
                    allowfullscreen
                    frameborder="0"
                >
                </iframe>
            </div>
        </div>
    </section>

    <!--Technologies Marquee-->
    <div class="marquee">
        <div class="text-wrapper">
            <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599589/HTML_srmohi.avif" alt="html logo">
            <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599589/CSS_nkwbc4.avif" alt="css logo">
            <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599592/BOOTSTRAP_rhsmmx.avif" alt="bootstrap logo">
            <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599590/JAVASCRIPT_swcpi9.avif" alt="javascript logo">
            <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599596/REACT.JS_lkf03w.avif" alt="react js logo">
            <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599595/NODE.JS_vxfly1.avif" alt="node js logo">
            <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599586/EXPRESS.JS_aznf6o.avif" alt="express js logo">
            <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599593/EJS_qnw3zh.avif" alt="ejs logo">
            <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599594/SQL_gull1a.avif" alt="sql logo">
            <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599590/MONGODB_wlzihp.avif" alt="mongo db logo">
            <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599593/MONGOOSE_aiudvo.avif" alt="mongoose logo">
            <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599587/GIT_tgaz0n.avif" alt="git logo">
            <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599586/GITHUB_nmi87g.avif" alt="github logo">
            <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599588/TERMINAL-LINUX_h9yvay.avif" alt="linux logo">
        </div>
    </div>

    <!--SOBRE O CURSO-->
    <section class="sobre" id="sobre">
        <!--Main Column-->
        <div class="col main-col">
            <div class="headline">

                <h2>
                    <span>MAIS SOBRE O</span>
                    <br>
                    <span>FULL STACK TURBO</span>
                </h2>

                <p>
                O Full Stack Turbo já colocou mais de 3 mil desenvolvedores na pista, saindo do zero direto para a linha de chegada como profissionais prontos para o mercado. Você está começando ou mudando de carreira? Esse é o seu ponto de partida.
                <br/><br/>
                Projetado para ser o motor de alta performance da sua carreira profissional, o Full Stack Turbo oferece um plano de aprendizagem progressivo, te guiando passo a passo pelos fundamentos até a maestria em desenvolvimento web. Cada fase é otimizada para que você avance em velocidade máxima, aprendendo a enfrentar desafios e criar soluções inovadoras que colocam você à frente da concorrência.
                </p>
            </div>

            <button class="btn-s" onclick="location.href='#cta'">
                Inscreva-se Agora
            </button>
        </div>

        <div class="col"></div>

        <div class="col">
            <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728603071/mais-sobre-o-turbo-_1__pxwazu.webp" alt="o motor do full stack turbo">
        </div>
    </section>

    <!--Método Step-by-Step-->
    <section class="step-by-step" id="metodo">

        <div class="col">
            <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728603071/img-step-by-step-_1__w8fhgh.webp" alt="Sobre o método step-by-step">
        </div>

        <div class="col"></div>

        <!--Main Column-->
        <div class="col main-col">
            <div class="headline">

                <h2>
                    <span>O MÉTODO</span>
                    <br>
                    <span>STEP-BY-STEP</span>
                </h2>

                <p>
                    Nosso método Step by Step é como uma corrida bem planejada: são 5 fases, cada uma com 45 dias, onde você dedica de 30 a 60 minutos por dia em um ritmo ágil e eficiente. Utilizando a técnica Pomodoro, você maximiza seu tempo e minimiza erros, garantindo um aprendizado fluido e constante. Tudo o que você precisa para acelerar e cruzar a linha de chegada como um desenvolvedor Full Stack de sucesso!
                </p>
            </div>

            <button class="btn-s" onclick="location.href='#cta'">
                Inscreva-se Agora
            </button>
        </div>
    </section>

    <!--Marquee-->
    <div class="marquee">
        <div class="text-wrapper">
            <h3>o start para o seu futuro</h3>
            <h3>o start para o seu futuro</h3>
            <h3>o start para o seu futuro</h3>
            <h3>o start para o seu futuro</h3>
            <h3>o start para o seu futuro</h3>
            <h3>o start para o seu futuro</h3>
            <h3>o start para o seu futuro</h3>
            <h3>o start para o seu futuro</h3>
            <h3>o start para o seu futuro</h3>
            <h3>o start para o seu futuro</h3>
        </div>
    </div>

    <!--Porque Fazer-->
    <section class="pq-fazer" id="beneficios">
        <div class="col col-1">
            <div class="headline">

                <h2>
                    <span>POR QUE FAZER O</span>
                    <br>
                    <span>FULL STACK TURBO</span>
                </h2>

                <p>
                Pronto para acelerar sua carreira? Desenvolvedores Full Stack estão ganhando até 50% mais que programadores comuns. Não fique para trás! Cada dia perdido é uma oportunidade que escapa.
                <br/><br/>
                O mercado de tecnologia está em alta velocidade – a demanda por especialistas em JavaScript e seus frameworks está no topo, abrindo oportunidades em empresas de ponta. Além disso, com o crescimento do trabalho remoto e as inúmeras possibilidades como freelancer, você pode traçar seu próprio caminho e ditar o ritmo do seu sucesso.
                <br/><br/>
                Agora, imagine ter em mãos o combustível ideal: mais de 30 projetos práticos, 120 horas de aulas intensivas, e o suporte direto de Alisson Suassuna e sua equipe, um mentor que vai te guiar em alta velocidade. Com o Full Stack Turbo, você não apenas aprende, você ativa o acelerador da sua carreira.

                </p>
            </div>
        </div>
        <div class="col col-2">
            <div class="salary">
                <div class="seniority">
                    Dev Junior
                </div>
                <div class="bar-bg">
                    <div class="bar">
                        R$ 3.150,00
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-3">
            <div class="salary">
                <div class="seniority">
                    Dev Pleno
                </div>
                <div class="bar-bg">
                    <div class="bar">
                        R$ 5.850,00
                    </div>
                </div>
            </div>
        </div>
        <div class="col col-4">
            <div class="salary">
                <div class="seniority">
                    Dev Senior
                </div>
                <div class="bar-bg">
                    <div class="bar">
                        R$ 9.750,00
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Acesso-->
    <section class="acesso" style="background-image:url('https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599573/Background-Turbo_malvv4.avif')">
        <div class="acesso-content">
            <div class="headline acesso-headline">
                <h2>
                    <span>VEJA O QUE SÓ UM</span>
                    <br>
                    <span>ALUNO TEM ACESSO</span>
                </h2>
            </div>

            <!--Cards-->
            <div class="card card-1">
                <h4>Metodologia Step by Step</h4>
            </div>

            <div class="card card-2">
                <h4>30 projetos reais para colocar em prática</h4>
            </div>

            <div class="card card-3">
                <h4>Acompanhamento direto com o professor</h4>
            </div>

            <div class="card card-4">
                <h4>Certificado de 120 horas</h4>
            </div>

            <div class="card card-5">
                <h4>Suporte  total   da nossa equipe</h4>
            </div>

            <div class="card card-6">
                <h4>Acesso Imediado após a compra</h4>
            </div>

            <div class="card card-7">
                <h4>Aulas 100% online</h4>
            </div>

            <div class="card card-8">
                <h4>Material de apoio para cada módulo</h4>
            </div>

            <!--Empty Cards-->
            <div class="ec-1 ec"></div>
            <div class="ec-2 ec"></div>
            <div class="ec-3 ec"></div>
        </div>
    </section>

    <!--Grade Curricular-->
    <section class="grade" id="grade">
        <div class="headline">
            <h2>
                <span>A GRADE MAIS CURRICULAR</span>
                <br>
                <span>COMPLETA DO MERCADO</span>
            </h2>
        </div>

        <div class="cordeon" id="accordion">
            <div class="line">
                <div class="cordeon-header active">
                    <div class="number">1</div>
                    <div class="section-name">Introdução</div>
                </div>

                <div class="cordeon-body active">
                    <div class="text-block">
                        Fundamentos da Programação e o funcionamento da internet, preparando os alunos para criar seus primeiros sites. 
                    </div>

                    <div class="images-block">
                        <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599595/vscode_ybkif5.avif" alt="VScode tipscode">

                        <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599591/Chrome_hbtwce.avif" alt="Chrome tipscode">
                    </div>
                </div>
            </div>

            <div class="line">
                <div class="cordeon-header">
                    <div class="number">2</div>
                    <div class="section-name">Web Design</div>
                </div>

                <div class="cordeon-body">
                    <div class="text-block">
                        Estruturação e estilização de páginas com HTML5 e CSS3, incluindo flexbox, grid e design responsivo com Bootstrap
                    </div>

                    <div class="images-block">
                        <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599589/HTML_srmohi.avif" alt="html tipscode">

                        <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599589/CSS_nkwbc4.avif" alt="css tipscode">

                        <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599592/BOOTSTRAP_rhsmmx.avif" alt="tipscode">
                    </div>
                </div>
            </div>

            <div class="line">
                <div class="cordeon-header">
                    <div class="number">3</div>
                    <div class="section-name">Front-End</div>
                </div>

                <div class="cordeon-body">
                    <div class="text-block">
                        Desenvolvimento interativo com JavaScript (ES6+), manipulação do DOM, ReactJS e criação de aplicações web dinâmicas.
                    </div>

                    <div class="images-block">
                        <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599590/JAVASCRIPT_swcpi9.avif" alt="Javascript tipscode">

                        <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599596/REACT.JS_lkf03w.avif" alt="React tipscode">
                    </div>
                </div>
            </div>

            <div class="line">
                <div class="cordeon-header">
                    <div class="number">4</div>
                    <div class="section-name">Back-End</div>
                </div>

                <div class="cordeon-body">
                    <div class="text-block">
                        Introdução ao NodeJS e ExpressJS, construção de APIs, manipulação de dados com EJS e deploy de aplicações.
                    </div>

                    <div class="images-block">
                        <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599595/NODE.JS_vxfly1.avif" alt="node tipscode">

                        <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599593/EJS_qnw3zh.avif" alt="ejs tipscode">

                        <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599586/EXPRESS.JS_aznf6o.avif" alt="express js tipscode">
                    </div>
                </div>
            </div>

            <div class="line">
                <div class="cordeon-header">
                    <div class="number">5</div>
                    <div class="section-name">Banco de Dados</div>
                </div>

                <div class="cordeon-body">
                    <div class="text-block">
                        Gerenciamento de bancos de dados SQL e NoSQL, incluindo MySQL e MongoDB, integração com NodeJS.
                    </div>

                    <div class="images-block">
                        <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599594/SQL_gull1a.avif" alt="sql tipscode">

                        <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599590/MONGODB_wlzihp.avif" alt="mongodb tipscode">

                        <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599593/MONGOOSE_aiudvo.avif" alt="mongoose tipscode">
                    </div>
                </div>
            </div>

            <div class="line">
                <div class="cordeon-header">
                    <div class="number">6</div>
                    <div class="section-name">Ferramentas Dev</div>
                </div>

                <div class="cordeon-body">
                    <div class="text-block">
                        Controle de versão com Git e GitHub, além de deploy de aplicações na AWS e Azure.
                    </div>

                    <div class="images-block">
                        <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599587/GIT_tgaz0n.avif" alt="git tipscode">

                        <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599586/GITHUB_nmi87g.avif" alt="github tipscode">

                        <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599588/TERMINAL-LINUX_h9yvay.avif" alt="linux tipscode">
                    </div>
                </div>
            </div>

            <div class="line">
                <div class="cordeon-header">
                    <div class="number">7</div>
                    <div class="section-name">Bônus</div>
                </div>

                <div class="cordeon-body">
                    <div class="text-block">
                        Aulas extras com especialistas da área de tecnologia e mentores, abordando desde clean code até experiências em empresas renomadas como Google e Meta.
                    </div>

                    <div class="images-block">
                        <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728631630/Gustavo-Eng-Google_1_urqfvp.avif" alt="engenheiro google tipscode">
                        <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599591/Chrome_hbtwce.avif" alt="google">
                        <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728631631/Rodrigo-Eng-Facebook_1_dq6pnd.avif" alt="engenheiro facebook tipscode">
                        <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728629862/fb-logo_ij0i5q.avif" alt=" facebooktipscode">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Depoimentos-->
    <section id="depoimentos">
        <div class="headline">
            <h2>
                <span>O QUE DIZEM</span>
                <br>
                <span>NOSSOS ALUNOS</span>
            </h2>
        </div>
        <div class="arrow-right">
            <!--preview-->
            <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728633270/arrow-right-svgrepo-com_tt7dt7.svg" alt="arrow right" id="preview">
            <!--next-->
            <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728633270/arrow-right-svgrepo-com_tt7dt7.svg" alt="arrow right" id="next">
        </div>
        <div class="slider">
            <div class="slide-card" id="slide-01">
                <div class="img-card" style="background-image:url('https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599585/Depoente-5_wgqflq.avif')">
                    <div class="alu-name">
                        Gustavo
                    </div>
                </div>

                <div class="dep-card">
                    <p>
                        "...Contratado com apenas 2 meses de curso, vale a pena pessoal..."
                    </p>
                </div>
            </div>
            <div class="slide-card" id="slide-02">
                <div class="img-card" style="background-image:url('https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599584/Depoente-11_qzhchn.avif')">
                    <div class="alu-name">
                        Renan Silva
                    </div>
                </div>

                <div class="dep-card">
                    <p>
                        "...Peguei meu primeiro rojeto de trabalho, o cliente fechou comigo hoje..."
                    </p>
                </div>
            </div>
            <div class="slide-card" id="slide-03">
                <div class="img-card" style="background-image:url('https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599583/Depoente-6_mndkig.avif')">
                    <div class="alu-name">
                        Ari
                    </div>
                </div>

                <div class="dep-card">
                    <p>
                        "lá pra aula 80 consegui meu primeiro trampo com React, vale muito a pena pessoal"
                    </p>
                </div>
            </div>
            <div class="slide-card" id="slide-04">
                <div class="img-card" style="background-image:url('https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599583/Depoente-7_douqjo.avif')">
                    <div class="alu-name">
                        Misodor
                    </div>
                </div>

                <div class="dep-card">
                    <p>
                        "Caiu o primeiro pagamento na loja virtual montada por mim"
                    </p>
                </div>
            </div>
            <div class="slide-card" id="slide-05">
                <div class="img-card" style="background-image:url('https://res.cloudinary.com/dfjajuiwn/image/upload/v1728599582/Depoente-8_j2gccg.avif')">
                    <div class="alu-name">
                        Mateus
                    </div>
                </div>

                <div class="dep-card">
                    <p>
                        "Com apenas 15 dias de curso...Recebi meu primeiro freela pago"
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--Mentor-->
    <section id="mentor">
        <div class="mentor-title">
            <div class="headline mentor-headline">
                <h2>
                    <span>QUEM SERÁ O</span>
                    <br>
                    <span>SEU MENTOR</span>
                </h2>
            </div>
        </div>

        <div class="mentor-img">
            <div class="mentor-name-mobile">
                ALISSON <br> SUASSUNA
            </div>
            <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728603072/mentor-_1__jzytur.webp" alt="Alisson Suassuna">
        </div>
        <div class="mentor-content">
            <div class="divisor">

                <div class="mentor-name">
                    ALISSON
                </div>

                <div class="about">
                    <h4>1. FORMAÇÃO ACADÊMICA</h4>
                    <p>Com mais de 10 anos de experiência como desenvolvedor full stack, Alisson Suassuna é um líder reconhecido na área de tecnologia. Bacharel em Sistemas de Informação, pós graduado em engenharia de software e com certificação internacional em computação pela EsiSpor-Ciência, Alisson combina conhecimento acadêmico com uma vasta experiência prática no mercado.
                    </p>
                </div>
            </div>
            
            <div class="divisor">
                <div class="about">
                    <h4>2. MENTOR</h4>
                    <p>Alisson já mentorou mais de 3 mil alunos, ajudando cada um a alcançar seus objetivos profissionais. Seu compromisso com a educação de qualidade e o sucesso de seus alunos é um valor inegociável e alicerce de sua carreira como docente</p>
                </div>
            </div>

            <div class="divisor">
                <div class="about">
                    <h4>3. MÉTODO</h4>
                    <p>Como fundador e CEO da TipsCode, Alisson desenvolveu o Método Step by Step, uma abordagem que transforma iniciantes em profissionais capacitados. Este método é a espinha dorsal do Curso Full Stack Turbo, garantindo que cada aluno tenha uma jornada de aprendizado estruturada e eficaz.</p>
                </div>
            </div>

            <div class="divisor">

                <div class="mentor-name">
                    SUASSUNA
                </div>

                <div class="about">
                    <h4>4. EXPÊRIENCIA</h4>
                    <p>Com diversos projetos concluídos, Alisson traz toda uma experiência prática para suas aulas. Ele entende os desafios do mercado e está pronto para compartilhar suas estratégias e conhecimentos com você.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--CTA-->
    <section class="cta" id="cta">

        <div class="col col-ft">
            <div class="full item-1">
                FULL
            </div>

            <div class="chamada item-2">
                <div class="headline cta-headline">
                    <h2>
                        <span>INVISTA NO</span>
                        <br>
                        <span>SEU FUTURO</span>
                    </h2>
                </div>
            </div>

            <div class="turbo item-3">
                TURBO
            </div>
        </div>

        <div class="col col-s">
            <div class="stack">
                STACK
            </div>
        </div>

        <!--Main Column-->
        <div class="col main-col">
            <div class="headline">

                <div class="title">
                    <span>FST</span>
                    <span>2.0</span>
                </div>

                <div class="price">
                    <p>De <span>R$497,00</span></p>
                    <h2>Por <span>12x</span> De <span>R$29,62</span></h2>
                    <p>Ou À Vista Por R$297,00</p>
                </div>

                <ul>
                    <li><span>.</span> Aulas 100% online</li>
                    <li><span>.</span> Material de Apoio</li>
                    <li><span>.</span> Mais de 30 projetos REAIS</li>
                    <li><span>.</span> Acompanhamento direto</li>
                    <li><span>.</span> Certificado de 120 horas</li>
                    <li><span>.</span> Acesso imediato a plataforma  Hotmart</li>
                    <li><span>.</span> comunidade Exclusiva no Discord</li>
                </ul>

                <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728603069/logos-cart%C3%B5es-_1__dd854b.webp" alt="cartões de crédito">
            </div>

            <a href="https://pay.hotmart.com/B89287898Q?checkoutMode=10" target="blank">
                <button class="btn-s">
                    Inscreva-se Agora
                </button>
            </a>
        </div>
    </section>

    <!--Quem Indica-->
    <section id="depoimentos" class="quem-indica">
        <div class="headline">
            <h2>
                <span>QUEM</span>
                <br>
                <span>INDICA</span>
            </h2>
        </div>

        <div class="arrow-right">
            <img src="https://res.cloudinary.com/dfjajuiwn/image/upload/v1728633270/arrow-right-svgrepo-com_tt7dt7.svg" alt="">
        </div>
        
        <div class="slider">
            <div class="slide-card" id="slide-01">
                <div class="img-card">
                    <div class="alu-name">
                        Tulio Faria
                    </div>
                </div>

                <div class="dep-card">
                    <p>
                        Criador do Dev Pleno.
                    </p>
                </div>
            </div>
            <div class="slide-card" id="slide-02">
                <div class="img-card">
                    <div class="alu-name">
                        Rodrigo Branas
                    </div>
                </div>

                <div class="dep-card">
                    <p>
                        especialista em Arquitetura de Software.
                    </p>
                </div>
            </div>
            <div class="slide-card" id="slide-03">
                <div class="img-card">
                    <div class="alu-name">
                        UniFap
                    </div>
                </div>

                <div class="dep-card">
                    <p>
                        Faculdade lider em tecnologia no Juazeiro do Norte
                    </p>
                </div>
            </div>
            
        </div>
    </section>

    <!--FAQ-->
    <section class="faq">
        <div class="headline">
            <h2>
                <span>PERGUNTAS MAIS</span>
                <br>
                <span>FREQUENTES</span>
            </h2>
        </div>

        <div class="cordeon" id="accordion">
            <div class="line faq">
                <div class="cordeon-header">
                    <div class="number">1</div>
                    <div class="question">
                        Qual é a duração do curso?
                    </div>
                </div>

                <div class="cordeon-body">
                    <div class="text-block">
                        O Curso Full Stack Turbo possui uma carga horária total de 120 horas, distribuídas em aulas 100% online que você pode acessar no seu próprio ritmo.
                    </div>
                </div>
            </div>

            <div class="line faq">
                <div class="cordeon-header">
                    <div class="number">2</div>
                    <div class="question">
                        Como funciona o acesso ao curso?
                    </div>
                </div>

                <div class="cordeon-body">
                    <div class="text-block">
                        Após a compra, você terá acesso imediato e vitalício ao curso através da plataforma Hotmart. Isso permite que você revise o conteúdo sempre que desejar.
                    </div>
                </div>
            </div>

            <div class="line faq">
                <div class="cordeon-header">
                    <div class="number">3</div>
                    <div class="question">
                        O curso oferece certificado?
                    </div>
                </div>

                <div class="cordeon-body">
                    <div class="text-block">
                        Sim, ao concluir o curso, você receberá um certificado de 120 horas, que poderá ser adicionado ao seu currículo e perfil profissional.
                    </div>
                </div>
            </div>

            <div class="line faq">
                <div class="cordeon-header">
                    <div class="number">4</div>
                    <div class="question">
                        Preciso ter conhecimentos prévios em programação?
                    </div>
                </div>

                <div class="cordeon-body">
                    <div class="text-block">
                        Não é necessário ter conhecimentos prévios. O Curso Full Stack Turbo é estruturado para atender desde iniciantes até profissionais que desejam aprofundar seus conhecimentos.
                    </div>
                </div>
            </div>

            <div class="line faq">
                <div class="cordeon-header">
                    <div class="number">5</div>
                    <div class="question">
                        Terei suporte durante o curso?
                    </div>
                </div>

                <div class="cordeon-body">
                    <div class="text-block">
                     Sim, você terá suporte total da nossa equipe, além de acompanhamento direto do mentor Alisson Suassuna. Também poderá participar da comunidade exclusiva no Discord para tirar dúvidas, promover a troca de conhecimentos e a criação de um networking entre os alunos.
                    </div>
                </div>
            </div>

            <div class="line faq">
                <div class="cordeon-header">
                    <div class="number">6</div>
                    <div class="question">
                        O que são os 30 projetos reais mencionados?
                    </div>
                </div>

                <div class="cordeon-body">
                    <div class="text-block">
                        São projetos práticos que você desenvolverá ao longo do curso, aplicando o que aprendeu em situações do mundo real. Esses projetos ajudam a consolidar seu conhecimento e a preparar você para o mercado de trabalho.
                    </div>
                </div>
            </div>

            <div class="line faq">
                <div class="cordeon-header">
                    <div class="number">7</div>
                    <div class="question">
                        Existe uma garantia de satisfação?
                    </div>
                </div>

                <div class="cordeon-body">
                    <div class="text-block">
                        Sim, oferecemos uma garantia de satisfação de 7 dias. Se você não estiver satisfeito com o curso, poderá solicitar o reembolso dentro desse período.
                    </div>
                </div>
            </div>

            <div class="line faq">
                <div class="cordeon-header">
                    <div class="number">8</div>
                    <div class="question">
                        O curso é atualizado regularmente?
                    </div>
                </div>

                <div class="cordeon-body">
                    <div class="text-block">
                        Sim, o conteúdo do curso é revisado e atualizado regularmente para garantir que você esteja aprendendo as tecnologias e práticas mais atuais do mercado, tudo SEM custos adicionais.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>

    <script type="module" src="./Assets/js/global/main.js"></script>