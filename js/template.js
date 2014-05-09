var Template = {
    
    parse: function(id, data) {
        
        var content = $('#' + id).html();
        
        content = content.replace(/#\{(\w*)\}/g, function(m,key) {
            return data.hasOwnProperty(key) ? data[key] : '';
        });
        
        return content;
        
    }
    
};