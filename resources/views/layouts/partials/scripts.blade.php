{{-- Global pages Scripts --}}
<script src="{{ asset('admin/vendors/core/core.js') }}"></script>
<script src="{{ asset('admin/vendors/datatables.net/jquery.dataTables.js') }}"></script>
<script src="{{ asset('admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('admin/vendors/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('admin/vendors/select2/select2.min.js') }}"></script>
<script src="{{ asset('admin/js/select2.js') }}"></script>
<script src="{{ asset('admin/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('admin/js/datepicker.js') }}"></script>

<script src="{{ asset('admin/js/template.js') }}"></script>
<script src="{{ asset('admin/js/data-table.js') }}"></script>

{{-- Toastr Notification --}}
@include('layouts.partials.notify')

{{-- Indivisual Page Scripts --}}
@stack('page-js')
