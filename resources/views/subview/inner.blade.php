<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->

    @php
        $fullname = "faisal";
    @endphp

    @include('subview.header', ['name' => $fullname])

    and this is inner file

    <x-message-banner msg="user login successfully"></x-message-banner>
</div>
