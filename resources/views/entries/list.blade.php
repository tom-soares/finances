@extends('layouts.app')

@section('content')

 <div class="container">
  <h2>Lançamentos</h2>
  <table class="table">
   <tr>
    <th>ID</th>
    <th>Descrição</th>
    <th>Valor</th>
   </tr>
   @foreach($entries as $entry)
    <tr>
     <td>{{ $entry->id_entry}}</td>
     <td>{{ $entry->description}}</td>
     <td>{{ $entry->value}}</td>
    </tr>
   @endforeach
  </table>
 </div>

@endsection

