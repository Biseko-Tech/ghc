<div>
    @if($updateMode)
        @include('livewire.admin.customers.update-customer-form')
    @else   
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Customers</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Customers</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><i class="fa fa-check-circle mr-2"></i></strong>
                 {{ session()->get('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-end mb-2">
                        <a href="{{ route('admin.customers.create') }}">
                            <button class="btn btn-primary">
                                <i class="fa fa-plus-circle mr-1"></i>
                                Add New
                            </button>
                        </a>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Name</th>
                                      <th scope="col">Mobile</th>
                                      <th scope="col">Address</th>
                                      <th scope="col">Commenced</th>
                                      <th scope="col">Ending</th>
                                      <th scope="col">Rent For</th>
                                      <th scope="col">Status</th>
                                      <th scope="col">Options</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($customers as $customer)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $customer->customerName }}</td>
                                            <td>{{ $customer->mobilePhone }}</td>
                                            <td>{{ $customer->customerAddress }}</td>
                                            <td>{{ $customer->commencementDate->format('M j, Y') }}</td>
                                            <td>{{ $customer->endDate->format('M j, Y') }}</td>
                                            <td>{{ $customer->rentCategory }}</td>
                                            @if ($customer->endDate < today())
                                            <td><span class="bg-danger px-1 rounded">Not Paid</span></td>
                                            @else
                                            <td><span class="px-1 rounded">{{ $customer->status }}</span></td>
                                            @endif
                                            <td>
                                                <a href="" wire:click.prevent="edit({{ $customer }})">
                                                    <i class="fa fa-edit mr-2"></i>
                                                </a>
                                                <a href="/admin/customers/{{ $customer->id }}">
                                                    <i class="fa fa-eye mr-2"></i>
                                                </a>
                                                <a href="" wire:click.prevent="destroy({{ $customer->id }})">
                                                    <i class="fa fa-trash text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                  </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex justify-content-center">
                            {{ $customers->links() }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    @endif

</div>
