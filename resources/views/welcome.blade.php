<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ralph Cajipe</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-gray-100 flex items-center justify-center min-h-screen p-4">
    <div class="w-full max-w-4xl bg-white rounded-lg shadow-lg p-8">
        <!-- Profile Section -->
        <div class="flex flex-col md:flex-row items-center gap-6 mb-8">
            <div class="w-48 h-48 overflow-hidden rounded-full">
                <img src="{{ asset('images/ralfumi.jpg') }}" alt="Profile Picture" class="w-full h-full object-cover">
            </div>

            <div class="text-center md:text-left">
                <h1 class="text-4xl font-bold text-gray-900 mb-2">Ralph Cajipe</h1>
                <p class="text-xl text-gray-600 italic mb-4">I develop AI and web software and deploy them to production
                </p>

                <!-- Social Links -->
                <div class="flex gap-4 justify-center md:justify-start">
                    <!-- LinkedIn -->
                    <a href="https://www.linkedin.com/in/ralphcajipe/" class="text-gray-600 hover:text-gray-900">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M19 0h-14c-2.76 0-5 2.24-5 5v14c0 2.76 2.24 5 5 5h14c2.76 0 5-2.24 5-5v-14c0-2.76-2.24-5-5-5zm-11 19h-3v-10h3v10zm-1.5-11.25c-.97 0-1.75-.78-1.75-1.75s.78-1.75 1.75-1.75 1.75.78 1.75 1.75-.78 1.75-1.75 1.75zm13.5 11.25h-3v-5.5c0-1.1-.9-2-2-2s-2 .9-2 2v5.5h-3v-10h3v1.5c.9-1.35 2.5-2.25 4.5-2.25 2.76 0 5 2.24 5 5v5.75z" />
                        </svg>
                    </a>
                    <!-- GitHub -->
                    <a href="https://github.com/ralphcajipe" class="text-gray-600 hover:text-gray-900">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                        </svg>
                    </a>
                    <!-- Email -->
                    <a href="mailto:ralphcajipe@gmail.com" class="text-gray-600 hover:text-gray-900">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 12.713l-11.985-9.713h23.97l-11.985 9.713zm-5.425-1.822l-6.575-5.329v12.501l6.575-7.172zm10.85 0l6.575 7.172v-12.501l-6.575 5.329zm-1.557 1.261l-3.868 3.135-3.868-3.135-8.11 8.848h23.956l-8.11-8.848z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Timeline Section -->
        <div class="space-y-4">
            <!-- DOST - ASTI -->
            <div class="flex flex-col md:flex-row gap-4">
                <div class="flex-shrink-0 w-24 text-left md:text-right text-gray-500">2023-2024</div>
                <div class="flex-grow border-l-2 border-gray-300 pl-4 pb-4">
                    <div class="flex items-center gap-4 mb-2">
                        <div class="w-12 h-12 flex-shrink-0">
                            <img src="{{ asset('images/DOST-ASTI-Logo-RGB.png') }}" alt="Company Logo"
                                class="w-full h-full object-contain">
                        </div>
                        <div>
                            <p class="text-gray-600 text-xs md:text-sm lg:text-base">I was an Artificial Intelligence
                                Intern for Philippines' <a href="https://asti.dost.gov.ph/"
                                    class="text-blue-500 underline hover:underline">Department of Science and Technology
                                    - Advanced Science and Technology Institute</a>, where I contributed to the Research
                                and Development Division's <a href="https://youtu.be/nD-Ttj9jy5c?si=9KarBaHhgjyzvm3M"
                                    class="text-blue-500 underline hover:underline">Project ROAMER (Robot for Optimized
                                    and Autonomous Mission-Enhancement Response)</a>. This involved developing a smart
                                robot capable of detecting banana plant diseases. This includes in-house data labeling,
                                neural network training, the science of making it work, and deployment in production
                                running on our AI supercomputer. Today, it aims to advance agricultural diagnostics,
                                supporting farmers with early disease detection for healthier crops.</p>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-4 mt-4">
                        <!-- Left Image Container -->
                        <div class="w-full md:w-1/2">
                            <img src="{{ asset('images/roamer.png') }}" alt="Left Image"
                                class="w-full h-full object-cover">
                        </div>
                        <!-- Right Image Container (Collage) -->
                        <div class="w-full md:w-1/2 grid grid-cols-2 gap-2">
                            <img src="{{ asset('images/banana-disease.png') }}" alt="Collage Image 1"
                                class="w-full h-48 object-cover">
                            <img src="{{ asset('images/ppt.png') }}" alt="Collage Image 2"
                                class="w-full h-48 object-cover">
                            <img src="{{ asset('images/yolo.png') }}" alt="Collage Image 3"
                                class="w-full object-cover col-span-2">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Invisible Hand Inc. -->
            <div class="flex flex-col md:flex-row gap-4">
                <div class="flex-shrink-0 w-24 text-left md:text-right text-gray-500"></div>
                <div class="flex-grow border-l-2 border-gray-300 pl-4 pb-4">
                    <div class="flex items-center gap-4 mb-2">
                        <div class="w-12 h-12 flex-shrink-0">
                            <img src="{{ asset('images/invisible.png') }}" alt="Company Logo"
                                class="w-full h-full object-contain">
                        </div>
                        <div>
                            <p class="text-gray-600 text-xs md:text-sm lg:text-base">I was a Web Developer Intern at <a
                                    href="https://www.facebook.com/invisiblehandinc"
                                    class="text-blue-500 underline hover:underline">Invisible Hand Inc.</a>, where I
                                developed and maintained a web application called <a
                                    href="https://talacargosolutions.com/one-crystal"
                                    class="text-blue-500 underline hover:underline">One Crystal Logistics</a>. Today, it
                                provides trucking and customs brokerages service that caters to the need of handful
                                importers in cleaning air freight and sea freight shipments from the Bureau of Customs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FEU Tech timeline -->
            <div class="flex flex-col md:flex-row gap-4">
                <div class="flex-shrink-0 w-24 text-left md:text-right text-gray-500">2019-2024</div>
                <div class="flex-grow border-l-2 border-gray-300 pl-4 pb-4">
                    <div class="flex items-center gap-4 mb-2">
                        <div class="w-12 h-12 flex-shrink-0">
                            <img src="{{ asset('images/FEU_Tech_official_seal.png') }}" alt="Company Logo"
                                class="w-full h-full object-contain">
                        </div>
                        <div>
                            <p class="text-gray-600 text-xs md:text-sm lg:text-base">BSc Computer Science at FEU
                                Institute of Technology with a major in Software Engineering. I transferred here to
                                continue my degree and this is where I specialized on AI/machine learning and web
                                applications.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Wesleyan University-Philippines timeline -->
            <div class="flex flex-col md:flex-row gap-4">
                <div class="flex-shrink-0 w-24 text-left md:text-right text-gray-500">2018-2019</div>
                <div class="flex-grow border-l-2 border-gray-300 pl-4 pb-4">
                    <div class="flex items-center gap-4 mb-2">
                        <div class="w-12 h-12 flex-shrink-0">
                            <img src="{{ asset('images/wup.png') }}" alt="Company Logo"
                                class="w-full h-full object-contain">
                        </div>
                        <div>
                            <p class="text-gray-600 text-xs md:text-sm lg:text-base">BSc Computer Science at Wesleyan
                                University-Philippines. I spent one year studying here, this is where I first got into
                                software development such as web applications and algorithms.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Useful Projects Section -->
        <div class="bg-gray-200 rounded-lg shadow-lg p-4 md:p-8 mt-8">
            <h2 class="text-xl md:text-2xl font-bold text-gray-900 mb-4">useful projects</h2>
            <div class="space-y-4">
                <!-- Project Item -->
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-grow p-2 md:pl-4 md:pb-4">
                        <div class="flex items-start gap-4 mb-2">
                            <div class="w-12 h-12 flex-shrink-0">
                                <img src="{{ asset('images/video-lens.png') }}" alt="Company Logo"
                                    class="w-full h-full object-contain">
                            </div>
                            <div>
                                <p class="text-gray-600 text-xs md:text-sm lg:text-base">I developed <a
                                        href="https://github.com/starkproj"
                                        class="text-blue-500 underline hover:underline">Video Lens</a>, an AI web
                                    application because I was tired of endlessly scrubbing through videos for the right
                                    information. It leverages Natural Language Processing (NLP) and Computer Vision with
                                    deep learning foundation models to make life easier. Its four features—searching in
                                    video, transcription, summarization, and topic detection—ensure you find exactly
                                    what you need without breaking a sweat.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add more project items as needed -->

                <!-- Pasig -->
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-grow p-2 md:pl-4 md:pb-4">
                        <div class="flex items-start gap-4 mb-2">
                            <div class="w-12 h-12 flex-shrink-0 text-3xl">
                                🏠
                            </div>
                            <div>
                                <p class="text-gray-600 text-xs md:text-sm lg:text-base">I created <a
                                        href="https://github.com/ralphcajipe/pasig-house-prices-prediction"
                                        class="text-blue-500 underline hover:underline">Pasig House Prices
                                        Prediction</a> because window-shopping for houses in Pasig City made me wonder
                                    if I could predict the prices better than the ads. Using real estate data from
                                    Kaggle, I trained models with TensorFlow Decision Forests and Simple ML for Sheets,
                                    leveraging Gradient Boosted Trees as the backbone. To make it useful, I built a web
                                    app where users can input property details and instantly get an estimated
                                    price—because why not turn guessing into science?</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earthquake -->
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-grow p-2 md:pl-4 md:pb-4">
                        <div class="flex items-start gap-4 mb-2">
                            <div class="w-12 h-12 flex-shrink-0 text-3xl">
                                🌍
                            </div>
                            <div>
                                <p class="text-gray-600 text-xs md:text-sm lg:text-base">Okay, here's <a
                                        href="https://github.com/ralphcajipe/earthquake-world-map"
                                        class="text-blue-500 underline hover:underline">Global Earthquake Data
                                        Visualization</a> because I wanted to see if the planet’s tantrums could fit on
                                    a single map. Using Python and Plotly, it fetches data from the United States
                                    Geological Survey, processes earthquake details like magnitude and location from a
                                    JSON file, and generates an interactive world map. Earthquakes are neatly
                                    categorized by their Richter scale magnitudes—because even chaos deserves a bit of
                                    order.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image Colorizer -->
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-grow p-2 md:pl-4 md:pb-4">
                        <div class="flex items-start gap-4 mb-2">
                            <div class="w-12 h-12 flex-shrink-0 text-3xl">
                                <img src="{{ asset('images/colorizer.png') }}" alt="Company Logo"
                                    class="w-full h-full object-contain">
                            </div>
                            <div>
                                <p class="text-gray-600 text-xs md:text-sm lg:text-base"><a
                                        href="https://github.com/ralphcajipe/image-colorizer#readme"
                                        class="text-blue-500 underline hover:underline">Image Colorizer</a> takes
                                    black-and-white photos and asks, “What if history wasn’t so... gray?” Using
                                    DeOldify’s deep learning model, this desktop app lets you pick an image, slap some
                                    color on it, and save the results—because even your great-grandparents deserve to
                                    pop on Instagram.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- International Space Station Tracker -->
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-grow p-2 md:pl-4 md:pb-4">
                        <div class="flex items-start gap-4 mb-2">
                            <div class="w-12 h-12 flex-shrink-0 text-3xl">
                                🛰️
                            </div>
                            <div>
                                <p class="text-gray-600 text-xs md:text-sm lg:text-base"><a
                                        href="https://github.com/ralphcajipe/International-Space-Station-Tracker"
                                        class="text-blue-500 underline hover:underline">International Space Station
                                        Tracker</a> lets you keep tabs on the ISS as it orbits Earth—because why not
                                    know when the space station is overhead? Using the Open Notify API, it tracks the
                                    ISS in real-time, so you can impress your friends with your space knowledge—no
                                    rocket required. HAHA!</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ECHO -->
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-grow p-2 md:pl-4 md:pb-4">
                        <div class="flex items-start gap-4 mb-2">
                            <div class="w-12 h-12 flex-shrink-0 text-3xl">
                                <img src="{{ asset('images/echo-logo.png') }}" alt="Company Logo"
                                    class="w-full h-full object-contain">
                            </div>
                            <div>
                                <p class="text-gray-600 text-xs md:text-sm lg:text-base">In the age of AI, every good
                                    developer should know how to build their own chatbot—because who doesn’t want to
                                    have a conversation with a machine? <a
                                        href="https://github.com/ralphcajipe/echo-ai"
                                        class="text-blue-500 underline hover:underline">ECHO</a> is an AI chatbot built
                                    to offer helpful, creative, and surprisingly friendly responses. It’s a simple web
                                    app that uses the OpenAI API to generate human-like replies, so you can have a chat
                                    with a bot that’s almost too polite.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Featured Writing Section -->
        <div class="bg-white rounded-lg shadow-lg p-4 md:p-8 mt-8">
            <h2 class="text-xl md:text-2xl font-bold text-gray-900 mb-4">featured writing</h2>
            <p class="text-gray-600 text-sm md:text-base mb-4">Here are some of my short blogs on Medium:</p>
            <div class="space-y-2">
                <div>
                    <p class="text-gray-600 text-sm md:text-base">Feb 2022 - <a
                            href="https://medium.com/@computeralph/the-age-of-a-i-a6766679d453"
                            class="text-blue-500 underline hover:underline">The Age of A.I.</a></p>
                </div>
                <div>
                    <p class="text-gray-600 text-sm md:text-base">Feb 2022 - <a
                            href="https://medium.com/@computeralph/path-to-a-free-self-taught-education-in-computer-science-9ee6a0b79fb1"
                            class="text-blue-500 underline hover:underline">Path to a free self-taught education in
                            Computer Science</a></p>
                </div>
                <!-- Add more writing items as needed -->
            </div>
        </div>

        <!-- Research Section -->
        <div class="bg-gray-200 rounded-lg shadow-lg p-4 md:p-8 mt-8">
            <h2 class="text-xl md:text-2xl font-bold text-gray-900 mb-4">research</h2>
            <div class="space-y-4">
                <!-- Research Item -->
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-grow border-l-4 border-gray-400 pl-4">
                        <div class="mb-2">
                            <p class="text-lg font-semibold text-sm md:text-base">
                                <a href="https://www.researchgate.net/publication/379037487_Video_Content_Analysis_through_Computer_Vision_and_Natural_Language_Processing"
                                    class="text-blue-500 underline hover:underline">Video Content Analysis through
                                    Computer Vision and Natural Language Processing</a>
                                <span class="text-green-500">2023</span>
                            </p>
                            <p class="text-red-700 text-sm md:text-base">Ralph Cajipe, Charles Santos, Kyle Español,
                                Sally Segundo Jr., Kyle Baltazar</p>
                        </div>
                    </div>
                </div>
                <!-- Add more research items as needed -->
            </div>
        </div>

        <!-- Contact Form Section -->
        <div class="bg-white rounded-lg shadow-lg p-4 md:p-8 mt-8">
            <h2 class="text-xl md:text-2xl font-bold text-gray-900 mb-4">message me</h2>
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm md:text-base">Name</label>
                    <input type="text" id="name" name="name" class="w-full px-3 py-2 border rounded-lg"
                        required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm md:text-base">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-3 py-2 border rounded-lg"
                        required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-gray-700 text-sm md:text-base">Message</label>
                    <textarea id="message" name="message" class="w-full px-3 py-2 border rounded-lg" rows="5" required></textarea>
                </div>
                <div>
                    <button type="submit"
                        class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-700">Send</button>
                </div>
            </form>
        </div>
        <!-- Add more research items as needed -->
    </div>
    </div>
    </div>
</body>

</html>
