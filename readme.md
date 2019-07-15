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

	$(document).ready(function() {
	    $('#myTable').DataTable( {
	        dom: 'Bfrtip',
	        buttons: [
	            'copy', 'csv', 'excel', 'pdf', 'print'
	        ]
	    } );
	});


## Laravel Sponsors



## Contributing



## Security Vulnerabilities



## License


