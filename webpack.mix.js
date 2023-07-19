const mix = require('laravel-mix');
const tailwindcss = require('laravel-mix-tailwind');

mix.js('resources/js/app.js', 'public/js')
  .postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
  ])
  .tailwind()
  .vue();

if (mix.inProduction()) {
  mix.version();
}
