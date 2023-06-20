<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      @keyframes bounce {
        0%,
        100% {
          transform: translateY(-25%);
          animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
        }
        50% {
          transform: translateY(0);
          animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
        }
      }

    .card-container {
      display: flex;
      overflow-x: auto;
      padding-bottom: 1rem;
      scrollbar-width: thin;
    }

    .card {
      flex: 0 0 auto;
      width: 400px;
      margin-right: 1rem;
      white-space: normal;
    }
  </style>

  </head>
  <body>
    <section class="bg-gray-900 text-white">
      <div class="mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-screen lg:items-center">
        <div class="mx-auto max-w-3xl text-center">
          <h1 class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-transparent text-3xl font-extrabold  sm:text-8xl transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-125 hover:bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-transparent duration-500">Hello!
            <span class="sm:block bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-transparent transition ease-in-out delay-200 hover:-translate-y-2 hover:scale-150 hover:bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-transparent duration-1000"> I'm Askar </span>
          </h1>

          <p class="mx-auto mt-4 max-w-xl sm:text-xl/relaxed">
          The name "Askar" embodies qualities of strength, bravery, and a readiness to engage in battle or strive for victory in all aspects of life. It evokes an image of an individual with unwavering determination and a relentless spirit, poised to overcome challenges and face adversity head-on.
          </p>

          <div class="mt-8">
            <a href="#knowmore">
              <button class="px-4 py-2 font-semibold text-sm bg-blue-500 text-white rounded-md shadow-sm hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 ease-in-out delay-150 duration-300">
                Know More
              </button>
            </a>
          </div>
          
          <div class="flex justify-center animate-bounce mt-20">
          <a href="#knowmore">
            <div class="w-6 h-6 border-b-2 border-r-2 transform rotate-45"></div>
          </a>

          </div>
        </div>
      </div>
    </section>

    <!-- profile -->
    <!-- component -->
    <div id="knowmore" class="flex flex-wrap md items-center h-screen">
      <div class="bg-white w-full md:w-1/2 h-screen">
        
        <!-- kiri -->
        <div class="mx-32">

          <h1 class="text-6xl font-bold mt-16 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-transparent">
            Profile
          </h1>

          <div class="flex mt-10 font-light text-gray-500">

            <!-- country -->
            <div class="pr-4">
              <span class="uppercase">Country</span>
              <p class="text-3xl text-gray-900 font-semibold pt-2">🇮🇩</p>
            </div>
            <!-- region -->
            <div class="pr-4 ml-6">
              <span class="uppercase">Region</span>
              <p class="text-2xl text-gray-900 font-semibold pt-2">
                Yogyakarta
              </p>
            </div>

          </div>

          <!-- description -->
          <div class="description w-full md:max-w-screen-xl mt-10 text-gray-500 text-2sm">
            <p>
              Hey there, I'm Askar D Fathin, but you can just call me Askar. I'm
              a Jakarta-born explorer with a passion for all things tech and an
              insatiable desire to try new things. As the older brother in my
              family, I've always felt a sense of responsibility to set a good
              example and lead the way in everything I do. 🧶🐱
              <br /><br />
              I've recently made the exciting decision to switch gears from my
              former studies in building construction and sanitation to pursue a
              degree in Software Engineering Technology at Gadjah Mada
              University in Yogyakarta. It's a big change, but I'm ready to dive
              in and see where this new path takes me. 🤩🔥
              <br /><br />
              My ultimate dream is to become a software engineer and use my
              skills to create innovative solutions that make a positive impact
              on the world. But hey, who says I can't also be a kickass teacher
              or a successful bakery owner on the side? 🧑🏻‍💻👨🏻‍🏫🧑🏻‍🍳
              <br /><br />
              So that's a little bit about me, Askar: explorer, tech enthusiast,
              and lover of all things. <br />
              Nice to meet you! ✨⚡️
            </p>
          </div>
          <!-- text read more -->
          <a href="#readmore">
          <button class="uppercase mt-5 text-sm font-semibold hover:underline">
            read more
          </button>
          </a>

        </div>
      </div>

      <!-- kanan -->
      <div class="w-full md:w-1/2 h-full">
        <img
          src="https://i.ibb.co/yV6tDt0/IMG-8483.jpg"
          alt="IMG-8483"
          class="h-full w-full object-cover"
        />
      </div>
    </div>
    

    <div>
  <div id="readmore" class="bg-white mx-auto grid gap-x-8 gap-y-20 px-6 xl:grid-cols-2 p-24 sm:p-32 min-h-screen flex justify-center items-center">
    <div class="text-center">
      <h3 class="font-thin italic text-2xl text-gray-400 py-3">Daffa Askar Fathin</h3>
      <h1 class="font-extrabold text-4xl">Software Engineering Student at <br>Gadjah Mada University</h1>
      <h4 class="text-gray-400 py-3">Interested in Web Development</h4>
    </div>

    <div>
      <h1 class="-ml-[10px] font-bold text-3xl">Education</h1>
      <ol class="border-l border-neutral-300 dark:border-neutral-500">
        
        <!--First item-->
        <li>
          <div class="flex-start flex items-center pt-3">
            <div class="-ml-[5px] mr-3 h-[9px] w-[9px] rounded-full bg-neutral-300"></div>
            <p class="text-sm text-gray-500">
              2022--Present
            </p>
          </div>
          <div class="mb-6 ml-4 mt-2">
            <h4 class="text-xl font-semibold">Software Engineering Technology</h4>
            <h3 class="mb-2 text-lg text-gray-500">Gadjah Mada University</h3>
          </div>
        </li>

        <!--Second item-->
        <li>
          <div class="flex-start flex items-center pt-3">
            <div class="-ml-[5px] mr-3 h-[9px] w-[9px] rounded-full bg-neutral-300"></div>
            <p class="text-sm text-gray-500">
              2017--2021
            </p>
          </div>
          <div class="mb-6 ml-4 mt-2">
            <h4 class="text-xl font-semibold">Civil Engineering</h4>
            <h3 class="mb-2 text-lg text-gray-500">Pembangaunan Jakarta Vocational Highschool</h3>
            <p class="mb-3 text text-gray-900"></p>
          </div>
        </li>
      </ol>

      <!-- Student Activities -->
      <h1 class="-ml-[10px] font-bold text-3xl">Student Activities</h1>
      <ol class="border-l border-neutral-300 dark:border-neutral-500">
        <!-- 1 -->
        <li>
          <div class="flex-start flex items-center pt-3">
            <div class="-ml-[5px] mr-3 h-[9px] w-[9px] rounded-full bg-neutral-300"></div>
            <p class="text-sm text-gray-500">2023--Present</p>
          </div>
          <div class="mb-6 ml-4 mt-2">
            <h4 class="text-xl font-semibold">PPSMB PIONIR</h4>
            <h3 class="mb-2 text-lg text-gray-500">Gadjah Mada University</h3>
          </div>
        </li>
        <!-- 2 -->
        <li>
          <div class="flex-start flex items-center pt-3">
            <div class="-ml-[5px] mr-3 h-[9px] w-[9px] rounded-full bg-neutral-300"></div>
            <p class="text-sm text-gray-500">
              2022--Present
            </p>
          </div>
          <div class="mb-6 ml-4 mt-2">
            <h4 class="text-xl font-semibold">Penalaran Center Community</h4>
            <h3 class="mb-2 text-lg text-gray-500">Gadjah Mada University</h3>
          </div>
        </li>
        <!-- 3 -->
        <li>
          <div class="flex-start flex items-center pt-3">
            <div class="-ml-[5px] mr-3 h-[9px] w-[9px] rounded-full bg-neutral-300"></div>
            <p class="text-sm text-gray-500">2022--Present</p>
          </div>
          <div class="mb-6 ml-4 mt-2">
            <h4 class="text-xl font-semibold">NETCLUB</h4>
            <h3 class="mb-2 text-lg text-gray-500">SV GMU</h3>
          </div>
        </li>
        <!-- 4 -->
        <li>
          <div class="flex-start flex items-center pt-3">
            <div class="-ml-[5px] mr-3 h-[9px] w-[9px] rounded-full bg-neutral-300"></div>
            <p class="text-sm text-gray-500">2022--Present</p>
          </div>
          <div class="mb-6 ml-4 mt-2">
            <h4 class="text-xl font-semibold">Association of Software Engineering Student</h4>
            <h3 class="mb-2 text-lg text-gray-500">SV GMU</h3>
          </div>
        </li>
      </ol>
    </div>
  </div>
</div>
  </div>

    <!-- skills -->
  <div class="bg-gray-900 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="max-w-2xl mx-auto">
        <h2 class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-transparent font-bold tracking-tight text-4xl sm:text-5xl">
          Meet Askar's Skills
        </h2>
        <p class="mt-6 text-lg text-white">
          Askar has several skills in programming languages, here are the skills.
        </p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-16 justify-center">
        <?php require 'skill.php'; ?>
      </div>
    </div>
  </div>


<!-- Komentar -->  
<div class="mx-auto ml-24 mb-16">
  <h1 class="text-6xl font-bold mt-8 mb-8 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-transparent">
    Comments
  </h1>
  <div class="card-container">
  <?php require 'getComments.php'; ?>
  </div>
</div>

    <!-- formulir -->
    <section class="bg-gray-100">
      <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-x-16 gap-y-8 lg:grid-cols-5">
          <div class="lg:col-span-2 lg:py-12">
            <p class="max-w-xl text-lg">
              Communication is essential, as it allows for expressions of
              impressions, conveyance of emotions, and guidance through
              mistakes, fostering understanding and growth.
            </p>

            <div class="mt-8">
              <a href="https://wa.me/088801395527 " class="text-2xl font-bold text-indigo-600">
                088801395527 
              </a>
              <a href="https://www.instagram.com/askaref" class="text-1xl font-semibold text-indigo-200">
                @askaref
              </a>
              <a href="mailto:daffaaskarfathin@mail.ugm.ac.id" class="text-1xl font-semibold text-gray-400">
                daffaaskarfathin@mail.ugm.ac.id
              </a>


              <address class="mt-2 not-italic">Yogyakarta, Karanggayam</address>
            </div>
          </div>

          <div class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12">
            <form
              id="orderForm"
              action="comment.php"
              method="post"
              class="space-y-4"
            >
              <div>
                <label class="sr-only" for="name">Name</label>
                <input
                  class="w-full rounded-lg border-indigo-600 p-3 text-sm"
                  placeholder="Name"
                  type="text"
                  id="name"
                  name="name"
                  required
                />
              </div>

              <div>
                <label class="sr-only" for="status">Status</label>
                <input
                  class="w-full rounded-lg border-indigo-600 p-3 text-sm"
                  placeholder="Status"
                  type="status"
                  id="status"
                  name="status"
                  required
                />
              </div>

              <div>
                <label class="sr-only" for="title">Title</label>
                <input
                  class="w-full rounded-lg border-indigo-600 p-3 text-sm"
                  placeholder="Title"
                  type="title"
                  id="title"
                  name="title"
                  required
                />
              </div>

              <div>
                <label class="sr-only" for="message">Message</label>

                <textarea
                  class="w-full rounded-lg border-indigo-600 p-3 text-sm"
                  placeholder="Message"
                  rows="8"
                  id="message"
                  name="message"
                  required
                ></textarea>
              </div>

              <div class="mt-4">
                <button
                  type="submit"
                  class="toggle-btn inline-block w-full rounded-lg bg-black px-5 py-3 font-medium text-white sm:w-auto"
                >
                  Send Comment
                </button>
              </div>
                </form>
              </div>
        </div>
      </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="panggiljs.js"></script>
    <script>
    $(document).ready(function() {
      var form = $('#orderForm');

      form.submit(function(event) {
        event.preventDefault(); 

        $.ajax({
          type: form.attr('method'),
          url: form.attr('action'),
          data: form.serialize(),
          success: function() {
            window.location.reload(true);
          }
        });
      });
    });
    </script>

  </body>
</html>