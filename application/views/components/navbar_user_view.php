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

            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo base_url('home'); ?>">Home</a></li>
            </ul>

            <form class="navbar-form navbar-left" role="search">
                <div class="search-field">
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-addon">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </div>
            </form>

            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $user->username; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url('home/logout'); ?>">Logout</a></li>
                    </ul>
                </li>

                <li class="user-icon">
                    <i class="fa fa-user"></i>
                </li>

            </ul>

        </div>
    </div>
</nav>