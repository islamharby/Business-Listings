@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Name : {{$listing->name}} <a href="/listings" class=" pull-right btn btn-default btn-xs" >Go Back</a></div>

                <div class="panel-body">   
                    <ul class="list-group">
                        <li class="list-group-item">Email : {{$listing->email}}</li>
                        <li class="list-group-item"><a href="{{$listing->website}}" target="_blank">Website : {{$listing->website}}</a></li>
                        <li class="list-group-item">Phone : {{$listing->phone}}</li>
                        <li class="list-group-item">Adress : {{$listing->address}}</li>
                        
                    </ul>
                    <div  class="well">
                        Bio : {{$listing->bio}}
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection
