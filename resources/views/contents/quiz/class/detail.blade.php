<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Class</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
              <li class="breadcrumb-item"> <a href="{{ url('class') }}">Class</a> </li>
              <li class="breadcrumb-item active">Detail</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-12">
                 @include('contents.allmessage')
                  <div class="card">
                      <div class="card-header">
                          <h3 class="card-title">
                              Detail
                          </h3>
                         
                      </div>
                      <div class="card-body">
                          <table class="table table-bordered">
                              <tbody>
                                  <tr>
                                      <td width="20%"><strong> Class Name</strong></td>
                                      <td>{{ $clsquiz->class->name }}</td> 
                                  </tr>
                                  <tr>
                                      <td width="20%"><strong> Create Class Quiz</strong></td>
                                      <td>{{ $clsquiz->users->name }}</td> 
                                  </tr>
                                  <tr>
                                    <td width="20%"><strong>Instructors Class</strong></td>
                                    <td>{{ $clsquiz->class->instructor }}</td> 
                                  </tr>
                                  <tr>
                                    <td width="20%"><strong>View Quiz Class</strong></td>
                                    <td>
                                      <a href="{{ url('quiz/quizclass/viewquizclass/'.$clsquiz->idclassquiz) }}"><i>View Quiz Class</i></a>
                                    </td> 
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>