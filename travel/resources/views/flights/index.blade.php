@extends('layouts.admin')

@section('title', 'Uçuşlar')

@section('content')

@if(!$flights->isEmpty())
<table class="table">
    <thead>
      <tr>
        <th scope="col">Şirkətin adı</th>
        <th scope="col">Təyyarə</th>
        <th scope="col">Eniş tarixi</th>
        <th scope="col">Qiymət</th>
        <th scope="col">Redaktə et</th>
        <th scope="col">Sil</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($flights as $flight)
        <tr>
            <th scope="row">{{ $flight['company'] }}</th>
            <td>{{ $flight['plane'] }}</td>
            <td>{{ $flight['arrival'] }}</td>
            <td>{{ $flight['price'] }}</td>
            <td><a href="/flights/{{ $flight['id'] }}/edit">Redaktə et</a></td>
            <td>
                <form method="POST" action="/flights/{{ $flight['id'] }}">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="Sil" onclick="return confirm('Silinsin?')" class="btn btn-primary btn-sm">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  @else
      <h5 class="text-center">Uçuş yoxdur!</h5>
  @endif
@endsection