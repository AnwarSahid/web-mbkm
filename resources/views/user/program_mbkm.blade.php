<x-app-layout>
    <form action="{{ route('storembkm') }}" enctype="multipart/form-data" method="POST">
        @csrf

        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pilih Program MBKM
                Yang diikuti (choose)</label>
            <input
                class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                type="radio" value="Pertukaran Pelajar" name="program_mbkm" id="radio">
            <label class="form-check-label inline-block text-gray-800" for="radio">
                Pertukaran Pelajar
            </label>
            <div class="mt-3">

                <input
                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                    type="radio" value="Magang atau Kerja Praktik" name="program_mbkm" id="radio">
                <label class="form-check-label inline-block text-gray-800" for="radio">
                    Magang/Kerja Praktik
                </label>
            </div>
            <div class="mt-3">

                <input
                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                    type="radio" value="Kampus Mengajar" name="program_mbkm" id="radio">
                <label class="form-check-label inline-block text-gray-800" for="radio">
                    Kampus Mengajar
                </label>
            </div>
            <div class="mt-3">

                <input
                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                    type="radio" value="Penelitian atau Riset" name="program_mbkm" id="radio">
                <label class="form-check-label inline-block text-gray-800" for="radio">
                    Penelitian atau Riset
                </label>
            </div>

            <div class="mt-3">
                <input
                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                    type="radio" value="Proyek Kemanusiaan" name="program_mbkm" id="radio">
                <label class="form-check-label inline-block text-gray-800" for="radio">
                    Proyek Kemanusiaan
                </label>
            </div>
            <div class="mt-3">
                <input
                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                    type="radio" value="Studi/Proyek Independent" name="program_mbkm" id="radio">
                <label class="form-check-label inline-block text-gray-800" for="radio">
                    Studi/proyek Independent
                </label>
            </div>

            <div class="mt-3">
                <input
                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                    type="radio" value="Kuliah Kerja Nyata" name="program_mbkm" id="radio">
                <label class="form-check-label inline-block text-gray-800" for="radio">
                    Kuliah Kerja Nyata
                </label>
            </div>
            <div class="mt-3">
                <input
                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                    type="radio" value="Program Kementrian Lainya" name="program_mbkm" id="radio">
                <label class="form-check-label inline-block text-gray-800" for="radio">
                    Program Kementrian Lainya
                </label>
            </div>

            <button type="submit"
                class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>


        </div>
    </form>
</x-app-layout>
