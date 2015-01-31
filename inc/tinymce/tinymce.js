/*-----------------------------------------------------------------------------------*/
/*	Add TinyMCE twitter Button
/*-----------------------------------------------------------------------------------*/
(function() {  
    tinymce.create('tinymce.plugins.twitter', {  
        init : function(ed, url) {  
            ed.addButton('twitter', {  
                title : 'Adds Twitter share',  
                image : url+'/twitter.png',  
                onclick : function() {  
                    ed.selection.setContent('[twitter]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('twitter', tinymce.plugins.twitter);  
})();

/*-----------------------------------------------------------------------------------*/
/*  Add TinyMCE Button Shortcode
/*-----------------------------------------------------------------------------------*/
(function() {  
    tinymce.create('tinymce.plugins.divider', {  
        init : function(ed, url) {  
            ed.addButton('divider', {  
                title : 'Add Divider',  
                image : url+'/divider.png',  
                onclick : function() {  
                     ed.selection.setContent('[hr style="1,2,3,4" margin="40px 0px 40px 0px"]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('divider', tinymce.plugins.divider);  
})();

/*-----------------------------------------------------------------------------------*/
/*  Add TinyMCE Button Shortcode
/*-----------------------------------------------------------------------------------*/
(function() {  
    tinymce.create('tinymce.plugins.section', {  
        init : function(ed, url) {  
            ed.addButton('section', {  
                title : 'Add section',  
                image : url+'/button.png',  
                onclick : function() {  
                     ed.selection.setContent('[section bgcolor="#f9f9f9" bgimage="IMAGEURL" parallax="true" padding="40px 0" border="1px solid #ececec"]Your Content[/section]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('section', tinymce.plugins.section);  
})();
