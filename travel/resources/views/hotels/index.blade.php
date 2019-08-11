@extends('layouts.admin')

@section('title', 'Otellər')

@section('content')

@if(!$hotels->isEmpty())
<table class="table">
    <thead>
      <tr>
        <th scope="col">Otelin adı</th>
        <th scope="col">Şəhər</th>
        <th scope="col">Qiymət</th>
        <th scope="col">Redaktə et</th>
        <th scope="col">Sil</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($hotels as $hotel)
        <tr>
            <th scope="row">{{ $hotel['title'] }}</th>
            <td>{{ $hotel['city'] }}</td>
            <td>{{ $hotel['price'] }}</td>
            <td><a href="/hotels/{{ $hotel['id'] }}/edit">Redaktə et</a></td>
            <td>
                <form method="POST" action="/hotels/{{ $hotel['id'] }}">
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
      <h5 class="text-center">Otel yoxdur!</h5>
  @endif
@endsection