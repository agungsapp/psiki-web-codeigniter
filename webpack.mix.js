// webpack.mix.js

let mix = require("laravel-mix");

mix
  .js("src/app.js", "public/tail/js")
  .postCss("src/app.css", "public/tail/css", [require("tailwindcss")]);
