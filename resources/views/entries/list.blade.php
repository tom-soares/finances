@extends('layouts.app')

@section('content')

 <div class="container">
  <h2>Releases</h2>
  <table class="table">
   <tr>
    <th>ID</th>
    <th>Description</th>
    <th>Value</th>
    <th>Entry</th>
    <th>Action</th>

   </tr>
   @foreach($listagem as $entry)
    <tr>
     <td>{{ $entry->id_entry}}</td>
     <td>{{ $entry->description}}</td>
     <td>{{ $entry->value}}</td>
     <td>{{ $entry->name }}</td>
     <td>
         <input type="button" value="Remove" class="btn btn-danger " onclick="location.href='{{ route('entries.destroy', ['id'=>$entry->id_entry]) }}'">
         <input type="button" value="Edit" class="btn btn-info " onclick="location.href='{{ route('entries.edit', ['id'=>$entry->id_entry]) }}'">
     </td>
    </tr>
   @endforeach
  </table>
 </div>

@endsection
