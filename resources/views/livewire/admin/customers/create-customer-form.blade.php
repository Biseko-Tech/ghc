<div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                {{-- <h1 class="m-0 text-dark">Customers</h1> --}}
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="{{ route('admin.customers') }}">Customers</a></li>
                <li class="breadcrumb-item active">Create</li>
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
                    <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Customer Details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form role="form" wire:submit.prevent="createCustomer">
                                <h3>Personal Details:</h3>
                                <div class="row">
                                    <div class="col-sm-4">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <label for="customerName" class="form-label">Name</label>
                                            <input wire:model.defer="data.customerName" type="text" name="customerName" id="customerName" class="form-control @error('customerName') is-invalid @enderror" placeholder="Enter full name"/>
                                            @error('customerName')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <label for="customerEmail" class="form-label">Email</label>
                                            <input wire:model.defer="data.customerEmail" type="email" name="customerEmail" id="customerEmail" class="form-control @error('customerEmail') is-invalid @enderror" placeholder="Enter an email"/>
                                            @error('customerEmail')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <label>Date Of Birth</label>
                                            <div wire:ignore class="input-group date" id="birthDate" data-target-input="nearest" data-birthdate="@this">
                                                <input type="text" name="birthDate" id="birthDateInput" class="form-control datetimepicker-input @error('birthDate') is-invalid @enderror" data-target="#birthDate" placeholder="Pick the date of birth from the right icon"/>
                                                <div class="input-group-append" data-target="#birthDate" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                                                </div>
                                            </div>
                                            @error('birthDate')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <label for="customerNation" class="form-label">Nationality</label>
                                            <input wire:model.defer="data.customerNation" type="text" name="customerNation" id="customerNation" class="form-control @error('customerNation') is-invalid @enderror" placeholder="Enter nationality"/>
                                            @error('customerNation')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <label for="customerRegion" class="form-label">Region</label>
                                            <input wire:model.defer="data.customerRegion" type="text" name="customerRegion" id="customerRegion" class="form-control @error('customerNation') is-invalid @enderror" placeholder="Enter region"/>
                                            @error('customerRegion')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <label for="customerDistrict" class="form-label">District</label>
                                                <input wire:model.defer="data.customerDistrict" type="text" name="customerDistrict" id="customerDistrict" class="form-control @error('customerNation') is-invalid @enderror" placeholder="Enter district"/>
                                            @error('customerDistrict')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <label for="customerWard" class="form-label">Ward</label>
                                            <input type="text" wire:model.defer="data.customerWard" class="form-control @error('customerWard') is-invalid @enderror" id="customerWard" aria-describedby="customerWardHelp" placeholder="Enter ward">
                                            @error('customerWard')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <label for="customerStreet" class="form-label">Street/Village</label>
                                            <input type="text" wire:model.defer="data.customerStreet" class="form-control @error('customerStreet') is-invalid @enderror" id="customerStreet" aria-describedby="customerStreetHelp" placeholder="Enter street or village">
                                            @error('customerStreet')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <label for="customerAddress" class="form-label">Current Address</label>
                                            <input type="text" wire:model.defer="data.customerAddress" class="form-control @error('customerAddress') is-invalid @enderror" id="customerAddress" aria-describedby="customerAddressHelp" placeholder="Enter the current address">
                                            @error('customerAddress')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <label for="homePhone" class="form-label">Home Phone</label>
                                            <input wire:model.defer="data.homePhone" type="text" name="homePhone" class="form-control @error('homePhone') is-invalid @enderror" id="homePhone" placeholder="Enter phone number"/>
                                            @error('homePhone')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <label for="workPhone" class="form-label">Work Phone</label>
                                            <input wire:model.defer="data.workPhone" type="text" name="workPhone" class="form-control @error('workPhone') is-invalid @enderror" id="workPhone" placeholder="Enter work phone number"/>
                                            @error('workPhone')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <label for="mobilePhone" class="form-label">Mobile Phone</label>
                                            <input wire:model.defer="data.mobilePhone" type="text" name="mobilePhone" class="form-control @error('mobilePhone') is-invalid @enderror" id="mobilePhone" placeholder="Enter mobile phone number"/>
                                            @error('mobilePhone')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <h3>Next Of Kin Details:</h3>
                                <div class="row">
                                    <div class="col-sm-4">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <label for="kinName" class="form-label">Name</label>
                                            <input wire:model.defer="data.kinName" type="text" name="kinName" class="form-control @error('kinName') is-invalid @enderror" id="kinName" placeholder="Enter full name"/>
                                            @error('kinName')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <label for="relationship" class="form-label">Relationship</label>
                                            <input wire:model.defer="data.relationship" type="text" name="relationship" class="form-control @error('relationship') is-invalid @enderror" id="relationship" placeholder="Enter relationship"/>
                                            @error('relationship')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <label for="kinAddress" class="form-label">Address</label>
                                            <input wire:model.defer="data.kinAddress" type="text" name="kinAddress" class="form-control @error('kinAddress') is-invalid @enderror" id="kinAddress" placeholder="Enter address"/>
                                            @error('kinAddress')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <label for="phoneNumber" class="form-label">Phone Number</label>
                                            <input wire:model.defer="data.phoneNumber" type="text" name="phoneNumber" class="form-control @error('phoneNumber') is-invalid @enderror" id="phoneNumber" placeholder="Enter phone number"/>
                                            @error('phoneNumber')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <label for="mobileNumber" class="form-label">Mobile Number</label>
                                            <input wire:model.defer="data.mobileNumber" type="text" name="mobileNumber" class="form-control @error('mobileNumber') is-invalid @enderror" id="mobileNumber" placeholder="Enter mobile number"/>
                                            @error('mobileNumber')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <label for="kinEmail" class="form-label">Email</label>
                                            <input wire:model.defer="data.kinEmail" type="email" name="kinEmail" class="form-control @error('kinEmail') is-invalid @enderror" id="kinEmail" placeholder="Enter an email"/>
                                            @error('kinEmail')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <h3>Renting Details:</h3>
                                <div class="row">
                                    <div class="col-sm-6">
                                    <!-- select -->
                                        <div class="form-group">
                                            <label>Rent For</label>
                                            <select wire:model.defer="data.rentCategory" class="form-control @error('rentCategory') is-invalid @enderror">
                                                <option value="">Select</option>
                                                @foreach ($rentCategories as $rentCategory)
                                                    <option value="{{ $rentCategory->name }}">{{ $rentCategory->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('rentCategory')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <label>Commencement</label>
                                            <div wire:ignore class="input-group date" id="commencementDate" data-target-input="nearest" data-commencementdate="@this">
                                                <input type="text" class="form-control datetimepicker-input @error('commencementDate') is-invalid @enderror" id="commencementDateInput" data-target="#commencementDate" placeholder="Pick commencement date from the right icon"/>
                                                <div class="input-group-append" data-target="#commencementDate" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                                                </div>
                                                @error('commencementDate')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <label>Ending</label>
                                            <div wire:ignore class="input-group date" id="endDate" data-target-input="nearest" data-endingdate="@this">
                                                <input type="text" class="form-control datetimepicker-input @error('endDate') is-invalid @enderror" id="endingDateInput" data-target="#endDate" placeholder="Pick and ending date from the right icon"/>
                                                <div class="input-group-append" data-target="#endDate" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                                                </div>
                                                @error('endDate')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <!-- select -->
                                        <div class="form-group">
                                        <label>Payment Interval</label>
                                            <select wire:model.defer="data.paymentCategory" class="form-control @error('paymentCategory') is-invalid @enderror">
                                                <option value="">Select</option>
                                                @foreach ($paymentIntervals as $paymentInterval)
                                                    <option value="{{ $paymentInterval->name }}">{{ $paymentInterval->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('paymentCategory')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                    <!-- text input -->
                                        <div class="form-group">
                                            <label>Note</label>
                                            <div class="input-group date" id="note" data-target-input="nearest">
                                            <textarea wire:model.defer="data.note" class="form-control @error('note') is-invalid @enderror" placeholder="Enter the note here" id="note"></textarea>
                                            @error('note')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('admin.customers') }}">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times mr-1"></i>Cancel</button>
                                </a>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save mr-1"></i>Save</button>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

</div>


