@include('admin.header')

<main class="flex-1">
    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <div class="pb-5 border-b border-gray-200 sm:flex sm:items-center sm:justify-between">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Size</h3>
                <div class="mt-3 sm:mt-0 sm:ml-4">
                    <form action="{{ route('ukurans.create') }}" method="POST">
                        @csrf
                        @method('GET')
                        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Create New Size</button>
                    </form>

                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <!-- Replace with your content -->

            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="mt-8 flex flex-col">
                    <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                            <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-300">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="py-3 pl-4 pr-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500 sm:pl-6">Length (Meter)</th>
                                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">Width (Centimeter)</th>
                                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium uppercase tracking-wide text-gray-500">Thickness (Micron)</th>
                                        <th scope="col" class="relative py-3 pl-3 "><span class="sr-only">View</span></th>
                                        <th scope="col" class="relative py-3 pl-3 "><span class="sr-only">Edit</span></th>
                                        <th scope="col" class="relative py-3 pl-3 "><span class="sr-only">Delete</span></th>
                                    </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-white">
                                    @foreach($ukurans as $ukuran)
                                        <tr>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 sm:pl-6">{{ $ukuran->length }}</td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $ukuran->width }}</td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $ukuran->height }}</td>
                                            <td class=" whitespace-nowrap py-4 pl-3 ">
                                                <form action="{{ route('ukurans.show', $ukuran->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('GET')
                                                    <button type="submit" class="inline-flex items-center justify-center rounded-md border border-transparent bg-green-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 sm:w-auto">View</button>
                                                </form>
                                            </td>
                                            <td class=" whitespace-nowrap py-4 pl-3 ">
                                                <form action="{{ route('ukurans.edit', $ukuran->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('GET')
                                                    <button type="submit" class="inline-flex items-center justify-center rounded-md border border-transparent bg-blue-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 sm:w-auto">Edit</button>
                                                </form>
                                            </td>
                                            <td class=" whitespace-nowrap py-4 pl-3 ">
                                                <form action="{{ route('ukurans.destroy', $ukuran->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="inline-flex items-center justify-center rounded-md border border-transparent bg-red-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 sm:w-auto">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /End replace -->
        </div>
    </div>
</main>

@include('admin.footer')
