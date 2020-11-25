	var createProductForm = $("#create_form");

	createProductForm.validate({
		debug: false,
		submitHandler: function (createProductForm) {
			event.preventDefault()
			var fd = new FormData(createProductForm);
			$.ajax({
				type: "POST",
				url: "",
				data: fd,
				processData: false,
				contentType: false,
				cache: false,
				timeout: 20000,
				success: function () {
					Swal.fire({
						icon: 'success',
						title: 'تمت العملية بنجاح',
						text: 'تم اضافة عمل جديد',
					}).then((result) => {
						if (result.value) {
							window.location = window.location
						}
					})
				},
				error: console.log('error')
			});
			return false;
		}
	});
