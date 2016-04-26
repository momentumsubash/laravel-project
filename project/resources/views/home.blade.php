@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home Page</div>

				<div class="panel-body">
					You are logged in!
					<h3>Your full details are </h3>
					<ul>
						<li><B>your name :</B>
						{{Auth::user()->name}}</li>
						

					</ul>
					

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
