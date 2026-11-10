# Icelandic language pack for phpBB

This repository is being modernised for phpBB 3.3.19 on the
`update/phpbb-3.3.19` branch.

## Migration method

The phpBB 3.3.19 British English language tree is the canonical base. The
2011 Icelandic phpBB 3.0.7-PL1 package is used only as translation memory:

- an Icelandic value is reused when both its key and British English source
  are unchanged;
- an Icelandic value may also be reused when the same British English source
  has one unambiguous translation in the old package;
- new or changed source text remains in British English until it is translated
  and reviewed.

This prevents obsolete Icelandic text from being attached to language keys
whose meaning changed between phpBB 3.0 and 3.3.

## Current status

- 3,541 entries reused by unchanged key and source text;
- 91 entries reused through unambiguous translation memory;
- 499 entries still require Icelandic translation;
- 6 unchanged text/email templates reused;
- 51 text/email templates still require Icelandic translation;
- the file tree and language keys match phpBB 3.3.19.

This is currently a work in progress and should not yet be published as a
complete language pack. See [MIGRATION_STATUS.md](MIGRATION_STATUS.md) for the
remaining work by file.

## Installation layout

When the translation is complete, copy the repository's `language` and
`styles` directories into the root of a phpBB 3.3.19 installation, then install
Icelandic from the Administration Control Panel.
