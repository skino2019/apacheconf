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
                    placeholder="/var/www/yoursite/public --- Add modal here for more info"
                    class="input input-secondary input-bordered mb-3.5">

                {{-- Using SSL --}}
                <label class="cursor-pointer label w-1/3 justify-items-start">
                    <span class="label-text">Using SSL?</span>
                    <input type="checkbox" checked="0" class="toggle toggle-secondary">
                </label>

                <div class="my-4 label-text-alt text-white">If using SSL show next 3 inputs else dont</div>

                <label for="my-modal-ssl" class="btn btn-secondary modal-button">Click here for SSL Certificate
                    Information</label>
                <input type="checkbox" id="my-modal-ssl" class="modal-toggle">
                <div class="modal">
                    <div class="modal-box">

                        <h2 class="card-title">Enable SSL</h2>
                        <p class="pb-6 text-justify">Before enabeling the config you need to first make sure SSL is
                            working on your server by typing <span class="text-secondary">sudo a2enmod ssl</span> in
                            your terminal</p>

                        <h2 class="card-title">Certificate Location</h2>
                        <p class="pb-3.5 text-justify">The SSL Certificates can be stored anywhere on the system,
                            however you will need to ensure the right user priviges are supplied so Apache2 can get
                            to them.</p>
                        <p class="text-justify">As standard the location for certificates (On ubuntu) is
                            '/usr/local/share/ca-certificates/', and id recommend using this location for ease.</p>
                        <div class="modal-action">
                            <label for="my-modal-ssl" class="btn btn-secondary">Close Modal</label>
                        </div>
                    </div>
                </div>


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
            </div>
            <div class="flex flex-auto">
                <button class="btn btn-secondary w-1/2 mt-6 px-2">Copy to Clipboard</button>
                <button class="btn btn-secondary w-1/2 mt-6 ml-2">Download Config</button>
            </div>

            <!-- Modal -->
            <div x-data="{ showModal : false }">
                <!-- Button -->
                <button @click="showModal = !showModal"
                    class="btn btn-secondary w-full mt-6 px-2 transition-colors duration-150 ease-linear  focus:text-indigo items-center">Laravel
                    HTACCESS</button>

                <!-- Modal Background -->
                <div x-show="showModal"
                    class="fixed text-gray-500 flex items-center justify-center overflow-auto z-50 bg-black bg-opacity-40 left-0 right-0 top-0 bottom-0"
                    x-transition:enter="transition ease duration-300" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="transition ease duration-300"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                    <!-- Modal -->
                    <div x-show="showModal" class="bg-base-200 rounded-xl shadow-2xl p-6 sm:w-10/12 mx-10"
                        @click.away="showModal = false" x-transition:enter="transition ease duration-100 transform"
                        x-transition:enter-start="opacity-0 scale-90 translate-y-1"
                        x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                        x-transition:leave="transition ease duration-100 transform"
                        x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                        x-transition:leave-end="opacity-0 scale-90 translate-y-1">
                        <!-- Title -->
                        {{-- <span class="font-bold block text-2xl mb-3">Fuji Recipe - Closed Beta 📷</span> --}}
                        <!-- Body Text -->

                        <div class="mb-5 mt-5">

                            <section class="text-blueGray-700 ">
                                <div class="container flex flex-col items-center px-5 py-8 mx-auto lg:px-24">
                                    <div>
                                        <div class="flex flex-wrap py-8 md:flex-nowrap">
                                            <div class="flex flex-col flex-shrink-0 px-4 mb-6 md:w-64 md:mb-0">
                                                <div class="text-xl">HTACCESS File</div>
                                                <div class="text-xs">Laravel</div>
                                                <span
                                                    class="mt-1 text-xs font-normal leading-relaxed text-blueGray-700 text-justify">In
                                                    your Laravel Project you will find the HTACCESS file under <span
                                                        class="text-secondary">/public/.htaccess</span><br><br>
                                                    Replace the existing Laravel .htaccess content with the information on the right. this will make sure the connections are all correct.</span>
                                            </div>
                                            <div class="md:flex-grow">
                                                <p
                                                    class="mb-8 text-base text-justify font-medium leading-relaxed text-white">
                                                <pre><code>
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
                                                </p>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                        <!-- Buttons -->
                        <div class="text-right space-x-5 mt-5">
                            <button @click="showModal = !showModal"
                                class="px-4 py-2 text-sm bg-secondary rounded-lg transition-colors duration-150 ease-linear text-white focus:outline-none focus:ring-0 font-bold hover:bg-secondary-focus focus:bg-secondary-focus focus:text-indigo">Close</button>
                        </div>
                    </div>
                </div>
            </div>


            {{-- Modal End --}}

        </div>
    </div>
    {{-- <div class="divider divider-vertical divide-base-100"></div> --}}
    <div class="grid flex-grow w-2/3 card bg-base-200 rounded-box place-items-start ml-4">
        <pre>
            <code>

        &lt;VirtualHost *:80&gt;
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

            ErrorLog ${APACHE_LOG_DIR}/error.log
            CustomLog ${APACHE_LOG_DIR}/access.log combined

        &lt;/VirtualHost&gt;

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
            </code>
        </pre>
    </div>
</div>
