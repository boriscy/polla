<?php if( $this->session->flashdata('notice')  ): ?>
<div id="notice">
  <?php echo $this->session->flashdata('notice') ?>
</div>
<?php endif; ?>

<?php if( $this->session->flashdata('warning')  ): ?>
<div id="warning">
  <?php echo $this->session->flashdata('warning') ?>
</div>
<?php endif; ?>

<?php if( $this->session->flashdata('error')  ): ?>
<div id="error">
  <?php echo $this->session->flashdata('error') ?>
</div>
<?php endif; ?>
