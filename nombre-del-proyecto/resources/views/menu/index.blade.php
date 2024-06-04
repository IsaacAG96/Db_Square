<x-app-layout>
    <div class="container mt-5 flex-grow">
        <div class="flex justify-center">
            <div class="p-6 lg:p-8 grid grid-cols-1 gap-6 mt-6 w-full max-w-7xl">
                <div class="bg-white shadow-md rounded-lg p-4 lg:p-10 mx-auto w-full">
                    <!-- Migas de pan -->
                    <nav class="mb-4 text-sm text-gray-700" aria-label="Breadcrumb">
                        <ol class="list-none p-0 inline-flex">
                            <li class="flex items-center">
                                <a href="{{ route('inicio') }}" class="text-blue-500 hover:text-blue-700">Inicio</a>
                                <svg class="fill-current w-3 h-3 mx-3" viewBox="0 0 320 512">
                                    <path d="M285.5 272H12c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h273.5c4.7 0 9.2-2.7 11.3-7l96-176c3.9-7.1 1-15.8-6.2-19.8l-14.6-8.2c-7.2-4.1-15.9-1-19.8 6.2l-96 176c-2.1 4.3-6.6 7-11.3 7z"/>
                                </svg>
                            </li>
                            <li class="flex items-center">
                                <a href="{{ route('menu.index') }}" class="text-blue-500 hover:text-blue-700">Menú de Opciones</a>
                                <svg class="fill-current w-3 h-3 mx-3" viewBox="0 0 320 512">
                                    <path d="M285.5 272H12c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h273.5c4.7 0 9.2-2.7 11.3-7l96-176c3.9-7.1 1-15.8-6.2-19.8l-14.6-8.2c-7.2-4.1-15.9-1-19.8 6.2l-96 176c-2.1 4.3-6.6 7-11.3 7z"/>
                                </svg>
                            </li>
                            <li class="flex items-center">
                                <span class="text-gray-700">Menú de Opciones</span>
                            </li>
                        </ol>
                    </nav>
                    <!-- Fin de migas de pan -->

                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">Menú de Opciones</h3>
                    <a href="{{ url('/menu/gestionar') }}" class="block bg-gray-100 py-4 px-12 rounded hover:bg-indigo-400 transition duration-150 mb-4">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="ms-1 w-5 h-5">
                                <path fill="#d3d3d3" d="M24,18.586c0,1.068-.416,2.072-1.172,2.828l-1.414,1.414c-.755,.756-1.76,1.172-2.828,1.172s-2.073-.416-2.829-1.172l-2.69-2.69c-.391-.391-.391-1.023,0-1.414s1.023-.391,1.414,0l2.69,2.69c.756,.756,2.073,.756,2.829,0l1.414-1.414c.378-.378,.586-.88,.586-1.414s-.208-1.036-.586-1.414l-1.931-1.932-1.415,1.414c-.391,.391-1.023,.391-1.414,0s-.391-1.023,0-1.414l2.122-2.121c.391-.391,1.023-.391,1.414,0l2.638,2.639c.756,.755,1.172,1.759,1.172,2.828ZM3.862,10.933c.195,.195,.451,.293,.707,.293s.512-.098,.707-.293c.391-.391,.391-1.023,0-1.414l-2.69-2.69c-.378-.378-.586-.88-.586-1.414s.208-1.036,.586-1.414l1.414-1.414c.756-.756,2.073-.756,2.829,0l1.932,1.932-1.415,1.414c-.391,.391-.391,1.023,0,1.414s1.023,.391,1.414,0l2.122-2.121c.188-.188,.293-.441,.293-.707s-.105-.52-.293-.707l-2.639-2.639C6.732-.34,4.097-.34,2.586,1.172l-1.414,1.414c-.756,.756-1.172,1.76-1.172,2.828s.416,2.073,1.172,2.828l2.69,2.69ZM22.925,6.269L6.95,22.242c-1.132,1.134-2.639,1.758-4.242,1.758H1c-.552,0-1-.447-1-1v-1.708c0-1.603,.624-3.109,1.757-4.242L17.731,1.075c1.431-1.431,3.761-1.433,5.193,0,1.431,1.432,1.431,3.762,0,5.193Zm-5.2,2.371l-2.365-2.365L3.171,18.464c-.755,.756-1.171,1.76-1.171,2.828v.708h.708c1.069,0,2.073-.416,2.828-1.172l12.19-12.189Zm3.785-6.15c-.652-.652-1.712-.651-2.365,0l-2.371,2.371,2.365,2.365,2.371-2.371c.651-.652,.651-1.713,0-2.365Z" />
                            </svg>
                            <h2 class="ms-3 text-m font-semibold text-gray-600">
                                Gestionar Tablas
                            </h2>
                        </div>
                    </a>
                    <a href="#" class="block bg-gray-100 py-4 px-12 rounded hover:bg-gray-300 transition duration-150 mb-4">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="ms-1 w-5 h-5">
                                <path fill="#d3d3d3" d="m19,0H5C2.243,0,0,2.243,0,5v14c0,2.757,2.243,5,5,5h14c2.757,0,5-2.243,5-5V5c0-2.757-2.243-5-5-5Zm3,19c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V5c0-1.654,1.346-3,3-3h14c1.654,0,3,1.346,3,3v14Zm-9-3c0,.552-.448,1-1,1h-1c-.552,0-1-.448-1-1s.448-1,1-1h1c.552,0,1,.448,1,1Zm0-8c0,.552-.448,1-1,1h-1c-.552,0-1-.448-1-1s.448-1,1-1h1c.552,0,1,.448,1,1Zm7,8.5c0,1.381-1.119,2.5-2.5,2.5s-2.5-1.119-2.5-2.5,1.119-2.5,2.5-2.5,2.5,1.119,2.5,2.5Zm.47-9.171c.072.197.013.419-.148.554l-1.183.964.489,1.396c.067.202,0,.424-.169.553-.169.129-.4.138-.578.023l-1.377-.897-1.354.906c-.084.056-.181.084-.278.084-.106,0-.211-.033-.3-.1-.17-.127-.241-.348-.177-.55l.47-1.413-1.189-.967c-.16-.136-.218-.357-.146-.553.072-.197.26-.328.469-.328h1.5l.531-1.49c.073-.196.26-.325.469-.325s.396.13.469.325l.531,1.49h1.5c.21,0,.398.131.47.329Zm-13.97,8.671c-.828,0-1.5-.672-1.5-1.5s.672-1.5,1.5-1.5,1.5.672,1.5,1.5-.672,1.5-1.5,1.5Zm-1.5-9.5c0-.828.672-1.5,1.5-1.5s1.5.672,1.5,1.5-.672,1.5-1.5,1.5-1.5-.672-1.5-1.5Zm3.978,4.043c.09.222-.108.457-.375.457h-4.205c-.268,0-.466-.235-.375-.457.366-.899,1.333-1.543,2.478-1.543s2.112.644,2.478,1.543Zm0,8c.09.222-.108.457-.375.457h-4.205c-.268,0-.466-.235-.375-.457.366-.899,1.333-1.543,2.478-1.543s2.112.644,2.478,1.543Z" />
                            </svg>
                            <h2 class="ms-3 text-m font-semibold text-gray-600">
                                Crear Tablas
                            </h2>
                        </div>
                    </a>
                    <a href="{{ url('/menu/importar') }}" class="block bg-gray-100 py-4 px-12 rounded hover:bg-indigo-400 transition duration-150 mb-4">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="ms-1 w-5 h-5">
                                <path fill="#d3d3d3" d="M.061,10.293h0c.162-1.135,.485-2.239,.962-3.281l2.729,1.248s0,0,0,.001h0c-.357,.78-.599,1.606-.72,2.455h0s0,0,0,0L.061,10.294s0,0,0,0ZM7.074,4.427l-1.624-2.522c-.962,.62-1.83,1.372-2.58,2.238l2.267,1.965c.563-.65,1.215-1.215,1.938-1.68ZM3.75,15.738h0c-.357-.78-.599-1.606-.72-2.455h0s0,0,0,0L.061,13.706s0,0,0,0h0c.162,1.135,.485,2.239,.962,3.281l2.729-1.248s0,0,0-.001Zm1.387,2.154l-2.267,1.965c.75,.866,1.618,1.618,2.58,2.238l1.624-2.522c-.722-.465-1.374-1.03-1.938-1.68ZM12,0c-1.164,0-2.317,.167-3.427,.497l.854,2.875c.833-.247,1.699-.372,2.573-.372,4.962,0,9,4.037,9,9s-4.038,9-9,9c-.875,0-1.74-.125-2.573-.372l-.854,2.875c1.11,.33,2.263,.497,3.427,.497,6.617,0,12-5.383,12-12S18.617,0,12,0Zm1.5,18v-7h4l-4.636-4.531c-.477-.477-1.251-.477-1.728,0l-4.636,4.531h4v7h3Z" />
                            </svg>
                            <h2 class="ms-3 text-m font-semibold text-gray-600">
                                Importar Tablas
                            </h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
