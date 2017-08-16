@extends('backend.layouts.app')

@section('contentheader_title')
Slideshow | List
@endsection


@section('contentheader_description')
Slide's List for a Main Slideshow
@endsection


@section('htmlheader_title')
Slideshow 
@endsection

@section('main-content')
	<div class="col-xs-12 col-sm-8">
		<h2>
			Slideshow's List
			<a href="{{ route('administrator.slide.create') }}" class="btn btn-primary pull-right">New</a>
		</h2>
		<hr>
		@include('backend.layouts.partial.info')
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20px">ID</th>
					<th>Background Image</th>
					<th>Icon Image </th>
					<th>Icon Position </th>
					<th>Icon Column Size </th>
					<th>Text H1 </th>
					<th>Text H2 </th>
					<th>Slideshow Link </th>
					<th>State </th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($slides as $slide)
				<tr>
					<td>{{ $slide->id }}</td>
					<td>{{ $slide->backgroundimage }}</td>
					<td>{{ $slide->iconimage }}</td>
					<td>{{ $slide->iconimage_position }}</td>
					<td>{{ $slide->iconimage_col_size }}</td>
					<td>{{ $slide->text_h1 }}</td>
					<td>{{ $slide->text_h2 }}</td>
					<td>{{ $slide->read_more_link }}</td>
					<td>{{ $slide->text_col_size }}</td>
					<td>{{ $slide->state }}/td>
					<td></td>
					<td width="20px">
						<a href="{{ route('administrator.slide.show', $slide->id) }}" class="btn btn-link">View</a>
					</td>
					<td width="20px">
						<a href="{{ route('administrator.slide.edit', $slide->id) }}" class="btn btn-link">Edit</a>
					</td>
					<td width="20px">
						{!! Form::open(['route' => ['administrator.slide.destroy', $slide->id], 'method' => 'DELETE']) !!}
							<button class="btn btn-link">Delete</button>							
						{!! Form::close() !!}
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!! $slides->render() !!}
	</div>
	<div class="col-xs-12 col-sm-4">
		@include('backend.slideshow.partial.aside')
	</div>
@endsection