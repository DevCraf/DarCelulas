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
                    <img class="img-fluid my-5" src="{!! asset('img/noticias/bethematch-header.jpg') !!}" alt="">
                    <h1>Be the match, una historia que inició con el trasplante de una niña de 10 años</h1>

                    <p><br>Aunque <b>DarCélulas</b> aún se encuentra en fase de pilotaje, es una ventaja para nosotros tener referentes alrededor del mundo. Hay varias historias que han inspirado a muchos para generar iniciativas donde la ciencia se encarga de hacer que la compatibilidad signifique nuevas oportunidades de vida.</p>

                    <p>Uno de los registros más grandes del mundo, <b>Be The Match (Estados Unidos)</b>, nació cuando <b>Laura, una niña de 10 años</b> diagnosticada con leucemia, recibió un trasplante de células formadoras de la sangre que salvó su vida. Este fue el primer trasplante de células de un donante no relacionado (no familiar) a un
                        paciente con una
                        <b>enfermedad grave de la sangre</b>.
                    </p>

                    <p>Cuando los padres de Laura comprobaron el éxito en el procedimiento que se llevó a cabo en 1979, se inspiraron para llevar esta oportunidad a más personas. A partir de su experiencia se creó lo que se llamaría en <b>1987 el National Marrow Donor Program en Estados Unidos (NMDP)</b>, equivalente al <b>Registro Nacional de
                            Donantes de
                            Células Progenitoras Hematopoyéticas.</b></p>

                    <p>Desde entonces miles de donantes se han unido a la causa de llevar nuevas oportunidades de vida a pacientes con enfermedades hematológicas graves, dando el primer paso: decir sí a la posibilidad de donar sus células formadoras de la sangre.</p>

                    <p><b>El programa operado por el NMDP</b>, que cuenta con equipo de trabajo encargados de diversas funciones como la<b> financiación, comunicación, investigación y acompañamiento</b> a donantes y pacientes tiene como nombre Be The Match.</p>

                    <p>Gracias a las investigaciones realizadas desde este programa, se han encontrado respuestas para el tratamiento de <b>enfermedades como la leucemia</b>, así como alternativas para el tratamiento postrasplante y para pacientes en recuperación. Estos conocimientos se han compartido en el mundo junto con iniciativas similares en
                        otros
                        países. Hoy los aportes de la comunidad científica, con el apoyo de personas solidarias, hacen crecer las esperanzas de tener un <b>programa similar en Colombia</b> que está en desarrollo en estos momentos: <b>DarCélulas</b>.</p>

                    <p>El proyecto de <b>Be The Match</b>, que inició en <b>1979 con el trasplante a Laura</b>, hoy ha salvado miles de vidas. A continuación, algunos datos de los resultados obtenidos por <b>Be The Match</b>:</p>

                    <ol>
                        <li>Gracias a <b>Be The Match</b>, en el año 2019, se logró llegar a los 100.000 trasplantes de <b>células formadoras de la sangre</b>, con 50.000 en los últimos 7 años.</li>
                        <li>Actualmente, este registro cuenta con <b>35 millones</b> de posibles donantes inscritos principalmente de <b>Estados Unidos y México</b>.</li>
                        <li>A finales de 2019, más de 200 investigaciones se llevaban a cabo gracias a <b>Be The Match</b>.</li>
                    </ol>

                    <p>Uno de los registros más grandes del mundo nos ha servido como referente para el desarrollo de <b>DarCélulas</b>, con la misma misión: hacer de la terapia celular una opción accesible para pacientes que no encuentran un donante compatible en su familia. De la misma forma buscamos trabajar en conjunto con los registros a nivel
                        internacional, para cumplir esta misión en equipo.</p>

                    <p>
                    <p><b>Le puede interesar:</b> “No podemos salvar el mundo, pero podemos empezar por salvar una vida”. Mauricio realizó un viaje de 9 horas para completar su inscripción en DarCélulas <a href="{!! route('salvarUnaVida') !!}">Salvar una vida</a></p>

                    <p><b>Por:</b> redacción IDCBIS</p>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script src="{!! asset('js/quienesSomos.js') !!}"></script>
@endsection