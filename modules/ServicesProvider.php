<?php

namespace Modules;

use File;

class ServicesProvider extends \Illuminate\Support\ServiceProvider {
    public function boot() {
        $listModule = array_map('basename', File::directories(__DIR__));
        foreach ($listModule as $module) {
            if (file_exists(__DIR__ . '/' . $module . '/routes.php')) {
                include __DIR__ . '/' . $module . '/routes.php';
            }
            if (file_exists(__DIR__ . '/' . $module . '/api.php')) {
                include __DIR__ . '/' . $module . '/api.php';
            }
            if (is_dir(__DIR__ . '/' . $module . '/Views')) {
                $this->loadViewsFrom(__DIR__ . '/' . $module . '/Views', $module);
            }
            if (is_dir(__DIR__ . '/' . $module . "/Lang")) {
                $this->loadTranslationsFrom(__DIR__ . '/' . $module . "/Lang", $module);
            }
            if (File::exists(__DIR__ . '/' . $module . "/Migrations")) {
                $this->loadMigrationsFrom(__DIR__ . '/' . $module . "/Migrations");
            }
        }
    }
}
