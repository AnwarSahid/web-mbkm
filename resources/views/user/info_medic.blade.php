<x-app-layout>
    <div class="flex justify-center">
        <div>
            <form action="">
                <div class="form-check">

                    <div class="font-sans">1. Apakah anda memiliki disabilitas atau kondisii yang perlu diketahui
                        oleh
                        Universitas tujuan?</div>
                    <input
                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                        type="radio" value="yes" name="condition" id="condition">
                    <label class="form-check-label inline-block text-gray-800" for="condition">
                        Ya
                    </label>

                    <div class="form-check">
                        <input
                            class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                            type="radio" value="no" name="condition" id="condition" checked>
                        <label class="form-check-label inline-block text-gray-800" for="condition">
                            Tidak
                        </label>

                    </div>
                </div>
                <div class="form-check mt-8">

                    <div class="font-sans">2. Apakah anda memliki Alergi??</div>
                    <input
                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                        type="radio" value="yes" name="allergy" id="allergy">
                    <label class="form-check-label inline-block text-gray-800" for="allergy">
                        Ya
                    </label>

                    <div class="form-check">
                        <input
                            class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                            type="radio" value="no" name="allergy" id="allergy" checked>
                        <label class="form-check-label inline-block text-gray-800" for="allergy">
                            Tidak
                        </label>

                    </div>
                </div>



                <div class="form-check mt-8">
                    <div class="font-sans">3. Apakah anda memperkirakan adanya kesulitan lain yang mungkin akan
                        berdampak pada studi anda?</div>
                    <input
                        class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                        type="radio" value="yes" name="difficulty" id="difficulty">
                    <label class="form-check-label inline-block text-gray-800" for="difficulty">
                        Ya
                    </label>

                    <div class="form-check">
                        <input
                            class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                            type="radio" value="no" name="difficulty" id="difficulty" checked>
                        <label class="form-check-label inline-block text-gray-800" for="difficulty">
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
