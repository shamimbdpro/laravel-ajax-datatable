
(function($) {
        'use strict';
        
        var table = $('#customers').DataTable({
                ajax: "",
                serverSide: true,
                processing: true,
                aaSorting:[[0,"desc"]],
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'phone', name: 'phone'},
                    {data: 'email', name: 'email'},
                    {data: 'action', name: 'action'},
                ]
            });

})(jQuery);