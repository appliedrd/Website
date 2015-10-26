<div class="row">
    <?= $this->cell('Sidebar::project', [$project->id]); ?>

    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
        <?= $this->Form->create($project); ?>
        <fieldset>
            <legend><?= __('Edit Project') ?></legend>
            <?php
                echo $this->Form->input('name');
                echo $this->Form->input('link', ['placeholder' => __("http(s)://website.com")]);
                echo $this->Form->input('description');
                echo $this->Form->input('organizations._ids', ['options' => $organizations]);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit'), ['class' => 'btn-success']) ?>
        <?= $this->Form->end() ?>
    </div>
</div>