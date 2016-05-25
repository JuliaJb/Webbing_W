<?php $this->layout('layout', ['title' => 'login']) ?>

<?php $this->start('css') ?>

	<link rel="stylesheet" href="<?= $this->assetUrl('/css/main.css') ?>">

<?php $this->stop('css') ?>

<?php 

$this->start('nav');

	include '../app/templates/partials/nav.php';

$this->stop('nav');

?>



<?php $this->start('main') ?>


<h1>This is test</h1>

<h2>This is _SESSION</h2>
<pre>
	<?php print_r($_SESSION) ?>
</pre>


<h2>This is roles</h2>
<pre>
	<?php print_r($roles) ?>
</pre>






<?php $this->stop('main') ?>


<?php $this->start('script') ?>


	<script src="<?= $this->assetUrl('/js/main.js') ?>"></script>


<?php $this->stop('script') ?>
