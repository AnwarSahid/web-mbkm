<x-app-layout>


    <div class="  items-center justify-center md:flex ">
        <div class="relative z-10 -mx-4 group w-full">
            <div aria-hidden="true"
                class="absolute top-0 w-full h-full rounded-2xl bg-slate-100 shadow-xl transition duration-500 group-hover:scale-105 lg:group-hover:scale-110">
            </div>
            <div class="relative p-6 space-y-6 lg:p-8">
                <h3 class="text-3xl text-gray-700 font-semibold text-center">Status</h3>

                <ul role="list" class="w-max space-y-4 py-6 m-auto text-gray-600">
                    <li class="space-x-2">
                        <span class="text-purple-500 font-semibold">&check;</span>
                        <span>{{ $user->name }}</span>
                    </li>
                    <li class="space-x-2">
                        <span class="text-purple-500 font-semibold">&check;</span>
                        <span>{{ $user->npm }}</span>
                    </li>
                    <li class="space-x-2">
                        <span class="text-purple-500 font-semibold">&check;</span>
                        <span>{{ $user->email }}</span>
                    </li>
                </ul>

                <button type="button" title="button"
                    class="block w-full py-3 px-6 text-center rounded-xl transition bg-purple-600 hover:bg-purple-700 active:bg-purple-800 focus:bg-purple-600">
                    <span class="text-white font-semibold">
                        Status Validasi
                    </span>
                </button>
            </div>
        </div>


    </div>

</x-app-layout>
