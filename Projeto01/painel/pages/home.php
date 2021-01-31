<?php
    $users = Painel::listarUsersOnline();

    $visitasSemanais = Database::conectar()->prepare("SELECT * FROM `tb_admin.visitas` WHERE dia BETWEEN ? AND ?");
    $hoje = date('Y-m-d');
    $visitasSemanais->execute(array(date('Ymd', strtotime($hoje. ' - 7 days')),date('Ymd') ));
    $visitasSemanais = $visitasSemanais->rowCount();

    $visitasHoje = Database::conectar()->prepare("SELECT * FROM `tb_admin.visitas` WHERE dia = ?");
    $visitasHoje->execute(array(date('Y-m-d')));
    $visitasHoje = $visitasHoje->rowCount();
?>
<div class="box-conteudo w100">
    <h2><i class="fa fa-home"></i>Painel de controle</h2>

    <div class="container-metricas">
        <div class="box-metrica">
            <h2>Usuários online</h2>
            <p><?php echo count($users);  ?></p>
        </div>
        <div class="box-metrica">
            <h2>Visitas semanais</h2>
            <p><?php echo $visitasSemanais; ?></p>
        </div>
        <div class="box-metrica">
            <h2>Visitas Hoje</h2>
            <p><?php echo $visitasHoje; ?></p>
        </div>
    </div>

</div>
<div class="box-conteudo w100">
    <h2><i class="fa fa-rocket"></i> Usuários online</h2>
    <div style="overflow-x: auto;">
        <table>
            <tr>
                <th>IP</th>
                <th>Último acesso</th>
            </tr>
            <?php foreach ($users as $key => $value) {

            ?>
            <tr>
                <td><?php echo $value['ip'] ?></td>
                <td><?php echo date('d/m/Y H:i:s', strtotime($value['acao_final'])); ?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</div>

<div class="box-conteudo w50 left">
    
</div>
<div class="box-conteudo w50 right">
    
</div>
<div class="clear"></div>