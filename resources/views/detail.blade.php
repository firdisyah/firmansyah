@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.0-beta.2.rc.2/leaflet.css">
<style>
     #mapid { height: 500px; }
   </style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User</div>

                <div class="panel-body">
                   <table class="table">
                       <tr>
                            <td>Nama</td> 
                            <td>Username</td> 
                            <td>address</td> 
                            <td>email</td> 
                            <td>phone</td> 
                            <td>web</td> 
                            <td>company</td> 
                       </tr>
                       <tr>
                            <td>{{$data['name']}}</td>
                            <td>{{$data['username']}}</td>
                            <td>
                                {{$data['address']['street']}}
                                {{$data['address']['suite']}}
                                {{$data['address']['city']}}
                                {{$data['address']['zipcode']}}
                            </td> 
                            <td>{{$data['email']}}</td> 
                            <td>{{$data['phone']}}</td> 
                            <td>{{$data['website']}}</td> 
                            <td>{{$data['company']['catchPhrase']}}
                                {{$data['company']['bs']}}
                            </td> 
                       </tr>
                   </table>
                </div>
                 <div id="mapid" style="width: 600px; height: 400px;"></div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.0-beta.2.rc.2/leaflet.js"></script>
   <script>
var lat = "{{$data['address']['geo']['lat']}}";
var long = "{{$data['address']['geo']['lng']}}";
// center of the map
var center = [long,lat];

// Create the map
var map = L.map('mapid').setView(center, 12);

// Set up the OSM layer
L.tileLayer(
  'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 3
  }).addTo(map);

// add a marker in the given location
L.marker(center).addTo(map);

</script>

@endsection
