@extends('home')
@section('content')

<style type="text/css">
.btn{
    padding: 6px 12px !important;
    height: 35px !important;
}

.pagination {
    padding-left: 0;
    margin: 0 !important;
    border-radius: 4px;
</style>

<div class="search-form">
@include('userss._search')
</div>


<br>

<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Manage Users</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="row">
				  <div class="col-md-12 col-sm-12 col-xs-12">

                  <div class="x_content">
                  <div class="table-responsive">
	                    <table id="datatable" class="table table-striped table-bordered table-hover">
			                      <thead>

			                        <tr>

									<th scope="col" style="width: 10% !important">
								     	Image
									</th>

									<th scope="col" style="width: 20% !important">
										Name
									</th>

									<th scope="col" style="width: 10% !important">
								     	Username
									</th>

									<th scope="col" style="width: 20% !important">
										Email
									</th>

									<th scope="col" style="width: 10% !important">
										User type
									</th>

									<th scope="col" style="width: 10% !important">
										Action
									</th>
							
			                    </tr>
			                  </thead>

			                  <tbody>
			                  	@foreach($models as $model)
			                      			<tr>
			                      				<td>
													<img src="{{asset('public/images/users/'.$model->image) }}" alt="Profile Image" width="50" height="50" onerror="this.src='{{asset('public/images/users/not_found.png') }}'"/>
											    </td>

												<td>
													<strong style="color: #545454">{{$model->name}}</strong>
											    </td>

												<td>
													<strong style="color: #545454">{{$model->username}}</strong>
												</td>

												<td>
													<strong style="color: #545454">{{$model->email}}</strong>
												</td>

												<td>
													<strong style="color: #545454">{{$model->user_type}}</strong>
												</td>

												<td>
													<a href="{{ route('userss.edit', $model->id) }}" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Edit">Edit</a>
												</td>
											</tr>
								@endforeach
			                  </tbody>
	                    </table>
                    </div>
                </div>
            </div>
        </div>

                <div class="row">
				  <div class="col-md-12 col-sm-12 col-xs-12 text-center">
				  	{{ $models->render() }}
				  </div>
				</div>


            </div>
        </div>
    </div>
</div>
@endsection