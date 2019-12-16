/* [ ---- Ebro Admin - common js ---- ] */

    $(function() {    
        
        //* ebro style switcher
        ebro_styleSwitcher.init();
        
        //* don't close dropdown on document click
        $('.notification_dropdown .dropdown-menu').click(function(e) {
            e.stopPropagation();
        });
        
    });

    //* get text without DOM element from node
    jQuery.fn.justtext=function(){return $.trim($(this).clone().children().remove().end().text())};

    //* avoid 'console' errors in browsers that lack a console
    if (!(window.console && console.log)) {
        (function() {
            var noop = function() {};
            var methods = ['assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error', 'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log', 'markTimeline', 'profile', 'profileEnd', 'markTimeline', 'table', 'time', 'timeEnd', 'timeStamp', 'trace', 'warn'];
            var length = methods.length;
            var console = window.console = {};
            while (length--) {
                console[methods[length]] = noop;
            }
        }());
    }

    //* detect touch devices 
    function is_touch_device() {
        return !!('ontouchstart' in window);
    };
    
    //* detect HiRes displays
    function isRetina(){
        var mediaQuery = "(-webkit-min-device-pixel-ratio: 1.5),\
                (min--moz-device-pixel-ratio: 1.5),\
                (-o-min-device-pixel-ratio: 3/2),\
                (min-resolution: 1.5dppx)";
        if (window.devicePixelRatio > 1)
            return true;
        if (window.matchMedia && window.matchMedia(mediaQuery).matches)
            return true;
        return false;
    };
    
    //* browser detect
    jQuery.browser = {};
    jQuery.browser.mozilla = /mozilla/.test(navigator.userAgent.toLowerCase()) && !/webkit/.test(navigator.userAgent.toLowerCase());
    jQuery.browser.webkit = /webkit/.test(navigator.userAgent.toLowerCase());
    jQuery.browser.opera = /opera/.test(navigator.userAgent.toLowerCase());
    jQuery.browser.msie = /msie/.test(navigator.userAgent.toLowerCase());
     
    
    //* style switcher
    ebro_styleSwitcher = {
        init: function() {
            
            //* layout
            $('#layout_style').on('change', function() {
                $this_val = $(this).val();
                
                $('body').removeClass('boxed full_width').removeClass('pattern_1 pattern_2 pattern_3 pattern_4 pattern_5 pattern_6 pattern_7 pattern_8  pattern_9  pattern_10');
                $('#style_pattern').hide();
                
                if($this_val == 'boxed') {
                    $('body').removeClass('full_width');
                    $('body').addClass($this_val+' pattern_1');
                    $('#style_pattern').show();
                }
                if($this_val == 'full_width') {
                    $('body').addClass('full_width');
                }
            })
            
            //* colors
            $('#theme_switch li').on('click',function() {
                var $color = $(this).attr('title');
                $('#theme_switch li').removeClass('style_active');
                $(this).addClass('style_active');
                $('#theme').attr('href','css/theme/'+$color+'.css');
            });
            
            //* patterns
            $('#style_pattern li').on('click',function() {
                var $pattern = $(this).attr('title');
                $('#style_pattern li').removeClass('pattern_active');
                $(this).addClass('pattern_active');
                $('body').removeClass('pattern_1 pattern_2 pattern_3 pattern_4 pattern_5 pattern_6 pattern_7 pattern_8  pattern_9  pattern_10').addClass($pattern);
            });
            
            //* show/hide style switcher
            $('.switcher_toggle').on('click', function(e) {
                if(!$('#style_switcher').hasClass('switcher_open')) {
                    $('#style_switcher').animate({ marginRight: 0 },200, function() {
                        $(this).addClass('switcher_open')  
                    })  
                } else {
                    $('#style_switcher').animate({ marginRight: '-191px'},200, function() {
                        $(this).removeClass('switcher_open')  
                    })  
                }
                e.preventDefault();
            })
            
            //* sidebar position
            $('#sidebar_switch input[name="sidebar_position"]').on('change', function() {
                $this_val = $(this).val();
                if($this_val == 'right') {
                    $('body').addClass('sidebar_right');
                } else {
                    $('body').removeClass('sidebar_right');
                }
            })
            
            //* reset styles
            $('#style_reset').click(function() {
                $('#style_pattern li').removeClass('pattern_active').eq(0).addClass('pattern_active');
                $('#style_pattern').hide();
                
                $('#layout_style>option:eq(0)').prop('selected', true);
                
                $('#theme_switch li').removeClass('style_active').eq(0).addClass('style_active');
                $('#theme').attr('href','css/theme/color_1.css');
                
                $('body').removeClass('pattern_1 pattern_2 pattern_3 pattern_4 pattern_5 pattern_6 pattern_7 pattern_8  pattern_9  pattern_10 sidebar_right boxed full_width');
                
                $("#sidebar_left").prop("checked", true);
            })

            $('#layout_style>option:eq(0)').prop('selected', true).change();
            $('#sidebar_left').prop('checked', true);
            
            setTimeout(function(){
                $('#style_switcher').animate({ marginRight: '-191px'},200, function() {
                    $(this).removeClass('switcher_open')  
                })  
            },100);
            
            ebro_styleSwitcher.save_state();
            
        },
        save_state: function() {
            $('#layout_style').on('change', function() {
                $this_val = $(this).val();
                $.cookie('ebro_layout','fixed');
                if($this_val == 'boxed') {
                    $.cookie('ebro_layout', 'boxed');
                }
                if($this_val == 'full_width') {
                    $.cookie('ebro_layout', 'full_width');
                }
            });
            $('#theme_switch li').on('click',function() {
                $.cookie('ebro_color', $(this).attr('title'));
            });
            $('#style_pattern li').on('click',function() {
                $.cookie('ebro_pattern', $(this).attr('title'));
            });
            $('#sidebar_switch input[name="sidebar_position"]').on('change', function() {
                $this_val = $(this).val();
                if($this_val == 'right') {
                    $.cookie('ebro_sidebar','right');
                } else {
                    if($.cookie('ebro_sidebar') != undefined) {
                        $.removeCookie('ebro_sidebar');
                    }
                }
            });
            $('#style_reset').click(function() {
                if($.cookie('ebro_layout') != undefined) {
                    $.removeCookie('ebro_layout');
                }
                if($.cookie('ebro_sidebar') != undefined) {
                    $.removeCookie('ebro_sidebar');
                }
                if($.cookie('ebro_color') != undefined) {
                    $.removeCookie('ebro_color');
                }
                if($.cookie('ebro_pattern') != undefined) {
                    $.removeCookie('ebro_pattern');
                }
            });
            // check styles on page load
            // if($.cookie('ebro_layout') != undefined) {
            //     $('body').removeClass('boxed full_width').removeClass('pattern_1 pattern_2 pattern_3 pattern_4 pattern_5 pattern_6 pattern_7 pattern_8  pattern_9  pattern_10');
            //     $('#layout_style').val($.cookie('ebro_layout')).change()
            //     if ( ($.cookie('ebro_layout') != 'boxed') && ($.cookie('ebro_pattern') != undefined) ) {
            //         $.removeCookie('ebro_pattern');
            //     }
            // }
            // if($.cookie('ebro_sidebar') != undefined) {
            //     if($.cookie('ebro_sidebar') == 'right') {
            //         $('#sidebar_switch input[name="sidebar_position"]').val('right').change()
            //         $("#sidebar_right").prop("checked", true)
            //     }
            // }
            // if($.cookie('ebro_color') != undefined) {
            //     $("#theme_switch li[title=\""+$.cookie('ebro_color')+"\"]").click();
            // }
            // if($.cookie('ebro_pattern') != undefined) {
            //     $("#style_pattern li[title=\""+$.cookie('ebro_pattern')+"\"]").click();
            // }
        }
    }