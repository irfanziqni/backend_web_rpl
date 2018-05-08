@extends('admin.layout.main')
@section('title', 'user-list | Admin')
@section('content')
  <div class="table-responsive">
    <table class="table">
      <thead>
        <th>#</th>
        <th>Nama</th>
        <th>status</th>
        <th>action</th>
      </thead>
      <tbody>
        @php
          $no = 1
        @endphp
        @foreach ($user as $data)
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->status }}</td>
            <td><a href="{{ route('users.create') }}"></a> </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
