@extends('welcome')
@section('body')
    <div class="container">
        @livewireStyles()
        <h3 style="color:blue;">New Subject</h3>
        @livewire('subjects')
        @livewireScripts()
    </div>
@endsection
