<?php
/*
 * $modalTitle
 * $modalBody
 */
?>
<div id="<?php echo $modalId; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="myModalLabel" class="modal-title"><?php echo $modalTitle; ?></h4></div>
            <div class="modal-body">
                <?php echo $modalBody; ?>
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" type="button" data-dismiss="modal">Zatvori</button>
<!--                <button class="btn btn-primary" type="button">Spasi promjene</button>-->
            </div>
        </div>
        <!-- /.modal-content--></div>
    <!-- /.modal-dialog--></div>