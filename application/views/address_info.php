Addresses: <br>
<?php foreach($addresses as $address) { ?>
<?php echo form_open() ?>
Address1: <?php echo $address->address1 ?><br>
Address2: <?php echo $address->address2 ?><br>
City: <?php echo $address->city ?><br>
State: <?php echo $address->state ?><br>
Country: <?php echo $address->country ?><br>
<a href="<?php echo site_url("AddressController/edit_address?id=$address->id") ?>">Edit</a>
<a href="<?php echo site_url("AddressController/delete?id=$address->id") ?>" onclick="confirm('Are you sure?');">Delete</a>

</form>
<?php } ?>

<script>
    
</script>