<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Proyecto Laravel</title>
    <!-- Cargar Tailwind desde el CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <fieldset aria-label="Pricing plans" class="relative -space-y-px rounded-md bg-white">
        <label aria-label="Startup" aria-description="$29 per month, $290 per year, Up to 5 active job postings" class="group flex cursor-pointer flex-col border border-gray-200 p-4 first:rounded-tl-md first:rounded-tr-md last:rounded-bl-md last:rounded-br-md focus:outline-none has-[:checked]:relative has-[:checked]:border-indigo-200 has-[:checked]:bg-indigo-50 md:grid md:grid-cols-3 md:pl-4 md:pr-6">
          <span class="flex items-center gap-3 text-sm">
            <input name="pricing-plan" value="Startup" type="radio" checked class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden [&:not(:checked)]:before:hidden">
            <span class="font-medium text-gray-900 group-has-[:checked]:text-indigo-900">Startup</span>
          </span>
          <span class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
            <span class="font-medium text-gray-900 group-has-[:checked]:text-indigo-900">$29 / mo</span>
            <span class="text-gray-500 group-has-[:checked]:text-indigo-700">($290 / yr)</span>
          </span>
          <span class="ml-6 pl-1 text-sm text-gray-500 group-has-[:checked]:text-indigo-700 md:ml-0 md:pl-0 md:text-right">Up to 5 active job postings</span>
        </label>
        <label aria-label="Business" aria-description="$99 per month, $990 per year, Up to 25 active job postings" class="group flex cursor-pointer flex-col border border-gray-200 p-4 first:rounded-tl-md first:rounded-tr-md last:rounded-bl-md last:rounded-br-md focus:outline-none has-[:checked]:relative has-[:checked]:border-indigo-200 has-[:checked]:bg-indigo-50 md:grid md:grid-cols-3 md:pl-4 md:pr-6">
          <span class="flex items-center gap-3 text-sm">
            <input name="pricing-plan" value="Business" type="radio" class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden [&:not(:checked)]:before:hidden">
            <span class="font-medium text-gray-900 group-has-[:checked]:text-indigo-900">Business</span>
          </span>
          <span class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
            <span class="font-medium text-gray-900 group-has-[:checked]:text-indigo-900">$99 / mo</span>
            <span class="text-gray-500 group-has-[:checked]:text-indigo-700">($990 / yr)</span>
          </span>
          <span class="ml-6 pl-1 text-sm text-gray-500 group-has-[:checked]:text-indigo-700 md:ml-0 md:pl-0 md:text-right">Up to 25 active job postings</span>
        </label>
        <label aria-label="Enterprise" aria-description="$249 per month, $2490 per year, Unlimited active job postings" class="group flex cursor-pointer flex-col border border-gray-200 p-4 first:rounded-tl-md first:rounded-tr-md last:rounded-bl-md last:rounded-br-md focus:outline-none has-[:checked]:relative has-[:checked]:border-indigo-200 has-[:checked]:bg-indigo-50 md:grid md:grid-cols-3 md:pl-4 md:pr-6">
          <span class="flex items-center gap-3 text-sm">
            <input name="pricing-plan" value="Enterprise" type="radio" class="relative size-4 appearance-none rounded-full border border-gray-300 bg-white before:absolute before:inset-1 before:rounded-full before:bg-white checked:border-indigo-600 checked:bg-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 disabled:border-gray-300 disabled:bg-gray-100 disabled:before:bg-gray-400 forced-colors:appearance-auto forced-colors:before:hidden [&:not(:checked)]:before:hidden">
            <span class="font-medium text-gray-900 group-has-[:checked]:text-indigo-900">Enterprise</span>
          </span>
          <span class="ml-6 pl-1 text-sm md:ml-0 md:pl-0 md:text-center">
            <span class="font-medium text-gray-900 group-has-[:checked]:text-indigo-900">$249 / mo</span>
            <span class="text-gray-500 group-has-[:checked]:text-indigo-700">($2490 / yr)</span>
          </span>
          <span class="ml-6 pl-1 text-sm text-gray-500 group-has-[:checked]:text-indigo-700 md:ml-0 md:pl-0 md:text-right">Unlimited active job postings</span>
        </label>
      </fieldset>
      
</body>
</html>