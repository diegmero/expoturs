<?php
/**
 * Script de diagnóstico para error 500
 * Subir a: public_html/debug.php
 * Ejecutar: https://expotur.com/debug.php?pass=expotur2026
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

$password = 'expotur2026';
if (!isset($_GET['pass']) || $_GET['pass'] !== $password) {
    die('Acceso denegado');
}

echo "<h1>🔍 Diagnóstico de Error 500</h1>";
echo "<pre>";

$projectPath = __DIR__ . '/../expotur';

// 1. Verificar estructura de archivos
echo "📁 Verificando estructura...\n";
$requiredFiles = [
    'vendor/autoload.php',
    'bootstrap/app.php',
    '.env',
    'artisan',
    'public/index.php'
];

foreach ($requiredFiles as $file) {
    $fullPath = $projectPath . '/' . $file;
    if (file_exists($fullPath)) {
        echo "   ✅ $file\n";
    } else {
        echo "   ❌ $file NO EXISTE\n";
    }
}
echo "\n";

// 2. Verificar permisos
echo "🔒 Verificando permisos...\n";
$directories = [
    'storage',
    'storage/framework',
    'storage/framework/cache',
    'storage/framework/sessions',
    'storage/framework/views',
    'storage/logs',
    'bootstrap/cache'
];

foreach ($directories as $dir) {
    $fullPath = $projectPath . '/' . $dir;
    if (file_exists($fullPath)) {
        $perms = substr(sprintf('%o', fileperms($fullPath)), -4);
        $writable = is_writable($fullPath) ? '✅' : '❌';
        echo "   $writable $dir (permisos: $perms)\n";
    } else {
        echo "   ❌ $dir NO EXISTE\n";
    }
}
echo "\n";

// 3. Leer archivo .env
echo "📝 Verificando .env...\n";
$envPath = $projectPath . '/.env';
if (file_exists($envPath)) {
    echo "   ✅ .env existe\n";
    $envContent = file_get_contents($envPath);
    
    // Verificar variables críticas (sin mostrar valores sensibles)
    $criticalVars = ['APP_KEY', 'DB_CONNECTION', 'DB_DATABASE', 'DB_USERNAME'];
    foreach ($criticalVars as $var) {
        if (strpos($envContent, $var . '=') !== false) {
            preg_match('/' . $var . '=(.*)/', $envContent, $matches);
            $value = isset($matches[1]) ? trim($matches[1]) : '';
            if (!empty($value)) {
                echo "   ✅ $var está configurado\n";
            } else {
                echo "   ❌ $var está VACÍO\n";
            }
        } else {
            echo "   ❌ $var NO existe\n";
        }
    }
} else {
    echo "   ❌ .env NO EXISTE\n";
}
echo "\n";

// 4. Leer últimos errores de Laravel
echo "📋 Últimos errores de Laravel:\n";
$logPath = $projectPath . '/storage/logs/laravel.log';
if (file_exists($logPath)) {
    $logContent = file_get_contents($logPath);
    $lines = explode("\n", $logContent);
    $lastLines = array_slice($lines, -50); // Últimas 50 líneas
    
    echo "   Últimas líneas del log:\n";
    echo "   " . str_repeat("-", 70) . "\n";
    foreach ($lastLines as $line) {
        if (!empty(trim($line))) {
            echo "   " . htmlspecialchars($line) . "\n";
        }
    }
} else {
    echo "   ⚠️ No hay archivo de log aún\n";
}
echo "\n";

// 5. Intentar cargar Laravel
echo "⚙️ Intentando cargar Laravel...\n";
try {
    require $projectPath . '/vendor/autoload.php';
    echo "   ✅ Autoload cargado\n";
    
    $app = require_once $projectPath . '/bootstrap/app.php';
    echo "   ✅ Bootstrap cargado\n";
    
    $kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
    $kernel->bootstrap();
    echo "   ✅ Kernel inicializado\n";
    
    // Probar conexión a BD
    DB::connection()->getPdo();
    echo "   ✅ Conexión a base de datos OK\n";
    
    echo "\n✅ Laravel se carga correctamente desde este script\n";
    echo "   El problema puede estar en el index.php o en la configuración del servidor\n\n";
    
} catch (Exception $e) {
    echo "   ❌ ERROR: " . $e->getMessage() . "\n";
    echo "   Archivo: " . $e->getFile() . "\n";
    echo "   Línea: " . $e->getLine() . "\n\n";
    echo "   Stack trace:\n";
    echo "   " . str_replace("\n", "\n   ", $e->getTraceAsString()) . "\n\n";
}

// 6. Verificar index.php
echo "🔍 Verificando index.php...\n";
$indexPath = __DIR__ . '/index.php';
if (file_exists($indexPath)) {
    $indexContent = file_get_contents($indexPath);
    echo "   ✅ index.php existe\n";
    
    // Verificar rutas en index.php
    if (strpos($indexContent, '../expotur/vendor/autoload.php') !== false) {
        echo "   ✅ Ruta a vendor correcta\n";
    } else {
        echo "   ❌ Ruta a vendor incorrecta\n";
    }
    
    if (strpos($indexContent, '../expotur/bootstrap/app.php') !== false) {
        echo "   ✅ Ruta a bootstrap correcta\n";
    } else {
        echo "   ❌ Ruta a bootstrap incorrecta\n";
    }
} else {
    echo "   ❌ index.php NO EXISTE\n";
}
echo "\n";

// 7. Información del servidor
echo "🖥️ Información del servidor:\n";
echo "   PHP Version: " . phpversion() . "\n";
echo "   Server Software: " . ($_SERVER['SERVER_SOFTWARE'] ?? 'N/A') . "\n";
echo "   Document Root: " . ($_SERVER['DOCUMENT_ROOT'] ?? 'N/A') . "\n";
echo "   Script Filename: " . __FILE__ . "\n";
echo "\n";

echo "✅ Diagnóstico completado\n";
echo "⚠️ Elimina este archivo después de revisar\n";
echo "</pre>";
