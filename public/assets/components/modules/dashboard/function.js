"use strict";
var updateData = function () {
    // Toastr
    var initToastr = function() {
        toastr.options.showDuration = 1000;
    }

    // Demo 1
    var updateFunction = function() {
        // This portlet is lazy initialized using data-portlet="true" attribute. You can access to the portlet object as shown below and override its behavior
        var updateData = new KTPortlet('update', {
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
        updateData.on('beforeCollapse', function() {
            $('#update-data').removeClass('delay-1s');
        });

        updateData.on('afterCollapse', function() {
            $('#update-data').removeClass('delay-1s');

        });

        updateData.on('beforeExpand', function() {
            $('#update-data').removeClass('delay-1s');

        });

        updateData.on('afterExpand', function() {
            $('#update-data').removeClass('delay-1s');

        });

        // Remove event handlers
        updateData.on('beforeRemove', function() {
            // toastr.info('Before remove event fired!');

            return confirm('Are you sure to remove this portlet ?');  // remove portlet after user confirmation
        });

        updateData.on('afterRemove', function() {
            setTimeout(function() {
                // toastr.warning('After remove event fired!');
            }, 2000);
        });

        // Reload event handlers
        updateData.on('reload', function(data) {
            // toastr.info('Reload event fired!');

            KTApp.block(data.getSelf(), {
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
            updateFunction();
        }
    };
}();

jQuery(document).ready(function() {
    updateData.init();
});
