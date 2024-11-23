## Technology Stack

### Core Components
- **Frontend:**
  - WordPress with WooCommerce for e-commerce functionality.
  - React for modern, interactive elements on specific pages.
- **Backend:**
  - PHP 8.2 for WordPress and custom backend logic.
  - MySQL for relational database needs.
- **Caching and Performance:**
  - Redis for session and object caching.
  - CloudFront (for specific subdomains) as a CDN for static content.
- **Servers and Hosting:**
  - Apache for web serving.
  - Debian 12 for server OS.
  - Hosted on AWS (EC2, S3, and RDS for database needs).
- **Email:**
  - Postfix and Dovecot for email services.
  - SES for outbound email.

### SEO and Social Sharing
- Rank Math and Rank Math Pro for SEO optimization.
- Open Graph metadata integration for better link previews on social platforms.

### Security
- Let's Encrypt SSL certificates for HTTPS across all domains.
- SpamAssassin and custom Sieve rules for email spam management.

---

## CI/CD Implementation

### Overview
The project implements a CI/CD pipeline using **GitHub Actions** to automate deployment for the WordPress site hosted on a Debian 12 server. The pipeline ensures that changes pushed to the repository are automatically tested and deployed to the production server.

### Workflow Configuration
The CI/CD pipeline is defined in `.github/workflows/ci-cd.yml` and includes the following steps:
1. **Trigger Events:**
   - Workflow runs on every `push` or `pull_request` to the `main` branch.
2. **Build and Deploy:**
   - Check out the repository using `actions/checkout@v3`.
   - Deploy the latest changes to the production server:
     - Connects securely using SSH with a deployment key.
     - Pulls the latest code from the repository.
     - Installs dependencies using `composer install`.

### Deployment Details
- **Server:** The pipeline deploys to a WordPress instance hosted at `/var/www/html` on `deb1.doap.com`.
- **Authentication:** Uses a securely stored private SSH key (`DEPLOY_KEY`) for authentication, with the corresponding public key configured on the server.
- **Commands Executed:**
  - `git pull origin main`: Updates the production codebase with the latest changes.
  - `composer install --no-dev`: Ensures all necessary dependencies are installed for production.

### How to Trigger the Workflow
- Push changes to the `main` branch:
  ```bash
  git push origin main

