<div id="login">
  <h1>Ingreso</h1>

  <?php echo form_open("/login") ?>
    <div class="fl" style="width:300px">

      <?php echo input('email', 'Email' ) ?>
      <?php echo password('password', 'Contraseña') ?>
    </div>

    <div style="clear:both"></div>
    <?php echo form_submit('submit', 'Ingresar') ?>
  </form>
</div>
