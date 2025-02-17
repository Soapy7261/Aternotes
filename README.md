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
To run and delvelp the project locally. 
- Make sure you got docker  and docker compse installed
- Make a copy of .env.example and rename it to .env
- set the DATABASE_NAME = aternotes or atleast the same as in the init.sql file
- Run `docker compose up` 
Enjoy! 