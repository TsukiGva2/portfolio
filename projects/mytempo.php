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