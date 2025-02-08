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
To locally develop the application, all you need to do is clone the repository and install the composer packages.
```bash
composer install
```

Then, you can run the application using the following command:
```bash
php -S localhost:8000
```