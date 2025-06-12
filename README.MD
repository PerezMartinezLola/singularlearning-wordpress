# Proyecto WordPress - Plataforma eLearning
**Sitio web corporativo para plataforma de formación online**

## 📋 Descripción
Este proyecto es una web corporativa desarrollada en WordPress que ofrece soluciones de formación online adaptadas a las necesidades del sector público.

## 🚀 Características principales
- ✅ Diseño responsive y accesible
- ✅ Tema personalizado
- ✅ Formularios de contacto integrados
- ✅ Secciones informativas optimizadas
- ✅ SEO optimizado

## 🛠️ Tecnologías utilizadas
- **CMS**: WordPress 6.x
- **Tema**: Personalizado basado en underscores
- **Plugins**: WPForms, Yoast SEO
- **Estilos**: CSS3 personalizado
- **Desarrollo local**: XAMPP

## 📦 Instalación y configuración

### Requisitos previos
- XAMPP (Apache + MySQL + PHP 8.0+)
- Git
- Editor de código (VS Code recomendado)

### Pasos para configurar el entorno local

#### 1. Clonar el repositorio
```bash
git clone [URL-de-tu-repositorio]
cd singularlearning
```

#### 2. Configurar la base de datos
1. Inicia XAMPP (Apache + MySQL)
2. Accede a phpMyAdmin: `http://localhost/phpmyadmin`
3. Crea una nueva base de datos llamada `singularlearning` (o el nombre que prefieras)

#### 3. Configurar WordPress
```bash
# Copia el archivo de configuración
cp wp-config-sample.php wp-config.php
```

#### 4. Editar wp-config.php
Abre `wp-config.php` y modifica estos valores:
```php
define( 'DB_NAME', 'singularlearning' );        // Nombre de tu base de datos
define( 'DB_USER', 'root' );                    // Usuario MySQL (por defecto 'root' en XAMPP)
define( 'DB_PASSWORD', '' );                    // Contraseña (vacía por defecto en XAMPP)
define( 'DB_HOST', 'localhost' );
```

#### 5. Generar claves de seguridad
1. Visita: https://api.wordpress.org/secret-key/1.1/salt/
2. Copia las claves generadas
3. Reemplaza las 8 líneas de claves en `wp-config.php`

#### 6. Configurar servidor local
1. Copia la carpeta del proyecto a `C:\xampp\htdocs\singularlearning\`
2. Accede a: `http://localhost/singularlearning/`
3. Sigue el instalador de WordPress si es la primera vez

#### 7. Importar contenido (si existe)
Si hay un archivo de base de datos incluido:
```bash
mysql -u root -p singularlearning < database.sql
```

### Estructura después de la instalación
```
singularlearning/
├── wp-content/
│   ├── themes/slearning-theme/    # Tema personalizado
│   ├── plugins/                   # Plugins instalados
│   └── uploads/                   # Archivos subidos (no en Git)
├── wp-config-sample.php           # Plantilla de configuración
├── wp-config.php                  # Tu configuración local (no en Git)
├── .gitignore                     # Archivos excluidos del repositorio
└── ...archivos de WordPress
```

## 🔧 Desarrollo

### Archivos importantes
- **Tema personalizado**: `wp-content/themes/slearning-theme/`
- **Configuración**: `wp-config.php` (no incluido en el repositorio)
- **Estilos**: Dentro del tema personalizado

## 🔒 Seguridad
- `wp-config.php` excluido del repositorio por seguridad
- Carpeta `uploads/` no sincronizada para evitar archivos grandes
- Logs y archivos temporales ignorados
- Nunca subir credenciales reales al repositorio

## 🚨 Problemas comunes

### Error de conexión a la base de datos
- Verifica que MySQL esté ejecutándose en XAMPP
- Confirma que los datos en `wp-config.php` sean correctos
- Asegúrate de que la base de datos existe

### Página en blanco
- Activa el modo debug en `wp-config.php`: `define('WP_DEBUG', true);`
- Revisa los logs de error en `wp-content/debug.log`

### Permisos de archivos
En Windows con XAMPP normalmente no hay problemas de permisos, pero si los hay:
- Verifica que la carpeta tenga permisos de escritura
- Asegúrate de que `wp-content/uploads/` sea escribible

## 📞 Información del proyecto
**Proyecto**: Plataforma eLearning corporativa  
**Tecnología**: WordPress con tema personalizado  
**Tema base: Underscores - Framework para desarrolladores de WordPress
**Repositorio**: Configurado con buenas prácticas de seguridad

---
*Documentación actualizada para facilitar la colaboración y el mantenimiento del proyecto*
