

- **Iniciar sesión en Docker desde terminal:**
![image](https://github.com/user-attachments/assets/ee59034c-8ba1-4e3a-b398-85243a5bdf14)

---

- **PASO 1: Activar Docker Scout**
Docker Scout ya viene integrado en Docker Desktop (desde la versión 4.18). Si estás en terminal, puedes usarlo así:
con el siguiente comando: **docker scout quickview m4rlon25/typewriter:latest**
![image](https://github.com/user-attachments/assets/171297f5-d5b8-4932-b49f-54184a38c3e3)

- **PASO 2: Documentar el análisis**
Generar un reporte detallado en formato tabla (legible para documentation):
 usamos el siguiente comando: **docker scout cves m4rl0n25/typewrite:latest**

![image](https://github.com/user-attachments/assets/5a91b90d-cbaf-4e2c-bc3e-3b87ab4995fd)

![image](https://github.com/user-attachments/assets/7688aace-f334-40bd-bb89-aa62afe4e2c9)

![image](https://github.com/user-attachments/assets/b2de8255-d724-4d80-a09e-f26d0958902e)

![image](https://github.com/user-attachments/assets/0669ff0b-80c6-447e-8137-9bb30c71bdbf)

- **PASO 3: Para exportar como Markdown (ideal para documentación técnica):**
Usamos el siguiente comando: **docker scout cves m4rl0n25/typewriter:latest --format markdown > reporte.md**

Ejemplo de salida resumida:

![image](https://github.com/user-attachments/assets/b04a46a3-3169-46ef-a1e1-39ad68ba51bf)
