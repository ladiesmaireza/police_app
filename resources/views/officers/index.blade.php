@extends('components.master')

@section('content')
    {{-- SweetAlert untuk notifikasi sukses --}}
    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                Swal.fire({
                    icon: 'success',
                    title: '{{ session('success') }}',
                    showConfirmButton: false,
                    timer: 3000,
                    toast: true,
                    position: 'top-end'
                });
            });
        </script>
    @endif

    {{-- Judul halaman dan tombol tambah --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-semibold mb-0">Daftar Officer</h4>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createOfficerModal">
            Tambah Officer
        </button>
    </div>

    {{-- Tabel daftar officer --}}
    <table class="table table-striped" id="officersTable">
        <thead class="bg-primary text-white">
            <tr>
                <th>Nama</th>
                <th>Badge Number</th>
                <th>Rank</th>
                <th>Assigned Area</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($officers as $officer)
                <tr>
                    <td>{{ $officer->name }}</td>
                    <td>{{ $officer->badge_number }}</td>
                    <td>{{ $officer->rank }}</td>
                    <td>{{ $officer->assigned_area }}</td>
                    <td>
                        <button type="button" class="btn btn-warning btn-sm"
                            onclick="editOfficer({{ $officer->toJson() }})" data-bs-toggle="modal"
                            data-bs-target="#editOfficerModal">
                            Edit
                        </button>
                        <form action="{{ route('officers.destroy', $officer->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-danger btn-sm">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Modal Tambah Officer --}}
    <div class="modal fade" id="createOfficerModal" tabindex="-1" aria-labelledby="createOfficerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('officers.store') }}" method="POST" class="modal-content">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Officer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label>Nama</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required>
                        @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Badge Number</label>
                        <input type="text" name="badge_number" class="form-control @error('badge_number') is-invalid @enderror" required>
                        @error('badge_number') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Rank</label>
                        <input type="text" name="rank" class="form-control @error('rank') is-invalid @enderror" required>
                        @error('rank') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label>Assigned Area</label>
                        <input type="text" name="assigned_area" class="form-control @error('assigned_area') is-invalid @enderror" required>
                        @error('assigned_area') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Modal Edit Officer --}}
    <div class="modal fade" id="editOfficerModal" tabindex="-1" aria-labelledby="editOfficerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <form id="editOfficerForm" method="POST" class="modal-content">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title">Edit Officer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="editOfficerId" name="id">
                    <div class="mb-3">
                        <label>Nama</label>
                        <input type="text" id="editName" name="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Badge Number</label>
                        <input type="text" id="editBadgeNumber" name="badge_number" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Rank</label>
                        <input type="text" id="editRank" name="rank" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Assigned Area</label>
                        <input type="text" id="editAssignedArea" name="assigned_area" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Script JS untuk isi form edit --}}
    <script>
        function editOfficer(officer) {
            if (!officer) return;

            document.getElementById('editOfficerId').value = officer.id ?? '';
            document.getElementById('editName').value = officer.name ?? '';
            document.getElementById('editBadgeNumber').value = officer.badge_number ?? '';
            document.getElementById('editRank').value = officer.rank ?? '';
            document.getElementById('editAssignedArea').value = officer.assigned_area ?? '';

            // Atur form action
            document.getElementById('editOfficerForm').action = `/panel-control/officers/${officer.id}`;
        }
    </script>
@endsection
