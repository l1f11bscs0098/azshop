<script>
    window.azshop = {
        version: '{{ azshop_version() }}',
        csrfToken: '{{ csrf_token() }}',
        baseUrl: '{{ url('/') }}',
        rtl: {{ is_rtl() ? 'true' : 'false' }},
        langs: {},
        data: {},
        errors: {},
        selectize: [],
    };

    azshop.langs['admin::admin.buttons.delete'] = '{{ trans('admin::admin.buttons.delete') }}';
    azshop.langs['media::media.file_manager.title'] = '{{ trans('media::media.file_manager.title') }}';
    azshop.langs['media::messages.image_has_been_added'] = '{{ trans('media::messages.image_has_been_added') }}';
</script>

@stack('globals')

@routes
