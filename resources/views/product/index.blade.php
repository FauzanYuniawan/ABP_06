<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Produk</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <script src="{{ asset('assets/jquery.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    </head>
    <body style="width:95%">
        <div class="row justify-content-center" style="margin-top:13%">
            <div class="col-4">
                <span class="float-left">{{ session('msg') }}</span>
                <a href="/product/create" class="btn btn-secondary float-right">Tambah</a><br /><br />
                <table class="table table-bordered table-striped">
                    <tr>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                    </tr>
                    @foreach($list as $d)
                    <tr>
                    <td>{{ $d->name }}</td>
                    <td>{{ $d->price }}</td>
                    <td>
                        <a href="/product/{{ $d->id }}/edit" class="btn btn-primary">Edit</a>
                        <form method="post" action="/product/{{ $d->id }}"
                            style="display:inline" onsubmit="return confirm('Yakin hapus?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </body>
</html>
