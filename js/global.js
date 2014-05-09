OB.Bootloader = function($) {

    // moo is a small library I wrote to support basic functionality upon javascript's standard API.
    this.Tools = window['moo'];

    // called whenever the basic DOM is loaded on page
    this.onDocumentReady = function() {
             
        // Animate the header on load, this looks fairly nice actually
        $('#rootBrand').css('margin-left', '20px').css('opacity', 0).animate({
            'margin-left': '-15px',
            opacity: 1
        }, 400);
             
        // Load required JS files
        Tools.load.js(OB.baseUrl + 'js/template.js', function() {
             
            Tools.load.js(OB.baseUrl + 'js/cards.js', function() {
            
                // the Cards object is valid in this scope
                Cards.init();
            
            });
        
        });
             
    };

    // called when boatloader does it's initial steps
    this.onBootloaderReady = function() {
        
        Tools.load.css(OB.baseUrl + 'css/cards.css');
        
    }();
    
    $(document).ready(onDocumentReady);

    return {
        tools: this.tools
    };
    
}(jQuery);