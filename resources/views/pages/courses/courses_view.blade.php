<x-default-layout>
	<div class="card mb-5 mb-xl-8">
		<!--begin::Header-->

		<div class="card-header border-0 pt-5">
			<h3 class="card-title align-items-start flex-column">
				<span class="card-label fw-bold fs-3 mb-1">Courses</span>
				<span class="text-muted mt-1 fw-semibold fs-7">Browse and manage all master Courses</span>
			</h3>
			<div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add a user">
				<a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_new_course">
					<i class="ki-duotone ki-plus fs-2"></i>New Course</a>
			</div>
		</div>
		<!--end::Header-->
		<!--begin::Body-->
		<div class="card-body py-3">
			<!--begin::Table container-->
			<div class="table-responsive">
				<!--begin::Table-->
				<table id="table" class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
					<!--begin::Table head-->
					<thead>
						<tr class="fw-bold text-muted">
							<th class="min-w-300px">Title</th>
							<th class="min-w-200px">Level</th>
							<th class="min-w-150px">Description</th>
							<th class="min-w-100px text-start">Actions</th>
						</tr>
					</thead>
					<!--end::Table head-->
					<!--begin::Table body-->
					<tbody>

					</tbody>
					<!--end::Table body-->
				</table>
				<!--end::Table-->
			</div>
			<!--end::Table container-->
		</div>


		<!--begin::Modal - New Target-->
		<div class="modal fade" id="kt_modal_add_new_course" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content rounded">
					<!--begin::Modal header-->
					<div class="modal-header pb-0 border-0 justify-content-end">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">{!! getIcon('cross', 'fs-1') !!}</div>
						<!--end::Close-->
					</div>
					<!--begin::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
						<!--begin:Form-->
						<form id="kt_modal_new_target_form" class="form" action="#">
							<!--begin::Heading-->
							<div class="mb-13 text-center">
								<!--begin::Title-->
								<h1 class="mb-3">Add Course</h1>
							</div>
							<!--end::Heading-->
							<!--begin::Input group-->
							<div class="d-flex flex-column mb-8 fv-row">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
									<span class="required">Course Title</span>
									<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></span>
								</label>
								<!--end::Label-->
								<input type="text" class="form-control form-control-solid" placeholder="Course Title" name="Course_Title" id="Course_Title" />
							</div>
							<div class="d-flex flex-column mb-8 fv-row">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
									<span class="required">Course Subtitle</span>
									<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></span>
								</label>
								<!--end::Label-->
								<input type="text" class="form-control form-control-solid" placeholder="Course Subtitle" name="Course_Subtitle" id="Course_Subtitle" />
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="d-flex flex-column mb-8 fv-row">
								<!--begin::Col-->
								<span class="required">Select Course Type (EX: Basic/Advanced)</span>
								<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Course Type (EX: Basic/Advanced" name="Course_Type" id="Course_Type">
									<option value="Basic">Basic</option>
									<option value="Advanced">Advanced</option>
								</select>
								<!--end::Col-->
							</div>

							<div class="d-flex flex-column mb-8 fv-row">
								<!--begin::Col-->
								<span class="required">Select Trainer</span>
								<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Course Type (EX: Basic/Advanced" name="Select_Trainer" id="Select_Trainer">
									<option value="1">Basic</option>
									<option value="2">Advanced</option>
								</select>
								<!--end::Col-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="d-flex flex-column mb-8">
								<label class="fs-6 fw-semibold mb-2">Description</label>
								<textarea class="form-control form-control-solid" rows="3" name="Target_Details" id="Target_Details" placeholder="Type Target Details"></textarea>
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="d-flex flex-column mb-8 fv-row">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
									<span class="required">Tags</span>
									@include('partials/general/_form-tooltip-hint')
								</label>
								<!--end::Label-->
								<div class="d-flex align-items-center">
									<!--begin::Checkbox-->
									<label class="form-check form-check-custom form-check-solid me-10">
										<input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="email" checked="checked" />
										<span class="form-check-label fw-semibold">Abs</span>
									</label>
									<!--end::Checkbox-->
									<label class="form-check form-check-custom form-check-solid me-10">
										<input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="email" checked="checked" />
										<span class="form-check-label fw-semibold">Intermediate</span>
									</label>
									<label class="form-check form-check-custom form-check-solid me-10">
										<input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="email" checked="checked" />
										<span class="form-check-label fw-semibold">Isolation</span>
									</label>
									<label class="form-check form-check-custom form-check-solid me-10">
										<input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="email" checked="checked" />
										<span class="form-check-label fw-semibold">Pull</span>
									</label>
									<label class="form-check form-check-custom form-check-solid me-10">
										<input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="email" checked="checked" />
										<span class="form-check-label fw-semibold">Bilateral</span>
									</label>
								</div>
							</div>

							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="text-center">
								<button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
								<button onclick="Save_Course();" type="button" id="kt_modal_new_target_submit" class="btn btn-primary">
									<span class="indicator-label">Submit</span>
									<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
								</button>
							</div>
							<!--end::Actions-->
						</form>
						<!--end:Form-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - New Target-->



</x-default-layout>

<script type="text/javascript">
	var token = localStorage.getItem('JWTTKN');
	$(document).ready(function() {
		Data_table_Course();
	});

	function Data_table_Course() {

		$.ajaxSetup({
			headers: {
				'Authorization': 'Bearer ' + token
			}
		})
		$.ajax({
			type: 'GET',
			url: 'https://workout.americanathleticsco.com/courses',
			success: function(data) {
				$.each(data, function(index, value) {
					$('#table').append('<tr><td><div class="d-flex align-items-center"><div class="symbol symbol-45px me-5"><img src="assets/media/avatars/300-14.jpg" alt="" /></div><div class="d-flex justify-content-start flex-column"><a href="#" class="text-dark fw-bold text-hover-primary fs-6">' + value.title + '</a><span class="text-muted fw-semibold text-muted d-block fs-7">' + value.subtitle + '</span></div></div></td><td><a href="#" class="text-dark fw-bold text-hover-primary d-block fs-6">' + value.level + '</a></td><td class="text-end"><div class="d-flex flex-column w-100 me-2"><div class="d-flex flex-stack mb-2"><a href="#" class="text-dark fw-bold text-hover-primary d-block fs-6">' + value.description + '</a></div></div></td><td><div class="d-flex justify-content-end flex-shrink-0"><a  onclick="view_c_deatils(' + value.id + ')" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"><i class="ki-duotone ki-plus-circle fs-2"><span class="path1"></span><span class="path2"></span></i></a><a onclick="Edit_Course(' + value.id + ');" data-bs-toggle="modal" data-bs-target="#kt_modal_add_new_course" href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"><i class="ki-duotone ki-pencil fs-2"><span class="path1"></span><span class="path2"></span></i></a><a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm"><i class="ki-duotone ki-trash fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i></div></td></tr>');
				});

				console.log(data)

			}
		});
	}

	function Save_Course() {
		var Select_Trainer = $('#Select_Trainer').val();
		var Course_Title = $('#Course_Title').val();
		var Course_Subtitle = $('#Course_Subtitle').val();
		var Course_Type = $('#Course_Type').val();
		var Target_Details = $('#Target_Details').val();
		var communication = $('[name=communication]').val();
		$.ajaxSetup({
			headers: {
				'Authorization': 'Bearer ' + token
			}
		})
		$.ajax({
			type: 'POST',
			url: 'https://workout.americanathleticsco.com/courses/save',
			data: {
				'prid': Select_Trainer,
				'type': "course",
				'title': Course_Title,
				'subtitle': Course_Subtitle,
				'level': Course_Type,
				'description': Target_Details,
				'covermediatype': "image",
				'covermedia': "covermedia path goes here",
				'status': "A",
				'sections': communication,
			},
			success: function(data) {

				$("#table tr").remove();
				Data_table_Course();
			}
		});


	}

	function Edit_Course(ID) {
		$('#Select_Trainer').val("");
		$('#Course_Title').val("");
		$('#Course_Subtitle').val("");
		$('#Course_Type').val("");
		$('#Target_Details').val("");
		$('[name=communication]').val("");
		$.ajaxSetup({
			headers: {
				'Authorization': 'Bearer ' + token
			}
		})

		$.ajax({
			type: 'POST',
			url: 'https://workout.americanathleticsco.com/courses/get',
			data: {
				'id': ID,
			},
			success: function(data) {
				$('#Select_Trainer').val(data.prid);
				$('#Course_Title').val(data.title);
				$('#Course_Subtitle').val(data.subtitle);
				$('#Course_Type').val(data.level);
				$('#Target_Details').val(data.description);
				$('[name=communication]').val(data.sections['id']);
			}
		});

	}

	function view_c_deatils(id) {

		// var url = "{{ route('coursesdetails', 1) }}";
		// location.href = url;

		// console.log(id);
		var url = '{{ route("coursesdetails", ":id") }}';
		url = url.replace(':id', 'id='+id);
		location.href = url;
	}

	
</script>