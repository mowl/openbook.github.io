<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#openBookNav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a id="rootBrand" class="navbar-brand" href="<?php echo base_url(); ?>">OpenBook</a>
        </div>

        <div class="collapse navbar-collapse" id="openBookNav">

            <ul class="nav navbar-nav navbar-right">

                <li>
                    <a href="<?php echo base_url('login'); ?>">Login</a>
                </li>
                
                <li>
                    <a href="<?php echo base_url('register'); ?>">Register</a>
                </li>

            </ul>

        </div>
    </div>
</nav>