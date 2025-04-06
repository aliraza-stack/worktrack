<aside class="flex flex-col justify-between bg-background
              w-full h-[calc(100vh-52px)] p-3
              sm:py-6  lg:w-3/12 lg:h-screen  xl:w-2/12
              {{ $class }}">
  <div>
    <img class="pl-4 mb-5 sm:mb-10 w-[120px] h-[70px]" src="{{ Vite::image('logo.svg') }}" alt="logo"/>

    <button @click="$wire.currentPage = 'dashboard'; content = true"
            :class="{ 'text-white bg-primary': $wire.currentPage === 'dashboard' }"
            class="inline-flex items-center text-secondary rounded-lg transition-all duration-150 gap-2 px-4 py-3 w-full">
      <x-icon-dashboard/>
      Dashboard
    </button>

    <button @click="$wire.currentPage = 'invoices'; content = true"
            :class="{ 'text-white bg-primary': $wire.currentPage === 'invoices' }"
            class="inline-flex items-center text-secondary rounded-lg transition-all duration-150 gap-2 px-4 py-3 w-full">
      <x-icon-invoice/>
      Submitted Invoices
    </button>

    <button @click="$wire.currentPage = 'create-invoice'; content = true"
            :class="{ 'text-white bg-primary': $wire.currentPage === 'create-invoice' }"
            class="inline-flex items-center text-secondary rounded-lg transition-all duration-150 gap-2 px-4 py-3 w-full">
      <x-icon-invoice/>
      Create Invoice
    </button>

    <button @click="$wire.currentPage = 'my-details'; content = true"
            :class="{ 'text-white bg-primary': $wire.currentPage === 'my-details' }"
            class="inline-flex items-center text-secondary rounded-lg transition-all duration-150 gap-2 px-4 py-3 w-full">
      <x-icon-profile/>
      My Details
    </button>
  </div>

  <x-logout-button/>
</aside>
