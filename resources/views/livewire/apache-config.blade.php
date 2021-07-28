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
                <input wire:model="serverAdmin"  id="serverAdmin" name="serverAdmin" placeholder="john@doe.com" type="text" class="input input-secondary input-bordered mb-3.5">

                {{-- Server Name --}}
                <label class="label">
                    <span class="label-text">ServerName</span>
                </label>
                <input wire:model="serverName" id="serverName" name="serverName"  type="text" placeholder="yoursite.com" class="input input-secondary input-bordered mb-3.5">

                {{-- Server Alias --}}
                <label class="label">
                    <span class="label-text">ServerAlias</span>
                </label>
                <input wire:model="serverAlias" id="serverAlias" name="serverAlias" type="text" placeholder="www.yoursite.com"
                    class="input input-secondary input-bordered mb-3.5">

                {{-- Server Alias --}}
                <label class="label">
                    <span class="label-text">DocumentRoot</span>
                </label>
                <input wire:model="documentRoot" id="documentRoot" name="documentRoot" type="text" placeholder="/var/www/yoursite/public --- Add modal here for more info"
                    class="input input-secondary input-bordered mb-3.5">

                {{-- Using SSL --}}
                <label class="cursor-pointer label w-1/3 justify-items-start">
                    <span class="label-text">Using SSL?</span>
                    <input type="checkbox" checked="0" class="toggle toggle-secondary">
                </label>

                <div class="my-4 label-text-alt text-secondary">If using SSL show next 3 inputs else dont</div>

                <label for="my-modal-ssl" class="btn btn-secondary modal-button">Click here for SSL Certificate
                    Information</label>
                <input type="checkbox" id="my-modal-ssl" class="modal-toggle">
                <div class="modal">
                    <div class="modal-box">

                        <h2 class="card-title">Enable SSL</h2>
                        <p class="pb-6 text-justify">Before enabeling the config you need to first make sure SSL is working on your server by typing <span class="text-secondary">sudo a2enmod ssl</span> in your terminal</p>

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
                <input wire:model="certificateFile" id="certificateFile" name="certificateFile" type="text" placeholder="/usr/local/share/ca-certificates/yoursite_domain.cert.pem"
                    class="input input-secondary input-bordered ">

                <label class="label">
                    <span class="label-text">SSLCertificateKeyFile</span>
                </label>
                <input wire:model="certificateKey" id="certificateKey" name="certificateKey" type="text" placeholder="/usr/local/share/ca-certificates/yoursite_private.key.pem"
                    class="input input-secondary input-bordered">

                <label class="label">
                    <span class="label-text">SSLCertificateChainFile</span>
                </label>
                <input wire:model="certificateChain" id="certificateChain" name="certificateChain" type="text" placeholder="/usr/local/share/ca-certificates/yoursite_intermediate.cert.pem"
                    class="input input-secondary input-bordered">
            </div>
            <button class="btn btn-secondary w-full mt-6">Copy config to Clipboard</button>
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
