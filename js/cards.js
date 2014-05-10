// Cards
var Cards = {
    
    input: {
        
        init: function() {
            
            var statusUpdate = $('#statusUpdate');
            Cards.input.statusField = $('#statusSubmitField');
            
            statusUpdate.on('focus', Cards.input.onFocus);
            statusUpdate.on('blur', Cards.input.onBlur);

        },
        
        onFocus: function() {
            Cards.input.statusField.show();
        },
        
        onBlur: function() {
            Cards.input.statusField.hide();
        }
        
    },
    
    init: function() {
        
        var container = $('#cards');
        
        var card1 = new Card('mowl', 'This is a small test');
        container.append(card1.render());
        
        var card2 = new Card('sp00f', 'Hello World');
        container.append(card2.render());
        
        Cards.input.init();
        
    }
   
    
};

// Single instance of a card
function Card(name, text) {
    
    this.template = 'card';
    
    // Properties
    this.name = name;
    this.text = text;
    
    this.render = function() {
        return Template.parse(this.template, this);
    };
    
}