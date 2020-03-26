"use strict";
var KTPortletTools = function () {
    // Toastr
    var initToastr = function() {
        toastr.options.showDuration = 1000;
    }

    // Demo 1
    var demoEcom = function() {
        // This portlet is lazy initialized using data-portlet="true" attribute. You can access to the portlet object as shown below and override its behavior
        var ecom = new KTPortlet('ecom', {
            tools: {
                toggle: {
                    collapse: 'Collapse me',
                    expand: 'Expand me'
                },
                reload: 'Reload me',
                remove: 'Remove me'
            }
        });

        // Toggle event handlers
        ecom.on('beforeCollapse', function(ecom) {
            $('#ecom-data').removeClass('delay-1s');
        });

        ecom.on('afterCollapse', function(ecom) {
            $('#ecom-data').removeClass('delay-1s');

        });

        ecom.on('beforeExpand', function(portlet) {
            $('#ecom-data').removeClass('delay-1s');

        });

        ecom.on('afterExpand', function(ecom) {
            $('#ecom-data').removeClass('delay-1s');

        });

        // Remove event handlers
        ecom.on('beforeRemove', function(ecom) {
            // toastr.info('Before remove event fired!');

            return confirm('Are you sure to remove this portlet ?');  // remove portlet after user confirmation
        });

        ecom.on('afterRemove', function(ecom) {
            setTimeout(function() {
                // toastr.warning('After remove event fired!');
            }, 2000);
        });

        // Reload event handlers
        ecom.on('reload', function(ecom) {
            // toastr.info('Reload event fired!');

            KTApp.block(ecom.getSelf(), {
                overlayColor: '#ffffff',
                type: 'loader',
                state: 'brand',
                opacity: 0.3,
                size: 'lg'
            });

            // update the content here

            setTimeout(function() {
                KTApp.unblock(ecom.getSelf());
            }, 2000);
        });
    }

    return {
        //main function to initiate the module
        init: function () {
            initToastr();

            // init demos
            demoEcom();
        }
    };
}();

jQuery(document).ready(function() {
    KTPortletTools.init();
});
