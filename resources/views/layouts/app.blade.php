<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>

    <link rel="shortcut icon" href="/favicons/favicon.ico"/>
    <link rel="icon" type="image/png" href="/favicons/favicon-32.png" sizes="32x32"/>
    <link rel="icon" type="image/png" href="/favicons/favicon-16.png" sizes="16x16"/>

    <!-- <link href="https://rsms.me/inter/inter.css" rel="stylesheet"/> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
      @layer utilities {
      .hero-min-height {
        min-height: 100%;
      }
    }
  </style>
    @stack('additional_css')
    <title>Twill demo</title>
</head>

<body>
<!-- HEADER -->
<header class="container mx-auto py-8 px-10">
   <h1><a href="/"> Twill Demo</a></h1>
</header>

@yield('content')

<!-- FOOTER -->
<footer class="my-10 px-10">
   <h2 class="mt-10 px-10 text-md font-normal leading-normal text-center">Demo@keric@area17.com</h2>
</footer>
</body>
</html>
