<?php include('header.php');?>
<link rel='stylesheet' id='tribe-common-skeleton-style-css'
  href='https://dtdance.wpenginepowered.com/wp-content/plugins/the-events-calendar/common/src/resources/css/common-skeleton.min.css?ver=4.12.15'
  type='text/css' media='all' />
<link rel='stylesheet' id='tribe-tooltip-css'
  href='https://dtdance.wpenginepowered.com/wp-content/plugins/the-events-calendar/common/src/resources/css/tooltip.min.css?ver=4.12.15'
  type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-css'
  href='https://dtdance.wpenginepowered.com/wp-includes/css/dist/block-library/style.min.css?ver=6.1.1' type='text/css'
  media='all' />
<style id='wp-block-library-theme-inline-css' type='text/css'>
  .wp-block-audio figcaption {
    color: #555;
    font-size: 13px;
    text-align: center
  }

  .is-dark-theme .wp-block-audio figcaption {
    color: hsla(0, 0%, 100%, .65)
  }

  .wp-block-audio {
    margin: 0 0 1em
  }

  .wp-block-code {
    border: 1px solid #ccc;
    border-radius: 4px;
    font-family: Menlo, Consolas, monaco, monospace;
    padding: .8em 1em
  }

  .wp-block-embed figcaption {
    color: #555;
    font-size: 13px;
    text-align: center
  }

  .is-dark-theme .wp-block-embed figcaption {
    color: hsla(0, 0%, 100%, .65)
  }

  .wp-block-embed {
    margin: 0 0 1em
  }

  .blocks-gallery-caption {
    color: #555;
    font-size: 13px;
    text-align: center
  }

  .is-dark-theme .blocks-gallery-caption {
    color: hsla(0, 0%, 100%, .65)
  }

  .wp-block-image figcaption {
    color: #555;
    font-size: 13px;
    text-align: center
  }

  .is-dark-theme .wp-block-image figcaption {
    color: hsla(0, 0%, 100%, .65)
  }

  .wp-block-image {
    margin: 0 0 1em
  }

  .wp-block-pullquote {
    border-top: 4px solid;
    border-bottom: 4px solid;
    margin-bottom: 1.75em;
    color: currentColor
  }

  .wp-block-pullquote__citation,
  .wp-block-pullquote cite,
  .wp-block-pullquote footer {
    color: currentColor;
    text-transform: uppercase;
    font-size: .8125em;
    font-style: normal
  }

  .wp-block-quote {
    border-left: .25em solid;
    margin: 0 0 1.75em;
    padding-left: 1em
  }

  .wp-block-quote cite,
  .wp-block-quote footer {
    color: currentColor;
    font-size: .8125em;
    position: relative;
    font-style: normal
  }

  .wp-block-quote.has-text-align-right {
    border-left: none;
    border-right: .25em solid;
    padding-left: 0;
    padding-right: 1em
  }

  .wp-block-quote.has-text-align-center {
    border: none;
    padding-left: 0
  }

  .wp-block-quote.is-large,
  .wp-block-quote.is-style-large,
  .wp-block-quote.is-style-plain {
    border: none
  }

  .wp-block-search .wp-block-search__label {
    font-weight: 700
  }

  .wp-block-search__button {
    border: 1px solid #ccc;
    padding: .375em .625em
  }

  :where(.wp-block-group.has-background) {
    padding: 1.25em 2.375em
  }

  .wp-block-separator.has-css-opacity {
    opacity: .4
  }

  .wp-block-separator {
    border: none;
    border-bottom: 2px solid;
    margin-left: auto;
    margin-right: auto
  }

  .wp-block-separator.has-alpha-channel-opacity {
    opacity: 1
  }

  .wp-block-separator:not(.is-style-wide):not(.is-style-dots) {
    width: 100px
  }

  .wp-block-separator.has-background:not(.is-style-dots) {
    border-bottom: none;
    height: 1px
  }

  .wp-block-separator.has-background:not(.is-style-wide):not(.is-style-dots) {
    height: 2px
  }

  .wp-block-table {
    margin: "0 0 1em 0"
  }

  .wp-block-table thead {
    border-bottom: 3px solid
  }

  .wp-block-table tfoot {
    border-top: 3px solid
  }

  .wp-block-table td,
  .wp-block-table th {
    word-break: normal
  }

  .wp-block-table figcaption {
    color: #555;
    font-size: 13px;
    text-align: center
  }

  .is-dark-theme .wp-block-table figcaption {
    color: hsla(0, 0%, 100%, .65)
  }

  .wp-block-video figcaption {
    color: #555;
    font-size: 13px;
    text-align: center
  }

  .is-dark-theme .wp-block-video figcaption {
    color: hsla(0, 0%, 100%, .65)
  }

  .wp-block-video {
    margin: 0 0 1em
  }

  .wp-block-template-part.has-background {
    padding: 1.25em 2.375em;
    margin-top: 0;
    margin-bottom: 0
  }
</style>
<link rel='stylesheet' id='wc-block-vendors-style-css'
  href='https://dtdance.wpenginepowered.com/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/vendors-style.css?ver=3.8.1'
  type='text/css' media='all' />
<link rel='stylesheet' id='wc-block-style-css'
  href='https://dtdance.wpenginepowered.com/wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/style.css?ver=3.8.1'
  type='text/css' media='all' />
<link rel='stylesheet' id='jquery-selectBox-css'
  href='https://dtdance.wpenginepowered.com/wp-content/plugins/yith-woocommerce-wishlist/assets/css/jquery.selectBox.css?ver=1.2.0'
  type='text/css' media='all' />
<link rel='stylesheet' id='yith-wcwl-font-awesome-css'
  href='https://dtdance.wpenginepowered.com/wp-content/plugins/yith-woocommerce-wishlist/assets/css/font-awesome.css?ver=4.7.0'
  type='text/css' media='all' />
<link rel='stylesheet' id='yith-wcwl-main-css'
  href='https://dtdance.wpenginepowered.com/wp-content/plugins/yith-woocommerce-wishlist/assets/css/style.css?ver=3.0.17'
  type='text/css' media='all' />
<link rel='stylesheet' id='classic-theme-styles-css'
  href='https://dtdance.wpenginepowered.com/wp-includes/css/classic-themes.min.css?ver=1' type='text/css' media='all' />
<style id='global-styles-inline-css' type='text/css'>
  body {
    --wp--preset--color--black: #000000;
    --wp--preset--color--cyan-bluish-gray: #abb8c3;
    --wp--preset--color--white: #ffffff;
    --wp--preset--color--pale-pink: #f78da7;
    --wp--preset--color--vivid-red: #cf2e2e;
    --wp--preset--color--luminous-vivid-orange: #ff6900;
    --wp--preset--color--luminous-vivid-amber: #fcb900;
    --wp--preset--color--light-green-cyan: #7bdcb5;
    --wp--preset--color--vivid-green-cyan: #00d084;
    --wp--preset--color--pale-cyan-blue: #8ed1fc;
    --wp--preset--color--vivid-cyan-blue: #0693e3;
    --wp--preset--color--vivid-purple: #9b51e0;
    --wp--preset--color--primary: #571f9c;
    --wp--preset--color--secondary: #ec008c;
    --wp--preset--color--tertiary: #ffe301;
    --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
    --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
    --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
    --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
    --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
    --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
    --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
    --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
    --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
    --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
    --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
    --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
    --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
    --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
    --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
    --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
    --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
    --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
    --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
    --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
    --wp--preset--font-size--small: 13px;
    --wp--preset--font-size--medium: 20px;
    --wp--preset--font-size--large: 36px;
    --wp--preset--font-size--x-large: 42px;
    --wp--preset--spacing--20: 0.44rem;
    --wp--preset--spacing--30: 0.67rem;
    --wp--preset--spacing--40: 1rem;
    --wp--preset--spacing--50: 1.5rem;
    --wp--preset--spacing--60: 2.25rem;
    --wp--preset--spacing--70: 3.38rem;
    --wp--preset--spacing--80: 5.06rem;
  }

  :where(.is-layout-flex) {
    gap: 0.5em;
  }

  body .is-layout-flow>.alignleft {
    float: left;
    margin-inline-start: 0;
    margin-inline-end: 2em;
  }

  body .is-layout-flow>.alignright {
    float: right;
    margin-inline-start: 2em;
    margin-inline-end: 0;
  }

  body .is-layout-flow>.aligncenter {
    margin-left: auto !important;
    margin-right: auto !important;
  }

  body .is-layout-constrained>.alignleft {
    float: left;
    margin-inline-start: 0;
    margin-inline-end: 2em;
  }

  body .is-layout-constrained>.alignright {
    float: right;
    margin-inline-start: 2em;
    margin-inline-end: 0;
  }

  body .is-layout-constrained>.aligncenter {
    margin-left: auto !important;
    margin-right: auto !important;
  }

  body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
    max-width: var(--wp--style--global--content-size);
    margin-left: auto !important;
    margin-right: auto !important;
  }

  body .is-layout-constrained>.alignwide {
    max-width: var(--wp--style--global--wide-size);
  }

  body .is-layout-flex {
    display: flex;
  }

  body .is-layout-flex {
    flex-wrap: wrap;
    align-items: center;
  }

  body .is-layout-flex>* {
    margin: 0;
  }

  :where(.wp-block-columns.is-layout-flex) {
    gap: 2em;
  }

  .has-black-color {
    color: var(--wp--preset--color--black) !important;
  }

  .has-cyan-bluish-gray-color {
    color: var(--wp--preset--color--cyan-bluish-gray) !important;
  }

  .has-white-color {
    color: var(--wp--preset--color--white) !important;
  }

  .has-pale-pink-color {
    color: var(--wp--preset--color--pale-pink) !important;
  }

  .has-vivid-red-color {
    color: var(--wp--preset--color--vivid-red) !important;
  }

  .has-luminous-vivid-orange-color {
    color: var(--wp--preset--color--luminous-vivid-orange) !important;
  }

  .has-luminous-vivid-amber-color {
    color: var(--wp--preset--color--luminous-vivid-amber) !important;
  }

  .has-light-green-cyan-color {
    color: var(--wp--preset--color--light-green-cyan) !important;
  }

  .has-vivid-green-cyan-color {
    color: var(--wp--preset--color--vivid-green-cyan) !important;
  }

  .has-pale-cyan-blue-color {
    color: var(--wp--preset--color--pale-cyan-blue) !important;
  }

  .has-vivid-cyan-blue-color {
    color: var(--wp--preset--color--vivid-cyan-blue) !important;
  }

  .has-vivid-purple-color {
    color: var(--wp--preset--color--vivid-purple) !important;
  }

  .has-black-background-color {
    background-color: var(--wp--preset--color--black) !important;
  }

  .has-cyan-bluish-gray-background-color {
    background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
  }

  .has-white-background-color {
    background-color: var(--wp--preset--color--white) !important;
  }

  .has-pale-pink-background-color {
    background-color: var(--wp--preset--color--pale-pink) !important;
  }

  .has-vivid-red-background-color {
    background-color: var(--wp--preset--color--vivid-red) !important;
  }

  .has-luminous-vivid-orange-background-color {
    background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
  }

  .has-luminous-vivid-amber-background-color {
    background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
  }

  .has-light-green-cyan-background-color {
    background-color: var(--wp--preset--color--light-green-cyan) !important;
  }

  .has-vivid-green-cyan-background-color {
    background-color: var(--wp--preset--color--vivid-green-cyan) !important;
  }

  .has-pale-cyan-blue-background-color {
    background-color: var(--wp--preset--color--pale-cyan-blue) !important;
  }

  .has-vivid-cyan-blue-background-color {
    background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
  }

  .has-vivid-purple-background-color {
    background-color: var(--wp--preset--color--vivid-purple) !important;
  }

  .has-black-border-color {
    border-color: var(--wp--preset--color--black) !important;
  }

  .has-cyan-bluish-gray-border-color {
    border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
  }

  .has-white-border-color {
    border-color: var(--wp--preset--color--white) !important;
  }

  .has-pale-pink-border-color {
    border-color: var(--wp--preset--color--pale-pink) !important;
  }

  .has-vivid-red-border-color {
    border-color: var(--wp--preset--color--vivid-red) !important;
  }

  .has-luminous-vivid-orange-border-color {
    border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
  }

  .has-luminous-vivid-amber-border-color {
    border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
  }

  .has-light-green-cyan-border-color {
    border-color: var(--wp--preset--color--light-green-cyan) !important;
  }

  .has-vivid-green-cyan-border-color {
    border-color: var(--wp--preset--color--vivid-green-cyan) !important;
  }

  .has-pale-cyan-blue-border-color {
    border-color: var(--wp--preset--color--pale-cyan-blue) !important;
  }

  .has-vivid-cyan-blue-border-color {
    border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
  }

  .has-vivid-purple-border-color {
    border-color: var(--wp--preset--color--vivid-purple) !important;
  }

  .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
    background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
  }

  .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
    background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
  }

  .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
    background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
  }

  .has-luminous-vivid-orange-to-vivid-red-gradient-background {
    background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
  }

  .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
    background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
  }

  .has-cool-to-warm-spectrum-gradient-background {
    background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
  }

  .has-blush-light-purple-gradient-background {
    background: var(--wp--preset--gradient--blush-light-purple) !important;
  }

  .has-blush-bordeaux-gradient-background {
    background: var(--wp--preset--gradient--blush-bordeaux) !important;
  }

  .has-luminous-dusk-gradient-background {
    background: var(--wp--preset--gradient--luminous-dusk) !important;
  }

  .has-pale-ocean-gradient-background {
    background: var(--wp--preset--gradient--pale-ocean) !important;
  }

  .has-electric-grass-gradient-background {
    background: var(--wp--preset--gradient--electric-grass) !important;
  }

  .has-midnight-gradient-background {
    background: var(--wp--preset--gradient--midnight) !important;
  }

  .has-small-font-size {
    font-size: var(--wp--preset--font-size--small) !important;
  }

  .has-medium-font-size {
    font-size: var(--wp--preset--font-size--medium) !important;
  }

  .has-large-font-size {
    font-size: var(--wp--preset--font-size--large) !important;
  }

  .has-x-large-font-size {
    font-size: var(--wp--preset--font-size--x-large) !important;
  }

  .wp-block-navigation a:where(:not(.wp-element-button)) {
    color: inherit;
  }

  :where(.wp-block-columns.is-layout-flex) {
    gap: 2em;
  }

  .wp-block-pullquote {
    font-size: 1.5em;
    line-height: 1.6;
  }
</style>
<link rel='stylesheet' id='contact-form-7-css'
  href='https://dtdance.wpenginepowered.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.3.1'
  type='text/css' media='all' />
<link rel='stylesheet' id='dt-class-addon-css'
  href='https://dtdance.wpenginepowered.com/wp-content/plugins/designthemes-class-addon/css/classes.css?ver=6.1.1'
  type='text/css' media='all' />
<link rel='stylesheet' id='dt-animation-css-css'
  href='https://dtdance.wpenginepowered.com/wp-content/plugins/designthemes-core-features/shortcodes/css/animations.css?ver=6.1.1'
  type='text/css' media='all' />
<link rel='stylesheet' id='dt-slick-css-css'
  href='https://dtdance.wpenginepowered.com/wp-content/plugins/designthemes-core-features/shortcodes/css/slick.css?ver=6.1.1'
  type='text/css' media='all' />
<link rel='stylesheet' id='dt-sc-css-css'
  href='https://dtdance.wpenginepowered.com/wp-content/plugins/designthemes-core-features/shortcodes/css/shortcodes.css?ver=6.1.1'
  type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'
  href='https://dtdance.wpenginepowered.com/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.3.3'
  type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
  #rs-demo-id {}
</style>
<style id='woocommerce-inline-inline-css' type='text/css'>
  .woocommerce form .form-row .required {
    visibility: visible;
  }
</style>
<link rel='stylesheet' id='woocommerce_prettyPhoto_css-css'
  href='https://dtdance.wpenginepowered.com/wp-content/plugins/woocommerce/assets/css/prettyPhoto.css?ver=6.1.1'
  type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_front-css'
  href='https://dtdance.wpenginepowered.com/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=6.5.0'
  type='text/css' media='all' />
<link rel='stylesheet' id='bsf-Defaults-css'
  href='https://dtdance.wpenginepowered.com/wp-content/uploads/smile_fonts/Defaults/Defaults.css?ver=3.19.8'
  type='text/css' media='all' />
<link rel='stylesheet' id='ultimate-style-min-css'
  href='https://dtdance.wpenginepowered.com/wp-content/plugins/Ultimate_VC_Addons/assets/min-css/ultimate.min.css?ver=3.19.8'
  type='text/css' media='all' />
<link rel='stylesheet' id='dance-css'
  href='https://dtdance.wpenginepowered.com/wp-content/themes/dance/style.css?ver=3.2' type='text/css' media='all' />
<link rel='stylesheet' id='dance-base-css'
  href='https://dtdance.wpenginepowered.com/wp-content/themes/dance/css/base.css?ver=3.2' type='text/css' media='all' />
<link rel='stylesheet' id='dance-grid-css'
  href='https://dtdance.wpenginepowered.com/wp-content/themes/dance/css/grid.css?ver=3.2' type='text/css' media='all' />
<link rel='stylesheet' id='dance-widget-css'
  href='https://dtdance.wpenginepowered.com/wp-content/themes/dance/css/widget.css?ver=3.2' type='text/css'
  media='all' />
<link rel='stylesheet' id='dance-layout-css'
  href='https://dtdance.wpenginepowered.com/wp-content/themes/dance/css/layout.css?ver=3.2' type='text/css'
  media='all' />
<link rel='stylesheet' id='dance-blog-css'
  href='https://dtdance.wpenginepowered.com/wp-content/themes/dance/css/blog.css?ver=3.2' type='text/css' media='all' />
<link rel='stylesheet' id='dance-portfolio-css'
  href='https://dtdance.wpenginepowered.com/wp-content/themes/dance/css/portfolio.css?ver=3.2' type='text/css'
  media='all' />
<link rel='stylesheet' id='dance-contact-css'
  href='https://dtdance.wpenginepowered.com/wp-content/themes/dance/css/contact.css?ver=3.2' type='text/css'
  media='all' />
<link rel='stylesheet' id='dance-custom-class-css'
  href='https://dtdance.wpenginepowered.com/wp-content/themes/dance/css/custom-class.css?ver=3.2' type='text/css'
  media='all' />
<link rel='stylesheet' id='prettyphoto-css'
  href='https://dtdance.wpenginepowered.com/wp-content/plugins/js_composer/assets/lib/prettyphoto/css/prettyPhoto.min.css?ver=6.5.0'
  type='text/css' media='all' />
<link rel='stylesheet' id='custom-font-awesome-css'
  href='https://dtdance.wpenginepowered.com/wp-content/themes/dance/css/font-awesome.min.css?ver=4.3.0' type='text/css'
  media='all' />
<link rel='stylesheet' id='pe-icon-7-stroke-css'
  href='https://dtdance.wpenginepowered.com/wp-content/themes/dance/css/pe-icon-7-stroke.css?ver=6.1.1' type='text/css'
  media='all' />
<link rel='stylesheet' id='stroke-gap-icons-style-css'
  href='https://dtdance.wpenginepowered.com/wp-content/themes/dance/css/stroke-gap-icons-style.css?ver=6.1.1'
  type='text/css' media='all' />
<link rel='stylesheet' id='icon-moon-css'
  href='https://dtdance.wpenginepowered.com/wp-content/themes/dance/css/icon-moon.css?ver=6.1.1' type='text/css'
  media='all' />
<link rel='stylesheet' id='material-design-iconic-css'
  href='https://dtdance.wpenginepowered.com/wp-content/themes/dance/css/material-design-iconic-font.min.css?ver=6.1.1'
  type='text/css' media='all' />
<link rel='stylesheet' id='dance-gutenberg-css'
  href='https://dtdance.wpenginepowered.com/wp-content/themes/dance/css/gutenberg.css?ver=3.2' type='text/css'
  media='all' />
<link rel='stylesheet' id='dance-woo-css'
  href='https://dtdance.wpenginepowered.com/wp-content/themes/dance/css/woocommerce.css?ver=3.2' type='text/css'
  media='all' />
<link rel='stylesheet' id='dance-skin-css'
  href='https://dtdance.wpenginepowered.com/wp-content/themes/dance/css/skins/blue/style.css?ver=6.1.1' type='text/css'
  media='all' />
<link rel='stylesheet' id='dance-customevent-css'
  href='https://dtdance.wpenginepowered.com/wp-content/themes/dance/tribe-events/custom.css?ver=3.2' type='text/css'
  media='all' />
<link rel='stylesheet' id='dance-popup-css-css'
  href='https://dtdance.wpenginepowered.com/wp-content/themes/dance/framework/js/magnific/magnific-popup.css?ver=3.2'
  type='text/css' media='all' />
<link rel='stylesheet' id='dance-custom-css'
  href='https://dtdance.wpenginepowered.com/wp-content/themes/dance/css/custom.css?ver=3.2' type='text/css'
  media='all' />
<script type='text/javascript' id='jquery-core-js-extra'>
  /* <![CDATA[ */
  var dttheme_urls = { "theme_base_url": "https:\/\/dtdance.wpengine.com\/wp-content\/themes\/dance", "framework_base_url": "https:\/\/dtdance.wpengine.com\/wp-content\/themes\/dance\/framework\/", "ajaxurl": "https:\/\/dtdance.wpengine.com\/wp-admin\/admin-ajax.php", "url": "https:\/\/dtdance.wpengine.com", "stickynav": "disable", "stickyele": ".main-header-wrapper", "isRTL": "", "loadingbar": "disable", "advOptions": "Show Advanced Options" };
/* ]]> */
</script>
<script type='text/javascript' src='https://dtdance.wpenginepowered.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.1'
  id='jquery-core-js'></script>
<script type='text/javascript'
  src='https://dtdance.wpenginepowered.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2'
  id='jquery-migrate-js'></script>
<script type='text/javascript'
  src='https://dtdance.wpenginepowered.com/wp-content/plugins/revslider/public/assets/js/rbtools.min.js?ver=6.3.3'
  id='tp-tools-js'></script>
<script type='text/javascript'
  src='https://dtdance.wpenginepowered.com/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.3.3'
  id='revmin-js'></script>
<script type='text/javascript'
  src='https://dtdance.wpenginepowered.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'
  id='jquery-blockui-js'></script>
<script type='text/javascript' id='wc-add-to-cart-js-extra'>
  /* <![CDATA[ */
  var wc_add_to_cart_params = { "ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%", "i18n_view_cart": "View cart", "cart_url": "https:\/\/dtdance.wpengine.com\/cart\/", "is_cart": "", "cart_redirect_after_add": "no" };
/* ]]> */
</script>
<script type='text/javascript'
  src='https://dtdance.wpenginepowered.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=4.8.3'
  id='wc-add-to-cart-js'></script>
<script type='text/javascript'
  src='https://dtdance.wpenginepowered.com/wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js?ver=6.5.0'
  id='vc_woocommerce-add-to-cart-js-js'></script>
<script type='text/javascript' src='https://dtdance.wpenginepowered.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2'
  id='jquery-ui-core-js'></script>
<script type='text/javascript'
  src='https://dtdance.wpenginepowered.com/wp-content/plugins/Ultimate_VC_Addons/assets/min-js/ultimate.min.js?ver=3.19.8'
  id='ultimate-script-js'></script>
<script type='text/javascript'
  src='https://dtdance.wpenginepowered.com/wp-content/plugins/Ultimate_VC_Addons/assets/min-js/ultimate_bg.min.js?ver=3.19.8'
  id='ultimate-row-bg-js'></script>
<script type='text/javascript'
  src='https://dtdance.wpenginepowered.com/wp-content/themes/dance/framework/js/modernizr.custom.js?ver=6.1.1'
  id='modernizr-custom-js'></script>
<link rel="https://api.w.org/" href="https://dtdance.wpengine.com/wp-json/" />
<link rel="alternate" type="application/json" href="https://dtdance.wpengine.com/wp-json/wp/v2/dt_class/8393" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://dtdance.wpengine.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml"
  href="https://dtdance.wpengine.com/wp-includes/wlwmanifest.xml" />
<link rel="canonical" href="https://dtdance.wpengine.com/dt_class/american-rhythm/" />
<link rel='shortlink' href='https://dtdance.wpengine.com/?p=8393' />
<link rel="alternate" type="application/json+oembed"
  href="https://dtdance.wpengine.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdtdance.wpengine.com%2Fdt_class%2Famerican-rhythm%2F" />
<link rel="alternate" type="text/xml+oembed"
  href="https://dtdance.wpengine.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdtdance.wpengine.com%2Fdt_class%2Famerican-rhythm%2F&#038;format=xml" />
<meta name="tec-api-version" content="v1">
<meta name="tec-api-origin" content="https://dtdance.wpengine.com">
<link rel="https://theeventscalendar.com/" href="https://dtdance.wpengine.com/wp-json/tribe/events/v1/" />
<script type="text/javascript">
  var jQueryMigrateHelperHasSentDowngrade = false;

  window.onerror = function (msg, url, line, col, error) {
    // Break out early, do not processing if a downgrade reqeust was already sent.
    if (jQueryMigrateHelperHasSentDowngrade) {
      return true;
    }

    var xhr = new XMLHttpRequest();
    var nonce = '6e54631642';
    var jQueryFunctions = [
      'andSelf',
      'browser',
      'live',
      'boxModel',
      'support.boxModel',
      'size',
      'swap',
      'clean',
      'sub',
    ];
    var match_pattern = /\)\.(.+?) is not a function/;
    var erroredFunction = msg.match(match_pattern);

    // If there was no matching functions, do not try to downgrade.
    if (typeof erroredFunction !== 'object' || typeof erroredFunction[1] === "undefined" || -1 === jQueryFunctions.indexOf(erroredFunction[1])) {
      return true;
    }

    // Set that we've now attempted a downgrade request.
    jQueryMigrateHelperHasSentDowngrade = true;

    xhr.open('POST', 'https://dtdance.wpengine.com/wp-admin/admin-ajax.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
      var response,
        reload = false;

      if (200 === xhr.status) {
        try {
          response = JSON.parse(xhr.response);

          reload = response.data.reload;
        } catch (e) {
          reload = false;
        }
      }

      // Automatically reload the page if a deprecation caused an automatic downgrade, ensure visitors get the best possible experience.
      if (reload) {
        location.reload();
      }
    };

    xhr.send(encodeURI('action=jquery-migrate-downgrade-version&_wpnonce=' + nonce));

    // Suppress error alerts in older browsers
    return true;
  }
</script>

<noscript>
  <style>
    .woocommerce-product-gallery {
      opacity: 1 !important;
    }
  </style>
</noscript>
<style type="text/css">
  .recentcomments a {
    display: inline !important;
    padding: 0 !important;
    margin: 0 !important;
  }
</style>
<meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress." />
<meta name="generator"
  content="Powered by Slider Revolution 6.3.3 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
<link rel="icon" href="https://dtdance.wpenginepowered.com/wp-content/uploads/2017/08/cropped-img-32x32.png"
  sizes="32x32" />
<link rel="icon" href="https://dtdance.wpenginepowered.com/wp-content/uploads/2017/08/cropped-img-192x192.png"
  sizes="192x192" />
<link rel="apple-touch-icon"
  href="https://dtdance.wpenginepowered.com/wp-content/uploads/2017/08/cropped-img-180x180.png" />
<meta name="msapplication-TileImage"
  content="https://dtdance.wpengine.com/wp-content/uploads/2017/08/cropped-img-270x270.png" />
<script type="text/javascript">function setREVStartSize(e) {
    //window.requestAnimationFrame(function() {				 
    window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
    window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
    try {
      var pw = document.getElementById(e.c).parentNode.offsetWidth,
        newh;
      pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
      e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
      e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
      e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
      e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
      e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
      e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
      e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
      if (e.layout === "fullscreen" || e.l === "fullscreen")
        newh = Math.max(e.mh, window.RSIH);
      else {
        e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
        for (var i in e.rl) if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
        e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
        e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
        for (var i in e.rl) if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

        var nl = new Array(e.rl.length),
          ix = 0,
          sl;
        e.tabw = e.tabhide >= pw ? 0 : e.tabw;
        e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
        e.tabh = e.tabhide >= pw ? 0 : e.tabh;
        e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
        for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
        sl = nl[0];
        for (var i in nl) if (sl > nl[i] && nl[i] > 0) { sl = nl[i]; ix = i; }
        var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
        newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
      }
      if (window.rs_init_css === undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));
      document.getElementById(e.c).height = newh + "px";
      window.rs_init_css.innerHTML += "#" + e.c + "_wrapper { height: " + newh + "px }";
    } catch (e) {
      console.log("Failure at Presize of Slider:" + e)
    }
    //});
  };</script>
<style type="text/css" id="wp-custom-css">
  @media only screen and (max-width: 767px) {
    #header-wrapper.light #main-menu ul.menu>li>a {
      color: #571f9c;
    }
  }
</style>
<style id="kirki-inline-styles">
  body,
  .wp-block-pullquote {
    color: #777777;
  }

  a {
    color: #571f9c;
  }

  a:hover {
    color: #333333;
  }

  .main-title-section h1,
  h1.simple-title {
    font-family: Open Sans;
    font-size: 20px;
    font-weight: 400;
    letter-spacing: 0.5px;
    text-transform: none;
    color: #000000;
  }

  div.footer-widgets h3.widgettitle {
    font-family: Roboto Condensed;
    font-size: 20px;
    font-weight: 700;
    line-height: 36px;
    text-align: left;
    text-transform: none;
    color: #2b2b2b;
  }

  div.footer-widgets .widget {
    font-family: Roboto Condensed;
    font-size: 14px;
    font-weight: 300;
    line-height: 24px;
    text-align: left;
    text-transform: none;
    color: #333333;
  }

  /* cyrillic-ext */
  @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-stretch: normal;
    font-display: swap;
    src: url(https://dtdance.wpengine.com/wp-content/fonts/open-sans/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsjZ0B4taVQUwaEQXjN_mQ.woff) format('woff');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
  }

  /* cyrillic */
  @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-stretch: normal;
    font-display: swap;
    src: url(https://dtdance.wpengine.com/wp-content/fonts/open-sans/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsjZ0B4kaVQUwaEQXjN_mQ.woff) format('woff');
    unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
  }

  /* greek-ext */
  @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-stretch: normal;
    font-display: swap;
    src: url(https://dtdance.wpengine.com/wp-content/fonts/open-sans/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsjZ0B4saVQUwaEQXjN_mQ.woff) format('woff');
    unicode-range: U+1F00-1FFF;
  }

  /* greek */
  @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-stretch: normal;
    font-display: swap;
    src: url(https://dtdance.wpengine.com/wp-content/fonts/open-sans/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsjZ0B4jaVQUwaEQXjN_mQ.woff) format('woff');
    unicode-range: U+0370-03FF;
  }

  /* hebrew */
  @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-stretch: normal;
    font-display: swap;
    src: url(https://dtdance.wpengine.com/wp-content/fonts/open-sans/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsjZ0B4iaVQUwaEQXjN_mQ.woff) format('woff');
    unicode-range: U+0590-05FF, U+200C-2010, U+20AA, U+25CC, U+FB1D-FB4F;
  }

  /* vietnamese */
  @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-stretch: normal;
    font-display: swap;
    src: url(https://dtdance.wpengine.com/wp-content/fonts/open-sans/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsjZ0B4vaVQUwaEQXjN_mQ.woff) format('woff');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
  }

  /* latin-ext */
  @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-stretch: normal;
    font-display: swap;
    src: url(https://dtdance.wpengine.com/wp-content/fonts/open-sans/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsjZ0B4uaVQUwaEQXjN_mQ.woff) format('woff');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }

  /* latin */
  @font-face {
    font-family: 'Open Sans';
    font-style: normal;
    font-weight: 400;
    font-stretch: normal;
    font-display: swap;
    src: url(https://dtdance.wpengine.com/wp-content/fonts/open-sans/memSYaGs126MiZpBA-UvWbX2vVnXBbObj2OVZyOOSr4dVJWUgsjZ0B4gaVQUwaEQXjM.woff) format('woff');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }

  /* cyrillic-ext */
  @font-face {
    font-family: 'Roboto Condensed';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: url(https://dtdance.wpengine.com/wp-content/fonts/roboto-condensed/ieVi2ZhZI2eCN5jzbjEETS9weq8-33mZGCkYadlecyVC4A.woff) format('woff');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
  }

  /* cyrillic */
  @font-face {
    font-family: 'Roboto Condensed';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: url(https://dtdance.wpengine.com/wp-content/fonts/roboto-condensed/ieVi2ZhZI2eCN5jzbjEETS9weq8-33mZGCAYadlecyVC4A.woff) format('woff');
    unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
  }

  /* greek-ext */
  @font-face {
    font-family: 'Roboto Condensed';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: url(https://dtdance.wpengine.com/wp-content/fonts/roboto-condensed/ieVi2ZhZI2eCN5jzbjEETS9weq8-33mZGCgYadlecyVC4A.woff) format('woff');
    unicode-range: U+1F00-1FFF;
  }

  /* greek */
  @font-face {
    font-family: 'Roboto Condensed';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: url(https://dtdance.wpengine.com/wp-content/fonts/roboto-condensed/ieVi2ZhZI2eCN5jzbjEETS9weq8-33mZGCcYadlecyVC4A.woff) format('woff');
    unicode-range: U+0370-03FF;
  }

  /* vietnamese */
  @font-face {
    font-family: 'Roboto Condensed';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: url(https://dtdance.wpengine.com/wp-content/fonts/roboto-condensed/ieVi2ZhZI2eCN5jzbjEETS9weq8-33mZGCsYadlecyVC4A.woff) format('woff');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
  }

  /* latin-ext */
  @font-face {
    font-family: 'Roboto Condensed';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: url(https://dtdance.wpengine.com/wp-content/fonts/roboto-condensed/ieVi2ZhZI2eCN5jzbjEETS9weq8-33mZGCoYadlecyVC4A.woff) format('woff');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }

  /* latin */
  @font-face {
    font-family: 'Roboto Condensed';
    font-style: normal;
    font-weight: 300;
    font-display: swap;
    src: url(https://dtdance.wpengine.com/wp-content/fonts/roboto-condensed/ieVi2ZhZI2eCN5jzbjEETS9weq8-33mZGCQYadlecyU.woff) format('woff');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }

  /* cyrillic-ext */
  @font-face {
    font-family: 'Roboto Condensed';
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: url(https://dtdance.wpengine.com/wp-content/fonts/roboto-condensed/ieVi2ZhZI2eCN5jzbjEETS9weq8-32meGCkYadlecyVC4A.woff) format('woff');
    unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
  }

  /* cyrillic */
  @font-face {
    font-family: 'Roboto Condensed';
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: url(https://dtdance.wpengine.com/wp-content/fonts/roboto-condensed/ieVi2ZhZI2eCN5jzbjEETS9weq8-32meGCAYadlecyVC4A.woff) format('woff');
    unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
  }

  /* greek-ext */
  @font-face {
    font-family: 'Roboto Condensed';
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: url(https://dtdance.wpengine.com/wp-content/fonts/roboto-condensed/ieVi2ZhZI2eCN5jzbjEETS9weq8-32meGCgYadlecyVC4A.woff) format('woff');
    unicode-range: U+1F00-1FFF;
  }

  /* greek */
  @font-face {
    font-family: 'Roboto Condensed';
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: url(https://dtdance.wpengine.com/wp-content/fonts/roboto-condensed/ieVi2ZhZI2eCN5jzbjEETS9weq8-32meGCcYadlecyVC4A.woff) format('woff');
    unicode-range: U+0370-03FF;
  }

  /* vietnamese */
  @font-face {
    font-family: 'Roboto Condensed';
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: url(https://dtdance.wpengine.com/wp-content/fonts/roboto-condensed/ieVi2ZhZI2eCN5jzbjEETS9weq8-32meGCsYadlecyVC4A.woff) format('woff');
    unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
  }

  /* latin-ext */
  @font-face {
    font-family: 'Roboto Condensed';
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: url(https://dtdance.wpengine.com/wp-content/fonts/roboto-condensed/ieVi2ZhZI2eCN5jzbjEETS9weq8-32meGCoYadlecyVC4A.woff) format('woff');
    unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
  }

  /* latin */
  @font-face {
    font-family: 'Roboto Condensed';
    font-style: normal;
    font-weight: 700;
    font-display: swap;
    src: url(https://dtdance.wpengine.com/wp-content/fonts/roboto-condensed/ieVi2ZhZI2eCN5jzbjEETS9weq8-32meGCQYadlecyU.woff) format('woff');
    unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
  }
</style>
<style type="text/css" data-type="vc_shortcodes-custom-css">
  .vc_custom_1499234420460 {
    margin-top: 5px !important;
  }

  .vc_custom_1462774436952 {
    margin-top: 60px !important;
  }

  .vc_custom_1462774503405 {
    margin-top: 60px !important;
  }

  .vc_custom_1462777191544 {
    margin-bottom: 0px !important;
  }

  .vc_custom_1462777351380 {
    margin-top: 30px !important;
    margin-bottom: 50px !important;
  }

  .vc_custom_1462777572143 {
    margin-top: 40px !important;
  }

  .vc_custom_1501151064251 {
    margin-bottom: -9px !important;
  }

  .vc_custom_1462774492449 {
    margin-top: 8px !important;
    margin-bottom: 39px !important;
  }

  .vc_custom_1499333192317 {
    margin-bottom: 25px !important;
  }

  .vc_custom_1462777694221 {
    margin-bottom: 42px !important;
  }
</style><noscript>
  <style>
    .wpb_animate_when_almost_visible {
      opacity: 1;
    }
  </style>
</noscript></head>

<body
  class="dt_class-template-default single single-dt_class postid-8393 wp-embed-responsive theme-dance woocommerce-no-js tribe-no-js layout-wide fullwidth-header transparent-header header-on-slider woo-type1 wpb-js-composer js-comp-ver-6.5.0 vc_responsive">

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
      <filter id="wp-duotone-dark-grayscale">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0 0.498039215686" />
          <feFuncG type="table" tableValues="0 0.498039215686" />
          <feFuncB type="table" tableValues="0 0.498039215686" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
      <filter id="wp-duotone-grayscale">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0 1" />
          <feFuncG type="table" tableValues="0 1" />
          <feFuncB type="table" tableValues="0 1" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
      <filter id="wp-duotone-purple-yellow">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0.549019607843 0.988235294118" />
          <feFuncG type="table" tableValues="0 1" />
          <feFuncB type="table" tableValues="0.717647058824 0.254901960784" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
      <filter id="wp-duotone-blue-red">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0 1" />
          <feFuncG type="table" tableValues="0 0.278431372549" />
          <feFuncB type="table" tableValues="0.592156862745 0.278431372549" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
      <filter id="wp-duotone-midnight">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0 0" />
          <feFuncG type="table" tableValues="0 0.647058823529" />
          <feFuncB type="table" tableValues="0 1" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
      <filter id="wp-duotone-magenta-yellow">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0.780392156863 1" />
          <feFuncG type="table" tableValues="0 0.949019607843" />
          <feFuncB type="table" tableValues="0.352941176471 0.470588235294" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
      <filter id="wp-duotone-purple-green">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0.650980392157 0.403921568627" />
          <feFuncG type="table" tableValues="0 1" />
          <feFuncB type="table" tableValues="0.447058823529 0.4" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
    style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
    <defs>
      <filter id="wp-duotone-blue-orange">
        <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
          values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
        <feComponentTransfer color-interpolation-filters="sRGB">
          <feFuncR type="table" tableValues="0.0980392156863 1" />
          <feFuncG type="table" tableValues="0 0.662745098039" />
          <feFuncB type="table" tableValues="0.847058823529 0.419607843137" />
          <feFuncA type="table" tableValues="1 1" />
        </feComponentTransfer>
        <feComposite in2="SourceGraphic" operator="in" />
      </filter>
    </defs>
  </svg>
  <!-- **Wrapper** -->



  <!-- **Main** -->
  <div id="main">
    <section class="main-title-section-wrapper aligncenter"
      style="background:url(https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/breadcrumb-9.jpg) left top / auto repeat scroll;">
      <div class="container">
        <div class="main-title-section">
          <h1>Our Courses</h1>
        </div>
        <div class="breadcrumb"><a href="https://dtdance.wpengine.com/">Home</a><span class="fa default"></span><a
            href="https://dtdance.wpengine.com/dt_class/american-rhythm/">Course</a></div>
      </div>
    </section> <!-- ** Container ** -->
    <div class="container">
      <section id="primary" class="content-full-width">
        <article id="post-8393"
          class="post-8393 dt_class type-dt_class status-publish has-post-thumbnail hentry class_entries-arm-raise">
          <div data-vc-full-width="true" data-vc-full-width-init="false"
            class="vc_row wpb_row vc_row-fluid wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp">
            <div class="wpb_column vc_column_container vc_col-sm-12">
              <div class="vc_column-inner ">
                <div class="wpb_wrapper">
                  <ul class="dt-sc-vertical-nav ">
                    <li><a href="#one">Photography </a></li>
                    <li><a href="#two">Videography</a></li>
                    <li><a href="#three">Editing & Designing</a></li>
                    
                  </ul>
                  <div class="vc_empty_space" style="height: 48px"><span class="vc_empty_space_inner"></span></div>
                  <div id="one" class="vc_row wpb_row vc_inner vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                      <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                          <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="zoomInDown"
                            data-animation-delay="0.8" data-animation-duration="1" data-animation-iteration="1"
                            style="opacity:0;" data-opacity_start_effect="">
                            <div class="wpb_single_image wpb_content_element vc_align_center">

                              <figure class="wpb_wrapper vc_figure">
                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1230" height="896"
                                    src="https://mymodernmet.com/wp/wp-content/uploads/2020/02/online-photography-classes-thumbnail.jpg"
                                    class="vc_single_image-img attachment-full" alt="" decoding="async" loading="lazy"
                                    srcset="https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/blog2.jpg 1230w, https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/blog2-600x437.jpg 600w, https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/blog2-300x219.jpg 300w, https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/blog2-768x559.jpg 768w, https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/blog2-1024x746.jpg 1024w"
                                    sizes="(max-width: 1230px) 100vw, 1230px" /></div>
                              </figure>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                      <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                          <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="zoomInDown"
                            data-animation-delay="1.1" data-animation-duration="1" data-animation-iteration="1"
                            style="opacity:0;" data-opacity_start_effect="">
                            <div class="wpb_single_image wpb_content_element vc_align_center">

                              <figure class="wpb_wrapper vc_figure">
                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1230" height="896"
                                    src="https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/blog1.jpg"
                                    class="vc_single_image-img attachment-full" alt="" decoding="async" loading="lazy"
                                    srcset="https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/blog1.jpg 1230w, https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/blog1-600x437.jpg 600w, https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/blog1-300x219.jpg 300w, https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/blog1-768x559.jpg 768w, https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/blog1-1024x746.jpg 1024w"
                                    sizes="(max-width: 1230px) 100vw, 1230px" /></div>
                              </figure>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                      <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                          <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="zoomInDown"
                            data-animation-delay="1.4" data-animation-duration="1" data-animation-iteration="1"
                            style="opacity:0;" data-opacity_start_effect="">
                            <div class="wpb_single_image wpb_content_element vc_align_center">

                              <figure class="wpb_wrapper vc_figure">
                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1230" height="896"
                                    src="https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/blog3.jpg"
                                    class="vc_single_image-img attachment-full" alt="" decoding="async" loading="lazy"
                                    srcset="https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/blog3.jpg 1230w, https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/blog3-600x437.jpg 600w, https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/blog3-300x219.jpg 300w, https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/blog3-768x559.jpg 768w, https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/blog3-1024x746.jpg 1024w"
                                    sizes="(max-width: 1230px) 100vw, 1230px" /></div>
                              </figure>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="vc_empty_space" style="height: 21px"><span class="vc_empty_space_inner"></span></div>
                  <div class="wpb_text_column wpb_content_element  vc_custom_1499234420460 inherit">
                    <div class="wpb_wrapper">
                      <h3>Photography Courses</h3>
                      <div class="vc_empty_space" style="height: 5px"><span class="vc_empty_space_inner"></span></div>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit vitae porro reiciendis, similique rerum ullam iste doloremque? Deserunt officia eum in pariatur sint dolor recusandae, voluptatem natus iste molestiae sunt?</p>
                      <ul class='dt-sc-fancy-list  pink  circle-bullet'>
                            <li>Crash Course</li>
                            <li>Hobby Course</li>
                            <li>Comprehensive Course</li>
                            <li>Professional Course</li>
                          </ul>

                    </div>
                  </div>
                  <div id="two" class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1462774436952">
                    <div class="wpb_column vc_column_container vc_col-sm-6">
                      <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                          <div class="wpb_text_column wpb_content_element  inherit">
                            <div class="wpb_wrapper">
                              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati temporibus nam voluptatem tempora velit, commodi modi officia unde quod distinctio aspernatur qui impedit molestias optio natus eveniet similique. Totam fuga earum laboriosam similique! Veniam aut ex possimus delectus expedita modi.</p>
                              <h3>Crash Course</h3>

                            </div>
                          </div>

                          <div class="wpb_text_column wpb_content_element ">
                            <div class="wpb_wrapper">
                              <p>Who is it for – People on a tight budget and/or tight schedule </p>
<p>Curriculum – Minimum theory, mostly practical oriented</p>
<p>Duration – 7 weekdays (2 hr/day)</p>
<p>Investment – Rs. 15,000 + GST</p>
<h5>TOPICS COVERED </h5>
<p>- Lenses and their applications</p>
<p>- Focusing (Autofocus, Manual Focus, and Autofocus Modes)</p>
<p>- Exposure Triangle (Shutter Speed, Aperture, ISO)</p>
<p>- Shooting Modes (PASM)</p>
<p>- Depth of Field</p>
<p>- 1-2 Portrait Photography Sessions</p>
<p>- 1-2 Landscape Photography Sessions
</p>

                            </div>
                          </div>
                       
                          <!-- <ul class='dt-sc-fancy-list  pink  circle-bullet'>
                            <li>Makes the body slenderer and the figure more beautiful</li>
                            <li>Effectively reduces cellulite problems</li>
                            <li>Cleanses the body of waste substances and repairs blood and lymphatic circulation</li>
                            <li>Makes the skin smoother, more elastic, softer and revitalises dry skin</li>
                            <li>Reduces muscular and joint pains</li>
                          </ul> -->
                          <div class="vc_empty_space" style="height: 48px"><span class="vc_empty_space_inner"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-6">
                      <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                          <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInRight"
                            data-animation-delay="1.4" data-animation-duration="1" data-animation-iteration="1"
                            style="opacity:0;" data-opacity_start_effect="">
                            <div class="wpb_single_image wpb_content_element vc_align_left">

                              <figure class="wpb_wrapper vc_figure">
                                <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="1230" height="896"
                                    src="https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/blog4.jpg"
                                    class="vc_single_image-img attachment-full" alt="" decoding="async" loading="lazy"
                                    srcset="https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/blog4.jpg 1230w, https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/blog4-600x437.jpg 600w, https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/blog4-300x219.jpg 300w, https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/blog4-768x559.jpg 768w, https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/blog4-1024x746.jpg 1024w"
                                    sizes="(max-width: 1230px) 100vw, 1230px" /></div>
                                    <p>- Rules of Composition</p>
<p>- White Balance</p>
<p>- Metering Modes</p>
<p>- Exposure Compensation</p>
<p>- 1 Night Photography Session</p>
                              </figure>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div id="two" class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1462774436952">
                  <div class="wpb_column vc_column_container vc_col-sm-6">
                  <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                          <div class="wpb_text_column wpb_content_element  inherit">
                            <div class="wpb_wrapper">
                            <h3>Hobby Course</h3>
                         <p>Who is it for – People who want to learn the basics of photography as a casual hobby</p>
                         <p>Curriculum – Basic Photography Course [Theory + Practicals + Basic Editing]</p>
                         <p>Duration – 1 month (2hr/day)</p>
                         <p>Investment – Rs. 30,000 + GST</p>
                         <h5>TOPICS COVERED </h5>
<p>- Introduction & Definition of Photography</p>
<p>- DSLR/Mirrorless and its components, how DSLRs/Mirrorless work)</p>
<p>- Basic DSLR/Mirrorless buttons and their functions</p>
<p>- Lenses and types of lenses, focal length, types of lens mounts</p>
<p>- Focusing – Autofocus, Manual Focus, AutoFocus Modes</p>
<p>- Exposure Triangle : Aperture, Shutter Speed, ISO</p>
<p>- Shooting Modes : PASM</p>
<p>- Depth of Field</p>
<p>- White Balance</p>
<p>- Exposure Compensation</p>
<p>- Understanding Lighting</p>
<p>- Metering Modes : Matrix, Evaluative, Center-weighted, Spot etc.</p>
<p>- Built-in flash</p>
<p>- Rules of composition</p>
<p>- Basics of post-processing/editing</p>
<p>- 2-3 Portrait Photography Sessions</p>
<p>- 2-3 Landscape Photography Sessions</p>
<p>- 1-2 Night Photography Sessions</p>
<img src="https://www.transparentpng.com/thumb/camera-logo/camera-optics-design-images-Y8uSyy.png" alt="">

                            

<h3>Professional Course</h3>


<p>Who is it for – People looking to make a full-time career in any genre of photography </p>

<p>Curriculum – Basic + Advanced Photography Course [Theory + Practicals + Advanced Editing (Lightroom and Photoshop)] + multiple photography workshops in fashion, food/product, weddings and events etc. </p>

<p>Duration – 6 months (2hr/day)</p>


<p>Investment – Rs. 4,00,000 + GST</p>
<h5>TOPICS COVERED </h5>
<p>- Introduction & Definition of Photography</p>
<p>- DSLR/Mirrorless and its components, how DSLRs/Mirrorless work</p>
<p>- Basic DSLR/Mirrorless buttons and their functions</p>
<p>- Lenses and types of lenses, focal length, types of lens mounts</p>
<p>- Focusing – Autofocus, Manual Focus, AutoFocus Modes</p>
<p>- Exposure Triangle : Aperture, Shutter Speed, ISO</p>
<p>- Shooting Modes : PASM</p>

<p>- Depth of Field</p>
<p>- White Balance</p>
<p>- Exposure Compensation</p>
<p>- Bracketing</p>
<p>- Understanding Lighting</p>
<p>- Metering Modes : Matrix, Evaluative, Center-weighted, Spot etc.</p>
<p>- Rules of composition</p>
<p>- Built-in Flash and Off-Camera Flash (OCF)</p>
<p>- Flash Modifiers and Flash/Light Bouncing Techniques</p>
<p>- Light Modifiers</p>


<p>- Shooting in RAW</p>
<p>- RAW Image Processing</p>
<p>- Filters </p>
<p>- Studio Lighting</p>
<p>- Processing/Editing in Lightroom and Photoshop</p>
<p>- Building portfolio Website</p>
<p>- Pricing, Presentation, Marketing</p>

<p>- Workflow</p>
<p>- 3-4 Portrait Photography Sessions</p>
<p>- 3-4 Landscape Photography Sessions</p>
<p>- 1 Macro/Wildlife Photography Session</p>
<p>- 1-2 Night Photography Sessions</p>
<p>- 1 Astrophotography Session (seasonal)</p>
<p>- 1 Product Photography Workshop</p>

<p>- 1 or 2 Product/Food Styling Workshops</p>
<p>- 1 Weddings & Events Photography Workshops</p>
<p>- 2 Fashion Photography Workshops (1 Indoor and 1 Outdoor)</p>
<p>- Extra Workshops depending on your specialization</p>



                            </div>
                          </div>
                         
                          <div class="vc_empty_space" style="height: 48px"><span class="vc_empty_space_inner"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                     
                    <div class="wpb_column vc_column_container vc_col-sm-6">
                      
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                          <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInRight"
                            data-animation-delay="1.4" data-animation-duration="1" data-animation-iteration="1"
                            style="opacity:0;" data-opacity_start_effect="">
                            <div class="wpb_single_image wpb_content_element vc_align_left">
      <img src="https://speos-photo.com/wp-content/uploads/2021/04/young-photographer-banner.png" alt="">
      <h3>Comprehensive Course</h3>

</div>
</div>

<div class="wpb_text_column wpb_content_element ">
<div class="wpb_wrapper">
  <p>Who is it for – People who are serious about photography as a hobby and want to learn advanced techniques and skills   </p>
<p>Curriculum – Basic + Advanced Photography Course [Theory + Practicals + Advanced Editing (Lightroom and Photoshop)]</p>
<p>Duration – 2 months (2hr/day)</p>
<p>Investment – Rs. 50,000 + GST</p>
<h5>TOPICS COVERED </h5>
<p>- Introduction & Definition of Photography</p>
<p>- DSLR/Mirrorless and its components, how DSLRs/Mirrorless work</p>
<p>- Basic DSLR/Mirrorless buttons and their functions</p>
<p>- Lenses and types of lenses, focal length, types of lens mounts</p>
<p>- Focusing – Autofocus, Manual Focus, AutoFocus Modes</p>
<p>- Exposure Triangle : Aperture, Shutter Speed, ISO</p>
<p>- Shooting Modes : PASM</p>
<p>- Depth of Field</p>
<p>- White Balance</p>

<p>- Exposure Compensation</p>
<p>- Bracketing</p>
<p>- Understanding Lighting</p>
<p>- Metering Modes : Matrix, Evaluative, Center-weighted, Spot etc.</p>
<p>- Rules of composition</p>
<p>- Built-in Flash and Off-Camera Flash (OCF)</p>
<p>- Flash Modifiers and Flash/Light Bouncing Techniques</p>
<p>- Light Modifiers</p>
<p>- Shooting in RAW</p>

<p>- RAW Image Processing</p>
<p>- Filters</p>
<p>- Processing/Editing in Lightroom and Photoshop</p>
<p>- 3-4 Portrait Photography Sessions</p>
<p>- 3-4 Landscape Photography Sessions</p>
<p>- 1 Macro/Wildlife Photography Session</p>
<p>- 1-2 Night Photography Sessions</p>
<p>- 1 Astrophotography Session (seasonal and optional)</p>
<br><br><br>

<img src="https://www.pngmart.com/files/5/Photographer-PNG-Picture.png" alt="">
<button class="btn btn-warning">ENQUIRY NOW!</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <div id="three" class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1462774503405">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                          <div class="wpb_text_column wpb_content_element  vc_custom_1462774492449 inherit">
                            <div class="wpb_wrapper">
                              <h3>Fitness Training</h3>

                            </div>
                          </div>
                          <ul class='dt-sc-fancy-list  pink  circle-bullet'>
                            <li><strong>Filling type:</strong> Saline, Silicone Gel, or Highly Cohesive Silicone “Gummy
                              Bear” Implants. Neither is “best,” but there are some differences in cost, feel, and
                              incision requirements that you need to consider. Your cosmetic surgeon will help you find
                              the right implant type for you.</li>
                            <li><strong>Shape:</strong> Saline &amp; Silicone Gel implants are typically round, while
                              gummy bear implants come in shaped and round options. Round implants will typically
                              achieve a fuller upper pole (the top portion of your breast), while shaped implants lend a
                              gently sloping look to your breast profile. Both can look very natural with a skilled
                              cosmetic surgeon’s help.</li>
                            <li><strong>Profile:</strong> Your cosmetic surgeon will help you choose this based on your
                              existing proportions and your goals. Generally, patients with a more petite frame will
                              require a higher profile implant to achieve the desired size increase while ensuring the
                              implants are not too wide at the base.</li>
                            <li><strong>Size:</strong> Breast implants range in size from about 150cc to 800cc or
                              larger. Many patients require a different sized breast implant for each breast; this helps
                              to achieve the best possible symmetry. The size you choose depends on your existing breast
                              size, your personal goals, and your cosmetic surgeon’s recommendations.</li>
                          </ul>
                          <div class="vc_empty_space" style="height: 75px"><span class="vc_empty_space_inner"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="four" class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1462777191544">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                          <div class="wpb_text_column wpb_content_element  inherit">
                            <div class="wpb_wrapper">
                              <h3>Diet Maintenance</h3>
                              <p>Duas molestias excepturi sint occaecati cupiditate non provident, similique sunt in
                                culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum
                                quidem rerum facilis est et expedita distinctio.. Duas molestias excepturi sint
                                occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                                mollitia animi, id est laborum et dolorum fuga. molestias excepturi sint.</p>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1462777351380">
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                      <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                          <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="zoomInDown"
                            data-animation-delay="0" data-animation-duration="0.5" data-animation-iteration="1"
                            style="opacity:0;" data-opacity_start_effect="">
                            <div class='dt-sc-counter type2  '>
                              <div class='dt-sc-couter-icon-holder'>
                                <div class='icon-wrapper'><span class='icon icon-users'> </span></div>
                                <div class='dt-sc-counter-number' data-value='7254'>7254</div>
                              </div>
                              <h4>Happy Clients</h4>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                      <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                          <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="zoomInDown"
                            data-animation-delay="0.8" data-animation-duration="1" data-animation-iteration="1"
                            style="opacity:0;" data-opacity_start_effect="">
                            <div class='dt-sc-counter type2  '>
                              <div class='dt-sc-couter-icon-holder'>
                                <div class='icon-wrapper'><span class='icon icon-cup'> </span></div>
                                <div class='dt-sc-counter-number' data-value='1276'>1276</div>
                              </div>
                              <h4>Awards Won</h4>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                      <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                          <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="zoomInDown"
                            data-animation-delay="1.1" data-animation-duration="1" data-animation-iteration="1"
                            style="opacity:0;" data-opacity_start_effect="">
                            <div class='dt-sc-counter type2  '>
                              <div class='dt-sc-couter-icon-holder'>
                                <div class='icon-wrapper'><span class='icon icon-timer'> </span></div>
                                <div class='dt-sc-counter-number' data-value='32658'>32658</div>
                              </div>
                              <h4>Hours Worked</h4>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="wpb_text_column wpb_content_element ">
                    <div class="wpb_wrapper">
                      <p>Duas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                        officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis
                        est et expedita distinctio.. Duas molestias excepturi sint occaecati cupiditate non provident,
                        similique sunt in culpa qui</p>

                    </div>
                  </div>
                  <div class="vc_row wpb_row vc_inner vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-3">
                      <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                          <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="flipInY"
                            data-animation-delay="1.4" data-animation-duration="1" data-animation-iteration="1"
                            style="opacity:0;" data-opacity_start_effect="">
                            <div class='dt-sc-icon-box type7 aligncenter'>
                              <div class="icon-wrapper"><span class='icon icon-cd'> </span></div>
                              <div class="icon-content">
                                <h5>Pilates Intensive</h5>
                                <h4>Enroll Now</h4>
                                <p><a class="btn" href="#">Know More</a></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-3">
                      <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                          <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="flipInY"
                            data-animation-delay="1.7" data-animation-duration="1" data-animation-iteration="1"
                            style="opacity:0;" data-opacity_start_effect="">
                            <div class='dt-sc-icon-box type7 aligncenter'>
                              <div class="icon-wrapper"><span class='icon icon-compasstool'> </span></div>
                              <div class="icon-content">
                                <h5>Power Yoga</h5>
                                <h4>Enroll Now</h4>
                                <p><a class="btn" href="#">Know More</a></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-3">
                      <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                          <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="flipInY"
                            data-animation-delay="2.0" data-animation-duration="1" data-animation-iteration="1"
                            style="opacity:0;" data-opacity_start_effect="">
                            <div class='dt-sc-icon-box type7 aligncenter'>
                              <div class="icon-wrapper"><span class='icon icon-headset'> </span></div>
                              <div class="icon-content">
                                <h5>Aerobics Basic</h5>
                                <h4>Enroll Now</h4>
                                <p><a class="btn" href="#">Know More</a></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-3">
                      <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                          <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="flipInY"
                            data-animation-delay="2.3" data-animation-duration="1" data-animation-iteration="1"
                            style="opacity:0;" data-opacity_start_effect="">
                            <div class='dt-sc-icon-box type7 aligncenter'>
                              <div class="icon-wrapper"><span class='icon icon-house'> </span></div>
                              <div class="icon-content">
                                <h5>Power Lifting</h5>
                                <h4>Enroll Now</h4>
                                <p><a class="btn" href="#">Know More</a></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="wpb_text_column wpb_content_element  vc_custom_1462777572143">
                    <div class="wpb_wrapper">
                      <p>Duas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                        officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis
                        est et expedita distinctio.. Duas molestias excepturi sint occaecati cupiditate non provident,
                        similique sunt in culpa qui</p>

                    </div>
                  </div>
                  <div class="vc_empty_space" style="height: 45px"><span class="vc_empty_space_inner"></span></div>
                  <div id="five" class="vc_row wpb_row vc_inner vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                      <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                          <div class="wpb_text_column wpb_content_element  vc_custom_1499333192317 inherit">
                            <div class="wpb_wrapper">
                              <h3>Training Amenities</h3>
                              <div class="vc_empty_space" style="height: 10px"><span
                                  class="vc_empty_space_inner"></span></div>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="vc_row wpb_row vc_inner vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                      <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                          <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInUp"
                            data-animation-delay="0.5" data-animation-duration="1" data-animation-iteration="1"
                            style="opacity:0;" data-opacity_start_effect="">
                            <div class='dt-sc-team  type1'>
                              <div class='dt-sc-team-thumb'><img width="420" height="285"
                                  src="https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/course-2.jpg"
                                  class="attachment-full" alt="" decoding="async" loading="lazy"
                                  srcset="https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/course-2.jpg 420w, https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/course-2-300x204.jpg 300w"
                                  sizes="(max-width: 420px) 100vw, 420px" /></div>
                              <div class='dt-sc-team-details'>
                                <h4>Salsa Genre</h4>
                                <h5>Salsa Dancers</h5>
                                <ul class='dt-sc-team-social '>
                                  <li><a class="fa fa-twitter" href="#" title="Twitter"></a></li>
                                  <li><a class="fa fa-facebook" href="#" title="Facebook"></a></li>
                                  <li><a class="fa fa-google-plus" href="#" title="Google"></a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                      <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                          <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInUp"
                            data-animation-delay="0.8" data-animation-duration="1" data-animation-iteration="1"
                            style="opacity:0;" data-opacity_start_effect="">
                            <div class='dt-sc-team  type1'>
                              <div class='dt-sc-team-thumb'><img width="420" height="285"
                                  src="https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/course-3.jpg"
                                  class="attachment-full" alt="" decoding="async" loading="lazy"
                                  srcset="https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/course-3.jpg 420w, https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/course-3-300x204.jpg 300w"
                                  sizes="(max-width: 420px) 100vw, 420px" /></div>
                              <div class='dt-sc-team-details'>
                                <h4>Fusion Dancers</h4>
                                <h5>Modern Dance</h5>
                                <ul class='dt-sc-team-social '>
                                  <li><a class="fa fa-twitter" href="#" title="Twitter"></a></li>
                                  <li><a class="fa fa-facebook" href="#" title="Facebook"></a></li>
                                  <li><a class="fa fa-google-plus" href="#" title="Google"></a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                      <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                          <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="No Animation"
                            data-animation-delay="1.1" data-animation-duration="1" data-animation-iteration="1"
                            style="opacity:0;" data-opacity_start_effect="">
                            <div class='dt-sc-team  type1'>
                              <div class='dt-sc-team-thumb'><img width="420" height="285"
                                  src="https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/course-2.jpg"
                                  class="attachment-full" alt="" decoding="async" loading="lazy"
                                  srcset="https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/course-2.jpg 420w, https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/course-2-300x204.jpg 300w"
                                  sizes="(max-width: 420px) 100vw, 420px" /></div>
                              <div class='dt-sc-team-details'>
                                <h4>Brazilian Dancers</h4>
                                <h5>Zumba Style</h5>
                                <ul class='dt-sc-team-social '>
                                  <li><a class="fa fa-twitter" href="#" title="Twitter"></a></li>
                                  <li><a class="fa fa-facebook" href="#" title="Facebook"></a></li>
                                  <li><a class="fa fa-google-plus" href="#" title="Google"></a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="vc_empty_space" style="height: 48px"><span class="vc_empty_space_inner"></span></div>
                  <div class="wpb_text_column wpb_content_element ">
                    <div class="wpb_wrapper">
                      <p>Duas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
                        officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis
                        est et expedita distinctio.. Duas molestias excepturi sint occaecati cupiditate non provident,
                        similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                        molestias excepturi sint.</p>

                    </div>
                  </div>
                  <div class="vc_empty_space" style="height: 11px"><span class="vc_empty_space_inner"></span></div>
                  <div class="vc_row wpb_row vc_inner vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                      <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                          <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInUp"
                            data-animation-delay="0.5" data-animation-duration="1" data-animation-iteration="1"
                            style="opacity:0;" data-opacity_start_effect="">
                            <div class='dt-sc-icon-box type11 '>
                              <div class="icon-wrapper"><span class='icon icon-search'> </span></div>
                              <div class="icon-content">
                                <h4>Commit</h4>
                                <p>Quisque volutpat mattis eros nullam malesuada.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                      <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                          <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInUp"
                            data-animation-delay="0.8" data-animation-duration="1" data-animation-iteration="1"
                            style="opacity:0;" data-opacity_start_effect="">
                            <div class='dt-sc-icon-box type11 selected'>
                              <div class="icon-wrapper"><span class='icon icon-mouse'> </span></div>
                              <div class="icon-content">
                                <h4>Practice</h4>
                                <p>Quisque volutpat mattis eros nullam malesuada.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-4">
                      <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                          <div class="ult-animation  ult-animate-viewport  ult-no-mobile " data-animate="fadeInUp"
                            data-animation-delay="1.1" data-animation-duration="1" data-animation-iteration="1"
                            style="opacity:0;" data-opacity_start_effect="">
                            <div class='dt-sc-icon-box type11 '>
                              <div class="icon-wrapper"><span class='icon icon-shield'> </span></div>
                              <div class="icon-content">
                                <h4>Perfect</h4>
                                <p>Quisque volutpat mattis eros nullam malesuada.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="vc_empty_space" style="height: 52px"><span class="vc_empty_space_inner"></span></div>
                  <div id="six" class="vc_row wpb_row vc_inner vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-2">
                      <div class="vc_column-inner ">
                        <div class="wpb_wrapper"></div>
                      </div>
                    </div>
                    <div class="aligncenter wpb_column vc_column_container vc_col-sm-8">
                      <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                          <div class="wpb_text_column wpb_content_element  vc_custom_1462777694221 inherit">
                            <div class="wpb_wrapper">
                              <h3>Clients Words</h3>

                            </div>
                          </div>
                          <div class='dt-sc-testimonial-wrapper carousel_items type5 ' data-animation='scroll'>
                            <ul class="dt-sc-testimonial-carousel">
                              <li>
                                <div class='dt-sc-testimonial type5 '>
                                  <div class="dt-sc-testimonial-quote">
                                    <blockquote> <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                                        hendrerit elit turpis, a porttitor tellus sollicitudin at.Class aptent taciti
                                        sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</q>
                                    </blockquote>
                                  </div>
                                  <div class="dt-sc-testimonial-author"><span><img width="300" height="300"
                                        src="https://dtdance.wpenginepowered.com/wp-content/uploads/2016/11/testimonial1.jpg"
                                        class="attachment-full" alt="" decoding="async" loading="lazy"
                                        srcset="https://dtdance.wpenginepowered.com/wp-content/uploads/2016/11/testimonial1.jpg 300w, https://dtdance.wpenginepowered.com/wp-content/uploads/2016/11/testimonial1-100x100.jpg 100w, https://dtdance.wpenginepowered.com/wp-content/uploads/2016/11/testimonial1-150x150.jpg 150w"
                                        sizes="(max-width: 300px) 100vw, 300px" /></span><cite>Adam
                                      Williams<small>Trainer</small></cite></div>
                                </div>
                              </li>
                              <li>
                                <div class='dt-sc-testimonial type5 '>
                                  <div class="dt-sc-testimonial-quote">
                                    <blockquote> <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                                        hendrerit elit turpis, a porttitor tellus sollicitudin at.Class aptent taciti
                                        sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</q>
                                    </blockquote>
                                  </div>
                                  <div class="dt-sc-testimonial-author"><span><img width="300" height="300"
                                        src="https://dtdance.wpenginepowered.com/wp-content/uploads/2016/11/testimonial1.jpg"
                                        class="attachment-full" alt="" decoding="async" loading="lazy"
                                        srcset="https://dtdance.wpenginepowered.com/wp-content/uploads/2016/11/testimonial1.jpg 300w, https://dtdance.wpenginepowered.com/wp-content/uploads/2016/11/testimonial1-100x100.jpg 100w, https://dtdance.wpenginepowered.com/wp-content/uploads/2016/11/testimonial1-150x150.jpg 150w"
                                        sizes="(max-width: 300px) 100vw, 300px" /></span><cite>Clyde
                                      Spencer<small>Intructor</small></cite></div>
                                </div>
                              </li>
                              <li>
                                <div class='dt-sc-testimonial type5 '>
                                  <div class="dt-sc-testimonial-quote">
                                    <blockquote> <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
                                        hendrerit elit turpis, a porttitor tellus sollicitudin at.Class aptent taciti
                                        sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</q>
                                    </blockquote>
                                  </div>
                                  <div class="dt-sc-testimonial-author"><span><img width="300" height="300"
                                        src="https://dtdance.wpenginepowered.com/wp-content/uploads/2016/11/testimonial1.jpg"
                                        class="attachment-full" alt="" decoding="async" loading="lazy"
                                        srcset="https://dtdance.wpenginepowered.com/wp-content/uploads/2016/11/testimonial1.jpg 300w, https://dtdance.wpenginepowered.com/wp-content/uploads/2016/11/testimonial1-100x100.jpg 100w, https://dtdance.wpenginepowered.com/wp-content/uploads/2016/11/testimonial1-150x150.jpg 150w"
                                        sizes="(max-width: 300px) 100vw, 300px" /></span><cite>Peter
                                      Horton<small>Calisthenics</small></cite></div>
                                </div>
                              </li>
                            </ul>
                            <div class="carousel-arrows"> <a href="#" class="testimonial-prev"> </a> <a href="#"
                                class="testimonial-next"> </a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-2">
                      <div class="vc_column-inner ">
                        <div class="wpb_wrapper"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <div class="vc_row-full-width vc_clearfix"></div>
        </article>
      </section><!-- **Primary - End** -->
    </div><!-- **Container - End** -->

  </div><!-- **Main - End** --> <!-- **Footer** -->
  <footer id="footer">
    <div class="footer-widgets dt-sc-dark-bg">
      <div class="container">
        <div class='column dt-sc-one-fourth first'>
          <aside id="text-2" class="widget widget_text">
            <div class="textwidget">
              <p><img decoding="async" loading="lazy"
                  src="https://dtdance.wpenginepowered.com/wp-content/uploads/2017/07/light-logo.png" alt="" width="120"
                  height="54" /><br />
                Dance is a wordpress theme that is truly multi-purpose with our way of taking care your needs.</p>
              <p>The barrage of shortcodes that works in the pages, makes it the better choice for your business.</p>
              <div class="dt-sc-hr-invisible-xsmall "></div>
              <p>STAY CONNECTED</p>
              <div class="dt-sc-hr-invisible-xxsmall "></div>
              <ul class='dt-sc-sociable rounded-border '>
                <li><a class="fa fa-delicious" target="_blank" href="#" rel="noopener"></a></li>
                <li><a class="fa fa-dribbble" target="_blank" href="#" rel="noopener"></a></li>
                <li><a class="fa fa-facebook" target="_blank" href="#" rel="noopener"></a></li>
                <li><a class="fa fa-linkedin" target="_blank" href="#" rel="noopener"></a></li>
                <li><a class="fa fa-twitter" target="_blank" href="#" rel="noopener"></a></li>
              </ul>
            </div>
          </aside>
        </div>
        <div class='column dt-sc-one-half '>
          <aside id="text-3" class="widget widget_text">
            <h3 class="widgettitle">Opening Hours</h3>
            <div class="textwidget">
              <ul class="split-list no-border no-bullet hvr-push-to-right">
                <li>Hip Hop Dance : 07:00 – 21:00</li>
                <li>Ballet : 09:00 – 21:00</li>
                <li>Break Dance : 18:00 – 24:00</li>
                <li>Salsa : 18:00 – 22:00</li>
                <li>Tab Dancing : 19:00 – 23:00</li>
                <li>Cha Cha : 20:00 – 23:00</li>
              </ul>
              <ul class="split-list no-border no-bullet hvr-push-to-left">
                <li>Corridos : 07:00 – 21:00</li>
                <li>Cumbia : 09:00 – 21:00</li>
                <li>Duranguense : 18:00 – 24:00</li>
                <li>Quebradita : 18:00 – 22:00</li>
              </ul>
            </div>
          </aside>
        </div>
        <div class='column dt-sc-one-fourth '>
          <aside id="text-4" class="widget widget_text">
            <h3 class="widgettitle">Contact Us</h3>
            <div class="textwidget">
              <div class="dt-sc-contact-info"><span class="fa fa-home"></span>72 Pilgrim Avenue, Chevy Chase,<br />
                MD 20815</div>
              <div class="dt-sc-hr-invisible-xsmall"></div>
              <div class="dt-sc-contact-info"><span class="fa fa-phone"></span>(226) 906-2721<br />
                (671) 925-1352</div>
              <div class="dt-sc-hr-invisible-xsmall "></div>
              <div class="dt-sc-contact-info"><span class="fa fa-paper-plane-o"></span><a href="#"> info@dance.com</a>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
    <div class="footer-copyright dt-sc-dark-bg">
      <div class="container">

        <div class="column dt-sc-one-third first">
        </div>

        <div class="column dt-sc-one-third aligncenter ">Copyright &copy; 2019. All rights reserved by, <a
            href="http://themeforest.net/user/designthemes">DesignThemes</a> </div>
        <div class="column dt-sc-one-third alignright hidden"> </div>
      </div>
    </div>
  </footer><!-- **Footer - End** -->
  </div><!-- **Inner Wrapper - End** -->
  </div><!-- **Wrapper - End** -->
  <script>
    (function (body) {
      'use strict';
      body.className = body.className.replace(/\btribe-no-js\b/, 'tribe-js');
    })(document.body);
  </script>
  <script> /* <![CDATA[ */var tribe_l10n_datatables = { "aria": { "sort_ascending": ": activate to sort column ascending", "sort_descending": ": activate to sort column descending" }, "length_menu": "Show _MENU_ entries", "empty_table": "No data available in table", "info": "Showing _START_ to _END_ of _TOTAL_ entries", "info_empty": "Showing 0 to 0 of 0 entries", "info_filtered": "(filtered from _MAX_ total entries)", "zero_records": "No matching records found", "search": "Search:", "all_selected_text": "All items on this page were selected. ", "select_all_link": "Select all pages", "clear_selection": "Clear Selection.", "pagination": { "all": "All", "next": "Next", "previous": "Previous" }, "select": { "rows": { "0": "", "_": ": Selected %d rows", "1": ": Selected 1 row" } }, "datepicker": { "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"], "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"], "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"], "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"], "monthNamesShort": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"], "monthNamesMin": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], "nextText": "Next", "prevText": "Prev", "currentText": "Today", "closeText": "Done", "today": "Today", "clear": "Clear" } };/* ]]> */ </script>
  <script type="text/html" id="wpb-modifications"></script>
  <script type="text/javascript">
    (function () {
      var c = document.body.className;
      c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
      document.body.className = c;
    })()
  </script>
  <link rel='stylesheet' id='vc_animate-css-css'
    href='https://dtdance.wpenginepowered.com/wp-content/plugins/js_composer/assets/lib/bower/animate-css/animate.min.css?ver=6.5.0'
    type='text/css' media='all' />
  <link rel='stylesheet' id='vc_carousel_css-css'
    href='https://dtdance.wpenginepowered.com/wp-content/plugins/js_composer/assets/lib/vc_carousel/css/vc_carousel.min.css?ver=6.5.0'
    type='text/css' media='all' />
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min.js?ver=1.2.0'
    id='jquery-selectBox-js'></script>
  <script type='text/javascript' id='jquery-yith-wcwl-js-extra'>
    /* <![CDATA[ */
    var yith_wcwl_l10n = { "ajax_url": "\/wp-admin\/admin-ajax.php", "redirect_to_cart": "no", "multi_wishlist": "", "hide_add_button": "1", "enable_ajax_loading": "", "ajax_loader_url": "https:\/\/dtdance.wpengine.com\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader-alt.svg", "remove_from_wishlist_after_add_to_cart": "1", "is_wishlist_responsive": "1", "time_to_close_prettyphoto": "3000", "fragments_index_glue": ".", "reload_on_found_variation": "1", "labels": { "cookie_disabled": "We are sorry, but this feature is available only if cookies on your browser are enabled.", "added_to_cart_message": "<div class=\"woocommerce-notices-wrapper\"><div class=\"woocommerce-message\" role=\"alert\">Product added to cart successfully<\/div><\/div>" }, "actions": { "add_to_wishlist_action": "add_to_wishlist", "remove_from_wishlist_action": "remove_from_wishlist", "reload_wishlist_and_adding_elem_action": "reload_wishlist_and_adding_elem", "load_mobile_action": "load_mobile", "delete_item_action": "delete_item", "save_title_action": "save_title", "save_privacy_action": "save_privacy", "load_fragments": "load_fragments" } };
/* ]]> */
  </script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.js?ver=3.0.17'
    id='jquery-yith-wcwl-js'></script>
  <script type='text/javascript' id='contact-form-7-js-extra'>
    /* <![CDATA[ */
    var wpcf7 = { "apiSettings": { "root": "https:\/\/dtdance.wpengine.com\/wp-json\/contact-form-7\/v1", "namespace": "contact-form-7\/v1" }, "cached": "1" };
/* ]]> */
  </script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.3.1'
    id='contact-form-7-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/plugins/designthemes-class-addon/js/classes.js?ver=6.1.1'
    id='dt-class-addon-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/plugins/designthemes-core-features/shortcodes/js/jquery.tabs.min.js?ver=6.1.1'
    id='dt-sc-tabs-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/plugins/designthemes-core-features/shortcodes/js/jquery.tipTip.minified.js?ver=6.1.1'
    id='dt-sc-tiptip-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/plugins/designthemes-core-features/shortcodes/js/jquery.inview.js?ver=6.1.1'
    id='dt-sc-inview-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/plugins/designthemes-core-features/shortcodes/js/jquery.animateNumber.min.js?ver=6.1.1'
    id='dt-sc-animatenum-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/plugins/designthemes-core-features/shortcodes/js/jquery.donutchart.js?ver=6.1.1'
    id='dt-sc-donutchart-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/plugins/designthemes-core-features/shortcodes/js/slick.min.js?ver=6.1.1'
    id='dt-sc-slick-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/plugins/designthemes-core-features/shortcodes/js/jquery.toggle.click.js?ver=6.1.1'
    id='dt-sc-toggle-click-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/plugins/designthemes-core-features/shortcodes/js/shortcodes.js?ver=6.1.1'
    id='dt-sc-script-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/plugins/designthemes-fb-pixel/script.js?ver=6.1.1'
    id='dt-fbpixel-script-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'
    id='js-cookie-js'></script>
  <script type='text/javascript' id='woocommerce-js-extra'>
    /* <![CDATA[ */
    var woocommerce_params = { "ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%" };
/* ]]> */
  </script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=4.8.3'
    id='woocommerce-js'></script>
  <script type='text/javascript' id='wc-cart-fragments-js-extra'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = { "ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%", "cart_hash_key": "wc_cart_hash_5ae415d1853024123ea05ff6e5c8255d", "fragment_name": "wc_fragments_5ae415d1853024123ea05ff6e5c8255d", "request_timeout": "5000" };
/* ]]> */
  </script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=4.8.3'
    id='wc-cart-fragments-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min.js?ver=3.1.6'
    id='prettyPhoto-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/themes/dance/framework/js/jquery.ui.totop.min.js?ver=6.1.1'
    id='jquery-ui-totop-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/themes/dance/framework/js/jquery.caroufredsel.js?ver=6.1.1'
    id='jquery-caroufredsel-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/themes/dance/framework/js/jquery.debouncedresize.js?ver=6.1.1'
    id='jquery-debouncedresize-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/themes/dance/framework/js/jquery.prettyphoto.js?ver=6.1.1'
    id='jquery-prettyphoto-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/themes/dance/framework/js/jquery.touchswipe.js?ver=6.1.1'
    id='jquery-touchswipe-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/themes/dance/framework/js/jquery.parallax.js?ver=6.1.1'
    id='jquery-parallax-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/themes/dance/framework/js/jquery.downcount.js?ver=6.1.1'
    id='jquery-downcount-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/themes/dance/framework/js/jquery.nicescroll.js?ver=6.1.1'
    id='jquery-nicescroll-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/themes/dance/framework/js/jquery.bxslider.js?ver=6.1.1'
    id='jquery-bxslider-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/themes/dance/framework/js/jquery.fitvids.js?ver=6.1.1'
    id='jquery-fitvids-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/themes/dance/framework/js/jquery.sticky.js?ver=6.1.1'
    id='jquery-sticky-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/themes/dance/framework/js/jquery.simple-sidebar.js?ver=6.1.1'
    id='jquery-simple-sidebar-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/themes/dance/framework/js/jquery.classie.js?ver=6.1.1'
    id='jquery-classie-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/plugins/the-events-calendar/vendor/jquery-placeholder/jquery.placeholder.min.js?ver=5.3.1'
    id='jquery-placeholder-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/themes/dance/framework/js/jquery.visualNav.min.js?ver=6.1.1'
    id='jquery-visualnav-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/themes/dance/framework/js/ResizeSensor.min.js?ver=6.1.1'
    id='resizesensor-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/themes/dance/framework/js/theia-sticky-sidebar.min.js?ver=6.1.1'
    id='theia-sticky-sidebar-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/plugins/js_composer/assets/lib/bower/isotope/dist/isotope.pkgd.min.js?ver=6.5.0'
    id='isotope-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/themes/dance/framework/js/magnific/jquery.magnific-popup.min.js?ver=6.1.1'
    id='dance-popup-js-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/themes/dance/framework/js/custom.js?ver=6.1.1'
    id='dance-jqcustom-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=6.5.0'
    id='wpb_composer_front_js-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/plugins/js_composer/assets/lib/vc_waypoints/vc-waypoints.min.js?ver=6.5.0'
    id='vc_waypoints-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/plugins/js_composer/assets/lib/vc_carousel/js/transition.min.js?ver=6.5.0'
    id='vc_transition_bootstrap_js-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/plugins/js_composer/assets/lib/vc_carousel/js/vc_carousel.min.js?ver=6.5.0'
    id='vc_carousel_js-js'></script>
  <script type='text/javascript'
    src='https://dtdance.wpenginepowered.com/wp-content/plugins/js_composer/assets/lib/prettyphoto/js/jquery.prettyPhoto.min.js?ver=6.5.0'
    id='prettyphoto-js'></script>
</body>

</html>