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
    text="Megtekint??s"
    background="#2e58ff"
    textColor="#fff"
></x-different-core::email-button>
<x-different-core::email-button
    href="https://different.hu/"
    text="Megtekint??s"
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
    title="Elem hi??nyzik"
    message="Lehet, hogy a term??k elfogyott. A lehet?? leghamarabb elk??ldj??k ??nnek."
    textColor="#7A5200"
    buttonHref="https://different.hu/"
    buttonText="R??szletek"
></x-different-core::email-notification>
<x-different-core::email-notification
    background="#4DBC2B"
    type="Siker"
    title="Sz??ll??t??s k??sz"
    message="Megrendel??s??t k??zbes??tett??k. Ha b??rmilyen k??rd??se van, forduljon hozz??nk bizalommal. Sz??vesen seg??t??nk ??nnek."
    textColor="#fff"
    buttonHref="https://different.hu/"
    buttonText="R??szletek"
></x-different-core::email-notification>
<x-different-core::email-notification
    background="#FF5121"
    type="Figyelem"
    title="Sz??ll??t??s t??r??lve"
    message="Megrendel??s??t nem siker??lt teljes??teni, ez??rt t??r??lt??k. Fi??kj??t nem terhelt??k meg, ??s eln??z??st k??r??nk a kellemetlens??g??rt."
    textColor="#fff"
    buttonHref="https://different.hu/"
    buttonText="R??szletek"
></x-different-core::email-notification>
<x-different-core::email-notification
    background="#49AEFC"
    type="Inform??ci??"
    title="T??tel elk??ldve"
    message="Az ??n ??ruja elhagyta rakt??runkat. Hamarosan meg kell kapnia."
    textColor="#fff"
    buttonHref="https://different.hu/"
    buttonText="R??szletek"
></x-different-core::email-notification>
@endsection
