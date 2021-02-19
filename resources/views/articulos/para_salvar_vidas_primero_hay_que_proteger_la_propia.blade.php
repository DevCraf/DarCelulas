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
            <img class="img-fluid my-5" src="{!! asset('img/noticias/noticia_cuida_tu_salud.jpg') !!}" alt="">
            <h1>Para salvar vidas primero hay que proteger la propia</h1>
            <h2>Cinco consejos para mantenerte sano si quieres ser donante de células formadoras de la sangre</h2>
            <p><i>Por: Dra. Virginia Abello</i></p>
            <p>Ya te inscribiste al Registro Nacional de Donantes de Células Progenitoras Hematopoyéticas, el siguiente paso es mantener tu compromiso. Ser donante de células formadoras de la sangre es un acto generoso que podría salvar una vida; esto implica que el destino de alguien estaría en tus manos, una gran responsabilidad. Para ser un donante adecuado son muy importantes dos factores: primero, la sinceridad absoluta a la hora de responder los cuestionarios de salud previos a la donación, ya que con estos se busca protegerte a ti y al paciente (receptor).</p>
            <p>Segundo, mantenerte saludable; a continuación encontrarás algunos consejos a tener en cuenta:</p>
            <p><b>1 Mantén un comportamiento sexual responsable y protégete de posibles enfermedades transmisibles </b> </p>
            <p>Una razón para ser descartado como donante es tener algunas infecciones de transmisión sexual y las enfermedades como la hepatitis B y C, ya que estas pueden ser contagiadas mediante transfusiones o trasplantes. Para evitar ser contagiado, puedes usar diferentes estrategias como limitar el número de parejas sexuales, o usar un condón siempre que tengas relaciones sexuales. Si crees que hay posibilidad de tener alguna de estas enfermedades, cuéntanoslo en la entrevista de salud.</p>
            <p><b>2 Cuida tu hígado</b> </p>
            <p>Una alteración seria de la función del hígado, como lo es la cirrosis hepática, es una contraindicación para ser donante. La forma más común de cirrosis es la relacionada con el consumo excesivo de licor. No solo para evitar ser descartado como donante, sino para proteger tu vida, debes evitar el consumo exagerado de alcohol; aunque las definiciones son variables, la indicación más común es evitar consumir más de media botella de licor a la semana.</p>
            <p><b>3 Tu sistema cardiovascular es muy importante</b> </p>
            <p>Las enfermedades cardiovasculares serias, infartos o una trombosis cerebral (isquemia), también pueden impedir que seas candidato a ser donante, así que es importante tu comunicación temprana. Existen unos factores de riesgo claramente establecidos para los donantes de células formadoras de la sangre, puedes controlar algunos como la obesidad, el sedentarismo o el consumo de cigarrillo; la diabetes o hipertensión solo son factores de riesgo si no han sido controladas. </p>
            <p>Algunas enfermedades cardiacas bien controladas, menos graves como una arritmia o el antecedente de un reemplazo valvular podrían ser tolerables, sin embargo se evaluarán caso por caso.</p>
            <p>Como decíamos anteriormente, si eres paciente con diabetes controlada, se puede permitir que seas donante de células formadoras de la sangre; las complicaciones serias de esta enfermedad como la renal, cardíaca, ocular o la neuropatía complicada, podrían evitar que seas un buen candidato, ya que podrías tener complicaciones en el procedimiento.</p>
            <p><b>4. Las sustancias psicoactivas te pueden afectar de muchas formas, evitarlas es una gran forma de prevenir riesgos</b> </p>
            <p>Si tienes una historia de farmacodependencia podrás donar células formadoras de la sangre 12 meses después de estar en terapia y sin consumo. Si es tu caso se usarán evaluaciones muy precisas, no con el fin de juzgar tu comportamiento, sino para proteger tu seguridad y la del paciente. El principal riesgo está relacionado con sustancias inyectadas, ya que el hecho de que haya probabilidad de haber compartido agujas, resulta ser un factor de riesgo por posible contagio en enfermedades. Cada caso es independiente y debe ser evaluado en el momento de la entrevista de salud.</p>
            <p><b>5. Nunca está de más tener hábitos que le hagan bien a tu mente</b> </p>
            <p>Las personas con enfermedades mentales como la depresión, no tienen contraindicación alguna para la donación de células formadoras de la sangre; sin embargo, estas deben estar bien controladas. Saber cómo mantener tu mente saludable, es estar un paso adelante de condiciones que pueden afectar tu salud y evitar que ayudes a alguien.</p>
            <p><a target="_blank" href="{!! route('enDondeVivenLasCelulasFormadorasDeLaSangre') !!}">Le puede interesar: ¿En dónde viven las células formadoras de la sangre?</a></p>
            <p>En conclusión, ser un donante apropiado de células formadoras de la sangre implica primero cuidarte a ti mismo, una responsabilidad que además es una oportunidad para mejorar tu calidad de vida; hacer ejercicio, comer balanceado, no incurrir en conductas riesgosas, acudir a tu médico en forma periódica y cumplir con sus recomendaciones. Para dar vida, hay que proteger primero la propia. </p>
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
