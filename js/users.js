// Cards
var Users = {
    
    init: function() {
        
        var container = $('#users');
        
        var user1 = new User('mowl');
        container.append(user1.render());
        
        var user2 = new User('sp00f');
        container.append(user2.render());
     
        $('.user').on('mouseenter', function() {
            $(this).find('.hover-state').animate({width: 45}, 200);
            $(this).find('.status-col').animate({width: '30%'}, 200);
        });
        
        $('.user').on('mouseleave', function() {
            $(this).find('.hover-state').animate({width: 0}, 200);
            $(this).find('.status-col').animate({width: '41.66666666666667%'}, 200);
        });
     
    }
   
    
};

// Single instance of a card
function User(name) {
    
    this.template = 'user';
    
    // Properties
    this.name = name;
    this.online = 1;
    
    this.render = function() {
        return Template.parse(this.template, this);
    };
    
}