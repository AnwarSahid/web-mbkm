<x-app-layout>


    {{-- <a href="/update_profile">update profile</a> --}}
    <!-- Begin Navbar -->

    <form>
        <div class="grid gap-6 mb-6 lg:grid-cols-2">
            <div>
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama
                    Lengkap</label>
                <input type="text" id="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Nama Lengkap" required>
            </div>
            <div>
                <label for="npm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">NPM/NIM</label>
                <input type="text" id="npm"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="1815061001" required>
            </div>
            <div>
                <label for="tempat_lahir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tempat
                    Tahir</label>
                <input type="text" id="tempat_lahir"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Bandar Lampung" required>
            </div>
            <div>
                <label for="tanggal_lahir"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tanggal
                    Lahir</label>

                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input datepicker="" type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input"
                        placeholder="Select date">
                </div>
            </div>
            <div>
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">NO
                    Handphone</label>
                <input type="tel" id="phone"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Format: 62853-------" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
            </div>
            <div>
                <label for="kewarganegaraan"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kewarganegaraan
                </label>
                <select id="kewarganegaraan" name="kewarganegaraan"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="">Pilih Kewarganegaraan</option>
                    <option value="indonesia">Indonesia</option>
                    <option value="lainya">Lainya</option>
                </select>
            </div>
            <div>
                <label for="jenis_kelamin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jenis
                    Kelamin
                </label>
                <select id="jenis_kelamin" name="jenis_kelamin"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div>
                <label for="contact_social"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kontak Media
                    Sosial</label>
                <input type="text" id="contact_social"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="ID Facebook/Instagram/Twitwer" required>
            </div>
            <div>
                <label for="no_ktp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nomer
                    NIK/KTP</label>
                <input type="text" id="no_ktp"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="788872732183927" required>
            </div>
        </div>
        <div class="mb-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email
            </label>
            <input type="email" id="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="unila@mail.com" required>
        </div>
        <div class="mb-6">
            <label for="addres" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alamat
                Rumah</label>
            <input type="text" id="addres"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Jl. Prof. Dr. Sumantri Brojonegoro No. 1, Rajabasa, Kota Bandarlampung" required>
        </div>

        <div class="mb-6">

            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Upload
                Foto</label>

            <div class="flex items-center justify-center w-full">
                <label class="flex flex-col rounded-lg border-4 border-dashed w-full h-auto p-10 group text-center">
                    <div class="h-full w-full text-center flex flex-col justify-center items-center  ">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-10 h-10 text-blue-400 group-hover:text-blue-600" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                        </svg>
                        <p class="pointer-none text-gray-500 "><span class="text-sm">Drag and
                                drop</span> files here <br /> or <a href="" id=""
                                class="text-blue-600 hover:underline">select a file</a> from your computer
                        </p>
                    </div>
                    <input type="file" class="hidden">
                </label>
            </div>
        </div>
        <div class="mb-6">

            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Upload SCAN
                KTP</label>

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
        </div>


        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>





</x-app-layout>
