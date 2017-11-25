@include('inc.header')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
    <div class="row">
        <legend>Data Tipe Ruang </legend> &nbsp; &nbsp;
         
            <table class="table table-striped table-hover table-bordered">
                <thead class="thead-dark">
                    <tr>
                      <th>No</th>
                      <th>Nama Tipe</th>
                      <th>Keterangan</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>

                    @if(count($types) > 0)
                        @foreach($types->all() as $key => $type)

                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $type->name }}</td>
                                <td>{{ $type->slug  }}</td>
                                <td>
                                    
                                    <a href="" class="btn btn-primary" type="button"><i class="fa fa-pencil"></i></a> <br>
                                    <form action="" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                    
                                </td>
                            </tr>

                        @endforeach
                    @endif
                  </tbody>
            </table> 
        </div>
</div>

@include('inc.footer')