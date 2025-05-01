<x-alert/>

@csrf

<input type="text" name="name" placeholder="Nome" value="{{ $user->name ?? old('name') }}">
<input type="email" name="email" placeholder="E-mail" value="{{ $user->email ?? old('email') }}">
<input type="password" name="password" placeholder="Senha">
<button type="submit" 
    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
    <i class="fa-solid fa-plus" aria-hidden="true"></i> Salvar
</button>