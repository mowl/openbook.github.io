!function($) {

    this.performLogin = function($event) {

        $event.preventDefault();

        $('#loginLoader').show();
        $('#loginButton').hide();

        OB.Tools.delay(function() {
            var form = $('#loginForm');
            OB.Api('user', 'login', form.serializeObject(), onLoginResponse);
        }, 1000);

    };

    this.onLoginResponse = function(response) {

        if (response.status) {
            redirect('home');
        } else {

            $('#loginLoader').hide();
            $('#loginButton').show();

        }

    };

    $(document).ready(function() {

        $('#loginButton').on('click', performLogin);

    });

}(jQuery);