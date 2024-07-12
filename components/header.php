<nav id="navstd" class="navbar navbar-expand-lg bg-body-tertiary p-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= SITE ?>">Kerlon Santana Fernandes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto"> <!-- Adicione ms-auto aqui para alinhar à direita -->
                    <a class="nav-link active" id="home" aria-current="page" style="cursor:pointer;" href="<?= SITE ?>">Home</a>
                    <a class="nav-link" id="projects" style="cursor:pointer;" href="#projects-area"><?= $text->getText("projects") ?></a>
                    <!-- <a class="nav-link" id="aboutme" style="cursor:pointer;" href="<?= SITE ?>/about-me"><?= $text->getText("aboutme") ?></a> -->
                </div>
            </div>
        </div>

    </nav>