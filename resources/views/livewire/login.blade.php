<div>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Fazer login</h3>
        </div>
        <form wire:submit="login">
            <div class="card-body">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input wire:model="email" type="email" class="form-control" id="email" placeholder="email@email.com">
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input wire:model="senha" type="password" class="form-control" id="senha" name="senha" placeholder="******">
                </div>
                @if ($errorMessage)
                    <div class="alert alert-danger">
                        {{ $errorMessage }}
                    </div>
                @endif
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary w-100">Fazer login</button>
            </div>
        </form>
    </div>
</div>
