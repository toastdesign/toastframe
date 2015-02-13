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

/*-----------------------------------------------------------------------------------*/
/*  Add TinyMCE 1/2 Button
/*-----------------------------------------------------------------------------------*/
(function() {  
    tinymce.create('tinymce.plugins.one_half', {  
        init : function(ed, url) {  
            ed.addButton('one_half', {  
                title : 'Add 1/2 Columns',  
                image : url+'/one_half.png',  
                onclick : function() {  
                     ed.selection.setContent('[one_half]Content here.[/one_half] [one_half_last]Content here.[/one_half_last]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('one_half', tinymce.plugins.one_half);  
})();

/*-----------------------------------------------------------------------------------*/
/*  Add TinyMCE 1/3 Button
/*-----------------------------------------------------------------------------------*/
(function() {  
    tinymce.create('tinymce.plugins.one_third', {  
        init : function(ed, url) {  
            ed.addButton('one_third', {  
                title : 'Add 1/3 Columns',  
                image : url+'/one_third.png',  
                onclick : function() {  
                     ed.selection.setContent('[one_third]Content here.[/one_third] [one_third]Content here.[/one_third] [one_third_last]Content here.[/one_third_last]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('one_third', tinymce.plugins.one_third);  
})();

/*-----------------------------------------------------------------------------------*/
/*  Add TinyMCE 2/3 Button
/*-----------------------------------------------------------------------------------*/
(function() {  
    tinymce.create('tinymce.plugins.two_third', {  
        init : function(ed, url) {  
            ed.addButton('two_third', {  
                title : 'Add 2/3 Columns',  
                image : url+'/two_third.png',  
                onclick : function() {  
                     ed.selection.setContent('[two_third]Content here.[/two_third] [one_third_last]Content here.[/one_third_last]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('two_third', tinymce.plugins.two_third);  
})();

/*-----------------------------------------------------------------------------------*/
/*  Add TinyMCE 1/4 Button
/*-----------------------------------------------------------------------------------*/
(function() {  
    tinymce.create('tinymce.plugins.one_fourth', {  
        init : function(ed, url) {  
            ed.addButton('one_fourth', {  
                title : 'Add 1/4 Columns',  
                image : url+'/one_fourth.png',  
                onclick : function() {  
                     ed.selection.setContent('[one_fourth]Content here.[/one_fourth] [one_fourth]Content here.[/one_fourth] [one_fourth]Content here.[/one_fourth] [one_fourth_last]Content here.[/one_fourth_last]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('one_fourth', tinymce.plugins.one_fourth);  
})();

/*-----------------------------------------------------------------------------------*/
/*  Add TinyMCE 3/4 Button
/*-----------------------------------------------------------------------------------*/
(function() {  
    tinymce.create('tinymce.plugins.three_fourth', {  
        init : function(ed, url) {  
            ed.addButton('three_fourth', {  
                title : 'Add 3/4 Columns',  
                image : url+'/three_fourth.png',  
                onclick : function() {  
                     ed.selection.setContent('[three_fourth]Content here.[/three_fourth][one_fourth_last]Content here.[/one_fourth_last]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('three_fourth', tinymce.plugins.three_fourth);  
})();

/*-----------------------------------------------------------------------------------*/
/*  Add TinyMCE 1/5 Button
/*-----------------------------------------------------------------------------------*/
(function() {  
    tinymce.create('tinymce.plugins.one_fifth', {  
        init : function(ed, url) {  
            ed.addButton('one_fifth', {  
                title : 'Add 1/5 Columns',  
                image : url+'/one_fifth.png',  
                onclick : function() {  
                     ed.selection.setContent('[one_fifth]Content here.[/one_fifth] [one_fifth]Content here.[/one_fifth] [one_fifth]Content here.[/one_fifth] [one_fifth]Content here.[/one_fifth] [one_fifth_last]Content here.[/one_fifth_last]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('one_fifth', tinymce.plugins.one_fifth);  
})();



