<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- AlpineJS CDN -->
    <script
      defer
      src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link
      rel="preconnect"
      href="https://fonts.googleapis.com" />
    <link
      rel="preconnect"
      href="https://fonts.gstatic.com"
      crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
      rel="stylesheet" />
    
    <title>Profile</title>

    <style>
      * {
        font-family: 'Inter', sans-serif;
      }
    </style>
  </head>
  <body class="bg-gray-100">
    <header>
      <!-- Navigation -->
      <nav
        x-data="{ mobileMenuOpen: false, userMenuOpen: false }"
        class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <div class="flex h-16 justify-between">
            <div class="flex">
              <div class="flex flex-shrink-0 items-center">
                <a href="{{ route('index') }}">
                  <h2 class="font-bold text-2xl">Barta</h2>
                </a>
              </div>
              <!--              <div class="hidden sm:ml-6 sm:flex sm:space-x-8">-->
              <!--                &lt;!&ndash; Current: "border-gray-800 text-gray-900 font-semibold", Default: "border-transparent text-gray-600 hover:border-gray-300 hover:text-gray-800" &ndash;&gt;-->
              <!--                <a-->
              <!--                  href="#"-->
              <!--                  class="inline-flex items-center border-b-2 border-gray-800 px-1 pt-1 text-sm font-semibold text-gray-900"-->
              <!--                  >Discover</a-->
              <!--                >-->
              <!--                <a-->
              <!--                  href="#"-->
              <!--                  class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-600 hover:border-gray-300 hover:text-gray-800"-->
              <!--                  >For you</a-->
              <!--                >-->
              <!--                <a-->
              <!--                  href="#"-->
              <!--                  class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-600 hover:border-gray-300 hover:text-gray-800"-->
              <!--                  >People</a-->
              <!--                >-->
              <!--              </div>-->
            </div>
            <!-- Search input -->
            <form action="" method="POST" class="flex items-center">
              <input
                      type="text"
                      placeholder="Search..."
                      class="border-2 border-gray-300 bg-white h-10 px-5 pr-10 rounded-full text-sm focus:outline-none"
              />
            </form>
            <div class="hidden sm:ml-6 sm:flex gap-2 sm:items-center">
              <!-- This Button Should Be Hidden on Mobile Devices -->
                            <button
                              type="button"
                              class="text-gray-900 hover:text-white border-2 border-gray-800 hover:bg-gray-900 focus:ring-2 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center hidden md:block">
                              Create Post
                            </button>

<!--                            <button-->
<!--                              type="button"-->
<!--                              class="rounded-full bg-white p-2 text-gray-800 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">-->
<!--                              <span class="sr-only">View notifications</span>-->
<!--                              &lt;!&ndash; Heroicon name: outline/bell &ndash;&gt;-->
<!--                              <svg-->
<!--                                class="h-6 w-6"-->
<!--                                xmlns="http://www.w3.org/2000/svg"-->
<!--                                fill="none"-->
<!--                                viewBox="0 0 24 24"-->
<!--                                stroke-width="1.5"-->
<!--                                stroke="currentColor"-->
<!--                                aria-hidden="true">-->
<!--                                <path-->
<!--                                  stroke-linecap="round"-->
<!--                                  stroke-linejoin="round"-->
<!--                                  d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />-->
<!--                              </svg>-->
<!--                            </button>-->

<!--                            <button-->
<!--                              type="button"-->
<!--                              class="rounded-full bg-white p-2 text-gray-800 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">-->
<!--                              <span class="sr-only">Messages</span>-->
<!--                              <svg-->
<!--                                xmlns="http://www.w3.org/2000/svg"-->
<!--                                fill="none"-->
<!--                                viewBox="0 0 24 24"-->
<!--                                stroke-width="1.5"-->
<!--                                stroke="currentColor"-->
<!--                                class="w-6 h-6">-->
<!--                                <path-->
<!--                                  stroke-linecap="round"-->
<!--                                  stroke-linejoin="round"-->
<!--                                  d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />-->
<!--                              </svg>-->
<!--                            </button>-->

              <!-- Profile dropdown -->
              <div
                class="relative ml-3"
                x-data="{ open: false }">
                <div>
                  <button
                    @click="open = !open"
                    type="button"
                    class="flex rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2"
                    id="user-menu-button"
                    aria-expanded="false"
                    aria-haspopup="true">
                    <span class="sr-only">Open user menu</span>
                    <img
                      class="h-8 w-8 rounded-full"
                      src="https://avatars.githubusercontent.com/u/831997"
                      alt="Ahmed Shamim Hasan Shaon" />
                  </button>
                </div>

                <!-- Dropdown menu -->
                <div
                  x-show="open"
                  @click.away="open = false"
                  class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                  role="menu"
                  aria-orientation="vertical"
                  aria-labelledby="user-menu-button"
                  tabindex="-1">
                  <a
                    href="{{ route('profile.show') }}"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                    role="menuitem"
                    tabindex="-1"
                    id="user-menu-item-0"
                    >Your Profile</a
                  >
                  <a
                    href="{{ route('profile.edit') }}"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                    role="menuitem"
                    tabindex="-1"
                    id="user-menu-item-1"
                    >Edit Profile</a
                  >
                  <form action="{{ route('logout') }}" method="POST" id="frm-logout">
                    @csrf
                    <a
                      href="{{ route('logout') }}"
                      onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"
                      class="block px-4 py-2 text-base font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-800"
                      >Sign out</a
                    >
                  </form>
                </div>
              </div>
            </div>
            <div class="-mr-2 flex items-center sm:hidden">
              <!-- Mobile menu button -->
              <button
                @click="mobileMenuOpen = !mobileMenuOpen"
                type="button"
                class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gray-500"
                aria-controls="mobile-menu"
                aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <!-- Icon when menu is closed -->
                <svg
                  x-show="!mobileMenuOpen"
                  class="block h-6 w-6"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  aria-hidden="true">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>

                <!-- Icon when menu is open -->
                <svg
                  x-show="mobileMenuOpen"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="w-6 h-6">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div
          x-show="mobileMenuOpen"
          class="sm:hidden"
          id="mobile-menu">
          <div class="border-t border-gray-200 pt-4 pb-3">
            <div class="flex items-center px-4">
              <div>
                <div class="text-base font-medium text-gray-800">
                  {{ $userInfo->fname . " " . $userInfo->lname}}
                </div>
                <div class="text-sm font-medium text-gray-500">
                  {{ $userInfo->email }}
                </div>
              </div>
            </div>
            <div class="mt-3 space-y-1">
              <a
                href="{{ route('profile.show') }}"
                class="block px-4 py-2 text-base font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-800"
                >Your Profile</a
              >
              <a
                href="{{ route('profile.edit') }}"
                class="block px-4 py-2 text-base font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-800"
                >Edit Profile</a
              >
              <form action="{{ route('logout') }}" method="POST" id="frm-logout">
                @csrf
                <a
                  href="{{ route('logout') }}"
                  onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"
                  class="block px-4 py-2 text-base font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-800"
                  >Sign out</a
                >
              </form>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <main class="container max-w-2xl mx-auto space-y-8 mt-8 px-2 min-h-screen">
      <!-- Cover Container -->
      <section
        class="bg-white border-2 p-8 border-gray-800 rounded-xl min-h-[350px] space-y-8 flex items-center flex-col justify-center">
        <!-- Profile Info -->
        <div
          class="flex gap-4 justify-center flex-col text-center items-center">
          <!-- Avatar -->
          <div class="relative">
            <img
              class="w-32 h-32 rounded-full border-2 border-gray-800"
              src="https://avatars.githubusercontent.com/u/831997"
              alt="Ahmed Shamim" />
<!--            <span class="bottom-2 right-4 absolute w-3.5 h-3.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span>-->
          </div>
          <!-- /Avatar -->

          <!-- User Meta -->
          <div>
            <h1 class="font-bold md:text-2xl">{{ $userInfo->fname . " " . $userInfo->lname }}</h1>
            <p class="text-gray-700">{{ $userInfo->bio }} 💻</p>
          </div>
          <!-- / User Meta -->
        </div>
        <!-- /Profile Info -->

        <!-- Profile Stats -->
        <div
          class="flex flex-row gap-16 justify-center text-center items-center">
          <!-- Total Posts Count -->
          <div class="flex flex-col justify-center items-center">
            <h4 class="sm:text-xl font-bold">3</h4>
            <p class="text-gray-600">Posts</p>
          </div>

          <!-- Total Comments Count -->
          <div class="flex flex-col justify-center items-center">
            <h4 class="sm:text-xl font-bold">14</h4>
            <p class="text-gray-600">Comments</p>
          </div>
        </div>
        <!-- /Profile Stats -->

        <!-- Edit Profile Button (Only visible to the profile owner) -->
        <a
          href="{{ route('profile.edit') }}"
          type="button"
          class="-m-2 flex gap-2 items-center rounded-full px-4 py-2 font-semibold bg-gray-100 hover:bg-gray-200 text-gray-700">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="w-5 h-5">
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
          </svg>

          Edit Profile
        </a>
        <!-- /Edit Profile Button -->
      </section>
      <!-- /Cover Container -->

      <!-- Barta Create Post Card -->
      <form
              method="POST"
              enctype="multipart/form-data"
              class="bg-white border-2 border-black rounded-lg shadow mx-auto max-w-none px-4 py-5 sm:px-6 space-y-3">
        <!-- Create Post Card Top -->
        <div>
          <div class="flex items-start /space-x-3/">
            <!-- User Avatar -->
            <div class="flex-shrink-0">
              <img
                      class="h-10 w-10 rounded-full object-cover"
                      src="https://avatars.githubusercontent.com/u/831997"
                      alt="Ahmed Shamim" />
            </div>
            <!-- /User Avatar -->

            <!-- Content -->
            <div class="text-gray-700 font-normal w-full">
              <textarea
                      class="block w-full p-2 pt-2 text-gray-900 rounded-lg border-none outline-none focus:ring-0 focus:ring-offset-0"
                      name="barta"
                      rows="2"
                      placeholder="What's going on, {{ $userInfo->fname }}?"></textarea>
            </div>
          </div>
        </div>

        <!-- Create Post Card Bottom -->
        <div>
          <!-- Card Bottom Action Buttons -->
          <div class="flex items-center justify-between">
            <div class="flex gap-4 text-gray-600">
              <!-- Upload Picture Button -->
              <div>
                <input
                        type="file"
                        name="picture"
                        id="picture"
                        class="hidden" />

                <label
                        for="picture"
                        class="-m-2 flex gap-2 text-xs items-center rounded-full p-2 text-gray-600 hover:text-gray-800 cursor-pointer">
                  <span class="sr-only">Picture</span>
                  <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          class="w-6 h-6">
                    <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                  </svg>
                </label>
              </div>
              <!-- /Upload Picture Button -->

              <!-- GIF Button -->
              <!--                <button-->
              <!--                  type="button"-->
              <!--                  class="-m-2 flex gap-2 text-xs items-center rounded-full p-2 text-gray-600 hover:text-gray-800">-->
              <!--                  <span class="sr-only">GIF</span>-->
              <!--                  <svg-->
              <!--                    xmlns="http://www.w3.org/2000/svg"-->
              <!--                    fill="none"-->
              <!--                    viewBox="0 0 24 24"-->
              <!--                    stroke-width="1.5"-->
              <!--                    stroke="currentColor"-->
              <!--                    class="w-6 h-6">-->
              <!--                    <path-->
              <!--                      stroke-linecap="round"-->
              <!--                      stroke-linejoin="round"-->
              <!--                      d="M12.75 8.25v7.5m6-7.5h-3V12m0 0v3.75m0-3.75H18M9.75 9.348c-1.03-1.464-2.698-1.464-3.728 0-1.03 1.465-1.03 3.84 0 5.304 1.03 1.464 2.699 1.464 3.728 0V12h-1.5M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />-->
              <!--                  </svg>-->
              <!--                </button>-->
              <!-- /GIF Button -->

              <!-- Emoji Button -->
              <!--                <button-->
              <!--                  type="button"-->
              <!--                  class="-m-2 flex gap-2 text-xs items-center rounded-full p-2 text-gray-600 hover:text-gray-800">-->
              <!--                  <span class="sr-only">Emoji</span>-->
              <!--                  <svg-->
              <!--                    xmlns="http://www.w3.org/2000/svg"-->
              <!--                    fill="none"-->
              <!--                    viewBox="0 0 24 24"-->
              <!--                    stroke-width="1.5"-->
              <!--                    stroke="currentColor"-->
              <!--                    class="w-6 h-6">-->
              <!--                    <path-->
              <!--                      stroke-linecap="round"-->
              <!--                      stroke-linejoin="round"-->
              <!--                      d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />-->
              <!--                  </svg>-->
              <!--                </button>-->
              <!-- /Emoji Button -->
            </div>

            <div>
              <!-- Post Button -->
              <button
                      type="submit"
                      class="-m-2 flex gap-2 text-xs items-center rounded-full px-4 py-2 font-semibold bg-gray-800 hover:bg-black text-white">
                Post
              </button>
              <!-- /Post Button -->
            </div>
          </div>
          <!-- /Card Bottom Action Buttons -->
        </div>
        <!-- /Create Post Card Bottom -->
      </form>
      <!-- /Barta Create Post Card -->

      <!-- User Specific Posts Feed -->
      <!-- Barta Card -->
      <article
        class="bg-white border-2 border-black rounded-lg shadow mx-auto max-w-none px-4 py-5 sm:px-6">
        <!-- Barta Card Top -->
        <header>
          <div class="flex items-center justify-between">
            <div class="flex items-center space-x-3">
              <!-- User Avatar -->
                  <div class="flex-shrink-0">
                    <img
                      class="h-10 w-10 rounded-full object-cover"
                      src="https://avatars.githubusercontent.com/u/831997"
                      alt="Tony Stark" />
                  </div>
              <!-- /User Avatar -->

              <!-- User Info -->
              <div class="text-gray-900 flex flex-col min-w-0 flex-1">
                <a
                  href="{{ route('profile.show') }}"
                  class="hover:underline font-semibold line-clamp-1">
                  Ahmed Shamim Hasan Shaon
                </a>

                <a
                  href="{{ route('profile.show') }}"
                  class="hover:underline text-sm text-gray-500 line-clamp-1">
                  @me_shaon
                </a>
              </div>
              <!-- /User Info -->
            </div>

            <!-- Card Action Dropdown -->
            <div
              class="flex flex-shrink-0 self-center"
              x-data="{ open: false }">
              <div class="relative inline-block text-left">
                <div>
                  <button
                    @click="open = !open"
                    type="button"
                    class="-m-2 flex items-center rounded-full p-2 text-gray-400 hover:text-gray-600"
                    id="menu-0-button">
                    <span class="sr-only">Open options</span>
                    <svg
                      class="h-5 w-5"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                      aria-hidden="true">
                      <path
                        d="M10 3a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM10 8.5a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM11.5 15.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z"></path>
                    </svg>
                  </button>
                </div>
                <!-- Dropdown menu -->
                <div
                  x-show="open"
                  @click.away="open = false"
                  class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                  role="menu"
                  aria-orientation="vertical"
                  aria-labelledby="user-menu-button"
                  tabindex="-1">
                  <a
                    href="#"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                    role="menuitem"
                    tabindex="-1"
                    id="user-menu-item-0"
                    >Edit</a
                  >
                  <a
                    href="#"
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                    role="menuitem"
                    tabindex="-1"
                    id="user-menu-item-1"
                    >Delete</a
                  >
                </div>
              </div>
            </div>
            <!-- /Card Action Dropdown -->
          </div>
        </header>

        <!-- Content -->
        <a href="./single.html">
          <div class="py-4 text-gray-700 font-normal">
            <p>
              PHP এর $ নিয়ে এত টানাটানি না করে চাইলেই কিন্তু PHP কে fork করে
              PoorPHP নামে নতুন ল্যাঙ্গুয়েজ বানানো যায়।
              <br />
              সবই থাকবে, কেবল $ থাকবে না!
              <br />
              <br />

              আইডিয়াটা কেমন বন্ধুরা? 😁
            </p>
          </div>
        </a>

        <!-- Date Created & View Stat -->
        <div class="flex items-center gap-2 text-gray-500 text-xs my-2">
          <span class="">15 hours ago</span>
          <span class="">•</span>
          <span>4,450 views</span>
        </div>

        <!-- Barta Card Bottom -->
        <footer class="border-t border-gray-200 pt-2">
          <!-- Card Bottom Action Buttons -->
          <div class="flex items-center justify-between">
            <div class="flex gap-8 text-gray-600">
              <!-- Comment Button -->
              <button
                type="button"
                class="-m-2 flex gap-2 text-xs items-center rounded-full p-2 text-gray-600 hover:text-gray-800">
                <span class="sr-only">Comment</span>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="2"
                  stroke="currentColor"
                  class="w-5 h-5">
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z" />
                </svg>

                <p>3</p>
              </button>
              <!-- /Comment Button -->
            </div>
          </div>
          <!-- /Card Bottom Action Buttons -->
        </footer>
        <!-- /Barta Card Bottom -->
      </article>
      <!-- /Barta Card -->
      <!-- User Specific Posts Feed -->
    </main>

    <footer class="shadow bg-black mt-10">
      <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
          <a
            href="https://github.com/alnahian2003"
            class="flex items-center mb-4 sm:mb-0">
            <span
              class="self-center text-2xl font-semibold whitespace-nowrap text-white"
              >Barta</span
            >
          </a>
          <ul
            class="flex flex-wrap items-center mb-6 text-sm font-medium sm:mb-0 text-gray-100">
            <li>
              <a
                href="#"
                class="mr-4 hover:underline md:mr-6"
                >About</a
              >
            </li>
            <li>
              <a
                href="#"
                class="mr-4 hover:underline md:mr-6"
                >Privacy Policy</a
              >
            </li>
            <li>
              <a
                href="#"
                class="mr-4 hover:underline md:mr-6"
                >Licensing</a
              >
            </li>
            <li>
              <a
                href="#"
                class="hover:underline"
                >Contact</a
              >
            </li>
          </ul>
        </div>
        <hr class="my-6 sm:mx-auto border-gray-700 lg:my-8" />
        <span class="block text-sm sm:text-center text-gray-200"
          >© <span x-data x-text="new Date().getFullYear()"></span>
          <a
            href="https://github.com/alnahian2003"
            class="hover:underline"
            >Barta</a
          >. All Rights Reserved.</span
        >
      </div>
    </footer>
  </body>
</html>
