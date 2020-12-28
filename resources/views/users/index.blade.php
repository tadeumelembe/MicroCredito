@extends('template.app')


@section('content')

<div class="page-content">
  <div class="container-fluid">

      <!-- start page title -->
      <div class="row">
          <div class="col-12">
              <div class="page-title-box d-flex align-items-center justify-content-between">
                  <h4 class="mb-0">Utilizadores</h4>

                  <div class="page-title-right">
                      <ol class="breadcrumb m-0">
                          <li class="breadcrumb-item"><a href="javascript: void(0);">Inícios</a></li>
                          <li class="breadcrumb-item active">utilizador</li>
                      </ol>
                  </div>

              </div>
          </div>
      </div>
      <!-- end page title -->



@if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif


<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-body">
            
            <div class="float-right pr-2 pb-2">
              <a href="javascript:void(0);" class="btn btn-success mb-2"><i class="mdi mdi-plus mr-2"></i>Adicionar Usuário</a>
          </div>
              <h4 class="card-title"></h4>
              <p class="card-title-desc">
              </p>

              <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
 <tr>
   <th>No</th>
   <th>Name</th>
   <th>Email</th>
   <th>Roles</th>
   <th width="280px">Action</th>
 </tr>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
    </td>
    <td>
       <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
       <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </td>
  </tr>
 @endforeach
</table>
</div>
</div>
</div> <!-- end col -->
</div> <!-- end row -->
</div>
</div>

{!! $data->render() !!}


@endsection
