<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<script src="{{ url('panelbuilder/js') }}/timepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
<script src="//cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>
<script src="{{ url('panelbuilder/js') }}/bootstrap.min.js"></script>
<script src="{{ url('panelbuilder/js') }}/main.js"></script>

<script>

    $('.datepicker').datepicker({
        autoclose: true,
        dateFormat: "{{ config('panelbuilder.date_format_jquery') }}"
    });

    $('.datetimepicker').datetimepicker({
        autoclose: true,
        dateFormat: "{{ config('panelbuilder.date_format_jquery') }}",
        timeFormat: "{{ config('panelbuilder.time_format_jquery') }}"
    });

    $('#datatable').dataTable( {
        "language": {
            "url": "{{ trans('panelbuilder::strings.datatable_url_language') }}"
        }
    });

</script>
