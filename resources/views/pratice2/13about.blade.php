<x-layout>

    <x-slot name="title">
       About Page
    </x-slot>

    <x-slot name="main" class="main">

        <style>
            .sub-heading {
                color: #aa1919;
                font-weight: bold;
                margin-bottom: 10px;
            }

            .content {
                font-size: 14px;
                line-height: 1.6;
            }
        </style>
        <div>
            <h3 class="sub-heading">Subheading of About Page</h3>
            <p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam non urna vitae tortor
                ultrices hendrerit.</p>
        </div>
    </x-slot>

</x-layout>
