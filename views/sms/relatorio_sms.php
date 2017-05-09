<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form id="form-datas" method="post" action="/sms/get_relatorio_sms">
                <div class="form-group">
                    <label for="dataInicio">Data Início</label>
                    <input type="date" class="form-control" id="dataInicio" name="dataInicio"
                           placeholder="Data de início do relatório" value="">
                </div>
                <div class="form-group">
                    <label for="dataFim">Data Fim</label>
                    <input type="date" class="form-control" id="dataFim" name="dataFim"
                           placeholder="Data de fim do relatório" value="">
                </div>
                <button type="submit" class="btn btn-default btn-relatorio">Pesquisar</button>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#dataInicio').mask('00/00/0000');
        $('#dataFim').mask('00/00/0000');
    });
</script>

