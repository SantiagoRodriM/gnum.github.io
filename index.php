<?php

include_once('conexion.php');

$sql = "SELECT * FROM publicaciones_recientes";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'><link rel="stylesheet" href="style.css">    
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css'>    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Kay+Pho+Du:wght@400;500;600;700&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <title>GNUM</title>

    <meta property="og:title" content="GNUM">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://santiagorodrim.github.io/gnum.github.io/">
    <meta property="og:image" content="https://santiagorodrim.github.io/gnum.github.io/assets/logosGNUM/gnum_logo_vista_previa.png">
    <meta property="og:description" content="Grupo de Investigación en Modelación y Métodos Numéricos de la Universidad Nacional de Colombia.">
    <link rel="icon" href="assets/logosGNUM/gnum_logo.png" type="image/x-icon">

</head>
<body>
    <main class="main">
        <!-- UNAL LOGO -->
        <img src="assets/logosUnal/logo_inferior_derecha.svg" alt="" class="corner-image">
        
        <!-- SLOGAN -->
        <div class="slogan-box">
            <ul>
                <li><span class="slogan">GNUM</span></li>
                <li><span class="slogan">Universidad Nacional de Colombia</span></li>
                <li class="icons"><a href="https://github.com/caduqued/GNUMCFD" target="_blank"><i class='bx bxl-github'></i></a></li>
                <li class="icons"><a href="http://www.hermes.unal.edu.co/pages/Consultas/Grupo.xhtml;jsessionid=A7C06CD86517FEFBAE94E84BB7953B1C.tomcat5?idGrupo=680&opcion=1" target="_blank"><img src="assets/logosUnal/hermes-icon.svg" alt=""></a></li>
                <li class="icons"><a href="https://cecc.unal.edu.co/research-and-development/research-groups/gnum-modeling-and-numerical-methods-in-engineering-group" target="_blank"><img src="assets/logosUnal/normal_logo_unal.svg" alt=""></a></li>
                <li class="icons"><a href="#"><i class='bx bxl-facebook-circle'></i></a></li>
                <li class="icons"><a href="#"><i class='bx bxl-instagram-alt'></i></a></li>
            </ul>

            <ul aria-hidden="true">
                <li><span class="slogan">GNUM</span></li>
                <li><span class="slogan">Universidad Nacional de Colombia</span></li>
                <li class="icons"><a href="https://github.com/caduqued/GNUMCFD" target="_blank"><i class='bx bxl-github'></i></a></li>
                <li class="icons"><a href="http://www.hermes.unal.edu.co/pages/Consultas/Grupo.xhtml;jsessionid=A7C06CD86517FEFBAE94E84BB7953B1C.tomcat5?idGrupo=680&opcion=1" target="_blank"><img src="assets/logosUnal/hermes-icon.svg" alt=""></a></li>
                <li class="icons"><a href="https://cecc.unal.edu.co/research-and-development/research-groups/gnum-modeling-and-numerical-methods-in-engineering-group" target="_blank"><img src="assets/logosUnal/normal_logo_unal.svg" alt=""></a></li>
                <li class="icons"><a href="#"><i class='bx bxl-facebook-circle'></i></a></li>
                <li class="icons"><a href="#"><i class='bx bxl-instagram-alt'></i></a></li>
            </ul>
        </div>

        <!-- SLIDESHOW -->
        <section class="slideshow">
            <ul class="navigation">
                <li class="navigation-item active">
                    <span class="rotate-holder"></span>
                    <span class="background-holder" style="background-image: url(assets/logosGNUM/logoGNUM.svg);"></span>
                </li>
                
                <li class="navigation-item">
                    <span class="rotate-holder"></span>
                    <span class="background-holder" style="background-image: url(assets/logosGNUM/logoGNUM-CFD_V3.svg);"></span>
                </li>
            
                <li class="navigation-item">
                    <span class="rotate-holder"></span>
                    <span class="background-holder" style="background-image: url(assets/logosGNUM/logoGNUM-BIOMEC_V3.svg);"></span>
                </li>
            
                <li class="navigation-item">
                    <span class="rotate-holder"></span>
                    <span class="background-holder" style="background-image: url(assets/logosGNUM/logoGNUM-FEM_V3.svg);"></span>
                </li>
            
                <li class="navigation-item">
                    <span class="rotate-holder"></span>
                    <span class="background-holder" style="background-image: url(assets/logosGNUM/logoGNUM-FLUMEX_V3.svg);"></span>
                </li>
            
                <li class="navigation-item">
                    <span class="rotate-holder"></span>
                    <span class="background-holder" style="background-image: url(assets/logosGNUM/logoGNUM-REACT_V3.svg);"></span>
                </li>     
            </ul>
            
            <!-- SLIDESHOW-DETAILS -->
            <div class="detail">
                <div class="detail-item active">
                    <div class="headline" style="margin-left: -40px;">GNUM</div>
                    <div class="background" style="background-image: url(assets/img/aulas_unal.jpg);"></div>
                    <!-- GNUM DESCRIPTION -->
                    <div class="blog-slider">
                        <div class="blog-slider__wrp swiper-wrapper">
                            <div class="blog-slider__item swiper-slide">
                                <div class="blog-slider__img">
                                    <img src="https://media.licdn.com/dms/image/v2/D4E22AQHR_wDrtGs82A/feedshare-shrink_2048_1536/feedshare-shrink_2048_1536/0/1702640924871?e=2147483647&v=beta&t=F2ojZ80FCxiSUpTC4clD14UbNy5o5UNowTyGLKgGIkI" alt="">
                                </div>
                                <div class="blog-slider__content">
                                    <div class="blog-slider__title" style="
                                        text-shadow: 5px 5px 0px rgb(255, 255, 255);
                                        background-image: linear-gradient(to right, #F25EBF, #F28066, #07F2F2);
                                        -webkit-background-clip: text;
                                        background-clip: text;
                                        color: transparent;
                                        -webkit-text-fill-color: transparent;
                                        ">
                                        Grupo de Investigación en Modelación y Métodos Numéricos
                                    </div>
                                    <div class="blog-slider__text">Nuestro grupo está dedicado a la investigación avanzada en métodos numéricos y modelación aplicada a problemas científicos e industriales. Nos especializamos en el desarrollo de herramientas computacionales que permitan resolver fenómenos complejos, desde la simulación de fluidos hasta la dinámica de reacciones químicas.</div>
                                    <div class="blog-slider__text">Con un enfoque multidisciplinario, combinamos técnicas de modelado matemático, algoritmos de optimización y simulación de alto rendimiento para brindar soluciones innovadoras en diferentes campos de la ingeniería y la ciencia.</div>
                                </div>
                            </div>

                            <div class="blog-slider__item swiper-slide">
                                <div class="blog-slider__content">
                                    <div class="blog-slider__title">Publicaciones Recientes</div>
                                    <div class="blog-slider__text">En esta sección podrás encontrar nuestros últimos avances de todas las líneas de investigación en modelación y métodos numéricos aplicados a la ciencia y la ingeniería. Estas publicaciones destacan los resultados más recientes de nuestras investigaciones en simulación de fluidos, dinámica de reacciones químicas, y optimización matemática.</div>
                                    <div class="blog-slider__button-container">
                                        <?php
                                        $publi_recient = mysqli_query($connection, $sql);                                        
                                        while($record = mysqli_fetch_assoc($publi_recient)){
                                            ?>
                                            <a href="#" class="blog-slider__button">
                                                <img src="<?php echo $record['Imagen'] ?>" alt="" class="button-image">
                                                <hr class="separator">
                                                <span class="button-text"><?php echo $record['Titulo'] ?></span>
                                                <span class="button-subtext"><?php echo $record['Profesor 1'] ?></span>
                                                <span class="button-subtext"><?php echo $record['Profesor 2'] ?></span>
                                                <div class="button-hover-text"><?php echo $record['Titulo'] ?></div>
                                                <div class="button-hover-subtext"><?php echo $record['Descripcion'] ?></div>
                                                <div class="button-hover-date"><strong><?php echo $record['Fecha'] ?></strong></div>
                                            </a>
                                        <?php
                                        }
                                        ?>                                       
                                    </div>
                                </div>
                            </div>

                            <div class="blog-slider__item swiper-slide">
                                <div class="blog-slider__content">
                                    <div class="blog-slider__title">Colaboradores</div>

                                    <div class="carousel_content">
                                        <div class="carousel_group_content">
                                            <div class="blog-slider__members-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam amet facere quos quidem, itaque aliquam animi ipsum provident velit quisquam nihil tempore aspernatur quod aperiam earum suscipit minus dolor esse magni asperiores expedita alias ullam in nesciunt? Esse quos accusamus dolorum! Fugiat quae amet repudiandae quos totam nemo, neque iure!</div>
                                            <div class="blog-slider__members-name">Diego Alexander Garzon Alvarado</div>
                                            <div class="blog-slider__members-description">Investigador Principal y Director de Grupo</div>
                                        </div>
                                        <div class="carousel_group_content">
                                            <div class="blog-slider__members-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam amet facere quos quidem, itaque aliquam animi ipsum provident velit quisquam nihil tempore aspernatur quod aperiam earum suscipit minus dolor esse magni asperiores expedita alias ullam in nesciunt? Esse quos accusamus dolorum! Fugiat quae amet repudiandae quos totam nemo, neque iure!</div>
                                            <div class="blog-slider__members-name">Carlos Humberto Galeano Ururena</div>
                                            <div class="blog-slider__members-description">Profesor Asociado, Ingeniero Mecánico, Universidad Nacional de Colombia</div>
                                        </div>
                                        <div class="carousel_group_content">
                                            <div class="blog-slider__members-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam amet facere quos quidem, itaque aliquam animi ipsum provident velit quisquam nihil tempore aspernatur quod aperiam earum suscipit minus dolor esse magni asperiores expedita alias ullam in nesciunt? Esse quos accusamus dolorum! Fugiat quae amet repudiandae quos totam nemo, neque iure!</div>
                                            <div class="blog-slider__members-name">4 </div>
                                            <div class="blog-slider__members-description">Profesor Asociado, Ingeniero Mecánico, Universidad Nacional de Colombia</div>
                                        </div>
                                        <div class="carousel_group_content">
                                            <div class="blog-slider__members-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam amet facere quos quidem, itaque aliquam animi ipsum provident velit quisquam nihil tempore aspernatur quod aperiam earum suscipit minus dolor esse magni asperiores expedita alias ullam in nesciunt? Esse quos accusamus dolorum! Fugiat quae amet repudiandae quos totam nemo, neque iure!</div>
                                            <div class="blog-slider__members-name">5 </div>
                                            <div class="blog-slider__members-description">Profesor Asociado, Ingeniero Mecánico, Universidad Nacional de Colombia</div>
                                        </div>
                                        <div class="carousel_group_content">
                                            <div class="blog-slider__members-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam amet facere quos quidem, itaque aliquam animi ipsum provident velit quisquam nihil tempore aspernatur quod aperiam earum suscipit minus dolor esse magni asperiores expedita alias ullam in nesciunt? Esse quos accusamus dolorum! Fugiat quae amet repudiandae quos totam nemo, neque iure!</div>
                                            <div class="blog-slider__members-name">Carlos Alberto Duque Daza</div>
                                            <div class="blog-slider__members-description">Profesor Asociado, Ingeniero Mecánico, Universidad Nacional de Colombia</div>
                                        </div>
                                    </div>
                                    
                                    <div class="carousel-body">
                                        <div class="carousel-wrapper">
                                            <i id="left" class="fa-solid fa-angle-left"></i>
                                            <div class="carousel">
                                                <div class="carousel_img"><img src="https://i1.rgstatic.net/ii/profile.image/272589817905167-1442001885305_Q512/Carlos-Duque-Daza.jpg" alt=""></div>
                                                <div class="carousel_img"><img src="https://media.licdn.com/dms/image/C5103AQFrOlCCa4uayA/profile-displayphoto-shrink_200_200/0/1517362714253?e=2147483647&v=beta&t=xbBa_-x43LXzc0Qyh9iHPkiaHVr1F27johVjp9vwaT8" alt=""></div>
                                                <div class="carousel_img"><img src="https://www.zizurmayor.es/wp-content/uploads/2022/11/sin-perfil.jpg" alt=""></div>
                                                <div class="carousel_img"><img src="https://www.zizurmayor.es/wp-content/uploads/2022/11/sin-perfil.jpg" alt=""></div>
                                                <div class="carousel_img"><img src="https://www.zizurmayor.es/wp-content/uploads/2022/11/sin-perfil.jpg" alt=""></div>
                                            </div>
                                            <i id="right" class="fa-solid fa-angle-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-slider__pagination"></div>
                    </div>
                </div>
                
                <div class="detail-item">
                    <div class="headline" style="margin-left: -40px;">CFD</div>
                    <!-- <div class="video-wrapper">
                        <video class="background" autoplay muted loop>
                            <source src="assets/video/Video_1.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div> -->
                    <div class="background" style="background-image: url('https://www.iesve.com/discoveries/2020/blogs/simscale.gif');"></div>
                    <!-- CFD DESCRIPTION -->
                    <div class="blog-slider">
                        <div class="blog-slider__wrp swiper-wrapper">
                            <div class="blog-slider__item swiper-slide">
                                <div class="blog-slider__img">
                                <img src="https://acfdlab.miami.edu/Animation/cylinder_3d.gif" alt="">
                                </div>
                                <div class="blog-slider__content">
                                    <div class="blog-slider__title">Dinámica de Fluidos Computacional</div>
                                    <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit tempore quasi, at fuga, ea eaque molestiae adipisci placeat corporis ratione earum expedita, quidem similique facere hic laborum? Dicta, voluptatibus dolorem consequatur pariatur quos inventore! Reprehenderit aspernatur, sint eum architecto maiores iste at animi dignissimos fugiat quas ab natus, dolorum laudantium.</div>
                                    <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex architecto magnam, repudiandae laborum, dolorum qui obcaecati, exercitationem illum rem a nobis voluptates! Aliquid ut modi possimus quas quibusdam cumque expedita.</div>
                                    <a href="#" class="read_more">Me Interesa</a>
                                </div>
                            </div>

                            <div class="blog-slider__item swiper-slide">
                                <div class="blog-slider__content">
                                    <div class="blog-slider__title">Proyectos Destacados</div>
                                    <div class="blog-slider__text">Estos son algunos de nuestros proyectos más destacados realizados en el área de CFD, en donde aplicamos todas las herramientas y el conocimiento necesario para obtener los resultados de más alta calidad.</div>
                                    <div class="blog-slider__button-container">  
                                        <a href="#" class="blog-slider__button">
                                            <img src="assets/img/Calcinador_de_lodos.jpg" alt="" class="button-image">
                                            <hr class="separator">
                                            <span class="button-text">Calcinador de Lodos</span>
                                            <span class="button-subtext">Prof. Carlos Duque</span>
                                            <span class="button-subtext">Prof. Carlos Galeano</span>
                                            <div class="button-hover-text">Calcinador de Lodos</div>
                                            <div class="button-hover-subtext">Este proyecto fue desarrollado para la empresa del Acueducto de Bogotá, en donde se realizó el análisis del procesos dentro de un horno calcinador, teniendo en cuenta las reacciones químicas causadas por la biomasa para determinar la presencia de estas en cada etapa y la eficiencia del horno.</div>
                                            <div class="button-hover-date"><strong>Marzo 2024</strong> - <strong>Mayo 2024</strong></div>
                                        </a>                                        
                                        <a href="#" class="blog-slider__button">
                                            <img src="assets/img/Calcinador_de_lodos.jpg" alt="" class="button-image">
                                            <hr class="separator">
                                            <span class="button-text">Calcinador de Lodos</span>
                                            <span class="button-subtext">Prof. Carlos Duque</span>
                                            <span class="button-subtext">Prof. Carlos Galeano</span>
                                            <div class="button-hover-text">Calcinador de Lodos</div>
                                            <div class="button-hover-subtext">Este proyecto fue desarrollado para la empresa del Acueducto de Bogotá, en donde se realizó el análisis del procesos dentro de un horno calcinador, teniendo en cuenta las reacciones químicas causadas por la biomasa para determinar la presencia de estas en cada etapa y la eficiencia del horno.</div>
                                            <div class="button-hover-date"><strong>Marzo 2024</strong> - <strong>Mayo 2024</strong></div>
                                        </a> 
                                        <a href="#" class="blog-slider__button">
                                            <img src="assets/img/Calcinador_de_lodos.jpg" alt="" class="button-image">
                                            <hr class="separator">
                                            <span class="button-text">Calcinador de Lodos</span>
                                            <span class="button-subtext">Prof. Carlos Duque</span>
                                            <span class="button-subtext">Prof. Carlos Galeano</span>
                                            <div class="button-hover-text">Calcinador de Lodos</div>
                                            <div class="button-hover-subtext">Este proyecto fue desarrollado para la empresa del Acueducto de Bogotá, en donde se realizó el análisis del procesos dentro de un horno calcinador, teniendo en cuenta las reacciones químicas causadas por la biomasa para determinar la presencia de estas en cada etapa y la eficiencia del horno.</div>
                                            <div class="button-hover-date"><strong>Marzo 2024</strong> - <strong>Mayo 2024</strong></div>
                                        </a> 
                                        <a href="#" class="blog-slider__button">
                                            <img src="assets/img/Calcinador_de_lodos.jpg" alt="" class="button-image">
                                            <hr class="separator">
                                            <span class="button-text">Calcinador de Lodos</span>
                                            <span class="button-subtext">Prof. Carlos Duque</span>
                                            <span class="button-subtext">Prof. Carlos Galeano</span>
                                            <div class="button-hover-text">Calcinador de Lodos</div>
                                            <div class="button-hover-subtext">Este proyecto fue desarrollado para la empresa del Acueducto de Bogotá, en donde se realizó el análisis del procesos dentro de un horno calcinador, teniendo en cuenta las reacciones químicas causadas por la biomasa para determinar la presencia de estas en cada etapa y la eficiencia del horno.</div>
                                            <div class="button-hover-date"><strong>Marzo 2024</strong> - <strong>Mayo 2024</strong></div>
                                        </a> 
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="blog-slider__item swiper-slide">
                                <div class="blog-slider__content">
                                    <div class="blog-slider__title">Colaboradores</div>
                                    <div class="blog-slider__text">Nuestro grupo está dedicado a la investigación avanzada en métodos numéricos y modelación aplicada a problemas científicos e industriales. Nos especializamos en el desarrollo de herramientas computacionales que permitan resolver fenómenos complejos, desde la simulación de fluidos hasta la dinámica de reacciones químicas.</div>
                                    <div class="blog-slider__text">Con un enfoque multidisciplinario, combinamos técnicas de modelado matemático, algoritmos de optimización y simulación de alto rendimiento para brindar soluciones innovadoras en diferentes campos de la ingeniería y la ciencia.</div>
                                </div>
                            </div> -->
                        </div>
                        <div class="blog-slider__pagination"></div>
                    </div>
                </div>
                  
                <div class="detail-item">
                    <div class="headline" style="margin-left: -40px;">BIOMEC</div>
                    <div class="background" style="background-image: url('https://cdna.artstation.com/p/assets/images/images/059/777/710/original/gage-weimer-sculpt.gif?1677116067');"></div>
                    <!-- BIOMEC DESCRIPTION -->
                    <div class="blog-slider">
                        <div class="blog-slider__wrp swiper-wrapper">
                            <div class="blog-slider__item swiper-slide">
                                <div class="blog-slider__img">
                                <img src="https://flowvisioncfd.com/images/articles/2018/heart-transp_1.png" alt="">
                                </div>
                                <div class="blog-slider__content">
                                    <div class="blog-slider__title">Modelado de Procesos Biomédicos</div>
                                    <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit tempore quasi, at fuga, ea eaque molestiae adipisci placeat corporis ratione earum expedita, quidem similique facere hic laborum? Dicta, voluptatibus dolorem consequatur pariatur quos inventore! Reprehenderit aspernatur, sint eum architecto maiores iste at animi dignissimos fugiat quas ab natus, dolorum laudantium.</div>
                                    <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex architecto magnam, repudiandae laborum, dolorum qui obcaecati, exercitationem illum rem a nobis voluptates! Aliquid ut modi possimus quas quibusdam cumque expedita.</div>
                                    <a href="#" class="read_more">Me Interesa</a>
                                </div>
                            </div>

                            <div class="blog-slider__item swiper-slide">
                                <div class="blog-slider__content">
                                    <div class="blog-slider__title">Proyectos Destacados</div>
                                    <div class="blog-slider__text">Estos son algunos de nuestros proyectos más destacados realizados en el área de la biomecánica, en donde aplicamos todas las herramientas y el conocimiento necesario para obtener los resultados de más alta calidad.</div>
                                    <div class="blog-slider__button-container">  
                                        <a href="#" class="blog-slider__button">
                                            <img src="https://ws-long.simscale.com/api/v1/projects/riazm4/hip_implant_prosthesis_project_copy/f040cb8b-9e1f-484e-8291-49de5bb68296/thumbnail/thumbnail.png" alt="" class="button-image">
                                            <hr class="separator">
                                            <span class="button-text">Lorem ipsum dolor</span>
                                            <span class="button-subtext">Prof. Carlos Duque</span>
                                            <span class="button-subtext">Prof. Carlos Galeano</span>
                                            <div class="button-hover-text">Lorem ipsum dolor</div>
                                            <div class="button-hover-subtext">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nam illo beatae nostrum voluptatem! Aliquam cum voluptatem soluta laudantium quae eveniet deserunt repellendus provident perferendis porro rem, debitis quam vero.</div>
                                            <div class="button-hover-date"><strong>Marzo 2024</strong> - <strong>Mayo 2024</strong></div>
                                        </a>                                        
                                        <a href="#" class="blog-slider__button">
                                            <img src="https://ws-long.simscale.com/api/v1/projects/riazm4/hip_implant_prosthesis_project_copy/f040cb8b-9e1f-484e-8291-49de5bb68296/thumbnail/thumbnail.png" alt="" class="button-image">
                                            <hr class="separator">
                                            <span class="button-text">Lorem ipsum dolor</span>
                                            <span class="button-subtext">Prof. Carlos Duque</span>
                                            <span class="button-subtext">Prof. Carlos Galeano</span>
                                            <div class="button-hover-text">Lorem ipsum dolor</div>
                                            <div class="button-hover-subtext">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nam illo beatae nostrum voluptatem! Aliquam cum voluptatem soluta laudantium quae eveniet deserunt repellendus provident perferendis porro rem, debitis quam vero.</div>
                                            <div class="button-hover-date"><strong>Marzo 2024</strong> - <strong>Mayo 2024</strong></div>
                                        </a>   
                                        <a href="#" class="blog-slider__button">
                                            <img src="https://ws-long.simscale.com/api/v1/projects/riazm4/hip_implant_prosthesis_project_copy/f040cb8b-9e1f-484e-8291-49de5bb68296/thumbnail/thumbnail.png" alt="" class="button-image">
                                            <hr class="separator">
                                            <span class="button-text">Lorem ipsum dolor</span>
                                            <span class="button-subtext">Prof. Carlos Duque</span>
                                            <span class="button-subtext">Prof. Carlos Galeano</span>
                                            <div class="button-hover-text">Lorem ipsum dolor</div>
                                            <div class="button-hover-subtext">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nam illo beatae nostrum voluptatem! Aliquam cum voluptatem soluta laudantium quae eveniet deserunt repellendus provident perferendis porro rem, debitis quam vero.</div>
                                            <div class="button-hover-date"><strong>Marzo 2024</strong> - <strong>Mayo 2024</strong></div>
                                        </a>   
                                        <a href="#" class="blog-slider__button">
                                            <img src="https://ws-long.simscale.com/api/v1/projects/riazm4/hip_implant_prosthesis_project_copy/f040cb8b-9e1f-484e-8291-49de5bb68296/thumbnail/thumbnail.png" alt="" class="button-image">
                                            <hr class="separator">
                                            <span class="button-text">Lorem ipsum dolor</span>
                                            <span class="button-subtext">Prof. Carlos Duque</span>
                                            <span class="button-subtext">Prof. Carlos Galeano</span>
                                            <div class="button-hover-text">Lorem ipsum dolor</div>
                                            <div class="button-hover-subtext">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nam illo beatae nostrum voluptatem! Aliquam cum voluptatem soluta laudantium quae eveniet deserunt repellendus provident perferendis porro rem, debitis quam vero.</div>
                                            <div class="button-hover-date"><strong>Marzo 2024</strong> - <strong>Mayo 2024</strong></div>
                                        </a>   
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-slider__pagination"></div>
                    </div>
                </div>
        
                <div class="detail-item">
                    <div class="headline" style="margin-left: -40px;">FEM</div>
                    <div class="background" style="background-image: url('https://www.jousefmurad.com/content/images/2022/07/AdobeStock_306429562.jpeg');"></div>
                    <!-- FEM DESCRIPTION -->
                    <div class="blog-slider">
                        <div class="blog-slider__wrp swiper-wrapper">
                            <div class="blog-slider__item swiper-slide">
                                <div class="blog-slider__img">
                                <img src="https://www.solize.com/india/common/img/service-solution/testing_validation/038/img_02.gif" alt="">
                                </div>
                                <div class="blog-slider__content">
                                    <div class="blog-slider__title">Modelado de Elementos Finitos</div>
                                    <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit tempore quasi, at fuga, ea eaque molestiae adipisci placeat corporis ratione earum expedita, quidem similique facere hic laborum? Dicta, voluptatibus dolorem consequatur pariatur quos inventore! Reprehenderit aspernatur, sint eum architecto maiores iste at animi dignissimos fugiat quas ab natus, dolorum laudantium.</div>
                                    <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex architecto magnam, repudiandae laborum, dolorum qui obcaecati, exercitationem illum rem a nobis voluptates! Aliquid ut modi possimus quas quibusdam cumque expedita.</div>
                                    <a href="#" class="read_more">Me Interesa</a>
                                </div>
                            </div>

                            <div class="blog-slider__item swiper-slide">
                                <div class="blog-slider__content">
                                    <div class="blog-slider__title">Proyectos Destacados</div>
                                    <div class="blog-slider__text">Estos son algunos de nuestros proyectos más destacados realizados en el área del modelado de elementos finitos, en donde aplicamos todas las herramientas y el conocimiento necesario para obtener los resultados de más alta calidad.</div>
                                    <div class="blog-slider__button-container">  
                                        <a href="#" class="blog-slider__button">
                                            <img src="https://cdn.prod.website-files.com/60d07e2eecb304cb4350b53f/6595137b056bb1e5a5fafffa_iu.jpeg" alt="" class="button-image">
                                            <hr class="separator">
                                            <span class="button-text">Lorem ipsum dolor</span>
                                            <span class="button-subtext">Prof. Carlos Duque</span>
                                            <span class="button-subtext">Prof. Carlos Galeano</span>
                                            <div class="button-hover-text">Lorem ipsum dolor</div>
                                            <div class="button-hover-subtext">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nam illo beatae nostrum voluptatem! Aliquam cum voluptatem soluta laudantium quae eveniet deserunt repellendus provident perferendis porro rem, debitis quam vero.</div>
                                            <div class="button-hover-date"><strong>Marzo 2024</strong> - <strong>Mayo 2024</strong></div>
                                        </a>                                        
                                        <a href="#" class="blog-slider__button">
                                            <img src="https://cdn.prod.website-files.com/60d07e2eecb304cb4350b53f/6595137b056bb1e5a5fafffa_iu.jpeg" alt="" class="button-image">
                                            <hr class="separator">
                                            <span class="button-text">Lorem ipsum dolor</span>
                                            <span class="button-subtext">Prof. Carlos Duque</span>
                                            <span class="button-subtext">Prof. Carlos Galeano</span>
                                            <div class="button-hover-text">Lorem ipsum dolor</div>
                                            <div class="button-hover-subtext">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nam illo beatae nostrum voluptatem! Aliquam cum voluptatem soluta laudantium quae eveniet deserunt repellendus provident perferendis porro rem, debitis quam vero.</div>
                                            <div class="button-hover-date"><strong>Marzo 2024</strong> - <strong>Mayo 2024</strong></div>
                                        </a>   
                                        <a href="#" class="blog-slider__button">
                                            <img src="https://cdn.prod.website-files.com/60d07e2eecb304cb4350b53f/6595137b056bb1e5a5fafffa_iu.jpeg" alt="" class="button-image">
                                            <hr class="separator">
                                            <span class="button-text">Lorem ipsum dolor</span>
                                            <span class="button-subtext">Prof. Carlos Duque</span>
                                            <span class="button-subtext">Prof. Carlos Galeano</span>
                                            <div class="button-hover-text">Lorem ipsum dolor</div>
                                            <div class="button-hover-subtext">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nam illo beatae nostrum voluptatem! Aliquam cum voluptatem soluta laudantium quae eveniet deserunt repellendus provident perferendis porro rem, debitis quam vero.</div>
                                            <div class="button-hover-date"><strong>Marzo 2024</strong> - <strong>Mayo 2024</strong></div>
                                        </a>   
                                        <a href="#" class="blog-slider__button">
                                            <img src="https://cdn.prod.website-files.com/60d07e2eecb304cb4350b53f/6595137b056bb1e5a5fafffa_iu.jpeg" alt="" class="button-image">
                                            <hr class="separator">
                                            <span class="button-text">Lorem ipsum dolor</span>
                                            <span class="button-subtext">Prof. Carlos Duque</span>
                                            <span class="button-subtext">Prof. Carlos Galeano</span>
                                            <div class="button-hover-text">Lorem ipsum dolor</div>
                                            <div class="button-hover-subtext">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nam illo beatae nostrum voluptatem! Aliquam cum voluptatem soluta laudantium quae eveniet deserunt repellendus provident perferendis porro rem, debitis quam vero.</div>
                                            <div class="button-hover-date"><strong>Marzo 2024</strong> - <strong>Mayo 2024</strong></div>
                                        </a>   
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-slider__pagination"></div>
                    </div>
                </div>
        
                <div class="detail-item">
                    <div class="headline" style="margin-left: -40px;">FLUMEX</div>
                    <div class="background" style="background-image: url('https://www.windpowerengineering.com/wp-content/uploads/2022/08/wind-turbine-model.jpg');"></div>
                    <!-- FLUMEX DESCRIPTION -->
                    <div class="blog-slider">
                        <div class="blog-slider__wrp swiper-wrapper">
                            <div class="blog-slider__item swiper-slide">
                                <div class="blog-slider__img">
                                <img src="https://images.prismic.io/covetool/9d1802a1-a139-4b8d-9e6d-0ec3acd9a1ad_Tower_analysis.gif?auto=compress,format" alt="">
                                </div>
                                <div class="blog-slider__content">
                                    <div class="blog-slider__title">Métodos Energéticos</div>
                                    <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit tempore quasi, at fuga, ea eaque molestiae adipisci placeat corporis ratione earum expedita, quidem similique facere hic laborum? Dicta, voluptatibus dolorem consequatur pariatur quos inventore! Reprehenderit aspernatur, sint eum architecto maiores iste at animi dignissimos fugiat quas ab natus, dolorum laudantium.</div>
                                    <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex architecto magnam, repudiandae laborum, dolorum qui obcaecati, exercitationem illum rem a nobis voluptates! Aliquid ut modi possimus quas quibusdam cumque expedita.</div>
                                    <a href="#" class="read_more">Me Interesa</a>
                                </div>
                            </div>

                            <div class="blog-slider__item swiper-slide">
                                <div class="blog-slider__content">
                                    <div class="blog-slider__title">Proyectos Destacados</div>
                                    <div class="blog-slider__text">Estos son algunos de nuestros proyectos más destacados realizados en el área los métodos energéticos, en donde aplicamos todas las herramientas y el conocimiento necesario para obtener los resultados de más alta calidad.</div>
                                    <div class="blog-slider__button-container">  
                                        <a href="#" class="blog-slider__button">
                                            <img src="https://5.imimg.com/data5/QJ/UZ/UI/SELLER-12454615/building-energy-modeling-500x500.jpg" alt="" class="button-image">
                                            <hr class="separator">
                                            <span class="button-text">Lorem ipsum dolor</span>
                                            <span class="button-subtext">Prof. Carlos Duque</span>
                                            <span class="button-subtext">Prof. Carlos Galeano</span>
                                            <div class="button-hover-text">Lorem ipsum dolor</div>
                                            <div class="button-hover-subtext">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nam illo beatae nostrum voluptatem! Aliquam cum voluptatem soluta laudantium quae eveniet deserunt repellendus provident perferendis porro rem, debitis quam vero.</div>
                                            <div class="button-hover-date"><strong>Marzo 2024</strong> - <strong>Mayo 2024</strong></div>
                                        </a>                                        
                                        <a href="#" class="blog-slider__button">
                                            <img src="https://5.imimg.com/data5/QJ/UZ/UI/SELLER-12454615/building-energy-modeling-500x500.jpg" alt="" class="button-image">
                                            <hr class="separator">
                                            <span class="button-text">Lorem ipsum dolor</span>
                                            <span class="button-subtext">Prof. Carlos Duque</span>
                                            <span class="button-subtext">Prof. Carlos Galeano</span>
                                            <div class="button-hover-text">Lorem ipsum dolor</div>
                                            <div class="button-hover-subtext">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nam illo beatae nostrum voluptatem! Aliquam cum voluptatem soluta laudantium quae eveniet deserunt repellendus provident perferendis porro rem, debitis quam vero.</div>
                                            <div class="button-hover-date"><strong>Marzo 2024</strong> - <strong>Mayo 2024</strong></div>
                                        </a>   
                                        <a href="#" class="blog-slider__button">
                                            <img src="https://5.imimg.com/data5/QJ/UZ/UI/SELLER-12454615/building-energy-modeling-500x500.jpg" alt="" class="button-image">
                                            <hr class="separator">
                                            <span class="button-text">Lorem ipsum dolor</span>
                                            <span class="button-subtext">Prof. Carlos Duque</span>
                                            <span class="button-subtext">Prof. Carlos Galeano</span>
                                            <div class="button-hover-text">Lorem ipsum dolor</div>
                                            <div class="button-hover-subtext">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nam illo beatae nostrum voluptatem! Aliquam cum voluptatem soluta laudantium quae eveniet deserunt repellendus provident perferendis porro rem, debitis quam vero.</div>
                                            <div class="button-hover-date"><strong>Marzo 2024</strong> - <strong>Mayo 2024</strong></div>
                                        </a>   
                                        <a href="#" class="blog-slider__button">
                                            <img src="https://5.imimg.com/data5/QJ/UZ/UI/SELLER-12454615/building-energy-modeling-500x500.jpg" alt="" class="button-image">
                                            <hr class="separator">
                                            <span class="button-text">Lorem ipsum dolor</span>
                                            <span class="button-subtext">Prof. Carlos Duque</span>
                                            <span class="button-subtext">Prof. Carlos Galeano</span>
                                            <div class="button-hover-text">Lorem ipsum dolor</div>
                                            <div class="button-hover-subtext">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nam illo beatae nostrum voluptatem! Aliquam cum voluptatem soluta laudantium quae eveniet deserunt repellendus provident perferendis porro rem, debitis quam vero.</div>
                                            <div class="button-hover-date"><strong>Marzo 2024</strong> - <strong>Mayo 2024</strong></div>
                                        </a>   
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-slider__pagination"></div>
                    </div>
                </div>
        
                <div class="detail-item">
                    <div class="headline" style="margin-left: -40px;">REACT</div>
                    <div class="background" style="background-image: url('https://gfn.unizar.es/wp-content/uploads/2010/03/Screen-Shot-2018-03-05-at-21.40.36.png');"></div> 
                    <!-- REACT DESCRIPTION -->
                    <div class="blog-slider">
                        <div class="blog-slider__wrp swiper-wrapper">
                            <div class="blog-slider__item swiper-slide">
                                <div class="blog-slider__img">
                                <img src="https://farzaneganpb.com/wp-content/uploads/2020/08/3D-Simulation-And-CFD-2.gif" alt="">
                                </div>
                                <div class="blog-slider__content">
                                    <div class="blog-slider__title">Modelos de Fenómenos de Combustión</div>
                                    <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit tempore quasi, at fuga, ea eaque molestiae adipisci placeat corporis ratione earum expedita, quidem similique facere hic laborum? Dicta, voluptatibus dolorem consequatur pariatur quos inventore! Reprehenderit aspernatur, sint eum architecto maiores iste at animi dignissimos fugiat quas ab natus, dolorum laudantium.</div>
                                    <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex architecto magnam, repudiandae laborum, dolorum qui obcaecati, exercitationem illum rem a nobis voluptates! Aliquid ut modi possimus quas quibusdam cumque expedita.</div>
                                    <a href="#" class="read_more">Me Interesa</a>
                                </div>
                            </div>

                            <div class="blog-slider__item swiper-slide">
                                <div class="blog-slider__content">
                                    <div class="blog-slider__title">Proyectos Destacados</div>
                                    <div class="blog-slider__text">Estos son algunos de nuestros proyectos más destacados realizados en el área la combustión, en donde aplicamos todas las herramientas y el conocimiento necesario para obtener los resultados de más alta calidad.</div>
                                    <div class="blog-slider__button-container">  
                                        <a href="#" class="blog-slider__button">
                                            <img src="https://5.imimg.com/data5/SELLER/Default/2020/10/HX/WW/TM/20549930/avl-fire-leader-in-powertrain-cfd.jpg" alt="" class="button-image">
                                            <hr class="separator">
                                            <span class="button-text">Lorem ipsum dolor</span>
                                            <span class="button-subtext">Prof. Carlos Duque</span>
                                            <span class="button-subtext">Prof. Carlos Galeano</span>
                                            <div class="button-hover-text">Lorem ipsum dolor</div>
                                            <div class="button-hover-subtext">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nam illo beatae nostrum voluptatem! Aliquam cum voluptatem soluta laudantium quae eveniet deserunt repellendus provident perferendis porro rem, debitis quam vero.</div>
                                            <div class="button-hover-date"><strong>Marzo 2024</strong> - <strong>Mayo 2024</strong></div>
                                        </a>                                        
                                        <a href="#" class="blog-slider__button">
                                            <img src="https://5.imimg.com/data5/SELLER/Default/2020/10/HX/WW/TM/20549930/avl-fire-leader-in-powertrain-cfd.jpg" alt="" class="button-image">
                                            <hr class="separator">
                                            <span class="button-text">Lorem ipsum dolor</span>
                                            <span class="button-subtext">Prof. Carlos Duque</span>
                                            <span class="button-subtext">Prof. Carlos Galeano</span>
                                            <div class="button-hover-text">Lorem ipsum dolor</div>
                                            <div class="button-hover-subtext">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nam illo beatae nostrum voluptatem! Aliquam cum voluptatem soluta laudantium quae eveniet deserunt repellendus provident perferendis porro rem, debitis quam vero.</div>
                                            <div class="button-hover-date"><strong>Marzo 2024</strong> - <strong>Mayo 2024</strong></div>
                                        </a>   
                                        <a href="#" class="blog-slider__button">
                                            <img src="https://5.imimg.com/data5/SELLER/Default/2020/10/HX/WW/TM/20549930/avl-fire-leader-in-powertrain-cfd.jpg" alt="" class="button-image">
                                            <hr class="separator">
                                            <span class="button-text">Lorem ipsum dolor</span>
                                            <span class="button-subtext">Prof. Carlos Duque</span>
                                            <span class="button-subtext">Prof. Carlos Galeano</span>
                                            <div class="button-hover-text">Lorem ipsum dolor</div>
                                            <div class="button-hover-subtext">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nam illo beatae nostrum voluptatem! Aliquam cum voluptatem soluta laudantium quae eveniet deserunt repellendus provident perferendis porro rem, debitis quam vero.</div>
                                            <div class="button-hover-date"><strong>Marzo 2024</strong> - <strong>Mayo 2024</strong></div>
                                        </a>   
                                        <a href="#" class="blog-slider__button">
                                            <img src="https://5.imimg.com/data5/SELLER/Default/2020/10/HX/WW/TM/20549930/avl-fire-leader-in-powertrain-cfd.jpg" alt="" class="button-image">
                                            <hr class="separator">
                                            <span class="button-text">Lorem ipsum dolor</span>
                                            <span class="button-subtext">Prof. Carlos Duque</span>
                                            <span class="button-subtext">Prof. Carlos Galeano</span>
                                            <div class="button-hover-text">Lorem ipsum dolor</div>
                                            <div class="button-hover-subtext">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nam illo beatae nostrum voluptatem! Aliquam cum voluptatem soluta laudantium quae eveniet deserunt repellendus provident perferendis porro rem, debitis quam vero.</div>
                                            <div class="button-hover-date"><strong>Marzo 2024</strong> - <strong>Mayo 2024</strong></div>
                                        </a>   
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="blog-slider__pagination"></div>
                    </div>
                </div> 
                <!-- DOTS EFFECT -->
                <canvas id="dotsCanvas"></canvas>       
            </div>
            
        </section>



    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@4.1.4/imagesloaded.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/plugins/CSSPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/plugins/TextPlugin.min.js"></script>
    <script src="https://unpkg.com/delaunator@5.0.0/delaunator.min.js"></script>
    <script src="js/rotatory_scroll.js"></script>
    <script src="js/mesh.js"></script>
    <script src="js/carousel_button.js" defer></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script><script  src="js/scroll.js"></script>


</body>
</html>