@extends('layouts.app')

@section('content')
<div class="container-fluid" id="banner">
    <div class="container-fluid text-center" id="fade">
                    @if(!(empty($users)))
                    <div class="table-responsive container">
                            <table class="table table-striped table-dark">
                                <thead>
                                    <tr class="">
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Date/Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                    <?php $index=1; ?>
                        @foreach($users as $user)
                                    <tr class="">
                                        <td> {{$index++}}</td>
                                        <td> {{$user->name}}</td>
                                        <td> {{$user->email}}</td>
                                        <td> {{$user->created_at}}</td>
                                    </tr>
                        @endforeach
                        </tbody>
                            </table> 
                        </div>
                    @else
                    <center>
                    <div class="card text-white bg-dark mb-3 w-50" style="padding:5%;">
                        
                         <div class="card-body">
                         <span style='font-size:100px;'>&#128530;</span><br>
                            <h5 class="card-title">No registered user yet!!!</h5>
                        </div>
                    </div>
                    </center>
                    @endif
                       
    </div>
</div>
@endsection