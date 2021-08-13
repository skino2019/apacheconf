<div class="flex flex-row w-full p-4">
    <div class="grid flex-grow w-1/3 h-auto p-4 card bg-base-200 rounded-box place-items-start">

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

            <div class="pt-8 form-control">
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
                <label class="w-1/3 cursor-pointer label justify-items-start">
                    <span class="label-text">Using SSL?</span>
                    <input wire:model="showSsl" type="checkbox" checked="checked" class="toggle toggle-secondary">
                </label>

                @if ($showSsl)

                    <label for="my-modal-ssl" class="mt-4 btn btn-secondary modal-button">Click here for SSL Certificate
                        Information</label>
                    <input type="checkbox" id="my-modal-ssl" class="modal-toggle">
                    <div class="modal">
                        <div class="modal-box">

                            <h2 class="card-title">Enable SSL</h2>
                            <p class="pb-6 text-justify">Before enabeling the config you need to first make sure SSL is
                                working on your server by typing <span class="text-secondary">sudo a2enmod ssl</span> in
                                your terminal</p>

                            <h2 class="card-title">Enable mod_rewrite</h2>
                            <p class="pb-6 text-justify">Before enabeling the config you need to also make sure rewrite
                                is working on your server by typing <span class="text-pinkie-400">sudo a2enmod
                                    rewrite</span> in your terminal</p>

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
                @endif
            </div>



            <div class="flex flex-around">
                <button id="copyBtn"
                    class="flex flex-auto mt-3 mr-1 btn bg-secondary hover:bg-secondary-focus modal-button">Copy to
                    Clipboard</button>
            </div>


            <label for="my-modal-htaccess"
                class="flex flex-auto mt-3 btn bg-secondary hover:bg-secondary-focus modal-button">.htaccess
                Information</label>
            <input type="checkbox" id="my-modal-htaccess" class="modal-toggle">
            <div class="modal">
                <div class="modal-box">
                    <h2 class="card-title">HTACCESS Information</h2>
                    <p class="pb-6 text-justify">In your Laravel Project you will find the HTACCESS file under <span
                            class="font-bold text-white">/public/.htaccess</span><br><br>
                        Replace the existing Laravel .htaccess content with the information below. this will make sure
                        the connections are all correct.
                    </p>
                    <div class="text-xs">
                        <pre>
<code class="text-xs font-semibold text-white">

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
                    <div class="modal-action">
                        <label for="my-modal-htaccess" class="btn btn-secondary">Close Modal</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="divider divider-vertical divide-base-100"></div> --}}
    <div class="grid flex-grow w-2/3 ml-4 card bg-base-200 rounded-box place-items-start text-md">

        <script>
            const code = `
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

                    ErrorLog \${APACHE_LOG_DIR}/error.log
                    CustomLog \${APACHE_LOG_DIR}/access.log combined

                </VirtualHost>

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

                    ErrorLog \${APACHE_LOG_DIR}/error.log
                    CustomLog \${APACHE_LOG_DIR}/access.log combined

                </VirtualHost>
                @endif
            `;
        </script>

        <pre>
            <code id="code"></code>
        </pre>
    </div>

</div>

{{-- <div class="grid justify-center flex-grow w-auto p-4 mx-4 mb-4 card bg-base-200 rounded-box place-items-start text-md">
    <span class="inline-flex justify-center mt-4 sm:ml-auto sm:mt-0 sm:justify-start">
        Built With Laravel, Tailwind, Livewire and of course... Love. Please follow me on Twitter &nbsp; <a
            href="https://twitter.com/skino2020" class="hover:text-secondary" target="_blank"> Skino2020</a>&nbsp; or if you fancy it buy me a coffee <a href="https://www.buymeacoffee.com/skino2020" target="_blank" class="hover:text-secondary">&nbsp;here</a>
    </span>
</div> --}}

{{-- <div class="grid justify-center flex-grow w-auto p-4 mx-4 mb-4 card bg-base-200 rounded-box place-items-start text-md"> --}}
<div class="flex flex-col flex-wrap w-auto p-5 mx-4 mb-4 md:items-center md:flex-row bg-base-200 rounded-box card">
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

