@extends('welcome')
@section('body')
    <div class="container">
        @livewireStyles()
        <h3 style="color:blue;">New Addmission</h3>
        @livewire('newadmissions')
        @livewireScripts()
    </div>
@endsection
