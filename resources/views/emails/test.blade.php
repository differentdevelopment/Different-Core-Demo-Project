@extends('different-core::email.template')

@section('style')
    <style type="text/css">
        a {
            color: #fff;
        }

        a.footer-link {
            color: #2e58ff;
        }

        /*
        .background {
            background: #c7c7c7;
        }

        .foreground {
            background: #526c8b;
        }
        */
    </style>
@endsection

@section('logo')
    <img height="auto" src="{{ $message->embed('email-logo.png') }}" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;" width="150">
@endsection

@section('content')
<x-different-core::email-title>
    Name: {{ $name }}
</x-different-core::email-title>
<x-different-core::email-content>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non felis justo. Quisque sem odio, gravida et ex a, suscipit efficitur nibh. Sed quis erat bibendum, ultrices nibh vitae, pretium magna. Quisque non volutpat nulla. Fusce mollis arcu vitae orci varius venenatis. Vivamus et purus ac urna ornare posuere. Cras dapibus dapibus lacus, sed bibendum risus ultrices eget.
        <br/>
        <br/>
        Interdum et malesuada fames ac ante ipsum primis in faucibus. Quisque congue finibus ante pharetra volutpat. Donec congue metus sed tincidunt hendrerit. Curabitur bibendum neque libero, sit amet interdum tortor imperdiet ut. Aliquam lobortis, magna eu porttitor tincidunt, erat sapien faucibus arcu, quis luctus felis enim quis justo. Vivamus ullamcorper justo ac nisl tristique eleifend. Sed sit amet diam eu enim vulputate consectetur. In posuere lorem magna. Vestibulum varius est vitae justo maximus posuere. Nulla quis suscipit nulla.
        <br/>
        <br/>
        Nulla commodo magna sed ultricies pharetra. <a href="#">Ut ipsum odio, mattis a aliquam quis</a>, pretium vitae ligula. Donec et eros tortor. Phasellus malesuada gravida fermentum. Sed id dolor et mauris dignissim imperdiet vel quis metus. Ut gravida finibus turpis, in sodales sapien eleifend sed. Proin tincidunt dictum risus, eget volutpat est dignissim vitae. Aliquam bibendum mi tellus, at fringilla ipsum tempus sed. Donec interdum luctus interdum. Maecenas pharetra arcu orci, quis scelerisque odio tempor ac. Maecenas semper sapien vitae aliquet efficitur. Suspendisse dignissim metus vitae ipsum placerat aliquam. Duis hendrerit ac libero sed suscipit. Duis ultrices, sapien vitae luctus cursus, justo magna eleifend tortor, quis lacinia lectus ex nec ipsum. In placerat turpis diam, et ornare justo gravida sed.
    </p>
</x-different-core::email-content>
<x-different-core::email-button
    href="https://different.hu/"
    text="Megtekintés"
    background="#2e58ff"
    textColor="#fff"
></x-different-core::email-button>
<x-different-core::email-button
    href="https://different.hu/"
    text="Megtekintés"
    background="#ffc107"
    textColor="#5d4037"
></x-different-core::email-button>
<x-different-core::email-content>
    <h3>Teszt tartalom</h3>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non felis justo. Quisque sem odio, gravida et ex a, suscipit efficitur nibh. Sed quis erat bibendum, ultrices nibh vitae, pretium magna. Quisque non volutpat nulla. Fusce mollis arcu vitae orci varius venenatis. Vivamus et purus ac urna ornare posuere. Cras dapibus dapibus lacus, sed bibendum risus ultrices eget.
    </p>
</x-different-core::email-content>
<x-different-core::email-notification
    background="#FFC402"
    type="Figyelem"
    title="Elem hiányzik"
    message="Lehet, hogy a termék elfogyott. A lehető leghamarabb elküldjük Önnek."
    textColor="#7A5200"
    buttonHref="https://different.hu/"
    buttonText="Részletek"
></x-different-core::email-notification>
<x-different-core::email-notification
    background="#4DBC2B"
    type="Siker"
    title="Szállítás kész"
    message="Megrendelését kézbesítettük. Ha bármilyen kérdése van, forduljon hozzánk bizalommal. Szívesen segítünk Önnek."
    textColor="#fff"
    buttonHref="https://different.hu/"
    buttonText="Részletek"
></x-different-core::email-notification>
<x-different-core::email-notification
    background="#FF5121"
    type="Figyelem"
    title="Szállítás törölve"
    message="Megrendelését nem sikerült teljesíteni, ezért töröltük. Fiókját nem terheltük meg, és elnézést kérünk a kellemetlenségért."
    textColor="#fff"
    buttonHref="https://different.hu/"
    buttonText="Részletek"
></x-different-core::email-notification>
<x-different-core::email-notification
    background="#49AEFC"
    type="Információ"
    title="Tétel elküldve"
    message="Az Ön áruja elhagyta raktárunkat. Hamarosan meg kell kapnia."
    textColor="#fff"
    buttonHref="https://different.hu/"
    buttonText="Részletek"
></x-different-core::email-notification>
@endsection


@section('footer')
    © {{ date('Y') }} Different Fejlesztő Kft. - Minden jog fenntartva.
    <br>
    Email: <a class="footer-link" href="mailto:hello@different.hu">hello@different.hu</a>
    <br>
    Web: <a class="footer-link" href="https://different.hu/">https://different.hu/</a>
@endsection
