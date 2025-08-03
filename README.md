# Bedrock Starter Scaffold

A modern WordPress starter built on [Bedrock](https://roots.io/bedrock/) with Lando, Composer plugin overrides, and custom environment configuration.

> Maintained by [Andrew Wilkinson](https://meonvalleyweb.com) – Meon Valley Web  
> Contact: [andrew@meonvalleyweb.com](mailto:andrew@meonvalleyweb.com)

---

## 🚀 Features

- Roots Bedrock as a base (tracked via Git upstream)
- Lando environment for local development
- Composer-based plugin injection via `overrides/composer.plugins.json`
- Custom Bedrock config overrides via `application-hooks.php`
- Ready-to-use `.devcontainer/` for VS Code Dev Containers
- Simple update process to keep in sync with Roots

---

## 📁 Folder Structure

```
/
├── config/                      # Bedrock config
├── overrides/                  # Custom plugin and config definitions
│   ├── composer.plugins.json
│   └── application-hooks.php
├── scripts/
│   └── merge-plugins.sh        # Merges plugin overrides into composer.json
├── .devcontainer/              # Optional VS Code dev environment
├── .lando.yml                  # Lando setup (PHP 8.3, MySQL, Mailhog, etc.)
├── composer.json
└── .gitignore
```

---

## 🧪 Requirements

- [Lando](https://lando.dev)
- [Docker](https://www.docker.com/)
- [Composer](https://getcomposer.org/)
- Git (for clone and update)

---

## 🧱 Getting Started

### 1. Clone this repo

```bash
git clone https://github.com/MeonValleyWeb/bedrock-starter-scaffold.git my-site
cd my-site
```

### 2. Update `.lando.yml`

Edit the following:

- Change `name: bedrock-starter` → `name: your-site-name`
- Update `proxy:` domains accordingly (e.g., `your-site.local`)

### 3. Start Lando

```bash
lando start
```

### 4. Merge custom plugins and install dependencies

```bash
./scripts/merge-plugins.sh
composer update
```

### 5. Open your site

Visit:

```
https://your-site.local
```

---

## ⚙️ Updating Bedrock from Roots

1. Add upstream (first time only):

```bash
git remote add upstream https://github.com/roots/bedrock.git
```

2. Pull and merge latest updates:

```bash
git fetch upstream
git merge upstream/master
```

3. Re-apply plugin overrides and update:

```bash
./scripts/merge-plugins.sh
composer update
```

4. Commit and push:

```bash
git add .
git commit -m "Update: merged latest Bedrock changes"
git push origin main
```

---

## 💻 Dev Container (Optional)

If you use **VS Code Dev Containers**:

1. Open project in VS Code
2. Click **"Reopen in Container"**
3. Pre-installed tools:
   - Composer
   - WP-CLI
   - PHP extensions for Bedrock

> GitHub Actions for `.devcontainer/` are disabled by default.  
> You can re-enable with custom CI setup if needed.

---

## 🧯 Troubleshooting

- **Fatal error: `Config not found`**  
  Make sure `application-hooks.php` checks `class_exists(Config::class)` before using it.

- **`env()` not defined**  
  Use `getenv()` instead of `env()` inside hooks.

- **Composer warnings**  
  Run `composer update` after plugin merges.

- **Merge errors from upstream**  
  Use `--allow-unrelated-histories` when merging Bedrock for the first time.

---

## 🧑‍💻 Maintainer

**Andrew Wilkinson**  
[Meon Valley Web](https://meonvalleyweb.com)  
📧 [andrew@meonvalleyweb.com](mailto:andrew@meonvalleyweb.com)

---

## 📄 License

MIT – based on the [Roots Bedrock](https://github.com/roots/bedrock) project.