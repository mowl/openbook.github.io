<script>
    var OB = {
        baseUrl: '<?php echo base_url(); ?>',
        CSRF: {
            token: '<?php echo $this->security->get_csrf_hash(); ?>',
            name: '<?php echo $this->security->get_csrf_token_name(); ?>'
        }
    };
</script>

<?php
// When we have a user authenticated with the system, wrap it in a JS object for global usage
if (isset($user)) {
    echo '<script>OB.User = ' . json_encode($user) . ';</script>';
}
?>

<?php include_js(isset($js) ? $js : null); // Include JS files from the resources config  ?>
<?php include_parts(); ?>


</body>
</html>