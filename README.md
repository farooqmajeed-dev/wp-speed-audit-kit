# wp-speed-audit-kit

Practical snippets and server rules I use when optimizing WordPress and static frontend builds for faster load times and cleaner Core Web Vitals.

## What's inside

- `htaccess-caching.conf` — GZIP/Deflate compression and browser cache headers for Apache/cPanel hosting.
- `defer-scripts.php` — Lightweight `functions.php` snippet to defer non-critical frontend scripts and remove unused emoji overhead.

## Typical impact

Across client sites on cPanel/WHM + CDN setups, combining asset minification, script deferring, and proper cache headers consistently cuts page load times by 30–40%.
