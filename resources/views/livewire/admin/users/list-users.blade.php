<div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Users</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Users</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-end mb-2">
                        <button wire:click.prevent="addNew" class="btn btn-primary">
                            <i class="fa fa-plus-circle mr-1"></i>
                            Add New
                        </button>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                      <th scope="col">#</th>
                                      <th scope="col">Name</th>
                                      <th scope="col">Position</th>
                                      <th scope="col">Email</th>
                                      <th scope="col">Mobile</th>
                                      <th scope="col">Options</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($users as $user)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->position }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{$user->mobile }}</td>
                                            <td>
                                                <a href="" wire:click.prevent="edit({{ $user }})">
                                                    <i class="fa fa-edit mr-3"></i>
                                                </a>
                                                <a href="" wire:click.prevent="confirmUserRemoval({{ $user->id }})">
                                                    <i class="fa fa-trash text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                      @endforeach
                                  </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    <!-- Add New User & Edit Modal -->
    <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <form wire:submit.prevent="{{ $showEditModal ? 'updateUser' : 'createUser' }}">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                            @if ($showEditModal)
                                <span>Edit User</span>
                            @else
                                <span>Add New User</span>
                            @endif
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row mb-2">
                            <div class="mb-3 col-lg-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" wire:model.defer="data.name" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="nameHelp" placeholder="Enter full name">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="position" class="form-label">Position</label>
                                <input type="text"wire:model.defer="data.position" class="form-control @error('position') is-invalid @enderror" id="position" aria-describedby="positionHelp" placeholder="Enter the holding position">
                                @error('position')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="mb-3 col-lg-6">
                                <label for="nation" class="form-label">Nationality</label>
                                <input type="text" wire:model.defer="data.nation" class="form-control @error('nation') is-invalid @enderror" id="nation" aria-describedby="nationHelp" placeholder="Enter your nationality">
                                @error('nation')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="region" class="form-label">Region</label>
                                <input type="text" wire:model.defer="data.region" class="form-control @error('region') is-invalid @enderror" id="region" aria-describedby="regionHelp" placeholder="Enter your region">
                                @error('region')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="mb-3 col-lg-6">
                                <label for="district" class="form-label">District</label>
                                <input type="text" wire:model.defer="data.district" class="form-control @error('district') is-invalid @enderror" id="district" aria-describedby="districtHelp" placeholder="Enter your district">
                                @error('district')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="ward" class="form-label">Ward</label>
                                <input type="text" wire:model.defer="data.ward" class="form-control @error('ward') is-invalid @enderror" id="ward" aria-describedby="wardHelp" placeholder="Enter your ward">
                                @error('ward')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="mb-3 col-lg-6">
                                <label for="street" class="form-label">Street/Village</label>
                                <input type="text" wire:model.defer="data.street" class="form-control @error('street') is-invalid @enderror" id="street" aria-describedby="streetHelp" placeholder="Enter your street or village">
                                @error('street')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" wire:model.defer="data.address" class="form-control @error('address') is-invalid @enderror" id="address" aria-describedby="addressHelp" placeholder="Enter your address">
                                @error('address')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="mb-3 col-lg-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" wire:model.defer="data.email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" placeholder="Enter your emal address">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="mobile" class="form-label">Mobile</label>
                                <input type="number" wire:model.defer="data.mobile" class="form-control @error('mobile') is-invalid @enderror" id="mobile" aria-describedby="mobileHelp" placeholder="07 xxx xxx xxx">
                                @error('mobile')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="mb-3 col-lg-6">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" wire:model.defer="data.password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="passwordConfirmation" class="form-label">Confirm Password</label>
                                <input type="password" wire:model.defer="data.password_confirmation" class="form-control" id="passwordConfirmation" placeholder="Confirm password">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Cancel</button>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save mr-1"></i>
                            @if ($showEditModal)
                                <span>Update</span>
                            @else
                                <span>Save</span>
                            @endif
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this user?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Cancel</button>
                    <button type="button" wire:click.prevent="deleteUser" class="btn btn-danger"><i class="fas fa-trash mr-1"></i>Delete</button>
                </div>
            </div>
        </div>
    </div>

</div>
