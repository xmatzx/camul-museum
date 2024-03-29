<div id="main">

  <div class='navbar-innerguide'>
    <div class='container-fluid'>
      <a data-target='.nav-collapse' data-toggle='collapse' class='btn btn-navbar'>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </a>
      <div class='nav-collapse'>
        <ul class='nav'>
          <li id='SalaDesenho'><a href="<?php echo url_for('visita/salaDesenho') ?>"><?php echo __('Sala de Desenho') ?></a></li>
          <li id='SalaCivil'><a href="<?php echo url_for('visita/salaCivil') ?>"><?php echo __('Sala de Civil, Metalúrgica e Hidráulica') ?></a></li>
          <li id='SalaQuimica'><a href="<?php echo url_for('visita/salaQuimica') ?>"><?php echo __('Sala de Química') ?></a></li>
          <li id='SalaMecanica'><a href="<?php echo url_for('visita/salaMecanica') ?>"><?php echo __('Sala de Mecânica') ?></a></li>
          <li id='SalaFisica'><a href="<?php echo url_for('visita/salaFisica') ?>"><?php echo __('Sala de Física, Eletrotécnia e Geometria Descritiva') ?></a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  <div class="row-fluid">
    <div id="nomesala" class="well"><h2><?php echo __('Sala de Mecânica') ?></h2></div>
  </div>
  <div class="row-fluid">
    <div class="span6">
      <div class="well">
        <div id="videobody" >
          <!-- "Video For Everybody" http://camendesign.com/code/video_for_everybody -->
          <video id="video" controls="controls" poster="/image.jpg" width="490" height="360">
            <source src="/uploads/videos/Sala4_Mecanica_legendado.mp4" type="video/mp4" />
            <source src="/uploads/videos/Sala4_Mecanica_legendado.webm" type="video/webm" />
            <source src="/uploads/videos/Sala4_Mecanica_legendado.ogv" type="video/ogg" />
            <object type="application/x-shockwave-flash" data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" width="640" height="360">
              <param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" />
              <param name="allowFullScreen" value="true" />
              <param name="wmode" value="transparent" />
              <param name="flashVars" value="config={'playlist':['%2Fimage.jpg',{'url':'%2F/uploads/videos/Sala4_Mecanica_legendado.mp4','autoPlay':false}]}" />
              <img alt="Titulo" src="/image.jpg" width="640" height="360" title="No video playback capabilities, please download the video below" />
            </object>
          </video>
          <p>
            <strong><?php echo __('Descarregar video') ?>:</strong> <a href="/nome_do_video.mp4"><?php echo __('Formato MP4') ?></a> | <a href="/nome_do_video.ogv"><?php echo __('Formato Ogg') ?></a> | <a href="/nome_do_video.webm"><?php echo ('Formato WebM') ?></a>
          </p>
        </div>
      </div>
    </div>
    <div class="span6">
      <div class="well" id="imagesPop">
        
      </div>
    </div>
  </div>



  <div class="row-fluid">

    <div class="span">
      <div class="well">
        <h4><p><?php echo __('Introdução') ?></p></h4>
        <p><?php echo __('A mecânica, associada ao estudo das máquinas, surge em 1852 com a cadeira de Desenho de Modelos de Máquinas presente nos cursos de Oficial Mecânico e de Diretor Mecânico.') ?></p>
        <p><?php echo __('Atualmente a coleção é composta por modelos de distribuição de vapor, modelos de máquinas a vapor, diversas peças de máquinas e modelos de engrenagens. Possui ainda uma coleção de modelos do Sistema Reuleaux pertencentes ao Museu Tecnológico criado pelo decreto de 1864.') ?></p>
        <audio controls="controls"> 
            <source src="/uploads/audio/11Sala_Mecanica.mp3" type="audio/mp3" />
            <source src="/uploads/audio/11Sala_Mecanica.ogg" type="audio/ogg" />
        </audio>
        <br/>
        <h4><p><?php echo __('História') ?></p></h4>
        <p><?php echo __('A mecânica surgiu em 1852 na Escola com a cadeira de Desenhos de Modelos de Máquinas e com os cursos de Oficial Mecânico e de Diretor Mecânico.') ?></p>
        <p><?php echo __('Em 1853 surge a primeira informação sobre a existência de um Gabinete de Máquinas, mas apenas mais tarde, em 1880 é que voltam a existir registos de atividade do mesmo.') ?></p>
        <p><?php echo __('Após a reforma de 1886 é criado o Laboratório Mecânico, que servia de suporte à cadeira de Mecânica e à Investigação. A partir de 1931 o Curso de Máquinas juntou-se ao de Eletrotecnia.') ?></p>
        <p><?php echo __('Atualmente, e depois de várias reformas no ensino, podemos constatar que o plano de estudos do curso de Engenharia Mecânica continua a ter cadeiras como Eletricidade, Máquinas Elétricas e Órgãos de Máquinas, áreas estas que têm vindo a ser abordadas pelos alunos desde o início do século XIX.') ?></p>
        <audio controls="controls"> 
            <source src="/uploads/audio/12Sala_Mecanica_historia.mp3" type="audio/mp3" />
            <source src="/uploads/audio/12Sala_Mecanica_historia.ogg" type="audio/ogg" />
        </audio>
      </div>
    </div>
  </div>

</div>
<?php include_javascripts() ?>
    <script type="text/javascript">
    $(document).ready(function() {
     var p = Popcorn('#video')
      .image({
        start: 0, // seconds
        end: 9, // seconds
        src: '/images/mec/1.JPG',
        target: 'imagesPop'
      } )
      
      .image({
        start: 9, // seconds
        end: 18, // seconds
        src: '/images/mec/2.JPG',
        target: 'imagesPop'
      } )
      .image({
        start:18, // seconds
        end: 27, // seconds
        src: '/images/mec/3.JPG',
        target: 'imagesPop'
      } )
      .image({
        start: 27, // seconds
        end: 36, // seconds
        src: '/images/mec/4.JPG',
        target: 'imagesPop'
      } )
      .image({
        start: 36, // seconds
        end: 45, // seconds
        src: '/images/mec/5.JPG',
        target: 'imagesPop'
      } )
      .image({
        start: 45, // seconds
        end: 54, // seconds
        src: '/images/mec/6.JPG',
        target: 'imagesPop'
      } )
      .image({
        start: 54, // seconds
        end: 63, // seconds
        src: '/images/mec/7.JPG',
        target: 'imagesPop'
      } )
      
      .image({
        start: 63, // seconds
        end: 72, // seconds
        src: '/images/mec/8.JPG',
        target: 'imagesPop'
      } )
      .image({
        start:72, // seconds
        end: 81, // seconds
        src: '/images/mec/9.JPG',
        target: 'imagesPop'
      } )
      .image({
        start: 81, // seconds
        end: 90, // seconds
        src: '/images/mec/10.JPG',
        target: 'imagesPop'
      } )
      .image({
        start: 90, // seconds
        end: 99, // seconds
        src: '/images/mec/11.JPG',
        target: 'imagesPop'
      } )
      .image({
        start: 99, // seconds
        end: 108, // seconds
        src: '/images/mec/12.JPG',
        target: 'imagesPop'
      } )
      .image({
        start: 108, // seconds
        end: 117, // seconds
        src: '/images/mec/13.JPG',
        target: 'imagesPop'
      } )
      .image({
        start: 117, // seconds
        end: 126, // seconds
        src: '/images/mec/14.JPG',
        target: 'imagesPop'
      } )
    })
    </script>