<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Status Orders</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Orders</li>
              <li class="breadcrumb-item active"><a href="{{ url('lecture/categories') }}">status Orders</a></li>
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
                <h3 class="card-title">Status Orders</h3>
            </div>
            <div class="card-body">
                <form role="form" class="form-horizontal" method="get">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <div class="row">
                                <div class="col-sm-2">
                                    <!-- select -->
                                    <div class="form-group">
                                    <label>Status Order</label>
                                    <select class="form-control">
                                        <option>Pending</option>
                                        <option>Success</option>
                                        <option>Failed</option>
                                        <option>Expired</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <!-- select -->
                                    <div class="form-group">
                                    <label>Status Payment</label>
                                    <select class="form-control">
                                        <option>Unpaid</option>
                                        <option>Paid</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <small><br> </small>
                                    <button type="submit" class="btn btn-box-tool" title="Search"><i class="fa fa-search"></i></button>
                                  </div>
                            </div>
                        </tr>
                    </thead>
                    <tbody>
                        
                  </tbody>                    
                </table>
                </form>
            </div>
            <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                          <th>No</th>
                          <th>Date Orders</th>
                          <th>Name Users</th>
                          <th>Name Class</th>
                          <th>Number Purchase Order</th>
                          <th>Status Order</th>
                          <th>Status Payment</th>
                          <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        
                  </tbody>                    
                </table>
            </div>
        </div>  
    
      </div>
    </section>
  </div>

