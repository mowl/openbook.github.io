// Cards
var Cards = {
    
    input: {
        
        init: function() {
            
            var statusUpdate = $('#statusUpdate');
            Cards.input.statusField = $('#statusSubmitField');
            
            statusUpdate.on('focus', Cards.input.onFocus);

            var postStatusButton = $('#postStatusButton');
            postStatusButton.on('click', Cards.input.onAddNewCard);
            
            $('#cancelStatusButton').on('click', function() {
                Cards.input.statusField.hide();
            });
        },
        
        onFocus: function() {
            Cards.input.statusField.show();
        },
        
        onAddNewCard: function() {
            
            // Calculate height to replace it with a loader
            var pane = $('.new-card-view .tab-content');
            var paneHeight = pane.height();
            pane.find('.active').hide();
            
            var loader = $('<div class="status-loader"><img src="' + base_url('img/loader.gif') + '"></img></div>');
            loader.height(paneHeight + 10); // 10 is the padding, 5 on bottom, 5 on top
            pane.append(loader);
            
            var textStatus =  $('#statusUpdate').val();
            $('#statusUpdate').val('');
            
            // This is to test the flow of posting images, we'll delete it after and replace with a ajax instead
            setTimeout(function() {
                
                pane.find('.active').show();
                pane.find('.status-loader').remove();
                
                var cardRender = $(new Card('mowl', textStatus).render());
                $('#cards').prepend(cardRender);
                
                var originalRender = {
                    padding: cardRender.css('padding'),
                    height: cardRender.outerHeight()
                };
                
                cardRender.addClass('new-card');
                
                cardRender.animate({
                    padding: originalRender.padding,
                    height: originalRender.height  
                }, 500, function() {
                    cardRender.removeClass('new-card');
                });
                
            }, 1500);
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