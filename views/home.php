<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once("./config/config.php");
require_once("./language/Language.php");

$lang = isset($_GET['language']) ? ($_GET['language'] == 'en-us' ? 'en-us' : 'pt-br') : 'pt-br';
$text = new Language($lang);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kerlon | Portfólio</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="<?= SITE ?>/static/assets/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_css_bootstrap.min.css">
    <link rel="stylesheet" href="<?= SITE ?>/static/css/style.css">
    <link rel="stylesheet" href="<?= SITE ?>/static/css/animatios.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
    <link rel="stylesheet" href="<?= SITE ?>/static/css/cards.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="<?= SITE ?>/static/js/func.js"></script>

</head>
<?php require_once('./components/header.php') ?>

<div class="container text-center mt-5">
    <div class="row m-0">
        <div class="col-sm ">

        </div>
        <div class="col-bg-12 mt-8">
            <div class="presentation">
                <?= $text->getText('intro1') ?>
            </div>
            <hr>
            <div class="card mt-5 text-start p-3 content">

                <h1 class="stack p-3">Backend Developer👨‍💻</h1>
                <hr class="mt-3">
                <div class="description ml-3 p-3">
                    <article>
                        <span class="p-3">
                            <?= $text->getText('intro2') ?>
                            <div class="icons-social-media">

                                <a href="https://www.linkedin.com/in/kerlon-fernandes/" target="_blank"><img class="linkedin-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/linkedin/linkedin-plain.svg" /></a>
                                <a href="https://github.com/kerlonfernandes" target="_blank"><img class="git-icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" /></a>
                                <a onclick="copyToClipboard('kerlon1221@gmail.com')" class="social-icon gmail-icon" target="_blank">
                                    <img src="<?= SITE ?>/static/images/gmail-img.png" class="git-icon icon" alt="">
                                    <span class="social-name">kerlon1221@gmail.com</span>
                                </a>
                                <span class="transferarea m-1 text-center d-none">Copiado para área de transferência!</span>
                            </div>
                        </span>

                        <hr>
                        <div class="m-3">
                            <span style="font-size:16px;" class="text-presentation lh-lg"><?= $text->getText('intro3') ?></span>
                        </div>
                    </article>
                </div>
            </div>
            <div style="margin-top: 150px;" class="card mt-10 text-start p-3 content">

                <h4>Tech Stack</h4>

                <hr>


                <div class="languages ms-3">
                    <p align="center">
                        <a href="https://skillicons.dev">
                            <img src="https://skillicons.dev/icons?i=html,css,bootstrap,js,nodejs,jquery,python" style="width: 75%;" />
                            <img src="https://skillicons.dev/icons?i=django,flask,php,mysql,lua,sqlite,firebase" class="mt-2" style="width: 75%;" />
                        </a>
                    </p>
                </div>

            </div>

            <div style="margin-top: 150px;" class="card mt-10 text-start p-3 content">

                <h4><?= $text->getText("currently_focused") ?></h4>

                <hr>

                <div class="languages">
                    <p align="center">
                        <a href="https://skillicons.dev">
                            <img src="https://skillicons.dev/icons?i=go,lua,flask,django" style="width: 100%; height: 100%;">
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center mt-5 mb-5">

        <!-- Projetos que estou envolvido -->
        <h1 class="mt-5" id="projects-area"><?= $text->getText("project_page_title2") ?></h1>
        <hr>
        <div class="card-lg-6 mt-10 text-start p-5 content" style="margin-top: 150px;">
            <div class="portfolio-card">
                <div id="carouselExampleInterval3" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="<?= SITE ?>/static/images/mytempo-img1.png" class="d-block w-100" alt="MyTempo - Imagem 1" onclick="openImage(this)">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="<?= SITE ?>/static/images/mytempo-img2.png" class="d-block w-100" alt="MyTempo - Imagem 2" onclick="openImage(this)">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval3" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval3" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="mt-5">
                    <h2>MyTempo</h2>
                    <p><?= $text->getText('mytempo_project_text') ?></p>
                    <a href="https://mytempo.esp.br" target="_blank"><?= $text->getText('see_project') ?></a>
                </div>
            </div>
        </div>
        <!-- suainscricao -->
        <div class="card-lg-6 mt-10 text-start p-5 content" style="margin-top: 50px;">
            <div class="portfolio-card">
                <div id="carouselExampleInterval4" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="<?= SITE ?>/static/images/suainscricao-img1.png" class="d-block w-100" alt="suainscricao - Imagem 1" onclick="openImage(this)">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="<?= SITE ?>/static/images/suainscricao-img2.png" class="d-block w-100" alt="suainscricao - Imagem 2" onclick="openImage(this)">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval4" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval4" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <a href="#projects"></a>
                <div class="mt-5">
                    <h2>Sua inscrição</h2>
                    <p><?= $text->getText('suainscricao_project_text') ?></p>
                    <a href="https://suainscricao.com" target="_blank"><?= $text->getText('see_project') ?></a>
                </div>
            </div>
        </div>
    </div>

</div>
</div>

<div class="overlay" id="image-overlay">
    <span class="close" onclick="closeImage()">&times;</span>
    <div class="image-container">
        <img id="expanded-image" alt="Expanded Image">
    </div>
</div>



<div class="col-sm">
        <div class="floating-field">
            <a href="<?= SITE ?>/files/cv.php" id="floating-button" class="btn">Baixar CV <i class="fa-solid fa-file-arrow-down" style="margin-left:5px;"></i></a>
            <div id="floating-content"></div>
        </div>
    </div>
</div>
</div>

<?php require_once('./components/footer.php') ?>

<script>
    function hideOverLay() {

        $("#overlay").hide();
        $("#loader-container").hide();
        $("#custom-loader").hide();

    }

    function showOverLay() {

        $("#overlay").show();

    }

    $(".my-name").css("cursor", "pointer")
    $(".my-name").on("click", function() {
        showOverLay()

        window.location.href = "./?area=about-me"

    })
    $('.my-name').popover({
        trigger: 'hover'
    });
    container: 'body'
    $('.my-name').on('mouseout', function() {
        $(this).popover('hide');
    });

    document.querySelector("#floating-button").addEventListener('click', () => {
        window.location.href = "pages/cv.php"
    })


    function openImage(imgElement) {
        var overlay = document.getElementById("image-overlay");
        var expandedImage = document.getElementById("expanded-image");
        expandedImage.src = imgElement.src;
        overlay.style.display = "flex";
    }

    function closeImage() {
        var overlay = document.getElementById("image-overlay");
        overlay.style.display = "none";
    }
</script>