# Utilizar una imagen base de Apache
FROM httpd:latest

# Copiar tu archivo de configuración personalizado de Apache si estás usando la configuración global
COPY my-httpd.conf /usr/local/apache2/conf/httpd.conf

# O copiar tu archivo .htaccess al directorio raíz del sitio web
# COPY .htaccess /usr/local/apache2/htdocs/

# Copiar los archivos de tu sitio web al contenedor
COPY ./html/ /usr/local/apache2/htdocs/

# Otras configuraciones y copias necesarias para tu sitio web pueden ir aquí

# Exponer el puerto (por defecto es el 80 para HTTP)
EXPOSE 80

# El comando para iniciar Apache (usualmente no es necesario cambiarlo)
CMD ["httpd-foreground"]
