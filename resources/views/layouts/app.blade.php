<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link href="/css/app.css?v5" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel =
        <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>;

        var baseUrl = "<?php echo url('/'); ?>";
    </script>

    <!-- Select 2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet"/>

    @yield('headerScripts')
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="170" height="45" viewBox="0 0 340 90"
                     preserveAspectRatio="xMinYMid" aria-hidden="true"><title>London Borough of Hounslow</title>
                    <path d="M40.65,59.87a0.46,0.46,0,0,1-.32-0.42l0-.17-0.18,0a0.54,0.54,0,0,1-.35-0.18A0.76,0.76,0,0,0,40.54,59l0.1,0.14a0.43,0.43,0,0,0-.13.28l0.11,0.21,0.14-.16a0.69,0.69,0,0,1,.32-0.16h0.05l0,0,0.17,0.13a1.13,1.13,0,0,0,.44-0.16l0.1,0a0.43,0.43,0,0,0,.63.41,0.36,0.36,0,0,1-.31.16,0.49,0.49,0,0,1-.43-0.32,1.11,1.11,0,0,1-.43.13,0.34,0.34,0,0,1-.28-0.16c-0.06,0-.38.17-0.28,0.39Zm0.21-1H41a1.17,1.17,0,0,0,.8-0.38v0l-0.06.17v0.05l0,0a1.15,1.15,0,0,0,.54-0.17,1.18,1.18,0,0,0,.55-0.82l0.15-.1L43,57.62l0-.05c0-.05,0-0.15,0-0.28a2.54,2.54,0,0,1,0-.39A0.45,0.45,0,0,1,43,56.64V56.57H43a0.53,0.53,0,0,0-.08.33,2.68,2.68,0,0,0,0,.4,2.51,2.51,0,0,1,0,.26l-0.06.1-0.11.07,0,0a1.11,1.11,0,0,1-.51.79,1.21,1.21,0,0,1-.4.15l0-.14,0-.09-0.08,0,0,0a1.1,1.1,0,0,1-.76.37h0l0-.27,0-.23-0.06-.15h0l0,0-0.17.09h0l0,0,0-.15c0-.19-0.1-0.46-0.1-0.71a0.47,0.47,0,0,1,.26-0.47,0.62,0.62,0,0,0,.27-0.4l0-.2,0-.06v0h0V56.15H41.13l-0.06.13a0.76,0.76,0,0,1-.27.53,0.57,0.57,0,0,0-.31.55c0,0.27.1,0.55,0.1,0.71l0,0.09-0.07,0,0,0,0,0.05a0.38,0.38,0,0,0,.2.06l0.2-.07,0,0.06,0,0.21a0.51,0.51,0,0,1-.06.28v0l0,0m5-3.63a0.45,0.45,0,0,0-.2.56A1.53,1.53,0,0,1,46.2,57c-0.15.67-.72,1-0.71,1.32,0.25,0,.39,0,0.44.25a0.34,0.34,0,0,1-.2.6c0-.1.22-0.07,0.11-0.33s-0.43,0-.45.25a8.61,8.61,0,0,0,.44,2.6,1,1,0,0,1-.89,1.18,0.92,0.92,0,0,1-.82-0.47c0,0.17-.12,1.43.49,1.56A0.41,0.41,0,0,0,45,63.86a0.46,0.46,0,0,1-.41.47c-0.21.2-.21,0.61,0.23,0.44a0.39,0.39,0,0,1-.65.11,0.62,0.62,0,0,1-.58.71c0.07,0.15.15,0.73-.22,0.72a0.43,0.43,0,0,0-.25-0.47,0.21,0.21,0,0,1-.26.07c-0.11-.07-0.06.68-0.58,0.82-0.35-.42.19-0.5,0.15-0.92a1.33,1.33,0,0,0-1,.43c-0.39-.49.29-0.74,0.68-0.71a0.36,0.36,0,0,0-.5-0.14c0-.08,0-0.42.55-0.35,0.27,0.1.19,0.28,0.36,0.28A3.7,3.7,0,0,1,43,64.58l-0.47-.37s-0.46.69-.82,0.19A0.4,0.4,0,0,0,42.27,64a0.34,0.34,0,0,1-.44-0.51c0.12,0.52.45,0.2,0.41,0a1.93,1.93,0,0,1,.06-0.68l0-.09c-0.69-.27-1.82.62-1,1.21-0.28.23-.48-0.14-0.57-0.28-0.09,0-.13.17-0.07,0.42-0.42-.15-0.34-0.76-0.94-0.94a1.12,1.12,0,0,1-.71.41,1,1,0,0,0,.17-0.9,1.59,1.59,0,0,0-.94.42,0.59,0.59,0,0,1,.63-0.68c-0.44-.66-0.77-0.16-0.77-0.16-0.15-.48.6-0.77,0.9-0.21,0.26-.14,0-0.51,0-0.51a0.48,0.48,0,0,1,.33.68,1.94,1.94,0,0,1,.74.38,0.58,0.58,0,0,1,.24-0.66,0.7,0.7,0,0,1-.68-0.52,0.62,0.62,0,0,0,.6.18,0.45,0.45,0,0,1-.28-0.4A0.31,0.31,0,0,1,40.57,61c-0.39-.16-0.36.37,0,0.37a4.6,4.6,0,0,1,.65-0.22,15.06,15.06,0,0,0,1.53.27,3.13,3.13,0,0,0-2.47-.94,1,1,0,0,1-.84-0.32,1.36,1.36,0,0,0-.27.19,0.43,0.43,0,0,0-.41-0.24c-0.22,0-.32.54-0.72,0.31,0.09,0,.46-0.21.08-0.49a0.55,0.55,0,0,0-.88.43c-0.33-.11-0.23-0.79.45-0.88-0.12-.38-0.72-0.62-0.8-0.24a0.37,0.37,0,0,1,.53-0.47,3.43,3.43,0,0,0,.45.4,0.58,0.58,0,0,0-.26-0.64c0.6-.35.47,0.53,0.82,0.62a1.92,1.92,0,0,0,.93,0,0.5,0.5,0,0,0-.09-0.4,0.69,0.69,0,0,1-.39-0.54c-0.29-.08-0.28-0.22-0.21-0.44a0.57,0.57,0,0,0-.31-0.57,0.36,0.36,0,0,1-.53-0.1,0.65,0.65,0,0,0,.47-0.38c0-.18-0.77-0.49-0.82,0-0.25-.8.49-0.72,0.65-0.66,0-.71-0.41-1-0.61-0.86,0.41-.56.83,0,0.85,0.25,0.28,0,.25-0.49.14-0.7a0.48,0.48,0,0,1,.45.7c-0.14.24-.51,0.36-0.23,0.71a10.49,10.49,0,0,1,1.12,1.15A0.44,0.44,0,0,1,40.09,57c-0.22-.05-0.21-0.17-0.21-0.24,0.54,0,.47-0.24.71-0.53a0.3,0.3,0,0,1-.22-0.26c0.47,0.19.34-.51,0.94-0.34-0.18-.27.13-0.1,0.33-0.68,0.05-.16.27-0.05,0.31,0l0,0.23a0.69,0.69,0,0,1,.7-0.19c0.42,0.11.42-.24,0.42-0.24a0.51,0.51,0,0,1,0,.55l0.24-.11,0,0.42c0.1,0,.27,0,0.29.1a1.25,1.25,0,0,0,0,.27c0,0.06.23,0,.24,0.13a1.16,1.16,0,0,1-.54.66,1.65,1.65,0,0,1-.1,1.2c-0.24.19-.32,0.6-0.07,0.5a0.19,0.19,0,0,1-.22.22,0.72,0.72,0,0,0,0,.7,0.26,0.26,0,0,0,.29,0,0.45,0.45,0,0,1-.44.35h0c0.35,0.77,1.2,1.23,1.42,2s0.54,0.77.77,0.76a1,1,0,0,0,.33-1.26c-0.22-.42-0.8-0.11-0.37.21a0.37,0.37,0,0,1-.39-0.62A0.53,0.53,0,0,1,45,60.65c-0.24-.4-0.92-0.46-0.92-1s0.56-.37.5-0.2c-0.28-.09-0.43.26,0,0.47l0.48,0.3a2.51,2.51,0,0,1,0-1.78c0.36-.94.85-1.77,0.25-1.77-0.45,0-.2.32-0.13,0.32-0.21.1-.81,0-0.33-0.58-1.09-.31-0.35-1.14-0.11-0.84-0.45.18-.09,0.58,0.35,0.44a0.53,0.53,0,0,1,.34-0.9,1,1,0,0,1,.4-0.12,0.49,0.49,0,0,1,.41.28,0.14,0.14,0,0,1-.09.17s-0.16-.3-0.34-0.19M42,55.74l-0.16.17L42,56.08H42L41.95,56l0.1-.07,0.08,0V55.91h0l0.08,0,0.06-.09,0-.06-0.2.1-0.06-.07,0-.2,0-.12-0.13-.08a0.23,0.23,0,0,1,.08.14,0.82,0.82,0,0,1,0,.22v0h0m0.45,1.64a0.6,0.6,0,0,0,.16-0.3V57l0,0-0.11,0a1.06,1.06,0,0,1-.46.66,2,2,0,0,0,.15-0.43l-0.07,0h0l0,0,0,0,0-.08v0l0-.09h0c0.14,0,.24-0.09.53-0.2l-0.46,0-0.18-.44s0.06,0.46.09,0.58l-0.11,0H41.66l-0.12,0,0,0-0.08-.14a1.44,1.44,0,0,0-.24.3,1.23,1.23,0,0,1,.29-0.67l0-.07h0l-0.07,0-0.09.14a2.79,2.79,0,0,0-.17.41,0.65,0.65,0,0,1-.28.32l0,0v0l0.07,0.05H41l0.11,0.08c0,0.14-.12.28,0.11,0.42a0.45,0.45,0,0,0,.44-0.08L41.85,58a0.42,0.42,0,0,0,.15.18h0l0-.09a2,2,0,0,1,.1-0.31,2,2,0,0,1,.25-0.35m0.4-.88-0.1-.07,0.1-.07,0.08,0v0l0-.09h0a0.82,0.82,0,0,1,.19-0.1,0.23,0.23,0,0,1,.16,0l-0.13-.07-0.13,0-0.19.08-0.08,0V55.93l0,0.07-0.05.1v0.09h0l-0.08.15,0.16,0.17,0.08,0m-17.35-34a1.75,1.75,0,0,0-.94,2,2.08,2.08,0,0,0,.89,3.4A1.15,1.15,0,0,0,26,26.73a1.43,1.43,0,0,0,1.56.41A2.66,2.66,0,0,0,27,25.45a1.47,1.47,0,0,0,.71-0.61c-0.26-.69-1.66-0.69-2.09-1a1,1,0,0,1-.13-1.33m36,46.89-0.08.23a0.71,0.71,0,0,0,.32.49,2,2,0,0,0,.68.35l0.18,0.05-0.06.18c-0.09.28-.17,0.53-0.23,0.7l0.56,0a2,2,0,0,0,1-.21,1,1,0,0,0,.47-0.68V70.38a1.3,1.3,0,0,0-.66-0.93A2.57,2.57,0,0,0,62.34,69a1,1,0,0,0-.84.37m0,1A1.65,1.65,0,0,1,61.2,70l-0.37.8a2.88,2.88,0,0,0,1.11.48c0-.13.12-0.34,0.2-0.59a2.34,2.34,0,0,1-.64-0.36m-2.89,1,0.08,0,0-.08h0l0-.07,0-.11-0.18-.14a3.69,3.69,0,0,0-.74-0.3,9.89,9.89,0,0,1-1.86-.68,1.5,1.5,0,0,1-.44-0.37l-0.38,1.32a19,19,0,0,0,3.13.5,1.57,1.57,0,0,0,.38,0m3.68,3a13.53,13.53,0,0,1,1.33-2.6,3.1,3.1,0,0,1-.75.08,7.12,7.12,0,0,1-1-.07,3.35,3.35,0,0,1-1.43-.63,15.55,15.55,0,0,1-1.71-1.48,4.6,4.6,0,0,0-1.43-1,2.91,2.91,0,0,0-.85-0.14,1.17,1.17,0,0,0-.47.08,0.44,0.44,0,0,0-.26.25l0,0.15V69a0.53,0.53,0,0,0,.19.4,1.88,1.88,0,0,0,.57.35c0.48,0.21,1.1.36,1.63,0.54a2.58,2.58,0,0,1,.86.42,0.58,0.58,0,0,1,.21.43,0.63,0.63,0,0,1-.09.31L59,71.52,58.26,73l0.37,0.23a9.78,9.78,0,0,0,.91.47,5.82,5.82,0,0,0,2.23.6,2,2,0,0,0,.53-0.07M45.85,71l-0.14,0H45.58l0,0.61h0.13l0.21,0A0.26,0.26,0,0,0,46,71.26l0-.2L45.85,71m-1.27-.08-0.15,0H44.36v0.25h0.07l0.16,0,0-.1ZM49,71.36l-0.08-.06-0.11,0-0.21,0-0.09.18,0,0.2,0.18,0.1,0.15,0,0.1-.08,0-.13V71.45ZM43,71.25h0.31l-0.15-.38Zm-6.84.1-0.06-.08-0.09,0H35.94l-0.19.1-0.05.2,0.09,0.18L36,71.74l0.14,0,0.08-.1V71.45Zm4-.49-0.15,0H40v0.25h0.07l0.16,0,0-.1ZM39,71L39,71H38.84L38.64,71l-0.06.2,0.08,0.19,0.2,0.06,0.14,0,0.09-.1,0-.14,0-.1ZM58.5,71.67l-1.36,2.65A70.24,70.24,0,0,0,42,72.41a69.94,69.94,0,0,0-15.09,1.91l-1.36-2.65H25.8a19.55,19.55,0,0,0,3.27-.52c1.41-.29,3.06-0.65,4.76-0.93a52.71,52.71,0,0,1,8-.55,57.64,57.64,0,0,1,8.41.55c1.7,0.28,3.35.64,4.76,0.93a19.59,19.59,0,0,0,3.27.52H58.5Zm-30,1.57L28.4,73l-0.46.1-0.17-.77-0.31.07,0.22,1Zm1-.21,0-.2-0.46.09,0-.22,0.43-.09,0-.21-0.43.09,0-.19,0.45-.09,0-.2-0.75.15,0.21,1Zm0.71-.94L30.53,72l0-.25-1.05.2,0,0.25,0.37-.07L30,72.94l0.31-.06ZM32.39,72l-0.1-.57L32,71.52,32.07,72v0.17L32,72.29l-0.11,0H31.76l-0.1-.08-0.06-.16-0.08-.49-0.31.05,0.09,0.57a0.44,0.44,0,0,0,.13.26l0.23,0.12h0.26l0.18-.06,0.16-.11,0.1-.17V72Zm1,0-0.06-.14-0.13-.08L33,71.74l-0.1,0,0,0,0-.06,0.08,0h0.17l0.15,0.06,0-.24-0.07,0-0.13,0H32.93l-0.2.07-0.11.13,0,0.16,0.06,0.14,0.12,0.09L33,72l0.13,0,0,0.07v0.05l-0.1,0H32.85l-0.17-.06,0,0.25,0.17,0h0.2l0.2-.07,0.12-.13Zm1.77,0-0.06-.49-0.41.05,0,0.21,0.14,0,0,0.12-0.13,0-0.18,0-0.12-.09-0.05-.14V71.53l0.1-.14,0.21-.08h0.2l0.16,0,0-.25-0.2,0H34.64l-0.15,0-0.13.06-0.13.1-0.1.19v0.23a0.54,0.54,0,0,0,.12.29l0.23,0.15a0.71,0.71,0,0,0,.3,0l0.15,0,0.14,0,0.06,0,0,0Zm1.35-.61-0.06-.2-0.13-.16L36.17,71H35.91a0.64,0.64,0,0,0-.32.11l-0.17.22,0,0.27,0.09,0.25L35.7,72A0.7,0.7,0,0,0,36,72a0.68,0.68,0,0,0,.31-0.11l0.18-.22Zm1.09,0,0.43,0,0-.21-0.43,0,0-.2L38,71l0-.21-0.74.06,0.09,1,0.31,0Zm1.8-.23L39.39,71l-0.12-.16-0.19-.11-0.26,0a0.63,0.63,0,0,0-.32.1L38.31,71l0,0.27,0.08,0.26,0.21,0.18a0.65,0.65,0,0,0,.33.05,0.66,0.66,0,0,0,.31-0.09l0.19-.21Zm1.28,0.47-0.11-.22-0.1-.16-0.09-.06,0.07,0,0.06-.08,0-.13,0-.14-0.12-.12-0.21,0-0.53,0,0,1H40l0-.41h0.12l0.07,0.06,0.09,0.15,0.09,0.18h0.33Zm1.41,0,0.44-1.06H42.25L42,71.17l-0.25-.58H41.55l-0.24.58-0.22-.57H40.77l0.45,1H41.4L41.67,71l0.28,0.61h0.18Zm1.69,0-0.43-1H43l-0.48,1h0.32L43,71.43h0.45l0.08,0.21h0.32ZM45,71.71l-0.09-.23-0.08-.17-0.08-.07,0.08,0,0.07-.08,0-.13,0-.14-0.11-.13-0.21-.06-0.53,0,0,1,0.31,0,0-.41h0l0.09,0,0.07,0.06,0.07,0.15,0.07,0.19Zm1.28-.59L46.24,71l-0.09-.11-0.07-.05-0.09,0-0.12,0-0.16,0-0.43,0-0.07,1,0.54,0h0a0.51,0.51,0,0,0,.32-0.07l0.15-.15a0.48,0.48,0,0,0,.08-0.25V71.12Zm1.82-.2L47,70.82l0,0.25,0.38,0-0.08.78,0.31,0,0.08-.78,0.38,0Zm1.2,0.46-0.09-.18-0.17-.14L48.8,71a0.63,0.63,0,0,0-.33,0l-0.22.17-0.1.25,0,0.27,0.17,0.22a0.66,0.66,0,0,0,.31.11A0.64,0.64,0,0,0,49,72l0.22-.17,0.1-.26V71.39Zm1.28-.07-0.18-.08-0.22-.05H50l-0.14,0-0.15.06-0.15.15-0.07.22a0.53,0.53,0,0,0,0,.3l0.19,0.21L50,72.23h0.47l0.07-.5-0.41-.06,0,0.21,0.14,0,0,0.12H50.11l-0.17-.06-0.09-.12,0-.15,0.05-.13,0.13-.1,0.22,0,0.19,0.06,0.14,0.09Zm1.1,0.12-0.76-.12-0.17,1,0.77,0.13,0-.21-0.46-.07,0-.22L51.57,72l0-.21-0.43-.07,0-.19,0.45,0.07ZM53,71.65l-1.05-.19,0,0.25,0.37,0.07-0.14.77,0.31,0.06,0.14-.78,0.37,0.07Zm1.32,0.26L54,71.85l-0.07.37-0.46-.09,0.07-.37-0.3-.06-0.2,1,0.31,0.06,0.08-.4,0.46,0.09-0.08.4,0.31,0.06Zm1.07,0.22L54.6,72l-0.21,1,0.76,0.16,0-.21-0.46-.09,0-.22,0.43,0.09,0-.21-0.43-.09,0-.19,0.45,0.09Zm1.08,0.41-0.09-.15-0.2-.09-0.52-.11-0.21,1,0.31,0.07,0.08-.4h0l0.08,0L56,73l0,0.16,0,0.2,0.33,0.07-0.06-.24L56.28,73l-0.07-.09,0.08,0,0.08-.06,0.06-.13V72.54ZM56,72.46H55.89l-0.05.25h0.22l0.06-.09,0-.11ZM22.52,69.58l-0.08-.23A1,1,0,0,0,21.61,69a2.58,2.58,0,0,0-1.37.47,1.31,1.31,0,0,0-.66.93V70.5a1,1,0,0,0,.47.68,2,2,0,0,0,1,.21l0.56,0c-0.06-.17-0.14-0.42-0.23-0.7l-0.06-.18,0.18-.05a2.06,2.06,0,0,0,.68-0.35,0.71,0.71,0,0,0,.31-0.49M22.75,70a1.52,1.52,0,0,1-.3.32,2.35,2.35,0,0,1-.64.36C21.89,71,22,71.19,22,71.32a2.9,2.9,0,0,0,1.11-.48L22.75,70m2.45,1.25,0.08,0a1.55,1.55,0,0,0,.37,0,19.06,19.06,0,0,0,3.13-.5L28.4,69.54a1.51,1.51,0,0,1-.44.37,9.89,9.89,0,0,1-1.86.68,3.79,3.79,0,0,0-.74.3L25.18,71l0,0.11,0,0.07h0l0,0.08m-4.88.4a13.6,13.6,0,0,1,1.34,2.6,2,2,0,0,0,.53.07,5.86,5.86,0,0,0,2.23-.6,9.57,9.57,0,0,0,.9-0.47L25.68,73,24.9,71.52l-0.06-.07a0.65,0.65,0,0,1-.08-0.31A0.57,0.57,0,0,1,25,70.71a2.6,2.6,0,0,1,.87-0.42c0.52-.17,1.15-0.33,1.63-0.54A1.91,1.91,0,0,0,28,69.4a0.54,0.54,0,0,0,.19-0.4V68.89l0-.15a0.45,0.45,0,0,0-.26-0.25,1.2,1.2,0,0,0-.47-0.08,2.92,2.92,0,0,0-.85.14,4.6,4.6,0,0,0-1.43,1,15.55,15.55,0,0,1-1.71,1.48,3.35,3.35,0,0,1-1.43.63,7.14,7.14,0,0,1-1,.07,3.1,3.1,0,0,1-.75-0.08M52.17,14.21a1.87,1.87,0,0,1,1.38-1.36,2.84,2.84,0,0,0-.77,1.93,3.85,3.85,0,0,1-.42,1.58C52,17,51,18.64,47.64,17.68c0.33,2,0,1.58,0,2.6a2.51,2.51,0,0,0,1.24,2.19c0.08,1.13-.29,3.41-1,3.41H47.7a3.44,3.44,0,0,1,.4,1.1,7.49,7.49,0,0,0-1.45-.65,15.23,15.23,0,0,0-4.78-.75,14.84,14.84,0,0,0-6,1.08,3.58,3.58,0,0,1,.42-0.93l0,0a0.73,0.73,0,0,1,.46-1,1,1,0,0,0,.93-0.86c0.09-.37,1.14-3.29,0-3.43s-0.36.46-2.12,0.46H34.88l-1.51,1.62a0.57,0.57,0,0,1-.21.49,4.17,4.17,0,0,0-.54.65,0.21,0.21,0,0,1-.16-0.16l-0.86.92a1.08,1.08,0,0,0-.24.52l0.06,0.23-0.06.17-0.17.07h0A1.17,1.17,0,0,1,30.49,25a1.15,1.15,0,0,1-.39-0.69l0.06-.17L30.33,24l0.14,0a2.26,2.26,0,0,0,.69-0.36l1.07-1.18a4.34,4.34,0,0,1,.3-2.13c0.15-.34,1.28-0.51,2.16-0.62l1.14-1.29a1.58,1.58,0,0,0-.1-0.42c-0.09-.17-0.45.2-0.33-1.7-0.32-.2-1.2.4-1.51,0.42a1,1,0,0,1-.16-0.83l0.05,0-0.66.32a1.21,1.21,0,0,1-.52.16,0.51,0.51,0,0,1-.44-0.26,0.77,0.77,0,0,0-.38-0.35l0.13-.14,0.27-.1h0.07a1.46,1.46,0,0,0,.61.29l0.13,0a9.54,9.54,0,0,1,1.8-.69h0.13a1.38,1.38,0,0,1,.52.1l0.15,0.09a0.7,0.7,0,0,0-.91-0.43,11.47,11.47,0,0,0-1.21.38,2.09,2.09,0,0,1-.86-1.39c0-.32,1.23-0.42,1.36-0.66a0.63,0.63,0,0,1,.72-0.38A5.61,5.61,0,0,1,36,12.48c2.17,0.25,2.38,1.74,2.76,2.62,3.37-3.84,6.51-7.5,6.55-7.78,0.35-.71-0.29-1.15.17-1.56a1.85,1.85,0,0,1,1.84.43c0.68,0.54,1.11,1.21.87,1.66s-0.58.24-1.08,0.34a5.13,5.13,0,0,0-1.78,1.35l-5.85,6.28a11.68,11.68,0,0,0,3.26.07c4.14,0,6.2,1.26,7.48,1s1.69-1.23,1.9-2.7m-17.5,0c0.16,0.06,1-.31.84-0.57a1,1,0,0,0-1-.29,1.26,1.26,0,0,1,.77.34,0.37,0.37,0,0,1-.26.26l0-.16a0.18,0.18,0,1,0-.33,0,0.27,0.27,0,0,0,.13.26c-0.14.08-.25,0.14-0.19,0.17m-1.33,7.09,0.46-.51a0.44,0.44,0,0,0-.43.07,1,1,0,0,0,0,.44m3.76-4.8c0.86,0,1-2.08.6-2.71C38,15,37.37,15.64,37,15.64c-0.8,0-.47-1.54-1.05-2.12,0.56,1.67.16,3,1.14,3m10.87,8a2.32,2.32,0,0,0-.39-1.8c-0.41-.46-1.84-1.09-2.44-2.28l0-.07a1.59,1.59,0,0,0-2.16-.81l-0.14.06a4.1,4.1,0,0,1-2.58.84c-0.59-.1-1.07,2.47-1.56,3.37a8.16,8.16,0,0,1,3.27-.66,8.66,8.66,0,0,1,1.09.07,1.48,1.48,0,0,0,.62-0.87c-0.18-.63-0.59-1.81-0.77-2.42l0.09,0a2.69,2.69,0,0,1,.77-0.14,1.2,1.2,0,0,1,.63.16,1.48,1.48,0,0,1,.56.68l0,0.09c-0.14.23-.27,0.47-0.36,0.62a2.32,2.32,0,0,0,.28,1.51,2.3,2.3,0,0,1-.57.68,6.19,6.19,0,0,1,2.82,1.68c0.12-.18.25-0.34,0.29-0.42A1.72,1.72,0,0,0,48,24.46M43.29,46.89a0.41,0.41,0,0,0-.34.18l0,0.05H42.4v-3a4.69,4.69,0,0,0-.14-0.84A2.45,2.45,0,0,0,42,42.52l-0.07.11a2.67,2.67,0,0,0-.19.51,5.1,5.1,0,0,0-.18,1v3H41l0-.05a0.41,0.41,0,1,0-.34.64h0.88v1.61a0.44,0.44,0,0,0,.88,0V47.71h0.92a0.41,0.41,0,0,0,0-.82M24.4,43c1.29,0,1.29-.66,2.59-0.66a2.41,2.41,0,0,1,1,.21,6.24,6.24,0,0,0-.34-0.88,2.34,2.34,0,0,0-1.25-.32c-1.27,0-1.27.66-2.54,0.66s-1.27-.66-2.54-0.66a2.73,2.73,0,0,0-1.47.43c0.17,0.39.33,0.72,0.45,1a2.79,2.79,0,0,1,1.48-.42c1.29,0,1.29.66,2.59,0.66m-2.24,12.5A5.14,5.14,0,0,0,22.28,59a2.36,2.36,0,0,1,1.56,1.1,1.74,1.74,0,0,1-.31,2.49,0.88,0.88,0,0,0,.94.3,1.82,1.82,0,0,0,.84,1.84,0.54,0.54,0,0,0,.32-0.48c0.21,0.19.42,0.71,0.88,1.3A0.93,0.93,0,0,0,27,64.92a1.4,1.4,0,0,0,1.09.86,1.67,1.67,0,0,0,.21-1c0.48,0.09,1.24,1.66,1.6,2.49,0.59-.25.69-1.57,0.33-2.24,0.5-.1.59,1,2.4,0.86,0.13-1.13-.86-1.32-1.43-1.72a3,3,0,0,1,2-.17c-0.29-1.7-2.35-.92-2.4-1a1.27,1.27,0,0,1,1.2-1,1.61,1.61,0,0,0-1.66-.39c-0.8.23-.55,1.05-1.2,1.09s-2-.69-2-1.51,0.73-3.69.48-5.22a1.51,1.51,0,0,0-1.47-1.47c-1.09,0-1.62,1.17-2.48,1.32a2.29,2.29,0,0,1-1.52-.34m3-19a4.85,4.85,0,0,0,3.42,1,1.73,1.73,0,0,1-1.66.65c-0.8-.06-1.55-0.63-2.2-0.53a7.28,7.28,0,0,0,1.72.84,3.39,3.39,0,0,0-.61,1.09,3,3,0,0,1,1,.8l0,0.07a2.48,2.48,0,0,0-.78-0.11c-1.27,0-1.27.66-2.54,0.66s-1.27-.66-2.54-0.66a3,3,0,0,0-1.57.47c-0.6-1.73-.93-3.94.81-5.33a9.8,9.8,0,0,1-1-4.52c0.53,0,1.77,1.6,2,2.2A5.61,5.61,0,0,1,22.17,31a3.18,3.18,0,0,0,1,2.56A27.15,27.15,0,0,1,26,34a0.64,0.64,0,0,1,.38.4,1.91,1.91,0,0,1,1.42.68,1.89,1.89,0,0,1-.41,2.1,0.83,0.83,0,0,0-.74-0.81,3.07,3.07,0,0,0-1.49.14m0,2.76c0.11-.86-0.93-1.31-1.73-1.33a0.83,0.83,0,0,0,.5.77c0.24,0.15.72,0.33,1.23,0.56m0.35-4.11c0.1,0.07.26,0.31-.37,0.54,0.74,0,1-.57.87-0.74s-2.69-.45-2.92-0.46a1.73,1.73,0,0,0,.55.4,0.93,0.93,0,0,1,.49.67,2.12,2.12,0,0,0,.08-0.4A0.23,0.23,0,0,1,24.46,35a0.46,0.46,0,0,0,.32.61,0.31,0.31,0,0,0,.4-0.22V35.13a0.36,0.36,0,0,1,.33,0M59.59,43c1.29,0,1.29-.66,2.59-0.66a2.78,2.78,0,0,1,1.48.42c0.12-.26.28-0.6,0.45-1a2.74,2.74,0,0,0-1.47-.43c-1.27,0-1.27.66-2.54,0.66s-1.27-.66-2.54-0.66a2.34,2.34,0,0,0-1.25.32,6.24,6.24,0,0,0-.34.88,2.41,2.41,0,0,1,1-.21c1.29,0,1.29.66,2.59,0.66M61.86,55.6a2.35,2.35,0,0,1-1.54.29c-0.86-.15-1.39-1.32-2.48-1.32A1.51,1.51,0,0,0,56.37,56c-0.25,1.53.48,4.4,0.48,5.22s-1.35,1.55-2,1.51-0.4-.86-1.2-1.09a1.61,1.61,0,0,0-1.66.39,1.27,1.27,0,0,1,1.2,1c-0.06.1-2.12-.69-2.4,1a3,3,0,0,1,2,.17c-0.57.4-1.56,0.59-1.43,1.72,1.81,0.17,1.91-1,2.4-.86-0.36.67-.27,2,0.32,2.24,0.36-.82,1.13-2.39,1.6-2.49a1.67,1.67,0,0,0,.21,1A1.4,1.4,0,0,0,57,64.92a0.92,0.92,0,0,0,.48.67c0.46-.59.67-1.11,0.88-1.3a0.54,0.54,0,0,0,.32.48,1.83,1.83,0,0,0,.84-1.84,0.88,0.88,0,0,0,.94-0.3,1.73,1.73,0,0,1-.31-2.49,2.33,2.33,0,0,1,1.59-1.05,5.25,5.25,0,0,0,.13-3.48m9.92-13.21a3.4,3.4,0,0,1,2.83.32c-1.35,2.05-2.34,1.61-3.21,2.11a2.28,2.28,0,0,1,1.73,1c-0.18,1.23-1.6,1.08-2.52,1.16a1.37,1.37,0,0,1,1.33,1,1.93,1.93,0,0,1-2.06.25A2.34,2.34,0,0,1,70.14,50,1.83,1.83,0,0,1,68,49.72a2.09,2.09,0,0,1-.13,1.56,2.12,2.12,0,0,1-2-1.48,2.31,2.31,0,0,1-.55,2.1,2.63,2.63,0,0,1-1.37-1.8,1.85,1.85,0,0,1-.6,1.69,2.65,2.65,0,0,1-1.64-1.62,3,3,0,0,1-.83.64,2.73,2.73,0,0,1-.92-2.08,2.36,2.36,0,0,1-1,.67,1.52,1.52,0,0,1-.36-0.88,3.2,3.2,0,0,1-2.25,2.23A1.14,1.14,0,0,1,56,49.63a4.57,4.57,0,0,1-.91.59,2.29,2.29,0,0,0-.3,1c0.69-.23,2.63-0.4,3,0.82-0.63-.12-2.75-0.32-3.05.6s0.61,1.66,1.53,2.93C55.71,56,54.39,55,54,54.15a5.24,5.24,0,0,0,.71,3.2c-2.16-.47-1.58-2.7-1.7-3-0.2.25-.67,0.85-0.72,3A0.69,0.69,0,0,1,52,57.08,17.85,17.85,0,0,1,42,69h0a17.84,17.84,0,0,1-10-11.89l-0.19.15a10.4,10.4,0,0,0-.1-1.27c-0.06-.28-0.12-0.55-0.17-0.81a2.38,2.38,0,0,0-.45-0.9c-0.12.33,0.46,2.57-1.7,3a5.26,5.26,0,0,0,.71-3.2C29.6,55,28.28,56,27.81,55.6c0.92-1.27,1.83-2,1.53-2.93s-2.42-.72-3.05-0.6c0.32-1.22,2.27-1.05,3-.82a2.24,2.24,0,0,0-.3-1A4.55,4.55,0,0,1,28,49.63a1.15,1.15,0,0,1-.41,1.11,3.2,3.2,0,0,1-2.25-2.23,1.52,1.52,0,0,1-.35.88,2.36,2.36,0,0,1-1-.67,2.74,2.74,0,0,1-.92,2.08,3,3,0,0,1-.83-0.64,2.66,2.66,0,0,1-1.64,1.62,1.85,1.85,0,0,1-.6-1.69,2.63,2.63,0,0,1-1.37,1.8,2.31,2.31,0,0,1-.55-2.1,2.12,2.12,0,0,1-2,1.48A2.09,2.09,0,0,1,16,49.72a1.83,1.83,0,0,1-2.16.25,2.34,2.34,0,0,1,.26-1.66,1.93,1.93,0,0,1-2.06-.25,1.37,1.37,0,0,1,1.33-1c-0.92-.08-2.33.07-2.52-1.16a2.28,2.28,0,0,1,1.73-1c-0.87-.5-1.87-0.06-3.22-2.11a3.41,3.41,0,0,1,2.83-.32c-0.93-.62-3.25-1.16-3.82-3.57a7.53,7.53,0,0,1,2.89.43c-1-.76-3.23-3.18-3.34-5.13,0.6,0.23,1.9,2,3.16,2.43-0.45-.55-3.44-3.67-2.69-5.92,0.47,0.48,1.82,2.42,3.24,3.11-0.82-1.09-2.31-4.4-1.75-6.24,0.26,1.32,2.43,4.6,3.14,4.89a2.19,2.19,0,0,1,.14-0.9c1.35,2.28,3.94,4.25,4.41,4.92s0.93,1,.35,3.61,0.67,5.14,1.76,5.21c0.85,0.05,1-.68,1-1.37a2.76,2.76,0,0,1,1.46-.41c1.29,0,1.29.66,2.59,0.66s1.29-.66,2.59-0.66a2.45,2.45,0,0,1,1,.18,9.18,9.18,0,0,1,.1,1.65,3.25,3.25,0,0,0,2.43,2.58,0.9,0.9,0,0,1-.74.54,1.3,1.3,0,0,1,1,1.17,0.87,0.87,0,0,1-.83-0.07c0.26,0.57.59,1.29,0.92,2V41.14H37a5.06,5.06,0,0,0-1.52-6.4,5.41,5.41,0,0,1,1.44,4.2,3,3,0,0,1-2.82,1.27A1.41,1.41,0,0,1,33.93,39c-3.77.5-4.6-.93-4.76-1.09A3.78,3.78,0,0,1,30,35.43c-0.4-.23-1.92-0.36-2.42-1.72,0.68-1.68,3.13-1.19,3.13-1.19-3.57-2.21-4-.79-5.28-1.37a0.82,0.82,0,0,1,.25-0.77,1.48,1.48,0,0,1-1.11-1.23c0.7-.58,1.09-0.37,1.88-0.19a0.85,0.85,0,0,1-.32-0.67c1.16-.23,2.11,1.19,2.83,1.86-1-1.89-.75-3.89-1.39-4.57a1.87,1.87,0,0,0,.38-0.39L28,25l0,0,0.08-.13h0l0-.05,0-.12a2,2,0,0,0-1.55-1l-0.32-.09a1.51,1.51,0,0,1-.31-0.12l0,0c-0.11-.09-0.31-0.25,0-0.85l0.14-.3c3.29-.52,4.16,6.75,4.78,6.64a4.47,4.47,0,0,1,.32-3.22,1,1,0,0,1,.68.46,2.75,2.75,0,0,1,1.66-1.47A3.11,3.11,0,0,1,33,26.38a1.85,1.85,0,0,1,.74.14c-0.93,1-2.06,1.93-1.69,3.79a2.82,2.82,0,0,1,1.19-1.82,2.56,2.56,0,0,1,.27.58c0.3-.36.41-0.45,0.85-1,0.14,1,.66,2.24,0,2.73s-2.85,1.68-1.75,2.24a11.22,11.22,0,0,0,6.23.44c2.67-.57,2.11-2.43,2.68-3s1.29-.75,3.82-1c-1.16-.14-4.17,0-4.49.85S40.4,32.76,38.76,33c-1.9.28-4.89,0.28-5.57-.43-0.39-.4,1.62-1.65,1.62-1.65a5.07,5.07,0,0,1,1-1.44,1.38,1.38,0,0,1-.7-1.42C35,26.88,38.32,26,41.87,26s6.63,1.25,6.72,2.09a1.48,1.48,0,0,1-.5,1.53l0,0.15c0.05,0.46.75,2.43,1.68,2.43a0.54,0.54,0,0,0,.61-0.27c0.13-.25-2.09-1.41-1.15-4.12a1.79,1.79,0,0,1,1.36.6,0.73,0.73,0,0,1,.07-0.82c1,0.37,1.22,1.43,1.47,2.16,0,0,.68,0,0.51-1.26C52.43,26.9,50.28,26.51,50,26a1.08,1.08,0,0,1,.51-0.64,1.87,1.87,0,0,1-.62-1.64c1.27-.64,1.76.53,2,0.62a1,1,0,0,1,.43-1.14c1.2,0.53,1.22,2.73,1.66,2.74s-0.38-2.28,1.11-3.72a3.3,3.3,0,0,1,1.13-.69,1.3,1.3,0,0,1,1.27.8,1.09,1.09,0,0,1,.09.66A1.45,1.45,0,0,0,57,22.54a1.3,1.3,0,0,0-1,1.32,2.4,2.4,0,0,0-1.22,2.5,1.13,1.13,0,0,0,.36.8,1.17,1.17,0,0,1,1-.5,8,8,0,0,0-.5,2.13c0.19,0.13,1.68-1.43,2.54-1.17a3.42,3.42,0,0,1,.06.76,2.17,2.17,0,0,1,1.14.63,2.45,2.45,0,0,1-1.07,1,1.82,1.82,0,0,1,.2.72c-0.68.2-5.21,1.42-5,2.34,2.05-1.59,3.17.06,3.16,0.52a3,3,0,0,1-2.1,1.73c-0.39.07-2-.53-2.47,0.24,2.49,0.24,1.67,3.25,1.41,3.51-2.55-.06-2.75-1.4-3.18-1.66a5,5,0,0,1,.13,2.88,2.47,2.47,0,0,1-1.79-.84,32.27,32.27,0,0,1-1.36-6c0-.25-0.16,4.77,1.55,7.71h4.1v10.5c0.35-.78.7-1.55,1-2.16a0.87,0.87,0,0,1-.83.07,1.3,1.3,0,0,1,1-1.17,0.9,0.9,0,0,1-.74-0.54,3.26,3.26,0,0,0,2.44-2.58,9.18,9.18,0,0,1,.1-1.65,2.45,2.45,0,0,1,1-.18c1.29,0,1.29.66,2.59,0.66s1.29-.66,2.59-0.66a2.77,2.77,0,0,1,1.47.41c-0.07.69,0.1,1.43,1,1.37,1.09-.07,2.34-2.63,1.76-5.21s-0.12-2.93.35-3.61,3.05-2.64,4.41-4.92a2.2,2.2,0,0,1,.14.9c0.71-.29,2.87-3.57,3.14-4.89,0.56,1.85-.93,5.15-1.75,6.24,1.42-.69,2.77-2.63,3.24-3.11,0.75,2.25-2.24,5.37-2.69,5.92,1.26-.48,2.56-2.2,3.16-2.43-0.11,2-2.31,4.37-3.34,5.13a7.53,7.53,0,0,1,2.89-.43C75,41.23,72.71,41.77,71.78,42.38ZM17.13,45a0.47,0.47,0,0,0-.9-0.2l-0.32-.05c0-.51.64-6.36-1.18-9.43a2.68,2.68,0,0,1-1.09,2.11c0.07,0.24.24,0.81,0.44,1.55a0.6,0.6,0,0,1,.35-0.11,0.62,0.62,0,0,1,0,1.24H14.36A19.69,19.69,0,0,1,15,44.64l-0.8-.13H14.12a0.47,0.47,0,1,0,.42.69L15,45.25,14.77,47l-0.07.27a0.54,0.54,0,1,0,1.09,0,0.55,0.55,0,0,0-.1-0.31l0.14-1.62,0.63,0.09,0.19,0A0.47,0.47,0,0,0,17.13,45ZM41.6,41.14h5.95a3,3,0,0,0-2.43-1.47A6.38,6.38,0,0,0,41.6,41.14Zm-9.9,10a2.78,2.78,0,0,0,1.17-.39,4.16,4.16,0,0,1,4,0,3.15,3.15,0,0,0,3.1,0,4.16,4.16,0,0,1,4,0,3.15,3.15,0,0,0,3.1,0,4.16,4.16,0,0,1,4,0,2.84,2.84,0,0,0,1,.37V41.75H31.7v9.36Zm0,1.89,0.11,0.26a3,3,0,0,0,1-.37,4.16,4.16,0,0,1,4,0,3.17,3.17,0,0,0,3.1,0,4.16,4.16,0,0,1,4,0,3.17,3.17,0,0,0,3.1,0,4.16,4.16,0,0,1,4,0,3,3,0,0,0,1,.36l0-.06c0.05-.58.06-1,0.06-1.06a3.91,3.91,0,0,1-1.51-.5,3.15,3.15,0,0,0-3.1,0,3.86,3.86,0,0,1-2,.52h0a3.88,3.88,0,0,1-2-.52,3.15,3.15,0,0,0-3.1,0,4.17,4.17,0,0,1-4,0,3.15,3.15,0,0,0-3.1,0,3.86,3.86,0,0,1-1.64.51C31.7,52.24,31.71,52.54,31.75,53ZM51.6,56.31a2.51,2.51,0,0,1-.11-1.22,5.15,5.15,0,0,1,.27-0.87,4.15,4.15,0,0,1-1-.42,3.14,3.14,0,0,0-3.1,0,4.16,4.16,0,0,1-4,0,3.14,3.14,0,0,0-3.1,0,4.16,4.16,0,0,1-4,0,3.14,3.14,0,0,0-3.1,0,4.22,4.22,0,0,1-1.11.43,5.24,5.24,0,0,1,.26.86,2.52,2.52,0,0,1-.14,1.33c0.16,0.57.35,1.18,0.59,1.81a16.78,16.78,0,0,0,9,9.49,16.76,16.76,0,0,0,9-9.49A18.76,18.76,0,0,0,51.6,56.31ZM68.94,39.52a0.61,0.61,0,0,1,1-.5c0.19-.73.36-1.3,0.44-1.55a2.67,2.67,0,0,1-1.09-2.11c-1.82,3.08-1.21,8.92-1.18,9.43l-0.32.05a0.47,0.47,0,1,0-.43.67l0.19,0,0.63-.09L68.3,47a0.55,0.55,0,1,0,1,.31L69.22,47,69,45.25l0.41-.06a0.47,0.47,0,1,0,.42-0.69H69.78l-0.8.13a19.81,19.81,0,0,1,.65-4.51H69.56A0.62,0.62,0,0,1,68.94,39.52Zm-5.26-4c1.74,1.39,1.42,3.6.81,5.33a3,3,0,0,0-1.56-.47c-1.27,0-1.27.66-2.54,0.66s-1.27-.66-2.54-0.66a2.46,2.46,0,0,0-.78.11l0-.07a3,3,0,0,1,1-.8,3.41,3.41,0,0,0-.61-1.09,7.3,7.3,0,0,0,1.72-.84c-0.65-.1-1.4.47-2.2,0.53a1.73,1.73,0,0,1-1.66-.65,4.86,4.86,0,0,0,3.42-1,3.05,3.05,0,0,0-1.49-.14,0.83,0.83,0,0,0-.74.81,1.89,1.89,0,0,1-.41-2.1,1.91,1.91,0,0,1,1.42-.68A0.64,0.64,0,0,1,58,34a27.05,27.05,0,0,1,2.83-.43,3.17,3.17,0,0,0,1-2.56,5.61,5.61,0,0,1,.81,2.15c0.24-.6,1.48-2.16,2-2.2a9.78,9.78,0,0,1-1,4.52m-3.6,3.23a0.83,0.83,0,0,0,.5-0.77c-0.8,0-1.85.47-1.73,1.33,0.51-.23,1-0.41,1.23-0.56m0.29-3.81a1.71,1.71,0,0,0,.55-0.4A10.51,10.51,0,0,0,58,35c-0.16.17,0.13,0.75,0.87,0.74-0.63-.23-0.48-0.48-0.37-0.54a0.36,0.36,0,0,1,.33,0v0.27a0.31,0.31,0,0,0,.39.22A0.46,0.46,0,0,0,59.53,35a0.23,0.23,0,0,1,.28.18,2.22,2.22,0,0,0,.08.4,0.93,0.93,0,0,1,.49-0.67M57,21.36c0.86,0.27,1.19,1.8.77,2S57.05,22.9,57,22.91a1,1,0,0,0-.64,1.24c-1.55.34-1.27,2.65-1.21,2.54a1.37,1.37,0,0,1,1-.46,2.65,2.65,0,0,0,2-.89,2,2,0,0,1-1,1.21,2.09,2.09,0,0,0,2.6-2.06c0.1-3-2.48-3.25-2.7-3.13M41.13,48.11H40.64a0.81,0.81,0,0,1-.8-0.8v0a0.42,0.42,0,0,1-.52-0.11c-0.14-.38.76-0.4,0.74-1.15s-1.85-2.26-1.52-3.17a1.25,1.25,0,0,0-.72,1.3,4.41,4.41,0,0,1-1.92-1.84A1.84,1.84,0,0,0,35.77,44a4.37,4.37,0,0,1-2.33-1.75c-0.36,1.28.34,2.37,2.1,3-0.51,0-2.61-.55-3-1.42,0.05,1,1,2.87,2.52,2.62a2.58,2.58,0,0,1-2.21-.05A2.48,2.48,0,0,0,36,47.75a0.82,0.82,0,0,1-.53,1,2.71,2.71,0,0,0,2.43.16,0.92,0.92,0,0,1-.42.73,6.35,6.35,0,0,0,3.61-.29V48.11Zm7.74-1.7c1.49,0.25,2.47-1.6,2.52-2.62-0.36.87-2.46,1.46-3,1.42,1.76-.6,2.46-1.7,2.1-3A4.38,4.38,0,0,1,48.2,44a1.84,1.84,0,0,0-.12-1.67,4.41,4.41,0,0,1-1.92,1.84,1.25,1.25,0,0,0-.72-1.3c0.33,0.91-1.51,2.42-1.52,3.17s0.89,0.76.74,1.15c-0.06.16-.29,0.16-0.56,0.1v0a0.8,0.8,0,0,1-.73.8H42.8v1.21a6.35,6.35,0,0,0,3.65.31A0.92,0.92,0,0,1,46,48.9a2.71,2.71,0,0,0,2.43-.16,0.83,0.83,0,0,1-.53-1,2.48,2.48,0,0,0,3.16-1.4,2.58,2.58,0,0,1-2.21.05m21.21,4.25a2.16,2.16,0,0,1-.81.16,2.32,2.32,0,0,1-.37,0,4.17,4.17,0,0,0,.36,1.54,2,2,0,0,1-1.86-.48H67.35c0,0.49-.16,1.85,1.11,2s1.32,0.19,1.45.34a1.46,1.46,0,0,1-1.91,0c0.13,1.32.88,2,1.66,1.93s1.53-.27,1.79.1a2.4,2.4,0,0,1-1.64.29,1.29,1.29,0,0,0,1.24,1.15c0.55,0.1.31,1-.55,1S68.75,58,68,56.7c-0.52-.91-1.72-3-2.39-4.25l-0.12.17-0.43-.18a2.56,2.56,0,0,1-1-.69,2.67,2.67,0,0,1-.4.46l-0.26.25-0.34-.12a3.22,3.22,0,0,1-1.61-1.24,2.77,2.77,0,0,1-.41.24l-0.36.17-0.29-.28a3.56,3.56,0,0,1-.93-1.42,1.77,1.77,0,0,1-.41.16l-0.38.09-0.16-.22a3.86,3.86,0,0,1-1.08,1c1.44,1.76,4.81,2.51,5.1,5.53,0.35,3.59-2,3.33-1.18,6.52,2.47-.22,6.81,2.1,6.12,5.14,0,0-1.91-.86-2.23.58,0.61,0.5,1.35-.14,1.66.13-1,.5-2.31,1.82-1.81,2.62,0.78-.63,1.39-0.44,2.08-1.38,0,0.5-.42,2,0.84,2.37,0.52-.59,0-2.62.63-2.66s1.07,1.15,1.3,1.59c0.38-.13.74-1.55-0.15-2.62a1.18,1.18,0,0,0,1-.27,2.15,2.15,0,0,1-.65-1.34,1.09,1.09,0,0,0,1.07-.46,2,2,0,0,1-1-1.15,1.28,1.28,0,0,0,.76-1c-0.4.06-3.43-1-3.87-2.66a8.08,8.08,0,0,1,0-3.45c0.48,0.46,2.56,2.33,4.9,1.17,2-1,.08-4.74-0.32-5.41S70,52,70.09,50.66m6.79,0.46a1.49,1.49,0,0,1,1.56.06c-0.06-2.28-2-1.25-3.36-2.2a7.3,7.3,0,0,0-2.7-1.33l0.09,0.19,0.21,0.47-0.45.26a3.27,3.27,0,0,1-1.49.52,2.63,2.63,0,0,1,0,.31c1.42-.58,3.14.37,3,1.3s-0.46,1.95,0,2.37a1.52,1.52,0,0,1,.76,1c0.53-.48-0.08-2,0.23-2.1,0.15,0.29.34,1.59,1.16,2S78.51,54.5,78.65,55c0.63-1-1.74-1.57-1.77-3.87m-63-.46c0.06,1.38-1.34,3-1.65,3.54s-2.36,4.4-.33,5.41c2.34,1.16,4.42-.71,4.9-1.17a8.08,8.08,0,0,1,0,3.45c-0.44,1.63-3.47,2.71-3.87,2.66a1.28,1.28,0,0,0,.76,1,2,2,0,0,1-1,1.15,1.09,1.09,0,0,0,1.07.46,2.15,2.15,0,0,1-.65,1.34,1.18,1.18,0,0,0,1,.27c-0.9,1.07-.53,2.48-0.15,2.62,0.23-.44.71-1.63,1.3-1.59s0.11,2.07.63,2.66c1.26-.32.84-1.88,0.84-2.37,0.69,0.94,1.3.75,2.08,1.38,0.5-.81-0.82-2.12-1.81-2.62,0.31-.27,1,0.36,1.66-0.13-0.32-1.44-2.23-.58-2.23-0.58-0.69-3,3.65-5.36,6.12-5.14C23.32,59.74,21,60,21.35,56.41c0.29-3,3.66-3.76,5.1-5.53a3.84,3.84,0,0,1-1.08-1l-0.16.22L24.84,50a1.75,1.75,0,0,1-.41-0.16,3.57,3.57,0,0,1-.93,1.42l-0.29.28-0.36-.17a2.67,2.67,0,0,1-.42-0.24,3.22,3.22,0,0,1-1.61,1.24l-0.33.12-0.26-.25a2.63,2.63,0,0,1-.4-0.46,2.56,2.56,0,0,1-1,.69l-0.43.18-0.12-.17c-0.68,1.21-1.87,3.34-2.39,4.25-0.72,1.26-1.62,2-2.48,1.95s-1.11-.92-0.55-1a1.29,1.29,0,0,0,1.24-1.15,2.41,2.41,0,0,1-1.64-.29c0.27-.36,1-0.19,1.79-0.1s1.53-.61,1.66-1.93a1.46,1.46,0,0,1-1.91,0c0.13-.15.12-0.21,1.45-0.34s1.14-1.48,1.11-2H16.56a2,2,0,0,1-1.86.48,4.17,4.17,0,0,0,.36-1.54,2.31,2.31,0,0,1-.37,0,2.17,2.17,0,0,1-.81-0.16m-6.78.46c0,2.3-2.4,2.85-1.77,3.87C5.45,54.5,7.16,54.27,8,53.89s1-1.68,1.16-2c0.31,0.08-.31,1.63.23,2.1a1.52,1.52,0,0,1,.76-1c0.5-.42.15-1.37,0-2.37s1.61-1.88,3-1.3c0-.11,0-0.21,0-0.31a3.26,3.26,0,0,1-1.49-.52l-0.45-.26,0.21-.47,0.09-.19A7.29,7.29,0,0,0,8.88,49c-1.36.95-3.3-.08-3.36,2.2a1.49,1.49,0,0,1,1.56-.06"
                          fill-rule="evenodd" fill="#fff"></path>
                    <path d="M88.89,16.8h4.34V35.1h8.41v3.42H88.89V16.8Zm22.46,5.32c-4.72,0-8.34,3.2-8.34,8.49a7.9,7.9,0,0,0,8.34,8.28c5.3,0,8.37-3.67,8.37-8.28,0-5.29-3.63-8.49-8.37-8.49m0,13.53c-3.16,0-4-2.89-4-5.54,0-2.4,1.3-4.76,4-4.76s4,2.3,4,4.76c0,2.68-.84,5.54-4,5.54m11.54,2.86H127V30.68c0-2.05.65-5.32,3.66-5.32,2.67,0,2.7,2.64,2.7,4.6v8.56h4.16V28.41c0-3.61-1.64-6.29-5.43-6.29a6,6,0,0,0-5.24,2.55h-0.06V22.5h-3.94v16Zm29.59,0h4V15.19h-4.16v9.18H152.3a5.67,5.67,0,0,0-4.78-2.24c-4.9,0-6.7,3.92-6.7,8.34s1.8,8.43,6.7,8.43a5.92,5.92,0,0,0,4.9-2.18h0.06v1.81Zm-7.32-8.06c0-2.15.74-5.1,3.44-5.1s3.72,2.86,3.72,5.1-0.9,5.2-3.66,5.2S145.17,32.67,145.17,30.46Zm23-8.34c-4.71,0-8.34,3.2-8.34,8.49a7.9,7.9,0,0,0,8.34,8.28c5.3,0,8.38-3.67,8.38-8.28,0-5.29-3.63-8.49-8.38-8.49m0,13.53c-3.16,0-4-2.89-4-5.54,0-2.4,1.3-4.76,4-4.76s4,2.3,4,4.76c0,2.68-.84,5.54-4,5.54m11.63,2.86h4.16V30.68c0-2.05.65-5.32,3.66-5.32,2.67,0,2.7,2.64,2.7,4.6v8.56h4.16V28.41c0-3.61-1.65-6.29-5.43-6.29a6,6,0,0,0-5.24,2.55h-0.06V22.5h-3.94v16Zm27.32,0h7.57c2.73,0,7.63-.81,7.63-6.29,0-2.68-2-4.67-5-4.95V27.23a4.84,4.84,0,0,0,4.31-4.85c0-4.76-4.19-5.57-7-5.57h-7.57V38.52Zm4.34-18.3h1.68c2,0,4.19.19,4.19,2.71,0,2.24-2.26,2.64-4.09,2.64h-1.77V20.23Zm0,8.59h2c2.17,0,4.47.44,4.47,3.27,0,2.52-2.45,3-4.47,3h-2V28.81ZM233,22.13c-4.72,0-8.34,3.2-8.34,8.49A7.9,7.9,0,0,0,233,38.9c5.3,0,8.37-3.67,8.37-8.28,0-5.29-3.63-8.49-8.37-8.49m0,13.53c-3.16,0-4-2.89-4-5.54,0-2.4,1.3-4.76,4-4.76s4,2.3,4,4.76c0,2.68-.84,5.54-4,5.54m11.73,2.86h4.16V32.64c0-2.3,0-6.53,3.38-6.53a4.22,4.22,0,0,1,1.86.34v-4.2a4.52,4.52,0,0,0-1.27-.12c-2.48,0-4.19,2.52-4.38,4h-0.06V22.5H244.7v16Zm18.74-16.4c-4.72,0-8.35,3.2-8.35,8.49a7.9,7.9,0,0,0,8.35,8.28c5.3,0,8.37-3.67,8.37-8.28,0-5.29-3.63-8.49-8.37-8.49m0,13.53c-3.16,0-4-2.89-4-5.54,0-2.4,1.3-4.76,4-4.76s4,2.3,4,4.76c0,2.68-.84,5.54-4,5.54M289.69,22.5h-4.15v7.84c0,2.05-.65,5.32-3.66,5.32-2.67,0-2.7-2.64-2.7-4.6V22.5H275V32.61c0,3.61,1.64,6.29,5.43,6.29a6.65,6.65,0,0,0,5.24-2.55h0.06v2.18h3.94v-16Zm15,0v2.18h-0.06a5.3,5.3,0,0,0-4.9-2.55c-4.78,0-6.76,4.45-6.76,8.31,0,4.3,1.8,8.09,6.51,8.09a5.7,5.7,0,0,0,5-2.55h0.06c0,2.77-.22,6.22-4.81,6.22a11.93,11.93,0,0,1-4.65-1.4l-0.34,3.55a14,14,0,0,0,5.52,1.09c6.7,0,8.44-4.11,8.44-8.46V22.5h-4Zm-3.85,12.79c-2.39,0-3.54-2.68-3.54-4.85,0-2.46.9-5.07,3.72-5.07,2.42,0,3.47,2.24,3.47,5S303.43,35.29,300.83,35.29Zm11.43,3.24h4.16V30.68c0-2.05.65-5.32,3.66-5.32,2.67,0,2.7,2.65,2.7,4.61v8.56h4.16V28.41c0-3.61-1.65-6.29-5.43-6.29a5.94,5.94,0,0,0-5,2.55h-0.06V15.19h-4.16V38.52ZM95.84,54.11c-4.72,0-8.34,3.2-8.34,8.49a7.9,7.9,0,0,0,8.34,8.28c5.3,0,8.37-3.67,8.37-8.28,0-5.29-3.63-8.49-8.37-8.49m0,13.54c-3.16,0-4-2.89-4-5.54,0-2.4,1.3-4.76,4-4.76s4,2.3,4,4.76c0,2.67-.84,5.54-4,5.54M109,70.51h4.16v-13h3.63v-3h-3.63v-2c0-1.24.43-2.46,1.83-2.46a3.23,3.23,0,0,1,1.8.56l0.34-3.45a14.55,14.55,0,0,0-3-.34c-3.29,0-5.09,2.24-5.09,5.44v2.24h-3.07v3H109v13Zm19.54,0h4.34V61h8.68v9.52h4.34V48.79h-4.34v8.77h-8.68V48.79h-4.34V70.51Zm29.23-16.4c-4.72,0-8.34,3.2-8.34,8.49a7.9,7.9,0,0,0,8.34,8.28c5.3,0,8.38-3.67,8.38-8.28,0-5.29-3.63-8.49-8.38-8.49m0,13.54c-3.16,0-4-2.89-4-5.54,0-2.4,1.3-4.76,4-4.76s4,2.3,4,4.76c0,2.67-.84,5.54-4,5.54M184,54.49h-4.16v7.84c0,2.05-.65,5.32-3.66,5.32-2.67,0-2.7-2.64-2.7-4.61V54.49h-4.16V64.6c0,3.61,1.65,6.29,5.43,6.29A6.66,6.66,0,0,0,180,68.33h0.06v2.18H184v-16Zm3.58,16h4.16V62.67c0-2.05.65-5.32,3.66-5.32,2.67,0,2.7,2.64,2.7,4.61v8.56h4.16V60.4c0-3.61-1.65-6.29-5.43-6.29a6,6,0,0,0-5.24,2.55h-0.06V54.49h-3.94v16ZM216.32,54.7a19.07,19.07,0,0,0-4.53-.59c-3.26,0-6.27,1.53-6.27,5,0,5.79,7.23,3.64,7.23,6.78,0,1.56-1.67,2-2.73,2a9.09,9.09,0,0,1-4.09-1.06l-0.25,3.42a18.52,18.52,0,0,0,4.72.69c3.38,0,6.7-1.49,6.7-5.23,0-5.79-7.23-4.17-7.23-6.72,0-1.37,1.33-1.78,2.45-1.78a10.17,10.17,0,0,1,3.72.69Zm4.09,15.81h4.16V47.17h-4.16V70.51Zm15.85-16.4c-4.71,0-8.35,3.2-8.35,8.49a7.9,7.9,0,0,0,8.35,8.28c5.3,0,8.38-3.67,8.38-8.28,0-5.29-3.63-8.49-8.38-8.49m0,13.54c-3.16,0-4-2.89-4-5.54,0-2.4,1.3-4.76,4-4.76s4,2.3,4,4.76c0,2.67-.84,5.54-4,5.54m15.23,2.86h4.75l3.41-12.23h0.06l3.47,12.23h4.9l4.9-16h-4L265.7,66.34h-0.06l-3.48-11.85h-4.84L254.1,66.34H254L250.5,54.49H246.1Z"
                          fill-rule="evenodd" fill="#fff"></path>
                </svg>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                @else

                    @if(auth()->user()->hasPermission('uploadFile'))
                        <li data-toggle="tooltip" data-placement="bottom" title="Upload File">
                            <a href="/uploads"><i class="fa fa-upload"></i></a>
                        </li>
                    @endif

                    @if(auth()->user()->hasPermission('reports'))
                        <li data-toggle="tooltip" data-placement="bottom" title="Reports & Analysis">
                            <a href="/reports"><i class="fa fa-line-chart"></i></a>
                        </li>
                    @endif

                    @if(auth()->user()->hasPermission('clientLookup'))
                        <li data-toggle="tooltip" data-placement="bottom" title="Client Lookup">
                            <a href="/clients"><i class="fa fa-address-card-o"></i></a>
                        </li>
                    @endif

                    @if(auth()->user()->hasPermission('settings'))
                        <li data-toggle="tooltip" data-placement="bottom" title="Settings">
                            <a href="/settings"><i class="fa fa-cog"></i></a>
                        </li>
                    @endif

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<div class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">
                    @yield('title')
                </div>

                <div class="panel-body">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (Session::has('flash_message'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            {{ Session::get('flash_message') }}
                        </div>
                    @endif

                    @yield('content')
                </div>

            </div>
        </div>
    </div>

</div>
<script src="/js/spend.js"></script>
<script src="/js/piechart.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>

<script>
    $('.select2').select2();

    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });

    $.fn.digits = function () {
        return this.each(function () {
            $(this).text($(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,"));
        })
    }
</script>

@yield('footerScripts')
</body>
</html>