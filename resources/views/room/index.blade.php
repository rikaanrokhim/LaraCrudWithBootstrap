@include('inc.header')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
    <div class="row">
        <legend>Data Ruangan
          <a href="{{ route('room.create') }}" style="margin-left: 900px; font-size: 15px;"> tambah data </a> 
        </legend>
            <table class="table table-striped table-hover table-bordered">
                <thead class="thead-dark">
                    <tr>
                      <th>No</th>
                      <th>Nama Ruang</th>
                      <th>Tipe Ruang</th>
                      <th>Keterangan</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>

                    @if(count($rooms) > 0)
                        @foreach($rooms->all() as $key => $room)

                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $room->name }}</td>
                                <td>{{ $room->type_id  }}</td>
                                <td>{{ $room->information }}</td>
                                <td>
                                    
                                    <a href="{{ route('room.edit', $room) }}" class="btn btn-primary" type="button" style="margin-left: 50px;"><i class="fa fa-pencil"></i></a> <br>
                                  
                                    <form action="{{ route('room.destroy', $room) }}" method="post" style="margin-top: -35px;">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                   
                                   <a href="{{ route('room.show', $room) }}" class="btn btn-success" type="button" style="margin-left: 100px; margin-top: -60px;"><i class="fa fa-eye"></i></a>

                                </td>
                            </tr>

                        @endforeach
                    @endif
                  </tbody>
                  
            </table> 
        </div>
        {!! $rooms->render() !!}
</div>

@include('inc.footer')