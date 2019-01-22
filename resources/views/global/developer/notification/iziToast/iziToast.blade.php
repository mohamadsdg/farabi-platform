<!--Notification-->
<link href="{{ asset('assets/global/plugin/iziToast/css/iziToast.min.css') }}" rel="stylesheet">

<!-- iziToast -->
<script type="text/javascript" src="{{ asset('assets/global/plugin/iziToast/js/iziToast.min.js') }}"></script>

<script type="text/javascript">

    $("document").ready(function () {

        @if (session()->has('msg'))
        showNotification_iziToast('success', "{{session('msg')}}", false, 2500);
        @endif

        @if (session()->has('info'))
        showNotification_iziToast('info', "{{session('info')}}", true, 3000);
        @endif

        @if (session()->has('warning'))
        showNotification_iziToast('warning', "{{session('warning')}}", true, 3000);
        @endif

        @if (session()->has('err'))
        showNotification_iziToast('error', "{{session('err')}}", true, 2500);
        @endif

        @if(isset($errors))
        @if (count($errors) > 0)
        {{-- Validation Error in Laravel, Notification --}}
        @foreach ($errors->all() as $error)
        showNotification_iziToast('error', "{{$error}}", true, 2500);
        @endforeach
        {{-- End Validation Error in Laravel, Notification --}}
        @endif
        @endif

    });
</script>



