# Escape de la Pirámide

Este es un proyecto de Unity 3D que se conecta con una base de datos MySQL para almacenar y obtener puntajes de un juego. 

## Requisitos

- **Unity 6.0** o superior.
- **XAMPP** (para ejecutar un servidor local con MySQL y PHP).
  
## Instrucciones

1. **Instalar Unity 6.0**:
   Asegúrate de tener Unity 6.0 instalado en tu sistema. Si no lo tienes, descárgalo e instálalo desde el sitio oficial de Unity.

2. **Instalar XAMPP**:
   Si no tienes XAMPP instalado, descárgalo desde [aquí](https://www.apachefriends.org/es/index.html). Asegúrate de que Apache y MySQL estén corriendo en XAMPP.

3. **Crear un nuevo proyecto en Unity 3D**:
   - Abre Unity y crea un nuevo proyecto en 3D.

4. **Importar el Package de Unity**:
   - Una vez creado el proyecto, ve al menú `Assets` en Unity, selecciona `Import Package` y luego `Custom Package`.
   - Selecciona el archivo `.unitypackage` del repositorio y haz clic en `Import`.

5. **Configurar las APIs de PHP**:
   - Dirígete a la carpeta `htdocs` de tu instalación de XAMPP. La ruta suele ser algo como `C:/xampp/htdocs`.
   - Copia los archivos `.php` de este repositorio dentro de la carpeta `htdocs`.

6. **Crear la base de datos en MySQL**:
   - Abre XAMPP y haz clic en el botón `Admin` de MySQL para abrir `phpMyAdmin`.
   - En `phpMyAdmin`, crea una nueva base de datos llamada `videojuego`.

7. **Importar el archivo SQL**:
   - Una vez que la base de datos `videojuego` esté creada, selecciona la base de datos y ve a la opción de `Importar`.
   - Selecciona el archivo `.sql` del repositorio y haz clic en `Continuar`.

8. **Ejecutar el proyecto**:
   - Con XAMPP corriendo y el proyecto importado en Unity, ya puedes ejecutar el juego desde Unity.
   - El juego se conectará a la base de datos para guardar y recuperar puntajes.

## Contribuciones

Si deseas contribuir al proyecto, por favor crea un fork y envía un pull request. Estaré encantado de revisar tus contribuciones.

## Licencia

Este proyecto está bajo la Licencia MIT. Consulta el archivo LICENSE para más detalles.
