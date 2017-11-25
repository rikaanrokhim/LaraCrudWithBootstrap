@include('inc.header')

<div class="container">
        <div class="row">
            <div class="col-md-6">
                <form class="form-horizontal" method="POST" action="{{ route('room.store') }}">
                    {{ csrf_field() }}
                  <fieldset>
                    <legend>Input Data Ruangan</legend>
                    <div class="form-group">
                      <label for="" class="col-lg-2 control-label">Nama Ruang</label>
                      <div class="col-lg-10">
                        <input type="text" name="name" class="form-control" >
                      </div>
                    </div>

                    
                    <div class="form-group">
                        <label for="" class="col-lg-2 control-label">Tipe Ruang</label>
                         <div class="col-lg-10">
                            <select class="form-control" name="type_id" id="">
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}"> {{ $type->name }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                      <label for="" class="col-lg-2 control-label">Keterangan</label>
                      <div class="col-lg-10">
                        <textarea class="form-control" name="information"></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-lg-10 col-lg-offset-2">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('room.index') }}" class="btn btn-primary">Kembali</a>
                      </div>
                    </div>
                  </fieldset>
                </form>
            </div>
        </div>
    </div>

@include('inc.footer')