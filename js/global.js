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

            Tools.load.js(OB.baseUrl + 'js/users.js', function() {

                Users.init();

            });

        });

    };

    // setup the Ajax infrastructure
    this.initAjax = function() {

        OB.Api = function(apiName, action, data, callback) {

            // based on http://api.jquery.com/jquery.ajax/
            var path = OB.baseUrl + 'api/' + apiName + '_api/' + action;
            var ajaxCall = $.ajax;

            if (data === null || typeof data === 'undefined') {
                data = {};
            }

            data[OB.CSRF.name] = OB.CSRF.token;

            console.log('ajax: start', path, data);

            var requirements = {
                type: 'POST',
                url: path,
                data: data,
                dataType: 'json'
            };

            requirements.success = function(result) {

                console.log('ajax: response', result);

                if (typeof callback !== 'undefined') {
                    callback(result);
                }

            };

            requirements.error = function(xhr, ajaxOptions, thrownError) {
                console.log('ajax: error', xhr, ajaxOptions, thrownError);
            };

            return ajaxCall(requirements);

        };

    };

    this.adjustContainers = function() {
        
        var container = $('.min-height-bottom');
        
        if (!container.length) {
            return;
        }
        
        var offset = container.offset().top;
        container.height($(window).height() - offset);
        
    };

    // called when boatloader does it's initial steps
    this.onBootloaderReady = function() {

        $(document).ready(onDocumentReady);
        initAjax();

        Tools.load.css(OB.baseUrl + 'css/cards.css');

        $(window).resize(adjustContainers);
        adjustContainers();

    }();

    return {
        tools: this.Tools
    };

}(jQuery);

function base_url(path) {
    return (OB.baseUrl + path);
}

function redirect(path) {
    window.location = OB.baseUrl + path;
}

!function($) {

    $.fn.serializeObject = function() {
        var o = {};
        var a = this.serializeArray();
        $.each(a, function() {
            if (o[this.name] !== undefined) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || '');
            } else {
                o[this.name] = this.value || '';
            }
        });
        return o;
    };

}(jQuery);

// Link logic to OB for general use
OB.Tools = OB.Bootloader.tools;