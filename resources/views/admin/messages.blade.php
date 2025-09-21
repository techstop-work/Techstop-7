@extends('layouts.admin')

@section('content')
   
    <main class="h-full pb-16 overflow-y-auto">
          <div class="container grid px-6 mx-auto">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
              Contacts Table
            </h2>
            

            <livewire:message-table />

            
          </div>
          
</main>

@endsection