@extends('app')

@section('content')
<div class="container">
	<div class="row">
        @if (Auth::check())
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>
                    <div class="panel-body">
					    Vous êtes connecté !
				    </div>
			</div>
		</div>
        @endif
	</div>
</div>
@endsection
