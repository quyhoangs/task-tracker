<!doctype html>
<html lang="ja">
@include('components.emails_layouts.template_header')
<body class="">
<table role="presentation" class="body">
    <tr>
        <td class="container">
            <div class="content">

                <table role="presentation" class="main">

                    <tr>
                        <td class="wrapper">
                            <table role="presentation">
                                <tr>
                                    <td>
                                        {{ $slot }}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                </table>

                @include('components.emails_layouts.template_footer')

            </div>
        </td>
    </tr>
</table>
</body>
</html>
