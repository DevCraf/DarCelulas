@extends('layouts.internas')

@section('styles')
  <link rel="stylesheet" href="{!! asset('css/styles_scroll.css') !!}">
@endsection

@section('content')
<div class="col-12">
  <div class="row">
    <div class="container">
      <div class="row justify-content-center">

          <div class="col-12">
            <img class="img-fluid my-5" src="{!! asset('img/noticias/conociendo_hla_banner.png') !!}" alt="">
            <h1>Conociendo el HLA</h1>
            <p><b>Para que una persona con leucemia o cualquier otra enfermedad grave de la sangre</b> pueda recibir un trasplante de células formadoras de la sangre, <b>debe ser compatible con el donante.</b> La compatibilidad entre el donante y el receptor depende de un conjunto de moléculas que se encuentran <b>en la superficie de todas nuestras células</b> llamada <b>Antígeno Leucocitario Humano</b> (HLA por sus siglas en inglés), la cual diferencia las células propias de las ajenas.</p>
          </div>
          <div class="col-12 col-lg-8">
            <img class="img-fluid my-5" src="{!! asset('img/noticias/conociendo_hla_imagen_1.png') !!}" alt="">
          </div>
          <div class="col-12">
            <p>Las células que se encargan de la defensa de nuestro cuerpo (conocidas como linfocitos, un tipo de glóbulo blanco) y que siempre circulan por nuestra sangre, tienen la capacidad de <b>reconocer las células que tienen un HLA distinto al propio para destruirlas.</b> Este mecanismo del cuerpo humano es el responsable de que un paciente rechace las células cuando se realiza un trasplante entre personas no compatibles.</p>
          </div>
          <div class="col-12 col-lg-8">
            <img class="img-fluid my-5" src="{!! asset('img/noticias/conociendo_hla_imagen_2.png') !!}" alt="">
          </div>
          <div class="col-12">
            <p>Para entender un poco mejor el HLA, imagina que en la superficie de tus células cuentas con unas figuras geométricas de ciertos colores que has heredado de tu padre y tu madre. La combinación de esas figuras y colores son muy diversas en el mundo. <b>Como los seres humanos somos tan diversos, hay millones de combinaciones distintas que hacen que conseguir un donante prácticamente idéntico sea todo un desafío.</b> </p>
          </div>
          <div class="col-12 col-lg-8">
            <img class="img-fluid my-5" src="{!! asset('img/noticias/conociendo_hla_imagen_3.png') !!}" alt="">
          </div>
          <div class="col-12">
            <p>Imagina que una persona en el mundo requiere un trasplante de células formadoras de la sangre; lo primero que se hace es buscar dentro de sus hermanos para ver si hay uno idéntico a esa persona, ya que la probabilidad de encontrar un hermano compatible es mucho más alta (porque heredan la información de los mismos padres) que la probabilidad de encontrar alguien tan parecido fuera de la familia. Sin embargo, <b>solo 3 de cada 10 personas tienen un hermano compatible; el 70 % restante debe acudir a un registro de donantes anónimos</b> para encontrar a la persona que sea compatible.</p>
          </div>
          <div class="col-12 col-lg-8">
            <img class="img-fluid my-5" src="{!! asset('img/noticias/conociendo_hla_imagen_4.png') !!}" alt="">
          </div>
          <div class="col-12">
            <p><a href="{!! route('paraSalvarVidasPrimeroHayQueProtegerLaPropia') !!}">Le puede interesar: Cinco consejos para mantenerte sano si quieres ser donante de células formadoras de la sangre</a></p>
            <p><b>La compatibilidad significa que el HLA de las células del donante y del receptor son tan parecidos, que pueden convivir en el cuerpo del paciente sin que exista un rechazo.</b> Es decir, que las figuras geométricas de colores del donante son casi iguales o iguales a las de la persona que recibirá el trasplante y se acoplan perfectamente para vivir indefinidamente en su cuerpo. Esta coincidencia es tan única, que solo mediante un registro de donantes es posible encontrarla.</p>
          </div>
          <div class="col-12 col-lg-8">
            <img class="img-fluid my-5" src="{!! asset('img/noticias/conociendo_hla_imagen_5.png') !!}" alt="">
          </div>
          <div class="col-12">
            <p>De esta manera, <b>cuando recibes el llamado del registro para decirte que eres un potencial donante, significa que tus células formadoras de la sangre son prácticamente iguales con las de una persona en Colombia o en cualquier parte del mundo que las necesita.</b> Con la donación, tus células entrarían en el cuerpo del paciente para que se adapten a este nuevo medio, ayuden a generar nuevas células de la sangre y salven la vida de esta persona; esto sería posible porque son compatibles.</p>
          </div>
          <div class="col-12 col-lg-8">
            <img class="img-fluid my-5" src="{!! asset('img/noticias/conociendo_hla_imagen_6.png') !!}" alt="">
          </div>
          <div class="col-12">
            <p>Por: redacción IDCBIS</p>
          </div>

      </div>
    </div>
  </div>
</div>

@endsection

@section('js')
  <script src="{!! asset('js/quienesSomos.js') !!}"></script>
@endsection
