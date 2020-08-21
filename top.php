
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="assets/fonts/awesome/css/all.css">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script> 
      $(document).ready(function(){
      $('.collapse').on('show.bs.collapse', function () {
          $('.collapse.show').each(function(){
              $(this).collapse('hide');
          });
        });
      });
    </script>
  <!--animaçâo do scroll-->
  <script>
              
        var root = document.documentElement;
        root.className += ' js';

        function boxTop(idBox) {
          var boxOffset = $(idBox).offset().top;
          return boxOffset;
        }
        //PROGRESSO
        $(document).ready(function() {
          var $target = $('.progress-bar'),
              animationClass = 'anime-init-progress',
              windowHeight = $(window).height(),
              offset = windowHeight - (windowHeight / 12);

          function animeScroll() {
            var documentTop = $(document).scrollTop();
            $target.each(function() {
              if (documentTop > boxTop(this) - offset) {
                $(this).addClass(animationClass);
                $(this.$target1).addClass(animationClass)
              } else {
                $(this).removeClass(animationClass);
              }
            });
          }
          animeScroll();

          $(document).scroll(function() {
            animeScroll();
          });
        });

        //outras animações
        $(document).ready(function() {
          var $target = $('.ani'),
              animationClass = 'anime-init-outer',
              windowHeight = $(window).height(),
              offset = windowHeight - (windowHeight / 12);

          function animeScroll() {
            var documentTop = $(document).scrollTop();
            $target.each(function() {
              if (documentTop > boxTop(this) - offset) {
                $(this).addClass(animationClass);
                $(this.$target1).addClass(animationClass)
              } else {
                $(this).removeClass(animationClass);
              }
            });
          }
          animeScroll();

          $(document).scroll(function() {
            animeScroll();
          });
        });
  </script>
  <!--menu sobreposto-->
  <script>
    $(window).scroll(function() {    
var scroll = $(window).scrollTop();
  if (scroll >= 40) {               // se rolar 40px ativa o evento
    $("#nav").addClass("fixed-top");    //coloca a classe "ativo" no id=menu
  } else {
    $("#nav").removeClass("fixed-top"); //se for menor que 40px retira a classe "ativo" do id=menu
  }
});
  </script>


  
  </head>



  <body class="text-center">
      <header>
        <nav class="nav " id="nav">
          <h3 class="col-md-6" id="nav-name">Moises Cardozo de Paula</h3>
          <div class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="#containerAbout"> sobre mim </a>
            <a class="nav-link" href="#fomação">Formação</a>
            <a class="nav-link" href="#Experiencia">Experiencia</a>
          </div>
        </nav>
      </header>

      