@extends('dashboard.layout.app')
@section('content')
    

 
      <!--breadcrumb-->

				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">

					<div class="breadcrumb-title pe-3">Dashboard</div>

					<div class="ps-3">

						<nav aria-label="breadcrumb">

							<ol class="breadcrumb mb-0 p-0">

								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>

								</li>

								<li class="breadcrumb-item active" aria-current="page">Analysis</li>

							</ol>

						</nav>

					</div>

					<div class="ms-auto">

						<div class="btn-group">

							<button type="button" class="btn btn-outline-primary">Settings</button>

							<button type="button" class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>

							</button>

							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>

								<a class="dropdown-item" href="javascript:;">Another action</a>

								<a class="dropdown-item" href="javascript:;">Something else here</a>

								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>

							</div>

						</div>

					</div>

				</div>

				<!--end breadcrumb-->

     

        <div class="row">

          <div class="col-xxl-8 d-flex align-items-stretch">

            <div class="card w-100 overflow-hidden rounded-4">

              <div class="card-body position-relative p-4">

                <div class="row">

                  <div class="col-12 col-sm-7">

                    <div class="d-flex align-items-center gap-3 mb-5">

                      <img src="{{asset('dashboard/assets/images/avatars/01.png')}}" class="rounded-circle bg-grd-info p-1"  width="60" height="60" alt="user">

                      <div class="">

                        <p class="mb-0 fw-semibold">Welcome back</p>

                        <h4 class="fw-semibold mb-0 fs-4 mb-0">Jhon Anderson!</h4>

                      </div>

                    </div>

                  

                  </div>

                  <div class="col-12 col-sm-5">

                    <div class="welcome-back-img pt-4">

                       <img src="{{asset('dashboard/assets/images/gallery/welcome-back-3.png')}}" height="180" alt="">

                    </div>

                  </div>

                </div><!--end row-->

              </div>

            </div>

          </div>

        </div>

     <div class="overlay btn-toggle"></div>


@endsection