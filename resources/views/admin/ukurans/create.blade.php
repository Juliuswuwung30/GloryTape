@include('admin.header')

<main class="flex-1">
    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <div class="pb-5 border-b border-gray-200 sm:flex sm:items-center sm:justify-between">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Create Size</h3>
                <div class="mt-3 sm:mt-0 sm:ml-4">
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <form action="{{ route('ukurans.store') }}" method="POST" class="max-w bg-white p-6 rounded-md ">
                @csrf
                @method('POST')
                @if ($errors->any())
                    <div class="bg-red-400 p-4 rounded-lg text-black">
                        <strong>Whoops!</strong> There were some problems with your input.
                        <!-- display all error messages -->
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            <!-- end loop -->
                        </ul>
                    </div>
                @endif
                <div class="mb-4">
                    <label for="length" class="block text-sm font-medium text-gray-700">Length (Meter):</label>
                    <input type="number" name="length" id="length"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div class="mb-4">
                    <label for="width" class="block text-sm font-medium text-gray-700">Width (Milimeter):</label>
                    <input type="number" name="width" id="width"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div class="mb-4">
                    <label for="height" class="block text-sm font-medium text-gray-700">Thickness (Micron):</label>
                    <input type="number" name="height" id="height"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div class="pt-5">
                    <div class="flex justify-end">
                        <button type="button" onclick="window.location='{{ route('ukurans.index') }}'"
                            class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Cancel
                        </button>
                        <button type="submit"
                            class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Create Size
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
@include('admin.footer')