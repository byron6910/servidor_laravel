@extends("layouts.app")

@section('content') 

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12">
                <h1>Usuarios</h1>       
                <ul>
                    @foreach($users as $user)
                        <li>{{$user->name}}</li>
                    @endforeach
                </ul>            
            </div>
        </div>
    </div>


@endsection