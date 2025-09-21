<main class="h-full pb-16 overflow-y-auto">
<h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Details
    </h4>
    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th class="px-4 py-3">Client</th>
                        <th class="px-4 py-3">Subject</th>
                        <th class="px-4 py-3">Date</th>
                        <th class="px-4 py-3">Message</th>
                        <th class="px-4 py-3">Status</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                    @foreach($contacts as $contact)
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">
                            <div class="flex items-center text-sm">
                                <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                    <img class="object-cover w-full h-full rounded-full" src="https://ui-avatars.com/api/?name={{ urlencode($contact->name) }}&background=random" alt="Avatar" loading="lazy" />
                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                </div>
                                <div>
                                    <p class="font-semibold">{{ $contact->name }}</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">{{ $contact->email }}</p>
                                    <p class="text-xs text-gray-600 dark:text-gray-400">{{ $contact->phone }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3 text-sm">{{ $contact->subject }}</td>
                        <td class="px-4 py-3 text-sm">{{ $contact->formatted_date }}</td>
                        <td class="px-4 py-3 text-sm">
                            <button wire:click="viewMessage({{ $contact->id }}, {{ json_encode($contact->message) }})" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                View Message
                            </button>
                        </td>
                        <td class="px-4 py-3 text-xs">
                            <button wire:click="toggleRead({{ $contact->id }})" 
                                    class="px-2 py-1 font-semibold leading-tight rounded-full transition-colors duration-150 
                                           {{ $contact->is_read ? 'text-green-700 bg-green-100 dark:bg-green-700 dark:text-green-100' : 'text-orange-700 bg-orange-100 dark:bg-orange-700 dark:text-orange-700' }}">
                                {{ $contact->is_read ? 'Read' : 'Unread' }}
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
            <span class="flex items-center col-span-3">
                Showing {{ $contacts->firstItem() }}-{{ $contacts->lastItem() }} of {{ $contacts->total() }}
            </span>
            <span class="col-span-2"></span>
            <!-- Pagination -->
            <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                {{ $contacts->links() }}
            </span>
        </div>
    </div>


<div @if($isModalOpen) class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center" @else class="hidden" @endif >
    <!-- Modal -->
    <div @if($isModalOpen) class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl" @else class="hidden" @endif role="dialog" id="modal">
        <header class="flex justify-end">
            <button wire:click="closeModal" class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700" aria-label="close">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
                    <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path>
                </svg>
            </button>
        </header>
        <!-- Modal body -->
        <div class="mt-4 mb-6">
            <!-- Modal title -->
            <p class="mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300">
                Message Details
            </p>
            <p class="text-sm text-gray-700 dark:text-gray-400">{{ $modalMessage }}</p>
        </div>
        <footer class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800">
            <button wire:click="closeModal" class="w-full px-5 py-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                Okay
            </button>
        </footer>
    </div>
</div>

</main>