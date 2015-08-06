<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
        <li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-home"></span>Accueil</a></li>
        <li><a href="{{ url('actualités') }}"><span class="glyphicon glyphicon-fire"></span>Actualités</a></li>
        <li><a href="{{ url('le-lycee') }}"><span class="glyphicon glyphicon-info-sign"></span>Le lycée</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
            <li><a href="{{ url('/auth/login') }}">Connexion</a></li>
            <li><a href="{{ url('/auth/register') }}">S’enregistrer</a></li>
        @else
            <li class="dropdown">
                <a href="dashboard" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    @if (!Request::is('dashboard/*'))
                        <li><a href="{{ url('dashboard') }}">Dashboard</a></li>
                    @endif
                    <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                </ul>
            </li>
        @endif
    </ul>
</div>

{{--
<div class="row navigation">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <div class="navbar-collapse collapse navbar-right">
                <ul class="nav navbar-nav" id="menu-menu-principal">
                    <li><a href="{{url('/')}}">
                            <span class="glyphicon glyphicon-home">Home</span></a>
                    </li>
                    --}}
{{--@if(count($menus)>0)--}}{{--

                        --}}
{{--@foreach($menus as $category)--}}{{--

                            --}}
{{--<li><a href="{{url('category/'.$category->id)}}">{{$category->title}}</a></li>--}}{{--

                        --}}
{{--@endforeach--}}{{--

                    --}}
{{--@endif--}}{{--

                    @if(!Auth::guest())
                        <li class="warning"><a href="{{url('dashboard')}}">dashboard</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</div>--}}
