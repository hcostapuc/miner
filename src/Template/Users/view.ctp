<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Adress'), ['controller' => 'Adress', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Adres'), ['controller' => 'Adress', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Userstype'), ['controller' => 'Userstype', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Userstype'), ['controller' => 'Userstype', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="users view large-10 medium-9 columns">
    <h2><?= h($user->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Photo') ?></h6>
            <p><?= h($user->photo) ?></p>
            <h6 class="subheader"><?= __('Username') ?></h6>
            <p><?= h($user->username) ?></p>
            <h6 class="subheader"><?= __('Password') ?></h6>
            <p><?= h($user->password) ?></p>
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($user->name) ?></p>
            <h6 class="subheader"><?= __('Lastname') ?></h6>
            <p><?= h($user->lastname) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($user->email) ?></p>
            <h6 class="subheader"><?= __('Adres') ?></h6>
            <p><?= $user->has('adres') ? $this->Html->link($user->adres->id, ['controller' => 'Adress', 'action' => 'view', $user->adres->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Userstype') ?></h6>
            <p><?= $user->has('userstype') ? $this->Html->link($user->userstype->id, ['controller' => 'Userstype', 'action' => 'view', $user->userstype->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($user->id) ?></p>
            <h6 class="subheader"><?= __('Phone') ?></h6>
            <p><?= $this->Number->format($user->phone) ?></p>
            <h6 class="subheader"><?= __('Recomendation') ?></h6>
            <p><?= $this->Number->format($user->recomendation) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($user->created) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Bio') ?></h6>
            <?= $this->Text->autoParagraph(h($user->bio)) ?>
        </div>
    </div>
</div>
