<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/account-settings.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landingpage.css') }}">
</head>
<body>
    @include('siswa.partials.navbar')
    <div class="container mt-5">
        <div class="account-settings">
            <h2 class="text-center">Pengaturan Akun</h2>
            <form>
                <div class="row mb-3">
                    <div class="col-md-4 profile-photo">
                        <img class="profile-img" src="{{ asset('images/profile-picture.png') }}" alt="Profile Picture">
                        <input type="file" class="form-control mt-2" accept="image/*">
                        <small class="form-text text-muted">Ukuran gambar harus di bawah 1MB dan rasio gambar harus 1:1</small>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="full-name">Nama Lengkap</label>
                                <input type="text" class="form-control" id="full-name" placeholder="Nama Lengkap">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="nik">NIK</label>
                                <input type="text" class="form-control" id="nik" placeholder="NIK">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Masukkan Email">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone">No Telp</label>
                                <input type="text" class="form-control" id="phone" placeholder="Masukkan No Telepon">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="gender">Jenis Kelamin</label>
                                <select class="form-control" id="gender">
                                    <option value="">Pilih</option>
                                    <option value="male">Laki-laki</option>
                                    <option value="female">Perempuan</option>
                                </select>
                                <small id="gender-help" class="form-text text-muted">Pilih jenis kelamin Anda.</small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="religion">Agama</label>
                                <select class="form-control" id="religion">
                                    <option value="">Pilih</option>
                                    <option value="islam">Islam</option>
                                    <option value="christian">Kristen</option>
                                    <option value="catholic">Katolik</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="buddha">Buddha</option>
                                    <option value="confucian">Konghucu</option>
                                </select>
                                <small id="religion-help" class="form-text text-muted">Pilih agama Anda.</small>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="graduate">Lulusan</label>
                                <input type="text" class="form-control" id="graduate" placeholder="Masukkan Lulusan SMP">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="address">Alamat</label>
                                <input type="text" class="form-control" id="address" placeholder="Masukkan Alamat Lengkap">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
