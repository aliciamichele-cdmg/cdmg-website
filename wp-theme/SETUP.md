# CDMG WordPress Theme: Setup and Handoff

This is a custom WordPress theme that reproduces the CDMG site design and gives
you a WordPress-simple way to publish AEO-optimized blog articles (schema and
FAQ dropdowns included), while larger design changes stay maintainable in code.

Your site runs on **WP Engine** (with Cloudflare in front), which has one click
staging. Everything below should be done on a **staging** copy first, then
pushed to live once it looks right.

---

## What is included in this version

This first version delivers the full site chrome and the complete blog system:

- The header, navigation, and footer, matching the current design.
- The DMU Blog listing page (featured article plus a card grid, filled
  automatically from your posts).
- The single article page, styled to match and ready for schema and FAQ blocks.
- A generic page template and the required fallbacks.

**Still to come (next phase):** dedicated templates that reproduce the exact
layouts of the Home, 5 Dimensions, Why You, Our Story, and Contact pages. Until
those are added, those pages render in the site chrome with their title and
content but not their full custom design. **Do not activate this theme on the
live site until that phase is done.** It is safe and correct to test on staging
now, especially the blog.

---

## Step 1. Put the theme on staging

Pick whichever your digital team finds easier.

**Option A, WordPress admin upload (simplest):**
1. In the WP Engine User Portal, create or refresh the **staging** environment.
2. Log in to the staging site's WordPress admin.
3. Go to **Appearance > Themes > Add New > Upload Theme**.
4. Upload `cdmg.zip` (the packaged theme file).
5. Click **Install**, then leave it installed. Do not activate yet if the live
   site is mirrored. On staging you can activate to preview.

**Option B, SFTP (if admin upload is restricted):**
1. In the WP Engine User Portal, open the staging environment's **SFTP**
   credentials.
2. Upload the unzipped `cdmg` folder into `wp-content/themes/`.
3. The theme then appears under Appearance > Themes.

---

## Step 2. Install the AEO plugin

1. On staging, go to **Plugins > Add New**.
2. Search for **Rank Math SEO**, install and activate it (the free version is
   enough).
3. Run its setup wizard. When asked, turn on **schema / structured data**.
   Choose **Article** as the default schema type for posts.

Rank Math is what makes AEO point and click: it writes the title tag and meta
description, adds Article schema to every post, and turns FAQ blocks into FAQ
schema automatically.

---

## Step 3. Create the pages and set the blog

1. **Permalinks:** Settings > Permalinks > choose **Post name**. Save.
2. **Create pages** with these exact slugs (the navigation links to them):
   `5-dimensions`, `why-you`, `our-story`, `contact`, and a page titled
   **Blog** with slug `blog`.
3. **Set the blog page:** Settings > Reading > "Your homepage displays" >
   choose a static homepage. Set **Posts page** to **Blog**. (Set the Homepage
   to your Home page once its template is built; for now you can leave the
   default.)

The navigation and footer are part of the theme, so there is no menu to build.

---

## Step 4. The weekly publishing routine (your team, no code)

1. **Posts > Add New.**
2. Write the article in the editor. Use Heading blocks for sections.
3. Set a **Category** (this becomes the tag shown on the card and article).
4. Set a **Featured image** (this becomes the card and article banner).
5. For the dropdowns, add a **FAQ block** (search "FAQ" when adding a block;
   Rank Math provides one). Each question and answer becomes a dropdown on the
   page and a line of FAQ schema for answer engines.
6. In the **Rank Math** panel on the right, fill the focus keyword, check the
   title and description, and confirm the schema shows **Article**. Aim for a
   good Rank Math score.
7. **Publish** (or **Schedule** for a future date to keep a weekly cadence).

The new post appears on the DMU Blog page automatically. Nothing else to touch.

---

## Step 5. Going live

Once the blog looks right on staging and the remaining page templates are in
place, use the WP Engine User Portal to **push staging to live** (or activate
the theme on live during a quiet window). Cloudflare cache may need a purge so
the new look shows immediately.

---

## How larger changes happen (the Claude Code path)

The theme source lives in this project under `wp-theme/cdmg/`. When you need a
change your team cannot do in the editor (a new page layout, a design tweak, a
new template), it is made here in code, then delivered to WordPress one of two
ways:

- **Re-upload:** repackage `cdmg.zip` and upload it again through Appearance >
  Themes (it updates the existing theme), or
- **SFTP / git deploy:** WP Engine supports SFTP and git push, so updated files
  can be pushed straight to the theme folder.

Your team keeps doing the day to day in WordPress; the heavier work stays in
code and gets handed over as an updated theme.
