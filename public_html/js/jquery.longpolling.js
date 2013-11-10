/*
 *
 * Copyright (c) 2009 Doubleclique (dev [at] doubleclique [dot] com)
 * Licensed under the MIT (http://www.opensource.org/licenses/mit-license.php) license
 *
 */

/**
 *
 * jquery-longpolling
 *
 * @name     jquery-longpolling
 * @version  0.1
 * @author   Cam Spiers (camspiers [at] gmail [dot] com)
 * @requires jQuery
 *
 * Makes longpolling easier
 *
 */
(function($){
    $.extend({

        longpolling : function(options){

            var _options = options;
            if ( !options.oneloop )
            {
                options.complete = function(){

                    $.longpolling(_options);

                };
            }
            $.ajax(options);
        }

    });

})(jQuery);