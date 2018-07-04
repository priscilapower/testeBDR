<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tarefa[]|\Cake\Collection\CollectionInterface $tarefa
 */
?>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tarefa'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tarefa index large-9 medium-8 columns content">
    <h3><?= __('Tarefa') ?></h3>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prioridade') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody class="sortableTasks" id="followTasks">
            <?php foreach ($tarefa as $tarefa): ?>
				<tr class="drag" id=<?=$tarefa->prioridade?>>
					<td><?= $this->Number->format($tarefa->id) ?></td>
					<td><?= h($tarefa->titulo) ?></td>
					<td><?= h($tarefa->descricao) ?></td>
					<td><?= $this->Number->format($tarefa->prioridade) ?></td>
					<td class="actions">
						<?= $this->Html->link(__('View'), ['action' => 'view', $tarefa->id]) ?>
						<?= $this->Html->link(__('Edit'), ['action' => 'edit', $tarefa->id]) ?>
						<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tarefa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tarefa->id)]) ?>
					</td>
					<?php $order[] = $tarefa->prioridade; ?>		
				</tr>
				<input type="hidden"  id="sort_<?=$tarefa->prioridade?>" value="<?=$tarefa->prioridade?>" />		
            <?php endforeach; ?>
			<input type="hidden" name="sort_order" id="sort_order" value="<?=implode(',', $order)?>" />		
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery(".sortableTasks").sortable();
	
	var list = jQuery('#followTasks');
	var sortInput = jQuery('#sort_order');
	
	var sortOrder = [];
	
	/*list.children('tr').each(function(){
		sortOrder.push(jQuery(this).data('id'));
	});
	sortInput.val(sortOrder.join(','));*/
	
	jQuery("#followTasks" ).sortable({
		update: function (event, ui) {
			jQuery.ajax({
				type: 'POST'
				,url: 'http://localhost:8765/tarefa/reorder/'
				,data: {sort: $('#sort_order').val()}
				,dataType: 'json'
			}).done(function(data){
				if(data.type == 'success') {
					alert('deu certo');
				}
			});

		}
	});
});
</script>