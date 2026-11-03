# AI & U Academy

The learning academy of AI & U (aiandu.africa), Centenary Networks' own coding
and AI literacy brand ("where U stands for Ubuntu"). It is not a client
academy. Cloned on 3 Nov 2026 from the ALT Capital Partners academy, which
traces back to SPS. Same platform as the other academies: plain PHP 8 + MySQL
(SQLite for local development), no build step. The shared back end is synced
from SPS (`tools/sync-backend.php`); `lib/brand.php`, the `.html` pages and
`styles.css` belong to this site.

**Status: built locally on branch `xneelo-backend`. No GitHub remote yet, not
deployed.** It is meant to be linked from aiandu.africa once it is live.

## What is AI & U's
- Logo: `images/aiandu-logo.png` (the full lockup) and `images/aiandu-mark.png`
  (the AI & U block alone), cropped from the supplied `AI-U/Images/AI-U-logo.png`.
- Palette from aiandu.africa: indigo `#1E1B4B`, orange `#D14E2D`, magenta
  `#7B3A6E`, sky `#B8C5DB`, cream `#FAF7F2`; Bodoni Moda for headlines. The
  primary is the orange taken one step deeper (`#c4472a`) so that white button
  text passes AA. On indigo, small text uses a lighter orange.
- Wording: "Where technology meets humanity" and the Ubuntu line are theirs.
  The employer wording on the other academies (employees, HR, line managers,
  "fully funded by") has been rewritten for learners, schools and communities.

## Still to confirm (Kgomotso)
- Funding: cards say "Ask us about funding". The site does not say courses
  are free.
- The two About-page photographs are still the template placeholders.
- The Graduates page shows Centenary's alumni, as on the other academies.
- The privacy page names Centenary Networks as the operator acting for AI & U.

## Run it locally
```
php -S localhost:8080 -t . tools/dev-server.php
```
Needs `lib/config.local.php` (gitignored, SQLite), then
`php tools/migrate.php` and `php tools/make-user.php`.

## Going live
Done: the deploy workflow (`public_html/aiandu`, secrets `AIANDU_FTP_*`), a line
in every sibling's guard lists, the tenant row in SPS's seed, and a target in
`tools/sync-backend.php`.
To do: create the GitHub repository and push, add the three secrets, create
`public_html/aiandu` and `~/private/aiandu-config.php` (tenant `aiandu`) on
Xneelo, deploy, then run `/setup`.
