$(function(e) {

	//Basic
	$('#swal-basic').on('click', function () {
		swal('Welcome to Your Admin Page')
	});

	//A title with a text under
	$('#swal-title').click(function () {
		swal(
			{
				title: 'Here is  a title!',
				text: 'All are available in the template',
			}
		)
	});

	//Success Message
	$('#swal-success').click(function () {
		swal(
			{
				title: 'Well done!',
				text: 'You clicked the button!',
				type: 'success',
				confirmButtonColor: '#57a94f'
			}
		)
	});

    $(document).ready(function () {
        $('.swal-delete-btn').click(function () {
            var pendudukId = $(this).data('id');

            swal({
                title: "Apakah kamu yakin?",
                text: "Kamu akan menghapus data berikut!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn btn-danger",
                confirmButtonText: "Ya, hapus data",
                closeOnConfirm: false
            }, function () {
                $('#form-delete-' + pendudukId).submit(); // Submit the corresponding form
            });
        });
    });

	//Parameter
    $(document).ready(function () {
        $('.swal-delete-btn').click(function () {
            var pendudukId = $(this).data('id');

            swal({
                title: "Apakah kamu yakin untuk hapus data?",
                text: "kamu akan menghapus data ini!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn btn-danger",
                confirmButtonText: "Yes!",
                closeOnConfirm: false
            }, function () {
                $('#form-delete-' + pendudukId).submit(); // Submit the corresponding form
            });
        });
    });

	//Auto Close Timer
	$('#swal-timer').click(function () {
		swal({
			title: 'Auto close alert!',
			text: 'I will close in 1 seconds.',
			timer: 1000
		})
		// .then(
		// 	function () {
		// 	},
		// 	// handling the promise rejection
		// 	function (dismiss) {
		// 		if (dismiss === 'timer') {
		// 			console.log('I was closed by the timer')
		// 		}
		// 	}
		// )
	});


	//Ajax with Loader Alert
	$('#swal-ajax').click(function () {
		swal({
		  title: "Ajax request example",
		  text: "Submit to run ajax request",
		  type: "info",
		  showCancelButton: true,
		  closeOnConfirm: false,
		  showLoaderOnConfirm: true
		}, function () {
		  setTimeout(function () {
			swal("Ajax request finished!");
		  }, 2000);
		});
	});

});
