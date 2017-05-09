<!DOCTYPE HTML>
<body>
<?php
// define variables and set to empty values
$psaRefErr = $ltaRefErr = "";
$psaRef = $ltaRef = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["pensionSchemeAdministratorCheckReference"])) {
  $psaRefErr = "PSA Ref must be entered";
} else {
  $psaRef = $_POST["pensionSchemeAdministratorCheckReference"];
}

if (empty($_POST["lifetimeAllowanceReference"])) {
  $ltaRefErr = "LTA Ref must be entered";
} else {
  $ltaRef = $_POST["lifetimeAllowanceReference"];
}
}
?>

  <html>
  <h2>PHP Form Validation Example</h2>
  <p><span class="error">* required field.</span></p>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>">
    <?php if($psaRefErr!=='') : ?>
    <div class="form-field form-field--error fields-aligned form-field--tall">
      <label> Pension Scheme Administrator Check Reference
                        <div class="error-notification" id="PSA Ref must be entered">
                        <?php echo $psaRefErr ?>
                        </div>
                    <p class="form-field--hint">Example: PSA12345678A</p>
                    <input type="text" name="pensionSchemeAdministratorCheckReference" id="pensionSchemeAdministratorCheckReference" class="input--medium input--cleared" value="">
                </label>
    </div>
    <?php else : ?>
    <div class="form-field form-field--tall">
      <label> Pension Scheme Administrator Check Reference
                    <p class="form-field--hint">Example: PSA12345678A</p>
                    <input type="text" name="pensionSchemeAdministratorCheckReference" id="pensionSchemeAdministratorCheckReference" class="input--medium input--cleared" value="">
                </label>
    </div>
    <?php endif; ?>

    <?php if($ltaRefErr!=='') : ?>
    <div class="form-field form-field--error fields-aligned">
      <label> Lifetime Allowance Reference

                        <div class="error-notification" id="LTA Ref must be entered">
                        <?php echo $ltaRefErr ?>
                        </div>

                    <p class="form-field--hint">Example: IP141000000000A</p>
                    <input type="text" name="lifetimeAllowanceReference" id="lifetimeAllowanceReference" class="input--medium input--cleared" value="">
                </label>
    </div>
    <?php else : ?>
    <div class="form-field">
      <label> Lifetime Allowance Reference
                    <p class="form-field--hint">Example: IP141000000000A</p>
                    <input type="text" name="lifetimeAllowanceReference" id="lifetimeAllowanceReference" class="input--medium input--cleared" value="">
                </label>
    </div>
    <?php endif; ?>
    <input type="submit" name="submit" value="Submit">
  </form>
  </body>

  </html>
