<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Adress'), ['controller' => 'Adress', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Adres'), ['controller' => 'Adress', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Userstype'), ['controller' => 'Userstype', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Userstype'), ['controller' => 'Userstype', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="users form large-10 medium-9 columns">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->input('photo');
            echo $this->Form->input('username');
            echo $this->Form->input('password');
            echo $this->Form->input('name');
            echo $this->Form->input('lastname');
            echo $this->Form->input('bio');
            echo $this->Form->input('email');
            echo $this->Form->input('phone');
            echo $this->Form->input('recomendation');
            echo $this->Form->input('adress_id', ['options' => $adress]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
