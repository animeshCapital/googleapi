@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    @if($user->address)    
                        <a href="">Update Address</a>
                        <table id="address">
                                <tr>
                                    <td class="label">Street address  ::</td>
                                <td class="slimField">{{$user->address->address1}}</td>
                                    <td class="wideField" colspan="2"> {{$user->address->address2}}</td>
                                </tr>
                                <tr>
                                    <td class="label">City  ::</td>
                                    <td class="wideField" colspan="3">{{$user->address->city}}</td>
                                </tr>
                                <tr>
                                    <td class="label">State  ::</td>
                                    <td class="slimField">{{$user->address->state}}</td>
                                    <td class="label">Zip code  ::</td>
                                    <td class="wideField">{{$user->address->zip_code}}</td>
                                </tr>
                                <tr>
                                    <td class="label">Country  ::</td>
                                    <td class="wideField" colspan="3">{{$user->address->country}}</td>
                                </tr>
                            </table>
                    @else
                        <a href="{{route('address')}}">Add Address</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
