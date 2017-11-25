@include ('inc.header')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<ul class="list-group">
  <li class="list-group-item">
    <span class="tag tag-default tag-pill float-xs-right">Data Ruang</span> <br>
    <i class="fa fa-pencil"></i> &nbsp; Ditulis pada : {{ $room->created_at->diffForHumans() }} <br> 
    <i class="fa fa-pencil"></i> &nbsp; Diupdate pada : {{ $room->updated_at->diffForHumans() }}
  </li>
</ul>

<div class="card border-primary">
  <div class="card-body">
    <blockquote class="card-blockquote">
      <p>Nama Ruang : {{ $room->name }}</p>
      <p>Tipe Ruang : {{ $room->type_id }}</p>
      <p>Informasi  : {{ $room->information }}</p>
      <footer>Detail Data Ruang <cite title="Source Title">RSU Ar-Rokhim</cite></footer>
    </blockquote>
  </div>
</div>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="{{ route('room.index') }}" type="button" class="btn btn-primary"><i class="fa fa-arrow-left fa-lg" aria-hidden="true"></i></a>

@include('inc.footer')


