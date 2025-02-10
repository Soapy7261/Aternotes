# Aternotes
Aternotes is a convenient application designed to support moderation/support teams in managing their work, namely for the Aternos moderation team.

Aternotes' current roadmap consists of:
- A private dashboard
  - Easy management of the moderator list by letting the user ID be put in and having automatic systems fetch the profile from discord
  - Easy writing of public guides on the website through a markdown editor
  - A guide reviewal system for guides written by non-mods
  - Account management
  - Account rights management
- Public guide page/overview
- Public aternos moderator list with a cooldown of 6 hours of fetching moderator profiles from discord

## Local development
To locally develop the application, you will need to have the following installed:
- Node.js & NPM
- Docker compose
- PHP and composer

Before running the application, you should copy the .env.example to .env:
```bash
cp .env.example .env
```

Then, you should install the composer dependencies:
```bash
composer install
```

After that, you should install the npm dependencies:
```bash
npm install
```

After that, you should run the following command to start the development server:
```bash
docker compose up --build
```