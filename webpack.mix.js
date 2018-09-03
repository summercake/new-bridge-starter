let mix = require('laravel-mix');

mix.js('resources/assets/js/recruiter/recruiter.js', 'public/js')
.js('resources/assets/js/candidate/candidate.js', 'public/js')
.version();

//.sass('resources/assets/sass/app.scss', 'public/css')

