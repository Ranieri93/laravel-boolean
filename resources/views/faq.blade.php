@extends('layouts.main')
@section('content')
    <div class="header-faq">
        <div class="container-fluid">
            <h1>Domande frequenti</h1>
            <p>Le nostre risposte a tutte le tue domande.
                Non trovi la risposta che stai cercando? Contattaci e saremo felici di darti una mano.
            </p>
        </div>
    </div>
    <div class="body-faq">
        <div class="container-fluid">
            <div class="row">
                <div id="grey-section-faq" class="col-6">
                    <h2>Prima del corso</h2>
                    @foreach($lista_faq_sx as $singleQuestion)
                    <div class="faq-question">
                        <h3> {{ $singleQuestion['q'] }} <i class="fas fa-plus"></i></h3>
                        <p class="answer">
                            {{$singleQuestion['a']}}
                        </p>
                    </div>
                    @endforeach
                </div>
                <div id="blue-section-faq" class="col-6 bg-blue">
                    <h2>Dopo il corso</h2>
                    @foreach($lista_faq_dx as $singleQuestion)
                        <div class="faq-question">
                            <h3> {{ $singleQuestion['q'] }} <i class="fas fa-plus"></i></h3>
                            <p class="answer">
                                {{$singleQuestion['a']}}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


@endsection
