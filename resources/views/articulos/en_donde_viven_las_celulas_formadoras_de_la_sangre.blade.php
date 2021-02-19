@extends('layouts.internas')

@section('styles')
  <link rel="stylesheet" href="{!! asset('css/styles_scroll.css') !!}">
@endsection

@section('content')
<div class="col-12">
  <div class="row">
    <div class="container">
      <div class="row">
        <article>
          <div class="col-12">
            <img class="img-fluid my-5" src="{!! asset('img/noticias/en_donde_viven_las_cfs.png') !!}" alt="">
            <h1>¿En dónde viven las células formadoras de la sangre?</h1>
            <h2>La importante diferencia entre médula ósea y médula espinal</h2>
            <p>La médula ósea es un tejido parecido a una esponja que se encuentra en el centro de los huesos. Allí viven las células formadoras de la sangre que posteriormente se convertirán en los glóbulos rojos, los glóbulos blancos y las plaquetas que componen tu sangre. Los glóbulos blancos hacen parte de tu sistema de respuesta ante agentes infecciosos o daños externos. De manera habitual escucharás hablar de la médula ósea como el “tuétano” de los huesos. Lo más importante es que entiendas que no tiene ninguna relación con la médula espinal, la columna vertebral, ni el sistema nervioso.</p>
            <h2>¿Por qué es importante conocer en dónde viven las células formadoras de la sangre?</h2>
            <p>Cuando hablamos de trasplante de células formadoras de la sangre es muy común que las personas confundan el término médula ósea con médula espinal. Esta confusión se debe a la similitud que tienen los dos términos en nuestro idioma, pero en realidad su ubicación y su función dentro del cuerpo humano es muy diferente. Al convertirte en parte del Registro Nacional de Donantes de Células Progenitoras Hematopoyéticas, lo que donas son las células formadoras de la sangre que viven en la médula ósea, dentro de tus huesos. Esto no tiene nada que ver con la médula espinal.</p>
            <p>Le puede interesar: <a class="enlace_interno" href="{!! route('laSangreDeCordonUmbilicalAdemasDeDarVidaPuedeSalvarOtras') !!}">La sangre de cordón umbilical, además de dar vida puede salvar otras</a></p>
            <h2>¿Y la médula espinal?</h2>
            <p>Ya sabemos que la médula ósea y la médula espinal no son lo mismo. Mientras la médula ósea está en el centro de los huesos alojando las células formadoras de la sangre, la médula espinal es el cordón del sistema nervioso que recorre por dentro la columna vertebral. Su principal función es transmitir los impulsos entre el cerebro y el cuerpo. Por ejemplo, si quieres caminar, el cerebro envía la señal para que tus piernas se muevan. Si estás en la playa y sientes calor tu cuerpo envía el mensaje por la médula espinal hasta tu cerebro donde se procesa esa información.</p>
            <p><b>Las células formadoras de la sangre viven en nuestros huesos. La médula ósea, con su forma de esponja es el lugar perfecto para que se puedan desarrollar. Allí se genera nuestra sangre.</b></p>
            <p>Por: redacción IDCBIS</p>
          </div>
        </article>
      </div>
    </div>
  </div>
</div>

@endsection

@section('js')
  <script src="{!! asset('js/quienesSomos.js') !!}"></script>
@endsection
