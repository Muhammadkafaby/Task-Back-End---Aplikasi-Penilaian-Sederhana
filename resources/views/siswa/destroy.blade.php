<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hapus Siswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <h3>Apakah Anda yakin ingin menghapus siswa berikut?</h3>
                <p>Nama: {{ $siswa->nama }}</p>
                <p>Kelas: {{ $siswa->kelas }}</p>
                <!-- Add other fields as necessary -->

                <form method="POST" action="{{ route('siswa.destroy', $siswa->id) }}">
                    @csrf
                    @method('DELETE')
                    <div class="flex items-center justify-between mt-4">
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Hapus
                        </button>
                        <a href="{{ route('siswa.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>