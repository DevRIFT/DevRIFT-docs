<?php

require_once '../../docs_header.php';

?>
<!-- left -->
<div
	class="flex flex-col sm:max-w-xs px-8 py-8 items-start justify-start gap-6 border-b sm:border-b-0 sm:border-r border-gray-100">
	<!--<div>
				<input placeholder="search"
					class="px-4 py-2 rounded-xl text-sm text-gray-900 border border-gray-100 focus:ring-0 focus:outline-none">
			</div>-->

	<div class="flex flex-col gap-2 w-full">
		<div href="https://docs.devrift.co/config" class="text-gray-500 inline-flex justify-between items-top w-full">
			<label class="font-bold">API Configuration</label>

			<svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
				stroke="currentColor" stroke-width="2">
				<path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
			</svg>
		</div>

		<div class="flex flex-col items-center justify-start max-w-xs text-ellipsis overflow-hidden">
			<a href="https://docs.devrift.co/quick-start"
				class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
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
				class="text-indigo-600 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
				Prevention of Data Breaches
			</a>
			<a href="https://docs.devrift.co/prevention/halt"
				class="text-gray-500 text-sm inline-flex justify-between items-top w-full hover:text-indigo-600 ">
				Using HALT to stop Attacks
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
<!-- Paid Feature Tag
<span class="inline-flex items-center justify-center rounded-full bg-amber-100 px-2.5 py-0.5 text-amber-700">
	<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
		class="-ml-1 mr-1.5 h-4 w-4">
		<path stroke-linecap="round" stroke-linejoin="round"
			d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
	</svg>

	<p class="whitespace-nowrap text-sm">Paid Feature</p>
</span>
-->
<!-- Free Feature Tag
<span class="inline-flex items-center justify-center rounded-full bg-emerald-100 px-2.5 py-0.5 text-emerald-700">
	<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
		stroke="currentColor" class="-ml-1 mr-1.5 h-4 w-4">
		<path stroke-linecap="round" stroke-linejoin="round"
			d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
	</svg>
	<p class="whitespace-nowrap text-sm">Free Feature</p>
</span>
<span class="inline-flex items-center justify-center rounded-full bg-gradient-to-r via-purple-100 from-pink-100 to-amber-100 px-2.5 py-0.5 text-purple-700">
	<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
		stroke="currentColor" class="-ml-1 mr-1.5 h-4 w-4">
		<path stroke-linecap="round" stroke-linejoin="round"
			d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
	</svg>
	<p class="whitespace-nowrap text-sm">New Feature</p>
</span>

<span
	class="inline-flex items-center justify-center rounded-full bg-transparent border-solid border-2 border-black px-2.5 py-0.5 text-black">
	<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
		stroke="currentColor" class="-ml-1 mr-1.5 h-4 w-4">
		<path stroke-linecap="round" stroke-linejoin="round"
			d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
	</svg>
	<p class="whitespace-nowrap text-sm">Enterprise Feature</p>
</span>
-->

<!-- doc -->
<div class="flex flex-col shrink gap-6 px-12 py-8">

	<div>
		<p class="text-xl font-bold inline-flex">Prevention of Data Breaches&nbsp;</p>

		<span
			class="inline-flex items-center justify-center rounded-full bg-emerald-100 px-2.5 py-0.5 text-emerald-700">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
				stroke="currentColor" class="-ml-1 mr-1.5 h-4 w-4">
				<path stroke-linecap="round" stroke-linejoin="round"
					d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
			</svg>
			<p class="whitespace-nowrap text-sm">Free Feature</p>
		</span>
		<span
			class="inline-flex items-center justify-center rounded-full bg-black bg-opacity-80 px-2.5 py-0.5 text-white">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
				stroke="currentColor" class="-ml-1 mr-1.5 h-4 w-4">
				<path stroke-linecap="round" stroke-linejoin="round"
					d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
			</svg>
			<p class="whitespace-nowrap text-sm">Enterprise Feature</p>
		</span>
	</div>

	<p class="text-gray-500">
		Data Breach Prevention is a feature of DevRIFT <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-700 via-purple-700 to-blue-700">automagically</span> enabled in all accounts, Enterprise accounts have
		additional functionality with <a href="https://docs.devrift.co/prevention/halt" target="_blank"
			class="text-indigo-500"><strong>HALT</strong></a>. 
			
		<br>DevRIFT Security will notify you if a Data Breach has
		happened and will immediately suspend your Application to prevent further issues.
	</p>

	<div class="bg-blue-100 border-l-4 border-blue-500 text-blue-700 p-4" role="info">
		<p class="font-bold">Info</p>
		<p>
			Free & Premium Accounts don't need to set anything up, in the event DevRIFT notices a Data Breach, we'll
			suspend your Applciation and notify you.
			<br>
			This is because the API is set up in such a way that if Data is being leaked, it is likely that it is a
			problem on our end.
		</p>
	</div>

	<div class="bg-white bg-opacity-80 border-l-4 border-black text-black p-4" role="feature">
		<p class="font-bold">Enterprise Functionality Feature</p>
		<p>
			DevRIFT Enterprise allows for additional functionality. Enterprises can set-up Data Breach Prevention to
			stop Data from being leaked when they use custom templates. See
			<a href="https://docs.devrift.co/prevention/halt" target="_blank"
				class="text-indigo-500"><strong>HALT</strong></a> for more information.
		</p>
	</div>

	<p class="text-xl font-bold inline-flex">Enterprise Functionality Setup&nbsp;</p>

	<div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4" role="info">
		<p class="font-bold">Warning</p>
		<p>
			We haven't built this feature yet, but we're working on it. If you're interested in this feature, please let us know!
			<br>
			<a href="mailto:support@devrift.co"
				class="text-indigo-500"><strong>support@devrift.co</strong></a>
		</p>
	</div>

	<a class="inline-flex items-center rounded border border-indigo-600 bg-indigo-600 px-8 py-3 text-white hover:bg-indigo-700 hover:text-white focus:outline-none focus:ring active:text-indigo-500"
		href="https://docs.devrift.co/prevention/halt">
		<span class="text-sm font-medium"> Next: Attack Prevention | Using HALT </span>

		<svg class="ml-3 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
			stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
		</svg>
	</a>

</div>

</div>


</body>

</html>