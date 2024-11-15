<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class CreateHelper extends Command
{
    protected $signature = 'helper:create {name}';

    protected $description = 'Crea un nuevo helper';

    public function handle()
    {
        $name = $this->argument('name');
        $helperPath = app_path("Helpers/{$name}.php");

        $filesystem = new Filesystem();

        // Crea la carpeta Helpers si no existe
        if (!$filesystem->isDirectory(app_path('Helpers'))) {
            $filesystem->makeDirectory(app_path('Helpers'));
        }

        // Verifica si el archivo ya existe
        if ($filesystem->exists($helperPath)) {
            $this->error("El helper '{$name}' ya existe!");
            return;
        }

        $template = <<<PHP
        <?php

        namespace App\Helpers;

        class {$name}
        {
            public static function exampleFunction()
            {
                // Agrega tu código aquí
            }
        }
        PHP;

        // Crea el archivo con el contenido de la plantilla
        $filesystem->put($helperPath, $template);

        $this->info("Helper '{$name}' creado exitosamente en {$helperPath}!");
    }
}
