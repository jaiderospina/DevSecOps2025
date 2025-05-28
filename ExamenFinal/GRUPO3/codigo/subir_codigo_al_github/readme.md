# 🚀 Subir un proyecto local a GitHub

## 1. Crear un nuevo repositorio en GitHub

1. Ve a [https://github.com/new](https://github.com/new).
2. Ponle un nombre al repositorio (ejemplo: `casacafe`).
3. **No** marques la opción _"Initialize this repository with a README"_.
4. Haz clic en **Create repository**.
5. GitHub te mostrará una URL, algo como:

   ```
   https://github.com/m4rl0n25/casacafe.git
   ```

---

## ✅ 2. Desde tu terminal local (dentro del proyecto)

Abre tu terminal (CMD, PowerShell, Git Bash o la terminal de VS Code), navega a la carpeta de tu proyecto:

```bash
cd "C:\Users\Veronica\Documents\Casacafe"  # Ajusta la ruta según donde lo tengas
```

---

## ✅ 3. Inicializa Git en el proyecto

```bash
git init
```

---

## ✅ 4. Agrega los archivos y haz el primer commit

```bash
git add .
git commit -m "Primer commit - Proyecto Casa del Café"
```

---

## ✅ 5. Conecta tu proyecto con el repositorio remoto de GitHub

```bash
git remote add origin https://github.com/m4rl0n25/casacafe.git
```

> Sustituye la URL con la de tu repositorio.

---

## ✅ 6. Sube tu proyecto a GitHub

```bash
git branch -M main
git push -u origin main
```
