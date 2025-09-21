
<div class="relative" wire:click.away="closeDropdown" wire:key="dropdown-notifications">
    <button
        class="relative align-middle rounded-md focus:outline-none focus:shadow-outline-purple"
        wire:click="toggleDropdown"
        aria-label="Notifications"
        aria-haspopup="true"
    >
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path>
        </svg>
        @if ($unreadCount > 0)
        <span
            aria-hidden="true"
            class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800"
        ></span>
        @endif
    </button>
    @if($open)
        <ul class="absolute right-0 md:right-0.5 mt-2 overflow-hidden bg-white rounded-md shadow-lg dark:bg-gray-800 border-2 border-gray-300 dark:border-gray-600 focus:outline-none z-50 dropdown-responsive"
            aria-label="submenu"
        >
            <li class="p-4 border-b border-gray-200 dark:border-gray-700">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <span class="text-lg font-semibold text-gray-800 dark:text-white">Messages</span>
                        @if($isLoading)
                            <div class="animate-spin rounded-full h-4 w-4 border-b-2 border-blue-600"></div>
                        @endif
                    </div>
                    <div class="flex items-center space-x-2">
                        @if ($unreadCount > 0)
                            <span class="px-2 py-1 space-x-2 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600">{{ $unreadCount }} new</span>
                            <button wire:click="markAllAsRead" class="text-xs px-2 text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300" title="Mark all as read">
                                Mark all read
                            </button>
                        @endif
                        <button wire:click="refreshNotifications" class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200" title="Refresh">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                @if($lastUpdated)
                    <p class="text-xs text-gray-500 dark:text-gray-400 mt-1">Updated {{ $this->timeAgo }}</p>
                @endif
            </li>
            <div class="max-h-80 overflow-y-auto custom-scrollbar">
                @forelse ($latestContacts as $contact)
                    <li class="border-b last:border-b-0 border-gray-200 dark:border-gray-700 relative {{ !$contact['is_read'] ? 'bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-blue-900/30 dark:to-indigo-900/30' : '' }}">
                        @if(!$contact['is_read'])
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-indigo-500/10 dark:from-blue-400/20 dark:to-indigo-400/20 pointer-events-none"></div>
                            <div class="absolute left-0 top-0 bottom-0 w-1 bg-gradient-to-b from-blue-500 to-indigo-600"></div>
                        @endif
                        <a href="{{ route('admin.messages') }}" class="relative flex items-start p-4 hover:bg-gray-100 dark:hover:bg-gray-700 transition-all duration-200 {{ !$contact['is_read'] ? 'hover:bg-blue-100 dark:hover:bg-blue-800/30' : '' }}">
                            <div class="relative w-8 h-8 mr-3 rounded-full flex-shrink-0">
                                <img class="object-cover w-full h-full rounded-full {{ !$contact['is_read'] ? 'ring-2 ring-blue-400 ring-offset-2 ring-offset-white dark:ring-offset-gray-800' : '' }}" src="https://ui-avatars.com/api/?name={{ urlencode($contact['name']) }}&background=random" alt="Avatar" loading="lazy" />
                                <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                @if(!$contact['is_read'])
                                    <div class="absolute -top-1 -right-1 w-3 h-3 bg-red-500 rounded-full border-2 border-white dark:border-gray-800 animate-pulse"></div>
                                @endif
                            </div>
                            <div class="ml-3 flex-1 min-w-0">
                                <div class="flex items-center justify-between">
                                    <p class="text-sm font-medium {{ !$contact['is_read'] ? 'text-gray-900 dark:text-white font-semibold' : 'text-gray-700 dark:text-gray-300' }} truncate">{{ $contact['name'] }}</p>
                                    @if(!$contact['is_read'])
                                        <span class="ml-2 w-2 h-2 bg-blue-600 rounded-full flex-shrink-0 animate-pulse"></span>
                                    @endif
                                </div>
                                <p class="mt-1 text-sm {{ !$contact['is_read'] ? 'text-gray-700 dark:text-gray-200 font-medium' : 'text-gray-600 dark:text-gray-400' }} truncate">{{ \Str::limit($contact['subject'], 35) }}</p>
                                <p class="mt-1 text-xs {{ !$contact['is_read'] ? 'text-blue-600 dark:text-blue-400 font-medium' : 'text-gray-500 dark:text-gray-500' }}">{{ \Carbon\Carbon::parse($contact['created_at'])->diffForHumans() }}</p>
                            </div>
                        </a>
                    </li>
                @empty
                    <li class="px-4 py-8 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-4m-4 0H9m-4 0h4m0 0V9a2 2 0 012-2h2a2 2 0 012 2v4.01" />
                        </svg>
                        <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">No messages yet</p>
                    </li>
                @endforelse
            </div>
            <li class="p-2 text-center border-t border-gray-200 dark:border-gray-700">
                <a href="{{ route('admin.messages') }}" class="text-sm font-medium text-blue-600 hover:text-blue-500 dark:text-blue-400 dark:hover:text-blue-300">
                    View All Messages
                </a>
            </li>
        </ul>
    @endif
    
    <style>
    .dropdown-responsive {
        width: 280px;
    }
    
    @media (min-width: 768px) {
        .dropdown-responsive {
            width: 350px;
        }
    }
    </style>
</div>

