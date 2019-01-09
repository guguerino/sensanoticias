<div class="row justify-content-center text-center">
    <div class="col-md-12">
        <div class="card" style="border: 0px !important;">
            <div class="card-header bg-info text-light semBordas">Ultimas publicações:</div><br>
            <div class="card-body container">
                <div class="row">
                    @forelse (\AppHelper::instance()->getLastsPubs(3) as $publicacao)
                    <div class="col-md-4">
                        <div class="card bg-primary mb-1 text-white" style="min-height: 5rem;">
                            <div class="card-header">
                                    {{ str_limit($publicacao->Titulo, $limit = 23, $end = '...') }}
                            </div>
                            <div class="card-body">
                                <button type="button" class="btn bg-success btn-sm">Visualizar!</button>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="alert alert-danger" role="alert">
                        Sem publicações recentes..
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>