# CDMG WordPress Theme: Setup and Handoff

This is a custom WordPress theme that reproduces the CDMG site design and gives
you a WordPress-simple way to publish AEO-optimized blog articles (schema and
FAQ dropdowns included), while larger design changes stay maintainable in code.

Your site runs on **WP Engine** (with Cloudflare in front), which has one click
staging. Everything below should be done on a **staging** copy first, then
pushed to live once it looks right.

---

## What is included

This is the complete site: every page reproduced in WordPress, plus the blog.

- The header, navigation, and footer, matching the current design.
- The five marketing pages, each as a dedicated template that reproduces its
  exact layout: Home, 5 Dimensions, Why You, Our Story, and Contact.
- The DMU Blog listing page (featured article plus a card grid, filled
  automatically from your posts).
- The single article page, styled to match and ready for schema and FAQ blocks.
- A generic page template and the required fallbacks.

The marketing pages carry their design in the theme code, so the WordPress
editor content for those pages can stay empty. The pages only need to exist
with the correct slugs (below) for the templates to load. Test everything on a
staging copy first, then push to live.

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
2. **Create pages** with these exact slugs (the templates load by slug, so the
   slug must match exactly; the page content can be left empty):
   - `Home` (any title), slug does not matter for the homepage
   - `5 Dimensions`, slug **`5-dimensions`**
   - `Why You`, slug **`why-you`**
   - `Our Story`, slug **`our-story`**
   - `Contact`, slug **`contact`**
   - `Blog`, slug **`blog`**

   When you create a page, set the slug in the page's URL/permalink field. If
   WordPress auto-generates a different slug (for example
   `5-dimensional-marketing`), change it to the exact slug above or the page
   will fall back to the plain template.
3. **Set the homepage and blog:** Settings > Reading > "Your homepage displays"
   > **A static page**. Set **Homepage** to your `Home` page and **Posts page**
   to your `Blog` page.

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

Once everything looks right on staging, use the WP Engine User Portal to **push
staging to live** (or activate the theme on live during a quiet window).
Cloudflare cache may need a purge so the new look shows immediately.

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
