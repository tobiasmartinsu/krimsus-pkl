@extends('layout.krimsus')
@section('title')
    Halaman Kegiatan Harian Unit 1
@endsection
@section('content')

    <div class="col">
        <a href="/kegiatanharian/create" class="btn btn-info btn-md my-3">Tambah Kegiatan</a>
    </div>
    <div class="row">
        @forelse ($kegiatanharian as $item)
        <div class="col-4">
            <div class="card">
                <img class="card-img-top" src="{{asset('filekegiatanharian/' . $item->bukti_kegiatan)}}" style="height: 400px" alt="">
                <div class="card-body" style="height: 300px">
                    <h3>{{$item->nama_kegiatan}}</h3>
                    <p class="card-text">{{ Str::limit($item->detail_kegiatan,200) }}</p>
                    <a href="/kegiatanharian/{{$item->id}} " class="btn btn-outline-primary btn-block center">Lihat Lebih Lengkap</a>
                    <div class="row mt-3">
                        <div class="col">
                            <a href="/kegiatanharian/{{$item->id}}/edit" class="btn btn-warning btn-block">Edit</a>
                        </div>
                        <div class="col">
                            <form action="/kegiatanharian/{{$item->id}}" method="post" id="form-delete">
                            @csrf
                            @method('delete')
                            <button type="submit" id="show_confirm" class="btn btn-xs  btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>

                            </form>

                        </td>

                    </tr>
                    @empty
                    <tr colspan="3">
                        <td>No data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection

@section("script")
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
    let confirm = document.getElementById('show_confirm');
    let form = document.getElementById('form-delete');
    confirm.addEventListener("click", (event) => {
        event.preventDefault();
        Swal.fire({
            title: 'Yakin ingin hapus data?',
            text: "Anda akan kehilangan data ini",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Iya'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
                Swal.fire(
                    'Sukses!',
                    'Data anda sudah terhapus',
                    'success'
                )
            }
        })
    })
   
</script>
@endsection