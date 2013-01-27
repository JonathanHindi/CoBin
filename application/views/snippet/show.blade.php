@layout('master')

@section('container')
	<pre class="prettyprint linenums"> {{ e($snippet) }} </pre>
	<div class="btn-group nav">
		{{ HTML::link_to_route('fork_snippet', 'Fork', $id, array('class' => 'btn btn-warning')) }}
		{{ HTML::link_to_route('new_snippet', 'New', '', array('class' => 'btn btn-primary')) }}
	</div>
@endsection
