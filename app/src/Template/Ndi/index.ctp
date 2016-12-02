<h1><?= $title; ?></h1>

<?php 
	echo $this->Form->create();
		echo $this->Form->input('pseudo');
		echo $this->Form->input('pwd');
		echo $this->Form->Submit();
	echo $this->Form->end();
?>