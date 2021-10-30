<div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
    <div class="sm:flex sm:items-start">
        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
            <h3 class="text-lg leading-6 font-medium text-gray-400" id="modal-title">
                Edit Faximile
            </h3>
            <form>
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    {{--     START : Input no agenda           --}}
                    <div class="mb-4">
                        <label for="exampleFormControlInput1"
                               class="block text-left text-gray-700 text-sm font-bold mb-2">Nomor Agenda:</label>
                        <input wire:model="no_agenda" type="text"
                               class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                               id="exampleFormControlInput1" placeholder="Enter Title">
                        @error('no_agenda') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    {{--       END : Input agenda         --}}

                    {{--     START : Input no dokumen           --}}
                    <label for="exampleFormControlInput1" class="block text-left text-gray-700 text-sm font-bold mb-2">Nomor Dokumen:</label>
                    <input wire:model="no_dokumen" type="text"
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           id="exampleFormControlInput1" placeholder="Enter Title">
                    @error('no_dokumen') <span class="text-red-500">{{ $message }}</span>@enderror
                    {{--       END : Input agenda         --}}
                </div>
            </form>
        </div>
    </div>
</div>
<div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
    <button type="button"
            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
        Deactivate
    </button>
    <button type="button" wire:click="hideModal()"
            class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
        Cancel
    </button>
</div>
