<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>


<!-- Section : users  -->
<section class="section section-user grey lighten-4">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Gestion des utilisateurs</span>


                        <div class="hn_filtre">
                            <?php echo $this->Form->create(null, ['type' => 'get', 'url' =>['controller' => 'users', 'action' =>'index']]); ?>
                            <div class="left search_form">
                                <?php echo $this->Form->control("",['value'=>$search, 'type'=>'text', 'name'=>'search', 'class'=>'form-control','placeholder'=>'Rechercher (Nom, Prénom)', 'templates' => ['inputContainer' => '{{content}}']]); ?>
                            </div>
                            <div class="right">
                                <?= $this->Form->button(__('Filtrer'),["type"=>"submit", "class"=>" blue btn lighten-2",  'templates' => ['submitContainer' => '{{content}}']]); ?>
                                <?= $this->Html->link(__('Reset'), ['action' => 'index'], ['class' => 'btn hn_reset']) ?>
                            </div>
                            <?= $this->Form->end() ?>
                            <div class="clearfix"></div>



                            <div class="right">
                            <?= $this->Html->link(__('Nouveau'), ['action' => 'add'], ['class' => 'btn blue lighten-2'])
                            ?>
                        </div>

                        <table class="striped arn-table">
                            <thead>
                            <tr>
                                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Nom') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Prenom') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Mail') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Créé le') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('Modifié le') ?></th>
                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?= $this->Number->format($user->id) ?></td>
                                <td><?= h($user->nom) ?></td>
                                <td><?= h($user->prenom) ?></td>
                                <td><?= h($user->email) ?></td>
                                <td><?= h($user->dt_creation) ?></td>
                                <td><?= h($user->dt_dernier_modif) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link(__(''), ['action' => 'edit', $user->id], ['class' => 'btn blue
                                    lighten-2 hn_edit']) ?>
                                    <?= $this->Form->postLink(__(''), ['action' => 'delete', $user->id], ['class' =>
                                    'btn blue lighten-2 hn_delete'], ['confirm' => __('Are you sure you want to delete #
                                    {0}?', $user->id)]) ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-action">
                        <div class="paginator center">
                            <ul class="pagination">
                                <?= $this->Paginator->first('<< ' . __('first')) ?>
                                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                                <?= $this->Paginator->numbers() ?>
                                <?= $this->Paginator->next(__('next') . ' >') ?>
                                <?= $this->Paginator->last(__('last') . ' >>') ?>
                            </ul>
                            <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing
                                {{current}} record(s) out of {{count}} total')]) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
