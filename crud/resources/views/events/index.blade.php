@extends('events.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Event Manager App</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('events.create') }}"> Create New Event</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($events as $event)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $event->name }}</td>
            <td>{{ $event->detail }}</td>
            <td>
                <form action="{{ route('events.destroy',$event->id) }}" method="POST">
   
                    <a class="btn btn-primary" href="{{ route('events.show',$event->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('events.edit',$event->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-primary">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $events->links() !!}
      
@endsection