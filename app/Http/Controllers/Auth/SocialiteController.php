<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class SocialiteController extends Controller
{
    // Redirigir a Google para autenticación
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Manejar el callback de Google
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();

            // Buscar o crear el usuario en la base de datos
            $user = User::firstOrCreate(
                ['email' => $googleUser->getEmail()],
                [
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                    'avatar' => $googleUser->getAvatar(),
                    'password' => bcrypt(Str::random(16)), // Generar una contraseña ficticia
                ]
            );

            // Iniciar sesión
            Auth::login($user);

            return redirect()->intended('/home'); // Redirigir a la página de inicio o donde prefieras

        } catch (\Exception $e) {
            \Log::error('Google login error:', ['message' => $e->getMessage()]);
            return redirect('/login')->withErrors('Error al iniciar sesión con Google');
        }
    }

    // Redirigir a Discord para autenticación
    public function redirectToDiscord()
    {
        return Socialite::driver('discord')->redirect();
    }
    

    // Manejar el callback de Discord
    public function handleDiscordCallback()
    {
        try {
            $discordUser = Socialite::driver('discord')->stateless()->user();

            // Buscar o crear el usuario en la base de datos
            $user = User::firstOrCreate(
                ['email' => $discordUser->getEmail()],
                [
                    'name' => $discordUser->getName(),
                    'email' => $discordUser->getEmail(),
                    'discord_id' => $discordUser->getId(),
                    'avatar' => $discordUser->getAvatar(),
                    'password' => bcrypt(Str::random(16)), // Generar una contraseña ficticia
                ]
            );

            // Iniciar sesión
            Auth::login($user);

            return redirect()->intended('/home'); // Redirigir a la página de inicio o donde prefieras

        } catch (\Exception $e) {
            \Log::error('Discord login error:', ['message' => $e->getMessage()]);
            return redirect('/login')->withErrors('Error al iniciar sesión con Discord');
        }
    }

    public function redirectToGitHub()
    {
        return Socialite::driver('github')->redirect();
    }

    public function handleGitHubCallback()
    {
        try {
            $githubUser = Socialite::driver('github')->user();

            // Verifica los datos recibidos
            Log::info('Usuario de GitHub: ', [
                'id' => $githubUser->id,
                'nickname' => $githubUser->nickname,
                'name' => $githubUser->name,
                'email' => $githubUser->email,
                'avatar' => $githubUser->avatar,
            ]);

            // Encuentra o crea un usuario
            $user = User::firstOrCreate([
                'email' => $githubUser->email,
            ], [
                'name' => $githubUser->name ?: 'Nombre por defecto',
                'github_id' => $githubUser->id,
                'lastname' => 'Apellidos por defecto',
                'password' => bcrypt('random_password'),
                'phone_number' => 'Número por defecto',
                'document' => '00000000',
                'document_type' => 'CC',
            ]);

            // Inicia sesión al usuario
            Auth::login($user);

            return redirect('/dashboard');
        } catch (\Exception $e) {
            // Registra el error
            Log::error('Error en la autenticación de GitHub: ' . $e->getMessage());
            return redirect('/')->with('error', 'No se pudo iniciar sesión con GitHub.');
        }
    }
}
