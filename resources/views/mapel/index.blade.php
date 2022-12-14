@extends('layout.app')

@section('title')
    Mapel
@endsection

@section('content')
    <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Data Mapel</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active">Mapel</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Mapel</h3>
                        <div class="card-tools">
                            
                            <button type="button" onclick="addForm('{{route('mapel.store')}}')" class="btn btn-tool"><i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover text-nowrap" style = "width:100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                        </table>
                    </div>

                </div>

            </section>
            @includeIf('mapel.form')
@endsection

@push('script')
    <script>

        let table;

        $(function(){
            table = $('.table').DataTable({
                proccesing: true,
                autowidth: false,
                ajax: {
                    url: "{{route('mapel.data')}}"
                },
                columns: [
                    {data: 'DT_RowIndex'},
                    {data: 'nama'},
                    {data: 'aksi'},
                ],
            });
        });

        $('#modalForm').on('submit',function(e){
            if(! e.preventDefault()){
                $.post($('#modalForm').attr('action'),$('#modalForm form').serialize())
                .done((response) => {
                    $('#modalForm').modal('hide');
                    table.ajax.reload();
                    
                    iziToast.success({
                        title: "Sukses",
                        text: "Data Berhasil disimpan",
                        position: "topRight",
                    })
                })
                .fail((errors) => {
                    iziToast.error({
                        title: "Gagal",
                        text: "Data Gagal disimpan",
                        position: "topRight",
                    })
                    return;
                })
            }
        })

        function addForm(url){
            $('#modalForm').modal('show');
            $('#modalForm .modal-title').text('Tambah Data Kelas');
            
            $('#modalForm form')[0].reset();
            $('#modalForm form').attr('action', url);
            $('#modalForm [name=_method]').val('post');
        }

        function editData(url){
            $('#modalForm').modal('show');
            $('#modalForm .modal-title').text('Edit Data Kelas');

            $('#modalForm form')[0].reset();
            $('#modalForm form').attr('action', url);
            $('#modalForm [name=_method]').val('put');

            $.get(url)
                .done((response) => {
                    $('#modalForm [name=nama]').val(response.nama);
                })
                .fail((errors) => {
                    alert('Tidak Dapat Menampilkan Data');
                    return;
                })
        }

        function deleteData(url){
            swal({
                title: "Yakin ingin menghapus data ini?",
                text: "Jika klik OK! maka data akan terhapus!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    swal("Your imaginary file has been deleted!", {
                    icon: "success",
                    });
                } else {
                    swal("Your imaginary file is safe!");
                }
                });
            }
            
    </script>
@endpush