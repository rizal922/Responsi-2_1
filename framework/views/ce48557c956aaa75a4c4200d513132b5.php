<p>Dear <?php echo e($admin->name); ?></p>
<br>
<p>
    Your password on Laravecom system was changed successfully.
    Here is your new login credentials:
    <br>
    <b>Login ID: </b><?php echo e($admin->username); ?> or <?php echo e($admin->email); ?>

    <br>
    <b>Password: </b><?php echo e($new_password); ?>

</p>
<br>
Please, keep your credentials confidential. Your username and password are your own credentials and you should never share them with anybody else.
<p>
    Laravecom will not be liable for any misuse of your username or password.
</p>
<br>
----------------------------------------------
<p>
    This email was automatically sent by Laravecom system. Do not reply it.
</p><?php /**PATH C:\xampp\htdocs\GearGamers_Ecommerce\resources\views/email-templates/admin-reset-email-template.blade.php ENDPATH**/ ?>