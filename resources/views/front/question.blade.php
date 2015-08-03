@extends('layouts.master')

@section('content')
    Questions ici
    {{--@if(count($questions)>0)--}}
        {{--@foreach($questions as $question)--}}
            {{--<h2><a href="{{url('single/'.$question->id)}}">{{$question->title}}</a></h2>--}}
            {{--<br><small>{{$question->created_at->format('d/m/Y h:i:s')}}</small>--}}
        {{--@endforeach--}}
    {{--@else--}}
        {{--<p>Pas de questions à afficher</p>--}}
    {{--@endif--}}
@stop

@section('footer')
    @parent
    mentions légales
@stop