<html>
    <head>
        <style>
            /**
                Set the margins of the page to 0, so the footer and the header
                can be of the full height and width !
             **/
            @page {
                margin: 0cm 0cm;
            }

            /** Define now the real margins of every page in the PDF **/
            body {
                margin-top: 3cm;
                margin-left: 2cm;
                margin-right: 2cm;
                margin-bottom: 2cm;
            }

            /** Define the header rules **/
            header {
                position: fixed;
                top: 0cm;
                left: 0cm;
                right: 0cm;
                height: 3cm;
            }

            /** Define the footer rules **/
            footer {
                position: fixed;
                bottom: 0cm;
                left: 0cm;
                right: 0cm;
                height: 0.8cm;
            }
        </style>
        <title>Post :: {{ Auth::user()->name }} - {{ date('Ymd',strtotime($date)) }}</title>
    </head>
    <body>
        <!-- Define header and footer blocks before your content -->
        <header>
            <div style="position: relative;width:100%;">

                <img src="{{ asset('img/banner_post.png') }}" width="100%" height="100%"/>

                <img src="{{ asset('img/logo.png') }}" style="display: block; height: 80px; width: 80px;position: absolute; top: 17px; left: 74px;z-index:999; border-radius: 50%;"/>

                <div style="color: rgb(255,255,255); position: absolute; left: 165px;top:35px">
                    <div style="text-transform: uppercase;font-weight: 700;font-size: 15px; font-family:'Times New Roman', Times, serif; letter-spacing: 1.7px"><span class="text-sky-900">{{ __('Evangelismo ') }}</span><span>{{ __('Explosivo') }}</span></div>
                    <div style="text-transform: uppercase;font-size: 17px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; letter-spacing: .3px"><span>{{ __('Internacional ') }}</span><span class="text-sky-900">{{ __('no Brasil') }}</span></div>
                </div>

                <img src="{{ $photo }}" style="display: block; height: 85px; width: 85px;position: absolute; top: 17px; right: 74px;z-index:999; border-radius: 30%;"/>

            </div>


        </header>

        <footer>
            <img src="{{ asset('img/banner_post_bottom.png') }}" width="100%"/>
        </footer>

        <!-- Wrap the content of your PDF inside a main tag -->
        <main>
            <div style="position: relative; padding-top: 40px; padding-bottom: 15px; border-bottom: solid #rgba(30, 64, 175, 0.5) 2px">
                <div style="border-left: rgba(30, 64, 175, 1) 2px solid; padding-left: 7px;">
                    <div style="font-family: 'sans-serif'; font-size: 14px">{{ __('FIELDWORKER: ') }} <span style="color: #5e5e5e">{{ $name }}</span></div>
                    <div style="font-family: 'sans-serif'; font-size: 14px">{{ __('SUBJECT: ') }} <span style="color: #5e5e5e">{{ $subject }}</span></div>
                    <div style="font-family: 'sans-serif'; font-size: 14px">{{ __('DATE: ') }} <span style="color: #5e5e5e">{{ $date }}</span></div>
                </div>
            </div>
            <div style="position: relative;">{!! $text !!}</div>
        </main>
    </body>
</html>

{{-- <!DOCTYPE html>
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

    <hr>
    test
</body>
</html>
 --}}
