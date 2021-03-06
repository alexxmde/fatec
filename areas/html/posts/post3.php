<?php
$path = "../../../";
if(!isset($_GET['idioma'])){ $idioma = "pt";} else {$idioma = $_GET['idioma'];}
require_once ("../../../templates/vetor.php"); 
include '../../../templates/header.php';
?>
       
        <section class="container">
	    <div class="row">
	       <div class="faixa-post col-xs-12">
	           <div class="titulo-container col-xs-12">
                <h1 class="col xs-12">Melhore a qualidade do seu CSS com PostCSS</h1>
                   <hr>
                   <div class="glyphicon glyphicon-calendar"><span class="data">16/05/2016</span>
                   </div>
               </div>
            </div>
        </div>
        </section>
        <section>
            <div class="div-bio-autorh">
                <div class="autorpost">
                   <img src="<?php echo $path; ?>img/quem-somos/guilherme.jpg" alt="Guilherme Felipe" class="foto-autor">
                </div>
                <div class="bio-autorh">
                    <p><b>Guilherme Felipe</b>, o responsável pela área de HTML e CSS do NightTools, cursa o 2º semestre de Sistemas para Internet na FATEC de São Roque, é desenvolvedor iniciante, palmeirense e tem 18 anos. Gosta de praticar esportes, sair com os amigos e jogar videogame nas horas vagas.  Futuro Bill Gates.</p>
                </div>
            </div>
        </section>
               <article class="container-post col-sm-3 col-xs-12 col-lg-offset-1">
                   <p class="p-html">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam fringilla diam lectus, at eleifend nunc bibendum accumsan. Donec ligula est, vulputate in aliquam scelerisque, gravida nec erat. In hac habitasse platea dictumst. Sed in urna vel lacus malesuada volutpat eu vitae ex. Ut a fringilla ante. Praesent in fermentum lorem.</p>
                   <p class="p-html">Mauris laoreet tristique lectus, at accumsan diam ornare vel. Nulla vel arcu vitae diam volutpat condimentum. Sed non convallis turpis:</p>
                   <li>
                   <ul class="p-html"><b>Os estilos dos códigos devem ser consistentes - </b>Integer sit amet nisl lectus. Suspendisse non dictum tortor. Etiam ut erat viverra augue tincidunt laoreet at feugiat nisi. Sed pretium tempor justo a eleifend.</ul>
                    <ul class="p-html"><b>O código deve respeitar algumas normas métricas - </b>Sed euismod massa non ultrices elementum. Etiam non justo id mi venenatis ultrices quis eu urna. Curabitur rhoncus varius vehicula. Sed laoreet ultricies purus vel porta. Nulla facilisi.</ul>
                    <ul class="p-html"><b>Hacks devem ser evitados - </b>Cras suscipit massa vitae nibh consequat, id mattis ex lobortis. Pellentesque quis magna sed urna pharetra condimentum. Proin turpis nibh, viverra at cursus vel, tincidunt ac velit. Sed et quam at metus vulputate lobortis non blandit lorem.</ul>
                   </li>
                    <h2>Como o PostCSS pode ajudar</h2>
                   <p class="p-html">Cum sociis natoque penatibus et <a href="#">magnis dis parturient</a> montes, nascetur ridiculus mus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum euismod leo in ligula fringilla, et congue mi porttitor. Integer vestibulum turpis efficitur est consectetur laoreet. Maecenas sed convallis libero, ut luctus nunc. Quisque hendrerit magna sed purus pulvinar, nec consectetur ante sodales.</p>
                   <div class="codigo-g">
                        <pre>
                            <code class="language-js">
var gulp = require('gulp');
gulp.task('analyze-css', function () {
  var postcss = require('gulp-postcss');
  var reporter = require('postcss-reporter');

  return gulp.src('style.css')
    .pipe(postcss([ 
      reporter()
    ]));
});
                            </code>
                        </pre>
                     </div>
                    <h2>Stylelint</h2>
                   <p class="p-html">Mauris condimentum eleifend dolor sit amet efficitur. <a href="#">Stylelint</a> id laoreet ante. Ut fringilla at dui ut fringilla. Mauris elementum eu sapien sit amet ullamcorper. Maecenas ut ornare sapien. Mauris posuere urna eget lacus rutrum mollis. Nam suscipit augue elit, porta ultricies ligula sodales ac. Nullam rhoncus fringilla justo in mollis.</p>
                   <div class="codigo-g">
                        <pre>
                            <code class="language-js">
.title,.content{ 
  background: #FFFFFF; 
  font-size:0.9em;


  margin: 0;
}
                            </code>
                        </pre>
                     </div>
                    <h2>Plugin: Do I use</h2>
                   <p class="p-html">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vehicula felis a lacus pellentesque sodales. Nunc sit amet rhoncus est, eu imperdiet arcu. Suspendisse non magna rhoncus, pharetra nibh vitae, ornare nunc. Aenean vel dui <a href="#">caniuse.com</a> erat aliquet dapibus nec vitae nulla. Nunc et ultricies nibh, eu ullamcorper dui. Sed viverra ac nisi sit amet tempus. Quisque convallis nunc in odio varius faucibus.</p>
                   <div class="codigo-g">
                        <pre>
                            <code class="language-js">
return gulp.src('style.css')
  .pipe(postcss([
    doiuse({
      browsers: ['ie >= 9', 'last 2 versions'],
    }),
    reporter()
]));
                            </code>
                        </pre>
                     </div>
                    <h2>CSS Imutável</h2>
                   <p class="p-html">Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla eget erat tristique, vehicula mauris vitae, vestibulum risus. Sed ac mi in lacus semper tempus. Donec lacinia vitae magna ut congue.Integer laoreet efficitur tempus. Donec viverra lorem nec lacus gravida semper. <a href="#">Quisque</a> rutrum pellentesque varius.</p>
                   <div class="codigo-g">
                        <pre>
                            <code class="language-css">
.title {
  color: blue;
  font-weight: bold;
}

.title {
  color: green;
}

.article .title {
  font-size: 1.2em;
}
                            </code>
                        </pre>
                     </div>
                    <h2>Status do CSS e Seletores de Lista</h2>
                   <p class="p-html">Integer <a href="#">laoreet</a> efficitur <a href="#">tempus</a>. Donec viverra lorem nec lacus gravida semper. Quisque rutrum pellentesque varius. Nam non convallis enim, ut iaculis massa. Pellentesque id sem et tortor blandit suscipit a a augue. Phasellus in <a href="#">pellentesque metus</a>. Nam ullamcorper, urna id tempus euismod, arcu lorem finibus nunc, tempus vulputate augue sem eu lectus.</p>
                    <ul>
                    <li class="p-html">Aenean malesuada porta nulla sit amet dictum. Proin ornare efficitur risus, eget mollis turpis ultrices quis. Pellentesque eu turpis lorem.</li>
                    <li class="p-html">Maecenas orci turpis, suscipit sit amet mauris sed, commodo scelerisque nisl. Sed congue auctor velit, sed euismod lectus sollicitudin mattis.</li>
                    <li class="p-html">Vivamus orci purus, rutrum non sodales eleifend, cursus sit amet eros. Praesent vulputate tempor velit ac sagittis. Mauris sodales a ante vitae molestie. Integer ultricies nisi sit amet bibendum varius.</li>
                    </ul>
                    <h2>Envolvendo</h2>
                    <p class="p-html">Donec dictum, sem ac accumsan porttitor, tortor nisl pulvinar tellus, sit amet pretium risus est eget risus. Sed et porttitor leo, nec suscipit elit. Praesent sagittis odio non malesuada sagittis.</p>
                </article>
  <aside class="cont-aside-html col-xs-offset-1 col-xs-2">
                <h1 class="more-this">MAIS SOBRE HTML & CSS:</h1>
                <ul>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/html/posts/post1.php">(Tutorial) Game em HTML5 utilizando Canvas</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/html/posts/post2.php">Como criar um site estático com o Metalsmith</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/html/posts/post3.php">Melhore a qualidade do seu CSS com PostCSS</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/html/posts/post4.php">Um modelo básico de HTML5 para qualquer projeto</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/html/posts/post6.php">Limpando um código de base do CSS</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/html/posts/post7.php">Como usar o ARIA com o HTML5</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/html/posts/post8.php">Aprenda a usar a unidade rem no CSS</a></li>
                </ul>
            </aside>
            <aside class="cont-aside-html col-xs-offset-1 col-xs-2">
                <h1 class="more-this-js">MAIS SOBRE JAVASCRIPT:</h1>
                <ul>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/javascript/posts/post-1.php">ES6 - O que há de novo? O guia definitivo</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/javascript/posts/post-2.php">React vs Ember vs Angular</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/javascript/posts/post-3.php">O que o TypeScript tem a ver com o C#?</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/javascript/posts/post-5.php">VueJs Primeiros Passos</a></li>
                </ul>
            </aside>
            <aside class="cont-aside-html col-xs-offset-1 col-xs-2">
                <h1 class="more-this-mobile">MAIS SOBRE MOBILE:</h1>
                <ul>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/mobile/posts/post-1.php">Criando uma aplicação Mobile com Reapp</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/mobile/posts/post-2.php">O que os desenvolvedores podem esperar em Android N?</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/mobile/posts/post-3.php">Gerenciamento de dependência com o Gerenciador de Pacotes Swift</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/mobile/posts/post-4.php">Retrofit, um cliente HTTP simples para Android e Java</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/mobile/posts/post-5.php">Um passeio com Android Auto</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/mobile/posts/post-6.php">Explorando Os Elementos UI Do Ubuntu Phone</a></li>
                </ul>
            </aside>
            <aside class="cont-aside-html col-xs-offset-1 col-xs-2">
                <h1 class="more-this-design">MAIS SOBRE DESIGN & UX:</h1>
                <ul>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/ux/postuxa.php">Mobile em um novo olhar sobre o desing</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/ux/postuxb.php">Desing e Layout</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/ux/postuxc.php">Flat X Realismo</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/ux/postuxd.php">Dominando Patterns SVG</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/ux/postuxe.php">Olhar simples</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/ux/postuxf.php">Os logos de 2016</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/ux/postuxg.php">Por que UX desing está relacionado mais com negócios do que com Desing?</a></li>
                    <li class="links-aside"><a href="<?php echo $path; ?>areas/ux/postuxh.php">O projeto UX no Brasil.org</a></li>
                </ul>
            </aside>
<?php include '../../../templates/footer.php'; ?>
