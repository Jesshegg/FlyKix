<fieldset>
      <legend>Payment Information</legend>
      <form action="index.php?p=paymentprocessor" method="post">
        <div class="form group"><label for="payment amount">Payment Amount</label> <input type="text" name="payment amount" value='<?php echo $_SESSION["total"]?>' disabled id="payment amount" placeholder="Payment Amount"></div>
        <div class="form-group"><label for="name">Name</label> <input type="text" name="name" value="" id="name" placeholder="Name"></div>
        <div class="form-group"><label for="card number">Card Number</label> <input type="text" name="card number" value="" id="card number" placeholder="Card Number"></div>
        <div class="form-group"><label for="security code">Security Code</label> <input type="text" name="security code" value="" id="security code" placeholder="Security Code"></div>
        <div class="form-group"><label for="submit" class="hidden"></label><input type="submit" name="submit" value="Submit" id="submit" class="input-submit"></div>
      </form>
</fieldset>
