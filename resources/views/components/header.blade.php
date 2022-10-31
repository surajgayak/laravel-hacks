<nav class="font-sans flex flex-col text-center sm:flex-row sm:text-left sm:justify-between py-4 px-6 bg-white shadow sm:items-baseline w-full">
    <div class="mb-2 sm:mb-0">
        <a href="/" class="{{ $activeLink == 'home' ? 'text-2xl text-blue-600' : '' }} no-underline text-grey-darkest hover:text-blue-dark">Home</a>
    </div>
    <div>
        <a href="/about" class="{{ $activeLink == 'about' ? 'text-2xl text-blue-600' : '' }} text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">About</a>
        <a href="/explore" class="{{ $activeLink == 'explore' ? 'text-2xl text-blue-600' : '' }} text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Explore</a>
        <a href="/contact" class="{{ $activeLink == 'contact' ? 'text-2xl text-blue-600' : '' }} text-lg no-underline text-grey-darkest hover:text-blue-dark ml-2">Contact</a>
    </div>
</nav>