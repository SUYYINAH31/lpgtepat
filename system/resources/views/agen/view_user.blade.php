<div class="modal fade" id="view_{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myLargeModalLabel">Show User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label>E-mail</label>
                    <input name="email" readonly class="form-control" type="text" required value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label>Nama User</label>
                    <input name="nama" readonly class="form-control" type="text" required value="{{ $user->nama }}">
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input name="username" readonly class="form-control" type="text" required value="{{ $user->username }}">
                </div>

                <div class="form-group">
                    <label>Level</label>
                    <input name="username" readonly class="form-control" type="text" required value="@if($user->level == 1) Admin @elseif ($user->level == 2) Pangkalan @endif">
                   
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
        </div>
    </div>
</div>
