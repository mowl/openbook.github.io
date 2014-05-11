!function($) {

    this.performLogin = function($event) {
        
        $event.preventDefault();
        
        var form = $('#loginForm');
        OB.Api('user', 'login', form.serializeObject(), onLoginResponse);
        
    };
    
    this.onLoginResponse = function(response) {
        
        console.log(response);
        
    };

    $(document).ready(function() {
      
        $('#loginButton').on('click', performLogin);
      
    });

}(jQuery);