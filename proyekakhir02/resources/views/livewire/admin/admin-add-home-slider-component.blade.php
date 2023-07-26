<div>
    <div class="container" style="padding: 30px 0;">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            Tambahkan Slide Baru
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('admin.homeslider')}}" class="btn btn-success pull-right">Semua Slide</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <form class="form-horizontal" wire:submit.prevent="addSlide">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Judul</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Judul" class="form-control input-md" wire:model="title" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Subjudul</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Subjudul" class="form-control input-md" wire:model="subtitle"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Harga</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Harga" class="form-control input-md" wire:model="price" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Link</label>
                            <div class="col-md-4">
                                <input type="text" placeholder="Link" class="form-control input-md" wire:model="link" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Gambar</label>
                            <div class="col-md-4">
                                <input type="file" class="input-file" wire:model="image" />
                                @if($image)
                                    <img src="{{$image->temporaryUrl()}}" width="120" />
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Status</label>
                            <div class="col-md-4">
                                <select class="form-control" wire:model="status">
                                    <option value="0">Tidak Aktif</option>
                                    <option value="1">Aktif</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
