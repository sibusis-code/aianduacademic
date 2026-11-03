<?php
/* Everything that makes this installation AI & U rather than SPS, Fungi or Maziv.
 *
 * THIS IS THE ONLY PER-SITE PHP FILE. Every other .php file in this repository
 * is shared verbatim with the other three academies, and tools/sync-backend.php
 * overwrites them from SPS without asking. It refuses to touch this one.
 *
 * So: if you find yourself wanting to edit a page because "AI & U says X and Fungi
 * says Y", the answer is a new key in here and brand('key') in the page. If you
 * edit the page instead, the next sync silently reverts you.
 *
 * Nothing secret belongs here — this file is deployed into the web root along
 * with everything else. Credentials live in ~/private/aiandu-config.php.
 */

return [

  /* The academy, and the brand whose academy it is. AI & U ("where U stands for
     Ubuntu", aiandu.africa) is Centenary Networks' own coding and AI literacy
     movement, not a client: there is no employer behind these learners, so the
     company-academy wording on the other sites (employees, line managers,
     "fully funded by") has been rewritten rather than renamed. */
  'academy'       => 'AI & U Academy',
  'company'       => 'AI & U',

  /* Used mid-sentence — "for AI & U employees", "Fully funded by AI & U". The long
     form reads badly there, which is the only reason this key exists. */
  'company_short' => 'AI & U',

  /* Relative to the site root. The full lockup (AI & U block, UBUNTU, tagline),
     cropped from Images/AI-U-logo.png. Logo paths differ between sites; both are correct — do not "tidy" one to match the other, because
     the file is referenced from static .html pages this application never
     touches, and moving it breaks those. */
  'logo'          => 'images/aiandu-logo.png',
  'logo_alt'      => 'AI & U',

  /* Where registrations and reset notifications go, and what the contact page
     prints. The notification address is ALSO in the server configuration as
     notify_email; this one is the published address on the page. They are the
     same today and need not stay that way. */
  'academy_email'   => 'kgomotso@centenarynetworks.com',

  /* Optional. Fungi publishes a second, company-side address; AI & U does not, so
     the line is omitted rather than left blank. */
  'enquiries_email' => '',

  /* Kgomotso's cellphone, on her instruction of 29 Oct 2026: she takes the
     academy's calls herself. The same number is on every academy. */
  'phone'         => '+27 81 015 5135',
  'phone_href'    => '+27810155135',
  'office_hours'  => 'Monday–Friday, 08:00–17:00 SAST',

  /* Placeholder text in the registration form. Each company numbers its staff
     differently and names its teams differently, and a form that suggests
     another company's conventions looks like it was not written for you. */
  'empno_example' => 'Leave blank if you do not have one',
  'dept_example'  => 'e.g. your school, organisation or community group',

  /* Centenary Networks' accreditation, not the client's. It is identical on all
     four sites because it is one accreditation held by one provider. */
  'accred_no'     => '07-QCTO/SDP180526182035',
  'accred_valid'  => '15 May 2026 – 14 May 2031',

  /* The two brand colours, as plain hex, for EMAIL only.

     Every other surface takes its colours from the --accent and --ink custom
     properties in styles.css. Email cannot: a mail client strips <style> and
     has never heard of var(), so the colour has to be written into each tag as
     it is emitted, and PHP has to know what it is. These must be kept the same
     as --accent and --ink in this site's block of styles.css — they are the
     one deliberate duplication in the palette, and this note is why.

     Fungi, Equinix and Maziv each need their own two values here when their
     letters are switched on; lib/letters.php falls back to a neutral grey
     rather than to AI & U orange if a site has not set them, so a missing key
     looks unfinished instead of looking like another company's mail. */
  'email_accent'  => '#c4472a',
  'email_ink'     => '#1f1d3a',

  /* Bumped on any release that changes styles.css or a .js file.
     See asset() in lib/chrome.php for why this is not optional. */
  'asset_version' => '20261103',
];
