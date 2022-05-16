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

    <form action="{{ route('updateacademic', ['id' => $user->id]) }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="grid gap-6 mb-6 lg:grid-cols-2">
            <div>
                <label for="university" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Asal
                    Univeristas</label>
                <select id="university" name="university"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="{{ $user->getacademic->university }}">{{ $user->getacademic->university }}
                    </option>
                    <option value="Universitas Lampung">Universitas Lampung</option>
                    <option value="lainya">lainya</option>
                </select>
            </div>
            <div>
                <label for="accreditation_university"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    Akreditasi Universitas</label>
                <select id="accreditation_university" name="accreditation_university"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="{{ $user->getacademic->accreditation_university }}">
                        {{ $user->getacademic->accreditation_university }}</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="Unggul">Unggul</option>
                    <option value="Baik Sekali">Baik Sekali</option>
                    <option value="Baik">Baik</option>
                    <option value="Tidak Terakreditasi">Tidak Terakreditasi</option>
                </select>
            </div>

            <div>
                <label for="faculty"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Fakultas</label>
                <select id="faculty" name="faculty"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="{{ $user->getacademic->faculty }}">
                        {{ $user->getacademic->faculty }}</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="Unggul">Unggul</option>
                    <option value="Baik Sekali">Baik Sekali</option>
                    <option value="Baik">Baik</option>
                    <option value="Tidak Terakreditasi">Tidak Terakreditasi</option>
                </select>
            </div>

            <div>
                <label for="study_program"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Program studi</label>
                <select id="study_program" name="study_program"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="{{ $user->getacademic->study_program }}">
                        {{ $user->getacademic->study_program }}</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="Unggul">Unggul</option>
                    <option value="Baik Sekali">Baik Sekali</option>
                    <option value="Baik">Baik</option>
                    <option value="Tidak Terakreditasi">Tidak Terakreditasi</option>
                </select>
            </div>
            <div>
                <label for="accreditation_study_program"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Akreditasi Program
                    studi</label>
                <select id="accreditation_study_program" name="accreditation_study_program"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="{{ $user->getacademic->accreditation_study_program }}">
                        {{ $user->getacademic->accreditation_study_program }}</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="Unggul">Unggul</option>
                    <option value="Baik Sekali">Baik Sekali</option>
                    <option value="Baik">Baik</option>
                    <option value="Tidak Terakreditasi">Tidak Terakreditasi</option>
                </select>
            </div>
            <div>
                <label for="educational_degree"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jenjang
                    Studi</label>
                <select id="educational_degree" name="educational_degree"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="{{ $user->getacademic->educational_degree }}">
                        {{ $user->getacademic->educational_degree }}</option>
                    <option value="S1">S1</option>
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                </select>
            </div>
            <div>
                <label for="semester"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Semester</label>
                <select id="semester" name="semester"
                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="{{ $user->getacademic->semester }}">
                        {{ $user->getacademic->semester }}</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>

            </div>
            <div>
                <label for="ipk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">IPK</label>
                <input type="text" id="ipk" name="ipk"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Format: 3.50" value="{{ $user->getacademic->ipk }}">
            </div>
            <div>
                <label for="sks" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jumlah SKS yang
                    ditempuh</label>
                <input type="text" id="sks" name="sks"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="ex : 90 SKS" value="{{ $user->getacademic->sks }}">
            </div>

        </div>



        <div class="mb-6">

            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Upload Scan
                Transkrip</label>

            <div class="flex items-center justify-center w-full">
                <label class="flex flex-col rounded-lg border-4 border-dashed w-full h-auto p-10 group text-center">
                    <div class="h-full w-full text-center flex flex-col justify-center items-center  ">


                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-10 h-10 text-blue-400 group-hover:text-blue-600" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                                clip-rule="evenodd" />
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

            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Scan KRS
                (Kartu Rencana Study)</label>
            <div class="flex items-center justify-center w-full">
                <label class="flex flex-col rounded-lg border-4 border-dashed w-full h-auto p-10 group text-center">
                    <div class="h-full w-full text-center flex flex-col justify-center items-center  ">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-10 h-10 text-blue-400 group-hover:text-blue-600" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M9 2a2 2 0 00-2 2v8a2 2 0 002 2h6a2 2 0 002-2V6.414A2 2 0 0016.414 5L14 2.586A2 2 0 0012.586 2H9z" />
                            <path d="M3 8a2 2 0 012-2v10h8a2 2 0 01-2 2H5a2 2 0 01-2-2V8z" />
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
