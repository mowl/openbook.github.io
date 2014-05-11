<div class="container-fluid">

    <div class="register-form">

        <div id="validateUsername">
            <label for="inputUsername">Username</label>
            <input id="inputUsername" type="text" class="form-control">
        </div>

        <div id="registrationContainer">

            <form role="form" autocomplete="off" id="registrationForm">
                <div class="form-group">
                    <label for="inputEmail">Email address</label>
                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="johndoe@mail.com">
                </div>

                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
                </div>

                <div class="row">
                    <div class="col-xs-6">
                        
                        <div class="form-group">
                            <label for="inputFirstName">First name</label>
                            <input type="text" class="form-control" id="inputFirstName" name="first_name" placeholder="John">
                        </div>

                    </div>
                    
                    <div class="col-xs-6">
                        
                        <div class="form-group">
                            <label for="inputLastName">Last name</label>
                            <input type="text" class="form-control" id="inputLastName" name="last_name" placeholder="Doe">
                        </div>

                    </div>
                </div>

                <button type="submit" class="btn btn-primary pull-right" onclick="return false;" id="registerButton">Register me</button>
            </form>

        </div>

    </div>

</div>