<div class="flex flex-row w-full p-4">
    <div class="grid flex-grow w-1/3 h-auto card bg-base-200 rounded-box place-items-start p-4">

        <div class="card-body">
            <h2 class="card-title">Start building your config</h2>
            <p class="pb-3 text-justify">I have put this together for those like me who have setup their own webhost
                on a private server or VPS.</p>
            <p class="pb-3 text-justify">My aim is to help people setting up their Laravel Applications on there own
                server (but
                this will translate to other frameworks).</p>
            <p class="pb-3 text-justify">
                I will be adding more to this generator as time goes on, so please sign up to the newsletter to keep
                informed.
            </p>

            <div class="justify-end card-actions">
                {{-- <button class="btn btn-secondary">More info</button> --}}
            </div>

            <div class="form-control pt-8">
                {{-- Server Admin --}}
                <label class="label">
                    <span class="label-text">ServerAdmin</span>
                </label>
                <input wire:model="serverAdmin" id="serverAdmin" name="serverAdmin" placeholder="john@doe.com"
                    type="text" class="input input-secondary input-bordered mb-3.5">

                {{-- Server Name --}}
                <label class="label">
                    <span class="label-text">ServerName</span>
                </label>
                <input wire:model="serverName" id="serverName" name="serverName" type="text" placeholder="yoursite.com"
                    class="input input-secondary input-bordered mb-3.5">

                {{-- Server Alias --}}
                <label class="label">
                    <span class="label-text">ServerAlias</span>
                </label>
                <input wire:model="serverAlias" id="serverAlias" name="serverAlias" type="text"
                    placeholder="www.yoursite.com" class="input input-secondary input-bordered mb-3.5">

                {{-- Server Alias --}}
                <label class="label">
                    <span class="label-text">DocumentRoot</span>
                </label>
                <input wire:model="documentRoot" id="documentRoot" name="documentRoot" type="text"
                    placeholder="/var/www/yoursite/public"
                    class="input input-secondary input-bordered mb-3.5">

                {{-- Using SSL --}}
                <label class="cursor-pointer label w-1/3 justify-items-start">
                    <span class="label-text">Using SSL?</span>
                    <input wire:model="showSsl" type="checkbox" checked="checked" class="toggle toggle-secondary">
                </label>

                @if ($showSsl)

{{--                    <label for="my-modal-ssl" class="btn btn-secondary modal-button mt-4">Click here for SSL Certificate--}}
{{--                        Information</label>--}}
{{--                    <input type="checkbox" id="my-modal-ssl" class="modal-toggle">--}}
{{--                    <div class="modal">--}}
{{--                        <div class="modal-box">--}}

{{--                            <h2 class="card-title">Enable SSL</h2>--}}
{{--                            <p class="pb-6 text-justify">Before enabeling the config you need to first make sure SSL is--}}
{{--                                working on your server by typing <span class="text-secondary">sudo a2enmod ssl</span> in--}}
{{--                                your terminal</p>--}}

{{--                            <h2 class="card-title">Enable mod_rewrite</h2>--}}
{{--                            <p class="pb-6 text-justify">Before enabeling the config you need to also make sure rewrite--}}
{{--                                is working on your server by typing <span class="text-secondary">sudo a2enmod--}}
{{--                                    rewrite</span> in your terminal</p>--}}

{{--                            <h2 class="card-title">Certificate Location</h2>--}}
{{--                            <p class="pb-3.5 text-justify">The SSL Certificates can be stored anywhere on the system,--}}
{{--                                however you will need to ensure the right user priviges are supplied so Apache2 can get--}}
{{--                                to them.</p>--}}
{{--                            <p class="text-justify">As standard the location for certificates (On ubuntu) is--}}
{{--                                '/usr/local/share/ca-certificates/', and id recommend using this location for ease.</p>--}}
{{--                            <div class="modal-action">--}}
{{--                                <label for="my-modal-ssl" class="btn btn-secondary">Close Modal</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}



                    {{-- SSL Info --}}
                    <label class="label">
                        <span class="label-text">SSLCertificateFile</span>
                    </label>
                    <input wire:model="certificateFile" id="certificateFile" name="certificateFile" type="text"
                        placeholder="/usr/local/share/ca-certificates/yoursite_domain.cert.pem"
                        class="input input-secondary input-bordered ">

                    <label class="label">
                        <span class="label-text">SSLCertificateKeyFile</span>
                    </label>
                    <input wire:model="certificateKey" id="certificateKey" name="certificateKey" type="text"
                        placeholder="/usr/local/share/ca-certificates/yoursite_private.key.pem"
                        class="input input-secondary input-bordered">

                    <label class="label">
                        <span class="label-text">SSLCertificateChainFile</span>
                    </label>
                    <input wire:model="certificateChain" id="certificateChain" name="certificateChain" type="text"
                        placeholder="/usr/local/share/ca-certificates/yoursite_intermediate.cert.pem"
                        class="input input-secondary input-bordered">
                @endif
            </div>



            <div class="flex flex-around">
                <button onclick="copyToClipboard('#content-copy ~ pre > code')"
                    class="flex flex-auto btn bg-secondary hover:bg-secondary-focus modal-button mt-3">Copy to
                    Clipboard</button>

            </div>


{{--    test    --}}
        <!-- component -->
            <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>



                <!-- Modal -->
                <div x-data="{ showModal : false }" class="flex flex-auto">
                    <!-- Button -->
                    <button @click="showModal = !showModal" class="flex flex-auto btn bg-secondary hover:bg-secondary-focus modal-button mt-3">SSL & htaccess information</button>

                    <!-- Modal Background -->
                    <div x-show="showModal" class="fixed text-gray-500 flex items-center justify-center overflow-auto z-50 bg-secondary-content bg-opacity-20 left-0 right-0 top-0 bottom-0" x-transition:enter="transition ease duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                        <!-- Modal -->
                        <div x-show="showModal" class="bg-base-200 rounded-xl shadow-2xl p-6 sm:w-10/12 mx-10 flex flex-col" @click.away="showModal = false" x-transition:enter="transition ease duration-100 transform" x-transition:enter-start="opacity-0 scale-90 translate-y-1" x-transition:enter-end="opacity-100 scale-100 translate-y-0" x-transition:leave="transition ease duration-100 transform" x-transition:leave-start="opacity-100 scale-100 translate-y-0" x-transition:leave-end="opacity-0 scale-90 translate-y-1">
                            <!-- Title -->
                            <span class="font-bold block text-2xl mb-3">SSL Certificate & HTACCESS Information</span>

                            <div class="flex flex-wrap">
                                <div class="w-full lg:w-1/2 pr-1">
                                    <h1 class="font-bold pb-2">SSL Information</h1>
                                    <p class="text-sm text-justify pr-2">There is a few things which need to happen in order for your certificates and apache configuration to work.</p>
<br>
                                    <h1 class="font-bold pb-2">Enable SSL</h1>
                                    <p class="text-sm text-justify pr-2">Seems like a simple one, but when i first set my server up i forgot.... and spent a few hours trying to figure out why it wasn't working, To enable SSL on your server simply type <span class="text-secondary">sudo a2enmod rewrite</span> in your terminal and your done.</p>
<br>
                                    <h1 class="font-bold pb-1">Enable mod_rewrite</h1>
                                    <p class="text-sm text-justify pr-2">To enable mod_rewrite on your server simply type <span class="text-secondary">sudo a2enmod rewrite</span> in your terminal and your done.</p>

<br>
                                    <h1 class="font-bold pb-1">Certificate Location</h1>
                                    <p class="text-sm text-justify pr-2">The SSL Certificates can be stored anywhere on the system, however you will need to ensure the right user priviges are supplied so Apache2 can get to them. As standard the location for certificates (On ubuntu) is <span class="text-white font-bold">'/usr/local/share/ca-certificates/'</span>, and id recommend using this location for ease.</p>
<br>
                                    <h1 class="font-bold pb-1">Make your Apache2 config</h1>
                                    <p class="text-sm text-justify pr-2">If you have followed the information in this tool you should have no issues at all. Create the Apache2 config file by running the following command in your servers terminal <span class="font-bold text-secondary">sudo nano /etc/apache2/sites-enabled/raspada-blog.co.uk.conf</span>, Substituting raspada-blog.co.uk for your website URL</p>
                                    <br>
                                    <h1 class="font-bold pb-1">Enable your site config</h1>
                                    <p class="text-sm text-justify pr-2">If you have followed the information in this tool you should have no issues at all. Create the Apache2 config file by running the following command in your servers terminal <span class="font-bold text-secondary">sudo nano /etc/apache2/sites-enabled/raspada-blog.co.uk.conf</span>, Substituting raspada-blog.co.uk for your website URL. Paste the generated config into this file and exit out of nano by pressing <span class="font-bold"> "CTRL-X", Selecting Yes to Save and Enter to confirm.</span>
                                    <br>
                                    Now type <span class="text-secondary">a2ensite raspada-blog.co.uk</span> and then <span class="text-secondary">sudo systemctl restart apache2</span>. After that you should be able to navigate to your website.
                                    </p>
                                    <br>

                                </div>
                                <div class="w-full lg:w-1/2 pl-1">
                                    <h1 class="font-bold pb-1">.htaccess Information</h1>
                                    <p class="text-sm pb-1">You only need to Replace the .htaccess in laravel if your adding an SSL Certificate. If your not, leave it alone :) </p>
                                    <p class="text-sm">In your Laravel Project you will find the HTACCESS file under <span
                                            class="text-white font-bold">/public/.htaccess</span><br><br>
                                        Replace the existing Laravel .htaccess content with the information below. this will make sure
                                        the connections are all correct.
                                    </p>

                                    <div class="text-xs">
                        <pre>
<code class="text-xs text-white font-semibold">
&lt;IfModule mod_rewrite.c&gt;
    &lt;IfModule mod_negotiation.c&gt;
        Options -MultiViews -Indexes
    &lt;/IfModule&gt;

    RewriteEngine On

    # Handle Authorization Header
    RewriteCond %{HTTP:Authorization} .
    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]

    # Redirect Trailing Slashes If Not A Folder...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} (.+)/$
    RewriteRule ^ %1 [L,R=301]

    # Send Requests To Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
&lt;/IfModule&gt;

</code>
</pre>
                                    </div>

                                </div>
                            </div>


                            <!-- Buttons -->
                            <div class="text-right space-x-5 mt-5">
                                <button @click="showModal = !showModal" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-none focus:ring-0 font-bold hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo">Cancel</button>
                                <a href="https://www.buymeacoffee.com/skino2020" target="_blank" class="px-4 py-2 text-sm bg-white rounded-xl border transition-colors duration-150 ease-linear border-gray-200 text-gray-500 focus:outline-none focus:ring-0 font-bold hover:bg-gray-50 focus:bg-indigo-50 focus:text-indigo">🍺 Buy me a beer! ☕ or coffee!</a>
                            </div>
                        </div>
                    </div>
                </div>

{{--    test    --}}

{{--            <label for="my-modal-htaccess"--}}
{{--                class="flex flex-auto btn bg-secondary hover:bg-secondary-focus modal-button mt-3">.htaccess--}}
{{--                Information</label>--}}
{{--            <input type="checkbox" id="my-modal-htaccess" class="modal-toggle">--}}
{{--            <div class="modal">--}}
{{--                <div class="modal-box">--}}
{{--                    <h2 class="card-title">HTACCESS Information</h2>--}}
{{--                    <p class="pb-6 text-justify">In your Laravel Project you will find the HTACCESS file under <span--}}
{{--                            class="text-white font-bold">/public/.htaccess</span><br><br>--}}
{{--                        Replace the existing Laravel .htaccess content with the information below. this will make sure--}}
{{--                        the connections are all correct.--}}
{{--                    </p>--}}
{{--                    <div class="text-xs">--}}
{{--                        <pre>--}}
{{--<code class="text-xs text-white font-semibold">--}}

{{--&lt;IfModule mod_rewrite.c&gt;--}}
{{--    &lt;IfModule mod_negotiation.c&gt;--}}
{{--        Options -MultiViews -Indexes--}}
{{--    &lt;/IfModule&gt;--}}

{{--    RewriteEngine On--}}

{{--    # Handle Authorization Header--}}
{{--    RewriteCond %{HTTP:Authorization} .--}}
{{--    RewriteRule .* - [E=HTTP_AUTHORIZATION:%{HTTP:Authorization}]--}}

{{--    # Redirect Trailing Slashes If Not A Folder...--}}
{{--    RewriteCond %{REQUEST_FILENAME} !-d--}}
{{--    RewriteCond %{REQUEST_URI} (.+)/$--}}
{{--    RewriteRule ^ %1 [L,R=301]--}}

{{--    # Send Requests To Front Controller...--}}
{{--    RewriteCond %{REQUEST_FILENAME} !-d--}}
{{--    RewriteCond %{REQUEST_FILENAME} !-f--}}
{{--    RewriteRule ^ index.php [L]--}}
{{--&lt;/IfModule&gt;--}}

{{--</code>--}}
{{--</pre>--}}
{{--                    </div>--}}
{{--                    <div class="modal-action">--}}
{{--                        <label for="my-modal-htaccess" class="btn btn-secondary">Close Modal</label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
    {{-- <div class="divider divider-vertical divide-base-100"></div> --}}
    <div id='post-title' class="grid flex-grow w-2/3 card bg-base-200 rounded-box place-items-start ml-4 text-md">

        <textarea id="content-copy" class="hidden plain-text">

        @if ($showSsl)

    <VirtualHost *:443>

        ServerAdmin {{ $serverAdmin }}
        ServerName {{ $serverName }}
        ServerAlias {{ $serverAlias }}

        DocumentRoot {{ $documentRoot }}

    <Directory {{ $documentRoot }}>

        Options Indexes FollowSymLinks MultiViews
        AllowOverride All
        Order allow,deny
        allow from all

    </Directory>

        SSLEngine on
        SSLCipherSuite EECDH+AESGCM:EDH+AESGCM:AES256+EECDH:AES256+EDH
        SSLProtocol All -SSLv2 -SSLv3 -TLSv1 -TLSv1.1
        SSLHonorCipherOrder On

        SSLCertificateFile {{ $certificateFile }}
        SSLCertificateKeyFile {{ $certificateKey }}
        SSLCertificateChainFile {{ $certificateChain }}

        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined

    </VirtualHost>
            @endif

    <VirtualHost *:80>

        ServerAdmin {{ $serverAdmin }}
        ServerName {{ $serverName }}
        ServerAlias {{ $serverAlias }}

        DocumentRoot {{ $documentRoot }}

    <Directory {{ $documentRoot }}>

        Options Indexes FollowSymLinks MultiViews
        AllowOverride All
        Order allow,deny
        allow from all

    </Directory>

        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined

    </VirtualHost>


        </textarea>



        <pre>
            <code>

                @if ($showSsl)

            &lt;VirtualHost *:443&gt;

                ServerAdmin {{ $serverAdmin }}
                ServerName {{ $serverName }}
                ServerAlias {{ $serverAlias }}

                DocumentRoot {{ $documentRoot }}

            &lt;Directory {{ $documentRoot }}&gt;

                Options Indexes FollowSymLinks MultiViews
                AllowOverride All
                Order allow,deny
                allow from all

            &lt;/Directory&gt;

                SSLEngine on
                SSLCipherSuite EECDH+AESGCM:EDH+AESGCM:AES256+EECDH:AES256+EDH
                SSLProtocol All -SSLv2 -SSLv3 -TLSv1 -TLSv1.1
                SSLHonorCipherOrder On

                SSLCertificateFile {{ $certificateFile }}
                SSLCertificateKeyFile {{ $certificateKey }}
                SSLCertificateChainFile {{ $certificateChain }}

                ErrorLog ${APACHE_LOG_DIR}/error.log
                CustomLog ${APACHE_LOG_DIR}/access.log combined

            &lt;/VirtualHost&gt;
                @endif

            &lt;/VirtualHost *:80&gt;

                ServerAdmin {{ $serverAdmin }}
                ServerName {{ $serverName }}
                ServerAlias {{ $serverAlias }}

                DocumentRoot {{ $documentRoot }}

            &lt;Directory {{ $documentRoot }}&gt;

                Options Indexes FollowSymLinks MultiViews
                AllowOverride All
                Order allow,deny
                allow from all

            &lt;/Directory>

                ErrorLog ${APACHE_LOG_DIR}/error.log
                CustomLog ${APACHE_LOG_DIR}/access.log combined

            &lt;/VirtualHost&gt;


            </code>
        </pre>
    </div>

</div>

<div class="flex flex-col w-auto flex-wrap p-5 md:items-center md:flex-row bg-base-200 rounded-box card mb-4 mx-4">
    <a href="/" class="pr-2 lg:pr-8 lg:px-6 focus:outline-none">
      <div class="inline-flex items-center">
        <div class="w-2 h-2 p-2 mr-2 rounded-full bg-gradient-to-tr from-blue-500 to-blue-600">
        </div>
        <h2 class="block p-2 text-xl font-medium tracking-tighter text-black transition duration-500 ease-in-out transform cursor-pointer hover:text-blueGray-500 lg:text-x lg:mr-8"> Apache Conf </h2>
      </div>
    </a>
<div>
    Built With Laravel, Tailwind, Livewire and of course... Love. Please follow me on Twitter &nbsp; <a
    href="https://twitter.com/skino2020" class="hover:text-secondary" target="_blank"> Skino2020</a>&nbsp; or if you fancy it buy me a coffee <a href="https://www.buymeacoffee.com/skino2020" target="_blank" class="hover:text-secondary">&nbsp;here</a>
</div>
    <span class="inline-flex justify-center mt-2 mr-2 sm:ml-auto sm:mt-0 sm:justify-start">

      <a href="https://twitter.com/skino2020" target="_blank" class="ml-3 text-blue-500 hover:text-secondary">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
          </path>
        </svg>
      </a>

    </span>
  </div>

