<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('@connexion') ?>" method="POST">
  <table id="form">
    <tfoot>
      <tr>
        <td colspan="2">
          <input type="submit" value="Me connecter" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form ?>
    </tbody>
  </table>
</form>