@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">User</div>

                <div class="panel-body">
                   <table class="table table-responsive">
                       <tr>
                            <td>Nama</td> 
                            <td>Username</td> 
                            <td>address</td> 
                            <td>email</td> 
                            <td>phone</td> 
                            <td>web</td> 
                            <td>company</td> 
                            <td></td> 
                       </tr>
                       @foreach($data as $user)
                       <tr>
                            <td>{{$user['name']}}</td>
                            <td>{{$user['username']}}</td>
                            <td>
                                {{$user['address']['street']}}
                                {{$user['address']['suite']}}
                                {{$user['address']['city']}}
                                {{$user['address']['zipcode']}}
                            </td> 
                            <td>{{$user['email']}}</td> 
                            <td>{{$user['phone']}}</td> 
                            <td>{{$user['website']}}</td> 
                            <td>{{$user['company']['catchPhrase']}}
                                {{$user['company']['bs']}}
                            </td>  
                            <td><a href="{{url('user/detail/'.$user['id'])}}" class="btn btn-primary">Detail</a></td> 
                       </tr>
                       @endforeach
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
