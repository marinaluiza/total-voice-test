<div class="mostra-resultado">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3"><p class="bg-<?php echo $status ?>"><?php echo $msg ?></p></div>
            <div class="col-md-6 col-md-offset-3">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Número destino</th>
                        <th>Data Criação</th>
                        <th>Mensagem</th>
                        <th>Preço</th>
                        <th>Status Envio</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($dados as $dado): ?>
                        <tr>
                            <td><?php echo $dado['numero_destino']; ?></td>
                            <td><?php echo $dado['data_criacao']; ?></td>
                            <td><?php echo $dado['mensagem']; ?></td>
                            <td><?php echo $dado['preco']; ?></td>
                            <td><?php echo $dado['status_envio']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-6 col-md-offset-3">
                <a class="btn btn-default" href='/' role="button">Voltar</a>
            </div>
        </div>
    </div>

</div>


