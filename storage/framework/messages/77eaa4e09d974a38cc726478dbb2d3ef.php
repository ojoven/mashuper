<?php $__env->startSection('title', 'Concepts'); ?>

<?php $__env->startSection('content'); ?>

    <div class="separator">&nbsp;</div>
    <h1>Concepts</h1>

    <div class="span8">
        <h3 class="quick-title">Add new concept</h3>
        <input id="concept" class="simple_field" type="text" placeholder="Concept" />
        <p><a id="to-add-concept" class="btn btn-primary" href="#">Add new concept</a></p>
    </div>


    <div class="line-separator"></div>

    <div class="span8">
        <h3>Added concepts</h3>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Concept</th>
                </tr>
            </thead>
            <tbody id="concept-table-body">
                <?php foreach ($concepts as $index=>$concept) {?>
                <tr>
                    <td><?php echo count($concepts) - $index; ?></td>
                    <td><?php echo $concept['concept']; ?></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>

    <script type="text/javascript">
        var numConcepts = <?php echo count($concepts); ?>;
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>