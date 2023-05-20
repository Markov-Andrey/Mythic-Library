#Mythic Library

**En**:
_A project conscious for the creators of new fictional worlds, incl. dnd masters.
Create your own mini wikipedia with cross-sections, illustrations and maps. ChatGPT will help you create the world._

**Ru**:
_Проект для создателей новых вымышленных миров, в т.ч. dnd-мастеров.
Создайте свою собственную мини-википедию со связанными между собой статьями, иллюстрациями и картами. ChatGPT поможет вам создать мир._

## Technologies:
- PHP
- JS
- Laravel
- Livewire
- Tailwind
- flowbite
- ChatGPT

## Installation

Config Open Server:
- Apache 2.4
- PHP 8.1
- MySQL 8.0

## Deployment

- new DB in PhpMyAdmin - mythic-library
-  .env copy (you can set it yourself or ask the author)
- composer install
- npm run dev
- php artisan storage:link
- php artisan migrate
- clone DB

## Map of site

### User
/ (list of worlds)
/{world_name} (main page of the world with its brief description and table of contents of articles)

