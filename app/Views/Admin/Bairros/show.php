<?php echo $this->extend('Admin/layout/principal'); ?>


<?php echo $this->section('titulo'); ?>
<?php echo $titulo ?>
<?php echo $this->endSection(); ?>




<?php echo $this->section('estilos'); ?>


<?php echo $this->endSection(); ?>





<?php echo $this->section('conteudo'); ?>
<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-header bg-secondary pb-0 pt-4">
                <h4 class="card-title text-white"><?php echo esc($titulo); ?> | Campo Mourão</h4>
            </div>

            <div class="card-body">
                
                <p class="card-text">
                    <span class= "font-weight-bold"> Nome:</span>
                    <?php echo esc($bairro->nome); ?>
                </p>
                <p class="card-text">
                    <span class= "font-weight-bold"> Valor de entrega:</span>
                    R$&nbsp<?php echo esc(number_format($bairro->valor_entrega,2)); ?>
                </p>
                <p class="card-text">
                    <span class= "font-weight-bold"> Ativo:</span>
                    <?php echo ($bairro->ativo ? 'Sim' : 'Não'); ?>
                </p>
                <p class="card-text">
                    <span class= "font-weight-bold"> Criado:</span>
                    <?php echo $bairro->criado_em->humanize(); ?>
                </p>

                <?php if($bairro->deletado_em == null): ?>
                    <p class="card-text">
                        <span class= "font-weight-bold"> Atualizado:</span>
                        <?php echo $bairro->atualizado_em->humanize(); ?>
                    </p>
                <?php else: ?>

                    <p class="card-text">
                        <span class= "font-weight-bold text-danger"> Excluido:</span>
                        <?php echo $bairro->deletado_em->humanize(); ?>
                    </p>

                <?php endif; ?>

                <div class="mt-4">


                <?php if($bairro->deletado_em == null): ?>
                    <a href= "<?php echo site_url("admin/bairros/editar/$bairro->id"); ?>"class="btn btn-dark btn-sm btn-icon-text mr-2 btn-sm">
                        <i class="mdi mdi-file-check btn-icon-prepend"></i>
                        Editar
                    </a>

                    <a href= "<?php echo site_url("admin/bairros/excluir/$bairro->id"); ?>"class="btn btn-danger btn-sm mr-2 btn-sm">
                        <i class="mdi mdi-delete btn-icon-prepend"></i>
                        Excluir
                    </a>

                    <a href= "<?php echo site_url("admin/bairros"); ?>"class="btn btn-light text-dark btn-sm">
                        <i class="mdi mdi mdi-keyboard-return btn-icon-prepend"></i>
                        Voltar
                    </a>
                <?php else: ?>

                    <a  title="Desfazer Exclusão" href= "<?php echo site_url("admin/bairros/desfazerExclusao/$bairro->id"); ?>"class="btn btn-dark btn-sm">
                        <i class="mdi mdi-undo btn-icon-prepend"></i>
                        Desfazer
                    </a>

                    <a href= "<?php echo site_url("admin/bairros"); ?>"class="btn btn-light text-dark btn-sm">
                        <i class="mdi mdi mdi-keyboard-return btn-icon-prepend"></i>
                        Voltar
                    </a>

                <?php endif; ?>



                </div>

            </div>
        </div>
    </div>

</div>

<?php echo $this->endSection(); ?>





<?php echo $this->section('scripts'); ?>


<?php echo $this->endSection(); ?>