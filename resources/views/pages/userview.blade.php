@extends('layouts.main')

@section('content')

<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
<thead>
  <tr>
    <th class="th-sm">Name
    </th>
    <th class="th-sm">Email
    </th>
    <th class="th-sm">Address
    </th>
    <th class="th-sm">Telephone Number
    </th>

  </tr>
</thead>
<tbody>
  @foreach($users as $u)
  <tr>
    <td>{{$u -> name}}</td>
    <td>{{$u -> email}}</td>
    <td>{{$u -> address}}</td>
    <td>{{$u -> tel}}</td>

  </tr>
@endforeach
</tbody>
<tfoot>
  <tr>
    <th>Name
    </th>
    <th>Email
    </th>
    <th>address
    </th>
    <th>Telephone number
    </th>

  </tr>
</tfoot>
</table>

<style media="screen">
table.dataTable thead .sorting:after,
table.dataTable thead .sorting:before,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_desc:before,
table.dataTable thead .sorting_desc_disabled:after,
table.dataTable thead .sorting_desc_disabled:before {
bottom: .5em;
}
</style>

<script type="text/javascript">
$(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});
</script>

@endsection
