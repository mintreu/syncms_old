@props(
    [
        $title = 'Tailwind Test',
        'config' => [
//            'title' => 'Maximum',
        ],
    ])

<x-layout::layout :title="$title" :config="$config">

    <div class="grid grid-cols-3 gap-4 bg-lime-300 p-5">

        <div class="bg-sky-300 text-dark">
            <h1 class="text-2xl text-center"> Tailwind Test</h1>

            <a href="/" data-turbolinks="true" data-turbolinks-action="replace"> home</a>

            <a href="/test" data-turbolinks="true" data-turbolinks-action="replace">Tailwind</a>


        </div>

        <div class="mx-auto p-2 text-center">
            Rounded
            <div class="ring-2 ring-amber-900 shadow-lg rounded-lg mb-2 shadow-lg">
                LG
            </div>

            <div class="rounded-full ring-2 ring-amber-900 mb-2 shadow-none">
                Full
            </div>

            <div class="rounded-xl ring-2 ring-amber-900 mb-2 shadow-2xl">
                XL
            </div>

        </div>



        <div class="col-span-2 border-3 border-dark ">

            Typography
            <h1 class="text-sm text-gray-600 font-bold">text-sm</h1>
            <h1 class="text-md text-orange-600 font-bold">text-md</h1>
            <h1 class="text-lg text-violet-600 font-bold">text-lg</h1>
            <h1 class="text-xl text-purple-600 font-bold">text-xl</h1>
            <h1 class="text-2xl text-red-600 font-bold">text-2xl</h1>
            <h1 class="text-3xl text-pink-600 font-bold">text-3xl</h1>
            <h1 class="text-4xl text-blue-600 font-bold">text-4xl</h1>
            <h1 class="text-5xl text-sky-600 font-bold">text-5xl</h1> <br>
            <h1 class="text-6xl text-green-600 font-bold">text-6xl</h1>
            <h1 class="text-7xl text-yellow-600 font-bold">text-7xl</h1>
            <h1 class="text-8xl text-lime-600 font-bold">text-8xl</h1>


        </div>



        <div class="justify-content-between">
            <h1 class="text-center text-xl text-red-400"> Paragraph Test</h1>

            <p class="text-red-300 bold">Lorem ipsum dolor</p>
            <p class="text-dark shadow-lg">sit amet,</p>
            <small class="text-muted">consectetur adipiscing elit.</small>
            Nulla turpis nisi, porttitor at venenatis sed, fermentum in odio. Donec aliquet tortor eget pellentesque tempus. Ut sapien nisi, vehicula ut tincidunt sit amet, molestie a mi. Nulla venenatis magna ac interdum tempus. Praesent feugiat dapibus nisl quis vulputate. Nam porta, enim sed auctor interdum, massa ipsum efficitur libero, id suscipit purus magna eu mauris. Aenean non erat et ante tincidunt ultrices. Donec ornare vitae dui ut consectetur. Maecenas blandit metus non orci feugiat pellentesque. Quisque vel gravida magna. Ut ultrices sit amet lacus ut scelerisque. Phasellus ornare iaculis diam sit amet hendrerit. Praesent mollis purus vitae tincidunt euismod. In malesuada vitae tellus vel fermentum. Maecenas ut odio a magna laoreet hendrerit sed dapibus mauris. Etiam sit amet rhoncus ipsum.

            In eu nisl nec tellus fermentum tempor a quis erat. Phasellus blandit sapien vitae mi mattis, in scelerisque mauris condimentum. Sed sagittis ipsum blandit risus imperdiet, id mattis nisl cursus. Vestibulum vehicula consequat fermentum. Sed a arcu in turpis egestas cursus. Vestibulum sit amet feugiat odio, sit amet tempor est. Vestibulum efficitur, magna tincidunt ultricies interdum, turpis risus varius ante, nec suscipit metus elit sed orci. In lacus magna, molestie lobortis tincidunt quis, facilisis sed magna. Proin sed posuere odio. Sed dapibus aliquam suscipit. Aenean sollicitudin arcu eu nulla rutrum suscipit. Vestibulum elit libero, placerat vehicula sagittis sed, eleifend feugiat sapien. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Suspendisse dignissim vitae nunc aliquam varius.

        </div>

        <div class="col-span-2 ...">
            <div class="grid grid-cols-1">
                Background Colors

                <div class="w-full h-full bg-white p-2">
                    <h1 class="bold text-lg text-slate-600">Slate :- </h1>
                    <div class="flex border-1 border-dark gap-2 ">
                        <button class="bg-slate-50 p-1 m-1">50</button>
                        <button class="bg-slate-100 p-1 m-1">100</button>
                        <button class="bg-slate-200 p-1 m-1">200</button>
                        <button class="bg-slate-300 p-1 m-1">300</button>
                        <button class="bg-slate-400 p-1 m-1">400</button>
                        <button class="bg-slate-500 p-1 m-1">500</button>
                        <button class="bg-slate-600 p-1 m-1">600</button>
                        <button class="bg-slate-700 p-1 m-1 text-white">700</button>
                        <button class="bg-slate-800 p-1 m-1 text-white">800</button>
                        <button class="bg-slate-900 p-1 m-1 text-white">900</button>
                    </div>
                </div>

                <div class="w-full h-full bg-white p-2">
                    <h1 class="bold text-lg text-gray-600">Gray :- </h1>
                    <div class="flex border-1 border-dark gap-2">
                        <button class="bg-gray-50 p-1 m-1">50</button>
                        <button class="bg-gray-100 p-1 m-1">100</button>
                        <button class="bg-gray-200 p-1 m-1">200</button>
                        <button class="bg-gray-300 p-1 m-1">300</button>
                        <button class="bg-gray-400 p-1 m-1">400</button>
                        <button class="bg-gray-500 p-1 m-1">500</button>
                        <button class="bg-gray-600 p-1 m-1">600</button>
                        <button class="bg-gray-700 p-1 m-1 text-white">700</button>
                        <button class="bg-gray-800 p-1 m-1 text-white">800</button>
                        <button class="bg-gray-900 p-1 m-1 text-white">900</button>
                    </div>
                </div>


                <div class="w-full h-full bg-white p-2">
                    <h1 class="bold text-lg text-red-600">Red :- </h1>
                    <div class="flex border-1 border-dark gap-2">
                        <button class="bg-red-50 p-1 m-1">50</button>
                        <button class="bg-red-100 p-1 m-1">100</button>
                        <button class="bg-red-200 p-1 m-1">200</button>
                        <button class="bg-red-300 p-1 m-1">300</button>
                        <button class="bg-red-400 p-1 m-1">400</button>
                        <button class="bg-red-500 p-1 m-1">500</button>
                        <button class="bg-red-600 p-1 m-1">600</button>
                        <button class="bg-red-700 p-1 m-1 text-white">700</button>
                        <button class="bg-red-800 p-1 m-1 text-white">800</button>
                        <button class="bg-red-900 p-1 m-1 text-white">900</button>
                    </div>
                </div>

                <div class="w-full h-full bg-white">
                    <h1 class="bold text-lg text-orange-600">Orange :- </h1>
                    <div class="flex border-1 border-dark gap-2">
                        <button class="bg-orange-50 border-1 border-dark">50</button>
                        <button class="bg-orange-100 border-1 border-dark">100</button>
                        <button class="bg-orange-200 border-1 border-dark">200</button>
                        <button class="bg-orange-300 border-1 border-dark">300</button>
                        <button class="bg-orange-400 border-1 border-dark">400</button>
                        <button class="bg-orange-500 border-1 border-dark">500</button>
                        <button class="bg-orange-600 border-1 border-dark">600</button>
                        <button class="bg-orange-700 text-white">700</button>
                        <button class="bg-orange-800 text-white">800</button>
                        <button class="bg-orange-900 text-white">900</button>
                    </div>
                </div>


                <div class="w-full h-full bg-white">
                    <h1 class="bold text-lg text-amber-600">Amber :- </h1>
                    <div class="flex border-1 border-dark gap-2">
                        <button class="bg-amber-50 border-1 border-dark">50</button>
                        <button class="bg-amber-100 border-1 border-dark">100</button>
                        <button class="bg-amber-200 border-1 border-dark">200</button>
                        <button class="bg-amber-300 border-1 border-dark">300</button>
                        <button class="bg-amber-400 border-1 border-dark">400</button>
                        <button class="bg-amber-500 border-1 border-dark">500</button>
                        <button class="bg-amber-600 border-1 border-dark">600</button>
                        <button class="bg-amber-700 text-white">700</button>
                        <button class="bg-amber-800 text-white">800</button>
                        <button class="bg-amber-900 text-white">900</button>
                    </div>
                </div>


                <div class="w-full h-full bg-white">
                    <h1 class="bold text-lg text-yellow-600">Yellow :- </h1>
                    <div class="flex border-1 border-dark gap-2">
                        <button class="bg-yellow-50 border-1 border-dark">50</button>
                        <button class="bg-yellow-100 border-1 border-dark">100</button>
                        <button class="bg-yellow-200 border-1 border-dark">200</button>
                        <button class="bg-yellow-300 border-1 border-dark">300</button>
                        <button class="bg-yellow-400 border-1 border-dark">400</button>
                        <button class="bg-yellow-500 border-1 border-dark">500</button>
                        <button class="bg-yellow-600 border-1 border-dark">600</button>
                        <button class="bg-yellow-700 text-white">700</button>
                        <button class="bg-yellow-800 text-white">800</button>
                        <button class="bg-yellow-900 text-white">900</button>
                    </div>
                </div>


                <div class="w-full h-full bg-white">
                    <h1 class="bold text-lg text-lime-600">Lime :- </h1>
                    <div class="flex border-1 border-dark gap-2">
                        <button class="bg-lime-50 border-1 border-dark">50</button>
                        <button class="bg-lime-100 border-1 border-dark">100</button>
                        <button class="bg-lime-200 border-1 border-dark">200</button>
                        <button class="bg-lime-300 border-1 border-dark">300</button>
                        <button class="bg-lime-400 border-1 border-dark">400</button>
                        <button class="bg-lime-500 border-1 border-dark">500</button>
                        <button class="bg-lime-600 border-1 border-dark">600</button>
                        <button class="bg-lime-700 text-white">700</button>
                        <button class="bg-lime-800 text-white">800</button>
                        <button class="bg-lime-900 text-white">900</button>
                    </div>
                </div>



                <div class="w-full h-full bg-white">
                    <h1 class="bold text-lg text-green-600">Green :- </h1>
                    <div class="flex border-1 border-dark gap-2">
                        <button class="bg-green-50 border-1 border-dark">50</button>
                        <button class="bg-green-100 border-1 border-dark">100</button>
                        <button class="bg-green-200 border-1 border-dark">200</button>
                        <button class="bg-green-300 border-1 border-dark">300</button>
                        <button class="bg-green-400 border-1 border-dark">400</button>
                        <button class="bg-green-500 border-1 border-dark">500</button>
                        <button class="bg-green-600 border-1 border-dark">600</button>
                        <button class="bg-green-700 text-white">700</button>
                        <button class="bg-green-800 text-white">800</button>
                        <button class="bg-green-900 text-white">900</button>
                    </div>
                </div>

                <div class="w-full h-full bg-white">
                    <h1 class="bold text-lg text-teal-600">Teal :- </h1>
                    <div class="flex border-1 border-dark gap-2">
                        <button class="bg-teal-50 border-1 border-dark">50</button>
                        <button class="bg-teal-100 border-1 border-dark">100</button>
                        <button class="bg-teal-200 border-1 border-dark">200</button>
                        <button class="bg-teal-300 border-1 border-dark">300</button>
                        <button class="bg-teal-400 border-1 border-dark">400</button>
                        <button class="bg-teal-500 border-1 border-dark">500</button>
                        <button class="bg-teal-600 border-1 border-dark">600</button>
                        <button class="bg-teal-700 text-white">700</button>
                        <button class="bg-teal-800 text-white">800</button>
                        <button class="bg-teal-900 text-white">900</button>
                    </div>
                </div>


                <div class="w-full h-full bg-white">
                    <h1 class="bold text-lg text-cyan-600">Cyan :- </h1>
                    <div class="flex border-1 border-dark gap-2">
                        <button class="bg-cyan-50 border-1 border-dark">50</button>
                        <button class="bg-cyan-100 border-1 border-dark">100</button>
                        <button class="bg-cyan-200 border-1 border-dark">200</button>
                        <button class="bg-cyan-300 border-1 border-dark">300</button>
                        <button class="bg-cyan-400 border-1 border-dark">400</button>
                        <button class="bg-cyan-500 border-1 border-dark">500</button>
                        <button class="bg-cyan-600 border-1 border-dark">600</button>
                        <button class="bg-cyan-700 text-white">700</button>
                        <button class="bg-cyan-800 text-white">800</button>
                        <button class="bg-cyan-900 text-white">900</button>
                    </div>
                </div>


                <div class="w-full h-full bg-white">
                    <h1 class="bold text-lg text-sky-600">Sky :- </h1>
                    <div class="flex border-1 border-dark gap-2">
                        <button class="bg-sky-50 border-1 border-dark">50</button>
                        <button class="bg-sky-100 border-1 border-dark">100</button>
                        <button class="bg-sky-200 border-1 border-dark">200</button>
                        <button class="bg-sky-300 border-1 border-dark">300</button>
                        <button class="bg-sky-400 border-1 border-dark">400</button>
                        <button class="bg-sky-500 border-1 border-dark">500</button>
                        <button class="bg-sky-600 border-1 border-dark">600</button>
                        <button class="bg-sky-700 text-white">700</button>
                        <button class="bg-sky-800 text-white">800</button>
                        <button class="bg-sky-900 text-white">900</button>
                    </div>
                </div>

                <div class="w-full h-full bg-white">
                    <h1 class="bold text-lg text-blue-600">Blue :- </h1>
                    <div class="flex border-1 border-dark gap-2">
                        <button class="bg-blue-50 border-1 border-dark">50</button>
                        <button class="bg-blue-100 border-1 border-dark">100</button>
                        <button class="bg-blue-200 border-1 border-dark">200</button>
                        <button class="bg-blue-300 border-1 border-dark">300</button>
                        <button class="bg-blue-400 border-1 border-dark">400</button>
                        <button class="bg-blue-500 border-1 border-dark">500</button>
                        <button class="bg-blue-600 border-1 border-dark">600</button>
                        <button class="bg-blue-700 text-white">700</button>
                        <button class="bg-blue-800 text-white">800</button>
                        <button class="bg-blue-900 text-white">900</button>
                    </div>
                </div>


                <div class="w-full h-full bg-white">
                    <h1 class="bold text-lg text-indigo-600">Indigo :- </h1>
                    <div class="flex border-1 border-dark gap-2">
                        <button class="bg-indigo-50 border-1 border-dark">50</button>
                        <button class="bg-indigo-100 border-1 border-dark">100</button>
                        <button class="bg-indigo-200 border-1 border-dark">200</button>
                        <button class="bg-indigo-300 border-1 border-dark">300</button>
                        <button class="bg-indigo-400 border-1 border-dark">400</button>
                        <button class="bg-indigo-500 border-1 border-dark">500</button>
                        <button class="bg-indigo-600 border-1 border-dark">600</button>
                        <button class="bg-indigo-700 text-white">700</button>
                        <button class="bg-indigo-800 text-white">800</button>
                        <button class="bg-indigo-900 text-white">900</button>
                    </div>
                </div>


                <div class="w-full h-full bg-white">
                    <h1 class="bold text-lg text-violet-600">Violet :- </h1>
                    <div class="flex border-1 border-dark gap-2">
                        <button class="bg-violet-50 border-1 border-dark">50</button>
                        <button class="bg-violet-100 border-1 border-dark">100</button>
                        <button class="bg-violet-200 border-1 border-dark">200</button>
                        <button class="bg-violet-300 border-1 border-dark">300</button>
                        <button class="bg-violet-400 border-1 border-dark">400</button>
                        <button class="bg-violet-500 border-1 border-dark">500</button>
                        <button class="bg-violet-600 border-1 border-dark">600</button>
                        <button class="bg-violet-700 text-white">700</button>
                        <button class="bg-violet-800 text-white">800</button>
                        <button class="bg-violet-900 text-white">900</button>
                    </div>
                </div>



                <div class="w-full h-full bg-white">
                    <h1 class="bold text-lg text-purple-600">Purple :- </h1>
                    <div class="flex border-1 border-dark gap-2">
                        <button class="bg-purple-50 border-1 border-dark">50</button>
                        <button class="bg-purple-100 border-1 border-dark">100</button>
                        <button class="bg-purple-200 border-1 border-dark">200</button>
                        <button class="bg-purple-300 border-1 border-dark">300</button>
                        <button class="bg-purple-400 border-1 border-dark">400</button>
                        <button class="bg-purple-500 border-1 border-dark">500</button>
                        <button class="bg-purple-600 border-1 border-dark">600</button>
                        <button class="bg-purple-700 text-white">700</button>
                        <button class="bg-purple-800 text-white">800</button>
                        <button class="bg-purple-900 text-white">900</button>
                    </div>
                </div>



                <div class="w-full h-full bg-white">
                    <h1 class="bold text-lg text-fuchsia-600">Fuchsia :- </h1>
                    <div class="flex border-1 border-dark gap-2">
                        <button class="bg-fuchsia-50 border-1 border-dark">50</button>
                        <button class="bg-fuchsia-100 border-1 border-dark">100</button>
                        <button class="bg-fuchsia-200 border-1 border-dark">200</button>
                        <button class="bg-fuchsia-300 border-1 border-dark">300</button>
                        <button class="bg-fuchsia-400 border-1 border-dark">400</button>
                        <button class="bg-fuchsia-500 border-1 border-dark">500</button>
                        <button class="bg-fuchsia-600 border-1 border-dark">600</button>
                        <button class="bg-fuchsia-700 text-white">700</button>
                        <button class="bg-fuchsia-800 text-white">800</button>
                        <button class="bg-fuchsia-900 text-white">900</button>
                    </div>
                </div>



                <div class="w-full h-full bg-white">
                    <h1 class="bold text-lg text-pink-600">Pink :- </h1>
                    <div class="flex border-1 border-dark gap-2">
                        <button class="bg-pink-50 border-1 border-dark">50</button>
                        <button class="bg-pink-100 border-1 border-dark">100</button>
                        <button class="bg-pink-200 border-1 border-dark">200</button>
                        <button class="bg-pink-300 border-1 border-dark">300</button>
                        <button class="bg-pink-400 border-1 border-dark">400</button>
                        <button class="bg-pink-500 border-1 border-dark">500</button>
                        <button class="bg-pink-600 border-1 border-dark">600</button>
                        <button class="bg-pink-700 text-white">700</button>
                        <button class="bg-pink-800 text-white">800</button>
                        <button class="bg-pink-900 text-white">900</button>
                    </div>
                </div>


                <div class="w-full h-full bg-white">
                    <h1 class="bold text-lg text-rose-600">Rose :- </h1>
                    <div class="flex border-1 border-dark gap-2">
                        <button class="bg-rose-50 border-1 border-dark">50</button>
                        <button class="bg-rose-100 border-1 border-dark">100</button>
                        <button class="bg-rose-200 border-1 border-dark">200</button>
                        <button class="bg-rose-300 border-1 border-dark">300</button>
                        <button class="bg-rose-400 border-1 border-dark">400</button>
                        <button class="bg-rose-500 border-1 border-dark">500</button>
                        <button class="bg-rose-600 border-1 border-dark">600</button>
                        <button class="bg-rose-700 text-white">700</button>
                        <button class="bg-rose-800 text-white">800</button>
                        <button class="bg-rose-900 text-white">900</button>
                    </div>
                </div>


            </div>
        </div>

        <div>

        </div>




    </div>




    {{--    <div class="flex justify-center items-center h-screen h-full w-full w-screen">--}}
    {{--        <h1 class="text-xl text-purple-600 font-bold">Welcome</h1>--}}
    {{--        <h1 class="text-2xl text-red-600 font-bold">Welcome</h1>--}}
    {{--        <h1 class="text-3xl text-pink-600 font-bold">Welcome</h1>--}}
    {{--        <h1 class="text-4xl text-blue-600 font-bold">Welcome</h1>--}}
    {{--        <h1 class="text-5xl text-sky-600 font-bold">Welcome</h1> <br>--}}
    {{--        <h1 class="text-6xl text-green-600 font-bold">Welcome</h1>--}}
    {{--        <h1 class="text-7xl text-yellow-600 font-bold">Welcome</h1>--}}
    {{--        <h1 class="text-8xl text-lime-600 font-bold">Welcome</h1>--}}
    {{--        <h1 class="text-sm text-gray-600 font-bold">Welcome</h1>--}}
    {{--        <h1 class="text-lg text-violet-600 font-bold">Welcome</h1>--}}
    {{--        <h1 class="text-md text-orange-600 font-bold">Welcome</h1>--}}

    {{--    </div>--}}


    {{--    <div class="flex justify-center items-center h-screen">--}}

    {{--        <img height="80px" width="60px" src="@img(storage/images.jpg)" alt="image file">--}}


    {{--        <h1 class="text-3xl text-purple-600 font-bold">Welcome</h1>--}}

    {{--        <img height="80px" width="60px" src="@img(storage/images.jpg)" alt="image file">--}}
    {{--    </div>--}}


</x-layout::layout>

