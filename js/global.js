OB.Bootloader = function($) {

    // moo is a small library I wrote to support basic functionality upon javascript's standard API.
    this.Tools = window['moo'];

    // called whenever the basic DOM is loaded on page
    this.onDocumentReady = function() {
             
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