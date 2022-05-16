<x-app-layout>
    @if (session()->has('message'))
        <div class="alert h-10 bg-green-500 text-white rounded-lg show flex items-center mb-2" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                    clip-rule="evenodd" />
            </svg>
            {{ session()->get('message') }}
        </div>
    @endif
    <form action="{{ route('updatecontactemergency', ['id' => $user->id]) }}" enctype="multipart/form-data"
        method="POST">
        @csrf
        @method('PUT')
        <div class="grid gap-6 mb-6 lg:grid-cols-2">
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama
                    Lengkap</label>
                <input type="text" id="name" name="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Nama Lengkap" value="{{ $user->getcontact->name }}">
            </div>
            <div>
                <label for="connection" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hubungan
                    Dengan Mahasiswa</label>
                <input type="text" id="connection" name="connection"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="orang Tua, Kakak/adik ,Saudara" value="{{ $user->getcontact->connection }}">
            </div>

            <div>
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">NO
                    Handphone</label>
                <input type="text" id="phone" name="phone"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Format: 62853-------" value="{{ $user->getcontact->phone }}">
            </div>

            <div>
                <label for="id_medsos" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kontak
                    Media
                    Sosial</label>
                <input type="text" id="id_medsos" name="id_medsos"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="ID Facebook/Instagram/Twitwer" value="{{ $user->getcontact->id_medsos }}">
            </div>

        </div>
        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email
            </label>
            <input type="email" id="email" name="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="unila@mail.com" value="{{ $user->getcontact->email }}">
        </div>
        <div class="mb-6">
            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alamat
                Rumah</label>
            <input type="text" id="address" name="address"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Jl. Prof. Dr. Sumantri Brojonegoro No. 1, Rajabasa, Kota Bandarlampung"
                value="{{ $user->getcontact->address }}">
        </div>


        {{-- <div class="mb-6">

            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Upload SCAN
                Kartu Keluarga</label>

            <div class="flex items-center justify-center w-full">
                <label class="flex flex-col rounded-lg border-4 border-dashed w-full h-auto p-10 group text-center">
                    <div class="h-full w-full text-center flex flex-col justify-center items-center  ">

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-10 h-10 text-blue-400 group-hover:text-blue-600" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>

                        <p class="pointer-none text-gray-500 "><span class="text-sm">Drag and
                                drop</span> files here <br /> or <a href="" id=""
                                class="text-blue-600 hover:underline">select a file</a> from your computer
                        </p>
                    </div>
                    <input type="file" class="hidden">
                </label>
            </div>
        </div> --}}


        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>



</x-app-layout>
