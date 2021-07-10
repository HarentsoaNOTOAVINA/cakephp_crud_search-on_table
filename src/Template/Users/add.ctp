<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<!-- Section : fiche contacts -->
<section class="section section-fiche grey lighten-4">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">

                        <span class="card-title">Ajouter un utilisateur</span>

                        <div class="row">
                            <?= $this->Form->create($user) ?>

                            <div class="col s12 m6">
                                <div class="input-field">
                                    <?php
                                    echo $this->Form->control('nom', [
                                    'type' => 'text',
                                    'label' => [
                                    'text' => 'Nom'
                                    ]
                                    ]);
                                    ?>
                                </div>
                                <div class="input-field">
                                    <?php
                                    echo $this->Form->control('prenom', [
                                    'type' => 'text',
                                    'label' => [
                                    'text' => 'Prénom(s)'
                                    ]
                                    ]);
                                    ?>
                                </div>
                                <div class="input-field">
                                    <?php
                                    echo $this->Form->control('email', [
                                    'type' => 'text',
                                    'label' => [
                                    'text' => 'Adresse mail'
                                    ]
                                    ]);
                                    ?>
                                </div>

                                <?= $this->Form->button(__('Submit'), ['class' => 'btn blue white-text']) ?>

                            </div>
                            <div class="col s12 m5 offset-m1">

                                <div class="input-field">
                                    <input type="hidden" name="dt_dernier_modif">
                                </div>

                                <div class="input-field">
                                    <input type="hidden" name="dt_creation">
                                </div>


                            </div>

                            <?= $this->Form->end() ?>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
