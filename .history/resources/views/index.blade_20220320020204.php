@extends('layouts.default')
<style>
    th {
    
      
    }
    tr:nth-child(odd) td{
      background-color: #FFFFFF;
    }
    td {
      padding: 5px 10px;
      background-color: #EEEEEE;
      text-align: center;
    }
</style>
@section('title', 'index.blade.php')

@section('content')
<table>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>age</th>
    <th>nationality</th>
  </tr>
  @foreach ($items as $item)
  <tr>
    <td>
      {{$item->id}}
    </td>
    <td>
      {{$item->content}}
    </td>
    <td>
      {{$item->created_at}}
    </td>
    <td>
      {{$item->updated_at}}
    </td>
  </tr>
  @endforeach
</table>
@endsection