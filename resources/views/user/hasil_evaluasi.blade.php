<x-app-layout>
    <div class="mb-6">

        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Upload Hasil MBKM
            (sertifikat/Bukti Nilai)</label>
        <form action="{{ route('storevaluation') }}" method="POST" enctype="multipart/form-data">
            <div class="flex items-center justify-center w-full">
                <label class="flex flex-col rounded-lg border-4 border-dashed w-full h-auto p-10 group text-center">
                    <div class="h-full w-full text-center flex flex-col justify-center items-center  ">

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-blue-400 group-hover:text-blue-600"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                            <path fill-rule="evenodd"
                                d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                                clip-rule="evenodd" />
                        </svg>

                        <p class="pointer-none text-gray-500 "><span class="text-sm">Drag and
                                drop</span> files here <br /> or <a href="" id=""
                                class="text-blue-600 hover:underline">select a file</a> from your computer
                        </p>
                    </div>
                    <input type="file" class="hidden" name="">
                </label>
        </form>
    </div>
    </div>
</x-app-layout>
