@extends('website.layouts.default')

@section('content-css2')
    <link rel="stylesheet" href="{{ asset('website/vendors/datatable/css/jquery.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/vendors/datatable/css/responsive.dataTables.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('website/vendors/datatable/css/buttons.dataTables.min.css') }}" />
@endsection

@section('content')
    {{-- @can('can_add_product') --}}
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h3 class="m-0">Requested User</h3>
                    </div>
                    <div class="serach_field_2">
                        <div class="search_inner">
                            <form Active="#">
                                <div class="search_field">
                                    <input type="text" placeholder="Search here..." />
                                </div>
                                <button type="submit">
                                    <i class="ti-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="white_card_body">
                <div class="QA_section">

                    <div class="QA_table mb_30">
                        <table class="table lms_table_active">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Requested Role</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($requestedUsers as $requestedUser)
                                    <tr>
                                        {{-- <th scope="row">{{ $requestedUser->first_name }}</th> --}}
                                        <td>{{ $requestedUser->first_name }} {{ $requestedUser->last_name }}</td>
                                        <td>{{ $requestedUser->email }}</td>
                                        <td>{{ $requestedUser->role }}</td>


                                        <td>
                                            <div class="d-flex">
                                                <button class="btn btn-primary donation-action me-2"
                                                    data-id={{ $requestedUser->id }} action-name='update'>Accept</button>
                                                @include('website.component.modal.cancel-modal', [
                                                    'route' => 'cancel-user-register-request',
                                                    'id' => $requestedUser->id,
                                                ])

                                            </div>

                                        </td>
                                    </tr>
                                @empty
                                    <td colspan="5">No Data</td>
                                @endforelse
                            </tbody>
                        </table>
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
    <script>
        $(document).ready(function() {
            $(document).on('click', '.donation-action', function() {

                const user_id = $(this).attr("data-id");
                const actionName = $(this).attr("action-name");
                $('#user-id').val(user_id);
                $('#exampleModal').modal('show');
                $.ajax({
                    url: "{{ route('get-requested-user-details') }}",
                    data: {
                        user_id: user_id,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        console.log(response.first_name);
                        $("#user-info").html(
                            `
                                <h6><span class="fw-bold">Name: </span>${response.first_name} ${response.last_name}</h6>
                                <h6 class="mt-3"><span class="fw-bold">Email Address: </span>${response.email}</h6>
                                <h6 class="mt-3"><span class="fw-bold"> Requested Role: </span>${response.role}</6>
                                <h6 class="mt-3"><span class="fw-bold">Division: </span>${response.division.name}</6>
                                <h6 class="mt-3"><span class="fw-bold">District: </span>${response.district.name}</6>
                                <h6 class="mt-3"><span class="fw-bold">Thana: </span>${response.thana.name}</6>
                                <h6 class="mt-3"><span class="fw-bold">Mobile Number: </span>${response.mobile_number}</6>
                                  
                                 ${response.whats_app_number ?`<h6 class="mt-3"><span class="fw-bold">Whats Number: </span>${response.whats_app_number}</6>` : '' }
                                 ${response.gender ?`<h6 class="mt-3"><span class="fw-bold">Gender: </span>${response.gender}</6>` : '' }
                                 ${response.group ?.name ?`<h6 class="mt-3"><span class="fw-bold">Group Name: </span>${response.group.name}</6>` : '' }
                                  
                                 ${response.ward_no ?`<h6 class="mt-3"><span class="fw-bold">Ward No: </span>${response.ward_no}</6>` : '' }
                                 ${response.monitor_name ?`<h6 class="mt-3"><span class="fw-bold">Monitor Name: </span>${response.monitor_name}</6>` : '' }
                                    ${response.monitor_number ?`<h6 class="mt-3"><span class="fw-bold">Monitor Number: </span>${response.monitor_number}</6>` : '' }
                                        ${response.drector_name ?`<h6 class="mt-3"><span class="fw-bold">Drector Name: </span>${response.drector_name}</6>` : '' }
                                            ${response.director_number ?`<h6 class="mt-3"><span class="fw-bold">Director Number: </span>${response.director_number}</6>` : '' }
                                                ${response.address ?`<h6 class="mt-3"><span class="fw-bold">Address: </span>${response.address}</6>` : '' }
                                    

                                    `);
                    }
                });

            });
        });

        // delete confirmation
        // $('.show-confirm').click(function(event) {
        //     // console.log('click')
        //     let form = $(this).closest('form');
        //     event.preventDefault()

        //     Swal.fire({
        //         title: 'Are you sure?',
        //         text: "You won't be able to revert this!",
        //         icon: 'warning',
        //         showCancelButton: true,
        //         confirmButtonColor: '#3085d6',
        //         cancelButtonColor: '#d33',
        //         confirmButtonText: 'Yes, delete it!'
        //     }).then((result) => {
        //         if (result.isConfirmed) {
        //             form.submit()
        //             Swal.fire(
        //                 'Deleted!',
        //                 'Your file has been deleted.',
        //                 'success'
        //             )
        //         }
        //     })
        // })
    </script>
@endsection
