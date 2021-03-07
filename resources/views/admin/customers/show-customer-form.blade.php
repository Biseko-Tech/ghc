<x-admin-layout>
  <div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Customer Details</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('admin.customers') }}">Customers</a></li>
                <li class="breadcrumb-item active">Details</li>
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
              <div class="col-md-4">
    
                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <h3 class="profile-username text-center">{{ $customer->customerName }}</h3>
                    @if ($customer->endDate >= today() )
                    <p class="text-muted text-center">
                      @if (today()->diffInDays($customer->endDate) == 0 || today()->diffInDays($customer->endDate) == 1)
                        {{ today()->diffInDays($customer->endDate) }} Day Remained
                      @else
                        {{ today()->diffInDays($customer->endDate) }} Days Remained
                      @endif
                    </p>
                    @else
                    <p class="text-muted text-center">
                      @if (today()->diffInDays($customer->endDate) == 0 || today()->diffInDays($customer->endDate) == 1)
                        {{ today()->diffInDays($customer->endDate) }} Day Exceeded
                      @else
                        {{ today()->diffInDays($customer->endDate) }} Days Exceeded
                      @endif
                    </p>
                    @endif
                    <ul class="list-group list-group-unbordered mb-3">
                      <li class="list-group-item">
                        <b>Address:</b><a class="float-right">{{ $customer->customerAddress }}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Email:</b> <a class="float-right">{{ $customer->customerEmail }}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Mobile Phone:</b> <a class="float-right">{{ $customer->mobilePhone }}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Home Phone:</b> <a class="float-right">{{ $customer->homePhone }}</a>
                      </li>
                      <li class="list-group-item">
                        <b>Work Phone:</b> <a class="float-right">{{ $customer->workPhone }}</a>
                      </li>
                    </ul>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
                <a href="{{ route('admin.customers') }}" class="btn btn-secondary btn-block">
                  <b>Go Back</b>
                </a>
              </div>
              <!-- /.col -->
              <div class="col-md-8">
                <!-- About Me Box -->
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">More Details</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="row">
                      <div class="col-md-6">
                        <div class="card-body">
                          <strong><i class="fas fa-home mr-1"></i>Nationality</strong>
                          <p class="text-muted">
                            {{ $customer->customerNation }}
                          </p>
          
                          <hr>
                          <strong><i class="fas fa-map-marker-alt mr-1"></i>Location</strong>
                          <p class="text-muted">
                            {{ $customer->customerStreet}} - {{ $customer->customerWard}},
                            <br>{{ $customer->customerDistrict}} - {{ $customer->customerRegion }}
                          </p>
          
                          <hr>
                          <strong><i class="fas fa-info-circle mr-1"></i>Renting Details</strong>
                          <p class="text-muted">
                            <span class="tag tag-danger">Rent for {{ $customer->rentCategory }},</span>
                            <span class="tag tag-success">Commenced on {{ $customer->commencementDate->format('M j, Y') }}</span>
                            <span class="tag tag-info">and the ending date is on {{ $customer->endDate->format('M j, Y') }}.</span>
                            <span class="tag tag-warning">Payment is done {{ $customer->paymentCategory }}</span>
                          </p>
          
                          <hr>
                          <strong><i class="far fa-file-alt mr-1"></i> Note</strong>
                          <p class="text-muted">{{ $customer->note }}.</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="card-body">
                          <h3 class="profile-username text-center">{{ $customer->kinName }}</h3>
                          <p class="text-muted text-center">
                            {{ $customer->relationship}}
                          </p>
                          
                          <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                              <b>Address:</b><a class="float-right">{{ $customer->kinAddress }}</a>
                            </li>
                            <li class="list-group-item">
                              <b>Email:</b> <a class="float-right">{{ $customer->kinEmail }}</a>
                            </li>
                            <li class="list-group-item">
                              <b>Mobile Phone:</b> <a class="float-right">{{ $customer->mobileNumber }}</a>
                            </li>
                            <li class="list-group-item">
                              <b>Home Phone:</b> <a class="float-right">{{ $customer->phoneNumber }}</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                <!-- /.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </section>
    <!-- /.content -->
</div>

</x-admin-layout>