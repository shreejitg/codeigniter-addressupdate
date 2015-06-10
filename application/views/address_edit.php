
<?php echo form_open("AddressController/edit"); ?>
<label> Address1:</label> <input type="text" name="address1" value="<?php echo $address['address1']?>"><br>
Address2: <input type="text" name="address2" value="<?php echo $address['address2']?>"><br>
City: <input type="text" name="city" value="<?php echo $address['city']?>"><br>
State: <input type="text" name="state" value="<?php echo $address['state']?>"><br>
Country: <input type="text" name="country" value="<?php echo $address['country']?>"><br>
<input type="hidden" name="id" value="<?php echo $address['id'] ?>">
<input type="submit" value="Submit" name="submit">
</form>