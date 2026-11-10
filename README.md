# Icelandic language pack for phpBB

Complete Icelandic translation for phpBB 3.3.19, including the public forum,
Administration, Moderator and User Control Panels, installer, command-line
interface, help pages, email templates and the bundled VigLink extension.

## Package status

- Targets phpBB 3.3.19.
- Contains no untranslated PHP language entries or email templates.
- Uses phpBB's Icelandic plural rule (`15`).
- Matches the official British English file tree, keys, placeholders and
  template tokens.
- Passes the official phpBB 3.3 Language Pack Validator with no fatal errors,
  errors or warnings.
- All text files use UTF-8 without BOM and Unix line endings.

## Installation

1. Download the archive from the
   [latest release](https://github.com/Leinad4Mind/phpBB-3.x-Icelandic-Language-Pack/releases/latest).
2. Merge its `ext`, `language` and `styles` directories into the root of your
   phpBB 3.3.19 installation.
3. Go to **ACP → Customise → Language Management → Language packs** and install
   Icelandic.
4. If required, select Icelandic as the board default language and in each
   user's UCP preferences. Installing a language does not change existing user
   preferences automatically.

## Translation method

The official phpBB 3.3.19 British English files are the canonical source. The
original 2011 Icelandic translation for phpBB 3.0.7-PL1 was used as translation
memory only when the key and English source were unchanged, or when an exact
English source had one unambiguous Icelandic match. All new and changed text
was translated and reviewed against phpBB 3.3.19.

This method prevents obsolete translations from being assigned to keys whose
meaning changed between phpBB 3.0 and 3.3. The migration completion record is
available in [MIGRATION_STATUS.md](MIGRATION_STATUS.md).

## Credits

- Gunnar Guðvarðarson — original Icelandic phpBB 3.0.7-PL1 translation
- Joomlís.net — original language-pack publisher
- Leinad4Mind — phpBB 3.3.19 migration and maintenance
