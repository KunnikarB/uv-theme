# Upplev Vadstena Theme (UV Theme)
<img width="1411" height="889" alt="Vadstena" src="https://github.com/user-attachments/assets/9f4df7b6-777d-4547-b627-ec62b5a5a9aa" />


A custom WordPress theme built with a modern frontend workflow using Vite.

## 🚀 Features

* Custom WordPress theme
* Responsive header with mobile menu toggle
* Dynamic navigation using `wp_nav_menu`
* Modern JavaScript (ES Modules)
* Vite build system (`src → dist`)
* Clean CSS structure with variables

---

## 📁 Project Structure

```
upplev-vadstenaa-theme/
├── style.css
├── functions.php
├── header.php
├── src/
│   └── js/
│       └── main.js
├── dist/
│   └── main.js
├── vite.config.js
├── package.json
```

---

## ⚙️ Setup

### 1. Install dependencies

```
npm install
```

### 2. Development

```
npm run dev
```

### 3. Build assets

```
npm run build
```

---

## 🔌 WordPress Setup

1. Place the theme in:

```
/wp-content/themes/uv-theme/
```

2. Activate the theme in WordPress

3. Create a menu:

* Go to **Appearance → Menus**
* Assign it to **Primary Menu**

---

## 📱 Mobile Menu

* Toggle controlled via JavaScript
* Uses `.active` class on `.site-menu`

---

## 🎨 Styling

* CSS variables defined in `:root`
* Responsive layout using CSS Grid
* Spacing and typography system included

---

## 🔗 URLs

Uses WordPress permalinks (recommended: "Post name"):

```
/se-upplev/
/ata-bo/
/butiker/
```

---

## 🧠 Development Workflow

```
npm run build
git add .
git commit -m "Update"
git push
```

---

## 📌 Notes

* `/dist` must be included for production
* `node_modules` should not be committed
* JavaScript is loaded as ES module (`type="module"`)

---

## 👤 Author

Kunnikar Boonbunlu
