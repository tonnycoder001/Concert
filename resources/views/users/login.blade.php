<link href="https://cdn.jsdelivr.net/npm/daisyui@2.42.1/dist/full.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>


<section class=""> 
    <div
    class="bg-black border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
>
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Login
        </h2>
        <p class="mb-4">Log into your account</p>
    </header>

    <form method="POST" action="/users/authenticate">
@csrf

        <div class="mb-6">
            <label for="name" class="inline-block text-lg mb-2">
                Name
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="name"
            />
        </div>

        <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2"
                >Email</label
            >
            <input
                type="email"
                class="border border-gray-200 rounded p-2 w-full"
                name="email"
            />
            <!-- Error Example -->
            <p class="text-red-500 text-xs mt-1">
                Please enter a valid email
            </p>
        </div>

        <div class="mb-6">
            <label
                for="password"
                class="inline-block text-lg mb-2"
            >
                Password
            </label>
            <input
                type="password"
                class="border border-gray-200 rounded p-2 w-full"
                name="password"
            />
        </div>

        <div class="mb-6">
            <label
                for="password2"
                class="inline-block text-lg mb-2"
            >
                Confirm Password
            </label>
            <input
                type="password"
                class="border border-gray-200 rounded p-2 w-full"
                name="password2"
            />
        </div>

        <div class="mb-6">
            <li>
                <a href="/signin">signin</a>
              </li>
            {{-- <a href="/signin"><button
                type="submit"
                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
            >Sign in</button></a> --}}
            
        </div>

        <div class="mt-8">
            <p>
                Don't have an account?
                <a href="/Register" class="text-laravel"
                    >create</a
                >
            </p>
        </div>
    </form>
</div>
</section>

