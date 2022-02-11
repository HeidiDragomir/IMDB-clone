<x-layout>
    <section class="">
        <main class="">
            <h1 class="">Register!</h1>
        
            <form class="mt-10" method="POST" action="/register">
                @csrf

                <div class="mb-6">
                    <label class=""
                        for="name">Name</label>

                    <input class="" 
                        type="text"
                        name="name"
                        id="name"
                        value="{{ old('name')}}"
                        required
                        >

                    @error('name')
                        <p class="">{{ $message }}</p>
                    @enderror
                </div>
            
                <div class="mb-6">
                    <label class=""
                        for="username">Username</label>

                    <input class="" 
                        type="text"
                        name="username"
                        id="username"
                        value="{{ old('username')}}"
                        required
                        >
                    @error('username')
                        <p class="">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class=""
                        for="email">Email</label>

                    <input class="" 
                        type="email"
                        name="email"
                        id="email"
                        value="{{ old('email')}}"
                        required
                        >
                    @error('email')
                        <p class="">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class=""
                        for="password">Password</label>

                    <input class="" 
                        type="password"
                        name="password"
                        id="password"
                        required
                        >
                    @error('password')
                        <p class="">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <button type="submit"
                        class=""
                        >Submit</button>
                </div>
            </form>
        </main>
    </section>
</x-layout>