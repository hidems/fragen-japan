<template>
<section class="lg:px-8 px-2 py-4">
    <header class="container mx-auto">
        <div class="flex justify-between lg:items-center">
            <!-- Logo -->
            <h1 class="logo">
                <a href="" class="flex items-end">
                    <img
                        src="/images/logo-deer.png"
                        alt="logo-deer"
                        class="sm:h-20 h-12"
                    >
                    <img
                        src="/images/logo-font.png"
                        alt="logo-font"
                        class="sm:h-16 h-8 ml-2"
                    >
                </a>
            </h1>

            <!-- Login, Register and Logout -->
            <div class="font-bold text-lg hidden lg:block">
                <!-- <form method="POST" action="/logout">
                    <button class="font-bold text-lg text-gray-500 hover:text-gray-700">
                        Logout
                    </button>
                </form> -->
                <a class="text-gray-500 hover:text-gray-700 mr-5" href="">
                    Login
                </a>
                <a class="text-gray-500 hover:text-gray-700" href="">
                    Registrieren
                </a>
            </div>

        </div>
    </header>
</section>
</template>

<script>
    export default {}
</script>
