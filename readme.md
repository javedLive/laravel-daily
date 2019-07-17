## Laravel Update User Status Using Toggle Button Example

Controller >> UserController->index,changeStatus
View >> users.blade.php
Route >> users,changeStatus

- php artisan tinker (for creating demo database).
- factory(App\User::class,50)->create(); (Insert Psy Shell)

## Datatable File export

Add following Resources on view page:
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"><br />
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css"><br />
 <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script><br />
 <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script><br />
 <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script><br />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script><br />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script><br />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script><br />
 <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script><br />
 <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script><br />

JavaScript part:
```
	$(document).ready(function() {
	    $('#myTable').DataTable( {
	        dom: 'Bfrtip',
	        buttons: [
	            'copy', 'csv', 'excel', 'pdf', 'print'
	        ]
	    } );
	});

```
## Create REST API in Laravel with authentication using Passport

Inspired Form : https://medium.com/techcompose/create-rest-api-in-laravel-with-authentication-using-passport-133a1678a876

Additional instruction:

In AppServiceProvider inside boot method insert following line:
Passport::withoutCookieSerialization();

## Date RangePicker on datatables

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> <br />

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script><br />
<script> 

JavaScript Part:
```
 $(document).ready(function(){
    $.fn.dataTable.ext.search.push(
    function (settings, data, dataIndex) {
        var min = $('#min').datepicker("getDate");
        var max = $('#max').datepicker("getDate");
        var startDate = new Date(data[2]);
        if (min == null && max == null) { return true; }
        if (min == null && startDate <= max) { return true;}
        if(max == null && startDate >= min) {return true;}
        if (startDate <= max && startDate >= min) { return true; }
        return false;
    }
    );

   
        $("#min").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
        $("#max").datepicker({ onSelect: function () { table.draw(); }, changeMonth: true, changeYear: true });
        var table = $('#myTable').DataTable();

        // Event listener to the two range filtering inputs to redraw on input
        $('#min, #max').change(function () {
            table.draw();
        });
    });
```
## Security Vulnerabilities



## License


