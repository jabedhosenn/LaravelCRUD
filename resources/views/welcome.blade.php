{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <style type="text/tailwindcss">
        @layer utilities {
            .container {
                @apply px-10 mx-auto;
            }
        }


        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        header {
            background-color: #6200ea;
            color: white;
            padding: 1rem 2rem;
            text-align: center;
        }

        header h1 {
            margin: 0;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 2rem auto;
        }

        .blog-post {
            background: white;
            margin-bottom: 2rem;
            padding: 1rem;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .blog-post h2 {
            margin: 0 0 0.5rem;
        }

        .blog-post p {
            margin: 0.5rem 0;
            line-height: 1.6;
        }

        .blog-post .read-more {
            display: inline-block;
            margin-top: 0.5rem;
            color: #6200ea;
            text-decoration: none;
            font-weight: bold;
        }

        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 1rem;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
    <title>Laravel - CRUD</title>
</head>

<body>
    <header>
        <h1>Welcome to My Blog</h1>
        <p>Sharing thoughts, ideas, and stories</p>
    </header>
    <div class="container">
        <div class="flex justify-between my-5">
            <h1 class="text-red-500 text-xl font-bold">Home</h1>

            <a href="/create" class="bg-green-600 text-white rounded py-2 px-4">Add New Post</a>
        </div>
        @if (@session('success'))
            <h2 class="text-green-600">{{ session('success') }}</h2>
        @endif
    </div>

    <div class="container">
        <div class="blog-post">
            <h2>Post Title 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent viverra nec neque vel luctus.</p>
            <a href="#" class="read-more">Read More...</a>
        </div>

        <div class="blog-post">
            <h2>Post Title 2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent viverra nec neque vel luctus.</p>
            <a href="#" class="read-more">Read More...</a>
        </div>

        <div class="blog-post">
            <h2>Post Title 3</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent viverra nec neque vel luctus.</p>
            <a href="#" class="read-more">Read More...</a>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 My Blog. All Rights Reserved.</p>
    </footer>

</body>

</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
    <title>Laravel - CRUD</title>
</head>

<body class="bg-gray-100 text-gray-800 flex flex-col min-h-screen">

    <!-- Header -->
    <header class="bg-purple-700 text-white text-center py-6">
        <h1 class="text-4xl font-bold">Welcome to My Blog</h1>
        <p class="mt-2 text-lg font-medium">Sharing thoughts, ideas, and stories</p>
    </header>

    <!-- Main Content -->
    <main class="container max-w-5xl mx-auto mt-8 px-4 flex-grow">
        <!-- Top Bar -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-red-500">Home</h1>
            <a href="/create"
                class="bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg py-2 px-5 transition">
                Add New Post
            </a>
        </div>

        <!-- Success Message -->
        @if (@session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6" role="alert">
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <div class="py-3">
            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Id
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                            Name</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                            Description</th>
                                        <th scope="col"
                                            class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Image
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr class="odd:bg-white even:bg-gray-100">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                {{ $post->id }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                {{ $post->name }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                {{ $post->description }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800"><img
                                                    src="images/{{ $post->image }}" width="80px" alt=""></td>
                                            <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            <div class="justify-between">
                                                    <!-- Edit Button -->
                                                <button type="button"
                                                    class="px-4 py-2 text-sm font-medium text-blue-600 border border-blue-600 rounded-md hover:bg-blue-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-blue-300 transition-all">
                                                    <a href="{{ route('edit', $post->id) }}">Edit</a>
                                                </button>

                                            <!-- Delete Button -->
                                            <form method="post" action="{{route('delete', $post->id)}}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="px-4 py-2 text-sm font-medium text-red-600 border border-red-600 rounded-md hover:bg-red-600 hover:text-white focus:outline-none focus:ring-2 focus:ring-red-300 transition-all">Delete</button>
                                            </form>
                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            {{$posts->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-4 bottom-0 w-full">
        <p>&copy; 2024 My Blog. All Rights Reserved.</p>
    </footer>

</body>

</html>
