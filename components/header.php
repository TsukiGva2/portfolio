<nav id="navstd" class="navbar navbar-expand-lg bg-body-tertiary p-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= SITE . (isset($_GET['language']) ? "?language=en-us" : ""); ?>">Kerlon Santana Fernandes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link active" id="home" aria-current="page" style="cursor:pointer;" href="<?= SITE ?>">Home</a>
                <a class="nav-link" id="projects" style="cursor:pointer;" href="#projects-area"><?= $text->getText("projects") ?></a>
                <a class="nav-link d-flex align-items-center" id="aboutme" style="cursor:pointer;" href="<?= SITE . (isset($_GET['language']) ? "" : "?language=en-us"); ?>">
                    <i class="fa-solid fa-language" style="font-size: 24px;"></i>
                    <span class="ms-2"><?= (isset($_GET['language']) ? "Português" : "English") ?></span>
                </a>
            </div>
        </div>
    </div>

</nav>