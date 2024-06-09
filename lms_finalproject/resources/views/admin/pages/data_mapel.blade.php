@extends('admin.main')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="text-center">Data Mapel</h3>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addMapelModal">
                    Tambah Data Mapel
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Nama Guru</th>
                                <th>Nama Mapel</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mapel as $m)
                                <tr class="text-center">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $m->guru->name }}</td>
                                    <td>{{ $m->name }}</td>
                                    <td class="d-flex gap-1 justify-content-center">
                                        <button class="btn btn-warning text-white btn-MapelEdit" data-id="{{ $m->id }}" data-toggle="modal" data-target="#editMapelModal">Update</button>
                                        <button class="btn btn-danger btn-MapelDelete" data-id="{{ $m->id }}">Hapus</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex">
                        {{ $mapel->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- modal tambah --}}
<div class="modal fade" id="addMapelModal" tabindex="-1" aria-labelledby="addMapelModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="addMapelForm" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addMapelModalLabel">Tambah Data Mapel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="guru">Nama Guru</label>
                        <select class="form-select @error('guru_id') is-invalid @enderror" id="guru" name="guru_id">
                            <option value="Pilih guru">Pilih guru</option>
                            @foreach($guru as $g)
                                <option value="{{ $g->id }}">{{ $g->name }}</option>
                            @endforeach
                            @error('guru_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama Mapel</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">Gambar</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- modal ubah --}}
<div class="modal fade" id="editMapelModal" tabindex="-1" aria-labelledby="editMapelModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form id="editMapelForm" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editMapelModalLabel">Edit Data Mapel</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="editMapelId" name="id">
                    <div class="form-group">
                        <label for="editGuruId">Nama Guru</label>
                        <select class="form-select" id="editGuruId" name="guru_id">
                            <option value="Pilih guru">Pilih guru</option>
                            @foreach ($guru as $g)
                                <option value="{{ $g->id }}">{{ $g->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editMapelName">Nama Mapel</label>
                        <input type="text" class="form-control" id="editMapelName" name="name">
                    </div>
                    <div class="form-group">
                        <label for="editMapelImage">Gambar</label>
                        <input type="file" class="form-control" id="editMapelImage" name="image">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection