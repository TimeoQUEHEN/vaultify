<x-layout>
    <img src="{{asset("images/Village.jpg")}}" class="logimg">
    <section class="log">
        <form action="{{route("login")}}" method="post" class="card">
            @csrf
            <h3>Connexion</h3>
            <input type="email" name="email" required placeholder="Email" /><br />
            <input type="password" name="password" required placeholder="Password" /><br />
            Remember me<input type="checkbox" name="remember"   /><br />
            <input type="submit" /><br />
        </form>
    </section>
</x-layout>