# Pterodactyl Module for FOSSBilling

A free and open-source module that connects **Pterodactyl** with **FOSSBilling**, allowing you to automate game server provisioning, management, and suspension directly from your FOSSBilling panel. This module is designed to streamline hosting operations and provide a seamless experience for both providers and their clients.

## ✨ Features

* ✅ **Automatic Server Provisioning** – Deploy servers instantly after payment confirmation.
* ✅ **Suspend / Unsuspend Servers** – Automatic suspension for overdue invoices and instant reactivation on payment.
* ✅ **Multiple Node Support** – Assign products to specific Pterodactyl nodes.
* ✅ **Custom Resource Allocation** – Configure CPU, RAM, disk, and other limits per product plan.
* ✅ **Client Panel Access** – Clients can see their server details directly in FOSSBilling.

## 📦 Requirements

* [FOSSBilling](https://fossbilling.org/) (latest stable version)
* [Pterodactyl](https://pterodactyl.io/) (latest stable version)
* A working Pterodactyl API key (application API)

## ⚙️ Installation

### Option 1: Download from Releases (Recommended)

1. **Download** the latest release ZIP from [GitHub Releases](https://github.com/Athenox14/Pterodactyl-Module-FOSSBilling/releases)
2. **Extract** the ZIP file into your FOSSBilling `/modules/` directory
3. The folder should be named `Servicepterodactyl` (this is already correct in release ZIPs)
4. **Activate** the module from FOSSBilling admin panel → Extensions → Overview
5. **Configure** your Pterodactyl credentials in the module settings

### Option 2: Manual Installation

1. **Download** or clone the repository:

   ```bash
   git clone https://github.com/Athenox14/Pterodactyl-Module-FOSSBilling.git
   ```

2. **Upload** the module contents to your FOSSBilling `/modules/` directory

3. **Rename the folder** to `Servicepterodactyl`:

   > ⚠️ **Important**: FOSSBilling requires service modules to have the `Service` prefix. The folder **must** be named `Servicepterodactyl` (not `Pterodactyl` or `Pterodactyl-Module-FOSSBilling-main`).

   ```bash
   mv /path/to/fossbilling/modules/Pterodactyl-Module-FOSSBilling /path/to/fossbilling/modules/Servicepterodactyl
   ```

4. **Activate** the module from FOSSBilling admin panel → Extensions → Overview → Pterodactyl

5. **Configure** your Pterodactyl credentials (API URL and Application API key) in the module settings

## 🔧 Configuration

After activation, configure the module in FOSSBilling:

1. Go to **Extensions** → **Pterodactyl Settings**
2. Enter your **Pterodactyl Panel URL** (e.g., `https://panel.example.com`)
3. Enter your **Application API Key** (generate one in Pterodactyl: Admin → Application API)
4. Configure default values for nodes, eggs, and resource limits

### Creating a Product

1. Go to **Products** → **New Product**
2. Select **Pterodactyl** as the service type
3. Configure the server specifications:
   - Node ID
   - Egg ID
   - Memory, CPU, Disk limits
   - Docker image (optional)
4. Set your pricing and save

## 🛠 Roadmap

* [ ] - Improve UI/UX for client panel

## 🤝 Contributing

Pull requests and feature suggestions are welcome!

1. Fork the repo
2. Create a feature branch
3. Submit a PR

## 👨‍💻 About

This module is developed and maintained by **[Athenox Development](https://athenox.dev)**, a French Development company.

* 🌐 Website: [athenox.dev](https://athenox.dev)
* 💬 Discord: [Join our community](https://discord.gg/CXZvfDPnBh)
* 📧 Contact: `contact [at] athenox.dev` *(for custom FOSSBilling modules or Pterodactyl Blueprint addons)*

If you need **custom modules for FOSSBilling** or **addons for Pterodactyl Blueprint**, don’t hesitate to get in touch!

## 📜 License

This module is licensed under the **MIT License**. See [LICENSE](LICENSE) for details.
