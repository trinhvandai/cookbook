@extends('master')
@section('title', 'View all tickets')
@section('content')
<div class="container col-md-8 col-md-offset-2">
<div class="panel panel-default">
<div class="panel-heading">

<h2> Tickets </h2>
</div>
@if ($tickets->isEmpty())
<p> There is no ticket.</p>
@else
<table class="table">
<thead>
<tr>
<th>ID</th>
<th>Title</th>
<th>Content</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@foreach($tickets as $ticket)
<tr>
<td>{!! $ticket->id !!} </td>
<td>{!! $ticket->title !!}</td>
<td>{!! $ticket->content!!}</td>
<td>{!! $ticket->status ? 'Pending' : 'Answered' !!}</td>
<td><a href="{{action('TicketsController@show', $ticket['id'])}}" class="btn btn-delete">show</a>
    <a href="{{action('TicketsController@edit', $ticket['id'])}}" class="btn btn-danger">edit</a>
    <button action="{{ route('tickets.destroy',$ticket->id) }}" method="POST" type="submit" class="btn btn-danger">Delete</button>
</td>
</tr>
@endforeach
</tbody>
</table>
@endif
</div>
</div>
@endsection