<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Quiz Class</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Lecture</li>
              <li class="breadcrumb-item active"><a href="{{ url('quiz/quizclass') }}">Quiz Class</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Index</h3>
                <div class="float-right"><i class="fas fa-plus size:2x"></i> <a href="{{ url('quiz/quizclass/create-new') }}">Create New</a></div>

            </div>
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Created Quiz Class</th>
                          <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($classquiz as $idx => $cls)
                            <tr>
                              <td>{{$idx+1}}</td>
                              <td>{{$cls->users->name}}</td>
                              <td>
                                <a href="{{ url('quiz/quizclass/detail/'.$cls->idclassquiz) }}"><i class="fas fa-eye"></i></a>
                                {{-- <a href="{{ url('lecture/class/update/'.$class->idclass) }}"><i class="fas fa-edit"></i></a> --}}
                              </td>
                              <td></td>
                            </tr>
                        @endforeach
                  </tbody>                    
                </table>
            </div>
        </div>  
    
      </div>
    </section>
  </div>

{{-- <script>
  function btn_delete(idcategories){
    $('#idcategories').val(idcategories)
  }
</script> --}}

{{-- <script>

  function btn_delete(idcategories){
    
  }

</script> --}}