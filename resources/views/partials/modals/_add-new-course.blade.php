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
							<span class="required">Course Name</span>
							<span class="ms-1" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></span>
						</label>
						<!--end::Label-->
						<input type="text" class="form-control form-control-solid" placeholder="Course Name" name="target_title" />
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="d-flex flex-column mb-8 fv-row">
						<!--begin::Col-->
						<span class="required">Select Course Type (EX: Basic/Advanced)</span>
						<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Course Type (EX: Basic/Advanced" name="target_assign">
							<option value="1">Basic</option>
							<option value="2">Advanced</option>
						</select>
						<!--end::Col-->
					</div>

					<div class="d-flex flex-column mb-8 fv-row">
						<!--begin::Col-->
						<span class="required">Select Trainer</span>
						<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select Course Type (EX: Basic/Advanced" name="Select Trainer">
							<option value="1">Basic</option>
							<option value="2">Advanced</option>
						</select>
						<!--end::Col-->
					</div>
					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="d-flex flex-column mb-8">
						<label class="fs-6 fw-semibold mb-2">Target Details</label>
						<textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Type Target Details"></textarea>
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
						<button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
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