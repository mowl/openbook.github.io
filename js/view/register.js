!function($) {

    this.username = null;

    this.timeout = null;
    this.xhr = null;
    
    this.toggleAnimation = function(state) {
        
        var validateUsername = $('#validateUsername');
        var registrationContainer = $('#registrationContainer');
        
        if(state)
        {
            validateUsername.animate({
                opacity: 1,
                'margin-top': 0
            }, 200, function() {
                
                validateUsername.show();
                
                registrationContainer.hide().animate({
                    opacity: 0,
                    'margin-top': -50
                }, 200);
                
            });
        } else {
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
    
    this.onGoBack = function() {
        toggleAnimation(true);
        $('#userNameError').text(""); // Reset error message
    };
    
    this.onUniqueUsernameResponse = function(response) {
    
        if (response.status) {
            
            // Username is unique
            var usernameField = $('#inputUsername');
            username = usernameField.val();
            
            toggleAnimation(false);
            
        } else {
            
            $('#userNameError').text(response.data);
            
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
        
        if (response.status) {
            redirect('login');
        }
        
    };
    
    this.onRegisterAttempt = function($event) { 
    
        $event.preventDefault();
        
        var regData = $('#registrationForm').serializeObject();
        regData.username = username;
        
        OB.Api('user', 'register', {data: regData}, onRegisterResponse);

    };
    
    $(document).ready(function() {
        
        $('#inputUsername').on('keyup', onUsernameChange);
        $('#goBackButton').on('click', onGoBack);
        $('#registerButton').on('click', onRegisterAttempt);
        
    });

}(jQuery);