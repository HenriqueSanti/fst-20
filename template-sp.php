<?php
/* 
Template Name: Página de Vendas
*/

//Header
$logo = get_field('logo');
$wpp_link = get_field('whatsapp_link');
$wpp_image = get_field('whatsapp_button');

//Hero
$headline_cinza = get_field('headline_cinza');
$headline_branca = get_field('headline_branca');
$hero_introduction = get_field('hero_introduction');
$texto_botao_hero = get_field('texto_botao_hero');
$hero_background = get_field('hero_background');

//Sobre
$headline_cinza_sobre = get_field('headline_cinza_sobre');
$headline_branca_sobre = get_field('headline_branca_sobre');
$descricao_sobre = get_field('descricao_sobre');
$imagem_sobre = get_field('imagem_sobre');

//Método
$headline_cinza_metodo = get_field('headline_cinza_metodo');
$headline_branca_metodo = get_field('headline_branca_metodo');
$descricao_metodo = get_field('descricao_metodo');
$imagem_metodo = get_field('imagem_metodo');

//Salários
$headline_cinza_salario = get_field('headline_cinza_salario');
$headline_branca_salario = get_field('headline_branca_salario');
$descricao_salario = get_field('descricao_salario');
$salario_dev_junior = get_field('salario_dev_junior');
$salario_dev_pleno = get_field('salario_dev_pleno');
$salario_dev_senior = get_field('salario_dev_senior');

//Acesso
$headline_cinza_acesso = get_field('headline_cinza_acesso');
$headline_branca_acesso = get_field('headline_branca_acesso');
$feature_01_acesso = get_field('feature_01_acesso');
$feature_02_acesso = get_field('feature_02_acesso');
$feature_03_acesso = get_field('feature_03_acesso');
$feature_04_acesso = get_field('feature_04_acesso');
$feature_05_acesso = get_field('feature_05_acesso');
$feature_06_acesso = get_field('feature_06_acesso');
$feature_07_acesso = get_field('feature_07_acesso');
$feature_08_acesso = get_field('feature_08_acesso');

?>

<?php get_header(); ?>
    
    <!--  HEADER -->
    <header>
        <div class="logo">
            <img src="<?php echo ($logo); ?>" style="width: 200px;">
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

        <?php if($wpp_link AND $wpp_image):?>
            <a href="<?php echo $wpp_link; ?>" target="_blank" class="wpp-btn">

                <img src="<?php echo $wpp_image; ?>">

                <span class="call">
                    Chamar
                </span>
            </a>
        <?php endif; ?>
    </header>

    <!--HERO-->
    <section class="hero" style="background-image: url('<?php echo $hero_background; ?>')">
        <!--Main Column-->
        <div class="col main-col">
            <div class="headline">
                <div class="title">
                    <span>FST</span>
                    <span>2.0</span>
                </div>

                <h1>
                    <span><?php echo $headline_cinza; ?></span>
                    <span><?php echo $headline_branca ?></span>
                </h1>

                <p>
                    <?php echo $hero_introduction; ?>
                </p>
            </div>

            <button class="btn-s" onclick="location.href='#cta'">
                Inscreva-se Agora
            </button>
        </div>

        <div class="col"></div>
        <div class="col">
            <div class="video">
                <video autoplay muted plays-inline loop src="./public/video-test.mp4" class="clip" type="mp4"></video>
            </div>
        </div>
    </section>

    <!--Technologies Marquee-->
    <div class="marquee">
        <div class="text-wrapper">
            <img src="public/HTML.png" alt="html logo">
            <img src="public/CSS.png" alt="css logo">
            <img src="public/BOOTSTRAP.png" alt="bootstrap logo">
            <img src="public/JAVASCRIPT.png" alt="javascript logo">
            <img src="public/REACT.JS.png" alt="react js logo">
            <img src="public/NODE.JS.png" alt="node js logo">
            <img src="public/EXPRESS.JS.png" alt="express js logo">
            <img src="public/EJS.png" alt="ejs logo">
            <img src="public/SQL.png" alt="sql logo">
            <img src="public/MONGODB.png" alt="mongo db logo">
            <img src="public/MONGOOSE.png" alt="mongoose logo">
            <img src="public/GIT.png" alt="git logo">
            <img src="public/GITHUB.png" alt="github logo">
            <img src="public/TERMINAL LINUX.png" alt="linux logo">
        </div>
    </div>

    <!--SOBRE O CURSO-->
    <section class="sobre" id="sobre">
        <!--Main Column-->
        <div class="col main-col">
            <div class="headline">

                <h2>
                    <span><?php echo $headline_cinza_sobre ?></span>
                    <br>
                    <span><?php echo $headline_branca_sobre ?></span>
                </h2>

                <p>
                    <?php echo $descricao_sobre; ?>
                </p>
            </div>

            <button class="btn-s" onclick="location.href='#cta'">
                Inscreva-se Agora
            </button>
        </div>

        <div class="col"></div>

        <div class="col">
            <img src="<?php echo $imagem_sobre; ?>">
        </div>
    </section>

    <!--Método Step-by-Step-->
    <section class="step-by-step" id="metodo">

        <div class="col">
            <img src="<?php echo $imagem_metodo; ?>" >
        </div>

        <div class="col"></div>

        <!--Main Column-->
        <div class="col main-col">
            <div class="headline">

                <h2>
                    <span><?php echo $headline_cinza_metodo; ?></span>
                    <br>
                    <span><?php echo $headline_branca_metodo; ?></span>
                </h2>

                <p>
                    <?php echo $descricao_metodo; ?>
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
                    <span><?php echo $headline_cinza_salario; ?></span>
                    <br>
                    <span><?php echo $headline_branca_salario;?></span>
                </h2>

                <p>
                    <?php echo $descricao_salario;?>
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
                        <?php echo $salario_dev_junior; ?>
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
                        <?php echo $salario_dev_pleno; ?>
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
                        <?php echo $salario_dev_senior; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Acesso-->
    <section class="acesso">
        <div class="acesso-content">
            <div class="headline acesso-headline">
                <h2>
                    <span><?php echo $headline_cinza_acesso; ?></span>
                    <br>
                    <span><?php echo $headline_branca_acesso; ?></span>
                </h2>
            </div>

            <!--Cards-->
            <div class="card card-1">
                <h4><?php echo $feature_01_acesso; ?></h4>
            </div>

            <div class="card card-2">
                <h4><?php echo $feature_02_acesso; ?></h4>
            </div>

            <div class="card card-3">
                <h4><?php echo $feature_03_acesso; ?></h4>
            </div>

            <div class="card card-4">
                <h4><?php echo $feature_04_acesso; ?></h4>
            </div>

            <div class="card card-5">
                <h4><?php echo $feature_05_acesso; ?></h4>
            </div>

            <div class="card card-6">
                <h4><?php echo $feature_06_acesso; ?></h4>
            </div>

            <div class="card card-7">
                <h4><?php echo $feature_07_acesso; ?></h4>
            </div>

            <div class="card card-8">
                <h4><?php echo $feature_08_acesso; ?></h4>
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
                <span>A GRADE CURRICULAR MAIS</span>
                <br>
                <span>COMPLETA DO MERCADO</span>
            </h2>
        </div>

        <?php
        // Consulta os accordions
        $args = array(
            'post_type' => 'grade',
            'posts_per_page' => -1,
        );
        $grade_query = new WP_Query($args);
        if ($grade_query->have_posts()) : ?>

            <div class="cordeon" id="accordion">
            <?php while ($grade_query->have_posts()) : $grade_query->the_post(); 
                $image_body = get_field('imagem_do_body');
            ?>
                <div class="line">
                    <div class="cordeon-header active">
                        <div class="number"><?php the_field('numero'); ?></div>
                        <div class="section-name"><?php the_field('titulo'); ?></div>
                    </div>

                    <div class="cordeon-body active">
                        <div class="text-block">
                            <?php the_field('texto_do_body'); ?> 
                        </div>
                        
                        <div class="images-block">
                            <?php if($image_body): ?>
                                <img src="<?php echo $image_body; ?>">
                            <?php endif; ?>
                            
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            </div>

        <?php endif; wp_reset_postdata(); ?>
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
            <img src="./public/arrow-right-svgrepo-com.svg" alt="">
        </div>

        <?php
        // Consulta os sliders
        $args = array(
            'post_type' => 'depoimentos',
            'posts_per_page' => -1,
        );
        $dep_query = new WP_Query($args);
        if ($dep_query->have_posts()) : ?>

            <div class="slider">
                <?php while ($dep_query->have_posts()) : $dep_query->the_post(); 
                    $imagem = get_field('dep_imagem');
                ?>
                    <div class="slide-card" id="slide-01">
                        <div class="img-card" style="background-image: url('<?php echo $imagem; ?>')">
                            <div class="alu-name">
                                <?php echo the_field('nome_do_depoente'); ?>
                            </div>
                        </div>

                        <div class="dep-card">
                            <p>
                                <?php echo the_field('frase_de_efeito'); ?>
                            </p>
                        </div>
                    </div>
                <?php endwhile; ?>  
            </div>

        <?php endif; wp_reset_postdata(); ?>
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
            <img src="public/mentor.png" alt="">
        </div>
        <div class="mentor-content">
            <div class="divisor">

                <div class="mentor-name">
                    ALISSON
                </div>

                <div class="about">
                    <h4>1. FORMAÇÃO ACADÊMICA</h4>
                    <p>Com mais de 10 anos de experiência como desenvolvedor full stack, Alisson Suassuna é um líder reconhecido na área de tecnologia. Formado em Sistemas de Informação pela [Faculdade], Alisson combina conhecimento acadêmico com uma vasta experiência prática no mercado.</p>
                </div>
            </div>
            
            <div class="divisor">
                <div class="about">
                    <h4>2. MENTOR</h4>
                    <p>Alisson já mentorou mais de 2 mil alunos, ajudando cada um a alcançar seus objetivos profissionais. Seu compromisso com a educação de qualidade e o sucesso de seus alunos é um valor inegociável e alicerce de sua carreira como docente.</p>
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
                    <p>Com mais de [X] projetos concluídos, Alisson traz toda uma experiência prática para suas aulas. Ele entende os desafios do mercado e está pronto para compartilhar suas estratégias e conhecimentos com você.
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

                <img src="public/logos-cartões.png" alt="cartões de crédito">
            </div>

            <button class="btn-s">
                Inscreva-se Agora
            </button>
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
            <img src="./public/arrow-right-svgrepo-com.svg" alt="">
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

        <?php
        // Consulta os accordions
        $args = array(
            'post_type' => 'faq',
            'posts_per_page' => -1,
        );
        $faq_query = new WP_Query($args);
        if ($faq_query->have_posts()) : ?>

            <div class="cordeon" id="accordion">
            <?php while ($faq_query->have_posts()) : $faq_query->the_post(); 
                $image_body = get_field('imagem_do_body');
            ?>
                <div class="line">
                    <div class="cordeon-header active">
                        <div class="number"><?php the_field('numero_da_pergunta'); ?></div>
                        <div class="section-name"><?php the_field('titulo_pergunta'); ?></div>
                    </div>

                    <div class="cordeon-body active">
                        <div class="text-block">
                            <?php the_field('corpo_da_pergunta'); ?> 
                        </div>
                        
                    </div>
                </div>
            <?php endwhile; ?>
            </div>

        <?php endif; wp_reset_postdata(); ?>
    </section>


<?php get_footer(); ?>