<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
        <style>
 
 .prod-info-main {
  
     border: 1px solid #CEEFFF;
  
     margin-bottom: 20px;
  
     margin-top: 10px;
  
     background: #fff;
  
     padding: 6px;
  
     -webkit-box-shadow: 0 1px 4px 0 rgba(21,180,255,0.5);
  
     box-shadow: 0 1px 1px 0 rgba(21,180,255,0.5);
  
 }
  
  
  
 .prod-info-main .product-image {
  
     background-color: #EBF8FE;
  
     display: block;
  
     min-height: 238px;
  
     overflow: hidden;
  
     position: relative;
  
     border: 1px solid #CEEFFF;
  
     padding-top: 40px;
  
 }
  
  
  
 .rotprod{
  
     -webkit-transition-duration: 0.8s;
  
     -moz-transition-duration: 0.8s;
  
     -o-transition-duration: 0.8s;
  
     transition-duration: 0.8s;
  
     } 
  
  
  
 .rotprod:hover 
  
 {
  
     -webkit-transform:rotate(360deg);
  
     -moz-transform:rotate(360deg);
  
     -o-transform:rotate(360deg);
  
 }
  
  
  
 .prod-info-main .product-deatil {
  
     border-bottom: 1px solid #dfe5e9;
  
     padding-bottom: 17px;
  
     padding-left: 16px;
  
     padding-top: 16px;
  
     position: relative;
  
     background: #fff
  
 }
  
  
  
 .product-content .product-deatil h5 a {
  
     color: #2f383d;
  
     font-size: 15px;
  
     line-height: 19px;
  
     text-decoration: none;
  
     padding-left: 0;
  
     margin-left: 0
  
 }
  
  
  
 .prod-info-main .product-deatil h5 a span {
  
     color: #9aa7af;
  
     display: block;
  
     font-size: 13px
  
 }
  
  
  
 .prod-info-main .product-deatil span.tag1 {
  
     border-radius: 50%;
  
     color: #fff;
  
     font-size: 15px;
  
     height: 50px;
  
     padding: 13px 0;
  
     position: absolute;
  
     right: 10px;
  
     text-align: center;
  
     top: 10px;
  
     width: 50px
  
 }
  
  
  
 .prod-info-main .product-deatil span.sale {
  
     background-color: #21c2f8
  
 }
  
  
  
 .prod-info-main .product-deatil span.discount {
  
     background-color: #71e134
  
 }
  
  
  
 .prod-info-main .product-deatil span.hot {
  
     background-color: #fa9442
  
 }
  
  
  
 .prod-info-main .description {
  
     font-size: 12.5px;
  
     line-height: 20px;
  
     padding: 10px 14px 16px 19px;
  
     background: #fff
  
 }
  
  
  
 .prod-info-main .product-info {
  
     padding: 11px 19px 10px 20px
  
 }
  
  
  
 .prod-info-main .product-info a.add-to-cart {
  
     color: #2f383d;
  
     font-size: 13px;
  
     padding-left: 16px
  
 }
  
  
  
 .prod-info-main name.a {
  
     padding: 5px 10px;
  
     margin-left: 16px
  
 }
  
  
  
 .product-info.smart-form .btn {
  
     padding: 6px 12px;
  
     margin-left: 12px;
  
     margin-top: -10px
  
 }
  
  
  
 .load-more-btn {
  
     background-color: #21c2f8;
  
     border-bottom: 2px solid #037ca5;
  
     border-radius: 2px;
  
     border-top: 2px solid #0cf;
  
     margin-top: 20px;
  
     padding: 9px 0;
  
     width: 100%
  
 }
  
  
  
 .product-block .product-deatil p.price-container span,
  
 .prod-info-main .product-deatil p.price-container span,
  
 .shipping table tbody tr td p.price-container span,
  
 .shopping-items table tbody tr td p.price-container span {
  
     color: #21c2f8;
  
     font-family: Lato, sans-serif;
  
     font-size: 24px;
  
     line-height: 20px
  
 }
  
  
  
 .product-info.smart-form .rating label {
  
     margin-top:15px;
  
  
  
 }
  
  
  
 .prod-wrap .product-image span.tag2 {
  
     position: absolute;
  
     top: 10px;
  
     right: 10px;
  
     width: 36px;
  
     height: 36px;
  
     border-radius: 50%;
  
     padding: 10px 0;
  
     color: #fff;
  
     font-size: 11px;
  
     text-align: center
  
 }
  
  
  
 .prod-wrap .product-image span.tag3 {
  
     position: absolute;
  
     top: 10px;
  
     right: 20px;
  
     width: 60px;
  
     height: 36px;
  
     border-radius: 50%;
  
     padding: 10px 0;
  
     color: #fff;
  
     font-size: 11px;
  
     text-align: center
  
 }
  
  
  
 .prod-wrap .product-image span.sale {
  
     background-color: #57889c;
  
 }
  
  
  
 .prod-wrap .product-image span.hot {
  
     background-color: #a90329;
  
 }
  
  
  
 .prod-wrap .product-image span.special {
  
     background-color: #3B6764;
  
 }
  
 .shop-btn {
  
     position: relative
  
 }
  
  
  
 .shop-btn>span {
  
     background: #a90329;
  
     display: inline-block;
  
     font-size: 10px;
  
     box-shadow: inset 1px 1px 0 rgba(0, 0, 0, .1), inset 0 -1px 0 rgba(0, 0, 0, .07);
  
     font-weight: 700;
  
     border-radius: 50%;
  
     padding: 2px 4px 3px!important;
  
     text-align: center;
  
     line-height: normal;
  
     width: 19px;
  
     top: -7px;
  
     left: -7px
  
 }
  
  
  
 .product-deatil hr {
  
     padding: 0 0 5px!important
  
 }
  
  
  
 .product-deatil .glyphicon {
  
     color: #3276b1
  
 }
  
  
  
 .product-deatil .product-image {
  
     border-right: 0px solid #fff !important
  
 }
  
  
  
 .product-deatil .name {
  
     margin-top: 0;
  
     margin-bottom: 0
  
 }
  
  
  
 .product-deatil .name small {
  
     display: block
  
 }
  
  
  
 .product-deatil .name a {
  
     margin-left: 0
  
 }
  
  
  
 .product-deatil .price-container {
  
     font-size: 24px;
  
     margin: 0;
  
     font-weight: 300;
  
  
  
 }
  
  
  
 .product-deatil .price-container small {
  
     font-size: 12px;
  
  
  
 }
  
  
  
 .product-deatil .fa-2x {
  
     font-size: 16px!important
  
 }
  
  
  
 .product-deatil .fa-2x>h5 {
  
     font-size: 12px;
  
     margin: 0
  
 }
  
  
  
 .product-deatil .fa-2x+a,
  
 .product-deatil .fa-2x+a+a {
  
     font-size: 13px
  
 }
  
  
  
 .product-deatil .certified {
  
     margin-top: 10px
  
 }
  
  
  
 .product-deatil .certified ul {
  
     padding-left: 0
  
 }
  
  
  
 .product-deatil .certified ul li:not(first-child) {
  
     margin-left: -3px
  
 }
  
  
  
 .product-deatil .certified ul li {
  
     display: inline-block;
  
     background-color: #f9f9f9;
  
     padding: 13px 19px
  
 }
  
  
  
 .product-deatil .certified ul li:first-child {
  
     border-right: none
  
 }
  
  
  
 .product-deatil .certified ul li a {
  
     text-align: left;
  
     font-size: 12px;
  
     color: #6d7a83;
  
     line-height: 16px;
  
     text-decoration: none
  
 }
  
  
  
 .product-deatil .certified ul li a span {
  
     display: block;
  
     color: #21c2f8;
  
     font-size: 13px;
  
     font-weight: 700;
  
     text-align: center
  
 }
  
  
  
 .product-deatil .message-text {
  
     width: calc(100% - 70px)
  
 }
  
 /*--Button effect classes for add to cart*/
  
 .btn-cart{
  
     border-radius: 0;
  
     position: relative;
  
     color: #fff;
  
     border:1px solid transparent;
  
     text-transform: uppercase;
  
     transition: all 0.40s ease 0s;
  
 }
  
 .btn-cart:after{
  
     content: "\f07a";
  
     font-family: fontawesome;
  
     position: absolute;
  
     right: 6px;
  
     top: -4px;
  
     opacity: 0;
  
     color: #fff;
  
     transition: all 0.40s ease 0s;
  
 }
  
 .btn-cart:hover:after{
  
     top:40%;
  
     opacity: 5;
  
 }
  
 .btn-cart span{
  
     display: block;
  
     transition: all 0.70s linear 0s;
  
 }
  
 .btn-cart:hover span{
  
     transform: translate(-9px);
  
 }
  
  
  
 /*--Button effect classes for More info*/
  
 .btn-info{
  
     border-radius: 0;
  
     position: relative;
  
     color: #fff;
  
     border:1px solid transparent;
  
     text-transform: uppercase;
  
     transition: all 0.40s ease 0s;
  
 }
  
 .btn-info:after{
  
     content: "\f129";
  
     font-family: fontawesome;
  
     position: absolute;
  
     right: 6px;
  
     top: -4px;
  
     opacity: 0;
  
     color: #fff;
  
     transition: all 0.40s ease 0s;
  
 }
  
 .btn-info:hover:after{
  
     top:40%;
  
     opacity: 5;
  
 }
  
 .btn-info span{
  
     display: block;
  
     transition: all 0.70s linear 0s;
  
 }
  
 .btn-info:hover span{
  
     transform: translate(-9px);
  
 }
  
  
  
 @media only screen and (min-width:1024px) {
  
     .prod-info-main div[class*=col-md-4] {
  
         padding-right: 0
  
     }
  
     .prod-info-main div[class*=col-md-8] {
  
         padding: 0 13px 0 0
  
     }
  
     .prod-wrap div[class*=col-md-5] {
  
         padding-right: 0
  
     }
  
     .prod-wrap div[class*=col-md-7] {
  
         padding: 0 13px 0 0
  
     }
  
     .prod-info-main .product-image {
  
         border-right: 1px solid #dfe5e9
  
     }
  
     .prod-info-main .product-info {
  
         position: relative
  
     }
  
 }
  
 </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="container">
              <div class="col-xs-12 col-md-6">
 
                <!-- First product box start here-->
                <div class="prod-info-main prod-wrap clearfix">
 
                      <div class="row">
 
                           <div class="col-md-5 col-sm-12 col-xs-12">
 
                            <div class="product-image">
 
                             <img src="images/products/p4.png" class="img-responsive">
 
                               <span class="tag2 hot">
 
                                 SPECIAL
 
                               </span>
 
                       </div>
 
                  </div>
 
     <div class="col-md-7 col-sm-12 col-xs-12">
 
                  <div class="product-deatil">
 
                               <h5 class="name">
 
                               <a href="#">
 
                                Product Code/Name here
 
                               </a>
 
                               <a href="#">
 
                               <span>Product Category</span>
 
                               </a>                           
 
                        </h5>
 
                            <p class="price-container">
 
                             <span>$199</span>
 
                           </p>
 
              <span class="tag1"></span>
 
   </div>
 
   <div class="description">
 
      <p>A Short product description here </p>
 
   </div>
 
      <div class="product-info smart-form">
 
         <div class="row">
 
         <div class="col-md-12">
 
          <a href="#" class="btn btn-danger">Add to cart</a>
 
             <a href="javascript:void(0);" class="btn btn-info">More info</a>
 
       </div>
 
      <div class="col-md-12">
 
         <div class="rating">Rating:
 
          <label for="stars-rating-5"><i class="fa fa-star text-danger"></i></label>
 
          <label for="stars-rating-4"><i class="fa fa-star text-danger"></i></label>
 
          <label for="stars-rating-3"><i class="fa fa-star text-danger"></i></label>
 
          <label for="stars-rating-2"><i class="fa fa-star text-warning"></i></label>
 
          <label for="stars-rating-1"><i class="fa fa-star text-warning"></i></label>
 
         </div>
 
       </div>
 
    </div>
 
   </div>
 
  </div>
 
  </div>
 </div>
 
 <!-- end product -->
 
</div>
</div>
 
</div>
        </div>
    </body>
</html>
