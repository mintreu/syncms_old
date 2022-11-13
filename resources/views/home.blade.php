



<x-layout::layout>

      <div class="container p-10">

          <div class="mx-auto text-center  h-full w-full p-10  bg-gray-300 h-96  rounded-lg">
              <h1 class="text-8xl text-red-600 mt-20"> {{ config('app.name') }}</h1>

              <h2 class="text-purple-100 font-bold text-2xl mt-10 italic">
                  TALL Content Management System
              </h2>

              <span class="text-indigo-600 text-2xl"><span class="text-3xl">B</span>y <a class="text-pink-600 font-bold" href="https://mintreu.com"><span class="text-3xl italic">M</span>intreu</a></span>

          </div>

          <div class="grid grid-cols-12 text-center p-10">

              <div class="col-span-4 bg-green-400 rounded-lg m-4 p-5">
                  <button>Knowledge</button>
              </div>

              <div class="col-span-4 bg-blue-400 rounded-lg m-4 p-5">
                  <button>Support</button>
              </div>

              <div class="col-span-4 bg-lime-400 rounded-lg m-4 p-5">
                  <button>Sponsor</button>
              </div>


          </div>

          <a href="/test" data-turbolinks="true">Tailwind</a>
      </div>



</x-layout::layout>
