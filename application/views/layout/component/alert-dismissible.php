<?php if ($flash=$this->session->flashdata('success')): ?>
	<div class="alert alert-success alert-dismissible fade show" role="alert">
	  <?= $flash; ?>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
<?php endif ?>

<?php if ($flash=$this->session->flashdata('info')): ?>
	<div class="alert alert-info alert-dismissible fade show" role="alert">
	  <?= $flash; ?>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
<?php endif ?>

<?php if ($flash=$this->session->flashdata('warning')): ?>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
	  <?= $flash; ?>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
<?php endif ?>

<?php if ($flash=$this->session->flashdata('error')): ?>
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
	  <?= $flash; ?>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
<?php endif ?>