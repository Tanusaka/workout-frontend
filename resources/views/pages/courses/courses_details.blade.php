<x-default-layout>

	<div class="card mb-5 mb-xl-8">
		<!--begin::Header-->
		<input hidden type="text" class="form-control form-control-solid" name="sections_id" id="sections_id" />
		<input hidden type="text" class="form-control form-control-solid" placeholder="Course Title" value="{{$id}}" name="id_course" id="id_course" />
		<div class="card-header border-0 pt-5">
			<h3 class="card-title align-items-start flex-column">
				<span class="card-label fw-bold fs-3 mb-1">Course Content</span>
				<!-- <span class="text-muted mt-1 fw-semibold fs-7">Browse and manage all master Courses</span> -->
			</h3>
			<div class="card-toolbar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-trigger="hover" title="Click to add a user">
				<a href="#" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_new_course_deatils">
					<i class="ki-duotone ki-plus fs-2"></i>Add Content</a>
			</div>
		</div>

		<!--begin::Body-->
		<div class="card-body py-3">
			<div class="accordion" id="kt_accordion_1">


			</div>
			<!--end::Table container-->
		</div>

		<div class="card mb-5 mb-xl-8">
			<div class="card-header border-0  pt-5">
				<h3 class="card-title align-items-start flex-column">
					<span class="card-label fw-bold fs-3 mb-1">Summary</span>
					<!-- <span class="text-muted mt-1 fw-semibold fs-7">Browse and manage all master Courses</span> -->
				</h3>

			</div>
			<div class="card-body py-3" id="summry" name="summry" class="fw-semibold fs-5 text-gray-600 text-dark mt-4" style="float: right; margin-right:2%;">
			</div>
		</div>

		<div class="card mb-5 mb-xl-8">
			<div class="card-header border-0 pt-5">
				<h3 class="card-title align-items-start flex-column">
					<span class="card-label fw-bold fs-3 mb-1">Trainer</span>
					<!-- <span class="text-muted mt-1 fw-semibold fs-7">Browse and manage all master Courses</span> -->
				</h3>
			</div>
			<div class="card-body py-3">
				<div id="kt_app_content" class="app-content flex-column-fluid">
					<!--begin::Content container-->
					<div id="kt_app_content_container" class="app-container container-xxl">
						<!--begin::Navbar-->
						<div class="card mb-5 mb-xxl-8">
							<div class="card-body pt-9 pb-0" style="float: right; margin-left:10%;">
								<!--begin::Details-->
								<div class="d-flex flex-wrap flex-sm-nowrap">
									<!--begin: Pic-->
									<div class="me-7 mb-4">
										<div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
											<img src="assets/media/avatars/300-1.jpg" alt="image" />
											<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
										</div>
									</div>
									<!--end::Pic-->
									<!--begin::Info-->
									<div class="flex-grow-1">
										<!--begin::Title-->
										<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
											<!--begin::User-->
											<div class="d-flex flex-column">
												<!--begin::Name-->
												<div class="d-flex align-items-center mb-2">
													<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Max Smith</a>
													<a href="#">
														<i class="ki-duotone ki-verify fs-1 text-primary">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</a>
												</div>
												<!--end::Name-->
												<!--begin::Info-->
												<div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
													<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
														<i class="ki-duotone ki-award fs-4 me-1">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>4.0 Trainer Rating</a>
													<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
														<i class="ki-duotone ki-arrow-circle-left fs-4 me-1">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>23,300 Reviews</a>
													<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
														<i class="ki-duotone ki-teacher fs-4 me-1">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>12 Courses</a>
												</div>
												<!--end::Info-->
											</div>
										</div>
										<!--end::Title-->
										<!--begin::Stats-->
										<div class="d-flex flex-wrap flex-stack">
											<!--begin::Wrapper-->
											<div class="d-flex flex-column flex-grow-1 pe-8">
												<!--begin::Stats-->
												<div class="d-flex flex-wrap">
													<!--begin::Stat-->
													<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
														<!--begin::Number-->
														<div class="d-flex align-items-center">
															<i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
															<div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="14.99/PM" data-kt-countup-prefix="$">0</div>
														</div>
														<!--end::Number-->
														<!--begin::Label-->
														<div class="fw-semibold fs-6 text-gray-400">Payment Plan</div>
														<!--end::Label-->
													</div>
													<!--end::Stat-->
													<!--begin::Stat-->
													<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
														<!--begin::Number-->
														<div class="d-flex align-items-center">
															<i class="ki-duotone ki-arrow-down fs-3 text-danger me-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
															<div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="12.5">0</div>
														</div>
														<!--end::Number-->
														<!--begin::Label-->
														<div class="fw-semibold fs-6 text-gray-400">Projects</div>
														<!--end::Label-->
													</div>
													<!--end::Stat-->
													<!--begin::Stat-->
													<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
														<!--begin::Number-->
														<div class="d-flex align-items-center">
															<i class="ki-duotone ki-arrow-up fs-3 text-success me-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
															<div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="60" data-kt-countup-prefix="%">0</div>
														</div>
														<!--end::Number-->
														<!--begin::Label-->
														<div class="fw-semibold fs-6 text-gray-400">Success Rate</div>
														<!--end::Label-->
													</div>
													<!--end::Stat-->
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Wrapper-->
											<!--begin::Progress-->
											<div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
												<div class="d-flex justify-content-between w-100 mt-auto mb-2">
													<span class="fw-semibold fs-6 text-gray-400">Profile Compleation</span>
													<span class="fw-bold fs-6">50%</span>
												</div>
												<div class="h-5px mx-3 w-100 bg-light mb-3">
													<div class="bg-success rounded h-5px" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<!--end::Progress-->
										</div>
										<!--end::Stats-->
									</div>
									<!--end::Info-->
								</div>
								<!--end::Details-->
							</div>
						</div>
					</div>
				</div>


				<!-- ---------------------------------------------------------------model------------------------------------- -->

				<!--begin::Modal - New Target-->
				<div class="modal fade" id="kt_modal_add_new_course_deatils" tabindex="-1" aria-hidden="true">
					<!--begin::Modal dialog-->
					<div class="modal-dialog modal-dialog-centered mw-650px">
						<!--begin::Modal content-->
						<div class="modal-content rounded">
							<div class="modal-header pb-0 border-0 justify-content-end">
								<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">{!! getIcon('cross', 'fs-1') !!}</div>
							</div>
							<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
								<!--begin:Form-->

								<form id="kt_modal_new_target_form" class="form" action="#">
									<!--begin::Heading-->
									<div class="mb-13 text-center">
										<!--begin::Title-->
										<h1 class="mb-3">Add Section</h1>
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->


									<div class="row mb-6">
										<!--begin::Label-->
										<label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8">
											<!--begin::Image input-->
											<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
												<!--begin::Preview existing avatar-->
												<div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/300-1.jpg)"></div>
												<!--end::Preview existing avatar-->
												<!--begin::Label-->
												<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
													<i class="ki-duotone ki-pencil fs-7">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
													<!--begin::Inputs-->
													<input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
													<input type="hidden" name="avatar_remove" />
													<!--end::Inputs-->
												</label>
												<!--end::Label-->
												<!--begin::Cancel-->
												<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
													<i class="ki-duotone ki-cross fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</span>
												<!--end::Cancel-->
												<!--begin::Remove-->
												<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
													<i class="ki-duotone ki-cross fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</span>
												<!--end::Remove-->
											</div>
											<!--end::Image input-->
											<!--begin::Hint-->
											<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
											<!--end::Hint-->
										</div>
										<!--end::Col-->
									</div>
									<div class="d-flex flex-column mb-8 fv-row">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
											<span class="required">Section Name</span>
											<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></span>
										</label>
										<!--end::Label-->
										<input type="text" class="form-control form-control-solid" placeholder="Section Name" id="Section_Name" name="Section_Name" />
									</div>

									<!--end::Input group-->
									<!--begin::Actions-->
									<div class="text-center" id="append_sestion" name="append_sestion">

										<button type="reset" id="kt_modal_upgrade_plan_btn" class="btn btn-light me-3">Cancel</button>
										<button onclick="Save_Section();" type="button" id="kt_modal_upgrade_plan_btn" class="btn btn-primary">
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






				<div class="modal fade" id="kt_modal_add_new_course_deatils_update" tabindex="-1" aria-hidden="true">
					<!--begin::Modal dialog-->
					<div class="modal-dialog modal-dialog-centered mw-650px">
						<!--begin::Modal content-->
						<div class="modal-content rounded">
							<div class="modal-header pb-0 border-0 justify-content-end">
								<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">{!! getIcon('cross', 'fs-1') !!}</div>
							</div>
							<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
								<!--begin:Form-->

								<form id="kt_modal_new_target_form" class="form" action="#">
									<!--begin::Heading-->
									<div class="mb-13 text-center">
										<!--begin::Title-->
										<h1 class="mb-3">Update Section</h1>
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->


									<div class="row mb-6">
										<!--begin::Label-->
										<label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8">
											<!--begin::Image input-->
											<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
												<!--begin::Preview existing avatar-->
												<div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/300-1.jpg)"></div>
												<!--end::Preview existing avatar-->
												<!--begin::Label-->
												<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
													<i class="ki-duotone ki-pencil fs-7">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
													<!--begin::Inputs-->
													<input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
													<input type="hidden" name="avatar_remove" />
													<!--end::Inputs-->
												</label>
												<!--end::Label-->
												<!--begin::Cancel-->
												<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
													<i class="ki-duotone ki-cross fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</span>
												<!--end::Cancel-->
												<!--begin::Remove-->
												<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
													<i class="ki-duotone ki-cross fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</span>
												<!--end::Remove-->
											</div>
											<!--end::Image input-->
											<!--begin::Hint-->
											<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
											<!--end::Hint-->
										</div>
										<!--end::Col-->
									</div>
									<div class="d-flex flex-column mb-8 fv-row">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
											<span class="required">Section Name</span>
											<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></span>
										</label>
										<!--end::Label-->
										<input type="text" class="form-control form-control-solid" placeholder="Section Name" id="Section_Update" name="Section_Name_update" />
									</div>

									<!--end::Input group-->
									<!--begin::Actions-->
									<div class="text-center" id="append_sestion" name="append_sestion">

										<button type="reset" id="kt_modal_upgrade_plan_btn" class="btn btn-light me-3">Cancel</button>
										<button onclick="Save_update();" type="button" id="kt_modal_upgrade_plan_btn" class="btn btn-primary">
											<span class="indicator-label">Update</span>
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
				<!-- ------------------------------------------------------------------------------- -->

				<div class="modal fade" id="kt_modal_add_lessons_deatils" tabindex="-1" aria-hidden="true">
					<!--begin::Modal dialog-->
					<div class="modal-dialog modal-dialog-centered mw-650px">
						<!--begin::Modal content-->
						<div class="modal-content rounded">
							<div class="modal-header pb-0 border-0 justify-content-end">
								<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">{!! getIcon('cross', 'fs-1') !!}</div>
							</div>
							<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
								<!--begin:Form-->

								<form id="kt_modal_new_target_form" class="form" action="#">
									<!--begin::Heading-->
									<div class="mb-13 text-center">
										<!--begin::Title-->
										<h1 class="mb-3">Add Lesson</h1>
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->

									<div class="d-flex flex-column mb-8 fv-row">
										<form class="form" action="#" method="post">
											<!--begin::Input group-->
											<div class="fv-row">
												<!--begin::Dropzone-->
												<div class="dropzone" id="kt_dropzonejs_example_1">
													<!--begin::Message-->
													<div class="dz-message needsclick">
														<i class="ki-duotone ki-file-up fs-3x text-primary"><span class="path1"></span><span class="path2"></span></i>

														<!--begin::Info-->
														<div class="ms-4">
															<h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
															<span class="fs-7 fw-semibold text-gray-400">Upload up to 10 files</span>
														</div>
														<!--end::Info-->
													</div>
												</div>
												<!--end::Dropzone-->
											</div>
											<!--end::Input group-->
										</form>
									</div>
									<div class="d-flex flex-column mb-8 fv-row">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
											<span class="required">Lesson Name</span>
											<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></span>
										</label>
										<!--end::Label-->
										<input type="text" class="form-control form-control-solid" placeholder="Lesson Name" id="Lesson_Name" name="Lesson_Name" />
									</div>

									<div class="d-flex flex-column mb-8 fv-row">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
											<span class="required">Duration</span>
											<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></span>
										</label>
										<!--end::Label-->
										<input type="text" class="form-control form-control-solid" placeholder="Duration" id="Duration" name="Duration" />
									</div>

									<div class="d-flex flex-column mb-8">
										<label class="fs-6 fw-semibold mb-2">Content</label>
										<textarea class="form-control form-control-solid" rows="3" name="content" placeholder="Content" id="content"></textarea>
									</div>

									<!--end::Input group-->
									<!--begin::Actions-->
									<div class="text-center">
										<div>
											<button type="reset" id="kt_modal_add_lessons_deatils" class="btn btn-light me-3">Cancel</button>
											<button onclick="Save_Lesson();" type="button" id="kt_modal_new_target_submit" class="btn btn-primary">
												<span class="indicator-label">Submit</span>
												<span class="indicator-progress">Please wait...
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
										</div>
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
				<!-----------------------------------------------------------------model------------------------------------- -->

</x-default-layout>

<script src="assets\js\custom\keycheck.js">
	$(document).ready(function() {
		check_key();
	});
</script>
<script src="assets/js/jquery.repeater.js"></script>
<script type="text/javascript">


	var token = localStorage.getItem('JWTTKN');
	$(document).ready(function() {

		var id = $('#id_course').val();
		Data_table_Course();
	});

	function Save_Section() {

		var Section_Name = $('#Section_Name').val();
		var id_course = $('#id_course').val();
		$.ajaxSetup({
			headers: {
				'Authorization': 'Bearer ' + token
			}
		})
		$.ajax({
			type: 'POST',
			url: 'https://workout.americanathleticsco.com/courses/sections/save',
			data: {
				'courseid': id_course,
				'title': Section_Name,
			},
			success: function(data) {}
		});

	}

	function Save_update() {

		var sections_id = $('#sections_id').val();
		var Section_Name = $('#Section_Update').val();
		var id_course = $('#id_course').val();
		$.ajaxSetup({
			headers: {
				'Authorization': 'Bearer ' + token
			}
		})
		$.ajax({
			type: 'POST',
			url: 'https://workout.americanathleticsco.com/courses/sections/update',
			data: {
				'sectionid': sections_id,
				'courseid': id_course,
				'title': Section_Name,
			},
			success: function(data) {

			}
		});


	}
	function loads_ection__with_id(id) {
		$.ajaxSetup({
			headers: {
				'Authorization': 'Bearer ' + token
			}
		})
		$.ajax({
			type: 'POST',
			url: 'https://workout.americanathleticsco.com/courses/sections/get',
			data: {
				'id': id
			},
			success: function(data) {
				console.log(data.title);
				$('#Section_Update').val(data.title);
				$('#sections_id').val(id);
			}
		});


	}


	function Save_Lesson() {

		var Lesson_Name = $('#Lesson_Name').val();
		var Duration = $('#Duration').val();
		var content = $('#content').val();
		$.ajaxSetup({
			headers: {
				'Authorization': 'Bearer ' + token
			}
		})
		$.ajax({
			type: 'POST',
			url: 'https://workout.americanathleticsco.com/courses/sections/contents/save',
			data: {
				'sectionid': 1,
				'title': Lesson_Name,
				'type': "image/video",
				'contentmedia': content,
			},
			success: function(data) {


			}
		});


	}

	function Data_table_Course() {
		var id = $('#id_course').val();
		$.ajaxSetup({
			headers: {
				'Authorization': 'Bearer ' + token
			}
		})
		$.ajax({
			type: 'POST',
			url: 'https://workout.americanathleticsco.com/courses/get',
			data: {
				'id': id,
			},
			success: function(data) {
				console.log('22');
				console.log(data['description']);
				var indexx = 0;

				var div = document.getElementById('summry');
				div.innerHTML += '<p class="fw-semibold fs-5 text-gray-600 text-dark mt-4" margin-right:2%;">' + data['description'] + '<p>';



				$.each(data.sections, function(index, value) {

					$('#kt_accordion_1').append('<div class="accordion-item"><h2 class="accordion-header" id="kt_accordion_1_header_' + value.id + '"><button class="accordion-button fs-4 fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_' + value.id + '" aria-expanded="false" aria-controls="kt_accordion_1_body_' + value.id + '"><div style="width:85%;" class="d-flex align-items-center"><div class="symbol symbol-45px me-5"><img src="assets/media/avatars/300-14.jpg" alt="" /></div><div class="d-flex justify-content-start flex-column"><a href="#" class="text-dark fw-bold text-hover-primary fs-6">' + value.title + '</a><span class="text-muted fw-semibold text-muted d-block fs-7">05 Programs | 60 minutes</span></div></div><div style="float: right; margin-left:5%;"><a href="" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#kt_modal_add_lessons_deatils"><i class="ki-duotone ki-plus fs-2"><span class="path1"></span><span class="path2"></span></i></a></div><div style="float: right; margin-left:2%; margin-right:2%"><a onclick="loads_ection__with_id(' + value.id + ');" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#kt_modal_add_new_course_deatils_update"><i class="ki-duotone ki-pencil fs-2"><span class="path1"></span><span class="path2"></span></i></a></div></button></h2><div id="kt_accordion_1_body_' + value.id + '" class="accordion-collapse collapse" aria-labelledby="kt_accordion_1_header_' + value.id + '" data-bs-parent="#kt_accordion_1"><div class="accordion-body" id="accordion-body_' + value.id + '"></div></div></div>');

					$.each(value.contents, function(index2, value2) {
						$('#accordion-body_' + value.id).append('<div class = "overflow-auto pb-5" > <!--begin::Record--><div class="d-flex align-items-center border border-dashed border-gray-300 rounded px-7 py-3 mb-5" style="width:100%;"><!--begin::Title--><i class="las la-file-pdf fs-2x" style="margin-right:3%; "></i><span style="width:80%;" class="fs-5 text-dark text-hover-primary fw-semibold ">' + value2.title + '</span><!--end::Title--><!--begin::Progress--><div class=" pe-2"><span class="badge badge-light-primary">' + value2.duration + ' minutes</span></div><!--end::Progress--></div><!--end::Record--></div>');
					});

				});


			}
		});
	}




	$('#kt_docs_repeater_basic').repeater({
		initEmpty: false,

		defaultValues: {
			'text-input': 'foo'
		},

		show: function() {
			$(this).slideDown();
		},

		hide: function(deleteElement) {
			$(this).slideUp(deleteElement);
		}
	});

	var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
		url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
		paramName: "file", // The name that will be used to transfer the file
		maxFiles: 10,
		maxFilesize: 10, // MB
		addRemoveLinks: true,
		accept: function(file, done) {
			if (file.name == "wow.jpg") {
				done("Naha, you don't.");
			} else {
				done();
			}
		}
	});
</script>