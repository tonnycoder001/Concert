<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/daisyui@2.42.1/dist/full.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#ef3b2d",
                        },
                    },
                },
            };
        </script>
        <title>Music</title>
    </head>
    <body>
        <div class="navbar text-white">
            <div class="navbar-start f03a">
              <a class="normal-case text-5xl">Ventu</a>
            </div>
            <div class="navbar-center hidden lg:flex">
              <ul class="menu menu-horizontal p-0">
                <li>
                    <a class="hover:bg-smokewhite">Home</a>
                </li>
                <li>
                  <a href="/speaker">Speaker</a>
                </li>
                <li>
                   <a href="/ticket">Ticket</a>
                  </li>
                <li>
                    <a href="/contacts">Contacts</a>
                  </li>
              </ul>
            </div>
            <div class="navbar-end">
                <a href="/" class="hover:text-laravel">
                    <a class="btn btn-primary" href="/register">Register</a>
                </a>
            </div>
          </div>

          @include('partials.hero')
          @include('users.footer')
          
</body>
</html>
