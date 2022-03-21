<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
</head>
<body>
    <div style="position: relative;width:100%;padding-bottom:100px;margin-left: 185px">

        <img src="{{ asset('img/logo.png') }}" alt="" style="display: block;position: absolute;width: 50px;">
        <div style="color: rgb(17 24 39); position: absolute; left: 65px;top:7px">
            <div style="text-transform: uppercase;font-weight: 700;font-size: 15px; font-family:'Times New Roman', Times, serif; letter-spacing: 1.7px"><span class="text-sky-900">{{ __('Evangelismo ') }}</span><span>{{ __('Explosivo') }}</span></div>
            <div style="text-transform: uppercase;font-size: 17px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; letter-spacing: .3px"><span>{{ __('Internacional ') }}</span><span class="text-sky-900">{{ __('no Brasil') }}</span></div>
        </div>

    </div>
    <div style="position: relative; padding-bottom: 15px; border-bottom: solid #cecece 2px">
        <div style="position absolute; top: 0; left:0; border-left: rgb(30, 64, 175) 4px solid; padding-left: 7px">
            <div style="font-family: 'sans-serif'; font-size: 15px">{{ __('FIELDWORKER: ') }} <span style="color: #5e5e5e">{{ $name }}</span></div>
            <div style="font-family: 'sans-serif'; font-size: 15px">{{ __('SUBJECT: ') }} <span style="color: #5e5e5e">{{ $subject }}</span></div>
            <div style="font-family: 'sans-serif'; font-size: 15px">{{ __('DATE: ') }} <span style="color: #5e5e5e">{{ $date }}</span></div>
        </div>
    </div>
    <div style="position: relative;">{!! $text !!}</div>
</body>
</html>
