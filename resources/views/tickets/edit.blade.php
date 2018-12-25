@extends('master')
@section('title', 'edit a  ticket')
@section('content')
<div class="container col-md-8 col-md-offset-2">
<div class="well well bs-component">
<form class="form-horizontal" method="post" action="{{action('TicketsController@update',$id)}}">
<input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
@foreach ($errors->all() as $error)
<p class="alert alert-danger">{{ $error }}</p>
@endforeach
@if (session('status'))
<div class="alert alert-success">
{{ session('status') }}
</div>
@endif
<input type="hidden" name="_token" value="{!! csrf_token() !!}">
<fieldset>
<legend> Edit a ticket</legend>
<div class="form-group">
<label for="title" class="col-lg-2 control-label">Title</label>
<div class="col-lg-10">
<input type="title" class="form-control" id="title" placeholder="Title"  value="{{$ticket->title}}" name="title">
</div>
</div>
<div class="form-group">
<label for="content" class="col-lg-2 control-label">Content</label>
<div class="col-lg-10">
<textarea class="form-control" rows="3" id="content" name="content" value="{{$ticket->content}}"></textarea>
<span class="help-block">Feel free to ask us any question.
</span>
</div>
</div>
<div class="form-group">
<div class="col-lg-10 col-lg-offset-2">
<button class="btn btn-default">Cancel</button>
<button type="submit" class="btn btn-primary">update</button>

</div>
</div>
</fieldset>
</form>
</div>
</div>
@endsection
