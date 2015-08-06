@extends('layouts.admin')
{{--@extends('layouts.master')--}}

@section('content')

    Vue : front.question.blade

    {{--{{dd($questions)}}--}}

    @if(count($questions)>0)
        @foreach($questions as $question)
            <h2><a href="{{url('q/'.$question->id)}}">{{$question->title}}</a></h2>
            <p>{{ $question->content }}</p>

            <?php $nb_good_answers = 0 ?>

            @foreach($question->choices as $choice)
                @if($choice->status==='yes')
                    <?php $nb_good_answers++ ?>
                @endif
            @endforeach

            @foreach($question->choices as $choice)

                <?php $input_type = $nb_good_answers>1?'checkbox':'radio' ?>

                <input type="{{$input_type}}" name="{{$input_type.'-'.$question->id}}">{{$choice->content}}<br>
            @endforeach

            <small>Niveau : {{$question->class_level}} - Statut : {{$question->status}}</small>
        @endforeach
    @else
        <p>Pas de questions à afficher</p>
    @endif
@stop

@section('footer')
    @parent
    mentions légales
@stop
