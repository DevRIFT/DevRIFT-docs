<?php

require_once '../docs_header.php';

?>
<!-- left -->
<div
	class="flex flex-col sm:max-w-xs px-8 py-8 items-start justify-start gap-6 border-b sm:border-b-0 sm:border-r border-gray-100">
	<!--<div>
                <input placeholder="search"
                    class="px-4 py-2 rounded-xl text-sm text-gray-900 border border-gray-100 focus:ring-0 focus:outline-none">
            </div>-->

	<div class="flex flex-col gap-2 w-full">
		<div href="https://docs.devrift.co/config"
			class="text-gray-500 inline-flex justify-between items-top w-full hover:text-indigo-600">
			<label class="font-bold">API Configuration</label>

			<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
				stroke="currentColor" stroke-width="2">
				<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
			</svg>
		</div>

		<div class="flex flex-col items-center justify-start max-w-xs text-ellipsis overflow-hidden">
			<a href="https://docs.devrift.co/quick-start"
				class="text-indigo-600 text-sm inline-flex justify-between items-top w-full">
				Setting up your API
			</a>
			<a href="https://docs.devrift.co/api-keys"
				class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
				API Keys
			</a>
			<a href="https://docs.devrift.co/environments"
				class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
				Test Environment
			</a>
			<a href="https://docs.devrift.co/going-live"
				class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
				Going Live
			</a>
			<a href="https://docs.devrift.co/versioning"
				class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
				API Versioning
			</a>

		</div>
	</div>

	<div class="flex flex-col gap-2 w-full">
		<div href="https://docs.devrift.co/authentication"
			class="text-gray-500 inline-flex justify-between items-top w-full">
			<label class="font-bold">Authentication</label>

			<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
				stroke="currentColor" stroke-width="2">
				<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
			</svg>
		</div>

		<div class="flex flex-col items-center justify-start text-ellipsis overflow-hidden">
			<a href="https://docs.devrift.co/authentication/activation-mail"
				class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
				Activation Emails
			</a>
			<a href="https://docs.devrift.co/authentication/mfa"
				class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
				Mutli Factor Authentication (MFA)
			</a>
			<a href="https://docs.devrift.co/authentication/hsm"
				class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
				Integration with Security Keys (HSM)
			</a>
			<a href="https://docs.devrift.co/authentication/sms"
				class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
				SMS with MFA
			</a>
			<a href="https://docs.devrift.co/authentication/mail"
				class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
				Emails with MFA
			</a>
			<a href="https://docs.devrift.co/authentication/dual-mfa"
				class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
				Dual MFA
			</a>
			<a href="https://docs.devrift.co/authentication/custom-mfa"
				class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
				Custom MFA
			</a>

		</div>
	</div>


	<div class="flex flex-col gap-2 w-full">
		<div href="https://docs.devrift.co/prevention"
			class="text-gray-500 inline-flex justify-between items-top w-full hover:text-indigo-600">
			<label class="font-bold">Attack Prevention</label>

			<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
				stroke="currentColor" stroke-width="2">
				<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
			</svg>
		</div>

		<div class="flex flex-col items-center justify-start max-w-xs text-ellipsis overflow-hidden">
			<a href="https://docs.devrift.co/prevention/brute-force"
				class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
				Brute Force Detection (BFD)
			</a>
			<a href="https://docs.devrift.co/prevention/mitm"
				class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
				Man-in-the-Middle Prevention (MITM)
			</a>
			<a href="https://docs.devrift.co/prevention/breach"
				class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
				Prevention of Data Breaches
			</a>
			<!--<a href="#"
						class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
						Title Title Title Title Title Title
					</a>
					<a href="#"
						class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
						Title Title Title Title
					</a>
					<a href="#"
						class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
						Title Title Title Title Title Title
					</a>-->

		</div>
	</div>


	<div class="flex flex-col gap-2 w-full">
		<div href="#" class="text-gray-500 inline-flex justify-between items-top w-full hover:text-indigo-600">
			<label class="font-bold">Logging</label>

			<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
				stroke="currentColor" stroke-width="2">
				<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
			</svg>
		</div>

		<div class="flex flex-col items-center justify-start max-w-xs text-ellipsis overflow-hidden">
			<a href="https://docs.devrift.co/logging/quick-start"
				class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
				Quick Start Guide
			</a>
			<a href="https://docs.devrift.co/logging/sensitive-actions"
				class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
				Logging Sensitive Actions
			</a>
			<a href="https://docs.devrift.co/logging/actions"
				class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
				Logging everything else
			</a>
			<a href="https://docs.devrift.co/logging/usage"
				class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
				Using Logs to Detect Attacks
			</a>
			<a href="https://docs.devrift.co/logging/user-portal"
				class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
				Allowing Users to View Logs
			</a>

		</div>
	</div>
</div>
<!-- doc -->
<div class="flex flex-col shrink gap-6 px-12 py-8">

	<p class="text-xl font-bold">Section Title</p>

	<p class="text-gray-500">
		Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
		egestas.
	</p>

	<div class="bg-gray-100 border border-gray-200 px-2 py-4 text-gray-500 space-x-2 rounded">
		<span>&#9989;</span>
		<span>Pellentesque habitant morbi tristique senectus et netus</span>
	</div>

	<p class="text-gray-500">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
		turpis
		egestas. Vestibulum
		tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas
		semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

	<code class="block whitespace-pre overflow-x-scroll text-gray-500 bg-gray-100 px-2">
			var text = "hello";
			var textAdd = "world";
		</code>


	<div class="bg-gray-100 border border-gray-200 px-2 py-4 text-gray-500 space-x-2 rounded">
		<span>&#9989;</span>
		<span>Pellentesque habitant morbi tristique senectus et netus</span>
	</div>

	<p class="text-gray-500">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
		turpis
		egestas. Vestibulum
		tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas
		semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>


	<p class="text-gray-500">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
		turpis
		egestas. Vestibulum
		tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas
		semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>

	<div class="bg-gray-100 border border-gray-200 px-2 py-4 text-gray-500 space-x-2 rounded">
		<span>&#10060;</span>
		<span>Pellentesque habitant morbi tristique senectus et netus</span>
	</div>


</div>

<!-- right 
		<div class="flex flex-col sm:w-96 px-8 py-8 border-t sm:border-t-0 sm:border-l border-l-gray-100">
			<label class="font-medium text-gray-400">Table of contents</label>

			<div class="flex flex-col items-center justify-start max-w-xs text-ellipsis overflow-hidden">
				<a href="#"
					class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
					Section 1
				</a>
				<a href="#" class="text-gray-500 text-sm inline-flex justify-between items-top w-full text-indigo-600 ">
					Section 2
				</a>
				<a href="#" class="text-gray-500 text-sm inline-flex justify-between items-top w-full text-indigo-600 ">
					Section 3
				</a>
				<a href="#"
					class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
					Section 4
				</a>
				<a href="#"
					class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
					Section 5
				</a>
				<a href="#"
					class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
					Section 6
				</a>
			</div>
		</div>-->
</div>


</body>

</html>