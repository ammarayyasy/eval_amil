@extends('layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Form Evaluasi Amil</h1>
  </div>

  @if(session()->has('success'))
  <div class="alert alert-success  col-lg-9" role="alert">
    {{ session('success') }}
  </div>
  @endif

  <div class="table-responsive col-lg-9">
    <a href="/tambah-baru" class="btn btn-primary mb-3">Tambah Form Baru</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Amil</th>
          <th scope="col">Form Amil</th>
          <th scope="col">Form Atasan</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($forms as $form)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $form->nama }}</td>
          <td><a class="badge bg-info" href="/form/amil/{{ $form->id }}"><span data-feather="eye" class="align-text-bottom"></span></a></td>
          <td><a class="badge bg-info" href="/form/atasan/{{ $form->id }}"><span data-feather="eye" class="align-text-bottom"></span></a></td>
          <td>
            <a class="badge bg-info" href="/form/{{ $form->id }}"><span data-feather="eye" class="align-text-bottom"></span></a>
            {{-- <a class="badge bg-warning" href="#"><span data-feather="edit" class="align-text-bottom"></span></a> --}}
            <form action="/delete/form/{{ $form->id }}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle" class="align-text-bottom"></span></button>
            </form>
          </td>
        </tr>
        @endforeach

        {{-- <tr>
          <td>1</td>
          <td>Muhammmad Ammar Ayyasy</td>
          <td><a class="badge bg-info" href="/dashboard/posts/"><span data-feather="eye" class="align-text-bottom"></span></a></td>
          <td><a class="badge bg-info" href="/dashboard/posts/"><span data-feather="eye" class="align-text-bottom"></span></a></td>
          <td>
            <a class="badge bg-info" href="/dashboard/posts/"><span data-feather="eye" class="align-text-bottom"></span></a>
            <a class="badge bg-warning" href="/dashboard/posts/edit"><span data-feather="edit" class="align-text-bottom"></span></a>
            <form action="/dashboard/posts" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle" class="align-text-bottom"></span></button>
            </form>
          </td>
        </tr> --}}
      </tbody>
    </table>
  </div>

@endsection