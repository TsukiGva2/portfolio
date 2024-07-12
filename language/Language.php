<?php

class Language
{
    private $language;
    private $text;

    public function __construct(string $language)
    {
        $this->language = $language;
        $this->text = array();

        if ($this->language == "en-us") {
            // header
            $this->text["projects"] = "Projects";
            $this->text["aboutme"] = "About me";
            $this->text["currently_focused"] = "Currently focused";

            $this->text["intro1"] = '<h1 class="tit">Hi <span class="wave-icon">👋</span>, I\'m <span class="my-name">Kerlon</span>!</h1>';
            $this->text["intro2"] = '<h3 id="user-name">Hello! I\'m <span class="my-name" data-toggle="popover" title="See more about me" data-content="Here\'s more information about me.">Kerlon</span>, your Backend Developer.</h3>';
            $this->text["popover"] = "See more about me.";
            $this->text["intro3"] = '<span style="font-size:16px;" class="text-presentation lh-lg"> - I have a passion for technology. With over 1 year of experience in the field and constantly seeking learning opportunities, my goal is to enter and excel in the technology market. I am eager to explore available opportunities!</span>';

            // Project Page
            $this->text["project_page_title1"] = "Personal Projects";
            $this->text["project_page_title2"] = "Real projects that were part of the development.";

            // About Me Page
            $this->text["about_title"] = "WHO AM I ?";
            $this->text["see_project"] = "See project";

            $this->text["about_intro"] = '<h3 class="text-center mb-2">Hello! I\'m <strong class="my-name">Kerlon Santana Fernandes</strong></h3>';
            $this->text["about_text"] = '<span style="text-align: justify;" class="whoiam mt-2 lh-lg">I am 18 years old and a Backend developer with over one year of experience in programming. I love anything related to technology and programming. I am constantly seeking learning opportunities to stand out in the market. I intend to graduate in the field to become a more complete and professional developer.</span>';
            $this->text["download_cv"] = '<button id="floating-button" class="btn">Download CV <i class="fa-solid fa-file-arrow-down" style="margin-left:5px;"></i></button>';
            $this->text['mytempo_project_text'] = 'A system for timing athletes, displaying the results obtained.';
            $this->text['suainscricao_project_text'] = 'A system for registering athletes for sporting events.';

        } elseif ($this->language == "pt-br") {
            $this->text["projects"] = "Projetos";
            $this->text["aboutme"] = "Sobre mim";

            $this->text["currently_focused"] = "Atualmente focado";

            $this->text["intro1"] = '<h1 class="tit">Oi <span class="wave-icon">👋</span>, Eu sou o <span class="my-name">Kerlon</span>!</h1>';
            $this->text["intro2"] = '<h3 id="user-name">Olá! Eu sou <span class="my-name" data-toggle="popover" title="Veja mais sobre mim" data-content="Aqui está mais informação sobre mim.">Kerlon</span>, o seu desenvolvedor Backend.</h3>';
            $this->text["popover"] = "Veja mais sobre mim.";
            $this->text["intro3"] = '<span style="font-size:16px;" class="text-presentation lh-lg"> - Tenho uma paixão pela tecnologia. Com mais de 1 ano de experiência na área e em busca constante de aprendizado, tenho o objetivo de ingressar e sobressair no mercado de tecnologia. Estou ansioso para explorar oportunidades disponíveis!</span>';

            // Página de Projetos
            $this->text["project_page_title1"] = "Projetos Próprios";
            $this->text["project_page_title2"] = "Projetos reais que fizeram parte do desenvolvimento.";

            // Página Sobre Mim
            $this->text["see_project"] = "Ver projeto";

            $this->text["about_title"] = "QUEM SOU EU ?";
            $this->text["about_intro"] = '<h3 class="text-center mb-2">Olá! Sou <strong class="my-name">Kerlon Santana Fernandes</strong></h3>';
            $this->text["about_text"] = '<span style="text-align: justify;" class="whoiam mt-2 lh-lg">Tenho 18 anos e sou desenvolvedor Backend, com mais de um ano de experiência em programação. Amo qualquer coisa relacionada a tecnologia e programação. Estou em constante busca de aprendizado para me destacar no mercado. Pretendo me formar na área para me tornar um desenvolvedor mais completo e profissional.</span>';
            $this->text["download_cv"] = '<button id="floating-button" class="btn">Baixar CV <i class="fa-solid fa-file-arrow-down" style="margin-left:5px;"></i></button>';

            $this->text['mytempo_project_text'] = 'Um sistema para inscrição de atletas em eventos esportivos.';
            $this->text['suainscricao_project_text'] = 'Um sistema para a cronometragem de atletas, exibindo os resultados obtidos.';
        }
    }

    // Método para obter texto
    public function getText(string $key): string
    {
        return $this->text[$key] ?? "Texto não encontrado";
    }
}
