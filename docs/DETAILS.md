# Smaller changes compared to the Community theme
- General Layout: slightly decreased body padding (distance between topbars and content) for desktop and tablets - see `less/mixins.less`
- Editor for tasks, wiki, polls etc.: fixed non-floating menubar lead to a lot of scrolling on mobile, see `less/mixins.less` (solved with max-height)
- Login page: background: @background-color-page instead of @primary, text/h1/h2-color: @primary instead of white, link color: @link instead of white
- E-Mails: Text color in footer: @text-color-soft instead of @text-color-soft2
- E-Mails: Background color of body and table: @default (brighter) instead of @background-color-page
- Badges: background: @primary, text-color white
- "Powered by Humhub" link: @text-color-soft2
- Appearance of code entered in the richtext editor: @text-color-highlight, background @link with opacity
- Print version: Hide comment controls
- Mail Module: Background color in Conversation sidebar: @background-color-main (white) instead of @background-color-secondary
- Mail Module: Background color of Conversation header: @default (brighter) instead of @background-color-secondary
- Gallery Module: visibility of clickable text, see `less/gallery.less`
- Legal Module: readability of Cookie banner text and styling of legal footer, see `less/legal.less`
- Scroll up Module: Hide scroll up button on mobile (it was shown on the normally hidden sidebar -> confusing)
