@extends('layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Form Baru</h1>
  </div>

  {{-- @if(session()->has('success'))
  <div class="alert alert-success  col-lg-9" role="alert">
    {{ session('success') }}
  </div>
  @endif --}}

  <div class="table-responsive col-lg-9">
    <form method="post" action="/tambah-baru">
      @csrf
      <div class="form-group row">
        <label for="wa_amil" class="col-4 col-form-label">WA amil</label> 
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-address-book"></i>
              </div>
            </div> 
            <input id="wa_amil" name="wa_amil" placeholder="WA amil..." type="number" class="form-control" value="{{ old('wa_amil') }}" oninput="limitLength(this)" required>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="wa_atasan" class="col-4 col-form-label">WA atasan</label> 
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-address-book-o"></i>
              </div>
            </div> 
            <input id="wa_atasan" name="wa_atasan" placeholder="WA atasan..." type="number" class="form-control" value="{{ old('wa_atasan') }}" oninput="limitLength(this)" required>
          </div>
        </div>
      </div> 
      <input type="hidden" name="nama" name="nama" value="Masukkan nama">
      <div class="form-group row mt-3">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>

  <script>
    function limitLength(element) {
      if (element.value.length > 15) {
        element.value = element.value.slice(0, 15);
      }
    }
  </script>

  

@endsection