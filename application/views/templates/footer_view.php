<script>
    var OB = {
        baseUrl: '<?php echo base_url(); ?>',
        CSRF: {
            token: '<?php echo $this->security->get_csrf_hash(); ?>',
            name:  '<?php echo $this->security->get_csrf_token_name(); ?>'
        }
    };
</script>

<?php include_js(isset($js) ? $js : null); // Include JS files from the resources config ?>
<?php include_parts(); ?>

</body>
</html>