<x-default-layout>
	<div class="card mb-5 mb-xl-8">
		<!--begin::Header-->

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
		<!--end::Header-->

		<!--begin::Body-->
		<div class="card-body py-3">
			<div class="accordion" id="kt_accordion_1">
				<div class="accordion-item">
					<h2 class="accordion-header" id="kt_accordion_1_header_1">
						<button class="accordion-button fs-4 fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_1" aria-expanded="true" aria-controls="kt_accordion_1_body_1">
							<div style="width:85%;" class="d-flex align-items-center">
								<div class="symbol symbol-45px me-5">
									<img src="assets/media/avatars/300-14.jpg" alt="" />
								</div>
								<div class="d-flex justify-content-start flex-column">
									<a href="#" class="text-dark fw-bold text-hover-primary fs-6">Section Name Goes Here</a>
									<span class="text-muted fw-semibold text-muted d-block fs-7">05 Programs | 60 minutes</span>
								</div>
							</div>
							<div style="float:right; margin-left:5%;">
								<a href="/coursesdetails" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
									<i class="ki-duotone ki-pencil fs-2">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</a>
							</div>
						</button>
					</h2>
					<div id="kt_accordion_1_body_1" class="accordion-collapse collapse show" aria-labelledby="kt_accordion_1_header_1" data-bs-parent="#kt_accordion_1">
						<div class="accordion-body">
							<div class="overflow-auto pb-5">
								<!--begin::Record-->
								<div class="d-flex align-items-center border border-dashed border-gray-300 rounded px-7 py-3 mb-5" style="width:100%;">
									<!--begin::Title-->
									<i class="las la-file-pdf fs-2x" style="margin-right:3%; "></i>
									<span style="width:80%;" class="fs-5 text-dark text-hover-primary fw-semibold ">Lesson name goes here</span>
									<!--end::Title-->
									<!--begin::Progress-->
									<div class=" pe-2">
										<span class="badge badge-light-primary">15:00 minutes</span>
									</div>
									<!--end::Progress-->
								</div>
								<!--end::Record-->
							</div>
							<div class="overflow-auto pb-5">
								<!--begin::Record-->
								<div class="d-flex align-items-center border border-dashed border-gray-300 rounded px-7 py-3 mb-5" style="width:100%;">
									<!--begin::Title-->
									<i class="las la-play-circle fs-2x" style="margin-right:3%; "></i>
									<span style="width:80%;" class="fs-5 text-dark text-hover-primary fw-semibold ">Lesson name goes here</span>
									<!--end::Title-->
									<!--begin::Progress-->
									<div class=" pe-2">
										<span class="badge badge-light-primary">15:00 minutes</span>
									</div>
									<!--end::Progress-->
								</div>
								<!--end::Record-->
							</div>
						</div>

					</div>
				</div>

				<div class="accordion-item">
					<h2 class="accordion-header" id="kt_accordion_1_header_2">
						<button class="accordion-button fs-4 fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_2" aria-expanded="false" aria-controls="kt_accordion_1_body_2">
							<div style="width:85%;" class="d-flex align-items-center">
								<div class="symbol symbol-45px me-5">
									<img src="assets/media/avatars/300-14.jpg" alt="" />
								</div>
								<div class="d-flex justify-content-start flex-column">
									<a href="#" class="text-dark fw-bold text-hover-primary fs-6">Section Name Goes Here</a>
									<span class="text-muted fw-semibold text-muted d-block fs-7">05 Programs | 60 minutes</span>
								</div>
							</div>
							<div style="float:right; margin-left:5%;">
								<a href="/coursesdetails" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
									<i class="ki-duotone ki-pencil fs-2">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</a>
							</div>
						</button>
					</h2>
					<div id="kt_accordion_1_body_2" class="accordion-collapse collapse" aria-labelledby="kt_accordion_1_header_2" data-bs-parent="#kt_accordion_1">
						<div class="accordion-body">
							...
						</div>
					</div>
				</div>

				<div class="accordion-item">
					<h2 class="accordion-header" id="kt_accordion_1_header_3">
						<button class="accordion-button fs-4 fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_3" aria-expanded="false" aria-controls="kt_accordion_1_body_3">
							<div style="width:85%;" class="d-flex align-items-center">
								<div class="symbol symbol-45px me-5">
									<img src="assets/media/avatars/300-14.jpg" alt="" />
								</div>
								<div class="d-flex justify-content-start flex-column">
									<a href="#" class="text-dark fw-bold text-hover-primary fs-6">Section Name Goes Here</a>
									<span class="text-muted fw-semibold text-muted d-block fs-7">05 Programs | 60 minutes</span>
								</div>
							</div>
							<div style="float: right; margin-left:5%;">
								<a href="/coursesdetails" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
									<i class="ki-duotone ki-pencil fs-2">
										<span class="path1"></span>
										<span class="path2"></span>
									</i>
								</a>
							</div>
						</button>
					</h2>
					<div id="kt_accordion_1_body_3" class="accordion-collapse collapse" aria-labelledby="kt_accordion_1_header_3" data-bs-parent="#kt_accordion_1">
						<div class="accordion-body">
							...
						</div>
					</div>
				</div>
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
			<div class="card-body py-3">
				<div class="fw-semibold fs-5 text-gray-600 text-dark mt-4" style="float: right; margin-right:2%;">We’ve been focused on making the from v4 to v5 but we have also not been afraid to step away been focused on from v4 to v5 speaker approachable making focused a but from a step away afraid to step away been focused Writing a blog post is a little like driving; you can study the highway code (or read articles telling you how to write a blog post) for months, but nothing can prepare you for the real thing like getting behind the wheel</div>
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

</x-default-layout>