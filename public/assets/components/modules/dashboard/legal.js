"use strict";
var KTPortletToolsLegal = function () {
    // Toastr
    var initToastr = function() {
        toastr.options.showDuration = 1000;
    }

    // Demo 1
    var demoLegal = function() {
        // This portlet is lazy initialized using data-portlet="true" attribute. You can access to the portlet object as shown below and override its behavior
        var legal = new KTPortlet('legal', {
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
        legal.on('beforeCollapse', function(legal) {
            $('#ecom-data').removeClass('delay-1s');
        });

        legal.on('afterCollapse', function(legal) {
            $('#ecom-data').removeClass('delay-1s');

        });

        legal.on('beforeExpand', function(legal) {
            $('#ecom-data').removeClass('delay-1s');

        });

        legal.on('afterExpand', function(legal) {
            $('#ecom-data').removeClass('delay-1s');

        });

        // Remove event handlers
        legal.on('beforeRemove', function(legal) {
            // toastr.info('Before remove event fired!');

            return confirm('Are you sure to remove this portlet ?');  // remove portlet after user confirmation
        });

        legal.on('afterRemove', function(legal) {
            setTimeout(function() {
                // toastr.warning('After remove event fired!');
            }, 2000);
        });

        // Reload event handlers
        legal.on('reload', function(legal) {
            // toastr.info('Reload event fired!');

            KTApp.block(legal.getSelf(), {
                overlayColor: '#ffffff',
                type: 'loader',
                state: 'brand',
                opacity: 0.3,
                size: 'lg'
            });

            // update the content here

            setTimeout(function() {
                KTApp.unblock(legal.getSelf());
            }, 2000);
        });
    }

    return {
        //main function to initiate the module
        init: function () {"use strict";
        var KTDatatablesDataSourceAjaxServer = function() {

            var initTable1 = function() {
                var table = $('#spph');

                // begin first table
                table.DataTable({
                    responsive: true,
                    searchDelay: 500,
                    processing: true,
                    serverSide: true,
                    scrollY: 300,
                    scrollX: true,
                    ajax: 'https://keenthemes.com/keen/tools/preview/api/datatables/demos/server.php',
                    columns: [
                        {data: 'RecordID'},
                        {data: 'OrderID'},
                        {data: 'Country'},
                        {data: 'ShipCity'},
                        {data: 'ShipAddress'},
                        {data: 'CompanyAgent'},
                        {data: 'CompanyName'},
                        {data: 'ShipDate'},
                        {data: 'Status'},
                        {data: 'Type'},
                        {data: 'Actions', responsivePriority: -1},
                    ],
                    columnDefs: [
                        {
                            targets: -1,
                            title: 'Actions',
                            orderable: false,
                            render: function(data, type, full, meta) {
                                return `
                                <span class="dropdown">
                                    <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown" aria-expanded="true">
                                      <i class="la la-ellipsis-h"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                        <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>
                                        <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>
                                    </div>
                                </span>
                                <a href="#" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="View">
                                  <i class="la la-edit"></i>
                                </a>`;
                            },
                        },
                        {
                            targets: 8,
                            render: function(data, type, full, meta) {
                                var status = {
                                    1: {'title': 'Pending', 'class': 'kt-badge--brand'},
                                    2: {'title': 'Delivered', 'class': ' kt-badge--metal'},
                                    3: {'title': 'Canceled', 'class': ' kt-badge--primary'},
                                    4: {'title': 'Success', 'class': ' kt-badge--success'},
                                    5: {'title': 'Info', 'class': ' kt-badge--info'},
                                    6: {'title': 'Danger', 'class': ' kt-badge--danger'},
                                    7: {'title': 'Warning', 'class': ' kt-badge--warning'},
                                };
                                if (typeof status[data] === 'undefined') {
                                    return data;
                                }
                                return '<span class="kt-badge ' + status[data].class + ' kt-badge--inline kt-badge--pill">' + status[data].title + '</span>';
                            },
                        },
                        {
                            targets: 9,
                            render: function(data, type, full, meta) {
                                var status = {
                                    1: {'title': 'Online', 'state': 'danger'},
                                    2: {'title': 'Retail', 'state': 'primary'},
                                    3: {'title': 'Direct', 'state': 'accent'},
                                };
                                if (typeof status[data] === 'undefined') {
                                    return data;
                                }
                                return '<span class="kt-badge kt-badge--' + status[data].state + ' kt-badge--dot"></span>&nbsp;' +
                                    '<span class="kt-font-bold kt-font-' + status[data].state + '">' + status[data].title + '</span>';
                            },
                        },
                    ],
                });
            };

            return {

                //main function to initiate the module
                init: function() {
                    initTable1();
                }
            };
        }();

        jQuery(document).ready(function() {
            KTDatatablesDataSourceAjaxServer.init();
        });

            initToastr();

            // init demos
            demoLegal();
        }
    };
}();

jQuery(document).ready(function() {
    KTPortletToolsLegal.init();
});
