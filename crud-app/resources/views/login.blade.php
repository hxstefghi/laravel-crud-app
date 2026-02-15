<!DOCTYPE html>
<html lang="en">

<x-head />

<body class="bg-black text-white grid-bg">
    <main>
        <section class="h-[100vh] flex flex-col justify-center">
            <div class="text-center">
                <h1 class="text-3xl font-bold mb-6">Join today.</h1>
            </div>

            <div class="mx-auto max-w-md w-[100%]">
                <form action="" method="POST">
                    <div class="flex flex-col space-y-3">

                        <x-input-field type="email" name="email" label="Email Address" />

                        <x-input-field type="password" name="password" label="Password" />

                        <button type="submit"
                            class="py-2 px-3 bg-white rounded-full text-black font-bold mt-3">Login</button>

                        <div class="text-center">
                            <p>Don't have an account? <a href="{{ route('register') }}"
                                    class="underline font-bold">Register</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>

</html>
