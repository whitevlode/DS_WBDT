# DS_WBDT
Test dataset for testing the web backdoor detection tool (WBDT). The test site uses a wordpress framework.

Lists WB:

## 1.

1.1.1.1.1 `wp-includes/1.php  GET ?c=phpinfo&f=`

1.1.1.1.2 `wp-insludes/kses.2.php POST c=phpinfo&f=`

1.1.1.2.1 `wp-includes/3.php POST kol=phpinfo();`

1.1.1.2.2 `wp-includes/theme.4.php POST sdr=phpinfo();`

1.1.2.1.1 `wp-includes/5.php`

1.1.2.1.2 `wp-includes/update.6.php`

1.1.2.2.1 `wp-includes/7.php`

1.1.2.2.2 `wp-includes/widgets.8.php`

1.2.1.1.1 `wp-includes/9.php (+ wp-includes/9.1.php) GET ?lop=phpinfo();`

1.2.1.1.2 `wp-includes/user.10.php (+ wp-includes/version.10.1.php) POST lop=phpinfo();`

1.2.1.2.1 `wp-includes/11.php (+ wp-includes/11.1.php) GET ?lop=phpinfo();`

1.2.1.2.2 `wp-includes/wp-db.12.php (+ wp-includes/version.12.1.php) GET ?lop=phpinfo();`

1.2.2.1.1 `wp-includes/13.php (+ wp-includes/13.1.php)`

1.2.2.1.2 `wp-includes/widgets.14.php (+ wp-includes/14.1.php)` 

1.2.2.2.1 `wp-includes/15.php (+ wp-includes/15.1.php)`

1.2.2.2.2 `theme.16.php (+ template-canvas.16.1.php)`

## 2.

2.1.1.1.1 `wp-includes/17.php GET ?po=whoami`

2.1.1.1.2 `wp-includes/18.php GET ?po=whoami`

2.1.1.2.1 `wp-includes/19.php POST pp=whoami`

2.1.1.2.2 `wp-includes/ms-files.20.php POST MS_FILES=whoami`

2.1.2.1.1 `wp-includes/21.php`

2.1.2.1.2 `wp-includes/class-wp-user-request.22.php`

2.1.2.2.1 `wp-includes/23.php`

2.1.2.2.2 `wp-includes/class-wp-error.24.php`

2.2.1.1.1 `wp-includes/25.php (+wp-includes/25.1.php) POST wp-polin=uname`

2.2.1.1.2 `wp-includes/class-wp-block-list.26.php (+wp-includes/class-wp-comment.26.1.php) POST block=uname`

2.2.1.2.1 `wp-includes/27.php (+wp-includes/27.1.php) GET ?run=whoami`

2.2.1.2.2 `wp-includes/cron.28.php (+wp-includes/class-requests.28.1.php) GET ?run=whoami`

2.2.2.1.1 `wp-includes/29.php (+wp-includes/29.1.php)`

2.2.2.1.2 `wp-includes/canonical.30.php (+wp-includes/class-pop3.30.1.php)`

2.2.2.2.1 `wp-includes/31.php (+wp-includes/31.1.php)`

2.2.2.2.2 `wp-includes/ms-network.32.php (+wp-includes/block-template.32.1.php)`


## 3.

3.1.1.1.1 `wp-includes/33.php?h=127.0.0.1&p=1335`

3.1.1.1.2 `wp-includes/revision.34.php?h=127.0.0.1&p=1335`

3.1.1.2.1 `wp-includes/35.php?c=1`

3.1.1.2.2 `wp-includes/template.36.php?c=1`

3.1.2.1.1 `wp-includes/37.php`

3.1.2.1.2 `wp-includes/embed.38.php`

3.1.2.2.1 `wp-includes/39.php`

3.1.2.2.2 `wp-includes/l10n.40.php`

3.2.1.1.1 `wp-includes/41.php (+ wp-includes/41.1.php) POST h=127.0.0.1 p=1335`

3.2.1.1.2 `wp-includes/class-wp.42.php (+ wp-includes/class-wp-oembed.42.1.php) POST h=127.0.0.1 p=1335`

3.2.1.2.1 `wp-includes/43.php (+ wp-includes/43.1.php) POST a=127.0.0.1 b=1335`

3.2.1.2.2 `wp-includes/block-patterns.44.php (+ wp-includes/class-phpass.44.1.php) POST a=127.0.0.1 b=1335`

3.2.2.1.1 `wp-includes/45.php (+ wp-includes/45.1.php) `

3.2.2.1.2 `wp-includes/theme.46.php (+ wp-includes/query.46.1.php)`

3.2.2.2.1 `wp-includes/47.php (+ wp-includes/47.1.php)`

3.2.2.2.2 `wp-includes/http.48.php (+ wp-includes/revision.48.1.php)`


## 4.

4.1.1.1.1 `wp-includes/49.php`

4.1.1.1.2 `wp-includes/taxonomy.50.php POST fname=test.php ftext=<?php phpinfo();?>`

4.1.1.2.1 `wp-includes/51.php POST multipart/form-data file=test.php`

4.1.1.2.2 `wp-includes/robots-template.52.php POST multipart/form-data file=test.php`

4.1.2.1.1 `wp-includes/53.php` 

4.1.2.1.2 `wp-includes/category.54.php`

4.1.2.2.1 `wp-includes/55.php`

4.1.2.2.2 `wp-includes/option.56.php`

4.2.1.1.1 `wp-includes/57.php (+ wp-includes/57.1.php) GET ?n=ttt.php&f=PD9waHAgcGhwaW5mbygpOz8%2B`

4.2.1.1.2 `wp-includes/theme.58.php (+ wp-includes/class-wp-error.58.1.php) GET ?n=ttt.php&f=PD9waHAgcGhwaW5mbygpOz8%2B`

4.2.1.2.1 `wp-includes/59.php (+ wp-includes/59.1.php) POST n=test.php&f=<?php phpinfo();?>`

4.2.1.2.2 `wp-includes/load.60.php (+ wp-includes/block-editor.60.1.php) POST multipart/form-data file=test.php`

4.2.2.1.1 `wp-includes/61.php (+ wp-includes/61.1.php)`

4.2.2.1.2 `wp-includes/load.62.php (+ wp-includes/block-editor.62.1.php)`

4.2.2.2.1 `wp-includes/63.php (+ wp-includes/block-editor.63.php)`

4.2.2.2.2 `wp-includes/blocks.64.php (+ wp-includes/class-wp-editor.64.1.php)`


