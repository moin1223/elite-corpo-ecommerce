@extends('website.layouts.default')

@section('content-css2')
    <link rel="stylesheet" href="{{ asset('website/vendors/datatable/css/jquery.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/vendors/datatable/css/responsive.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/vendors/datatable/css/buttons.dataTables.min.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
    {{-- @can('can_add_product') --}}
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h3 class="m-0">Users</h3>
                    </div>
                    <div class="serach_field_2">
                        <div class="">
                            <form method="GET" action="{{ route('get-seller-list') }}">
                                @csrf

                                <label class="form-label"><span
                                    class="text-danger font-bold ">*</span></label>
                            <select class="js-example-basic-single" name="group" style="hight: 200px; hight: 50px;">
                                <option>Select group</option>
                                @foreach ($groups as $group)
                                    <option value="{{ $group->name }}">{{ $group->name }}</option>
                                @endforeach
                            </select>


                                        <label class="form-label"><span
                                                class="text-danger font-bold ">*</span></label>
                                        <select class="js-example-basic-single" name="district" style="hight: 150px; hight: 50px;">
                                            <option>Select District</option>
                                            @foreach ($districts as $district)
                                                <option value="{{ $district->name }}">{{ $district->name }}</option>
                                            @endforeach
                                        </select>
                            
                                     <button class="btn btn-primary">Search</button>
                                    </div>
                                    @if (session('message'))
                                    <p class="text-danger">please select group or district!</p>
                                    @endif
                                </div>
                     

                                {{-- <div class="search_field">
                                    <input   name="group_name" type="text" placeholder="Search by group name..." />
                                </div>
                                <button type="submit">
                                    <i class="ti-search"></i>
                                </button> --}}
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="white_card_body">
                <div class="QA_section">
                    <div class="white_box_tittle list_header">
                        {{-- <h4>Users</h4> --}}
                        <div class="box_right d-flex lms_block">
                            <div class="add_button ms-2">
                                {{-- @can('can_add_product') --}}
                                {{-- <a href="{{ route('category.create') }}" class="btn_1" style="padding: 5px">
                                    Create
                                </a> --}}
                                {{-- @endcan --}}
                            </div>
                        </div>
                    </div>
                    <div class="QA_table mb_30">
                        <table class="table lms_table_active">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Mobile Number</th>
                                    <th scope="col">District</th>
                                    <!-- <th scope="col">Requested Role</th> -->
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        {{-- <th scope="row">{{ $requestedUser->first_name }}</th> --}}
                                        {{-- <td>{{ $user->first_name }} {{ $user->last_name }}</td> --}}
                                        <td>
                                            <a href="{{ route('user.show', $user) }}">
                                                {{ $user->user->first_name }} {{ $user->user->last_name }}
                                            </a>
                                        </td>
                                        <td>{{ $user->mobile_number }}</td>
                                        <td>{{$user->district->name  }}</td>
                                        {{-- <td>{{ $requestedUser->role }}</td> --}}


                                        <td>
                                            <div class="d-flex">
                                                {{-- <a href="" class="action_btn mr_10">
                                                    <i class="far fa-view"></i>
                                                </a> --}}
                                                @include('website.component.modal.delete-modal', [
                                                    'route' => 'user.destroy',
                                                    'id' => $user->id,
                                                ])

                                            </div>

                                        </td>
                                    </tr>
                                @empty
                                    <td colspan="5">No Data</td>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="mt-2">
                            {{ $users->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- @endcan --}}
    <!-- modal -->
    <div class="modal fade mt-5" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row justify-content-center mt-3">
                            <div class="col-md-11 custom-form">
                                <div class="d-flex justify-content-between">
                                    <h4 class="text-dark">User Info</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="text-dark mt-4" id="user-info">

                                </div>
                                <form method="POST" action="{{ route('accept-user-register-request') }}"
                                    class="row g-3 mt-3 text-dark">
                                    @csrf
                                    <input id="user-id" type="hidden" name="user_id">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mt-2">Confirm</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content-js')
    <script src="{{ asset('website/vendors/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('website/vendors/datatable/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('website/vendors/datatable/js/dataTables.buttons.min.js') }}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@endsection
