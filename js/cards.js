var Cards = {
    
    init: function() {
        
        var data = [
        {
            name: 'mowl', 
            text: 'Random text to test templating'
        },
        {
            name: 'sp00f',
            text: 'Another text to test this'
        }
        ];
        
        var i = 0, len = data.length;
        for (; i < len; i++) {
            $('#cards').append(Template.parse('card', data[i]));
        }
        
    }
    
};