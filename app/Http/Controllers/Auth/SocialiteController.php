<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;


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
            $googleUser = Socialite::driver('google')->user();

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
            Log::error('Google login error:', ['message' => $e->getMessage()]);
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
            $discordUser = Socialite::driver('discord')->user();

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
            Log::error('Discord login error:', ['message' => $e->getMessage()]);
            return redirect('/login')->withErrors('Error al iniciar sesión con Discord');
        }
    }
}
