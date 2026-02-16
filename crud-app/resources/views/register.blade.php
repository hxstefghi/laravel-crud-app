<!DOCTYPE html>
<html lang="en">

<x-head />

<body class="bg-black text-white grid-bg">
    <main>
        <section class="h-[100vh] flex flex-col justify-center">
            <div class="text-center">
                <h1 class="text-3xl font-bold mb-6">Create an account today.</h1>
            </div>

            <div class="mx-auto max-w-md w-[100%]">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="flex flex-col space-y-3">

                        <x-input-field type="text" name="name" label="Name" />

                        <x-input-field type="email" name="email" label="Email Address" />

                        <x-input-field type="password" name="password" label="Password" />

                        <x-input-field type="password" name="password_confirmation" label="Confirm Password" />

                        <button type="submit"
                            class="py-2 px-3 bg-white rounded-full text-black font-bold mt-3 cursor-pointer">Register</button>
                    </div>
                </form>
                <div class="text-center mt-3">
                    <p>Already have an account? <a href="{{ route('login') }}" class="underline font-bold">Login</a></p>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
