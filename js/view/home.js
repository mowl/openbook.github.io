!function($) {
    
    $(document).ready(function() {
        
        // Animate the partial views to fade in
        var views = ['cardsView', 'usersView', 'conversationsView'];
        
        var i = 0, len = views.length;
        for (; i < len; i++) {
            var view = $('#' + views[i]);
            view.delay((i + 1) * 200).animate({opacity: 1}, 200);
        }
        
        $('body').addClass('bgbody');
        
    });
    
}(jQuery);