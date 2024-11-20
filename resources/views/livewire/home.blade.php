<div>
    <h2 class="text-center my-5">Interpretador de Sentimentos</h2>
    <form wire:submit="enviarTexto">
        <div class="form-group">
            <textarea class="form-control border border-dark" style="border-width: 3px !important;" rows="3" placeholder="Digite seu texto..." wire:model="texto" id="texto" name="texto"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary p-3 px-5" type="submit">Interpretar</button>
        </div>
        @if ($errorMessage)
            <div class="alert alert-danger my-2">
                {{ $errorMessage }}
            </div>
        @endif
    </form>
    <div class="form-group">
        <textarea class="form-control border border-dark" style="border-width: 3px !important;" rows="6" placeholder="Sentimentos Encontrados..." disabled wire:model="resposta"></textarea>
    </div>
    <div class="mt-5 d-flex justify-content-center">
        <div class="card border border-dark border-5" style="border-width: 3px !important;">
            <div class="card-header">
                <h3 class="card-title">Textos antigos</h3>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Texto</th>
                        <th>Resposta</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($textosAntigos as $texto)
                    <tr>
                        <td>{{ $texto->id }}</td>
                        <td>{{ $texto->message }}</td>
                        <td>{{ $texto->response }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
