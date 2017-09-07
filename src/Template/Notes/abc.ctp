<html>
<body>
<p>
Hello World!
<?php   echo $this->element('some'); ?></p>


    <?= $this->Form->create("myform") ?>
    <fieldset>
        <legend><?= __('Something') ?></legend>
        <?php
            echo $this->Form->input('akshat');
            echo $this->Form->input('marks');
          
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</body>
</html>     