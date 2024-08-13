<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Siswa') }}
        </h2>
    </x-slot>

    @section('content')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <form action="{{ route('siswa.store') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="nama" class="block text-sm font-medium text-gray-700">Nama Siswa</label>
                                <input type="text" name="nama" id="nama" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                            </div>
                                <div class="mb-4">
                                <label for="kelas" class="block text-sm font-medium text-gray-700">Kelas</label>
                                <select name="kelas" id="kelas" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                                    <option value="" disabled selected>Pilih Kelas</option>
                                    <option value="3A">3A</option>
                                    <option value="3B">3B</option>
                                    <option value="3C">3C</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="matematika" class="block text-sm font-medium text-gray-700">Matematika</label>
                                <input type="number" name="matematika" id="matematika" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" max="100">
                            </div>
                            <div class="mb-4">
                                <label for="kimia" class="block text-sm font-medium text-gray-700">Kimia</label>
                                <input type="number" name="kimia" id="kimia" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" max="100">
                            </div>
                            <div class="mb-4">
                                <label for="fisika" class="block text-sm font-medium text-gray-700">Fisika</label>
                                <input type="number" name="fisika" id="fisika" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" max="100">
                            </div>
                            <div class="mb-4">
                                <label for="biologi" class="block text-sm font-medium text-gray-700">Biologi</label>
                                <input type="number" name="biologi" id="biologi" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" max="100">
                            </div>
                            <div class="mb-4">
    <label for="average" class="block text-sm font-medium text-gray-700">Rata-rata Nilai</label>
    <input type="number" id="average" name="nilai" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" readonly>
</div>

<script>
    document.querySelectorAll('input[type="number"]').forEach(input => {
        input.addEventListener('input', calculateAverage);
    });

    function calculateAverage() {
        let total = 0;
        let count = 0;
        document.querySelectorAll('input[type="number"]').forEach(input => {
            if (input.value && input.id !== 'average') {
                total += parseFloat(input.value);
                count++;
            }
        });
        const average = count ? (total / count).toFixed(2) : 0;
        document.getElementById('average').value = average;
        document.getElementById('average_hidden').value = average;
    }
</script>
                            <div class="mb-4">
                                <div class="flex justify-center">
                                    <button type="submit" class="bg-blue-500 text-black font-bold py-2 px-4 rounded border-2 border-black hover:bg-blue-700">
                                        <div class="bg-white p-2 rounded">
                                            Simpan
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </form>
                        @if(session('success'))
                            <div class="mt-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative flex justify-center" role="alert">
                                <span class="block sm:inline">{{ session('success') }}</span>
                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                </span>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-app-layout>