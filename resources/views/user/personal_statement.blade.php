<x-app-layout>

    <form action="{{ route('store_PS') }}" method="POST">
        @csrf

        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Personal
            Stament</label>
        <textarea id="personal_statement" rows="4" name="personal_statement"
            class="block h-56 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Dalam ruang di bawah ini, ceritakan tentang diri Anda (misalnya latar belakang, ketertarikan dan aspirasi). Sertakan juga tujuan Anda untuk mengikuti program ini, apa yang Anda harapkan dan bagaimana pengalaman mengikuti program ini akan memberi dampak kepada orang lain *
            (min. 200 kata – max. 500 kata)."></textarea>

        <button type="submit"
            class="text-white mt-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>

</x-app-layout>
