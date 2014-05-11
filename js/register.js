!function($) {

    this.username = null;

    this.timeout = null;
    this.xhr = null;
    
    this.onUniqueUsernameResponse = function(response) {
    
        if (response) {
            
            // Username is unique
            var usernameField = $('#inputUsername');
            username = usernameField.val();
            
            var validateUsername =  $('#validateUsername');
            var registrationContainer = $('#registrationContainer');
            
            validateUsername.animate({
                opacity: 0, 
                'margin-top': -50
            }, 200, function() {
                
                validateUsername.hide();
                
                registrationContainer.css('opacity', 0).show().animate({
                    opacity: 1, 
                    'margin-top': 0
                }, 200);
                
            });
            
        }

    };
    
    this.onUsernameChange = function() {

        var usernameField = $(this);
        
        if (timeout !== null) {
            clearTimeout(timeout);
            timeout = null;
        }
        
        timeout = setTimeout(function() {
            
            if (xhr !== null) {
                xhr.abort();
                xhr = null;
            }
            
            xhr = OB.Api('user', 'isUniqueUsername', {
                username: usernameField.val()
            }, onUniqueUsernameResponse);
            
        }, 500);
        
    };
    
    this.onRegisterResponse = function(response) {
        
    };
    
    this.onRegisterAttempt = function($event) { 
    
        $event.preventDefault();
        
        var regData = $('#registrationForm').serializeObject();
        regData.username = username;
        
        OB.Api('user', 'register', regData, onRegisterResponse);

    };
    
    $(document).ready(function() {
        
        $('#inputUsername').on('keyup', onUsernameChange);
        $('#registerButton').on('click', onRegisterAttempt);
        
    });

}(jQuery);