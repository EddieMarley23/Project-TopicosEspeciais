<div>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Cadastro de Usuário</h3>
        </div>
        <form wire:submit="cadastrar">
            <div class="card-body">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input wire:model="email" type="email" class="form-control" id="email" placeholder="email@email.com">
                </div>
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input wire:model="nome" type="text" class="form-control" id="nome" name="exemplo" placeholder="Joardo Nunes">
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input wire:model="senha" type="password" class="form-control" id="senha" name="senha" placeholder="******">
                </div>
                <div class="form-group">
                    <label for="confirmar-senha">Confirmar Senha</label>
                    <input wire:model="confirmarSenha" type="password" class="form-control" id="confirmar-senha" name="confirmar-senha" placeholder="******">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
            </div>
        </form>
    </div>
</div>
