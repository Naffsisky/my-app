@extends('layouts.master')

@section('content')
<main class="container mt-4">
  <div class="row">
    <div class="col-lg-4">
      <div class="section kiri">
        <h2>Information</h2>

        @if(isset($notes))
            @foreach($notes as $note)
                <p>Title: {{ $note['title'] }}</p>
                <p>Tags: {{ $note['tags'] }}</p>
                <p>Body: {{ $note['body'] }}</p>
            @endforeach
        @else
            <p>No notes available</p>
        @endif
      </div>
    </div>
    <div class="col-lg-4">
      <div class="section tengah">
        <h2>What are you list today?</h2>
        <div class="row justify-content-center">
            <div class="col col-lg-6">
                <div class="card mb-4">
                <div class="card-body">
                    <textarea id="inputTodo" type="text" class="form-control mb-2"></textarea>
                    <button id="addTodo" class="btn btn-primary float-end">Tambah</button>
                </div>
                </div>
                <h4>My Agenda</h4>
                <ul id="todoList" class="list-group">
                  
                </ul>
            </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="section kanan">
        <h2>Menu & Tools</h2>
        <li><a href="#">Home</a></li>
        <li><a href="#">Todo List</a></li>
        <li><a href="#">Weather</a></li>
      </div>
    </div>
  </div>
</main>
@endsection