@extends('templates.admin')

@section('title', 'Manage User')

@section('content')
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-datatable table-responsive">
                <div class="d-flex justify-content-between align-items-center p-3">
                    <h2 class="mb-0">Manage User</h2>
                    <a href="/add-user" class="btn btn-primary">+ Tambah Data</a>
                </div>
                <div class="container mb-4">
                    <table id="example" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Profile Picture</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ asset('storage/users/images/' . $user->profile_photo) }}" alt=""
                                        style="width: 65px; height: 65px; object-fit: cover;"></td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td class="" style="">
                                    <div class="d-inline-block text-nowrap">
                                        <a href="{{ route('user.edit', $user->id) }}"
                                            class="btn btn-sm btn-icon edit-portfolio"><i class="bx bx-edit"></i></a>
                                        <a href="{{ route('user.delete', $user->id) }}"
                                            class="btn btn-sm btn-icon delete-button" data-id="{{ $user->id }}"><i
                                                class="bx bx-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- @push('admin_scripts')
<script>
    $(document).on('click', '.delete-button', function(e) {
        e.preventDefault();
        var button = $(this);
        var id = button.data('id');

        if (id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {

                    $.ajax({
                        url: '/delete-user/' + id,
                        type: 'DELETE',
                        success: function(response) {
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            );
                            window.location.reload();
                        },
                        error: function(xhr, status, error) {
                            console.log('Error deleting user: ' + error);
                        }
                    });
                }
            });
        } else {
            console.log('No id value found');
        }
    });
</script>

@endpush --}}
