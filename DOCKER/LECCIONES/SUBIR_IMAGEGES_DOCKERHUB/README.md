## Subir imáges a dockerhub.

Una de las etapas esperadas en DevSecOps es poder distribuir nustra imágenes. En este ejemplo envíaremos  a dockerhub
(regisro pública) una imágen que se ha creado previament en local.  
Enviar imágen a dockerhub


# 1. Valida el nombre de tu imágen.

'''
$ docker images
REPOSITORY                            TAG       IMAGE ID       CREATED         SIZE
animacion-texto                       latest    7c59172c0d5f   8 hours ago     15.2MB
mysql                                 latest    2247f6d47a59   4 weeks ago     1.17GB
'''

En esta ocasión haremos uso de la imágen "animacion-texto". Esta debe prepararse para ser enviada a dockerhub, 
realizando sobre la misma una copia y nombrandolo con nuestro nombre de usuario en dockerhub y
un tag, como se indica a continuación.

'''
jaider@TTG MINGW64 /e/UNIMINUTO_2021_2/Especializacion_2025/REPO/SCRIPT_HOLA_DINAMICO
$ docker tag animacion-texto jaiderospina/maquinaescribir:v1
'''

Acto seguido validar la existencia de nuestra nueva imágen.

'''
jaider@TTG MINGW64 /e/UNIMINUTO_2021_2/Especializacion_2025/REPO/SCRIPT_HOLA_DINAMICO
$ docker images
REPOSITORY                            TAG       IMAGE ID       CREATED         SIZE
jaiderospina/maquinaescribir          v1        7c59172c0d5f   8 hours ago     15.2MB
animacion-texto                       latest    7c59172c0d5f   8 hours ago     15.2MB
'''

**Conexión a dockerhub**

Ejecutar desde terminal **docker login**  e ingresar credenciales solicitadas. 

'''
$ docker login
Authenticating with existing credentials...
Login Succeeded
'''

**Enviar imágen a dockerhub**

Ejecutar desde terminal:

'''
$ docker push jaiderospina/maquinaescribir:v1
The push refers to repository [docker.io/jaiderospina/maquinaescribir]
95ac66c4f8df: Waiting
4f4fb700ef54: Waiting
f18232174bc9: Waiting
f18232174bc9: Pushed
v1: digest: sha256:7c59172c0d5f85a5452e622b6a27880f9dcb793121c90806a54041e37958b57d size: 856
'''

**Validación**

Ingresa a tu cuenta y valida la creación de la imágen.

**NOTA**

Como se puede observar en dockerhub la imágen ha sido creada únicamente con la orden **docker push ...**. Es importante
realizar una mínima documentación de la misma mediante la opcion **"Overview"** directamente desde dockerhub, que incluya como mínimo:

- Descripción funcional.
- Como correr (consumir) la imágen.
- Nombramiento de variables de entorno si aplica. 
