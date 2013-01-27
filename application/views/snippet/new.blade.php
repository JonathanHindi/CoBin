@layout('master')

@section('container')
	{{ Form::open('/') }}

		{{ Form::textarea('snippet', $snippet) }}

		<div class="btn-group nav">
			<a href="{{ URL::to_route('new_snippet')}}" class="btn btn-danger">Start Over</a>
			{{ Form::submit('Save', array('class' => 'btn btn-primary')) }}
		</div>

	{{ Form::close() }}
@endsection
