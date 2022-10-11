<div class="modal fade" id="modalForm" style="display: none; padding-right: 17px;"
 aria-modal="true" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                        
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email">
                        
                        <label for="Jenis_kelamin">Jenis Kelamin</label>
                        <select type="enum" class="form-control" name="jenis_kelamin" id="jenis_kelamin"></select>
                        
                        <label for="alamat">Alamat</label>
                        <select type="text" class="form-control" name="alamat" id="alamat"></select>

                        <label for="kelas_id">Kelas</label>
                        <select type="text" class="form-control" name="kelas_id" id="kelas_id"></select>

                        <label for="mapel_id">Mapel</label>
                        <select type="text" class="form-control" name="mapel_id" id="mapel_id"></select>
                        
                        <button type="submit" class="btn btn-success btn-flat btn-sm mt-2">Simpan</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>

    </div>

</div>