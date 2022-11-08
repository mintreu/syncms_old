@props(
    [
        $title = 'Tailwind Test',
        'config' => [
            'title' => 'Maximum',
        ],
    ])

<x-layout::layout :title="$title" :config="$config">




    <div class="h-full"  x-data="{ leftMSidebar:false,darkMode:false,leftSidebar:true }" x-bind:class="{'dark': darkMode }" >

        {{--        <x-navbar.basic />--}}

        <div class="flex  w-full h-screen bg-transparent">
            {{--            <x-sidebar.basic />--}}


            <main class="h-full w-full rounded-lg ring-2 ring-gray-400 p-2 bg-transparent overflow-y-auto">
                <div class="grid grid-cols-12 gap-2">
{{--                    {{ $slot }}--}}

                    Hello
                </div>
            </main>


        </div>
    </div>



</x-layout::layout>

