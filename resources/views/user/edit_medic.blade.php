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
    <div class="flex justify-center">
        <div>
            <form action="{{ route('updatemedic', ['id' => $user->id]) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="form-check">

                    <div class="font-sans">1. Apakah anda memiliki disabilitas atau kondisi yang perlu diketahui
                        oleh
                        Universitas tujuan? Jawaban Kamu <span
                            class="text-red-500 font-bold">({{ $user->getmedic->disability }})</span></div>
                    <input
                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                        type="radio" value="YA" name="disability" id="disability">
                    <label class="form-check-label inline-block text-gray-800" for="disability">
                        Ya
                    </label>

                    <div class="form-check">
                        <input
                            class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                            type="radio" value="TIDAK" name="disability" id="disability">
                        <label class="form-check-label inline-block text-gray-800" for="disability">
                            Tidak
                        </label>

                    </div>
                </div>
                <div class="form-check mt-8">

                    <div class="font-sans">2. Apakah anda memliki Alergi?? Jawaban Kamu <span
                            class="text-red-500 font-bold">({{ $user->getmedic->alergy }})</span></div>
                    <input
                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                        type="radio" value="YA" name="alergy" id="alergy">
                    <label class="form-check-label inline-block text-gray-800" for="alergy">
                        Ya
                    </label>

                    <div class="form-check">
                        <input
                            class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                            type="radio" value="TIDAK" name="alergy" id="alergy">
                        <label class="form-check-label inline-block text-gray-800" for="alergy">
                            Tidak
                        </label>

                    </div>
                </div>



                <div class="form-check mt-8">
                    <div class="font-sans">3. Apakah anda memperkirakan adanya kesulitan lain yang mungkin akan
                        berdampak pada studi anda? Jawaban Kamu <span
                            class="text-red-500 font-bold">({{ $user->getmedic->other_difficulties }})</span></div>
                    <input
                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                        type="radio" value="YA" name="other_difficulties" id="other_difficulties">
                    <label class="form-check-label inline-block text-gray-800" for="other_difficulties">
                        Ya
                    </label>

                    <div class="form-check">
                        <input
                            class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                            type="radio" value="TIDAK" name="other_difficulties" id="other_difficulties">
                        <label class="form-check-label inline-block text-gray-800" for="other_difficulties">
                            Tidak
                        </label>

                    </div>
                </div>
                <button type="submit"
                    class="mt-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>
        </div>
    </div>
</x-app-layout>
