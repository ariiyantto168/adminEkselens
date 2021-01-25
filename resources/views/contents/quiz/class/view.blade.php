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
                                    <td width="20%"><strong> Create Class Quiz</strong></td>
                                    <td>{{ $clsquiz->nilai }}</td> 
                                </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>
                  {{-- open code for quiz --}}
                  <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            Quiz Class
                        </h3>
                       
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                @foreach ($clsquiz->classquizdetails as $idx => $quiz)
                                <tr>
                                    <td width="20%"><strong>No</strong></td>
                                    <td>{{ $idx+1 }}</td> 
                                </tr>
                                <tr>
                                    <td width="20%"><strong>Question</strong></td>
                                    <td>{{ $quiz->question }}</td> 
                                </tr>
                                <tr>
                                    <td width="20%"><strong> Answer Quiz</strong></td>
                                    <td>{{ $quiz->answer }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                  {{-- close code for quiz --}}
              </div>
          </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>