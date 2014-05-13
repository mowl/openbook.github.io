!function($) {

    this.performLogin = function($event) {
        
        $event.preventDefault();
        
        var form = $('#loginForm');
        OB.Api('user', 'login', form.serializeObject(), onLoginResponse);
        
    };
    
    this.onLoginResponse = function(response) {
        
        if (response.status) {
            redirect('home');
        }
        
    };

    $(document).ready(function() {
      
        $('#loginButton').on('click', performLogin);
      
    });

}(jQuery);